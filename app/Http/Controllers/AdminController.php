<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Application;


class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function admin_index()
    {
        $applications = Application::paginate(10);
        return view('admin.index', compact('applications', $applications));
    }
    
    public function admin_profile()
    {
        return view('admin.profile');
    }

    public function update_profile(Request $request)
    {
        $request->validate([

            'admin_username' => 'required'
            
        ]);
    }
}
