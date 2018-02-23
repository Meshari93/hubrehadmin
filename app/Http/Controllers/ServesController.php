<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Serf;
use Illuminate\Http\Request;

class ServesController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $serves = Serf::where('serves', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $serves = Serf::paginate($perPage);
        }

        return view('property.serves.index', compact('serves'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('property.serves.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
      $validatedData = $request->validate([
        'serves' => 'required|alpha_dash|max:191',
        'type' => 'required',
          ]);

        $requestData = $request->all();

        Serf::create($requestData);

        return redirect('serves')->with('flash_message', 'Serf added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $serf = Serf::findOrFail($id);

        return view('property.serves.show', compact('serf'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $serf = Serf::findOrFail($id);

        return view('property.serves.edit', compact('serf'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {

        $requestData = $request->all();

        $serf = Serf::findOrFail($id);
        $serf->update($requestData);

        return redirect('serves')->with('flash_message', 'Serf updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Serf::destroy($id);

        return redirect('serves')->with('flash_message', 'Serf deleted!');
    }
}
