@extends('layouts.main')

@section('content')
<section class="blog_area single-post-area section_padding">
    <div class="container">
       <div class="row">
          <div class="col-lg-8 posts-list">
             <div class="single-post">
                <div class="feature-img">
                   <img class="img-fluid" src="{{Storage::url($article->img)}}" alt="">
                </div>
                <div class="blog_details">
                   <h2>{{$article->title}}
                   </h2>
                   <p class="excert">
                      {!! $article->body !!}
                   </p>
                </div>
             </div>
             {{-- <div class="navigation-top">
                <div class="navigation-area">
                   <div class="row">
                       @if($prevArticle)
                      <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                         <div class="thumb">
                            <a href="#">
                               <img class="img-fluid" src="{{$prevArticle->img}}" alt="">
                            </a>
                         </div>
                         <div class="arrow">
                            <a href="#">
                               <span class="lnr text-white ti-arrow-left"></span>
                            </a>
                         </div>
                         <div class="detials">
                            <p>Prev Post</p>
                            <a href="#">
                               <h4>{{$prevArticle->title}}</h4>
                            </a>
                         </div>
                      </div>
                      @endif
                      
                      @if($nextArticle)
                      <div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                         <div class="detials">
                            <p>Next Post</p>
                            <a href="#">
                               <h4>Telescopes 101</h4>
                            </a>
                         </div>
                         <div class="arrow">
                            <a href="#">
                               <span class="lnr text-white ti-arrow-right"></span>
                            </a>
                         </div>
                         <div class="thumb">
                            <a href="/nextprev">
                               <img class="img-fluid" src="{{Storage::url($nextArticle->img)}}" alt="">
                            </a>
                         </div>
                      </div>
                      @endif
                   </div>
                </div>
             </div> --}}
          </div>
          <div class="col-lg-4">
             <div class="blog_right_sidebar">
                <aside class="single_sidebar_widget popular_post_widget">
                   <h3 class="widget_title">All Articles</h3>
                   @foreach ($articles as $article)
                   <div class="media post_item">
                      <img src="{{Storage::url($article->img)}}" width="100" height="100" alt="post">
                      <div class="media-body">
                         <a href="{{route('civil.show',$article->id)}}">
                            <h3>{{$article->title}}</h3>
                         </a>
                         <p>{{date("jS F, Y", strtotime($article->created_at))}}</p>
                      </div>
                   </div>
                   @endforeach
                </aside>
             </div>
          </div>
       </div>
    </div>
</section>
@endsection