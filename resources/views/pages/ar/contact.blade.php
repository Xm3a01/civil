@extends('layouts.ar_main')

@section('stylesheets')
<link rel="stylesheet" href="{{asset('css/rtl.css')}}">
@endsection

@section('content')
     <!-- breadcrumb start-->
     <section class="breadcrumb breadcrumb_bg align-items-center">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-sm-6">
                    <div class="breadcrumb_tittle text-left">
                        <h2>وصلنا</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="breadcrumb_content text-right">
                        <p>الرئسيه<span>/</span>وصلنا</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->


  <!-- ================ contact section start ================= -->
  <section class="contact-section section_padding">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2 class="contact-title">كن على صله</h2>
        </div>
        <div class="col-lg-8">
          <form class="form-contact contact_form" action="{{route('send.ar')}}" method="POST" id="contactForm" novalidate="novalidate">
            @csrf
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                  
                    <textarea class="form-control w-100" name="msg" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'الرســــــــــــاله'" placeholder = 'الرســــــــــــاله'></textarea>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'الاســـم'" placeholder = 'الاســـم'>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'البريد اللاكتروني'" placeholder = 'البريد اللاكتروني'>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <input class="form-control" name="subj" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'الموضوع'" placeholder = 'الموضوع'>
                </div>
              </div>
            </div>
            <div class="form-group mt-3">
              <button type="submit" class="button button-contactForm btn_1">ارسال</button>
            </div>
          </form>
        </div>
        <div class="col-lg-4">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-home"></i></span>
            <div class="media-body">
              <h3>{{$about->ar_address}}</h3>
              <p>{{$about->ar_address}}</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
            <div class="media-body">
              <h3>{{$about->tel}}</h3>
              <p>اثنين - جمعه 9 ص , 6 م</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <div class="media-body">
              <h3>{{$about->email}}</h3>
              <p>ترسل كل اقتراخاتك علي هذا البريد</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ contact section end ================= -->
  
@endsection