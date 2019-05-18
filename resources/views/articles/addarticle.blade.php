@extends('layouts.app')

@section('content')
<div class="container">
<form class="form-horizontal" method="POST" action="addarticles">
{{ csrf_field()}}
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Article Title :</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="title" name="title" placeholder="Enter Article Title" name="email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Article Descrebtion :</label>
      <div class="col-sm-10">
      <textarea name="body" id="" cols="120" rows="10"></textarea>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button class="btn btn-success col-sm-12" style="height:37px"  type="submit" class="btn btn-default">Add</button>
      </div>
    </div>
  <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"/>
  </form>
</div>



@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@endsection