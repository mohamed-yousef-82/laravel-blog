@extends('layouts.site')

@section('content')
<div class="container">
  
@foreach($articles as $art)
  <div class="site-block">
    <div class="img-container box">
    <img src="upload/{{$art->image}}" > 
    </div>
  <div class="site-block-data">
  <h3>{{$art->title}}</h3>
  <p>{!! Illuminate\Support\Str::words($art->body, 80) !!}</p>
  
  </div>
  <a href="{{"read/".$art->id}}">Read More</a>
  </div>
@endforeach

</div>
@endsection
