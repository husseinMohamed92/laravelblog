@extends('layouts.app')

@section('content')

@foreach($myarticles as $myarticles)
<div class="container" style="margin-bottom:20px">
    <div style="border:3px solid gray">
        <div class="header" style="background-color:gray;padding:10px">
            <h4 style="float:left">{{$myarticles->title}}</h4>
            <div style="float:right;padding:10px">
                    <span style="color:red">{{App\User::find($myarticles->user_id)->name}}</span>
                    <span>{{$myarticles->date_add}}</span>

            </div>
        </div>
        <div style="clear:both"></div>
        <div class="body" style="padding:10px">
        {{$myarticles->body}}
        </div>
        <hr/>
        <h3  style="margin-left:10px">Comments:</h3>
        <form method="post" action="addcomment" style="margin-bottom:10px;margin-top:20px">
        {{csrf_field()}}
                 <input type="hidden" name="articleid" value="{{$myarticles->id}}"/>
                <input style="display:inline-block;width:70%;padding:10px 5px;border:1px solid green;margin-left:10px;overflow:hidden" type="text" name="body" placeholder="Write Your Comment" />
                <input type="submit"  value="post" style="display:inline-block;width:25%;padding:10px 5px;margin-left:10px;overflow:hidden"/>
        </form>
    </div>
</div>
@endforeach

@endsection