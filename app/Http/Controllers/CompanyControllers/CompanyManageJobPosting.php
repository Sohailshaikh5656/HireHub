<?php

namespace App\Http\Controllers\CompanyControllers;
use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use App\Http\Controllers\CompanyControllers\CompanyAuth; 
use App\Models\state;
use App\Models\city;
use App\Models\agency;
use App\Models\agency_profile;
use Illuminate\Support\Facades\Hash;


class CompanyManageJobPosting extends Controller
{
    // public function __construct(){
    //     $auth = new companyAuth();
    // }
    
    
    public function newJobPosting(){
        if(session('agency_login')){
            return view('Company.pages.newJobPosting');
        }
        else{
            return redirect('/user/companyLogin');
        }
       
    }
    public function manageJobPosting(){

        if(session('agency_login')){
            return view("Company.pages.manageJobPosting");
        }
        else{
            return redirect('/user/companyLogin');
        }
        
    }
}
