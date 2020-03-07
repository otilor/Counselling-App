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
       
        $request->validate([
            'token'=>'required|max:6'
        ]);
        $token = $request->get('token');
        
        $applications = Applications::where('application_token',$token)->first();
        if(!$applications){
            return redirect()->route('check')->with('error','No Application attached found for this token'.$applications);
        }
        return view('status');
        
    }
    public function book(){
        return view('book');
    }
    public function book_appointment(Request $request){
        $message = $request->personal_message;

        $request->validate([
            'appointment_date' => 'required|date',
            'personal_message' => 'required|max:255'
        ]);
        
    }
}
