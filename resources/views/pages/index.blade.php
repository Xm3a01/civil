@extends('layouts.main')

@section('content')
<br>
<section class="banner_part" style="background:url('{{asset('storage/'.$article->img)}}') no-repeat top right; background-size:600px 730px;">
    <div class="container">
    <div class="row align-items-center">
    <div class="col-lg-6 col-xl-6">
    <div class="banner_text">
    <div class="banner_text_iner">
    <h1>Civilian<span>Sudan
    </span></h1>
     <p>{!! str_limit($article->body, $limit=500)  !!}</p>
     <a href="#" class="btn_1">View more </a>
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
                            <h2>We Are The best</h2>
                            <p>{{ $art }}</p>
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
                            <img src="{{asset('storage/'.$article2->img)}}" alt="">
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
                            <h2>Civilian Sudan</h2>
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
                                        <p>Bank Protected</p>
                                        <a href="#"><h2>{{strip_tags(str_limit($item->body, $limit=30, $end='...'))}}</h2></a>
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
                            <h2>Ours Sudan</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-xl-4">
                        <div class="single_feature">
                            <div class="single_service">
                                <span class="flaticon-ui"></span>
                                <h4>culture</h4>
                                <p>Set have great you male grasses yielding yielding first their to
                                    called deep abundantly Set have great you male</p>
                                <a href="#" class="btn_3">read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-4">
                        <div class="single_feature">
                            <div class="single_service">
                                    <span class="flaticon-ui"></span>
                                <h4>civilization</h4>
                                <p>Set have great you male grasses yielding yielding first their to called
                                    deep abundantly Set have great you male</p>
                                <a href="#" class="btn_3">read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-4">
                        <div class="single_feature">
                            <div class="single_service single_service_2">
                                    <span class="flaticon-ui"></span>
                                <h4>habit</h4>
                                <p>Set have great you male grasses yielding yielding first their to called deep
                                    abundantly Set have great you male</p>
                                <a href="#" class="btn_3">read more</a>
                            </div>
                        </div>
                    </div>
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
                            <span class="counter">60</span>
                            <h4> <span>Satisfied</span> Client</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single_counter_icon">
                            <img src="img/icon/Icon_2.svg" alt="">
                        </div>
                        <div class="single_member_counter">
                            <span class="counter">10</span>
                            <h4> <span>Worldwide</span> Branches</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single_counter_icon">
                            <img src="img/icon/Icon_3.svg" alt="">
                        </div>
                        <div class="single_member_counter">
                            <span class="counter">80</span>
                            <h4> <span>Total</span> Projects</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single_counter_icon">
                            <img src="img/icon/Icon_4.svg" alt="">
                        </div>
                        <div class="single_member_counter">
                            <span class="counter">24</span>
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