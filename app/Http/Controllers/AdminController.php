<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Education;
use App\Internship;
use App\Internship_Type;
use App\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;

class AdminController extends Controller
{

    public function getAdminSignIn(){
        return view('admin_signin');
    }

    public function getAdminAddStudents(){
        $students = Students::all();
        return view('admins_addStudent', ['students'=>$students]);
    }

    public function postAdminSignIn(Request $request){

        $this->validate($request, [
            'email'     => 'required|email',
            'password'  => 'required'
        ]);

        $email = $request['email'];
        $password = $request['password'];

        if(Auth::attempt(['email' => $email, 'password' => $password]))
        {
            return redirect()->route('admin-dashboard');
        }
        else{
            return redirect()->back();
        }

    }

    public function getAdminDashboard(){
        return view('admin_dashboard');
    }

    public function postCreateStudentAccount(Request $request){

        //dd(\Illuminate\Support\Facades\Config::get('mail'));

        $this->validate($request, [
            'email'  =>  'email|required|unique:students',
            'student_id'    =>'integer|digits:9|unique:students',
            'semester'  =>  'required',
            'year'  =>  'required',
            'student_first_name'    =>  'required',
            'student_middle_name'    =>  'required',
            'student_last_name'    =>  'required',
            'telephone'     => 'required|max:10',
            'gender'    => 'required',
            'status'    => 'required'
        ]);

        $email = $request['email'];
        $student_id = $request['student_id'];
        $semester   = $request['semester'];
        $year   = $request['year'];
        $password = Str::quickRandom(6);
        $encrypted_password = bcrypt($password);
        $student_first_name = $request['student_first_name'];
        $student_middle_name = $request['student_middle_name'];
        $student_last_name = $request['student_last_name'];
        $telephone = $request['telephone'];
        $gender = $request['gender'];
        $status = $request['status'];

        $student = new Students();

        $admin = new Admin();

        $admin->email = $email;
        $admin->password = $encrypted_password;
        $admin->save();

        $student->email = $email;
        $student->student_id = $student_id;
        $student->semester_term = $semester;
        $student->semester_year = $year;
        $student->first_name = $student_first_name;
        $student->middle_name = $student_middle_name;
        $student->last_name = $student_last_name;
        $student->telephone = $telephone;
        $student->gender = $gender;
        $student->status = $status;

        $message = "Account could not be created.";

        if($student) {

            $student->save();
            Mail::send('emails.sendEmail', ['email' => $student->email,
                'password' => $password,
                'link'  =>  URL::route('student')], function ($m) use ($student) {
                $m->to($student->email)->subject('New Account for Internship at UWindsor');
            });
            $message = "Account Created. An email has been sent to the student.";

        }
        return redirect()->back()->with(['message'  => $message]);
    }

    public function getLogout(){
        Auth::logout();
        return redirect()->route('home');
    }

    public function getInternships(){

        $internships_type   = Internship_Type::all();
        return view('internships', ['internships'   => $internships_type]);
    }

    public function getInternshipView($type){

            $internship_types = Internship_Type::with(['internship_type' => $type]);

            if($internship_types)
            {
                return view('each_internship_view', ['internship_type'  => $type]);
            }
    }

    public function getManageInternships(){
        
        $internships_type = Internship_Type::all();

        return view('manage_internships_type', ['internships_type'  => $internships_type]);
    }

    public function postManageInternshipsType(Request $request){

        $this->validate($request, [
            'internship_type'   => 'required'
        ]);

        $internship_type = $request['internship_type'];

        $internship = new Internship_Type();

        $internship->internship_type = $internship_type;

        $message = "Save Unsuccessful.";

        if($internship->save()){
            $message = "Saved Successfully";
        }

        return redirect()->back()->with(['message'  => $message]);

    }
    
    public function addInternship(Request $request, $internship_type){
        
        $this->validate($request,[
            'company_name'  => 'required',
            'select_country'    => 'required',
            'select_city'   => 'required',
            'postal_code'   => 'required|max:6',
            'contact_first_name'    => 'required',
            'contact_last_name' =>  'required',
            'contact_position'  => 'required',
            'email' =>  'required | email',
            'telephone' =>  'required|max:10',
            'company_website'   => 'required|url',
            'address'   => 'required',
            'notes' => 'required'
        ]);


        $company_name = $request['company_name'];
        $select_country = $request['select_country'];
        $select_city = $request['select_city'];
        $postal_code =  $request['postal_code'];
        $contact_first_name = $request['contact_first_name'];
        $contact_last_name = $request['contact_last_name'];
        $contact_position = $request['contact_position'];
        $email = $request['email'];
        $telephone = $request['telephone'];
        $company_website = $request['company_website'];
        $address = $request['address'];
        $notes = $request['notes'];

        $internship = new Internship();

        //$internship_types = Internship_Type::with(['internship_type'  => $internship_type]);

        $internship->company_name = $company_name;
        $internship->country = $select_country;
        $internship->city = $select_city;
        $internship->postal_code = $postal_code;
        $internship->contact_first_name = $contact_first_name;
        $internship->contact_last_name = $contact_last_name;
        $internship->contact_position = $contact_position;
        $internship->email = $email;
        $internship->telephone = $telephone;
        $internship->company_website = $company_website;
        $internship->address = $address;
        $internship->notes = $notes;
        $internship->internship_type = $internship_type;
        $message = "Information could not be saved";

        if($internship->save())
        {
            $message = "Information saved successfully.";
        }

        return redirect()->back()->with(['message'  => $message]);

    }

    public function getList($internship_type){

        $internship = Internship::where('internship_type', $internship_type)->get()->all();

        return view('list_each_internship_view', ['internship'  => $internship]);

    }

    public function getSearch(){

        $education = Education::all();
        $students = Students::all();
        $internships = Internship::all();

        return view('search', ['educations'  => $education, 'students'  => $students, 'internships' => $internships]);
    }
    
    public function getTheSearch($v){

        $education = Education::with($v);
        $internship = Internship::with($v);
        $students = Students::where('semester_term',$v)->get();

        //dd($education);

        return view('showSearch', ['students' => $students, 'internships'=> $internship, 'educations' => $education]);
    }

}
