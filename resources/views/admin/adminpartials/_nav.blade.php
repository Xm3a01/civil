<!-- Top Navigation -->

<nav class="navbar navbar-default navbar-static-top m-b-0">
    <div class="navbar-header">
        <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse">
            <i class="ti-menu"></i>
        </a>
        <div class="top-left-part">
            <a class="logo" href="/dashboard">
                 <b>
                     <img src="http://placehold.it/50x50" alt="">
                 </b>
                <span class="hidden-xs" style="display:inline">
                    <strong>Civil</strong>Sudan
                </span>
            </a>
        </div>
        <ul class="nav navbar-top-links navbar-left hidden-xs active">
            <li>
                <a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light">
                    <i class="ti-menu icon-arrow-left-circle"></i>
                </a>
            </li>
        </ul>
        <ul class="nav navbar-top-links navbar-right pull-right">
            <li class="dropdown">
                <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#">
                    <b class="hidden-xs">{{ Auth::user()->name }}</b>
                </a>
                <ul class="dropdown-menu dropdown-user animated flipInY">
                    <li>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            <i class="fa fa-power-off"></i> Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                    </li>
                    <li>
                        <a href="{{route('users.show',Auth::user()->id)}}"><i class="fa fa-user"></i> My account</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
    </div>
    <!-- /.navbar-header -->
    <!-- /.navbar-top-links -->
    <!-- /.navbar-static-side -->
</nav>

<!-- End Top Navigation -->