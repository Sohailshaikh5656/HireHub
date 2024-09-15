<?php

namespace App\Http\Controllers\AdminControllers;
use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use App\Models\JobCategories;  

class AdminAddJobController extends Controller
{
    public function addJob(){
        $admin_chk = new AdminDaoController;
        $i = $admin_chk->admin_login_chk();
        if($i==1){
            return view('Myadmin.addJob');
        }
        else{
            return redirect('Myadmin/login');
        }
    }

    public function store_job(Request $request){
        $validateData = $request->validate([
            'name'=>'required|string|min:5',
            'description'=>'required|string|max:255|',
            'status'=>'required'
        ]);

        $addjob = new JobCategories();
        $addjob->category_name = $validateData['name'];
        $addjob->description = $validateData['description'];
        $addjob->status = $validateData['status'];
        $addjob->save();
        session(['job'=>true]);
        return redirect('/Myadmin/addJob');
    }

    public function allJob() {
        $data = JobCategories::all();  // Use the correct model name 'JobCatagories'
         return view('Myadmin.allJob', ['JobCategories' => $data]);
    }

    public function editJob($id){
        $data = JobCategories::findOrFail($id);
        return view('Myadmin.editJob',['cata'=>$data]);
    }

    public function update_job(Request $request,$id){
        $data = JobCategories::findOrFail($id);
        $validateData = $request->validate([
            'name'=>'required|string|min:5',
            'description'=>'required|string|max:255|',
            'status'=>'required'
        ]);
        $data->category_name = $validateData['name'];
        $data->description = $validateData['description'];
        $data->status = $validateData['status'];
        $data->save();
        session(['job'=>true]);
        return redirect('/Myadmin/addJob');
    }
    public function deleteJob($id){
        $data = JobCategories::findOrFail($id);
        $data->delete();
        session(["deleted"=>true]);
        return redirect("/Myadmin/allSubJob");
    }

}
