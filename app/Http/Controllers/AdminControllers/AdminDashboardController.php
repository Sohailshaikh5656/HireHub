<?php

namespace App\Http\Controllers\AdminControllers;
use App\Http\Controllers\AdminControllers\AdminDaoController;
use App\Http\Controllers\Controller; 

use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    
    public function dashboard(){
        $admin_chk = new AdminDaoController;
        $i = $admin_chk->admin_login_chk();
        if($i==1){
            return view('Myadmin.index');
        }
        else{
            return redirect('Myadmin/login');
        }
        
    }
}
