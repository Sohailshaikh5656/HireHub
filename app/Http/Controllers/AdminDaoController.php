<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Myadmin;


class AdminDaoController extends Controller
{
    
    public function addAdmin(Request $request){
        $validateData = $request->validate([
            'name'=>'required|string|max:255',
            'email'=>'required|string|max:255|unique:myadmin',
            'password'=>[
                'required',
                'string',
                'min:8', // Minimum 8 characters
                'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[^a-zA-Z\d]).+$/' // Complex password requirements
            ],
        ]);

        $admin = new Myadmin();
        $admin->name = $validateData['name'];
        $admin->email = $validateData['email'];
        $admin->password = bcrypt($validateData['password']);
        $admin->save();

        return redirect('/Myadmin/adminDashboard');
    }

    public function admin_auth(Request $request){
        $auth = $request->only('email','password');
        $user = Myadmin::where('email',$auth['email'])->first();
        if($user && Hash::check($auth['password'], $user->password)){
            session(['admin_login'=>true]);
            session(['admin_id'=>$user->id]);
            return redirect('/Myadmin/adminDashboard');
        }
        else{
            session(['error'=>true]);
            return redirect('/Myadmin/login');
        }
    }
    public function admin_login_chk(){
        try{
                return session()->has('admin_login');

        }catch(Exception $e){
            return redirect('/Myadmin/login');
        }
    }
    
}
