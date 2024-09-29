<?php


namespace App\Http\Controllers\AdminControllers;
use App\Http\Controllers\AdminControllers\AdminDaoController;
use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;

class AdminLogoutController extends Controller
{
    public function logout(Request $request){
    // Destroy all session data
    Session::flush();

    // Redirect to the desired page after logout
    return redirect('/Myadmin/login'); // Adjust the redirect URL as needed
    }
}
