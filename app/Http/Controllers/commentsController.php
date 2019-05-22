<?php

namespace App\Http\Controllers;
use App\comment;
use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;

class commentsController extends Controller
{
    //
    public function addcomment(Request $req)
    {
        $newcomment = new comment();
        $newcomment->comment_body= $req->input('body');
        $newcomment->user_id =Auth::user()->id ;
        $newcomment->article_id = $req->input('articleid');
        date_default_timezone_set("africa/cairo");
        $newcomment->date_add=date('Y-m-d H:i:s');;
        $newcomment->save();
        return back();
    }



}
