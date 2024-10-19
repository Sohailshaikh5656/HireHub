<?php

namespace App\Http\Controllers\CompanyControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; 
use App\Models\agency_profile;
use App\Models\agency;

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
            return view("Company.pages.dashboard",['Company'=>$Company,'CompanyProfile'=>$CompanyProfile]);
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
