<?php

namespace App\Http\Controllers;
use App\Models\JobSubCategories;
use App\Models\JobCategories;

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
        session(['job'=>true]);
        return redirect('/Myadmin/addSubJob');

    }
}
