<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class userConrtoller extends Controller
{
    //
    public function registerUser(Request $req)
    {
      echo $req->input('name');
      $nuser = new User;
      $nuser->name=$req->input('name');
      $nuser->email=$req->input('email');
      $nuser->password=md5($req->input('password'));
      $nuser->save();

    }


    public function loginUser(Request $req)
    {
      if($fuser =User::where('name',$req->name)->where('email',$req->email)->where('password',md5($req->password))->first())
      
      {
        $arr = Array("myUser"=>$fuser);
        return view('dashboard',$arr);
      }else
      {
        
        return back();
      }
    }
}
