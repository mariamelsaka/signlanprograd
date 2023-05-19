<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class subAdmin extends Controller
{
    public function list(){
        $subAdmin=DB::table('users')->get()->where('role','=',2);
        return view("subAdmin.list",compact("subAdmin"));
    }
    public function element($id){
        $subAdmin=DB::table('users')->find($id);
        return view("subAdmin.element",compact("subAdmin"));
    }
    public function create(){
        return view("subAdmin.create");
    }

    public function store(Request $request){
        if($request->hasFile('avatar2')){
            $image2 = $request->file('avatar2');
        }
        $image_name2 =time() . $image2->getClientOriginalName();
        $image2->move(public_path() . '/images/imageSubAdmin', $image_name2);
        
        $subAdmin=DB::table('users')->insert([
            
            "user_name"=>$request->user_name,
            "email"=>$request->email,
            "password"=>bcrypt($request->password),
            "year_of_birth"=>$request->year_of_birth,
            "address"=>$request->address,
            "gender"=>$request->gender,
            "phone"=>$request->phone,
            "image"=>$image_name2,
            "role"=>$request->role,
        ]);
        return redirect("subAdmin/list");
        }

    
    public function edit($id){
        $subAdmin=DB::table('users')->find($id);
        return view('subAdmin.update',compact("subAdmin"));

    }
    public function update(request $request ){
        if($request->hasFile('avatar2')){
            $image2 = $request->file('avatar2');
        }
        $image_name2 =time() . $image2->getClientOriginalName();
        $image2->move(public_path() . '/images/imageSubAdmin', $image_name2);

        $subAdmin=DB::table('users')->where("id",$request->id)->update([
            "user_name"=>$request->user_name,
            "email"=>$request->email,
            "password"=>bcrypt($request->password),
            "year_of_birth"=>$request->year_of_birth,
            "address"=>$request->address,
            "gender"=>$request->gender,
            "phone"=>$request->phone,
            "image"=>$image_name2,
            ]);
        return redirect("subAdmin/list");
    }
    
    public function delete($id){
        $subAdmin=DB::table('users')->delete($id);
        return redirect("subAdmin/list");

    }}
