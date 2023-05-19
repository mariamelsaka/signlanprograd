<?php

namespace App\Http\Controllers;

use Directory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class users extends Controller
{
    public function login(){return view("login");}

    public function loginRequest(Request $request){
        $data=[
            "email"=>$request->email,
            "password"=>$request->password
        ];

        if(Auth::attempt($data)){
            if (auth()->user()->role == 1 || auth()->user()->role == 2){
            return redirect("dashborad");}
            else{
                return redirect("home");
            }

            

        }
        return redirect('/login')->withErrors('يوجد خطأ في البريد الالكتروني او كلمة المرور');

    }
    
    public function register(){return view("register");}
    
    public function registerRequest(Request $request){
        DB::table("users")->insert([
            "user_name"=>$request->user_name,
            "email"=>$request->email,
            "password"=>bcrypt($request->password),
            "year_of_birth"=>$request->year_of_birth,
            "address"=>$request->address,
            "gender"=>$request->gender,
            "phone"=>$request->phone,
            "role"=>$request->role,
        ]);
        return redirect('login');
    }

    public function logout(){
        Auth::logout();
        return redirect("login");
    }
    

}
