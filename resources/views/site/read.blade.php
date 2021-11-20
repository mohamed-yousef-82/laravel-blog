@extends('layouts.site')

@section('content')
<div class="container">
<div class="site-block single">
  <div class="site-block-data">
<img src="../upload/{{$article->image}}" > 
    <h1>{{$article->title}}</h1>
<p>{{$article->body}}</p>
</div>
</div>


<!-- <div>
    <h2>Comments</h2>
@foreach($article->comments as $comment)
<p>
{{$comment->comment}}
</p>
@endforeach
</div> -->
</div>
<div>
<!-- <form action="" method="POST">
    {{csrf_field()}}
  <div class="form-group">
    <label for="usr">body:</label>
    <textarea name="body"></textarea>
  </div>
  <input type="submit" value="add new" class="btn btn-primary" />

</form> -->
</div>
@endsection
