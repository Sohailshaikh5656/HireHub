<?php

namespace App\Http\Controllers\AdminControllers;
use App\Models\JobSubCategories;
use Illuminate\Support\Facades\DB;
use App\Models\JobCategories;
use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;

class AdminSubJobController extends Controller
{
    public function addjobSubCategory(){
        $data = JobCategories::all();
        return view('Myadmin.addSubJob',['jd'=>$data]);
    }

    public function store_subjob(Request $req){
        $validateData = $req->validate([
            'name'=>'required|string|min:5',
            'category'=>'required|integer',
            'description'=>'required|string|min:10',
            'status'=>'required'
        ]);

        $addjob = new JobSubCategories();
        $addjob->job_sub_category = $validateData['name'];
        $addjob->description = $validateData['description'];
        $addjob->status = $validateData['status']==="Active";
        $addjob->jobcategory_id = $validateData['category'];
        $addjob->save();
        session(['addSubjob'=>true]);
        return redirect('/Myadmin/allSubJob');

    }
    public function allSubJob() {
        $data = DB::select("
        SELECT jobsubcategories.id, jobsubcategories.job_sub_category, jobsubcategories.description,
        jobsubcategories.status, jobcategories.category_name as category_name 
        FROM jobsubcategories 
        JOIN jobcategories
        ON jobsubcategories.jobcategory_id = jobcategories.id
        ");  // Use the correct model name 'JobCatagories'
         return view('Myadmin.allSubJob', ['jd' => $data]);
    }
    public function editSubJob($id){
        $data = JobSubCategories::findOrFail($id);
        $cat = JobCategories::all();
        return view('Myadmin.editSubJob',['data'=>$data,'cat'=>$cat]);
    }
    public function updateSubJob(Request $req,$id){
        $data = JobSubCategories::findOrFail($id);
        $validateData = $req->validate([
            'name'=>'required|string|min:5',
            'category'=>'required|integer',
            'description'=>'required|string|min:10',
            'status'=>'required'
        ]);

        $data->job_sub_category=$validateData['name'];
        $data->description = $validateData['description'];
        $data->status = $validateData['status'];
        $data->jobcategory_id = $validateData['category'];
        $data->save();
        session(['subjob'=>true]);
        return redirect('/Myadmin/allSubJob');

    }
    public function deleteSubJob($id){
        $data = JobSubCategories::findOrFail($id);
        $data->delete();
        session(['delete'=>true]);
        return \redirect("/Myadmin/allSubJob");
    }
}
