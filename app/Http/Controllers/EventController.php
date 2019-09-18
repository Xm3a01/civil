<?php

namespace App\Http\Controllers;

use Calendar;
use App\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Event::all();

        return view('admin.events.index', compact('tasks') );
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'event_name' => 'required',
            'event_start' => 'required',
            'event_end' => 'required'
        ]);

        $event = new Event();
        $event->event_name = $request['event_name'];
        $event->ar_event_name = $request['ar_event_name'];
        $event->event_start = $request['event_start'];
        $event->event_end = $request['event_end'];
        $event->save();

        \Session::flash('success','Event added successfully.');
        return Redirect::to('dashboard/events');
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'event_name'=>'required',
            'event_start'=>'required',
            'event_end'=>'required',
        ]);

        $event = Event::findOrfail($request->event_id);
        $event->event_name = $request->event_name;
        $event->event_start = $request->event_start;
        $event->event_end = $request->event_end;
        if($event->save()) {
            \Session::flash('success', 'Your event is successfully updated');
            return Redirect::to('dashboard/events');
        } else {
            \Session::flash('fail', 'Your event is fail updated');
            return Redirect::to('dashboard/events');
        }   
    }

    public function delete(Request $request)
    {
        // return $request->delete_id;
        $event = Event::findOrfail($request->delete_id);
        $event->delete();
        \Session::flash('success', 'Your event is successfully delete');
        return Redirect::to('dashboard/events');

    }
}
