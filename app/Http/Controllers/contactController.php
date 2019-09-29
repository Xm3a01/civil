<?php

namespace App\Http\Controllers;

use Mail;
use App\Mail\contactMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\ContactFormRequest;

class contactController extends Controller
{
     public $request;
    
     public function __construct()
     {
      $request = new Request();
        $this->request = $request;
     }
        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request)
        {
    
            $this->validate($request , [
                'name'=>'required',
                'email'=>'required|email',
                'msg'=>'required',
              ]); 
    
        $contact = [];
    
        $contact['name'] = $request->get('name');
        $contact['email'] = $request->get('email');
        $contact['subj'] = $request->get('subj');
        $contact['msg'] = $request->get('msg');
    
         Mail::send(new contactMail($contact));
         Session::flash('success','Send succefull');
        return redirect('/contact');
    
        }
    
        public function storeAr(Request $request)
        {
             $message = array(
                'name.required'=>'يجب ملأ خانة لاسم',
                'email.required'=>'يجب ملأ خانة البريد اللاكتروني',
                'email.email'=>'البريد اللاكتروني غير صحيح',
                'msg.required'=>'لابدا من وجود رساله',
            );
    
            $this->validate($request , [
              'name'=>'required',
              'email'=>'required|email',
              'msg'=>'required',
            ],$message);
    
        $contact = [];
        
        $contact['name'] = $request->get('name');
        $contact['email'] = $request->get('email');
        $contact['subj'] = $request->get('subj');
        $contact['msg'] = $request->get('msg');
         Mail::send(new contactMail($contact));
         Session::flash('success','تم ارسال  بنجاح');
        return redirect('/contact/ar');
        }
    
}
