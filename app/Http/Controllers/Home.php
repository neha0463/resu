<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class Home extends Controller
{
    //
    public function homepage(){
        return view('home',["data"=>Post::all()]);
    }
    public function delete($id){
        Post::find($id)->delete();
        return redirect()->back();
    }
    public function insert(Request $req){
        $req->validate([
            'name'=>'required',
            'roll_no'=>'required',
            'roll_code'=>'required',
            'science'=>'required',
            'math'=>'required',
            'hindi'=>'required',
            'english'=> 'required',
            'sst'=>'required',
        ]);
        Post::create([
            'name'=>$req->name,
            'roll_no'=>$req->roll_no,
            'roll_code'=>$req->roll_code,
            'science'=>$req->science,
            'math'=>$req->math,
            'hindi'=>$req->hindi,
            'english'=>$req->english,
            'sst'=>$req->sst,
        ]);
       return redirect()->back();
    }
    public function update($edit_id){
    
    }
    

    }

