<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts = About::all();

        return view('admin.about.index')
          ->withAbouts($abouts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about.create');
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
                'profile'=>'required',
                'ar_profile'=>'required',
                'address'=>'required',
                'ar_address'=>'required',
                'phone'=>'required',
                'email'=>'required',
                'img' => 'required'
            ]);
            $about = About::create([
                'profile'=>$request->profile,
                'ar_profile'=>$request->ar_profile,
                'address'=>$request->address,
                'ar_address'=>$request->ar_address,
                'tel'=>$request->phone,
                'email'=>$request->email,
                'num1' => $request->num1,
                'num2' => $request->num2,
                'num3' => $request->num3,
                'num4' => $request->num4,
                'img'=>$request->img->store('public/about'),
            ]);

            if($about->save()) {
                \Session::flash('success','Your Profile is successfully create');
                return Redirect::to('dashboard/abouts');
            } else {
                \Session::flash("error','Your Profile isn't successfully create");
                return Redirect::to('dashboard/abouts/create');
            }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $about = About::findOrfail($id);
        return view('admin.about.edit')->withAbout($about);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'profile'=>'required',
            'ar_profile'=>'required',
            'address'=>'required',
            'ar_address'=>'required',
            'phone'=>'required',
            'email'=>'required',
        ]);
        $about = About::findOrFail($id);
            $about->profile  = $request->profile;
            $about->ar_profile = $request->ar_profile;
            $about->address = $request->address;
            $about->ar_address = $request->ar_address;
            $about->tel = $request->phone;
            $about->email = $request->email;

        if($about->save()) {
            \Session::flash('success','Your Profile is successfully create');
            return Redirect::to('dashboard/abouts');
        } else {
            \Session::flash("error','Your Profile isn't successfully create");
            return Redirect::to('dashboard/abouts/create');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
