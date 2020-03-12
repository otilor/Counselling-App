<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Application;
use App\User;


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

            'email' => 'required',
            'password' => 'required|confirmed'

        ]);
        $new_admin_account = new User;
        $new_admin_account->email = $request->email;
        $new_admin_account->name = $request->name;
        $new_admin_account->password = bcrypt($request->password);
        $new_admin_account->remember_token = sha1($request->_token);
        $new_admin_account->save();
        return redirect('/profile')->with('success','Admin Account Created');
    }

    public function approve_application(Request $request)
    {
        $approve_application = new Application;
        $approve_application->application_status = $request->application_status;
        $approve_application->save();
    }
}
