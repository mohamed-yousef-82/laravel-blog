@extends('layouts.app')

@section('content')
<div class="container admin">
  
@foreach($articles as $art)
<div class="block-admin">
  <h3>{{$art->title}}</h3>
  <div class="row">
  <div class="col-md-2">
  <img src="upload/{{$art->image}}" > 
  </div>
    <div class="col-md-8">
    <p>{{$art->body}}</p>
    </div>
    <div class="col-md-2">
  <a class="btn btn-success" href="{{"dashboard/edit/".$art->id}}">Edit</a>
  <a class="btn btn-danger" href="{{"dashboard/delete/".$art->id}}">Delete</a>
  </div>
  </div>
  </div>
@endforeach

<a class="btn btn-warning add-btn" href="dashboard/add">Add New Article</a>
</div>
@endsection

