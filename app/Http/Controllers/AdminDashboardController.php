<?php

namespace App\Http\Controllers;
use App\Http\Controllers\AdminDaoController;

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
