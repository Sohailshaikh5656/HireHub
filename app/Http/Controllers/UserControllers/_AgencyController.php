<?php

namespace App\Http\Controllers\UserControllers;
use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use App\Models\state;
use App\Models\city;
use App\Models\agency;
use App\Models\agency_profile;
use Illuminate\Support\Facades\Hash;

class _AgencyController extends Controller
{
    public function agencyRegisterPage(){
        $state = state::all();
        $city = city::all();
        return view('user.companyRegister',['state'=>$state,'city'=>$city]);
    }
    public function agencyLoginPage(){
        return view('user.companyLogin');
    }

    public function regsiterAgency(Request $req) {
        $validateData = $req->validate([
            'agencyname' => 'required|string|min:3',
            'email' => 'required|string|email', // Added email validation rule
            'password' => [
                'required',
                'string',
                'min:8', // Minimum 8 characters
                'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[^a-zA-Z\d]).+$/'
            ],
            
            'ownername'=>'required|string|min:5',
            'address' => 'required|string|min:10',
            'contact' => 'required|digits:10',
            // Correct usage of the before rule
            'est_date' => 'required|date',
            'state' => 'required|not_in:0',
            'city' => 'required|not_in:0',
            'profileImage' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        // Check if password and confirm password match
        if ($req->input('password') === $req->input('confirmpassword') && $req->hasFile('profileImage')) {
            $agency = new agency();
            $profile = new agency_profile();
    
            // Handle the profile image upload
            $image = $req->file('profileImage');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/agencyData'), $imageName); // Added a comma for correct path
    
            $agency->agency_name = $validateData['agencyname'];
            $agency->email = $validateData['email'];
            $agency->password = bcrypt($validateData['password']);
            $agency->isActive = false;
            $agency->isBlocked = false;
            $agency->save();
    
            // Get the user ID for the profile
            $agencyId = $agency->id; // Corrected from user_id to userId
    
            $profile->contact = (int)$validateData['contact'];
            $profile->owner_name = $validateData['ownername'];
            $profile->agency_id = $agencyId; // Using the correct variable name
            $profile->address = $validateData['address'];
            $profile->est_date = $validateData['est_date'];
            $profile->state_id = $validateData['state'];
            $profile->city_id = $validateData['city'];
            $profile->image_url = $imageName;
            $profile->save();
    
            session(['user_registed' => true]);
            return redirect("/user/companyLogin");
        } else {
            session(['password_mismatch' => true]);
            return redirect("/user/companyRegister");
        }
    }

    public function agencyAuthChk(Request $request)
    {
        $auth = $request->only('email', 'password');
        $user = agency::where('email', $auth['email'])->first();
        
        if ($user && Hash::check($auth['password'], $user->password)) {
            // Set session variables for the authenticated agency
            session([
                'agency_login' => true,
                'agency_id' => $user->id,
                'agency_email' => $user->email,
                'agency_name' => $user->agency_name,
            ]);
            if(!$user->isActive){
                return redirect("/user/companyLogin")->with('non_active',"Wait for Approval Account !");
            }
            if($user->isBlocked){
                return redirect("/user/companyLogin")->with('non_active',"Your Account has been blocked for violeting T&C !");
            }
            //dd(session()->all());
            // Redirect to the dashboard after successful login
            
            return redirect('/Company/Dashboard');
        } else {
            // Redirect with an error message using flash data
            return redirect('/user/companyLogin')->with('error','Email or Password Invalid');
        }
    }

    public function logout(){
        session()->flush();
        return redirect('/user/login');
    }
}
