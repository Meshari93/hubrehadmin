<?php
namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManager as Images;
use Image;
use Storage;
use DB;
use App\Section;
use App\Property;
use App\Price;
use App\Serf;
use App\Picture;
use Illuminate\Http\Request;
class SectionController extends Controller {
    public function __construct() {
        $this->middleware('auth');
    }
    public function rules() {
        $rules = ['name' => 'required|max:255', ];
        foreach ($this->request->get('items') as $key => $val) {
            $rules['items.' . $key] = 'required|max:10';
        }
        return $rules;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create() {
        $section_id = NULL;
        return view('property.section.create', compact('section_id'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request) {
        $validatedData = $request->validate(['name' => 'required|string|max:100', 'room_num' => 'required|integer', 'capacity' => 'required|integer', 'property_id' => 'required|integer', 'typical_day' => 'required|integer', 'weekend' => 'required|integer', 'feast' => 'required|integer', 'file1.*.image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', ]);
        $section = new Section;
        $section->name = $request->name;
        $section->room_num = $request->room_num;
        $section->capacity = $request->capacity;
        $section->property_id = $request->property_id;
         $section->save();

        $sectionprise_id = $section->id;
        $sectionprise = new Price;
        $sectionprise->typical_day = $request->typical_day;
        $sectionprise->weekend = $request->weekend;
        $sectionprise->feast = $request->feast;
        $sectionprise->section_id = $sectionprise_id;
        $sectionprise->save();

        $sectionserves = $request->serves;
        $section->serves()->attach($sectionserves);
        $i = 0;
        $sectionimage = new Picture;
        if ($request->hasFile('file1')) {
            foreach ($request->file1 as $imagename) {
                if ($i > 11) {break;}
                $i = $i + 1;
                $img = 'picture' . $i;
                // $imagename  = $request->file1[0];
                $filename = $request->property_id .'-'. $sectionprise_id . '-'. time() . $i . '.' . $imagename->getClientOriginalExtension();
                // $image = Image::make($imagename)->resize(400, 300)->stream();
                Storage::disk('s3')->put('public/' . $filename, $imagename->__toString(), '\public');
                   $sectionimage->$img = $filename;
            }
        } else {
            $filename = 'avatar.png';
        }
        $sectionimage->section_id = $sectionprise_id;
        $sectionimage->save();

         $property_id = $request->property_id;
        DB::table('properties')->whereId($property_id)->increment('num_section');
        // return back()->with('flash_message', '');
        return redirect('property/' . $property_id)->with('flash_message', 'Section added!');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id) {
        $section = Section::findOrFail($id);
        return view('property.section.show', compact('section'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id) {
        $section = Section::findOrFail($id);
        $section_id = $section->property_id;
         $serves = Serf::select('id', 'type', 'serves')->orderBy('type', 'desc')->get();
        $rer = $section->serves;
        $servessection = array();
        $servid = array();
        foreach ($rer as $key) {
            $servessection[] = $key->id;
        }
        $idservessection = array();
        foreach ($servessection as $key) {
            foreach ($serves as $idserv) {
                if ($key == $idserv->id) {
                    $idservessection[] = $idserv;
                }
            }
        }
        foreach ($serves as $idserv) {
            $servid[] = $idserv->id;
        }
        $result = array_diff($servid, $servessection);
        $servesID = array_unique($result);
        $idserves = array();
        foreach ($servesID as $key) {
            foreach ($serves as $idserv) {
                if ($key == $idserv->id) {
                    $idserves[] = $idserv;
                }
            }
        }
        return view('property.section.edit', compact('section', 'section_id', 'idserves', 'idservessection'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id) {
        $validatedData = $request->validate(['name' => 'required|string|max:100', 'room_num' => 'required|integer|max:1000000', 'capacity' => 'required|integer|max:1000000', 'property_id' => 'required|integer|max:1000000', 'typical_day' => 'required|integer|max:100000000', 'weekend' => 'required|integer|max:100000000', 'feast' => 'required|integer|max:100000000', 'file1.*.image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', ]);
        // $requestData = $request->all();
        $requestsection = $request->only(['name', 'room_num', 'capacity']);
        $section = Section::findOrFail($id);
        $section->update($requestsection);
        $sectionprise = $request->only(['typical_day', 'weekend', 'feast']);
        $prise = Price::where('section_id', '=', $id);
        $prise->update($sectionprise);
        $filename = $request->only(['file1']);
        $i = 0;
        $sectionimage = Picture::where('section_id', '=', $id);
        if ($request->hasFile('file1')) {
            foreach ($request->file1 as $imagename) {
                if ($i > 11) {
                    break;
                }
                $i = $i + 1;
                $img = 'picture' . $i;
                $filename = time() . $i . '.' . $imagename->getClientOriginalExtension();
                // $image = Image::make($imagename)->resize(400, 300)->stream();
                Storage::disk('s3')->put('public/' . $filename, $imagename->__toString(), '\public');

                 $sectionimage = Picture::where('section_id', '=', $id)->update([$img => $filename]);
            }
        }
        $serves_id = $request->get('serves');
        // $section->serves()->updateExistingPivot($id, $serves_id);
        $section->serves()->sync((array)$serves_id);
        // $section->serves($serves_id) ;
        // dd($filename);
        // $sectionprise = Price::findOrFail($section_id);
        return redirect('property/' . $section->property_id)->with('flash_message', 'Section updated!');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id) {
        Section::destroy($id);
        return back()->with('flash_message', 'Section deleted!');
        // return redirect('section')->with('flash_message', 'Section deleted!');

    }
}
