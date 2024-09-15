<?php

namespace App\Http\Controllers\CompanyControllers;
use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;

class CompanyManageJobPosting extends Controller
{
    public function newJobPosting(){
        return view('Company.pages.newJobPosting');
    }
    public function manageJobPosting(){
        return view("Company.pages.manageJobPosting");
    }
}
