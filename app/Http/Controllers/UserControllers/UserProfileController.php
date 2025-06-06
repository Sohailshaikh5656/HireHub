<?php

namespace App\Http\Controllers\UserControllers;
use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use App\Models\education;
use App\Models\experience;
use App\Models\certificate;
use App\Models\skill;
use App\Models\user_profile;
use App\Models\UserTable;
use App\Models\jobposting;
use App\Models\agency;
use App\Models\state;
use App\Models\city;
use App\Models\jobapplication;

use Illuminate\Support\Facades\DB;
class UserProfileController extends Controller
{
    public function userProfile(){
        if(session('user_login')){
            $user_id = (int)session('user_id');
            
            // Fetching education, experience, and certificate data
            $EducationData = education::where('user_id', $user_id)->get();
            $ExpData = experience::where('user_id', $user_id)->get();
            $Certi = certificate::where('user_id', $user_id)->get();
            $userProfile = user_profile::where('user_id',$user_id)->first();
            $user = UserTable::findOrFail($user_id);
            // Fetching skills data and handling null case
            $skillData = skill::where('user_id', $user_id)->first();
            
            if($skillData && $skillData->skill){ // Check if skillData exists and skill is not null
                $array = explode(",", $skillData->skill);
            } else {
                $array = null; // Set array to null if no skills found
            }
    
            // Returning data to the view
            return view("user.userProfile", [
                'EducationData' => $EducationData,
                'ExpData'       => $ExpData,
                'Certi'         => $Certi,
                'user'          =>  $user,
                'userProfile'   => $userProfile,
                'skills' => $array
            ]);
        } else {
            return redirect("/user/login");
        }
    }
    



    //Add Education
    public function addEducationPage(){
        if(session('user_login')){
            return view("user.addEducation");
        }
        else{
            return redirect("/user/login");
        }
    }

    public function storeEducation(Request $req) {
        // Validate the incoming request
        $ValidateData = $req->validate([
            'degree' => 'required|string|min:3',
            'board' => 'required|string|min:5',
            'startingDate' => 'required|date',
            'endingDate' => 'required|date',
            'school_name' => 'required|string|min:5',
            'percentage' => 'required|numeric|between:0,100',
        ]);
    
        // Retrieve the user ID from the session
        $id = (int) session('user_id'); // User Id
    
        // Check if a degree already exists for this user
        $str = str_replace(['.',',','\''],'',$ValidateData['degree']);
        $str = strtolower($str);
        $existingEducation = education::where('user_id', $id)
                                       ->where('degree', $str)
                                       ->first();
    
        // If the degree already exists, return with an error message
        if ($existingEducation) {
            session(["error" => "Degree {$existingEducation->degree} already exists | or check profile page!"]);
            return redirect("/user/addEducation");
        } else {
            // Create a new education record
            $newData = new education();
            $newData->degree = strtolower($ValidateData['degree']);
            $newData->board = $ValidateData['board'];
            $newData->starting_year = $ValidateData['startingDate'];
            $newData->ending_year = $ValidateData['endingDate']; // Corrected this variable
            $newData->school_name = $ValidateData['school_name'];
            $newData->grade = $ValidateData['percentage'];
            $newData->user_id = $id;
            $newData->save();
    
            // Redirect to the user profile
            return redirect("/user/userProfile");
        }
    }


    public function addExperiencePage(){
        if(session("user_login")){
            $user_id = (int)session('user_id');
            $EductionData = education::where('user_id',$user_id)->first();
            return view("user.addExperience",['EduactionData'=>$EductionData]);
        }
        else{
            return redirect("/user/login");
        }
    }

    public function storeExperience(Request $req){
        $ValidateData = $req->validate([
            'postName' => 'required|string|min:5',
            'postDescription' => 'required|string|min:5',
            'departmentName' => 'required|string|min:5',
            'startingDate' => 'required|date',
            'endingDate' => 'required|date',
            'industry' => 'required|string|min:2',
            'institutionName' =>'required|string|min:5',
            'institutionAddress' => 'required|string|min:10'
        ]);
        $id = (int) session('user_id'); // User Id
    
        // Check if a degree already exists for this user
        $str = str_replace(['.',',','\''],'',$ValidateData['postName']);
        $date = $ValidateData['startingDate'];
        $str = strtolower($str);
        $existingExp = experience::where('user_id', $id)
                                       ->where('post_name', $str)
                                       ->where('starting_year',$date)
                                       ->first();
    
        // If the degree already exists, return with an error message
        if ($existingExp) {
            session(["error" => "Job Post Experience {$existingExp->post_name} already exists | or check profile page!"]);
            return redirect("/user/addEducation");
        } else {
            // Create a new education record
            $newData = new experience();
            $newData->post_name = strtolower($ValidateData['postName']);
            $newData->post_description = $ValidateData['postDescription'];
            $newData->department_name = $ValidateData['departmentName'];
            $newData->starting_year = $ValidateData['startingDate'];
            $newData->ending_year = $ValidateData['endingDate']; // Corrected this variable
            $newData->industry = $ValidateData['industry'];
            $newData->institution_name = $ValidateData['institutionName'];
            $newData->intitution_address = $ValidateData['institutionAddress'];
            $newData->user_id = $id;
            $newData->save();
    
            // Redirect to the user profile
            return redirect("/user/userProfile");
        }
    }


    public function addCertificte(){
        if(session('user_login')){
            return view("user.addCertification");
        }
        else{
            return redirect("/user/login");
        }
    }

    public function storecertificate(Request $req){
        $ValidateData = $req->validate([
            'cname'=>'required|string|min:3',
            'cdes'=>'required|string|min:10',
            'cdate'=>'required'
        ]);
        if($ValidateData && session('user_login')){
            $newdata = new certificate();
            //dd($newdata); // Check if the object is instantiated correctly

            $newdata->certificate_name = $ValidateData['cname'];
            $newdata->description = $ValidateData['cdes']; // Fix this line
            $newdata->completion_date = $ValidateData['cdate'];
            $newdata->user_id = (int) session('user_id');
            $newdata->save();
            
            // $newData->user_id = (int) session('user_id');
            // $newData->save();
            return redirect("/user/userProfile");
        }
        else{
            session(['error'=>"Error in Data Validation ot Login"]);
            return redirect("/user/certificate");
        }
    }

    public function addSkill(){
        if(session("user_login")){
            return view("user.addSkill");
        }
        else{
            return redirect("/user/login");
        }
    }

    public function storeSkill(Request $req) {
        if(session('user_login')){
            $user_id = (int)session('user_id');
            $ValidateData = $req->validate(['skill'=>'required|min:3']);
            $oldData = skill::where('user_id',$user_id)->first();
            if($oldData){
                $data = $oldData->skill;
                $array = explode(',',$data);
                $array[] = trim(strtolower($ValidateData['skill']));
                $oldData->skill = implode(',',$array);
                $oldData->save();
                return redirect('/user/userProfile');
            }
            else{
                $newData = new skill();
                $newData->skill = trim(strtolower($ValidateData['skill']));
                $newData->user_id = $user_id;
                $newData->save();
                return redirect("/user/userProfile");
            }
        }
        else{
            return redirect('/user/login');
        }
    }

    public function applicationTrack(){
        $user_id = (int)session('user_id');
        $data = DB::select("SELECT 
        jobapplication.created_at AS appliedtime,
        jobposting.job_post_name AS post,
        agency.agency_name,
        jobapplication.status 
    FROM jobapplication
    JOIN jobposting ON jobposting.id = jobapplication.job_posting_id
    JOIN agency ON agency.id = jobposting.agency_id
    JOIN user ON user.id = jobapplication.user_id
    WHERE user.id = ?;
        ",[$user_id]);

        return view("user.applicationTrack",['data'=>$data]);
    }

    public function userEdit(){
        if(session("user_login")){
            $user_id = (int) session("user_id");
            $user = UserTable::findOrFail($user_id);
            $data = user_profile::where('user_id',$user_id)->first();
            $state = state::find($data->state_id)->get();
            $city = city::find($data->city_id)->get();
            return view("user.userEdit",['user'=>$user,'data'=>$data,'state'=>$state,'city'=>$city]);
        }
        else{
            return redirect("/user/login");
        }
    }

    public function updateUser(Request $req, $id) {
        // Check if user is logged in
        if (session('user_id')) {
            // Validate the incoming request data
            $validatedData = $req->validate([
                'fname' => 'required|string|min:3',
                'lname' => 'required|string|min:3',
                'email' => 'required|string|email',
                'contact' => 'required|digits:10', // Fixed the typo from 'conatact' to 'contact'
                'DOB' => 'required|date',
                'gender' => 'required|string',
                'state' => 'required',
                'city' => 'required',
                'address' => 'required|string|min:10'
            ]);
    
            // If validation passes
            if ($validatedData) {
                $userId = (int) session('user_id');
    
                // Update UserTable information
                $user = UserTable::find($userId);
                if ($user) {
                    $user->first_name = $validatedData['fname'];
                    $user->last_name = $validatedData['lname'];
                    $user->email = $validatedData['email'];
                    $user->save(); // Save user details
                }
    
                // Update user profile information
                $profileData = user_profile::where('user_id', $userId)->first();
                if ($profileData) {
                    $profileData->contact = $validatedData['contact'];
                    $profileData->DOB = $validatedData['DOB'];
                    $profileData->gender = $validatedData['gender'];
                    $profileData->address = $validatedData['address'];
                    $profileData->state_id = $validatedData['state']; // Fixed variable name from $profile to $profileData
                    $profileData->city_id = $validatedData['city']; // Fixed variable name from $profile to $profileData
                    $profileData->save(); // Save profile details
                }
    
                // Set a session message for feedback
                session(["updated" => "Profile Updated!"]);
                return redirect("/user/userProfile");
            }
        }
    
        // If not logged in or validation fails, redirect back or handle the error
        return redirect()->back()->withErrors(['message' => 'An error occurred.']);
    }


    public function editEducation($id){
        if(session("user_login")){
            $data = education::findOrFail($id);
            return view("user.editEducation",['data'=>$data]);
        }
        else{
            return redirect("/user/login");
        }
    }
    
    public function updateEducation(Request $req, $id){
        if(session("user_login")){
            $validatedData = $req->validate([
               'degree'=>'required|string|min:2',
               'board'=>'required|string|min:3',
               'startingDate'=>'required|date',
               'endingDate'=>'required|date',
               'school_name'=>'required|string|min:3',
               'percentage'=>'required|string'

            ]);
            if($validatedData){
                $data = education::findOrFail($id);
                $data->degree = $validatedData['degree'];
                $data->board = $validatedData['board'];
                $data->starting_year = $validatedData['startingDate'];
                $data->ending_year = $validatedData['endingDate'];
                $data->school_name = $validatedData['school_name'];
                $data->grade = $validatedData['percentage'];
                $data->save();
                session(["updated" => "Profile Updated!"]);
                return redirect("/user/userProfile");
                session(["updated" => "Profile Updated!"]);
                return redirect("/user/userProfile");
           }
           else{
            return redirect()->back()->withErrors(['message' => 'An error occurred.']);
           }
        }
        else{
            return redirect("/user/login");
        }
    }

    public function editExperience($id){
        if(session("user_login")){
            $data = experience::findOrFail($id);
            return view("user.editExperience",['data'=>$data]);
        }
        else{
            return redirect("/user/login");
        }
    }

    public function updateExperience(Request $req, $id){
        if(session("user_login")){
            $validatedData = $req->validate([
               'postName'=>'required|string|min:3',
               'postDescription'=>'required|string|min:3',
               'departmentName'=>'required|string|min:3',
               'startingDate'=>'required|date',
               'endingDate'=>'required|date',
               'industry'=>'required|string|min:3',
               'institutionName'=>'required|string',
               'institutionAddress'=>'required|string|min:3',     
            ]);
            if($validatedData){
                $data = experience::findOrFail($id);
                $data->post_name = $validatedData['postName'];
                $data->post_description = $validatedData['postDescription'];
                $data->department_name = $validatedData['departmentName'];
                $data->starting_year = $validatedData['startingDate'];
                $data->ending_year = $validatedData['endingDate'];
                $data->industry = $validatedData['industry'];
                $data->institution_name = $validatedData['institutionName'];
                $data->intitution_address = $validatedData['institutionAddress'];
                $data->save();
                session(["updated" => "Profile Updated!"]);
                return redirect("/user/userProfile");
                session(["updated" => "Profile Updated!"]);
                return redirect("/user/userProfile");
           }
           else{
            return redirect()->back()->withErrors(['message' => 'An error occurred.']);
           }
        }
        else{
            return redirect("/user/login");
        }
    }

    public function editCertificate($id){
        if(session("user_login")){
            $data = certificate::findOrFail($id);
            return view("user.editCertificate",['data'=>$data]);
        }
        else{
            return redirect("/user/login");
        }
    }
    public function updateCertificate(Request $req, $id){
        if(session("user_login")){
            $validatedData = $req->validate([
               'cname'=>'required|string|min:3',
               'cdes'=>'required|string|min:3',
               'cdate'=>'required|date|min:3',
                 
            ]);
            if($validatedData){
                $data = certificate::findOrFail($id);
                $data->certificate_name = $validatedData['cname'];
                $data->description = $validatedData['cdes'];
                $data->completion_date = $validatedData['cdate'];
                
                $data->save();
                session(["updated" => "Profile Updated!"]);
                return redirect("/user/userProfile");
                session(["updated" => "Profile Updated!"]);
                return redirect("/user/userProfile");
           }
           else{
            return redirect()->back()->withErrors(['message' => 'An error occurred.']);
           }
        }
        else{
            return redirect("/user/login");
        }
    }

}
