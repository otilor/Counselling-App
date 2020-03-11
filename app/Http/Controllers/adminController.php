<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Applications;


class adminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function admin_index()
    {
        $applications = Applications::all();
        return view('admin.index')->with('applications',$applications);
    }
}
