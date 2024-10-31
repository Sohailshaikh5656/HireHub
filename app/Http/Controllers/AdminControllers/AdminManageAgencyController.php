<?php

namespace App\Http\Controllers\AdminControllers;
use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use App\Http\Controllers\AdminControllers\AdminAuth; 
use App\Models\agency;
use App\Models\agency_profile;
use App\Models\jobposting;
use App\Models\state;
use App\Models\city;
use Illuminate\Support\Facades\DB;

class AdminManageAgencyController extends Controller
{
    
    public function accept_reject(){
        if(session('admin_login')){
            $data = DB::select("SELECT
                agency.id,agency.agency_name, agency.email, agency_profile.est_date, agency_profile.contact,agency_profile.image_url
                FROM agency JOIN agency_profile ON agency.id = agency_profile.agency_id 
                WHERE agency.isActive = 0;
            ");

            return view('Myadmin.accept_reject_Company',['data'=>$data]);
        }
        else{
            return redirect("/Myadmin/login");
        }
    }

    public function agencyAccept($id){
        if(session("admin_login")){
            $data = agency::findOrFail($id);
            $data->isActive = true;
            $data->save();
            return redirect("/Myadmin/accept_reject_Company")->with('AccountStatus','Account Accepted Successfully !');
        }
        else{
            return redirect("/Myadmin/login");
        }
    }

    public function agencyReject($id){
        if(session("admin_login")){
            $data=agency::findOrFail($id);
            $dataProfile=agency_profile::where('agency_id',$data->id);
            $dataProfile->delete();
            $data->delete();
            return redirect("/Myadmin/accept_reject_Company")->with("AccountStatus","Account Rejected or Deleted Successfully !");
            
        }else{
            return redirect("/Myadmin/login");
        }
    }

    public function agencyBlock($id){
        if(session("admin_login")){
            $data=agency::findOrFail($id);
            $data->isBlocked = true;
            $data->save();
            return redirect("/Myadmin/allCompany")->with("AccountStatus","Successfully Blocked Account !");
        }
        else{
            return redirect("/Myadmin/login");
        }
    }
    public function agencyUnBlock($id){
        if(session("admin_login")){
            $data=agency::findOrFail($id);
            $data->isBlocked = false;
            $data->save();
            return redirect("/Myadmin/allBlockedCompany")->with("AccountStatus","Successfully UnBlocked Account !");
        }
        else{
            return redirect("/Myadmin/login");
        }
    }

    public function companyViewmore($id){
        if(session("admin_login")){
            $agency = agency::findOrFail($id);
            $agencyProfile = agency_profile::where('agency_id',$id)->first();
            $state = state::find($agencyProfile->state_id)->first();
            $city = city::find($agencyProfile->city_id)->first();
            return view('Myadmin.companyViewmore',['agency'=>$agency,'agencyProfile'=>$agencyProfile,'state'=>$state,'city'=>$city]);
        }else{
            return rediect("/Myadmin/login");
        }
    }

    //Blocked
    public function allBlockedCompany(){
        if(session('admin_login')){
            $data = DB::select("SELECT
            agency.id,agency.agency_name, agency.email, agency_profile.est_date, agency_profile.contact,agency_profile.image_url
            FROM agency JOIN agency_profile ON agency.id = agency_profile.agency_id 
            WHERE agency.isBlocked = 1;
        ");
            return view("Myadmin.allBlockedCompany",['data'=>$data]);
        }
    }


    public function manageJobListing(){
        
         if(session('admin_login')){
            $data = jobposting::all();
            return view('Myadmin.manageJobListing',['data'=>$data]);
        }
        else{
            return redirect("/Myadmin/login");
        }
    }
    public function allCompany(){
        if(session('admin_login')){
            $data = DB::select("SELECT
            agency.id,agency.agency_name, agency.email, agency_profile.est_date, agency_profile.contact,agency_profile.image_url
            FROM agency JOIN agency_profile ON agency.id = agency_profile.agency_id 
            WHERE agency.isActive = 1 and isBlocked = 0;
        ");
            return view('Myadmin.allCompany',['data'=>$data]);
        }
        else{
            return redirect("/Myadmin/login");
        }
    }
}
