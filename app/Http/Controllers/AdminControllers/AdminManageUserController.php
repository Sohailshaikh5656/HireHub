<?php

namespace App\Http\Controllers\AdminControllers;
use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use App\Http\Controllers\AdminControllers\AdminDaoController;
use App\Http\Controllers\AdminControllers\AdminAuth; 
use App\Models\UserTable;
use Illuminate\Support\Facades\DB;


class AdminManageUserController extends Controller
{
    // protected $i;
    // public function _construct(){
    //     $this->i = (new AdminDaoController())->admin_login_chk();;
    // }
    
    
    public function allUser(){
        $data = DB::select("SELECT 
        user.first_name, user.last_name, user.id, user.email, user_profile.contact 
        from user JOIN user_profile on user.id = user_profile.user_id;");
        return view('Myadmin.Alluser',['data'=>$data]);
        
    }

    public function userBlock(){
        return view('Myadmin.userBlock');
        
    }

    public function userReport(){
       
        return view('Myadmin.userReport');
        
    }
}
