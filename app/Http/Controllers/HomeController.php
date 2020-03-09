<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Applications;

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
        return view('home');
    }
    public function admin_index()
    {
        $applications = Applications::orderBy('created_at','desc')->get();
        return view('admin.index')->with('applications',$applications);
    
    }
    
    
}
