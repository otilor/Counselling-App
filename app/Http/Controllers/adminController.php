<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Applications;


class adminController extends Controller
{
    public function admin_index()
    {
        $applications = Applications::orderBy('appoinment_date')->get();
        return view('admin.index')->with('applications',$applications);
        
    
    }
}
