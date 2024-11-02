<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use App\Models\user_profile;
use Illuminate\Support\Facades\DB;
use PDF;
use Dompdf\Dompdf;
use Dompdf\Options;


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


    public function downloadPDF(Request $request)
        {
            $content = $request->input('content');
            $css = $request->input('css');

            // Set Dompdf options
            $options = new Options();
            $options->set('isHtml5ParserEnabled', true);
            $options->set('isRemoteEnabled', true);

            $dompdf = new Dompdf($options);

            // Load HTML content with CSS
            $dompdf->loadHtml("<style>{$css}</style>{$content}");

            // Set paper size and orientation
            $dompdf->setPaper('A4', 'portrait');

            // Render the PDF
            $dompdf->render();

            // Return the generated PDF as a response
            return response($dompdf->output(), 200)
                        ->header('Content-Type', 'application/pdf')
                        ->header('Content-Disposition', 'attachment; filename="resume.pdf"');
        }

    public function dummy(){
       
        $pdf_view = PDF::loadView('user.dummyResumeChecker');
        return $pdf_view->download("Resume.pdf");
    }
    
}