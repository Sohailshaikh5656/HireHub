<?php
namespace App\Http\Controllers\AdminControllers;
use App\Models\JobSubCategories;
use Illuminate\Support\Facades\DB;
use App\Models\resume;
use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use App\Http\Controllers\AdminControllers\AdminAuth; 

class AdminResume extends Controller
{


    public function resumeTemplate(){
        return view("Myadmin.resumeTemplate");
    }

    public function addResume(Request $req){
        if($req->hasFile('resumefile')){
            $data = new Resume();
            $file = $req->file('resumefile');

            $fileName = time() . '.blade.php';
            $file->move(resource_path('views/ResumeTemplate'), $fileName);
    
            $data->resume_name = $req->name;
            $data->url = $fileName;
            $data->save();
    
            session()->flash('added', true);  // Flash session for a single request
            return redirect("/Myadmin/resumeTemplate");
        }
        else {
            return redirect("/Myadmin/resumeTemplate")->with('empty', 'File is missing');
        }
    }
    
    
}
