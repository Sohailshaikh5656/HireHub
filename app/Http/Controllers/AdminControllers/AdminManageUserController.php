<?php

namespace App\Http\Controllers\AdminControllers;
use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use App\Http\Controllers\AdminControllers\AdminDaoController;
use App\Http\Controllers\AdminControllers\AdminAuth; 
use App\Models\UserTable;
use App\Models\user_profile;
use App\Models\state;
use App\Models\city;
use App\Models\certificate;
use App\Models\skill;
use App\Models\experience;
use App\Models\education;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\sendMail;
use Illuminate\Support\Facades\Session;


class AdminManageUserController extends Controller
{
    // protected $i;
    // public function _construct(){
    //     $this->i = (new AdminDaoController())->admin_login_chk();;
    // }
    public function SendEmail($to,$msg,$subject){
        Mail::to($to)->send(new sendMail($msg, $subject));
    }   
    
    public function allUser(){
        $data = DB::select("SELECT 
        user.first_name, user.last_name, user.id, user.email, user_profile.contact, user_profile.ImageUrl
        from user JOIN user_profile on user.id = user_profile.user_id;");
        return view('Myadmin.Alluser',['data'=>$data]);
        
    }

    public function userBlock(){
        if(session("admin_login")){
            $data = DB::select("SELECT
                user.id, user.first_name, user.last_name, user.email,
                user_profile.contact, user_profile.ImageUrl 
                FROM user JOIN user_profile ON user.id = user_profile.user_id
                where user.isBlocked = 0;
            ");

            return view('Myadmin.userBlock',['data'=>$data]);
        }else{
            return redirect("/Myadmin/login");
        }
        
        
    }

    public function userBlocking($id){
        if(session("admin_login")){
            $block = UserTable::findOrFail($id);
            $to=$block->email;
            $msg = "<p>Dear {$block->first_name} {$block->lastname},</p>
            <p>We are pleased to inform you that your account has been successfully unlocked. After reviewing the situation, we have decided to restore access to your account. We apologize for any inconvenience caused, and if the issue arose due to an error on our part, we sincerely apologize.</p>
            <p>However, we would like to remind you to kindly adhere to our platform's rules and regulations going forward. It is important to maintain a positive and respectful environment for everyone. Any future violations may result in further actions taken against your account.</p>
            <p>Thank you for your patience and understanding during this process. We value you as part of our community and are excited to have you back.</p>
            <p>If you have any questions or concerns, feel free to reach out to us at [yasserkhalifa221@hirehub.com].</p>

            <br>
            <p>Thank you for your understanding and cooperation.</p><br>
            <p>Sincerely,</p>
            <p><strong>HireHub</strong></p>
            <p><strong>Email : [yasserkhalifa221@hirehub.com]</strong></p>
            
            ";
    
                        // Headers for HTML email
                        $headers = "MIME-Version: 1.0" . "\r\n";
                        $headers .= "Content-Type: text/html; charset=UTF-8" . "\r\n";
                        
            $subject = "Account Blocked Due to Violation of Rules and Regulations";

           
            $this->SendEmail($to, $msg, $subject,$headers);
            $block->isBlocked = true;
            $block->save();
            return Redirect("/Myadmin/userBlock")->with("blocked","User has been Blocked !");
        }
    }

    public function userReport(){
        if(session("admin_login")){
            $data = DB::select("SELECT
            user.id, user.first_name, user.last_name, user.email,
            user_profile.contact, user_profile.ImageUrl 
            FROM user JOIN user_profile ON user.id = user_profile.user_id
            where user.isBlocked = 1;
        ");
            return view('Myadmin.userUnblock',['data'=>$data]); 
        }
       
        else{
            return redirect("/Myadmin/login");
        }
        
    }
    public function userUnBlocking($id){
        if(session("admin_login")){
            $block = UserTable::findOrFail($id);
            $to=$block->email;
            $msg = "<p>Dear {$block->first_name} {$block->lastname},</p>
            <p>TWe are writing to inform you that your account has been temporarily blocked due to a violation of our platform's rules and regulations, as well as other concerns that have come to our attention. At [Your Company Name], we maintain a strict policy to ensure a safe and respectful environment for all users, and any breach of our terms of service is taken very seriously.</p>
            <p>As part of our investigation, we have identified actions that do not align with our community guidelines. Please be aware that any further violations may result in permanent actions taken against your account.</p>
            <p>If you believe this block was a mistake or if you have any questions regarding the reasons for the action taken, we encourage you to reach out to us at [yasserkhalifa221@hirehub.com].</p>
            <p>We kindly ask you to review our platform's rules and regulations, and take care to avoid any future violations to ensure that your account remains in good standing.</p>
            <br>
            <p>Thank you for your understanding and cooperation.</p><br>
            <p>Sincerely,</p>
            <p><strong>HireHub</strong></p>
            <p><strong>Email : [yasserkhalifa221@hirehub.com]</strong></p>
            
            ";
    
                        // Headers for HTML email
                        $headers = "MIME-Version: 1.0" . "\r\n";
                        $headers .= "Content-Type: text/html; charset=UTF-8" . "\r\n";
                        
            $subject = " Your Account Has Been Unlocked – Please Follow Our Rules and Regulations";

           
            $this->SendEmail($to, $msg, $subject,$headers);
            $block->isBlocked = false;
            $block->save();
            return Redirect("/Myadmin/userReport")->with("blocked","User has been UnBlocked !");
        }
        else{
            return redirect("/Myadmin/login");
        }
    }

    public function userViewmore($id){
        if(session("admin_login")){
            $user = UserTable::findOrFail($id);
            $userProfile = user_profile::where("user_id",$user->id)->first();
            $edu = education::where("user_id",$user->id)->get();
            $exp = experience::where("user_id",$user->id)->get();
            $certi = certificate::where("user_id",$user->id)->get();
            $state = state::find($userProfile->state_id);
            $city = city::find($userProfile->city_id);
            $skill = skill::where("user_id",$user->id)->first();
            $array = explode(',',$skill->skill);

            return view("Myadmin.userViewmore",['user'=>$user,
                'userProfile'=>$userProfile,
                'edu'=>$edu,
                'exp'=>$exp,
                'certi'=>$certi,
                'state'=>$state,
                'city'=>$city,  
                'skill'=>$array
            ]);
        }
        else{
            return redirect("/Myadmin/login");
        }
    }
}
