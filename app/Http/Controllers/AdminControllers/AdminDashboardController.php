<?php

namespace App\Http\Controllers\AdminControllers;
use App\Http\Controllers\AdminControllers\AdminDaoController;
use App\Http\Controllers\Controller; 

use Illuminate\Http\Request;
use App\Http\Controllers\AdminControllers\AdminAuth; 
use App\Models\UserTable;
use App\Models\agency;
class AdminDashboardController extends Controller
{
    // public function __construct(){
    //     $auth = new AdminAuth();
    // }
    
    public function dashboard(){
        if(session('admin_login')){
            $userCount = count(UserTable::all());
            $agencyCount = count(agency::all());
            
            $totalCount = $userCount + $agencyCount;
            return view('Myadmin.index',['totalUser'=>$totalCount,'agency'=>$agencyCount]);  
        }
        else{
            return redirect("/Myadmin/login");
        }
    }
}
