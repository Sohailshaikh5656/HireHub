<?php

namespace App\Http\Controllers\CompanyControllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller; 

class CompanyDashboardController extends Controller
{
    public function getDashboard(){
        return view("Company.pages.dashboard");
    } 
}
