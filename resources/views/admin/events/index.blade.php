@extends('admin.main') 
@section('stylesheets')
<link rel="stylesheet" href="{{asset('vendor/calendar/css/fullcalendar.min.css')}}">
@endsection
@section('content')
   <!-- Page Content -->
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Calendar Page</h4> </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> 
                {{-- <a href="https://themeforest.net/item/elite-admin-the-ultimate-dashboard-web-app-kit-material-design/16750820?ref=suniljoshi" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a> --}}
                <ol class="breadcrumb">
                    <li><a href="#">Dashboard</a></li>
                    <li class="active">Calendar Page</li>
                </ol>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-md-3">
                <div class="white-box">
                    <h3 class="box-title">List of event</h3>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div id="calendar-events" class="m-t-20">
                                @foreach ($tasks as $task)
                                <hr>   
                            <div class="calendar-events" data-class="bg-success"><i class="fa fa-circle text-success"></i> {{$task->event_name}}</div>
                                @endforeach
                            </div>
                            <a href="#" data-toggle="modal" data-target="#add-new-event" class="btn btn-lg m-t-40 btn-danger btn-block waves-effect waves-light">
                                <i class="ti-plus"></i> Add New Event
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="white-box">
                    <div id="calendar"></div>
                </div>
            </div>
        </div>
        <!-- /.row -->
        <!-- BEGIN MODAL -->
        <div class="modal none-border" id="my-event">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title"><strong>Edit Event</strong></h4>
                    </div>
                    <div class="modal-body">
                        <form role="form" id="edit-form" method="POST" action="{{route('event.update')}}">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="event_id" id="event_id">
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="control-label">Event</label>
                                    <textarea class="form-control form-white" name="event_name" id="event_name" placeholder="Enter event" type="text" name="category-name" ></textarea>
                                </div>
                                <div class="col-md-12" style="text-align:right" >
                                    <label class="control-label">الحدث</label>
                                    <textarea style="text-align:right" class="form-control form-white" name="ar_event_name" id="ar_event_name" placeholder="ادخل الحدث" type="text" name="category-name" ></textarea>
                                </div>
                                <div class="col-md-6">
                                    <label class="control-label">Start</label>
                                    <input class="form-control form-white" name="event_start" id="event_start" type="date"  id="example-date-input">
                                </div>
                                <div class="col-md-6">
                                    <label class="control-label">End</label>
                                    <input class="form-control form-white" name="event_end" id="event_end" type="date"  id="example-date-input">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-white waves-effect" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-success save-event waves-effect waves-light" onclick="event.preventDefault();
                        document.getElementById('edit-form').submit();">Edit event</button>
                        <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal" onclick="event.preventDefault();
                        document.getElementById('delete-form').submit();">Delete</button>
                        <form method="POST" id="delete-form" action="{{route('event.delete')}}">
                           @csrf
                           @method('DELETE')
                          <input type="hidden" name="delete_id" id="delete_id">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Add Category -->
        <div class="modal fade none-border" id="add-new-event">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title"><strong>Add</strong> a event</h4>
                    </div>
                    <div class="modal-body">
                        <form role="form" id="event-form" method="POST" action="{{route('events.store')}}">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="control-label">Event</label>
                                    <textarea class="form-control form-white" name="event_name" placeholder="Enter event" type="text" name="category-name" ></textarea>
                                </div>
                                <div style="text-align:right;"  class="col-md-12">
                                    <label class="control-label">الحدث</label>
                                    <textarea style="text-align:right"  class="form-control form-white" name="ar_event_name" placeholder="ادخل الحدث" type="text" name="category-name" ></textarea>
                                </div>
                                <div class="col-md-6">
                                    <label class="control-label">Start</label>
                                    <input class="form-control form-white" name="event_start" type="date"  id="example-date-input">
                                </div>
                                <div class="col-md-6">
                                    <label class="control-label">End</label>
                                    <input class="form-control form-white" name="event_end" type="date"  id="example-date-input">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger waves-effect waves-light save-category" data-dismiss="modal" onclick="event.preventDefault();
                        document.getElementById('event-form').submit();">Save</button>
                        <button type="button" class="btn btn-white waves-effect" data-dismiss="modal">Close</button>
                    </div>
                </div>
        <!-- END MODAL -->
@endsection

@section('scripts')
   <script src="{{asset('vendor/calendar/js/jquery-ui.min.js')}}"></script>
   <script src="{{asset('vendor/calendar/js/moment.js')}}"></script>
   <script src="{{asset('vendor/calendar/js/fullcalendar.min.js')}}"></script>
   {{-- <script src="{{asset('vendor/calendar/js/cal-init.js')}}"></script> --}}
   <script>
       
    $(document).ready(function() {
        // page is now ready, initialize the calendar...
        $('#calendar').fullCalendar({
            // put your options and callbacks here
            events : [
                @foreach($tasks as $task)
                {
                    title : '{{ $task->event_name }}',
                    ar_title : '{{ $task->ar_event_name }}',
                    start : '{{ $task->event_start }}',
                    end : '{{ $task->event_end }}',
                    id: '{{ $task->id}}'
                },
                @endforeach
            ],

            eventClick:function(event, jsEvent, view) {
                $('#event_name').val(event.title);
                $('#ar_event_name').val(event.ar_title);
                $('#event_id').val(event.id);
                $('#delete_id').val(event.id);
                $('#event_start').val(moment(event.start).format());
                $('#event_end').val(moment(event.end).format());
                $('#my-event').modal();
            }
            
        })
    })

</script>
@endsection