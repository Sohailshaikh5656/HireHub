<?php

namespace App\Http\Controllers\UserControllers;
use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use App\Models\education;
use App\Models\experience;
use App\Models\certificate;
use App\Models\skill;
class UserProfileController extends Controller
{
    public function userProfile(){
        if(session('user_login')){
            //$user_id = session('user_id');
            return view("user.userProfile");
        }
        else{
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
            return view("user.addExperience");
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
        // Validate the input
        $ValidateData = $req->validate([
            'skill' => 'required|string|min:3'
        ]);
    
        // Get the user ID from the session
        $user_id = (int) session("user_id");
    
        // Find the skill record for the user
        $oldData = skill::find($user_id); // Use find instead of findOrFail
    
        if ($oldData) {
            // Get existing skills and convert to array
            $oldskill = $oldData->skill ?? ''; // Use null coalescing operator
            $array = array_map('trim', explode(',', $oldskill)); // Trim each skill
            
            // Add the new skill
            $array[] = trim(strtolower($ValidateData['skill']));
            
            // Remove duplicates if needed
            $array = array_unique($array);
    
            // Join the skills back into a string
            $oldData->skill = implode(',', $array);
            $oldData->save();

            return redirect("/user/userProfile");
            //return response()->json(['message' => 'Skill updated successfully!']);
        } else {
            session(['error'=>"Error in Data Validation ot Login"]);
            return redirect("/user/certificate");
        }
    }
    
    
}
