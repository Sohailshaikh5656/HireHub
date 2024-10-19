<?php

namespace App\Http\Controllers\UserControllers;
use App\Http\Controllers\Controller; 
use Illuminate\Support\Facades\DB;
use App\Models\contact;
use App\Models\jobposting;
use App\Models\agency;
use App\Models\agency_profile;
use App\Models\state;
use App\Models\city;
use App\Models\jobapplication;
use Illuminate\Http\Request;



class JobController extends Controller
{
    public function singleJobPage(Request $req,$id){
        $jobData = jobposting::findOrFail($id);
        $agency = agency::find($jobData->agency_id);
        $agency_profile = agency_profile::where('agency_id',$jobData->agency_id)->first();
        $state = state::find($jobData->state_id)->first();
        $city = city::find($jobData->city_id)->first();
        return view("user.singleJobPage",['jobData'=>$jobData,'agency'=>$agency,'agency_profile'=>$agency_profile,'city'=>$city,'state'=>$state]);
    }

    public function apply(Request $req,$id){
        if(session('user_login')){
            $user_id = (int)session("user_id");
            $data = jobapplication::where('user_id',$user_id)->where('job_posting_id',$id)->first();
            if(is_null($data)){
                $newData = new jobapplication();
                $newData->user_id = $user_id;
                $newData->job_posting_id = $id;
                $newData->save();
                session(['success'=>true]);
                return redirect("/user/singleJobPage/$id");
            }
            else{
                session(['error'=>true]);
                return redirect("/user/singleJobPage/$id");
            }
        }else{
            return redirect("/user/login");
        }
    }
}
