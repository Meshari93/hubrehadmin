<?php
namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Image;
use Storage;
use App\Picture;
use App\Property;
use App\Serf;
use Auth;
use Illuminate\Http\Request;
class PropertyController extends Controller {
    public function __construct() {
        $this->middleware('auth');
    }
    // &&

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request) {
        $keyword = $request->get('search');
        $authid = Auth::user()->id;
        $perPage = 25;
        if (auth()->user()->hasRole('admin')) {
            if (!empty($keyword)) {
                $property = Property::where('name', 'LIKE', "%$keyword%")->orWhere('id', 'LIKE', "%$keyword%")
                    ->orWhere('type', 'LIKE', "%$keyword%")->orWhere('phon_num_one', 'LIKE', "%$keyword%")
                    ->orWhere('phon_num_two', 'LIKE', "%$keyword%")->orWhere('poryorty', 'LIKE', "%$keyword%")
                    ->orWhere('time_entry', 'LIKE', "%$keyword%")->orWhere('time_out', 'LIKE', "%$keyword%")
                    ->orWhere('status', 'LIKE', "%$keyword%")->orWhere('evaluation', 'LIKE', "%$keyword%")
                    ->orWhere('describstion', 'LIKE', "%$keyword%")->orWhere('num_section', 'LIKE', "%$keyword%")
                    ->paginate($perPage);
            } else {
                $property = Property::paginate($perPage);
            }
        } else {
            if (!empty($keyword)) {
                $property = Property::where([['name', 'LIKE', "%$keyword%"], ['user_id', '=', "$authid"], ])
                  ->orWhere([['id', 'LIKE', "%$keyword%"], ['user_id', '=', "$authid"], ])
                  ->orWhere([['type', 'LIKE', "%$keyword%"], ['user_id', '=', "$authid"], ])
                  ->orWhere([['phon_num_one', 'LIKE', "%$keyword%"], ['user_id', '=', "$authid"], ])
                  ->orWhere([['phon_num_two', 'LIKE', "%$keyword%"], ['user_id', '=', "$authid"], ])
                  ->orWhere([['poryorty', 'LIKE', "%$keyword%"], ['user_id', '=', "$authid"], ])
                  ->orWhere([['time_entry', 'LIKE', "%$keyword%"], ['user_id', '=', "$authid"], ])
                  ->orWhere([['time_out', 'LIKE', "%$keyword%"], ['user_id', '=', "$authid"], ])
                  ->orWhere([['status', 'LIKE', "%$keyword%"], ['user_id', '=', "$authid"], ])
                  ->orWhere([['evaluation', 'LIKE', "%$keyword%"], ['user_id', '=', "$authid"], ])
                  ->orWhere([['describstion', 'LIKE', "%$keyword%"], ['user_id', '=', "$authid"], ])
                  ->orWhere([['num_section', 'LIKE', "%$keyword%"], ['user_id', '=', "$authid"], ])
                  ->paginate($perPage);
            } else {
                $property = Property::where('user_id', '=', "$authid")->paginate($perPage);
            }
        }
        return view('property.property.index', compact('property'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create() {
        return view('property.property.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request) {
        $validatedData = $request->validate(['name' => 'required|string|max:191',
         'type' => 'required|string|max:191|min:5', 'phon_num_one' => 'required|string', 'phon_num_two' => 'string', 'time_entry' => 'required|string', 'time_out' => 'required|string', 'describstion' => 'required|string|max:500', 'image' => 'required|image|mimes:jpeg,jpg,png,gif|max:2048', ]);
        $property = new Property;
        $property->name = $request->name;
        if (Auth::user()->hasRole('admin')) {
            $property->user_id = $request->user_id;
        } else {
            $property->user_id = Auth::user()->id;
        }
        $property->type = $request->type;
        $property->phon_num_one = $request->phon_num_one;
        $property->phon_num_two = $request->phon_num_two;
        $property->poryorty = 0;
        $property->time_entry = $request->time_entry;
        $property->time_out = $request->time_out;
        $property->status = 'In Progres';
        $property->rating = 0;
        $property->num_rating = 0;
        $property->describstion = $request->describstion;
        $property->num_section = 0;
        $property_id = $property->id;
        if ($request->hasFile('image')) {
            $imagename = $request->file('image');
            $filename = $request->user_id . '-' . time() . '.' . $imagename->getClientOriginalExtension();
            $image = Image::make(request()->file('image'))->resize(400, 300);
            // ->stream();
            // Storage::disk('s3')->put('public/porpertyImage/' . $filename, $image->__toString(), '\public');
            $image->save(public_path('/images/store/sectionimage/') . $filename);
            $property->picture_home = $filename;
        } else {
            $filename = 'avatar.png';
        }
        $property->save();
        $serves = Serf::where('type', '=', 'utility')->get();
        return redirect('property/' . $property->id);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id) {
        $property = Property::findOrFail($id);
        $i = 1;
        $imag = 'img';
        return view('property.property.show', compact('property', 'i' . 'imag'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id) {
        $property = Property::findOrFail($id);
        return view('property.property.edit', compact('property'));
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
        $validatedData = $request->validate(['name' => 'required|string|max:191', 'user_id' => 'required|integer|max:10', 'type' => 'required|string|max:191', 'phon_num_one' => 'required|integer', 'phon_num_two' => 'integer', 'time_entry' => 'required|string', 'time_out' => 'required|string', 'describstion' => 'required|string|max:500',
        'image' => 'required|image|mimes:jpeg,jpg,png,gif|max:2048', ]);
        $requestData = $request->all();
        $property = Property::findOrFail($id);

         if ($request->hasFile('image')) {
            $imagename = $request->image;
            $filename = $property->user_id . '-' . time() . '.' . $imagename->getClientOriginalExtension();
             $image = Image::make(request()->file('image'))->resize(400, 300)->stream();
            // Storage::disk('s3')->put('public/porpertyImage/' . $filename, $image->__toString(), '\public');
            $image->save(public_path('/images/store/sectionimage/') . $filename);
              $property->picture_home = $filename;
        }
        $property->update($requestData);
        return redirect('property')->with('flash_message', 'Property updated!');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id) {
        Property::destroy($id);
        return redirect('property')->with('flash_message', 'Property deleted!');
    }
    public function createsection($property_id) {
         $idserves = Serf::all();
        $idservessection = array();
         return view('property.section.create', compact('property_id', 'idserves', 'idservessection'));
    }
}
