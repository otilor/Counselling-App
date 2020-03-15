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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $applications = Application::where('application_status','<>',0)->get();
        //return response()->json($applications);
        return view('admin.index', compact('applications', $applications));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Create an admin account
        return view('admin.profile');
    }

    public function pending_applications()
    {
        $pending_applications = Application::where('application_status',0)->orderBy('created_at','desc')->get();
        //return response()->json($pending_applications);
        return view('admin.pending', compact('pending_applications', $pending_applications));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function update(Request $request)
    {
        //Set application status for Application
        $token =  $request->get('token');
        $application_id = $request->get('application_id');
        $update_application = Application::where('id',$application_id)->first();
        //return response()->json($application);
        $update_application->application_status = $token;
        $update_application->save();
        return redirect()->back()->with('success','Successfully Updated!');
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

    public function profile()
    {
        //Create a profile for admin
        return view('admin.profile');
    }

    public function create_profile(Request $request)
    {
        $request->validate([

            'email' => 'required',
            'password' => 'required|confirmed',
            'name' => 'required'

        ]);
        $new_admin_account = new User;
        $new_admin_account->email = $request->email;
        $new_admin_account->name = $request->name;
        $new_admin_account->password = bcrypt($request->password);
        $new_admin_account->remember_token = sha1($request->_token);
        $new_admin_account->save();
        return redirect('/profile')->with('success','Admin Account Created');
    }


    public function application_action()
    {
        $all_applications = Application::all();
        return view('admin.action', compact('all_applications', $all_applications));
    }
    

    
}
