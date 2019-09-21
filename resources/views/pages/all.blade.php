@extends('layouts.main')


@section('content')
<div class="container">
      <hr>
      <br>
      <br>
      <h3 class="widget_title"> All Articles</h3>
      <div class="card" style="background:rgba(204, 204, 204, 0.13); border:none">
         <div class="">
            <div class="row">
            @foreach ($articles as $article)
            <div class="col-md-4 card-body">
             <div class="media post_item">
                <img src="{{Storage::url($article->img)}}" width="100" height="100" alt="post">
                <div class="media-body" style="margin-left: 25px;">
                   <a href="{{route('show.ar',$article->id)}}">
                      <h3>{{$article->title}}</h3>
                   </a>
                   <p>{{date("jS F, Y", strtotime($article->created_at))}}</p>
                </div>
            </div>
         </div>
         @endforeach
      </div>
         </div>
      </div>
</div>
@endsection