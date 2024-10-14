<?php

namespace App\Http\Controllers\AdminControllers;
use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use App\Http\Controllers\AdminControllers\AdminDaoController;
use App\Http\Controllers\AdminControllers\AdminAuth; 


class AdminManageUserController extends Controller
{
    // protected $i;
    // public function _construct(){
    //     $this->i = (new AdminDaoController())->admin_login_chk();;
    // }
    
    
    public function allUser(){
    
            return view('Myadmin.Alluser');
        
    }

    public function userBlock(){
        return view('Myadmin.userBlock');
        
    }

    public function userReport(){
       
        return view('Myadmin.userReport');
        
    }
}
