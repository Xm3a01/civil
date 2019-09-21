@extends('layouts.main')

@section('content')
<br>
<section class="banner_part" style="background:url('{{Storage::url($article->img)}}') no-repeat  right; background-size:600px 730px;">
    <div class="container">
    <div class="row align-items-center">
    <div class="col-lg-6 col-xl-6">
    <div class="banner_text">
    <div class="banner_text_iner">
    <h1><span>{{$article->title}}
    </span></h1>
     <p>{!! str_limit($article->body, $limit=500)  !!}</p>
     <a href="{{route('civil.show',$article->id)}}" class="btn_1">View more </a>
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
                        <div class="about_part_text en_part">
                            <h2>We Are The best</h2>
                            <p>{!! $art !!}</p>
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

    
>
        <section class="our_project section_padding" id="portfolio">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-5 col-sm-10">
                        <div class="section_tittle">
                            {{-- <h2>Civilian Sudan</h2> --}}
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-10">
                        <div class="filters portfolio-filter project_menu_item">
                            <ul>
                                <li class="active" data-filter="*">All</li>
                                <li data-filter=".buildings">Buildings</li>
                                <li data-filter=".rebuild">Rebuild</li>
                                <li data-filter=".architecture">Architecture</li>
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
                                        <p>Recently Post</p>
                                        <a href="{{route('civil.show',$item->id)}}"><h2>{{$item->title}}</h2></a>
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
                                <h2>Ours Events</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($events as $key => $event)    
                        <div class="col-sm-6 col-xl-4">
                            <div class="single_feature">
                                <div class="single_service">
                                    <span class="fa fa-calendar"></span>
                                    <h4>Event No: {{$key +1}}</h4>
                                    <p>{{$event->event_name}}</p>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="single_project_details_widget">
                                               <span class="ti-time" style="font-size:15px"></span>
                                               <h5>Start Date</h5>
                                               <p>--:--</p>
                                               <code>{{$event->event_start}}</code>
                                          </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="single_project_details_widget">
                                               <span class="ti-time" style="font-size:15px"></span>
                                               <h5>End Date</h5>
                                               <p>--:--</p>
                                               <code>{{$event->event_end}}</code>
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

        <section class="member_counter padding_bottom" style="margin-top:100px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="single_counter_icon">
                            <img src="img/icon/Icon_1.svg" alt="">
                        </div>
                        <div class="single_member_counter">
                            <span class="counter">{{$about->num1}}</span>
                            <h4> <span>Satisfied</span> Client</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single_counter_icon">
                            <img src="img/icon/Icon_2.svg" alt="">
                        </div>
                        <div class="single_member_counter">
                            <span class="counter">{{$about->num2}}</span>
                            <h4> <span>Worldwide</span> Branches</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single_counter_icon">
                            <img src="img/icon/Icon_3.svg" alt="">
                        </div>
                        <div class="single_member_counter">
                            <span class="counter">{{$about->num3}}</span>
                            <h4> <span>Total</span> Projects</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single_counter_icon">
                            <img src="img/icon/Icon_4.svg" alt="">
                        </div>
                        <div class="single_member_counter">
                            <span class="counter">{{$about->num4}}</span>
                            <h4> <span>Work</span> Finished</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="member_counter padding_bottom countdown-part " >
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="single_counter_icon">
                            {{-- <img src="img/icon/Icon_4.svg" alt=""> --}}
                        </div>
                        <div class="single_member_counter">
                            <span class="counter" id="days">60</span>
                            <h4> <span>Left</span> Days</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single_counter_icon">
                            {{-- <img src="img/icon/Icon_4.svg" alt=""> --}}
                        </div>
                        <div class="single_member_counter">
                            <span class="counter" id="hours">10</span>
                            <h4> <span>Left</span>Hours</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single_counter_icon">
                            {{-- <img src="img/icon/Icon_4.svg" alt=""> --}}
                        </div>
                        <div class="single_member_counter">
                            <span class="counter" id="minutes">80</span>
                            <h4> <span>Left</span>Minutes</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single_counter_icon">
                            {{-- <img src="img/icon/Icon_4.svg" alt=""> --}}
                        </div>
                        <div class="single_member_counter">
                            <span class="counter" id="seconds">24</span>
                            <h4> <span>Left</span>Seconds</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section> 
@endsection 