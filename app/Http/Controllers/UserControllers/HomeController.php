<?php
namespace App\Http\Controllers\UserControllers;
use App\Http\Controllers\Controller; 
use Illuminate\Support\Facades\DB;
use App\Models\contact;
use App\Models\jobposting;
use Illuminate\Http\Request;
use App\Models\UserTable;
use App\Models\agency;
use App\Models\city;
use Carbon\Carbon;


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
            where jobposting.Deadline >= ?
        ",[Carbon::now()]);

        $city = city::orderBy("city_name")->get();
        $userCount = count(UserTable::all());
        $rowCount = count($jobList);
        $agencyCount = count(agency::all());
        $jobPosting = count(jobposting::all());

        return view("user.index",['jobList'=>$jobList,'count'=>$rowCount,'userCount'=>$userCount,'agency'=>$agencyCount,"jobPosting"=>$jobPosting,'city'=>$city]);
    }

    public function jobSearch(Request $req)
{
    $searchText = $req->input('searchText');
    $searchCity = $req->input('searchCity');

    // Start building the base query
            $query = "
                SELECT 
                    jobposting.job_post_name,
                    jobposting.id AS id,
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
            ";

            // Initialize conditions array
            $conditions = [];
            $bindings = [];

            // Add conditions based on provided search criteria
            if ($searchCity !== 'Anywhere' && $searchCity) {
                $conditions[] = "city.city_name = :searchCity";
                $bindings['searchCity'] = $searchCity;
            }
            
            if ($searchText) {
                $conditions[] = "LOWER(jobposting.job_post_name) LIKE :searchTextPattern";
                $bindings['searchTextPattern'] = '%' . strtolower($searchText) . '%';
            }

            // Append WHERE clause if there are conditions
            if (count($conditions) > 0) {
                $query .= " WHERE " . implode(' AND ', $conditions);
            }

            // Execute the query with the bindings
            $jobList = DB::select($query, $bindings);

            $city = city::orderBy("city_name")->get();
            $userCount = count(UserTable::all());
            $rowCount = count($jobList);
            $agencyCount = count(agency::all());
            $jobPosting = count(jobposting::all());

            return view('user.jobSearch', [
                'jobList' => $jobList,
                'count' => $rowCount,
                'userCount' => $userCount,
                'agency' => $agencyCount,
                'jobPosting' => $jobPosting,
                'city' => $city
            ]);
}

}
