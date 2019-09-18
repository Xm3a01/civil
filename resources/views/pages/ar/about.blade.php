@extends('layouts.ar_main')

@section('stylesheets')
<link rel="stylesheet" href="{{asset('css/rtl.css')}}">
@endsection

@section('content')
    <!-- about part start-->
    <section class="about_part section_padding about_section" style="text-align:left; direction:ltr">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-6 col-lg-6">
                    <div class="about_part_img">
                        <img src="{{asset('img/download.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="about_part_text" style="text-align:right; direction:rtl">
                        <h2>عشان المدنيه </h2>
                        <p>{!! $about->ar_profile !!}.</p>
                        <ul>
                            <li>
                                <span class="flaticon-drop" style="text-align:left"></span>
                                <h3>العنوان</h3>
                                <p>{{$about->ar_address}} </p>
                            </li>
                            <li>
                                <span class="flaticon-ui" style="text-align:left"></span>
                                <h3>معلومات الاتصال</h3>
                                <p>{{$about->tel}} - {{$about->email}} </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about part end-->
@endsection