       <div class="page-sidebar custom-scrollbar">
            <div class="sidebar-user text-center">
                <div>
                    <img class="img-50 rounded-circle" src="{{asset('images/user/1.jpg')}}" alt="#">
                </div>
                <h6 class="mt-3 f-12">{{auth()->user()->username}}</h6>
            </div>
            <ul class="sidebar-menu">
                <li class="active">
                    <div class="sidebar-title">General</div>
                    <a href="#" class="sidebar-header">
                        <i class="icon-desktop"></i><span>Dashboard</span>
                        <i class="fa fa-angle-right pull-right"></i>
                    </a>
                    <ul class="sidebar-submenu">
                        <li><a href="index.html" class="active"><i class="fa fa-angle-right"></i>Default</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="sidebar-header">
                        <i class="icon-blackboard"></i><span>Widgets</span>
                        <i class="fa fa-angle-right pull-right"></i>
                    </a>
                    <ul class="sidebar-submenu">
                        <li><a href="general-widget.html"><i class="fa fa-angle-right"></i>General widget</a></li>
                        <li><a href="chart-widget.html"><i class="fa fa-angle-right"></i>Chart widget</a></li>
                    </ul>
                </li>
               
            </ul>
        </div>