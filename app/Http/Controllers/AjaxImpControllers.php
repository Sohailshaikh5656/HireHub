<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\city;
use App\Models\JobSubCategories;

class AjaxImpControllers extends Controller
{
    //
    public function getCities($stateId){
        $cities = City::where('state_id', $stateId)->orderBy("city_name")->get(); // Adjust according to your City model

        return response()->json(['cities' => $cities]);
    }
    public function getSubJob($jobId){
        $subJob = JobSubCategories::where('jobcategory_id', $jobId)->orderBy("job_sub_category")->get(); // Adjust according to your City model

        return response()->json(['subJob' => $subJob]);
    }

}
