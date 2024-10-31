<?php

namespace App\Http\Controllers\AdminControllers;
use App\Http\Controllers\AdminControllers\AdminDaoController;
use App\Http\Controllers\Controller; 

use Illuminate\Http\Request;
use App\Models\contact;
use App\Http\Controllers\AdminControllers\AdminAuth; 

class AdmininquiryControllers extends Controller
{
    public function allInquiry(){
        if(session("admin_login")){
            $data = contact::all();
            return view("Myadmin.inquiry",['data'=>$data]);
        }
    }
}
