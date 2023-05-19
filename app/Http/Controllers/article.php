<?php

namespace App\Http\Controllers;
use Illuminate\Http\Controllers\article\store;
use App\Http\Requests\articleStoreRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class article extends Controller
{
    public function list(){
        $article=DB::table('article')->get();
        return view("article.list",compact("article"));
    }
    public function element($id){
        $article=DB::table('article')->find($id);
        return view("article.element",compact("article"));
    }
    public function create(){
        return view("article.create");
    }

    public function store(Request $request){
        if($request->hasFile('avatar')){
            $image = $request->file('avatar');
        }
        $image_name =time() . $image->getClientOriginalName();
        $image->move(public_path() . '/images/imageArticle', $image_name);
        
        $article=DB::table('article')->insert([
            "title"=>$request->title,
            "author"=>$request->author,  
            "paragraph"=>$request->paragraph,
            "image"=>$image_name
        ]);
        return redirect("article/list");
    
        }

    
        
        /* $emp = new Employee();
        $emp->name = $request->input('empName');
        $emp->salary = $request->input('empSalary');

        $image = $request->file('image_data');
        $image_name =time() . $image->getClientOriginalName();
        $image->move(public_path() . '/imgs/', $image_name);

        $emp->img =  $image_name ;
        $emp->save();
        return redirect('employee')->with("done", "Done Insert To DataBase"); */
    

        /*  $articlees=DB::table('articlees')->insert([
            "title"=>$request->title,
            "description"=>$request->description,
            "auther"=>$request->auther,
            "image"=>$request->image
        ]); */

    
    public function edit($id){
        $article=DB::table('article')->find($id);
        return view('article.update',compact("article"));

    }
    public function update(request $request ){
        
        if($request->hasFile('avatar')){
            $image = $request->file('avatar');
        }
        $image_name =time() . $image->getClientOriginalName();
        $image->move(public_path() . '/images/imageArticle', $image_name);

        $request->validate([
        ]);

        $article=DB::table('article')->where("id",$request->id)->update([
            "title"=>$request->title,
            "paragraph"=>$request->paragraph,
            "author"=>$request->author,
            "image"=>$image_name
            ]);
        return redirect("article/list");
    }
    
    public function delete($id){
        $article=DB::table('article')->delete($id);
        return redirect("article/list");

    }
}
