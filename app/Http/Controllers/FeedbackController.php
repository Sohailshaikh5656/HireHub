<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\feedback;

class FeedbackController extends Controller
{
    //
    public function feedback(){
        if(session('user_login')){
            return view("user.feedback");
        }
        else{
            return redirect("/user/login");
        }
    }

    public function feedbackStore(Request $req) {
        // Validate the request data
        $ValidateData = $req->validate([
            'rating' => 'required',
            'opinion' => 'required|string|min:10'
        ]);
    
        if ($ValidateData) {
            $user = (int) session("user_id");
            
            // Check if there is existing feedback for the user
            $data = feedback::where('user_id', $user)->first();
            
            if ($data === null) {
                // No existing feedback, create a new entry
                $temp = new feedback();
                $temp->rating = $ValidateData['rating'];
                $temp->message = $ValidateData['opinion'];
                $temp->user_id = $user;
                $temp->save();
            } else {
                // Update existing feedback
                $data->rating = $ValidateData['rating'];
                $data->message = $ValidateData['opinion'];
                $data->save();
            }
    
            return redirect()->back()->with('success', 'Feedback saved successfully');
        }
    
        return redirect("/user/login");
    }
    

    public function showAllFeedback(){
        if(session("admin_login")){
            $data = feedback::all();
            return view("Myadmin.feedback",['data'=>$data]);
        }else{
            return redirect("/Myadmin/login");
        }
    }

    public function deleteFeedback($id){
        if(session("admin_login")){
            $data = feedback::find($id);
            $data->delete();
            return redirect("/Myadmin/feedback")->with("success","feedback Deleted !");
        }else{
            return redirect("/Myadmin/login");
        }
    }
}
