@extends('layouts.ar_main')

@section('stylesheets')
<link rel="stylesheet" href="{{asset('css/rtl.css')}}">
@endsection

@section('content')
<section class="banner_part" style="background:url({{Storage::url($article->img)}}) no-repeat left top; background-size: 600px 750px;">
    <div class="container">
    <div class="row align-items-center">
    <div class="col-lg-6 col-xl-6">
    <div class="banner_text">
    <div class="banner_text_iner">
    <h1><span>{{$article->ar_title}} 
    </span></h1>
    <div class="card col-md-10 non-border">
        <div class="card-body">
            <p>{!! str_limit($article->ar_body, $limit=500) !!}</p>
        </div>
    </div>
     <a href="{{route('show.ar',$article->id)}}" class="btn_1">المزيد </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </section>

        <section class="about_part experiance_part section_padding">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-6 col-lg-6">
                        <div class="about_part_text">
                            <h2>{{$article2->ar_title}}</h2>
                            <div class="card col-md-10 non-border">
                                    <div class="card-body">
                                        <p>{!!  $art !!}</p>
                                    </div>
                                </div>                   
                            <div class="about_text_iner">
                                <div class="about_text_counter">
                                    <h2 id="years"></h2>
                                </div>
                                <div class="about_iner_content">
                                    <h3>year <span>of</span>Civilian</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="about_part_img">
                            <img src="{{Storage::url($article2->img)}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
        <section class="our_project section_padding" id="portfolio">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-5 col-sm-10">
                        <div class="section_tittle">
                            <h2>اخر المقالات</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-10">
                        <div class="filters portfolio-filter project_menu_item">
                            <ul>
                                {{-- <li class="active" data-filter="*">الكل</li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="filters-content">
                    <div class="row justify-content-between portfolio-grid">
                        @foreach ($articles as $item) 
                        <div class="col-lg-4 col-sm-6 all buildings">
                            <div class="single_our_project">
                                <div class="single_offer">
                                    <img src="{{Storage::url($item->img)}}" alt="offer_img_1">
                                    <div class="hover_text">
                                        <p>اخر المقالات</p>
                                        <a href="{{route('show.ar',$article->id)}}"><h2>{{$item->ar_title}}</h2></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <section class="our_service padding_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5">
                        <div class="section_tittle">
                            <h2>الاحداث</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($events as $key => $event)    
                    <div class="col-sm-6 col-xl-4">
                        <div class="single_feature">
                            <div class="single_service">
                                <span class="fa fa-calendar"></span>
                                <h4>حدث رقم {{$key +1}}</h4>
                                <p>{{$event->ar_event_name}}</p>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="single_project_details_widget">
                                           <span class="ti-time" style="font-size:15px"></span>
                                           <h5>ابتدئامن</h5>
                                           <p>--:--</p>
                                           <code>{{ date("jS F, Y", strtotime($event->event_start))}}</code>
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single_project_details_widget">
                                           <span class="ti-time" style="font-size:15px"></span>
                                           <h5>الى</h5>
                                           <p>--:--</p>
                                           <code>{{ date("jS F, Y", strtotime($event->event_end))}}</code>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <section class="member_counter padding_bottom" style="margin-top: 100px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="single_counter_icon icon-part">
                            <img src="img/icon/Icon_1.svg" alt="">
                        </div>
                        <div class="single_member_counter">
                            <span class="counter">{{$about->num1}}</span>
                            <h4> <span>رضاء</span> العملاء</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single_counter_icon icon-part">
                            <img src="img/icon/Icon_2.svg" alt="">
                        </div>
                        <div class="single_member_counter">
                            <span class="counter">{{$about->num2}}</span>
                            <h4> <span>عدد</span> المنصات</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single_counter_icon icon-part">
                            <img src="img/icon/Icon_3.svg" alt="">
                        </div>
                        <div class="single_member_counter">
                            <span class="counter">{{$about->num3}}</span>
                            <h4> <span>مجموع</span> المشاريع</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single_counter_icon icon-part">
                            <img src="img/icon/Icon_4.svg" alt="">
                        </div>
                        <div class="single_member_counter">
                            <span class="counter">{{$about->num4}}</span>
                            <h4> <span>الاعمال</span> المنجزه</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="member_counter padding_bottom countdown-part ">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-7">

                    </div>
                    <div class="col-lg-5 col-sm-10">
                        <div class="section_tittle" style="text-align:right; direction:rtl">
                            <h2>مؤقت للفترة الانتقاليه</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-10">
                        <div class="filters portfolio-filter project_menu_item">
                            <ul>
                                {{-- <li class="active" data-filter="*">الكل</li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="single_counter_icon">
                            {{-- <img src="img/icon/Icon_4.svg" alt=""> --}}
                        </div>
                        <div class="single_member_counter">
                            <span class="counter" id="days">60</span>
                            <h4> <span> تبقى من</span> الأيام</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single_counter_icon">
                            {{-- <img src="img/icon/Icon_4.svg" alt=""> --}}
                        </div>
                        <div class="single_member_counter">
                            <span class="counter" id="hours">10</span>
                            <h4> <span>ماتبقى</span>من الساعات</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single_counter_icon">
                            {{-- <img src="img/icon/Icon_4.svg" alt=""> --}}
                        </div>
                        <div class="single_member_counter">
                            <span class="counter" id="minutes">80</span>
                            <h4> <span>ماتبقى</span>من الدقائق</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single_counter_icon">
                            {{-- <img src="img/icon/Icon_4.svg" alt=""> --}}
                        </div>
                        <div class="single_member_counter">
                            <span class="counter" id="seconds">24</span>
                            <h4> <span>تبقى</span>من الثواني</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>   
@endsection 