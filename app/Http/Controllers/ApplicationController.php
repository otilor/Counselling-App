<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Application;
use App\User;
use App\Counsellor;
use Illuminate\Support\Str;

class ApplicationController extends Controller
{
    /**
     * Chooses the counsellor to direct application to.
     */
    public function choose_counsellor()
    {

        $counsellors = User::select('email')->where('role_id', 1)->get()->toArray();      
        // This algorithm randomises through all the counsellors and selects one.

        $int = random_int(0, count($counsellors)-1);      
        
       

        $counsellor = $counsellors[$int]["email"];

        return $counsellor;
    }
    
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
        
        $applications = Application::where('application_token','LIKE',$token)->first();
        if(!$applications){
            return back()->with('error','No Application attached to this token'.$applications);
        }
        return view('status', compact('applications',$applications));
        
    }
    public function book(){
        return view('book');
    }

    public function book_appointment(Request $request){
        

        $request->validate([
            'appointment_date' => 'required|date',
            'personal_message' => 'required|max:255'
        ]);
        
        $data = $request->only('appointment_date', 'personal_message', 'application_token');
        // Chooses the counsellor...
        $counsellor = $this->choose_counsellor();
        $application_token = Str::random(8);

        Application::create([
            'appointment_date' => $data["appointment_date"],
            'personal_message' => $data["personal_message"],
            'application_token' => $application_token,
            'counsellor' => $counsellor,
        ]);
        
        Counsellor::create([
            'email' => $counsellor,
        ]);
        
    
        return redirect('/')->with('success','Use this token: '.$application_token);
    }
    //Send Email to applicatant
    public function send_email()
    {
        return view('email');
    }

    
}
