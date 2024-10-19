<?php

namespace App\Http\Controllers\CompanyControllers;
use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use App\Http\Controllers\CompanyControllers\CompanyAuth; 
use App\Models\state;
use App\Models\city;
use App\Models\agency;
use App\Models\agency_profile;
use App\Models\JobCategories;
use App\Models\JobSubCategories;
use App\Models\jobposting;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Hash;


class CompanyManageJobPosting extends Controller
{
    // public function __construct(){
    //     $auth = new companyAuth();
    // }
    
    
    public function newJobPosting(){
        if(session('agency_login')){
            $jobCategory = JobCategories::all();
            $jobSubCategories = JobSubCategories::all();
            $state = state::all();
            $city = city::all();
            return view('Company.pages.newJobPosting',['job'=>$jobCategory,'subJob'=>$jobSubCategories,'state'=>$state, 'city'=>$city]);
        }
        else{
            return redirect('/user/companyLogin');
        }
       
    }
    public function manageJobPosting(){

        if(session('agency_login')){
            $agency_id = (int) session('agency_id');
            $post = DB::select("
                select jobcategories.category_name as cata, jobposting.id as id,jobposting.job_post_name,jobposting.description,
                jobposting.degree from jobposting JOIN jobcategories ON jobcategories.id = jobposting.jobcategory_id and jobposting.agency_id=? 
            ",[$agency_id]);
            return view("Company.pages.manageJobPosting",['post'=>$post]);
        }
        else{
            return redirect('/user/companyLogin');
        }
        
    }

    public function storeJobPosting(Request $req){
        if(session('agency_login')){
            $ValidateData = $req->validate([
                'job_category'=> 'required|integer',
                'job_sub_category'=> 'required|string',
                'min_sal'=>'required',
                'max_sal'=>'required',
                'min_exp'=>'required',
                'max_exp'=>'required',
                'degree_require'=>'required',
                'requirement'=>'required|string',
                'description'=> 'required|string',
                'state_id'=>'required|not_in:0',
                'city_id'=>'required|not_in:0',
                'DeadLine'=>"required|date",
                "benefit"=>"required|string"
                
            ]);

            if($ValidateData){
                $newJobPosting = new jobposting();
                $newJobPosting->jobcategory_id = $ValidateData['job_category'];
                $newJobPosting->job_post_name = $ValidateData['job_sub_category'];
                $newJobPosting->description = $ValidateData['description'];
                $newJobPosting->requirement = $ValidateData['requirement'];
                $newJobPosting->min_salary = $ValidateData['min_sal'];
                $newJobPosting->max_salary = $ValidateData['max_sal'];
                $newJobPosting->min_experience = $ValidateData['min_exp'];
                $newJobPosting->max_experience = $ValidateData['max_exp'];
                $newJobPosting->degree = $ValidateData["degree_require"];
                $newJobPosting->state_id = $ValidateData['state_id'];
                $newJobPosting->city_id = $ValidateData['city_id'];
                $newJobPosting->agency_id = (int) session('agency_id');
                $newJobPosting->Deadline = $ValidateData['DeadLine'];
                $newJobPosting->benefit = $ValidateData['benefit'];
                $newJobPosting->save();
                session(['newJob_addes'=>true]);
                return redirect("/Company/manageJobPosting");
            }
        }

        else{
            return redirect("/user/companyLogin");
        }
    }

    public function postViewmore(Request $req,$id){
        if(session("agency_login")){
            $data = jobposting::find($id);
            $categoryData = jobcategories::find($data->jobcategory_id);
            $state = state::find($data->state_id);
            $city = city::find($data->city_id);
            return view("Company.pages.viewmoreJobPosting",['data'=>$data,'categoryData'=>$categoryData,'state'=>$state,'city'=>$city]);
        }
        else{
            return redirect("/user/companyLogin");
        }
        
    }

    public function postEdit(Request $req, $id){
        if(session("agency_login")){
            $data = jobposting::find($id);
            if($data){
                $job = JobCategories::all();
                $subJob = JobSubCategories::all();
                $state = state::all();
                $city = city::all();
                return view("Company.pages.postEdit",['data'=>$data,'job'=>$job,'subJob'=>$subJob,'city'=>$city,'state'=>$state]);
            }
            else{
                return redirect("/Company/manageJobPosting");
            }
        }
        else{
            return redirect("/user/companyLogin");
        }
        
    }

    public function updateJobPosting(Request $req, $id){
        if(session("agency_login")){
            $record = jobposting::findOrFail($id);
            if($record){
                $ValidateData = $req->validate([
                    'job_category'=> 'required|integer',
                    'job_sub_category'=> 'required|string',
                    'min_sal'=>'required',
                    'max_sal'=>'required',
                    'min_exp'=>'required',
                    'max_exp'=>'required',
                    'degree_require'=>'required',
                    'requirement'=>'required|string',
                    'description'=> 'required|string',
                    'state_id'=>'required|not_in:0',
                    'city_id'=>'required|not_in:0',
                    'DeadLine'=>"required|date",
                    "benefit"=>"required|string"
                    
                ]);
                if($ValidateData){
                    $record->jobcategory_id = $ValidateData['job_category'];
                    $record->job_post_name = $ValidateData['job_sub_category'];
                    $record->description = $ValidateData['description'];
                    $record->requirement = $ValidateData['requirement'];
                    $record->min_salary = $ValidateData['min_sal'];
                    $record->max_salary = $ValidateData['max_sal'];
                    $record->min_experience = $ValidateData['min_exp'];
                    $record->max_experience = $ValidateData['max_exp'];
                    $record->degree = $ValidateData["degree_require"];
                    $record->state_id = $ValidateData['state_id'];
                    $record->city_id = $ValidateData['city_id'];
                    $record->agency_id = (int) session('agency_id');
                    $newJobPosting->Deadline = $ValidateData['DeadLine'];
                    $newJobPosting->benefit = $ValidateData['benefit'];
                    $record->save();
                    session(['postingUpdate'=>true]);
                    return redirect("/Company/manageJobPosting");
                }
            }else{
                return redirect("/Company/manageJobPosting");
            }
        }
        else{
            return redirect("/user/companyLogin");
        }
    }

    public function postDelete(Request $req,$id){
        $data = jobposting::findOrFail($id);
        if(session("agency_login") && $data){
            $data->delete();
            session(['delete'=>true]);
            return redirect("/Company/manageJobPosting");
        }
        else{
            return redirect("/user/companyLogin");
        }
       
    }
    
}
