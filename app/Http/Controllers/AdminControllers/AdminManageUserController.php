<?php

namespace App\Http\Controllers\AdminControllers;
use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use App\Http\Controllers\AdminControllers\AdminDaoController;

class AdminManageUserController extends Controller
{
    // protected $i;
    // public function _construct(){
    //     $this->i = (new AdminDaoController())->admin_login_chk();;
    // }
    public function allUser(){
        $admin_chk = new AdminDaoController;
        $i = $admin_chk->admin_login_chk();
        if($i==1){
            return view('Myadmin.Alluser');
        }
        else{
            return redirect('Myadmin/login');
        }
        
    }

    public function userBlock(){
        $admin_chk = new AdminDaoController;
        $i = $admin_chk->admin_login_chk();
        if($i==1){
            return view('Myadmin.userBlock');
        }
        else{
            return redirect('Myadmin/login');
        }
        
    }

    public function userReport(){
        $admin_chk = new AdminDaoController;
        $i = $admin_chk->admin_login_chk();
        if($i==1){
            return view('Myadmin.userReport');
        }
        else{
            return redirect('Myadmin/login');
        }
        
    }
}
