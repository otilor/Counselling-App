<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Application;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ApplicationController extends Controller
{
    /**
     * Chooses the counsellor to direct application to.
     */
    public function choose_counsellor()
    {

        
        // This algorithm randomises through all the counsellors and selects one.
        

        
        $counsellors = User::select('id')->where('role_id', 1)->get()->toArray();
        if  (count($counsellors) <= 0 ) {
            return null;
        } else {
            $counte =  count($counsellors)-1;
            try {
                $int = random_int(0, $counte);
                return $counsellors[$int]["id"];
            }
            catch (\Exception $e){
                return "Failed!";
            }
        }

        // return back()->withErrors('No Counsellor for now');

       

        
    }
    
    public function index(){
        return view ('index');
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
        return view('status', compact('applications'));
        
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
        $counsellor_id = $this->choose_counsellor();
        if (is_null($counsellor_id)) {
            return back()->withErrors("No counsellors for now!");
        }
        $application_token = Str::random(8);
        try{
        
        

        Application::create([
            'appointment_date' => $data["appointment_date"],
            'personal_message' => $data["personal_message"],
            'application_token' => $application_token,
            'counsellor_id' => $counsellor_id,
        ]);
        
        $application = [

            'appointment_date' => $data["appointment_date"],
            'personal_message' => $data["personal_message"],
            
        ];

        $application_details = $application;

    }catch(\Exception $exception){
        return back()->withErrors($exception->getMessage());
    }
        
    
        return redirect('/')->with('success','Use this token: '.$application_token);
    }
    //Send Email to applicant
    public function send_email()
    {
        return view('email');
    }

    
}
