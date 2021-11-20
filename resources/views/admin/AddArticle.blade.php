@extends('layouts.app')

@section('content')
<div class="container">
<form action="" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
  <div class="form-group">
    <label for="usr">Title</label>
    <input type="text" class="form-control" name="title">
  </div>
  <div class="form-group">
    <label for="usr">body:</label>
    <textarea class="form-control" name="body"></textarea>
  </div>
  <div class="form-group">
    <label for="usr">Image</label>
    <input type="file" class="form-control" name="image">
  </div>
  <input type="submit" value="add new" class="btn btn-primary" />

</form>
</div>
@endsection
