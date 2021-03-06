<!--::header part start::-->
<header class="main_menu home_menu">
    <div class="container">
       <div class="row align-items-center">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                  <a class="navbar-brand logo"  href="/"><img width="185" height="50" src="{{asset('img/logo.jpg')}}" alt="logo"> </a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="ti-menu"></span>
                    </button>
                    <div class="collapse navbar-collapse main-menu-item justify-content-first"
                        id="navbarSupportedContent">
                        <ul class="navbar-nav align-items-center">
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="/about">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('contact') ? 'active' : '' }}" href="{{route('civil.contact')}}">Contact</a>
                            </li> 
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('events') ? 'active' : '' }}" href="{{route('civil.events')}}">Events</a>
                            </li>
                        </ul>
                    </div>
                    <div class="collapse navbar-collapse main-menu-item justify-content-end"
                        id="navbarSupportedContent">
                        <ul class="navbar-nav align-items-center">
                            <li class="nav-item" style="font-family: 'Cairo', sans-serif;"><code><small><a class="btn btn_1" href="{{route('index.ar')}}">عربي</a></small></code></li>
                        </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- Header part end-->