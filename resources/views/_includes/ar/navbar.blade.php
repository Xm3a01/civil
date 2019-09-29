<!--::header part start::-->
<header class="main_menu home_menu">
    <div class="container">
       <div class="row align-items-center">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                  <a class="navbar-brand logo"  href="{{route('index.ar')}}"><img width="185" height="50" src="{{asset('img/logo.jpg')}}" alt="logo"> </a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="ti-menu"></span>
                    </button>
                    <div class="collapse navbar-collapse main-menu-item justify-content-first"
                        id="navbarSupportedContent">
                        <ul class="navbar-nav align-items-center">
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('ar') ? 'active' : '' }}" href="{{route('index.ar')}}"> الرئيسية</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('about/ar') ? 'active' : '' }}" href="{{route('about.ar')}}">من نحن</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('contact/ar') ? 'active' : '' }}" href="{{route('contact.ar')}}">واصلنا</a>
                            </li> 
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('events/ar') ? 'active' : '' }}" href="{{route('events.ar')}}">الاحداث</a>
                            </li>
                        </ul>
                    </div>
                    <div class="collapse navbar-collapse main-menu-item justify-content-end"
                        id="navbarSupportedContent">
                        <ul class="navbar-nav align-items-center">
                            <li class="nav-item"><code><small><a class=" btn btn_1" href="/">Eng</a></small></code></li>
                        </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- Header part end-->