<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Applications;

class ApplicationsController extends Controller
{
    
    public function index(){
        return view ('index');
    }
    public function show_status (){
        return view('status');
    }

    public function check_token(Request $request){
       
        $token = $request->get('token');
        
        $applications = Applications::where('application_token',$token)->first();
        if(!$applications){
            return redirect()->route('check')->with('error','Incorrect Token'.$applications);
        }
        return view('status');
        
    }
}
