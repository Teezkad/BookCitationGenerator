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
    //    $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(){
        //return view('home(Authname)');
        return view('newhome');
    }

    public function export(){
        return view('exportThis');
    }

    public function exportScript(){

        return view('exportScript');

    }




}
