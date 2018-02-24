<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      if (auth()->user()->hasRole('admin') ) {
      return redirect('admin/dashboard');
      }
      elseif (auth()->user()->hasRole('owner') ) {
      return redirect('/property');
      }
      else {
        return redirect('/');
      }
    }
    public function welcome()
    {

        return view('welcome');

    }
}
