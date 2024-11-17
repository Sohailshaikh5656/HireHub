<?php

namespace App\Http\Controllers\CompanyControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; 
use App\Models\agency_profile;
use App\Models\agency;
use App\Models\jobposting;
use App\Models\jobapplication;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class CompanyDashboardController extends Controller
{
    
    public function getDashboard(Request $request) 
    { 
        // Render the dashboard view if logged in
        if(session('agency_login')){
            $agency_id = (int) session("agency_id");
            $Company = agency::find($agency_id)->first();
            $CompanyProfile = agency_profile::where('agency_id',$agency_id)->first();
            session(['agency_name'=>$Company->agency_name]);
            session(['agency_image'=>$CompanyProfile->image_url]);

            $today = Carbon::now()->subDay();
            $jobPost = jobposting::where("agency_id", $agency_id)->count();
            $todayJobPost = jobposting::where("agency_id", $agency_id)
                ->whereDate("created_at", "=", $today->toDateString())
                ->count();
            $totalApplication = count(DB::select("SELECT jobapplication.id from jobapplication 
                JOIN jobposting ON jobposting.id = jobapplication.job_posting_id where jobposting.agency_id = ?    
                ", [$agency_id]));


            $todayTotalApplication = count(DB::select("SELECT jobapplication.id from jobapplication 
            JOIN jobposting ON jobposting.id = jobapplication.job_posting_id where jobposting.agency_id = ? and jobapplication.created_at = ?   
            ", [$agency_id, $today]));
                        
            $post = DB::select("
                select jobcategories.category_name as cata, jobposting.id as id,jobposting.job_post_name,jobposting.description,
                jobposting.degree from jobposting JOIN jobcategories ON jobcategories.id = jobposting.jobcategory_id and jobposting.agency_id=?
            ",[$agency_id]);
            return view("Company.pages.dashboard",['Company'=>$Company,'CompanyProfile'=>$CompanyProfile, "post"=>$post, "jobPost"=>$jobPost,"todayTotalApplication"=>$todayTotalApplication,"totalApplication"=>$totalApplication,"todayJobPost"=>$todayJobPost,"todayJobPost"]);
        }
        else{
            return redirect("/user/companyLogin");
        }
       
    } 

    public function logout()
    {
        // Clear all session data
        session()->flush();
        return redirect('/user/companyLogin'); // Redirect to the login page
    }
}
