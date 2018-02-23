<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Rating;
use App\Property;
use App\User;
use Auth;
use DB;
class RatingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $validatedData = $request->validate([
        'property_id' => 'integer',
        'cleanliness' => 'required|integer',
        'place' => 'required|integer',
        'price' => 'required|integer',
        'accompany' => 'required|integer',
        'furniture' => 'required|integer',
          ]);

      $riting     =  new Rating;
      $riting->user_id     = Auth::user()->id ;
      $riting->property_id     = $request->property_id;
      if ( !empty ($request->cleanliness)){$riting->cleanliness = $request->cleanliness;}
      else {$request->cleanliness = 0;}
      if ( !empty ($request->place)){$riting->place = $request->place;}
      else {$request->place = 0;}
      if ( !empty ($request->price)){$riting->price = $request->price;}
      else {$request->price = 0;}
      if ( !empty ($request->accompany)){$riting->accompany = $request->accompany;}
      else {$request->accompany = 0;}
      if ( !empty ($request->furniture)){$riting->furniture = $request->furniture;}
      else {$request->furniture = 0;}
        $riting->save();

       $ritingsum = 0;
       $ritingsum = ($riting->cleanliness + $riting->place + $riting->price + $riting->accompany +$riting->furniture)/5;
       $property =  Property::where('id', '=', $riting->property_id)->first();

       $prop1 = $ritingsum + $property->rating;
       $prop2     = $property->num_rating + 1;

       $property->update(['rating' => $prop1, 'num_rating' => $prop2]);

       return back();

       // return dd($prop1);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
