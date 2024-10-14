<?php

namespace App\Http\Controllers\AdminControllers;
use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use App\Http\Controllers\AdminControllers\AdminAuth; 

class AdminManageAgencyController extends Controller
{
    
    public function accept_reject(){
        if(session('admin_login')){
            return view('Myadmin.accept_reject_Company');
        }
        else{
            return redirect("/Myadmin/login");
        }
    }

    public function manageJobListing(){
        
         if(session('admin_login')){
            return view('Myadmin.manageJobListing');
        }
        else{
            return redirect("/Myadmin/login");
        }
    }
    public function allCompany(){
        if(session('admin_login')){
            return view('Myadmin.allCompany');
        }
        else{
            return redirect("/Myadmin/login");
        }
       
    }
}
