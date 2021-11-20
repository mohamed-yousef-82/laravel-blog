@extends('layouts.app')

@section('content')
<div class="container">
<form action="" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
  <div class="form-group">
    <label for="usr">Title</label>
    <input type="text" class="form-control" name="title" value="{{$article->title}}" >
  </div>
  <img style="width:100px;padding:7px;background:#fff" src="../../upload/{{$article->image}}" > 
  <div class="form-group">
    <label for="usr">Image</label>
    <input type="file" class="form-control" name="image" >
  </div>
  <div class="form-group">
    <label for="usr">body:</label>
    <textarea class="form-control" name="body" >{{$article->body}}</textarea>
  </div>
  <input type="submit" value="Edit" class="btn btn-primary" />

</form>
</div>
@endsection
