<?php

namespace App\Http\Controllers;
use Illuminate\Http\Controllers\question\store;
use App\Http\Requests\questionStoreRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class question extends Controller
{
    public function list(){
        $question=DB::table('question')->get();
        return view("question.list",compact("question"));
    }
    public function element($id){
        $question=DB::table('question')->find($id);
        return view("question.element",compact("question"));
    }
    public function create(){
        return view("question.create");
    }

    public function store(Request $request){
        if($request->hasFile('avatar3')){
            $imageQ = $request->file('avatar3');
        }
        $imageBLOB =time() . $imageQ->getClientOriginalName();
        $imageQ->move(public_path() . '/images/imageQuestion', $imageBLOB);
        
        $question=DB::table('question')->insert([
            "questionName"=>$request->questionName,
            "questionLevel"=>$request->questionLevel,  
            "imageBLOB"=>$imageBLOB
        ]);
        return redirect("question/list");
        }
    
    public function edit($id){
        $question=DB::table('question')->find($id);
        return view('question.update',compact("question"));

    }
    public function update(request $request ){
        
        if($request->hasFile('avatar')){
            $image = $request->file('avatar');
        }
        $imageBLOB =time() . $image->getClientOriginalName();
        $image->move(public_path() . '/images/imagequestion', $imageBLOB);

        $request->validate([
        ]);

        $question=DB::table('question')->where("id",$request->id)->update([
            "questionName"=>$request->questionName,
            "questionLevel"=>$request->questionLevel,  
            "imageBLOB"=>$imageBLOB
            ]);
        return redirect("question/list");
    }
    
    public function delete($id){
        $question=DB::table('question')->delete($id);
        return redirect("question/list");

    }
}
