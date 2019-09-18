<!-- Left navbar-header -->

<div class="navbar-default sidebar" role="navigation">
    <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 100%;">
        <div class="sidebar-nav navbar-collapse slimscrollsidebar active" style="overflow: hidden; width: auto; height: 100%;">
            <ul class="nav in" id="side-menu">
                <li class="nav-small-cap m-t-10">--- Main Menu</li>
                
                <li>
                    <a href="javascript:void(0);" class="waves-effect">
                        <span data-icon="7" class="linea-icon linea-basic"></span>
                        <span class="hide-menu"> About
                            <span class="fa arrow"></span>
                        </span>
                    </a>
                    <ul class="nav nav-second-level ">
                        <li>
                            <a href="{{route('abouts.index')}}">All Profiles</a>
                        </li>
                        <li>
                            <a href="{{route('abouts.create')}}">Add Profile</a>
                        </li>
                    </ul>
                </li> 
                <li>
                    <a href="javascript:void(0);" class="waves-effect">
                        <i class="ti-comment-alt"></i>
                        <span class="hide-menu"> Articles
                            <span class="fa arrow"></span>
                        </span>
                    </a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{route('articles.index')}}">All Articles</a>
                        </li>
                        <li>
                            <a href="{{route('articles.create')}}">Add Article</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{route('events.index')}}" class="waves-effect">
                        <i data-icon="A" class="linea-icon linea-elaborate fa-fw"></i>
                        <span class="hide-menu"> Events
                            <span class="fa arrow"></span>
                        </span>
                    </a>
                </li>  
                 
            </ul>
        </div>
        <div class="slimScrollBar" style="background: rgb(220, 220, 220); width: 0px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 930.222px;"></div>
        <div class="slimScrollRail" style="width: 0px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div>
    </div>
</div>

<!-- Left navbar-header end -->
