<?php

namespace App\Http\Controllers\UserControllers;
use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use App\Models\education;
use App\Models\experience;
use App\Models\certificate;
use App\Models\skill;
use App\Models\user_profile;
use App\Models\UserTable;
use App\Models\jobposting;
use App\Models\agency;
use App\Models\state;
use App\Models\city;
use App\Models\resume;
use App\Models\jobapplication;

use Illuminate\Support\Facades\DB;

class UserResumeControlller extends Controller
{
    public function allResume(){
        if(session("user_login")){
            $allresume = resume::all();
            return view("user.allResumeTemplate",['resume'=>$allresume]);
        }else{
            return redirect("/user/login");
        }
    } 

    public function selectedResume($id){
        if(session('user_login')){
            $data = resume::find($id);
            $name = explode('.',$data->url);
            $templateName = $name[0];
            $user_id = (int) session("user_id");
            //Trying to pass User Data
            $user = UserTable::findOrFail($user_id);    
            $userProfile = user_profile::where('user_id',$user_id)->first();
            $state = state::find($userProfile->state_id);
            $city = city::find($userProfile->city_id);
            $edu = education::where('user_id',$user_id)->get();
            $exp = experience::where('user_id',$user_id)->get();
            $award = certificate::where('user_id',$user_id)->get();
            $skill = skill::where('user_id',$user_id)->first();
            $array = explode(',',$skill->skill);

            return view("ResumeTemplate.$templateName",['user'=>$user,'userProfile'=>$userProfile,'edu'=>$edu,'exp'=>$exp,'skill'=>$array,'certi'=>$award,'city'=>$city,'state'=>$state]);
        }else{
            return redirect("/user/login");
        }
    }
}
