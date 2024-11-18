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
use App\Models\UserTable;
use App\Models\user_profile;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use PDF;
use Dompdf\Dompdf;
use Dompdf\Options;
use App\models\login_atemp;

class AdminAllReportControllers extends Controller
{
    public function maiReportPage(){
        if(session('admin_login')){
            return view("Myadmin.reportAndAna");
        }else{
            return redirect("/Myadmin/login");
        }
    }

    public function userReportsView(){
        if(session("admin_login")){
            return view("Myadmin.Reports.userReportsView");
        }else{
            return redirect("/Myadmin/login");
        }
    }
    public function newUserRegistration(){
        if(session("admin_login")){
            $oneMonthAgo = Carbon::now()->subMonth();
            $user = DB::select("SELECT user.id,
                user.first_name, user.last_name, user.email, user_profile.contact, city.city_name, user_profile.imageUrl as imgurl
                From user JOIN user_profile ON user.id = user_profile.user_id
                Join city On city.id = user_profile.city_id
                 where user.created_at >= ?
            ",[$oneMonthAgo]);
           
            return view("Myadmin.Reports.newUserRegistration",['user'=>$user]);
        }else{
            return redirect("/Myadmin/login");
        }
    }

    public function PDF_newUserRegistration()
    {
        // Check if admin is logged in
        if (!session("admin_login")) {
            return redirect("/Myadmin/login");
        }

        try {
            // Fetch users registered within the last month
            $oneMonthAgo = Carbon::now()->subMonth();
            $users = DB::select("
                SELECT user.id,
                    user.first_name, user.last_name, user.email, 
                    user_profile.contact, city.city_name, 
                    user_profile.imageUrl as imgurl
                FROM user 
                JOIN user_profile ON user.id = user_profile.user_id
                JOIN city ON city.id = user_profile.city_id
                WHERE user.created_at >= ?
            ", [$oneMonthAgo]);
            // Generate and download the PDF
            $pdf = PDF::loadView("Myadmin.Reports.PDF_newUserRegistration", ['users' => $users]);
            return $pdf->download("NewRegistration.pdf");
        } catch (\Exception $e) {
            // Log the error for debugging
            \Log::error("Error generating PDF: " . $e->getMessage());

            // Redirect back with an error message
            return redirect()->back()->with('error', 'Failed to generate PDF. Please try again later.');
        }
    }


    public function newJobListing(){
        if(session("admin_login")){
            $data = DB::select("SELECT
                jobposting.id, agency.agency_name, jobposting.job_post_name as postName, 
                jobposting.description, jobposting.Deadline, jobposting.min_salary,
                jobposting.max_salary, jobposting.degree
                From jobposting Join agency on agency.id = jobposting.agency_id 
                where jobposting.created_at >= ?
            ",[Carbon::now()->subDay()]);
            return view("Myadmin.Reports.newJobListing",['data'=>$data]);
        }else{
            return redirect("/Myadmin/login");
        }
    }

    public function PDF_newJobListing() {
        if (session("admin_login")) {
            try {
                $data = DB::select("SELECT
                jobposting.id, agency.agency_name, jobposting.job_post_name as postName, 
                jobposting.description, jobposting.Deadline, jobposting.min_salary,
                jobposting.max_salary, jobposting.degree
                From jobposting Join agency on agency.id = jobposting.agency_id 
                where jobposting.created_at >= ?
            ",[Carbon::now()->subDay()]);
    
                // Convert images to Base64
                // foreach ($users as $user) {
                //     $imagePath = public_path($user->imgurl); // Get the absolute path
                //     if (file_exists($imagePath)) {
                //         // Convert the image to Base64
                //         $user->imgurl = 'data:image/png;base64,' . base64_encode(file_get_contents($imagePath));
                //     } else {
                //         $user->imgurl = null; // Handle missing images
                //     }
                // }
    
                // // Check if users are found
                // if (empty($users)) {
                //     return redirect()->back()->with('message', 'No new registrations found in the last month.');
                // }
    
                // Generate PDF
                $pdf_view = PDF::loadView("Myadmin.Reports.PDF_newJobListing",['data' => $data]);
                return $pdf_view->download("NewJobPosting.pdf");
    
            } catch (\Exception $e) {
                // Log the error and redirect back with an error message
                \Log::error("Error generating PDF: " . $e->getMessage());
                return redirect()->back()->with('error', 'Failed to generate PDF. Please try again later.');
            }
        } else {
            return redirect("/Myadmin/login");
        }
    }



    //Job Listing

    public function jobListingView(){
        if(session('admin_login')){
            return view("Myadmin.jobListingView");
        }else{
            return redirect("/Myadmin/login");
        }
    }
    
    public function topJobListing(){
        if(session('admin_login')){
            $data = DB::select("SELECT
                    jobposting.job_post_name AS postName,
                    COUNT(*) AS count
                FROM
                    jobposting
                GROUP BY
                    jobposting.job_post_name
                ORDER BY
                    count DESC
                LIMIT
                    10;          
            ");
            return view("Myadmin.Reports.topJobPosting",['data'=>$data]);
        }else{
            return redirect("/MMyadmin/login");
        }
    }

    public function PDF_topJobListing(){
        if(session('admin_login')){
            $data = DB::select("SELECT
                jobposting.job_post_name AS postName,
                    COUNT(*) AS count
                FROM
                    jobposting
                GROUP BY
                    jobposting.job_post_name
                ORDER BY
                    count DESC
                LIMIT
                    10;          
                ");
             $pdf_view = PDF::loadView("Myadmin.Reports.PDF_topJobPosting",['data'=>$data]);
             return $pdf_view->download("TopJobList.pdf");
        }else{
            return redirct("/Myadmin/login");
        }
    }

    public function expiresJob(){
        if(session("admin_login")){
            $today = Carbon::today();
            $data = DB::select("SELECT
                jobposting.id, agency.agency_name, jobposting.job_post_name as postName, 
                jobposting.description, jobposting.created_at, jobposting.Deadline, jobposting.min_salary,
                jobposting.max_salary, jobposting.degree
                From jobposting Join agency on agency.id = jobposting.agency_id 
                where jobposting.Deadline <= ?
            ",[$today]);
            return view("Myadmin.Reports.expiresJob",['data'=>$data]);
        }else{
            return redirect("/Myadmin/login");
        }
    }

    public function PDF_expiresJob(){
        if(session("admin_login")){
            $today = Carbon::today();
            $data = DB::select("SELECT
                jobposting.id, agency.agency_name, jobposting.job_post_name as postName, 
                jobposting.description, jobposting.created_at, jobposting.Deadline, jobposting.min_salary,
                jobposting.max_salary, jobposting.degree
                From jobposting Join agency on agency.id = jobposting.agency_id 
                where jobposting.Deadline <= ?
            ",[$today]);
             $pdf_view = PDF::loadView("Myadmin.Reports.PDF_expiresJob",['data'=>$data]);
             return $pdf_view->download("ExpiresJobData.pdf");
        }else{
            return redirect("/Myadmin/login");
        }
    }

    public function companyReportsView(){
        if(session('admin_login')){
            return view("Myadmin.CompanyReportsView");
        }else{
            return redirect("/Myadmin/login");
        }
    }

    public function newlyRegisterCompanies(){
        if(session("admin_login")){
            $newlyRegister =  DB::select("SELECT
             agency.id, agency.agency_name, agency.email, agency_profile.created_at, agency_profile.contact,
            city.city_name FROM agency JOIN agency_profile ON agency.id = agency_profile.agency_id 
            JOIN city ON agency_profile.city_id = city.id
            where agency.created_at >= ?
            ",[Carbon::now()->subDay()]);
            $unAuthorized = DB::select("SELECT
                agency.id, agency.agency_name, agency.email, agency_profile.created_at,agency_profile.contact,
                city.city_name FROM agency JOIN agency_profile ON agency.id = agency_profile.agency_id 
                JOIN city ON agency_profile.city_id = city.id
                where agency.isActive = 0 
            ");

           return view("Myadmin.Reports.newlyRegisterCompanies",['data1'=>$newlyRegister,'data2'=>$unAuthorized]);
        }else{
            return redirect("/Myadmin/login");
        }
    }


    public function PDF_newlyRegisterCompanies(){
        if(session("admin_login")){
            $newlyRegister =  DB::select("SELECT
             agency.id, agency.agency_name, agency.email, agency_profile.created_at, agency_profile.contact,
            city.city_name FROM agency JOIN agency_profile ON agency.id = agency_profile.agency_id 
            JOIN city ON agency_profile.city_id = city.id
            where agency.created_at >= ?
            ",[Carbon::now()->subDay()]);
            $unAuthorized = DB::select("SELECT
                agency.id, agency.agency_name, agency.email, agency_profile.created_at,agency_profile.contact,
                city.city_name FROM agency JOIN agency_profile ON agency.id = agency_profile.agency_id 
                JOIN city ON agency_profile.city_id = city.id
                where agency.isActive = 0 
            ");

            $pdf_view = PDF::loadView("Myadmin.Reports.PDF_newlyRegisterCompanies",['data1'=>$newlyRegister,'data2'=>$unAuthorized]);
            return $pdf_view->download("NewRegisterCompanies.pdf");
        }else{
            return redirect("/Myadmin/login");
        }
    }

    public function activeInactiveUser(){
        if(session('admin_login')){
            $activeUser = DB::select("SELECT 
                user.id, user.first_name AS fname,
                user.last_name AS lname,
                user.email, user_profile.contact, city.city_name
                FROM user JOIN user_profile ON user.id = user_profile.user_id 
                JOIN city ON user_profile.city_id = city.id
                where user.last_login >= ?
            ",[Carbon::now()->subMonth()]);

            $inActiveUser = DB::select("SELECT 
                user.id, user.first_name AS fname,
                user.last_name AS lname,
                user.email, user_profile.contact, city.city_name
                FROM user JOIN user_profile ON user.id = user_profile.user_id 
                JOIN city ON user_profile.city_id = city.id
                where user.last_login <= ?
            ",[Carbon::now()->subMonth()]);

            return view("Myadmin.Reports.activeInactiveUser",['data1'=>$activeUser,'data2'=>$inActiveUser]);
            
        }else{
            return redirect("/Myadmin/login");
        }
    }

    public function PDF_activeInactiveUser(){
        if(session('admin_login')){
            $activeUser = DB::select("SELECT 
                user.id, user.first_name AS fname,
                user.last_name AS lname,
                user.email, user_profile.contact, city.city_name
                FROM user JOIN user_profile ON user.id = user_profile.user_id 
                JOIN city ON user_profile.city_id = city.id
                where user.last_login >= ?
            ",[Carbon::now()->subMonth()]);

            $inActiveUser = DB::select("SELECT 
                user.id, user.first_name AS fname,
                user.last_name AS lname,
                user.email, user_profile.contact, city.city_name
                FROM user JOIN user_profile ON user.id = user_profile.user_id 
                JOIN city ON user_profile.city_id = city.id
                where user.last_login <= ?
            ",[Carbon::now()->subMonth()]);

            $pdf_view = PDF::loadView("Myadmin.Reports.PDF_activeInactiveUser",['data1'=>$activeUser,'data2'=>$inActiveUser]);
            return $pdf_view->download("ActiveInactiveUser.pdf");
        }else{
            return redirect("/Myadmin/login");
        }
    }

    public function activeInactiveAgency(){
        if(session("admin_login")){
            $activeAgency = DB::select("SELECT agency.id, agency.agency_name, agency.email,
                agency_profile.contact, city.city_name 
                From agency JOIN agency_profile on agency.id = agency_profile.agency_id
                JOIN city ON agency_profile.city_id = city.id where agency.last_login >= ?",[Carbon::now()->subMonth()]);

            $inActiveAgency = DB::select("SELECT agency.id, agency.agency_name, agency.email,
                agency_profile.contact, city.city_name 
                From agency JOIN agency_profile on agency.id = agency_profile.agency_id
                JOIN city ON agency_profile.city_id = city.id where agency.last_login <= ?",[Carbon::now()->subMonth()]);

                return view("Myadmin.Reports.activeInactiveAgency",['data1'=>$activeAgency,'data2'=>$inActiveAgency]);
        }else{
            return redirect("/Myadmin/login");
        }
    }

    public function PDF_activeInactiveAgency(){
        if(session("admin_login")){
            $activeAgency = DB::select("SELECT agency.id, agency.agency_name, agency.email,
                agency_profile.contact, city.city_name 
                From agency JOIN agency_profile on agency.id = agency_profile.agency_id
                JOIN city ON agency_profile.city_id = city.id where agency.last_login >= ?",[Carbon::now()->subMonth()]);

            $inActiveAgency = DB::select("SELECT agency.id, agency.agency_name, agency.email,
                agency_profile.contact, city.city_name 
                From agency JOIN agency_profile on agency.id = agency_profile.agency_id
                JOIN city ON agency_profile.city_id = city.id where agency.last_login <= ?",[Carbon::now()->subMonth()]);

                $pdf_view = PDF::loadView("Myadmin.Reports.PDF_activeInactiveAgency",['data1'=>$activeAgency,'data2'=>$inActiveAgency]);
                return $pdf_view->download("ActiveInactiveAgency.pdf");
        }else{
            return redirect("/Myadmin/login");
        }
    }

    public function loginAttempt(){
        if(session("admin_login")){
            $data = login_atemp::find(1);
            return view("Myadmin.Reports.loginAttempView",['data'=>$data]);
        }else{
            return redirect("/Myadmin/login");
        }
    }
}
