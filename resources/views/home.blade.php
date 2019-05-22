@extends('layouts.app')

@section('content')
<body>

<!-- Loader starts -->
<div class="loader-wrapper">
    <div class="loader bg-white">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <h4>Have a great day at work today <span>&#x263A;</span></h4>
    </div>
</div>
<!-- Loader ends -->

<!--page-wrapper Start-->
<div class="page-wrapper">

    <!--Page Header Start-->
    <div class="page-main-header">
        <div class="main-header-left">
            <div class="logo-wrapper">
                <a href="index.html">
                    <img src="{{asset('images/logo-light.png')}}" class="image-dark" alt=""/>
                    <img src="{{asset('images/logo-light-dark-layout.png')}}" class="image-light" alt=""/>
                </a>
            </div>
        </div>
        <div class="main-header-right row">
            <div class="mobile-sidebar">
                <div class="media-body text-right switch-sm">
                    <label class="switch">
                        <input type="checkbox" id="sidebar-toggle" checked>
                        <span class="switch-state"></span>
                    </label>
                </div>
            </div>
            <div class="nav-right col">
                <ul class="nav-menus">
                    <li class="onhover-dropdown">
                        <div class="media  align-items-center">
                            <img class="align-self-center pull-right mr-2" src="{{asset('images/dashboard/user.png')}}" alt="header-user"/>
                            <div class="media-body">
                                <h6 class="m-0 txt-dark f-16">
                                    Mi cuenta
                                    <i class="fa fa-angle-down pull-right ml-2"></i>
                                </h6>
                            </div>
                        </div>
                        <ul class="profile-dropdown onhover-show-div p-20">
                            <li>
                                <a href="#">
                                    <i class="icon-user"></i>
                                    Editar Perfil
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit">Logout</button>
                                </form>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <div class="d-lg-none mobile-toggle">
                    <i class="icon-more"></i>
                </div>
            </div>
        </div>
    </div>
    <!--Page Header Ends-->

    <!--Page Body Start-->
    <div class="page-body-wrapper">
        <!--Page Sidebar Start-->
        <div class="page-sidebar custom-scrollbar">
            <div class="sidebar-user text-center">
                <div>
                    <img class="img-50 rounded-circle" src="{{asset('images/user/1.jpg')}}" alt="#">
                </div>
                <h6 class="mt-3 f-12">Johan Deo</h6>
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
        <!--Page Sidebar Ends-->

        <div class="page-body">
            
           
        </div>
        <!--Page Body Ends-->
    </div>
    <!--Page Body Ends-->

</div>

@endsection

<!-- Scripts -->
@section ('script')
  <!-- latest jquery-->
<script src="{{asset('js/jquery-3.2.1.min.js')}}" ></script>

<!-- Bootstrap js-->
<script src="{{asset('js/bootstrap/popper.min.js')}}" ></script>
<script src="{{asset('js/bootstrap/bootstrap.js')}}" ></script>

<!-- Chart JS-->
<script src="{{asset('js/chart/Chart.min.js')}}"></script>

<!-- Morris Chart JS-->
<script src="{{asset('js/morris-chart/raphael.js')}}"></script>
<script src="{{asset('js/morris-chart/morris.js')}}"></script>

<!-- owlcarousel js-->
<script src="{{asset('js/owlcarousel/owl.carousel.js')}}" ></script>

<!-- Sidebar jquery-->
<script src="{{asset('js/sidebar-menu.js')}}" ></script>

<!--Sparkline  Chart JS-->
<script src="{{asset('js/sparkline/sparkline.js')}}"></script>

<!--Height Equal Js-->
<script src="{{asset('js/height-equal.js')}}"></script>

<!-- prism js -->
<script src="{{asset('js/prism/prism.min.js')}}"></script>

<!-- clipboard js -->
<script src="{{asset('js/clipboard/clipboard.min.js')}}" ></script>

<!-- custom card js  -->
<script src="{{asset('js/custom-card/custom-card.js')}}" ></script>

 <!-- Theme js-->
<script src="{{asset('js/script.js')}}" ></script>
<!-- <script src="{{asset('js/theme-customizer/customizer.js')}}"></script> -->
<!-- <script src="{{asset('js/chat-sidebar/chat.js')}}"></script> -->
<script src="{{asset('js/dashboard-default.js')}}" ></script> 

<!-- Counter js-->
<script src="{{asset('js/counter/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('js/counter/jquery.counterup.min.js')}}"></script>
<script src="{{asset('js/counter/counter-custom.js')}}"></script>

<script src="{{asset('js/notify/bootstrap-notify.min.js')}}"></script>
<script src="{{asset('js/notify/index.js')}}"></script>
@endsection
