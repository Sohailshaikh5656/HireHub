<?php

namespace App\Http\Controllers\UserControllers;
use App\Http\Controllers\Controller; 
use App\Models\UserTable;
use App\Models\user_profile;
use App\Models\city;
use App\Models\state;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use App\Models\login_atemp;
use Illuminate\Support\Facades\Mail;
use App\Mail\sendMail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class UserControllers extends Controller
{
    public function loginPage(){
        return view('user.login');
    }
    public function register(){
        $state = state::orderBy("state_name")->get();
        $city = city::all();
        return view('user.register',['state'=>$state,'city'=>$city]);
    }

    public function regsiterUser(Request $req)
    {
        try {
            $validateData = $req->validate([
                'fname' => 'required|string|min:3',
                'lname' => 'required|string|min:3',
                'email' => 'required|string|email|unique:user,email', // Added unique validation
                'password' => [
                    'required',
                    'string',
                    'min:8',
                    'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[^a-zA-Z\d]).+$/'
                ],
                'address' => 'required|string|min:10',
                'gender' => 'required|string',
                'contact' => 'required|digits:10',
                'dob' => 'required|date|before:' . now()->subYears(16)->toDateString(),
                'state' => 'required|not_in:0',
                'city' => 'required|not_in:0',
                'profileImage' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);
    
            if ($req->input('password') === $req->input('confirmpassword') && $req->hasFile('profileImage')) {
                $user = new UserTable();
                $profile = new user_profile();
    
                // Handle the profile image upload
                $image = $req->file('profileImage');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('images/userData'), $imageName);
    
                $user->first_name = $validateData['fname'];
                $user->last_name = $validateData['lname'];
                $user->email = $validateData['email'];
                $user->password = bcrypt($validateData['password']);
                $user->isActive = true;
                $user->isBlocked = false;
                $user->last_login = Carbon::today();
    
                try {
                    $user->save();
    
                    // Save profile information
                    $profile->contact = (int)$validateData['contact'];
                    $profile->user_id = $user->id;
                    $profile->address = $validateData['address'];
                    $profile->gender = $validateData['gender'];
                    $profile->dob = $validateData['dob'];
                    $profile->state_id = $validateData['state'];
                    $profile->city_id = $validateData['city'];
                    $profile->ImageUrl = $imageName;
                    $profile->save();
    
                    session(['user_registered' => true]);
                    return redirect("/user/login");
                } catch (\Illuminate\Database\QueryException $e) {
                    if ($e->getCode() == 23000) { // Integrity constraint violation code
                       return redirect("/user/register")->with("error1", "Email Already Registered");

                    }
                    throw $e;
                }
            } else {
                session(['password_mismatch' => true]);
                return redirect("/user/register")->with("error", "Password Not match or Image Empty");
            }
        } catch (\Exception $ex) {
            return redirect("/user/register")->with("error", "Something went wrong: " . $ex->getMessage());
        }
    }
    
    public function userAuthChk(Request $request){
        $auth = $request->only('email','password');
        $user = UserTable::where('email',$auth['email'])->first();
        $temp = login_atemp::all();
        if($temp->isEmpty()){
            $data = new login_atemp();
            $data->success = 0;
            $data->fail = 0;
            $data->save();
        }
        $data = login_atemp::find(1);
        
        if($user && Hash::check($auth['password'], $user->password)){
            if(!$user->isActive){
                $data->fail = $data->fail + 1;
                $data->save();
                return redirect("/user/login")->with('non_active',"Wait for Approval Account !");
            }
            if($user->isBlocked){
                $data->fail = $data->fail + 1;
                $data->save();
                return redirect("/user/login")->with('non_active',"Your Account has been blocked for violeting T&C !");
            }
            session(['user_login'=>true]);
            session(['user_id'=>$user->id]);
            //Admin sensetive info
            session(['user_email'=>$user->email]);
            session(['user_name'=>$user->first_name]);

            $user->last_login = Carbon::today();
            $user->save();
            $data->success = $data->success + 1;
            $data->save();
            return redirect('/user/Home');
        }
        else{
            session(['error'=>true]);
            $data->fail = $data->fail + 1;
            $data->save();
            return redirect('/user/login')->with('error', 'Email or Password Invalid');
        }
    }

    public function logout(){
        session()->flush();
        return redirect('/user/login');
    }

    public function userForgetPasswordForm(){

        return view("user.userForgetPassword");
    }

    public function userForgetPasswordEmail(Request $req){
        $validateData = $req->validate(['email'=>"required|string"]);
        if($validateData){
            $user = UserTable::where("email",$validateData['email'])->first();
            if($user){
                $code = rand(1000,9999);
                Session::put('code', $code); // Set the session variable
                Session::put('code_expiration', now()->addMinutes(10)); 
                Session(["authEmail" => $user->email]); //email stores in Session
                $to=$user->email;
                $msg =  $msg="<p>We received a request to reset the password associated with your account. Please use the One-Time Password (OTP) below to verify your request and proceed with resetting your password:</p>
                        <p></p>                    
                    <p>Your OTP : <b>".$code."</b></p>
                    <p></p>
                    <p>This OTP is valid for the next 10 minutes.\nIf you did not request a password reset, please ignore this email or contact our support team if you suspect any unauthorized activity.</p>";
                    $subject = "Forget Password !";
                    // Headers for HTML email
                    $headers = "MIME-Version: 1.0" . "\r\n";
                    $headers .= "Content-Type: text/html; charset=UTF-8" . "\r\n";
        $this->SendEmail($to, $msg, $subject,$headers);
                return redirect("user/OTPEnter");
            }else{
                return redirect("/user/userForgetPasswordForm")->with("error","Email not Found !\n Try to Register with New Account");
            }
        }
    }
    
    public function SendEmail($to,$msg,$subject){
        Mail::to($to)->send(new sendMail($msg, $subject));
    }

    public function OTPEnter(){
        if(session('authEmail')){
            return view("user.OTPEnter");
        }else{
            return redirect("/user/login");
        }
    }

    public function userOTPChk(Request $req){
        $validateData = $req->validate([
            'OTP'=>"required|digits:4"
        ]);

        if($validateData){
            $trueOtp = (int) Session('code');
            if($validateData['OTP']==$trueOtp){
                return view("user.userChangePassword");
            }
            else{
                return redirect("/user/OTPEnter")->with("error","Enter valid OTP, Your OTP Incorrect");
            }
        }else{
            return redirect("/user/OTPEnter")->with("error","Enter valid OTP, Your OTP Incorrect");
        }
    }

    public function userUpdatePassword(Request $req){
        if(Session('authEmail')!=null && Session::has("code") && Session::get("code_expiration")>now()){
            $validateData = $req->validate([
                'password' => [
                    'required',
                    'string',
                    'min:8',
                    'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[^a-zA-Z\d]).+$/'
                ],
                'confirmPassword'=>"required|string",
            ]);
            if($req->input("password")===$req->input("confirmPassword")){
                $email = session("authEmail");
                $updateUserPassword = UserTable::where('email',$email)->first();
                $updateUserPassword->password = bcrypt($validateData['password']);
                $updateUserPassword->save();
                return redirect("/user/login")->with("error","Password has been Updated !");
            }else{
                return view("user.userChangePassword")->with("error","Password not matched !");
            }
        }else{
            return redirect("/user/OTPEnter")->with("error","Something Went Wrong !");
        }
    }

    public function OTPRefersh(Request $request)
    {
        $code = rand(1000, 9999);
        Session::put('code', $code); // Set the session variable
        Session::put('code_expiration', now()->addMinutes(10)); 
        Session::put('otp_lock_time', now()->addSeconds(45));

        $user = Session::get('authEmail'); // Retrieve the stored email
        if (!$user) {
            return response()->json(['error' => 'User email not found.'], 400);
        }

            $to = $user;
            $msg =  $msg="<p>We received a request to reset the password associated with your account. Please use the One-Time Password (OTP) below to verify your request and proceed with resetting your password:</p>
            <p></p>                    
            <p>Your OTP : <b>".$code."</b></p>
            <p></p>
            <p>This OTP is valid for the next 10 minutes.\nIf you did not request a password reset, please ignore this email or contact our support team if you suspect any unauthorized activity.</p>";
        $subject = "Forget Password !";
        // Headers for HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8" . "\r\n";
        $this->SendEmail($to, $msg, $subject,$headers);

        return response()->json(['lockTime' => 45, 'message' => 'OTP sent successfully.']);
    }

}
