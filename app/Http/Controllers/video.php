<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class video extends Controller
{
    public function list(){
        $video=DB::table('video')->get();
        return view("video.list",compact("video"));
    }
    public function element($id){
        $video=DB::table('video')->find($id);
        return view("video.element",compact("video"));
    }
    public function create(){
        return view("video.create");
    }

    public function store(Request $request){
        
        $video=DB::table('video')->insert([
            "title"=>$request->title,
            "level_num"=>$request->level_num,  
            "description"=>$request->description,
            "link"=>$request->link,
        ]);
        return redirect("video/list");
        }

    
    public function edit($id){
        $video=DB::table('video')->find($id);
        return view('video.update',compact("video"));

    }
    public function update(request $request ){
        
        $video=DB::table('video')->where("id",$request->id)->update([
            "title"=>$request->title,
            "level_num"=>$request->level_num,  
            "description"=>$request->description,
            "link"=>$request->link,
            ]);
        return redirect("video/list");
    }
    
    public function delete($id){
        $video=DB::table('video')->delete($id);
        return redirect("video/list");

    }}
