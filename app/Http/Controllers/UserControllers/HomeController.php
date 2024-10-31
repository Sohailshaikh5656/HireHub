<?php
namespace App\Http\Controllers\UserControllers;
use App\Http\Controllers\Controller; 
use Illuminate\Support\Facades\DB;
use App\Models\contact;
use App\Models\jobposting;
use Illuminate\Http\Request;
use App\Models\UserTable;
use App\Models\agency;


class HomeController extends Controller
{
    public function Home(Request $req){
        $jobList = DB::select("SELECT 
            jobposting.job_post_name,
            jobposting.id As id,
            state.state_name AS state,
            city.city_name AS city,
            agency.agency_name,
            agency_profile.image_url AS images,
            jobposting.min_salary AS minSalary,
            jobposting.max_salary AS maxSalary
            FROM jobposting
            JOIN state ON state.id = jobposting.state_id
            JOIN city ON city.id = jobposting.city_id
            JOIN agency ON agency.id = jobposting.agency_id
            JOIN agency_profile ON agency_profile.agency_id = agency.id
        ");
        $userCount = count(UserTable::all());
        $rowCount = count($jobList);
        $agencyCount = count(agency::all());
        $jobPosting = count(jobposting::all());

        return view("user.index",['jobList'=>$jobList,'count'=>$rowCount,'userCount'=>$userCount,'agency'=>$agencyCount,"jobPosting"=>$jobPosting]);
    }

    
}
