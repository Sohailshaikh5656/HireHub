<?php

namespace App\Http\Controllers\UserControllers;
use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use App\Models\state;
use App\Models\city;
use App\Models\agency;
use App\Models\agency_profile;
use App\Models\agency_certificate;
use App\Models\login_atemp;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

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
            $agency->last_login = Carbon::today();
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
        $temp = login_atemp::all();
        if($temp->isEmpty()){
            $data = new login_atemp();
            $data->success = 0;
            $data->fail = 0;
            $data->save();
        } 
        $data = login_atemp::find(1);
        if ($user && Hash::check($auth['password'], $user->password)) {
            if(!$user->isActive){
                $data->fail = $data->fail + 1;
                $data->save();
                return redirect("/user/companyLogin")->with('non_active',"Wait for Approval Account !");
            }
            if($user->isBlocked){
                $data->fail = $data->fail + 1;
                $data->save();
                return redirect("/user/companyLogin")->with('non_active',"Your Account has been blocked for violeting T&C !");
            }
            // Set session variables for the authenticated agency
            session([
                'agency_login' => true,
                'agency_id' => $user->id,
                'agency_email' => $user->email,
                'agency_name' => $user->agency_name,
            ]);
            
            //dd(session()->all());
            // Redirect to the dashboard after successful login
            $user->last_login = Carbon::today();
            $data->success = $data->success + 1;
            $user->save();
            $data->save();
            return redirect('/Company/Dashboard');
        } else {
            // Redirect with an error message using flash data
            $data->fail = $data->fail + 1;
            $data->save();
            return redirect('/user/companyLogin')->with('error','Email or Password Invalid');
        }
    }

    public function logout(){
        session()->flush();
        return redirect('/user/login');
    }

    public function agencyViewmore(){
        $data = DB::select("SELECT agency.id,
            agency_profile.image_url, agency.agency_name from agency 
            JOIN agency_profile ON agency.id = agency_profile.agency_id
            where agency.isBlocked = 0 AND agency.isActive = 1;
        ");
        $agencies = agency::all();
         $cities = city::all();
         $states = state::all();
        return view("user.aboutAllCompanies",['data'=>$data,'cities'=>$cities,'agencies'=>$agencies]);
    }

    public function companySearch($id){
        $agency = agency::find($id);
        $agencyProfile = agency_profile::where("agency_id",$id)->first();
        $state = state::find($agencyProfile->state_id);
        $city = city::find($agencyProfile->city_id);
        $cities = city::all();
        $states = state::all();
        $certi = agency_certificate::where("agency_id",$id)->get();

        $jobPosted = DB::select("SELECT
        jobposting.id,
        jobposting.job_post_name AS Post,
        agency.agency_name,
        city.city_name AS city,
        state.state_name AS state,
        agency_profile.image_url,
        jobposting.min_salary AS minSalary,
        jobposting.max_salary AS maxSalary
      FROM
        jobposting
        JOIN agency ON jobposting.agency_id = agency.id
        JOIN city ON city.id = jobposting.city_id
        JOIN state ON state.id = jobposting.state_id
        JOIN agency_profile ON agency_profile.agency_id = agency.id
      WHERE
        agency.id = ?; 
        ",[$id]);
        return view("/user/singleCompanyView",['agency'=>$agency,'agencyProfile'=>$agencyProfile,"state"=>$state,"city"=>$city,"certi"=>$certi,'states'=>$states,'cities'=>$cities,'jobs'=>$jobPosted]);
    }

    public function SearchAgencies(Request $req){
        $AgencyName = $req->agencyName;
        $AgencyName = strtolower($AgencyName);
            $data = DB::select("SELECT agency.id,
            agency_profile.image_url, agency.agency_name from agency 
            JOIN agency_profile ON agency.id = agency_profile.agency_id
            where agency.isBlocked = 0 AND agency.isActive = 1 AND LOWER(agency_name)=?;
        ",[$AgencyName]);
        $cities = city::all();
        $agencies = agency::all();
     return view("user.searchAgencies",['data'=>$data,'cities'=>$cities,'agencies'=>$agencies]);

    }
}
