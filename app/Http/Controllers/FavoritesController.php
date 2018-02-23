<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;
use App\Favorite;
use App\User;
use Auth;

class FavoritesController extends Controller
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
    public function create(Request $request)
    {

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
             'propertyId' => 'required|integer',
          ]);

      $propertyId     = $request->propertyId;
      $favorite =  Favorite::where('property_id', '=', $propertyId)
        ->where('user_id', '=', Auth::user()->id )->first();
        if(!$favorite){
          $newFavorite = new Favorite;
          $newFavorite->user_id = Auth::user()->id;
          $newFavorite->property_id = $propertyId;
          $newFavorite->save();
          $is_Favorite = 1;
        }
        else {
         Favorite::where('property_id', '=', $propertyId)
            ->where('user_id', '=', Auth::user()->id )->delete();
            $is_Favorite = 0;
        }

        $response = array(
          'is_Favorite' => $is_Favorite,
         );
          return response()->json($response, 200);


      // return back();
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
