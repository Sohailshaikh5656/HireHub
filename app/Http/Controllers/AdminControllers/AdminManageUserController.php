<?php

namespace App\Http\Controllers\AdminControllers;
use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use App\Http\Controllers\AdminControllers\AdminDaoController;
use App\Http\Controllers\AdminControllers\AdminAuth; 
use App\Models\UserTable;
use App\Models\user_profile;
use App\Models\state;
use App\Models\city;
use App\Models\certificate;
use App\Models\skill;
use App\Models\experience;
use App\Models\education;
use Illuminate\Support\Facades\DB;


class AdminManageUserController extends Controller
{
    // protected $i;
    // public function _construct(){
    //     $this->i = (new AdminDaoController())->admin_login_chk();;
    // }
    
    
    public function allUser(){
        $data = DB::select("SELECT 
        user.first_name, user.last_name, user.id, user.email, user_profile.contact, user_profile.ImageUrl
        from user JOIN user_profile on user.id = user_profile.user_id;");
        return view('Myadmin.Alluser',['data'=>$data]);
        
    }

    public function userBlock(){
        if(session("admin_login")){
            $data = DB::select("SELECT
                user.id, user.first_name, user.last_name, user.email,
                user_profile.contact, user_profile.ImageUrl 
                FROM user JOIN user_profile ON user.id = user_profile.user_id
                where user.isBlocked = 0;
            ");

            return view('Myadmin.userBlock',['data'=>$data]);
        }else{
            return redirect("/Myadmin/login");
        }
        
        
    }

    public function userBlocking($id){
        if(session("admin_login")){
            $block = UserTable::findOrFail($id);
            $block->isBlocked = true;
            $block->save();
            return Redirect("/Myadmin/userBlock")->with("blocked","User has been Blocked !");
        }
    }

    public function userReport(){
        if(session("admin_login")){
            $data = DB::select("SELECT
            user.id, user.first_name, user.last_name, user.email,
            user_profile.contact, user_profile.ImageUrl 
            FROM user JOIN user_profile ON user.id = user_profile.user_id
            where user.isBlocked = 1;
        ");
            return view('Myadmin.userUnblock',['data'=>$data]); 
        }
       
        else{
            return redirect("/Myadmin/login");
        }
        
    }
    public function userUnBlocking($id){
        if(session("admin_login")){
            $block = UserTable::findOrFail($id);
            $block->isBlocked = false;
            $block->save();
            return Redirect("/Myadmin/userReport")->with("blocked","User has been UnBlocked !");
        }
        else{
            return redirect("/Myadmin/login");
        }
    }

    public function userViewmore($id){
        if(session("admin_login")){
            $user = UserTable::findOrFail($id);
            $userProfile = user_profile::where("user_id",$user->id)->first();
            $edu = education::where("user_id",$user->id)->get();
            $exp = experience::where("user_id",$user->id)->get();
            $certi = certificate::where("user_id",$user->id)->get();
            $state = state::find($userProfile->state_id);
            $city = city::find($userProfile->city_id);
            $skill = skill::where("user_id",$user->id)->first();
            $array = explode(',',$skill->skill);

            return view("Myadmin.userViewmore",['user'=>$user,
                'userProfile'=>$userProfile,
                'edu'=>$edu,
                'exp'=>$exp,
                'certi'=>$certi,
                'state'=>$state,
                'city'=>$city,  
                'skill'=>$array
            ]);
        }
        else{
            return redirect("/Myadmin/login");
        }
    }
}
