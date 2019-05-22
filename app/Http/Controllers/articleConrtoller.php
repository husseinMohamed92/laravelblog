<?php

namespace App\Http\Controllers;
use App\article;
use App\user;
use App\comment;
use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;

class articleConrtoller extends Controller
{
    //
    public function showallarticle()
    {
        
        $allarticle = article::all()->sortByDesc('date_add');
        foreach($allarticle as $allarticle)
        {
            $articlecomment[] = article::find($allarticle->id)->comment;
        }
        $allarticle = article::all()->sortByDesc('date_add');
        $arr = Array("allarticles"=>$allarticle,"articlecomment"=>$articlecomment);
        return view('articles.allarticle',$arr);
    }

    public function showmyarticle()
    {
         $myarticles = User::find( Auth::user()->id )->article->sortByDesc('date_add');
       $arr = Array("myarticles"=>$myarticles);
        return view('articles.myarticle',$arr);
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
          date_default_timezone_set("africa/cairo");
          $newarticle->date_add=date('Y-m-d H:i:s');
          $newarticle->save();
          echo "<script>alert('Article Added Suuuefully');</script>";
          $newarticle->title="";
          $newarticle->title="";
          return redirect('myarticles');


        }else{
            return view('articles.addarticle');
        }
       
    }

}
