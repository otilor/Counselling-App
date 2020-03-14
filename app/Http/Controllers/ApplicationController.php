<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Application;

class ApplicationController extends Controller
{
    
    public function index(){
        return view ('index');
    }
    public function show_status (){
        return view('status');
    }

    public function check_token(Request $request){
       
        $request->validate([
            'token'=>'required|max:8'
        ]);
        $token = $request->get('token');
        
        $applications = Application::where('application_token',$token)->first();
        if(!$applications){
            return redirect()->route('check')->with('error','No Application attached to this token'.$applications);
        }
        return view('status', compact('applications',$applications));
        
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
        $application = new Application;
        $application->appointment_date = $request->appointment_date;
        $application->personal_message = $request->personal_message;
        $application->application_token = str_random(8);
        $application->save();
        return redirect('/')->with('success','Use this token: '.$application->application_token);
    }
    //Send Email to applicatant
    public function send_email()
    {
        return view('email');
    }
}
