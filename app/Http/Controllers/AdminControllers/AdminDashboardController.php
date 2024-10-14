<?php

namespace App\Http\Controllers\AdminControllers;
use App\Http\Controllers\AdminControllers\AdminDaoController;
use App\Http\Controllers\Controller; 

use Illuminate\Http\Request;
use App\Http\Controllers\AdminControllers\AdminAuth; 

class AdminDashboardController extends Controller
{
    // public function __construct(){
    //     $auth = new AdminAuth();
    // }
    
    public function dashboard(){
        if(session('admin_login')){
            return view('Myadmin.index');  
        }
        else{
            return redirect("/Myadmin/login");
        }
    }
}
