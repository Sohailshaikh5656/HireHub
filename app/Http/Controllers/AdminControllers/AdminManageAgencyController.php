<?php

namespace App\Http\Controllers\AdminControllers;
use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;

class AdminManageAgencyController extends Controller
{
    public function accept_reject(){
        $admin_chk = new AdminDaoController;
        $i = $admin_chk->admin_login_chk();
        if($i==1){
            return view('Myadmin.accept_reject_Company');
        }
        else{
            return redirect('Myadmin/login');
        }
    }

    public function manageJobListing(){
        $admin_chk = new AdminDaoController;
        $i = $admin_chk->admin_login_chk();
        if($i==1){
            return view('Myadmin.manageJobListing');
        }
        else{
            return redirect('Myadmin/login');
        }
    }
    public function allCompany(){
        $admin_chk = new AdminDaoController;
        $i = $admin_chk->admin_login_chk();
        if($i==1){
            return view('Myadmin.allCompany');
        }
        else{
            return redirect('Myadmin/login');
        }
    }
}
