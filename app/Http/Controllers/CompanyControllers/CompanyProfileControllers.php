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
use App\Models\jobapplication;
use App\Models\user_profile;
use App\Models\UserTable;
use App\Models\experience;
use App\Models\education;
use App\Models\skill;
use App\Models\certificate;
use App\Models\agency_certificate;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Hash;

class CompanyProfileControllers extends Controller
{
    public function showProfile(){
        if(session("agency_login")){
            $agency_id = (int) session("agency_id");
            $agency = agency::findOrFail($agency_id);
            $agencyProfile = agency_profile::where('agency_id',$agency_id)->firstOrFail();
            $certi = agency_certificate::where('agency_id',$agency_id)->get();
            $state = state::find($agencyProfile->state_id)->first();
            $city = city::find($agencyProfile->city_id)->first();
            
            return view("Company.pages.showProfile",['agency'=>$agency,'agencyProfile'=>$agencyProfile,'state'=>$state,'city'=>$city,'certi'=>$certi]);
        }else{
            return redirect("/user/companyLogin");
        }
    }

    public function editProfile(){
        if(session('agency_login')){
            $agency_id = (int) session("agency_id");
            $agency = agency::findOrFail($agency_id);
            $agencyProfile = agency_profile::where('agency_id',$agency_id)->firstOrFail();
           
            $state = state::all();
            $city = city::all();
            return view('Company.pages.editProfile',['agency'=>$agency,'agencyProfile'=>$agencyProfile,'state'=>$state,'city'=>$city]);
        }
    }

    public function updateProfile(Request $req){
        if(session("agency_login")){
            $agency_id = (int) session("agency_id");
            $ValidateData = $req->validate([
                'agencyName'=>'required|string|min:3',
                'ownerName'=>'required|string|min:3',
                'email'=>'required|string',
                'contact'=>'required|digits:10',
                'est_date'=>'required|date',
                'address'=>'required|string|min:10',
                'state'=>'required',
                'city' => 'required',
            ]);

            if($ValidateData){
                $agency = agency::find($agency_id);
                $agencyProfile = agency_profile::where("agency_id",$agency_id)->first();
                $agency->agency_name = $ValidateData['agencyName'];
                $agency->email = $ValidateData['email'];

                $agencyProfile->owner_name = $ValidateData['ownerName'];
                $agencyProfile->contact = $ValidateData['contact'];
                $agencyProfile->est_date = $ValidateData['est_date'];
                $agencyProfile->address = $ValidateData['address'];
                $agencyProfile->state_id = $ValidateData['state'];
                $agencyProfile->city_id = $ValidateData['city'];

                $agency->save();
                $agencyProfile->save();

                return redirect('/Company/profile')->with('success','Profile Updated !');
            }
        }else{
            return redirect("/user/companyLogin");
        }
    }
    public function certificatePage(){
        if(session('agency_login')){
            return view("Company.pages.addCertificate");
        }else{
            return redirect("/user/companylogin");
        }
    }
    public function addCertificate(Request $req){
        if(session("agency_login")){
            $agency_id = (int) session("agency_id");
            $Validatedata = $req->validate([
                'certiName' => 'required|string|min:2',
                'endingdate'=>'required|date',
                'derscription'=>'required|string|min:10',
                'file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
            ]);

            if($Validatedata && $req->hasFile('file')){
                $addCerti = new agency_certificate();

                $image = $req->file('file');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('images/agencyCertificate'), $imageName);

                $addCerti->certificate_name = $Validatedata['certiName'];
                $addCerti->Year	 = $Validatedata['endingdate'];
                $addCerti->description = $Validatedata['derscription'];
                $addCerti->image_url = $imageName;
                $addCerti->agency_id = (int) session("agency_id");
                $addCerti->save();
                return redirect("/Company/profile")->with("certiAdded",'success');
            }
        }
        else{
            return redirect("/user/cvompanyLogin");
        }
    }
    public function editCertificate($id){
        if(session("agency_login")){
            $certi = agency_certificate::findOrFail($id);
            $agency_id = (int) session("agency_id");
            if($certi->agency_id == $agency_id){
                return view("Company.pages.editCertificate",['certi'=>$certi]);
            }else{
                session()->flush();
                return redirect("/user/companyLogin")->with('message', 'You have been logged out.');
            }
        }else{
            return redirect("/user/companyLogin");
        }
    }

    public function updateCertificate(Request $req,$id){
        if(session('agency_login')){
            $agency_id = (int) session("agency_id");
            $certi = agency_certificate::findOrFail($id);
            if($agency_id==$certi->agency_id){
                $ValidateData = $req->validate([
                    'certiName' => "required|string|min:3",
                    'endingdate'=>"required|date",
                    'derscription' => "required|string|min:10"
                ]);
                if($ValidateData){
                    if($req->hasFile('file')){
                        $image = $req->file('file');
                        $imageName = time() . '.' . $image->getClientOriginalExtension();
                        $image->move(public_path('images/agencyCertificate'), $imageName);
                        $certi->image_url = $imageName;
                    }
                    $certi->certificate_name = $ValidateData['certiName'];
                    $certi->Year	 = $ValidateData['endingdate'];
                    $certi->description = $ValidateData['derscription'];
                    $certi->save();
                    return redirect("/Company/profile")->with("certiUpdated","Success");
                }
            }else{
                session()->flush();
                return redirect("/user/companuLogin");
            }
        }
        else{
            return redirect("/user/companuLogin");
        }
    }
}
