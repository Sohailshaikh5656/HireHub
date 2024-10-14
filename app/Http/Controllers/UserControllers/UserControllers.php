<?php

namespace App\Http\Controllers\UserControllers;
use App\Http\Controllers\Controller; 
use App\Models\UserTable;
use App\Models\user_profile;
use App\Models\city;
use App\Models\state;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserControllers extends Controller
{
    public function loginPage(){
        return view('user.login');
    }
    public function register(){
        $state = state::all();
        $city = city::all();
        return view('user.register',['state'=>$state,'city'=>$city]);
    }
    public function regsiterUser(Request $req) {
        $validateData = $req->validate([
            'fname' => 'required|string|min:3',
            'lname' => 'required|string|min:3',
            'email' => 'required|string|email', // Added email validation rule
            'password' => [
                'required',
                'string',
                'min:8', // Minimum 8 characters
                'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[^a-zA-Z\d]).+$/'
            ],
            'address' => 'required|string|min:10',
            'gender' => 'required|string',
            'contact' => 'required|digits:10',
            // Correct usage of the before rule
            'dob' => 'required|date|before:'.now()->subYears(16)->toDateString(),
            'state' => 'required|not_in:0',
            'city' => 'required|not_in:0',
            'profileImage' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        // Check if password and confirm password match
        if ($req->input('password') === $req->input('confirmpassword') && $req->hasFile('profileImage')) {
            $user = new UserTable();
            $profile = new user_profile();
    
            // Handle the profile image upload
            $image = $req->file('profileImage');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/userData'), $imageName); // Added a comma for correct path
    
            $user->first_name = $validateData['fname'];
            $user->last_name = $validateData['lname'];
            $user->email = $validateData['email'];
            $user->password = bcrypt($validateData['password']);
            $user->save();
    
            // Get the user ID for the profile
            $userId = $user->id; // Corrected from user_id to userId
    
            $profile->contact = (int)$validateData['contact'];
            $profile->user_id = $userId; // Using the correct variable name
            $profile->address = $validateData['address'];
            $profile->gender = $validateData['gender'];
            $profile->dob = $validateData['dob'];
            $profile->state_id = $validateData['state'];
            $profile->city_id = $validateData['city'];
            $profile->ImageUrl = $imageName;
            $profile->save();
    
            session(['user_registed' => true]);
            return redirect("/user/login");
        } else {
            session(['password_mismatch' => true]);
            return redirect("/user/register");
        }
    }

    public function userAuthChk(Request $request){
        $auth = $request->only('email','password');
        $user = UserTable::where('email',$auth['email'])->first();
        if($user && Hash::check($auth['password'], $user->password)){
            session(['user_login'=>true]);
            session(['user_id'=>$user->id]);
            //Admin sensetive info
            session(['user_email'=>$user->email]);
            session(['user_name'=>$user->first_name]);
            return redirect('/user/Home');
        }
        else{
            session(['error'=>true]);
            return redirect('/user/login')->with('error', 'Email or Password Invalid');
        }
    }

    public function logout(){
        session()->flush();
        return redirect('/user/login');
    }
}
