<?php

namespace App\Http\Controllers\CompanyControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; 

class CompanyDashboardController extends Controller
{
    
    public function getDashboard(Request $request) 
    { 
        // Render the dashboard view if logged in
        if(session('agency_login')){
            return view("Company.pages.dashboard");
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
