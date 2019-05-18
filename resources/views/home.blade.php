@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
                <ul>
                    <li><a href="allarticles" >Show All Articles</a></li>
                    <li><a href="myarticles" >Show My Articles</a></li>
                    <li><a href="addarticles" >Add New Articles</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
