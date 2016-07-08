<?php

namespace App\Http\Controllers;

use App\Education;
use App\Notifications;
use App\Students;
use Composer\Config;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class StudentsController extends Controller
{

    public function getStudentLogin(){
        return view('student_signin');
    }
    
    public function getUsernameProfile($username){
        echo $username;
    }

    public function getSkillsRelatedJob($skill_name){
        echo $skill_name;
    }
    
    public function postStudentSignIn(Request $request){

        $this->validate($request, [

            'email'     => 'required|email',
            'password'  => 'required'
        ]);

        $email = $request['email'];
        $password = $request['password'];

        if(Auth::attempt(['email' => $email, 'password' => $password]))
        {
            return redirect()->route('students-dashboard');
        }
        else{
            return redirect()->back();
        }
        
    }

    public function getStudentsDashboard(){
        return view('student_dashboard');
    }
    
    public function addNotification($internship_id){
        
        $notification = new Notifications();

        $notification->internship_id = $internship_id;

        $notification->save();

        $notification = Notifications::all()->get('internship_id');

        return redirect()->back()->with(['notification_ids'  => $notification]);
    }
    
    public function removeNotification($internship_id){
        $notification = Notifications::where('internship_id', $internship_id);
        if($notification)
        {
            $notification->delete();
        }

        return redirect()->back();
    }

    public function getAccounts(){
        $education = Education::all();
        return view('student-accounts', ['educations'=> $education]);
    }

    public function postAddEducation(Request $request){

        $degree_type = $request['degree_type'];
        $major = $request['major'];
        $gpa = $request['gpa'];
        $university = $request['university'];
        $location = $request['location'];
        $cert_title = $request['certification'];
        $cert_body = $request['body'];

        $education = new Education();

        $education->degree_type = $degree_type;
        $education->degree_gpa = $gpa;
        $education->major = $major;
        $education->university_name = $university;
        $education->university_location = $location;
        $education->certification_title = $cert_title;
        $education->certification_body = $cert_body;

        $education->save();

        return redirect()->route('student-accounts');
    }
}
