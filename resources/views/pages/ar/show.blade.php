@extends('layouts.ar_main')

@section('stylesheets')
<link rel="stylesheet" href="{{asset('css/rtl.css')}}">
@endsection

@section('content')
<section class="blog_area single-post-area section_padding">
        <div class="container">
           <div class="row">
              <div class="col-lg-8 posts-list">
                 <div class="single-post">
                    <div class="feature-img">
                       <img class="img-fluid" src="{{Storage::url($article->img)}}" alt="">
                    </div>
                    <div class="blog_details" >
                       <h2>{{$article->ar_title}}
                       </h2>
                       <div class="card">
                          <div class="card-body">
                             <p class="excert" >
                                {!! $article->ar_body !!}
                             </p>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
              <div class="col-lg-4">
                 <div class="blog_right_sidebar">
                    <aside class="single_sidebar_widget popular_post_widget">
                       <h3 class="widget_title">اخر المقالات</h3>
                       @foreach ($recently as $article)
                       <div class="media post_item">
                          <img src="{{Storage::url($article->img)}}" width="100" height="100" alt="post">
                          <div class="media-body" style ="margin-right:15px">
                             <a href="{{route('show.ar',$article->id)}}">
                                <h3>{{$article->ar_title}}</h3>
                             </a>
                             <p>{{date("jS F, Y", strtotime($article->created_at))}}</p>
                          </div>
                       </div>
                       @endforeach
                       <br>
                       <hr>
                       <a class="btn btn-1" href="{{route('all.ar')}}"> عرض الكل</a>
                    </aside>
                 </div>
              </div>
           </div>
        </div>      {{-- <div class="divider"></div> --}}
</section>
@endsection