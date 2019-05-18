<?php

namespace App\Http\Controllers;
use App\article;
use App\user;
use App\comment;
use Illuminate\Http\Request;

use App\Http\Requests;

class articleConrtoller extends Controller
{
    //
    public function showallarticle()
    {
        $allarticle = article::all();
        $arr = Array("allarticles"=>$allarticle);
        return view('articles.allarticle',$arr);
    }

    public function showmyarticle()
    {
       echo "1showmyarticle"; 
    }

    public function addarticle(Request $req)
    {
        $method = $req->method();

        if ($req->isMethod('post')) {
          $this->validate($req,
              [
                  'title'=>'Required|min:2|max:20',
                  'body'=>'Required|min:2'
              ]
          );
          $newarticle = new article();
          $newarticle->title=$req->input('title');
          $newarticle->body=$req->input('body');
          $newarticle->user_id=$req->input('user_id');
          $newarticle->date_add="10 12 2019";
          $newarticle->save();
          echo "<script>alert('Article Added Suuuefully');</script>";
          $newarticle->title="";
          $newarticle->title="";


        }else{
            return view('articles.addarticle');
        }
       
    }

}
