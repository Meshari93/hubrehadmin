<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;

class WelcomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
     }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $keyword = $request->get('search');
       $perPage = 25;
       if (!empty($keyword)) {
           $propertys = Property::where('name', 'LIKE', "%$keyword%")
               ->orWhere('id', 'LIKE', "%$keyword%")
               ->orWhere('type', 'LIKE', "%$keyword%")
               ->orWhere('phon_num_one', 'LIKE', "%$keyword%")
               ->orWhere('phon_num_two', 'LIKE', "%$keyword%")
               ->orWhere('poryorty', 'LIKE', "%$keyword%")
               ->orWhere('time_entry', 'LIKE', "%$keyword%")
               ->orWhere('time_out', 'LIKE', "%$keyword%")
               ->orWhere('status', 'LIKE', "%$keyword%")
               ->orWhere('evaluation', 'LIKE', "%$keyword%")
               ->orWhere('describstion', 'LIKE', "%$keyword%")
               ->orWhere('num_section', 'LIKE', "%$keyword%")
               ->paginate($perPage);
       } else {
           $propertys = Property::paginate($perPage);
       }


      return view('welcome', compact('propertys' ));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function display($id)
    {
        $property = Property::findOrFail($id);
        $i =1;
        $imag  = 'img';
        return view('display', compact('property','i'.'imag'));
    }


}
