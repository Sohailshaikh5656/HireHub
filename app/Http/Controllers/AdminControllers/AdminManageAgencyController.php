<?php

namespace App\Http\Controllers\AdminControllers;
use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use App\Http\Controllers\AdminControllers\AdminAuth; 
use App\Models\agency;
use App\Models\agency_profile;
use App\Models\jobposting;
use App\Models\state;
use App\Models\city;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\sendMail;
use Illuminate\Support\Facades\Session;

class AdminManageAgencyController extends Controller
{
    public function SendEmail($to,$msg,$subject){
        Mail::to($to)->send(new sendMail($msg, $subject));
    }

    
    public function accept_reject(){
        if(session('admin_login')){
            $data = DB::select("SELECT
                agency.id,agency.agency_name, agency.email, agency_profile.est_date, agency_profile.contact,agency_profile.image_url
                FROM agency JOIN agency_profile ON agency.id = agency_profile.agency_id 
                WHERE agency.isActive = 0;
            ");

            return view('Myadmin.accept_reject_Company',['data'=>$data]);
        }
        else{
            return redirect("/Myadmin/login");
        }
    }

    public function agencyAccept($id){
        if(session("admin_login")){
            $data = agency::findOrFail($id);


            $to=$data->email;
            $msg = "<p>Dear {$data->agency_name},</p>
            <p>We are thrilled to inform you that your account has been successfully approved by our admin team!</p>
            <p>Welcome aboard! You are now part of our community, and we are excited to see you engage with our platform.</p>
            <p><strong>Congratulations once again, and thank you for choosing us!</strong></p>";
    
                        // Headers for HTML email
                        $headers = "MIME-Version: 1.0" . "\r\n";
                        $headers .= "Content-Type: text/html; charset=UTF-8" . "\r\n";
                        
            $subject = "Congratulations! Your Account Has Been Approved 🎉";

           
            try {
                $this->SendEmail($to, $msg, $subject, $headers);
            } catch (Exception $ex) {
                // Catch specific error message and display more informative message
                return redirect("/Myadmin/accept_reject_Company")->with("error", "Network error: Failed to send the email or update operations. Please check your internet connection.");
            }

            $data->isActive = true;
            $data->save();
            return redirect("/Myadmin/accept_reject_Company")->with('AccountStatus','Account Accepted Successfully !');
        }
        else{
            return redirect("/Myadmin/login");
        }
    }

    public function agencyReject($id){
        if(session("admin_login")){
            $data = agency::findOrFail($id);
            $to = $data->email;
            $msg = "<p>Dear {$data->agency_name},</p>
            <p>Thank you for your recent account registration. After a thorough review, we regret to inform you that your account has not been approved due to the lack of required document submissions and/or certain risks identified during our evaluation process.</p>
            <p>We recommend that you submit the necessary documents or make any required changes and submit a new application with a different email address. This will help us process your account more efficiently.</p>
            <p>We understand that this may be disappointing, but we are committed to ensuring the security and integrity of our platform, and as such, certain criteria must be met for approval.</p>
            <p>If you believe this decision was made in error or if you have any questions, please feel free to reach out to us at [yasserkhalifa221@hirehub.com].</p>
            <br>
            <p>Thank you for your understanding. We hope to see you reapply soon!</p><br>
            <p>Sincerely,</p>
            <p><strong>HireHub</strong></p>
            <p><strong>Email : [yasserkhalifa221@hirehub.com]</strong></p>";
    
            // Headers for HTML email
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-Type: text/html; charset=UTF-8" . "\r\n";
    
            $subject = "Your Account Approval Request Rejected";
    
            try {
                $this->SendEmail($to, $msg, $subject, $headers);
            } catch (Exception $ex) {
                // Catch specific error message and display more informative message
                return redirect("/Myadmin/accept_reject_Company")->with("error", "Network error: Failed to send the email or update operations. Please check your internet connection.");
            }
    
            // Delete related profile and account
            $dataProfile = agency_profile::where('agency_id', $data->id);
            $dataProfile->delete();
            $data->delete();
    
            return redirect("/Myadmin/accept_reject_Company")->with("AccountStatus", "Account Rejected or Deleted Successfully!");
        } else {
            return redirect("/Myadmin/login");
        }
    }
    

    public function agencyBlock($id){
        if(session("admin_login")){
            $data=agency::findOrFail($id);
            $to=$data->email;
            $msg = "<p>Dear {$data->agency_name},</p>
            <p>We regret to inform you that your account has been temporarily suspended due to a violation of our platform's policies. Maintaining a safe and compliant community is our priority, and we detected activity that does not align with our terms of use.</p>
            <p>If you believe this action was taken in error or wish to discuss this matter further, we encourage you to contact us at [yasserkhalifa221@hirehub.com]. Our team will review your case and provide assistance.</p>
            <p>Thank you for your understanding.</p>
            <p></p>
            <p>Sincerely,</p>
            <p><strong>HireHub</strong></p>
            <p><strong>Email : [yasserkhalifa221@hirehub.com]</strong></p>
            
            ";
    
                        // Headers for HTML email
                        $headers = "MIME-Version: 1.0" . "\r\n";
                        $headers .= "Content-Type: text/html; charset=UTF-8" . "\r\n";
                        
            $subject = "Account Suspended Due to Policy Violation";

           
            $this->SendEmail($to, $msg, $subject,$headers);
            $data->isBlocked = true;
            $data->save();
            return redirect("/Myadmin/allCompany")->with("AccountStatus","Successfully Blocked Account !");
        }
        else{
            return redirect("/Myadmin/login");
        }
    }
    public function agencyUnBlock($id){
        if(session("admin_login")){
            $data=agency::findOrFail($id);
            $to=$data->email;
            $msg = "<p>Dear {$data->agency_name},</p>
            <p>We are pleased to inform you that your account has been successfully unblocked. Congratulations! You can now access your account and continue using our platform.</p>
            <p>Please note that we value compliance with our platform's policies to maintain a safe and positive environment for everyone. We kindly request you to ensure no further violations occur to avoid any future inconveniences.</p>
            <p>If the suspension of your account was due to an error on our part, we sincerely apologize for any inconvenience caused. We are committed to providing a seamless experience and appreciate your understanding.</p>
            <p>Thank you for your patience throughout this process. If you have any further concerns or questions, feel free to reach out to us at [yasserkhalifa221@hirehub.com].</p>
            <br>
            <p>Sincerely,</p>
            <p><strong>HireHub</strong></p>
            <p><strong>Email : [yasserkhalifa221@hirehub.com]</strong></p>
            
            ";
    
                        // Headers for HTML email
                        $headers = "MIME-Version: 1.0" . "\r\n";
                        $headers .= "Content-Type: text/html; charset=UTF-8" . "\r\n";
                        
            $subject = " Your Account Has Been Unblocked – Congratulations!";

           
            $this->SendEmail($to, $msg, $subject,$headers);
            $data->isBlocked = false;
            $data->save();
            return redirect("/Myadmin/allBlockedCompany")->with("AccountStatus","Successfully UnBlocked Account !");
        }
        else{
            return redirect("/Myadmin/login");
        }
    }

    public function companyViewmore($id){
        if(session("admin_login")){
            $agency = agency::findOrFail($id);
            $agencyProfile = agency_profile::where('agency_id',$id)->first();
            $state = state::find($agencyProfile->state_id)->first();
            $city = city::find($agencyProfile->city_id)->first();
            return view('Myadmin.companyViewmore',['agency'=>$agency,'agencyProfile'=>$agencyProfile,'state'=>$state,'city'=>$city]);
        }else{
            return rediect("/Myadmin/login");
        }
    }

    //Blocked
    public function allBlockedCompany(){
        if(session('admin_login')){
            $data = DB::select("SELECT
            agency.id,agency.agency_name, agency.email, agency_profile.est_date, agency_profile.contact,agency_profile.image_url
            FROM agency JOIN agency_profile ON agency.id = agency_profile.agency_id 
            WHERE agency.isBlocked = 1;
        ");
            return view("Myadmin.allBlockedCompany",['data'=>$data]);
        }
    }


    public function manageJobListing(){
        
         if(session('admin_login')){
            $data = jobposting::all();
            return view('Myadmin.manageJobListing',['data'=>$data]);
        }
        else{
            return redirect("/Myadmin/login");
        }
    }
    public function allCompany(){
        if(session('admin_login')){
            $data = DB::select("SELECT
            agency.id,agency.agency_name, agency.email, agency_profile.est_date, agency_profile.contact,agency_profile.image_url
            FROM agency JOIN agency_profile ON agency.id = agency_profile.agency_id 
            WHERE agency.isActive = 1 and isBlocked = 0;
        ");
            return view('Myadmin.allCompany',['data'=>$data]);
        }
        else{
            return redirect("/Myadmin/login");
        }
    }
}
