<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class usercontroller extends Controller
{
    // ---------------------- through route calling (showeruser(data) --> view(vjhi) + data) --------------------------------------
    public function showeruser(){
        $user = DB::table('feedback')->get();
        
        return view('vjhi',['data'=>$user]);
        
    }
    // -----------------------through route  calling (personaluser(data)--> view(see) + data)-------------------------------------
    public function personaluser(string $id){
        $user = DB::table('feedback')->where('srno',$id)->get();
        
        return view('see',['data'=>$user]);
        
    }
    // --------------------------through route calling (updateuser(data)--> view(updateuser) + data)-------------------------------------------
    public function updateuser(string $id){
        $user = DB::table('feedback')->where('srno',$id)->get();
        
        return view('/updateuser',['data'=>$user]);
        
    }
    // ---------------------through route calling (update(data)--> database and redirect to home)-------------------
    public function update(Request $req,$id){
        $user = DB::table('feedback')->where('srno',$id)->update(
            [
                'name' => $req->username,
                'email' => $req->email,
                'feed'  => $req->feedback

            ]
        );
        if($user){
            return redirect()->route('view');
         }
    }
//  ------------------------through route calling (deleteuser(data)-->database and redirect to home)----------------------------------------
    public function deleteuser(string $id){
        $user = DB::table('feedback')->where('srno',$id)->truncate();
        if($user){
           return redirect()->route('view');
        }
        
        
    }
// ---------------------------through route calling (insertuser(data)-->database and redirect to home )------------------------------------
    public function insertuser(Request $req){
        $user = DB::table('feedback')->insert(
            [
                'name' => $req->username,
                'email' => $req->email,
                'feed'  => $req->feedback

            ]
        );
        if($user){
            return redirect()->route('view');
         }
    }
    
}
