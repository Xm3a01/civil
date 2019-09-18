@extends('layouts.main')

@section('content')
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
@endsection