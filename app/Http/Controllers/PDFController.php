<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use App\Models\user_profile;
use Illuminate\Support\Facades\DB;
use PDF;


class PDFController extends Controller
{
    public function pdfView(){
        $data = DB::select("select user.id, user.first_name, user.last_name, user.email, user_profile.contact,user_profile.ImageUrl from user JOIN user_profile ON user.id = user_profile.user_id");
        return view('PDF.PDF_user_view',['data'=>$data]);
    }
    public function pdfGeneration(){
        $data = DB::select("select user.id, user.first_name, user.last_name, user.email, user_profile.contact,user_profile.ImageUrl from user JOIN user_profile ON user.id = user_profile.user_id");
        $pdf_view = PDF::loadView('PDF.PDF_user_convert',compact('data'));
        return $pdf_view->download("AllUser.pdf");
    }
}
