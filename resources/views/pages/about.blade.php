@extends('layouts.main')

@section('content')
    <!-- about part start-->
    <section class="about_part section_padding about_section" >
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-6 col-lg-6">
                    <div class="about_part_img" style="direction:ltr; text-align:left">
                        <img src="img/download.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="about_part_text">
                        <h2>For Civiling</h2>
                        <p>{!! $about->profile !!}.</p>
                        <ul>
                            <li>
                                <span class="flaticon-drop"></span>
                                <h3>Address</h3>
                                <p>{{$about->address}} </p>
                            </li>
                            <li>
                                <span class="flaticon-ui"></span>
                                <h3>conact</h3>
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