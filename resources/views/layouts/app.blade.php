<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--favicon icon-->
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png')}}">

    <title>DashLab Home</title>

    <!--web fonts-->
    <link href="//fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <!--bootstrap styles-->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.min.css" rel="stylesheet">
    @yield('calendar_style')

    <!--icon font-->
    <link href="{{ asset('assets/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/dashlab-icon/dashlab-icon.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/simple-line-icons/css/simple-line-icons.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/themify-icons/css/themify-icons.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/weather-icons/css/weather-icons.min.css')}}" rel="stylesheet">

    <!--custom scrollbar-->
    <link href="{{ asset('assets/vendor/m-custom-scrollbar/jquery.mCustomScrollbar.css')}}" rel="stylesheet">

    <!--jquery dropdown-->
    <link href="{{ asset('assets/vendor/jquery-dropdown-master/jquery.dropdown.css')}}" rel="stylesheet">

    <!--jquery ui-->
    <link href="{{ asset('assets/vendor/jquery-ui/jquery-ui.min.css')}}" rel="stylesheet">

    <!--iCheck-->
    <link href="{{ asset('assets/vendor/icheck/skins/all.css')}}" rel="stylesheet">

    <!--vector maps -->
   <link href="{{ asset('assets/vendor/vector-map/jquery-jvectormap-1.1.1.css')}}" rel="stylesheet" >

    <!--c3chart-->
    <link href="{{ asset('assets/vendor/c3chart/c3.min.css')}}" rel="stylesheet">

    <!--custom styles-->
    <link href="{{ asset('assets/css/main.css')}}" rel="stylesheet">
    @yield('table_styles')
    
    

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="assets/vendor/html5shiv.js"></script>
    <script src="assets/vendor/respond.min.js"></script>
    <![endif]-->
    <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
    
    <script src="{{asset('assets/vendor/popper.min.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>

 
</head>

<body class="fixed-nav">

    <!--navigation : sidebar & header-->
    <nav class="navbar navbar-expand-lg fixed-top navbar-light" id="mainNav">

        <!--brand name-->
        <a class="navbar-brand" href="#"{{-- data-jq-dropdown="#jq-dropdown-1"--}}>
            <img class="pr-3 float-left" src="assets/img/logo-icon.png" srcset="assets/img/logo-icon@2x.png 2x"  alt=""/>
            <div class="float-left">
                <div>DashLab </div>
              {{--<i class="fa fa-caret-down pl-2"></i>  <span class="page-direction f12 weight300">
                    <span>home</span>
                    <i class="fa fa-angle-right"></i>
                    <span>ui element</span>
                </span>---}}
            </div>
        </a>
        <!--/brand name-->

        <!--brand mega menu-->
        <div id="jq-dropdown-1" class="jq-dropdown">
            <div class="b-mega-menu">
                <div class="card card-shadow">
                    <div class="card-header p-2 pl-3">
                        <div class="navbar-brand mt-2">
                            <img class="pr-3 float-left" src="assets/img/logo-icon.png" srcset="assets/img/logo-icon@2x.png 2x"  alt=""/>
                            <div class="float-left">
                                <div>DashLab</div>
                               {{-- <span class="page-direction f12 weight300">
                                    <span>home</span>
                                    <i class="fa fa-angle-right"></i>
                                    <span>ui element</span>
                                </span>--}}
                            </div>
                        </div>
{{--
                        <div class="widget-action-link">
                            <ul class="nav nav-tabs wal-nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><i class="fa fa-home"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="analytics-tab" data-toggle="tab" href="#analytics" role="tab" aria-controls="analytics" aria-selected="false"><i class="fa fa-desktop"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="application-tab" data-toggle="tab" href="#application" role="tab" aria-controls="application" aria-selected="false"><i class="fa fa-magnet"></i></a>
                                </li>
                            </ul>

                        </div>--}}
                    </div>
                  {{--  <div class="card-body p-0 ">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="row no-gutters">
                                    <div class="col-4 border-right">
                                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fa fa-home pr-2"></i> Application</a>
                                            <a class="nav-link" id="v-pills-report-tab" data-toggle="pill" href="#v-pills-report" role="tab" aria-controls="v-pills-report" aria-selected="false"><i class="fa fa-desktop pr-2"></i> Reports</a>
                                            <a class="nav-link" id="v-pills-management-tab" data-toggle="pill" href="#v-pills-management" role="tab" aria-controls="v-pills-management" aria-selected="false"><i class="fa fa-magnet pr-2"></i>Management</a>
                                            <a class="nav-link" id="v-pills-blog-tab" data-toggle="pill" href="#v-pills-blog" role="tab" aria-controls="v-pills-blog" aria-selected="false"><i class="fa fa-comments-o pr-2"></i>Blog</a>
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <div class="tab-content" id="v-pills-tabContent">
                                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                                <ul class="list-unstyled b-mega-menu-link">
                                                    <li><a href="#">Bootstrap 4 Stable</a></li>
                                                    <li class="active"><a href="javascript:;">DashLab Modern Admin</a></li>
                                                    <li><a href="#">Awesome Widgets Collection</a></li>
                                                    <li><a href="#">Developer Friendly Code</a></li>
                                                    <li><a href="#">SASS and GULP Task</a></li>
                                                    <li><a href="#">Fully Responsive</a></li>
                                                </ul>
                                            </div>
                                            <div class="tab-pane fade" id="v-pills-report" role="tabpanel" aria-labelledby="v-pills-report-tab">
                                                <ul class="list-unstyled b-mega-menu-link">
                                                    <li><a href="#">Daily Reports</a></li>
                                                    <li><a href="javascript:;">Weekly Reports</a></li>
                                                    <li class="active"><a href="#">Monthly Reports</a></li>
                                                    <li><a href="#">Yearly Reports</a></li>
                                                    <li><a href="#">HR Reports</a></li>
                                                    <li><a href="#">Product Reports</a></li>
                                                    <li><a href="#">Order Reports</a></li>
                                                    <li><a href="#">Revenue Reports</a></li>
                                                </ul>
                                            </div>
                                            <div class="tab-pane fade" id="v-pills-management" role="tabpanel" aria-labelledby="v-pills-management-tab">
                                                <ul class="list-unstyled b-mega-menu-link">
                                                    <li><a href="#">HR Management</a></li>
                                                    <li class="active"><a href="javascript:;">Product Management</a></li>
                                                    <li><a href="#">Role Management</a></li>
                                                    <li><a href="#">Sales Management</a></li>
                                                    <li><a href="#">Employee Management</a></li>
                                                </ul>
                                            </div>
                                            <div class="tab-pane fade" id="v-pills-blog" role="tabpanel" aria-labelledby="v-pills-blog-tab">
                                                <ul class="list-unstyled b-mega-menu-link">
                                                    <li class="active"><a href="#">Educational Blog</a></li>
                                                    <li> <a href="javascript:;">Technology Blog</a></li>
                                                    <li><a href="#">Political Blog</a></li>
                                                    <li><a href="#">Woocommerce Blog</a></li>
                                                    <li><a href="#">Entertainment Blog</a></li>
                                                    <li><a href="#">Newspapper Blog</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="analytics" role="tabpanel" aria-labelledby="analytics-tab">
                                <div class="p-5 m-4 text-center">
                                    <i class="fa fa-desktop f50 text-muted mb-4"></i>
                                    <p class="mb-5">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC</p>
                                    <a href="#" class="btn btn-primary">Get Started</a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="application" role="tabpanel" aria-labelledby="application-tab">
                                <div class="p-5 m-4 text-center">
                                    <i class="fa fa-magnet f50 text-muted mb-4"></i>
                                    <p class="mb-5">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33</p>
                                    <a href="#" class="btn btn-purple">Get Started</a>
                                </div>
                            </div>
                        </div>

                    </div>--}}
                </div>
            </div>
        </div>
        <!--/brand mega menu-->

        <!--responsive nav toggle-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!--/responsive nav toggle-->

        <!--responsive rightside toogle-->
        <a href="javascript:;" class="nav-link right_side_toggle responsive-right-side-toggle">
            <i class="icon-options-vertical"> </i>
        </a>
        <!--/responsive rightside toogle-->

        <div class="collapse navbar-collapse" id="navbarResponsive">

            <!--left side nav-->
            <ul class="navbar-nav left-side-nav" id="accordion">
                {{--
                <li class="nav-item-search" data-toggle="tooltip" data-placement="right" title="Search">
                    <div class="nav-link nav-link-collapse collapsed" data-toggle="collapse">
                        <i class="vl_search"></i>
                        <span class="nav-link-text">
                            <input type="text" class="search-form" placeholder="Search Report"/>
                        </span>
                    </div>
                </li>
            
           
                        --}}
                        @can('client-create')
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="dashboard">
                <a class="nav-link" href="{{ route('dashboards.index')}}">
                            <i class="vl_dashboard"></i>
                            <span class="nav-link-text">DASHBOARD </span>
                        </a>
                    </li>

                    
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="clients">
                        <a class="nav-link" href="{{ route('clients.index')}}">
                                <i class="fa fa-address-card-o"></i>
                                    <span class="nav-link-text">CLIENTS </span>
                                </a>
                            </li>

                            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="clients">
                                    <a class="nav-link" href="{{ route('caledars.index')}}">
                                            <i class="fa fa-calendar"></i>
                                                <span class="nav-link-text">CALENDAR </span>
                                            </a>
                                        </li>
                                        @endcan
                                        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="clients">
                                                <a class="nav-link" href="{{ route('client_calendars.index')}}">
                                                        <i class="fa fa-calendar"></i>
                                                            <span class="nav-link-text">CALENDAR </span>
                                                        </a>
                                                    </li>
                                        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="clients">
                                                <a class="nav-link" href="{{ route('photographers.index')}}">
                                                        <i class="fa fa-camera"></i>
                                                            <span class="nav-link-text">PHOTOGRAPHERS </span>
                                                        </a>
                                                    </li>
                    {{--

                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="appointments">
                            <a class="nav-link" href="{{ route('dashboards.index')}}">
                                        <i class="fa fa-clock-o"></i>
                                        <span class="nav-link-text">APPOINTMENTS </span>
                                    </a>
                                </li>

                 

                               ---}}


                                {{--
                                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="clients">
                                        <a class="nav-link nav-link-collapse" data-toggle="collapse" data-target="#dashboard">
                                            <i class="fa fa-address-card-o"></i>
                                            <span class="nav-link-text">CLIENTS </span>
                                        </a>
                                        <ul class="sidenav-second-level collapse " id="dashboard" data-parent="#accordion">
                                            <li> <a href="{{ route('finds.index')}}">Client Seach</a></li>
                                            <li > <a href="{{ route('clients.create')}}">Add New Clients</a></li>
                                            <li > <a href="{{ route('clients.index')}}">Clients Table</a> </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Calendar">
                                            <a class="nav-link" href="{{ route('types.index')}}">
                                                        <i class="fa fa-thumbs-o-up"></i>
                                                        <span class="nav-link-text">SERVICES </span>
                                                    </a>
                                                </li>--}}

                    {{--
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                    <a class="nav-link nav-link-collapse" data-toggle="collapse" data-target="#dashboard">
                        <i class="vl_dashboard"></i>
                        <span class="nav-link-text">Dashboard </span>
                    </a>
                    <ul class="sidenav-second-level collapse show" id="dashboard" data-parent="#accordion">
                        <li class="active"> <a href="index.html">Dashboard 1</a> </li>
                        <li> <a href="dashboard-2.html">Dashboard 2</a></li>
                        <li> <a href="dashboard-3.html">Dashboard 3</a></li>
                        <li> <a href="dashboard-4.html">Dashboard 4</a></li>
                        <li> <a href="dashboard-5.html">Dashboard 5</a></li>
                        <li> <a href="dashboard-6.html">Dashboard 6</a></li>
                        <li> <a href="dashboard-crypto.html">Dashboard Crypto <span class="badge badge-success">New</span></a></li>
                    </ul>
                </li>

                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Widgets">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" data-target="#widgets">
                        <i class="vl_bond"></i>
                        <span class="nav-link-text">Widgets</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="widgets" data-parent="#accordion">
                        <li> <a href="widget-basic.html">Basic Widgets</a> </li>
                        <li> <a href="widget-chart.html">Chart Widgets</a> </li>
                    </ul>
                </li>

                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Calendar">
                    <a class="nav-link" href="calendar-external-events.html">
                        <i class="vl_calendar"></i>
                        <span class="nav-link-text">Calendar <span class="badge badge-primary">2</span> </span>
                    </a>
                </li>

                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Icons">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" data-target="#icons">
                        <i class="vl_hand-mike"></i>
                        <span class="nav-link-text">Icons</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="icons" data-parent="#accordion">
                        <li> <a href="icon-fontawesome.html">Fontawesome Icons</a> </li>
                        <li> <a href="icon-simple-line.html">Simple Line Icons</a> </li>
                        <li> <a href="icon-themify.html">Themify Icons</a> </li>
                        <li> <a href="icon-weather.html">Weather Icons</a> </li>
                    </ul>
                </li>

                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Forms">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" data-target="#forms">
                        <i class="vl_form"></i>
                        <span class="nav-link-text">Forms</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="forms" data-parent="#accordion">
                        <li> <a href="form-basic.html">Basic Forms</a> </li>
                        <li> <a href="form-checkbox-radio.html">Checkbox & Radio</a> </li>
                        <li> <a href="form-input-group.html">Input Group</a> </li>
                        <li> <a href="form-validation.html">Form Validation</a> </li>
                        <li> <a href="editor-summernote.html">Editor Summernote</a> </li>
                        <li> <a href="form-dropzone.html">Dropzone</a> </li>
                        <li> <a href="form-pickers.html">Pickers</a> </li>
                        <li> <a href="form-select2.html">Select 2</a> </li>
                        <li> <a href="form-multi-select.html">Multiple Select</a> </li>
                        <li> <a href="form-wizard.html">Form Wizard</a> </li>
                        <li> <a href="form-switch.html">Switchery</a> </li>
                    </ul>
                </li>

                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Data Tables">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" data-target="#d_tables">
                        <i class="vl_grid-even"></i>
                        <span class="nav-link-text">Data Tables</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="d_tables" data-parent="#accordion">
                        <li> <a href="table-basic.html">Basic Table</a> </li>
                        <li> <a href="table-datatable.html">Data Table</a> </li>
                        <li> <a href="table-ajax-datatable.html">Ajax Data Table</a> </li>
                    </ul>
                </li>

                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" data-target="#charts">
                        <i class="vl_graph-bar"></i>
                        <span class="nav-link-text">Charts</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="charts" data-parent="#accordion">
                        <li> <a href="chartjs.html">Chartjs</a> </li>
                        <li> <a href="echarts.html">eCharts</a> </li>
                        <li> <a href="amcharts.html">amCharts</a> </li>
                    </ul>
                </li>

                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Exra Pages">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" data-target="#extra_pages">
                        <i class="vl_files"></i>
                        <span class="nav-link-text">Extra Pages</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="extra_pages" data-parent="#accordion">
                        <li> <a href="profile.html">Profile</a> </li>
                        <li> <a href="invoice.html">Invoice</a> </li>
                        <li> <a href="blank-page.html">Blank Page</a> </li>
                        <li> <a href="login.html">Login Page</a> </li>
                        <li> <a href="registration.html">Registration Page</a> </li>
                        <li> <a href="404.html">404 Error</a> </li>
                    </ul>
                </li>
                
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Layouts">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" data-target="#layouts">
                        <i class="vl_board"></i>
                        <span class="nav-link-text">Layouts</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="layouts" data-parent="#accordion">
                        <li> <a href="layout-top-nav.html">Top Nav </a></li>
                        <li> <a href="layout-dark-nav.html">Dark Left Nav</a> </li>
                        <li> <a href="blank-page.html">Light Left Nav</a> </li>
                        <li> <a href="layout-default-collapsed.html">Nav Collapsed Light</a></li>
                        <li> <a href="layout-dark-nav-collapsed.html">Nav Collapsed Dark</a></li>
                        <li> <a href="layout-floating-leftside-dark.html">Floating Nav Dark</a></li>
                        <li> <a href="layout-floating-leftside-dark-collapsed.html">Floating Collapsed Dark </a></li>
                        <li> <a href="layout-floating-leftside-light.html">Floating Nav Light </a></li>
                        <li> <a href="layout-floating-leftside-light-collapsed.html">Floating Collapsed Light </a></li>
                    </ul>
                </li>

                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" data-target="#multi_menu">
                        <i class="vl_sitemap1"></i>
                        <span class="nav-link-text">Menu Levels</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="multi_menu" data-parent="#accordion">
                        <li>
                            <a href="#">Second Level Item</a>
                        </li>
                        <li>
                            <a href="#">Second Level Item</a>
                        </li>
                        <li>
                            <a href="#">Second Level Item</a>
                        </li>
                        <li>
                            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" data-target="#multi_menu_2">Third Level</a>
                            <ul class="sidenav-third-level collapse" id="multi_menu_2">
                                <li>
                                    <a href="#">Third Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level Item</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                --}}
            </ul>
            <!--/left side nav-->

            <!--nav push link-->
            <ul class="navbar-nav sidenav-toggler">
                <li class="nav-item">
                    <a class="nav-link text-center" id="left-nav-toggler">
                        <i class="fa fa-angle-left"></i>
                    </a>
                </li>
            </ul>
            <!--/nav push link-->

            <!--header leftside links-->
            {{--
            <ul class="navbar-nav header-links">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle mr-lg-2" id="actionNav" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Application
                    </a>
                    <div class="dropdown-menu" aria-labelledby="actionNav">
                        <a class="dropdown-item" href="#">Bootstrap 4 Stable</a>
                        <a class="dropdown-item" href="#">DashLab Modern Admin</a>
                        <a class="dropdown-item" href="#">Awesome Widgets Collection</a>
                        <a class="dropdown-item" href="#">Developer Friendly Code</a>
                        <a class="dropdown-item" href="#">SASS and GULP Task</a>
                        <a class="dropdown-item" href="#">Fully Responsive</a>
                        <a class="dropdown-item" href="#">Latest Version Plugins</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle mr-lg-2" id="reportNav" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Reports
                    </a>
                    <div class="dropdown-menu" aria-labelledby="reportNav">
                        <a class="dropdown-item" href="#">Daily Reports</a>
                        <a class="dropdown-item" href="#">Weekly Reports</a>
                        <a class="dropdown-item" href="#">Monthly Reports</a>
                        <a class="dropdown-item" href="#">Yearly Reports</a>
                        <a class="dropdown-item" href="#">HR Reports</a>
                        <a class="dropdown-item" href="#">Product Reports</a>
                        <a class="dropdown-item" href="#">Order Reports</a>
                        <a class="dropdown-item" href="#">Revenue Reports</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle mr-lg-2" id="orderNav" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Management
                    </a>
                    <div class="dropdown-menu" aria-labelledby="orderNav">
                        <a class="dropdown-item" href="#">HR Management</a>
                        <a class="dropdown-item" href="#">Product Management</a>
                        <a class="dropdown-item" href="#">Role Management</a>
                        <a class="dropdown-item" href="#">Sales Management</a>
                        <a class="dropdown-item" href="#">Employee Management</a>
                    </div>
                </li>
            </ul>--}}
            <!--/header leftside links-->

            <!--header rightside links-->
            <ul class="navbar-nav header-links ml-auto hide-arrow">
                {{--
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle mr-lg-3" id="messagesDropdown" href="#" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        <i class="vl_chat-bubble"></i>
                        <span class="d-lg-none">Messages
                            <span class="badge badge-pill badge-primary">9 New</span>
                        </span>
                        <div class="notification-alarm">
                            <span class="wave wave-danger"></span>
                            <span class="dot"></span>
                        </div>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right header-right-dropdown-width pb-0" aria-labelledby="messagesDropdown">
                        <h6 class="dropdown-header weight500 ">Messages</h6>
                        <div class="dropdown-divider mb-0"></div>
                        <a class="dropdown-item border-bottom msg-unread" href="#">
                            <div class="float-left notificaton-thumb">
                                <img class="rounded-circle" src="assets/img/avatar/avatar4.jpg" alt=""/>
                            </div>
                            <span class="weight500">Andrew Flinton</span>
                            <span class="small float-right text-muted">08:30 AM</span>

                            <div class="dropdown-message">
                                I hope that you will be there in time. See you then
                            </div>
                        </a>

                        <a class="dropdown-item border-bottom msg-unread" href="#">
                            <div class="float-left notificaton-thumb">
                                <img class="rounded-circle" src="assets/img/avatar/avatar2.jpg" alt=""/>
                            </div>
                            <span class="weight500">John Doe</span>
                            <span class="small float-right text-muted">10:28 AM</span>

                            <div class="dropdown-message">
                                Hello this is an example message. Just want to show how it looks
                            </div>
                        </a>

                        <a class="dropdown-item border-bottom" href="#">
                            <div class="float-left notificaton-thumb">
                                <img class="rounded-circle" src="assets/img/avatar/avatar3.jpg" alt=""/>
                            </div>
                            <span class="weight500">Dash Don</span>
                            <span class="small float-right text-muted">07:12 PM</span>

                            <div class="dropdown-message">
                                Hi, This is Dash Don form usa. I'm looking for someone who really good at design and frontend like mosaddek
                            </div>
                        </a>

                        <a class="dropdown-item border-bottom" href="#">
                            <div class="float-left notificaton-thumb">
                                <img class="rounded-circle" src="assets/img/avatar/avatar1.jpg" alt=""/>
                            </div>
                            <span class="weight500">dkmosa</span>
                            <span class="small float-right text-muted">12:10 PM</span>

                            <div class="dropdown-message">
                                We build a beautiful dashboard admin panel for professional
                            </div>
                        </a>
                        <a class="dropdown-item small" href="#">View all messages</a>
                    </div>
                </li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle mr-lg-3" id="alertsDropdown" href="#" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        <i class="vl_bell"></i>
                        <span class="d-lg-none">Notification
                            <span class="badge badge-pill badge-warning">5 New</span>
                        </span>
                        <div class="notification-alarm">
                            <span class="wave wave-warning"></span>
                            <span class="dot bg-warning"></span>
                        </div>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right header-right-dropdown-width pb-0" aria-labelledby="alertsDropdown">
                        <h6 class="dropdown-header weight500">Notification</h6>

                        <div class="dropdown-divider mb-0"></div>
                        <a class="dropdown-item border-bottom" href="#">
                            <span class="text-primary">
                            <span class="weight500">
                                <i class="vl_bell weight600 pr-2"></i>Weekly Update</span>
                            </span>
                            <span class="small float-right text-muted">03:14 AM</span>

                            <div class="dropdown-message f12">
                                This week project update report generated. All team members are requested to check the updates
                            </div>
                        </a>

                        <a class="dropdown-item border-bottom" href="#">
                            <span class="text-danger">
                            <span class="weight500">
                                <i class="vl_Download-circle weight600 pr-2"></i>Server Error</span>
                            </span>
                            <span class="small float-right text-muted">10:34 AM</span>

                            <div class="dropdown-message f12">
                                Unexpectedly server response stop. Responsible members are requested to fix it soon
                            </div>
                        </a>

                        <a class="dropdown-item border-bottom" href="#">
                            <span class="text-success">
                            <span class="weight500">
                                <i class="vl_screen weight600 pr-2"></i>Monthly Meeting</span>
                            </span>
                            <span class="small float-right text-muted">12:30 AM</span>

                            <div class="dropdown-message f12">
                                Our monthly meeting will be held on tomorrow sharp 12:30. All members are requested to attend this meeting.
                            </div>
                        </a>

                        <a class="dropdown-item small" href="#">View all notification</a>
                    </div>
                </li> --}}

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle mr-lg-3" id="userNav" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="user-thumb">
                                @php
                                $pic_url =  asset('assets/img/avatar/Noimage.jpg');
                                if(auth()->user()->pic){
                                    $pic_url =  "/storage/cover_images/".auth()->user()->pic->picture;
                                }

                            @endphp
                             {{ auth()->user()->name}} <img class="rounded-circle" src="{{$pic_url}}"{{--src="assets/img/avatar/avatar1.jpg"--}} alt=""/>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userNav">
                    <a class="dropdown-item" href="{{ route('users.show',auth()->user()->id)}}">My Profile</a>
                        <a class="dropdown-item" href="#">Account Settings</a>
                        <a class="dropdown-item" href="#">Inbox <span class="badge badge-primary">3</span></a>
                        <a class="dropdown-item" href="#">Message <span class="badge badge-success">5</span></a>
                        <div class="dropdown-divider"></div>


                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sign Out</a>
                        
                        

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>

                    </div>
                </li>
                @can('client-create')
                <li class="nav-item">
                    <a href="javascript:;" class="nav-link right_side_toggle">
                        <i class="icon-settings"> </i>
                    </a>
                </li>
                @endcan
            </ul>
            <!--/header rightside links-->

        </div>
    </nav>
    <!--/navigation : sidebar & header-->

    <!--main content wrapper-->
    <div class="content-wrapper">

            @yield('content')

        <div class="container-fluid">

            
            
            <!--sales report & active user-->

            {{--
            <div class="row">
                <div class="col-xl-8 col-md-7">
                    <div class="card card-shadow mb-4">
                        <div class="card-header border-0">
                            <div class="custom-title-wrap bar-primary">
                                <div class="custom-title">Sales Report</div>
                                <div class=" widget-action-link">
                                    <div class="dropdown">
                                        <a href="#" class="btn btn-transparent text-secondary dropdown-hover p-0" data-toggle="dropdown">
                                            <i class=" vl_ellipsis-fill-h"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right vl-dropdown">
                                            <a class="dropdown-item" href="#"> Edit</a>
                                            <a class="dropdown-item" href="#"> Delete</a>
                                            <a class="dropdown-item" href="#"> Settings</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row text-center mb-4">
                                <div class="col-4">
                                    <h4 class="mb-0">$120 <i class="fa fa-long-arrow-up text-success f14"></i></h4>
                                    <small class="text-muted text-uppercase">Today's Sales</small>
                                </div>
                                <div class="col-4">
                                    <h4 class="mb-0">$740 <i class="fa fa-long-arrow-down text-danger f14"></i></h4>
                                    <small class="text-muted text-uppercase">This Week Sales</small>
                                </div>
                                <div class="col-4">
                                    <h4 class="mb-0">$3740 <i class="fa fa-long-arrow-up text-success f14"></i></h4>
                                    <small class="text-muted text-uppercase">This Month Sales</small>
                                </div>
                            </div>
                            <div>
                                <canvas id="sales_report_chart" height="320"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-5">
                    <div class="card text-light mb-4 basic-gradient bubble-shadow">
                        <div class="widget-action-link">
                            <div class="dropdown">
                                <a href="#" class="btn btn-transparent text-white dropdown-hover p-0" data-toggle="dropdown">
                                    <i class=" vl_ellipsis-fill-h"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right vl-dropdown">
                                    <a class="dropdown-item" href="#"> Edit</a>
                                    <a class="dropdown-item" href="#"> Delete</a>
                                    <a class="dropdown-item" href="#"> Settings</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="widget-active-user">
                                <h5 class="mt-3 b-b1 mb-4">Active user right now</h5>
                                <h1 class="mb-4">13</h1>
                                <h5 class="mt-3 b-b1 mb-5">Page view per minutes</h5>
                                <div id="active_users" class="text-center"></div>
                                <h5 class="mt-5 mb-0">Top active pages</h5>
                                <ul class="list-unstyled active-page-link">
                                    <li><small>/product/dashlab/sample-one.html</small> <span>1</span></li>
                                    <li><small>/product/flatlab/ui-components.php</small> <span>3</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!--/sales report & active user-->

            <!--sales monitor-->
            {{--
            <div class="row">
                <div class="col-12">
                    <div class="card card-shadow mb-4">
                        <div class="card-header border-0">
                            <div class="custom-title-wrap bar-turquoise">
                                <div class="custom-title">Sales Monitor</div>

                                <div class=" widget-action-link">
                                    <div class="dropdown">
                                        <a href="#" class="btn btn-transparent text-secondary dropdown-hover p-0" data-toggle="dropdown">
                                            <i class=" vl_ellipsis-fill-h"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right vl-dropdown">
                                            <a class="dropdown-item" href="#"> Edit</a>
                                            <a class="dropdown-item" href="#"> Delete</a>
                                            <a class="dropdown-item" href="#"> Settings</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-5 col-md-5">
                                    <p class="text-muted mb-5">Proper sell monitoring through the world map to plan <br/>
                                        for the next marketing attempt</p>

                                    <div class="mb-4">
                                        <div class="progress-title">
                                            <span>Europe</span>
                                            <span class="float-right">35%</span>
                                        </div>
                                        <div class="progress" style="height: 1px;">
                                            <div class="progress-bar bg-turquoise" role="progressbar" style="width: 35%;"  aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <div class="progress-title">
                                            <span>Latin America </span>
                                            <span class="float-right">55%</span>
                                        </div>
                                        <div class="progress" style="height: 1px;">
                                            <div class="progress-bar bg-purple" role="progressbar" style="width: 55%;"  aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <div class="progress-title">
                                            <span>Australia</span>
                                            <span class="float-right">85%</span>
                                        </div>
                                        <div class="progress" style="height: 1px;">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 85%;"  aria-valuemax="100"></div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-xl-7 col-md-7">
                                    <div class="map-wrapper" id="world-map"> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            --}}
            <!--/sales monitor-->

            <!--member performance & support ticket-->
            {{--
            <div class="row">
                <div class="col-xl-6">
                    <div class="card card-shadow mb-4 ">
                        <div class="card-header border-0">
                            <div class="custom-title-wrap bar-danger">
                                <div class="custom-title">
                                    Member's Performance
                                    <a href="javascript:;" class="btn-ordering btn-primary float-right ml-2">
                                        <i class="fa fa-sort-alpha-asc"></i>
                                    </a>
                                    <ul class="nav nav-pills nav-pill-turquoise nav-pill-custom nav-pills-sm float-right " id="pills-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="pills-today-tab" data-toggle="pill" href="#pills-today" role="tab" aria-controls="pills-today" aria-selected="true">Today</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-month-tab" data-toggle="pill" href="#pills-month" role="tab" aria-controls="pills-month" aria-selected="false">Month</a>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-today" role="tabpanel" aria-labelledby="pills-today-tab">
                                    <ul class="list-unstyled mb-0 list-widget">
                                        <li>
                                            <div class="media mb-4">
                                                <img class="mr-3 rounded-circle" src="assets/img/avatar/avatar1.jpg" alt=" ">
                                                <div class="media-body list-widget-border">
                                                    <div class="float-left">
                                                        <h6 class="text-uppercase mb-0">shirley hoe</h6>
                                                        <span class="text-muted">Sales Executive, NY</span>
                                                    </div>
                                                    <div class=" float-right">
                                                        <strong>$780.00 <i class="fa fa-level-up text-success pl-2"></i></strong>
                                                    </div>
                                                </div>

                                            </div>
                                        </li>
                                        <li>
                                            <div class="media mb-4">
                                                <img class="mr-3 rounded-circle" src="assets/img/avatar/avatar2.jpg" alt=" ">
                                                <div class="media-body list-widget-border">
                                                    <div class="float-left">
                                                        <h6 class="text-uppercase mb-0">james alexender</h6>
                                                        <span class="text-muted">Sales Executive, FL</span>
                                                    </div>
                                                    <div class=" float-right">
                                                        <strong>$480.00 <i class="fa fa-level-up text-success pl-2"></i></strong>
                                                    </div>
                                                </div>

                                            </div>
                                        </li>
                                        <li>
                                            <div class="media mb-4">
                                                <img class="mr-3 rounded-circle" src="assets/img/avatar/avatar3.jpg" alt=" ">
                                                <div class="media-body list-widget-border">
                                                    <div class="float-left">
                                                        <h6 class="text-uppercase mb-0">ursula sitorus</h6>
                                                        <span class="text-muted">Sales Executive, CA</span>
                                                    </div>
                                                    <div class=" float-right">
                                                        <strong>$360.00 <i class="fa fa-level-down text-danger pl-2"></i></strong>
                                                    </div>
                                                </div>

                                            </div>
                                        </li>
                                        <li>
                                            <div class="media mb-3">
                                                <img class="mr-3 rounded-circle" src="assets/img/avatar/avatar4.jpg" alt=" ">
                                                <div class="media-body list-widget-border">
                                                    <div class="float-left">
                                                        <h6 class="text-uppercase mb-0">jonna pinedda</h6>
                                                        <span class="text-muted">Sales Executive, MI</span>
                                                    </div>
                                                    <div class=" float-right">
                                                        <strong>$180.00 <i class="fa fa-level-up text-success pl-2"></i></strong>
                                                    </div>
                                                </div>

                                            </div>
                                        </li>
                                        <li class="text-center">
                                            <a href="javascript:;" class="more-list">
                                                <i class=" vl_ellipsis-fill-h"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="pills-month" role="tabpanel" aria-labelledby="pills-month-tab">
                                    <ul class="list-unstyled mb-0 list-widget">
                                        <li>
                                            <div class="media mb-4">
                                                <img class="mr-3 rounded-circle" src="assets/img/avatar/avatar2.jpg" alt=" ">
                                                <div class="media-body list-widget-border">
                                                    <div class="float-left">
                                                        <h6 class="text-uppercase mb-0">james alexender</h6>
                                                        <span class="text-muted">Sales Executive, FL</span>
                                                    </div>
                                                    <div class=" float-right">
                                                        <strong>$480.00 <i class="fa fa-level-up text-success pl-2"></i></strong>
                                                    </div>
                                                </div>

                                            </div>
                                        </li>
                                        <li>
                                            <div class="media mb-3">
                                                <img class="mr-3 rounded-circle" src="assets/img/avatar/avatar4.jpg" alt=" ">
                                                <div class="media-body list-widget-border">
                                                    <div class="float-left">
                                                        <h6 class="text-uppercase mb-0">jonna pinedda</h6>
                                                        <span class="text-muted">Sales Executive, MI</span>
                                                    </div>
                                                    <div class=" float-right">
                                                        <strong>$180.00 <i class="fa fa-level-up text-success pl-2"></i></strong>
                                                    </div>
                                                </div>

                                            </div>
                                        </li>
                                        <li>
                                            <div class="media mb-4">
                                                <img class="mr-3 rounded-circle" src="assets/img/avatar/avatar3.jpg" alt=" ">
                                                <div class="media-body list-widget-border">
                                                    <div class="float-left">
                                                        <h6 class="text-uppercase mb-0">ursula sitorus</h6>
                                                        <span class="text-muted">Sales Executive, CA</span>
                                                    </div>
                                                    <div class=" float-right">
                                                        <strong>$360.00 <i class="fa fa-level-down text-danger pl-2"></i></strong>
                                                    </div>
                                                </div>

                                            </div>
                                        </li>
                                        <li>
                                            <div class="media mb-4">
                                                <img class="mr-3 rounded-circle" src="assets/img/avatar/avatar1.jpg" alt=" ">
                                                <div class="media-body list-widget-border">
                                                    <div class="float-left">
                                                        <h6 class="text-uppercase mb-0">shirley hoe</h6>
                                                        <span class="text-muted">Sales Executive, NY</span>
                                                    </div>
                                                    <div class=" float-right">
                                                        <strong>$780.00 <i class="fa fa-level-up text-success pl-2"></i></strong>
                                                    </div>
                                                </div>

                                            </div>
                                        </li>
                                        <li class="text-center">
                                            <a href="javascript:;" class="more-list">
                                                <i class="vl_ellipsis-fill-h"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card card-shadow mb-4 ">
                        <div class="card-header border-0">
                            <div class="custom-title-wrap bar-warning">
                                <div class="custom-title">Support Tickets</div>
                                <div class=" widget-action-link">
                                    <div class="dropdown">
                                        <a href="#" class="btn btn-transparent text-secondary dropdown-hover p-0" data-toggle="dropdown">
                                            Filter <i class="fa fa-caret-down pl-2"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right vl-dropdown">
                                            <a class="dropdown-item" href="#"> Edit</a>
                                            <a class="dropdown-item" href="#"> Delete</a>
                                            <a class="dropdown-item" href="#"> Settings</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled mb-0 list-widget">
                                <li>
                                    <div class="media mb-4">
                                        <div class="mr-3 rounded-circle bg-turquoise st-alphabet">
                                            J
                                            <span class="status bg-success"></span>
                                        </div>
                                        <div class="media-body list-widget-border">
                                            <div class="float-left">
                                                <h6 class="text-uppercase mb-0">Joseph Farnandez <span class="text-warning pl-3">pending</span></h6>
                                                <span class="text-muted">I am facing some trouble with my viewport. When i start my</span>
                                            </div>
                                            <div class=" float-right">
                                                <small class="text-muted">8:40 PM</small>
                                            </div>
                                        </div>

                                    </div>
                                </li>
                                <li>
                                    <div class="media mb-4">
                                        <div class="mr-3 rounded-circle bg-purple st-alphabet">
                                            M
                                            <span class="status bg-secondary"></span>
                                        </div>
                                        <div class="media-body list-widget-border">
                                            <div class="float-left">
                                                <h6 class="text-uppercase mb-0">martin anderson  <span class="text-success pl-3">open</span></h6>
                                                <span class="text-muted">I have some query regarding the license issue.</span>
                                            </div>
                                            <div class=" float-right">
                                                <small class="text-muted">1 Day Ago</small>
                                            </div>
                                        </div>

                                    </div>
                                </li>
                                <li>
                                    <div class="media mb-4">
                                        <div class="mr-3 rounded-circle bg-primary st-alphabet">
                                            L
                                            <span class="status bg-warning"></span>
                                        </div>
                                        <div class="media-body list-widget-border">
                                            <div class="float-left">
                                                <h6 class="text-uppercase mb-0">libson james <span class="text-secondary pl-3">closed</span></h6>
                                                <span class="text-muted">Is there any update plan for RTL version near future?</span>
                                            </div>
                                            <div class=" float-right">
                                                <small class="text-muted">2 Days Ago</small>
                                            </div>
                                        </div>

                                    </div>
                                </li>
                                <li>
                                    <div class="media mb-3">
                                        <div class="mr-3 rounded-circle bg-pink st-alphabet">
                                            A
                                            <span class="status bg-success"></span>
                                        </div>
                                        <div class="media-body list-widget-border">
                                            <div class="float-left">
                                                <h6 class="text-uppercase mb-0">alex voxy <span class="text-warning pl-3">open</span></h6>
                                                <span class="text-muted">My client site is broken in most of the windows browser</span>
                                            </div>
                                            <div class=" float-right">
                                                <small class="text-muted">4 Days Ago</small>
                                            </div>
                                        </div>

                                    </div>
                                </li>
                                <li class="text-center">
                                    <a href="javascript:;" class=" more-list">
                                        <i class=" vl_ellipsis-fill-h"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            --}}
            <!--/member performance & support ticket-->

            {{--
            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <div class="card card-shadow mb-4">
                        <div class="card-header border-0">
                            <div class="custom-title-wrap bar-primary">
                                <div class="custom-title">Donut Chart</div>
                                <div class="custom-post-title">Outstanding pie chart example is given bellow</div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-7">
                                    <div id="d_profit" style="height:130px; width:100%;"></div>
                                </div>
                                <div class="col-5">
                                    <h5 class="mb-3">Legend</h5>
                                    <ul class="list-unstyled f12 text-muted">
                                        <li class="mb-2">
                                            <i class="fa fa-circle pr-2 text-warning "></i>
                                            <span>Data A: 33%</span>
                                        </li>
                                        <li class="mb-2">
                                            <i class="fa fa-circle pr-2 text-purple"></i>
                                            <span>Data B: 33%</span>
                                        </li>
                                        <li>
                                            <i class="fa fa-circle pr-2 text-info"></i>
                                            <span>Data C: 33%</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="card card-shadow mb-4">
                        <div class="card-header border-0">
                            <div class="custom-title-wrap bar-turquoise">
                                <div class="custom-title">Bar Chart</div>
                                <div class="custom-post-title">Awesome bar chart example is given bellow</div>
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <span id="bar_widget"></span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="card card-shadow mb-4">
                        <div class="card-header border-0">
                            <div class="custom-title-wrap bar-pink">
                                <div class="custom-title">Bubble Chart</div>
                                <div class="custom-post-title">Excellent bubble chart example is given bellow</div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <canvas id="bubble_chart" height="170"></canvas>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div class="card card-shadow mb-4">
                        <div class="card-header border-0">
                            <div class="custom-title-wrap bar-success">
                                <div class="custom-title">Area Chart</div>
                                <div class="custom-post-title">Outstanding area chart example is given bellow</div>
                            </div>
                        </div>
                        <div class="card-body">
                            <canvas id="area_chart" height="150"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="card card-shadow mb-4">
                        <div class="card-header border-0">
                            <div class="custom-title-wrap bar-warning">
                                <div class="custom-title">Line Chart</div>
                                <div class="custom-post-title">Awesome line chart example is given bellow</div>
                            </div>
                        </div>
                        <div class="card-body">
                            <canvas id="line_chart" height="150"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="card card-shadow mb-4">
                        <div class="card-header border-0">
                            <div class="custom-title-wrap bar-info">
                                <div class="custom-title">Stacked Chart</div>
                                <div class="custom-post-title">Excellent stacked chart example is given bellow</div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="hbar-placeholder" class="fchart-height"></div>
                        </div>
                    </div>
                </div>
            </div>--}}

            {{--
            <div class="row">
                <div class="col-xl-6 col-md-6">
                    <div class="card card-shadow mb-4">
                        <div class="card-header border-0">
                            <div class="custom-title-wrap bar-danger">
                                <div class="custom-title">
                                    Issue Fixing
                                    <ul class="nav nav-pills nav-pill-primary nav-pill-custom nav-pills-sm float-right " id="pills-tab2" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="pills-today-tab2" data-toggle="pill" href="#pills-weekly2" role="tab" aria-selected="true">Weekly</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-month-tab2" data-toggle="pill" href="#pills-month2" role="tab" aria-selected="false">Month</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="custom-post-title">Graphical view of this week issue solving status</div>
                            </div>
                        </div>
                        <div class="card-body pt-5 pb-4">
                            <div class="tab-content" id="pills-tabContent2">
                                <div class="tab-pane fade show active" id="pills-weekly2" role="tabpanel" aria-labelledby="pills-today-tab">
                                    <div class="row">
                                        <div class="col-12 col-xl-7 col-md-6 text-center">
                                            <canvas id="doughnut_chart" class="mb-4" ></canvas>
                                            <small class="text-muted">Realtime data update instantly</small>
                                        </div>
                                        <div class="col-12 col-xl-4 col-md-6 text-muted mt-xl-4">
                                            <ul class="list-unstyled f12">
                                                <li class="list-widget-border mb-3 pb-3">
                                                    <i class="fa fa-circle pr-2" style="color: #cae59b"></i> 40%
                                                    <span class="float-right">Solved</span>
                                                </li>
                                                <li class="list-widget-border mb-3 pb-3">
                                                    <i class="fa fa-circle pr-2" style="color: #fcdd82"></i> 10%
                                                    <span class="float-right">Pending</span>
                                                </li>
                                                <li class="list-widget-border mb-3 pb-3">
                                                    <i class="fa fa-circle pr-2 " style="color: #f79490"></i> 10%
                                                    <span class="float-right">Declain</span>
                                                </li>
                                                <li class="list-widget-border mb-3 pb-3">
                                                    <i class="fa fa-circle pr-2 " style="color: #acf5fe"></i> 40%
                                                    <span class="float-right">Reopen</span>
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-month2" role="tabpanel" aria-labelledby="pills-month-tab">
                                    <div class="row">
                                        <div class="col-12 col-xl-7 col-md-6 text-center">
                                            <canvas id="doughnut_chart2" class="mb-4"></canvas>
                                            <small class="text-muted">Realtime data update instantly</small>
                                        </div>
                                        <div class="col-12 col-xl-4 col-md-6 text-muted mt-xl-4">
                                            <ul class="list-unstyled f12">
                                                <li class="list-widget-border mb-3 pb-3">
                                                    <i class="fa fa-circle pr-2" style="color: #cae59b"></i> 30%
                                                    <span class="float-right">Solved</span>
                                                </li>
                                                <li class="list-widget-border mb-3 pb-3">
                                                    <i class="fa fa-circle pr-2" style="color: #fcdd82"></i> 20%
                                                    <span class="float-right">Pending</span>
                                                </li>
                                                <li class="list-widget-border mb-3 pb-3">
                                                    <i class="fa fa-circle pr-2 " style="color: #f79490"></i> 25%
                                                    <span class="float-right">Declain</span>
                                                </li>
                                                <li class="list-widget-border mb-3 pb-3">
                                                    <i class="fa fa-circle pr-2 " style="color: #acf5fe"></i> 25%
                                                    <span class="float-right">Reopen</span>
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6">
                    <div class="card card-shadow mb-4">
                        <div class="card-body">
                            <div class=" widget-action-link">
                                <div class="dropdown">
                                    <a href="#" class="btn btn-transparent text-secondary dropdown-hover p-0" data-toggle="dropdown">
                                        <i class=" vl_ellipsis-fill-h"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right vl-dropdown">
                                        <a class="dropdown-item" href="#"> Edit</a>
                                        <a class="dropdown-item" href="#"> Delete</a>
                                        <a class="dropdown-item" href="#"> Settings</a>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center">
                                <strong>405</strong>
                                <span class="text-muted">Following</span>
                                <span class="pl-2 pr-2 text-muted weight800">.</span>
                                <strong>1690</strong>
                                <span class="text-muted">Follower</span>
                            </div>

                            <div class="text-center">
                                <div class="mt-4 mb-3">
                                    <img class="rounded-circle" src="assets/img/avatar/avatar-large3.jpg" width="85" alt=""/>
                                </div>
                                <h5 class="text-uppercase mb-0">Jane Doe</h5>
                                <p class="text-muted mb-0">Sr. Marketing Executive </p>
                                <div class="rattings mb-4">
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star-o text-warning"></i>
                                </div>
                                <div class="badge-icon mb-4">
                                    <img src="assets/img/badge/level.svg" width="50" alt="Level" data-toggle="tooltip" data-placement="top" title="Level 5"/>
                                    <img src="assets/img/badge/status.svg" width="50" alt="Status" data-toggle="tooltip" data-placement="top" title="Status"/>
                                    <img src="assets/img/badge/disable.svg" width="50" alt="Disable" data-toggle="tooltip" data-placement="top" title="Disable"/>
                                    <img src="assets/img/badge/trendy.svg" width="50" alt="Trendy" data-toggle="tooltip" data-placement="top" title="Trendy"/>
                                    <img src="assets/img/badge/monthly-top-seller.svg" width="50" alt="Monthly Top Seller" data-toggle="tooltip" data-placement="top" title="Monthly Top Seller"/>
                                </div>
                                <div class="mb-2">
                                    <a href="#" class="btn btn-sm btn-pill btn-primary pl-4 pr-4">Follow</a>
                                    <a href="#" class="btn btn-sm btn-pill btn-purple  pl-4 pr-4">Message</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
                --}}
        </div>

        <!--footer-->
     {{--    <footer class="sticky-footer">
            <div class="container">
               <div class="text-center">
                    <small>Copyright &copy; VectorLab 2018</small>
                </div>
            </div>
        </footer>--}}
        <!--/footer-->
    </div>
    <!--/main content wrapper-->

    <!--right sidebar-->
    <div class="right-sidebar" id="right_side_bar">
        <div class="card border-0">
            <div class="card-body pb-0">
                <!--close toggle-->
                <a href="javascript:;" class="right_side_toggle float-right close-sidebar-icon">
                    <i class=" ti-shift-right"> </i>
                </a>
                <!--/close toggle-->
            </div>
            <div class="card-body pt-2">

                <div class="right-widget">
                    <div class="custom-title-wrap bar-primary mb-4">
                        <div class="custom-title">STAFF MANNAGENT</div>
                    </div>

                    <ul class="list-unstyled base-timeline">
                        <li class="time-dot-dark">
                            <div class="base-timeline-info">
                     <span><i class="fa fa-users"></i></span>  <a href="{{ route('users.index') }}">USERS</a>
                            </div>
                            <small class="text-muted">
                                
                            </small>
                        </li>
                        <li class="time-dot-dark">
                            <div class="base-timeline-info">
                    <span><i class="fa fa-briefcase"></i></span>  <a href="{{ route('roles.index') }}" class="text-purple">ROLES</a>
                            </div>
                            <small class="text-muted">
                                
                            </small>
                        </li>
                       <li class="time-dot-dark">
                                <div class="base-timeline-info">
                        <span><i class="fa fa-briefcase"></i></span>  <a href="{{ route('types.index')}}" class="text-purple">SERVICES</a>
                                </div>
                                <small class="text-muted">
                                    
                                </small>
                            </li>
                    </ul>
                </div>

{{--
                <div class="right-widget">
                    <div class="custom-title-wrap bar-danger mb-4">
                        <div class="custom-title">Active Users</div>
                    </div>

                    <ul class="list-unstyled mb-0 list-widget">
                        <li class="cursor">
                            <div class="media mb-4">
                                <div class="st-alphabet mr-3">
                                    <img class="rounded-circle" src="assets/img/avatar/avatar1.jpg" alt=" ">
                                    <span class="status bg-success"></span>
                                </div>
                                <div class="media-body ">
                                    <div class="float-left">
                                        <h6 class="text-uppercase mb-0">shirley hoe</h6>
                                        <span class="text-muted">Online</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="cursor">
                            <div class="media mb-4">
                                <div class="st-alphabet mr-3">
                                    <img class="rounded-circle" src="assets/img/avatar/avatar2.jpg" alt=" ">
                                    <span class="status bg-warning"></span>
                                </div>
                                <div class="media-body ">
                                    <div class="float-left">
                                        <h6 class="text-uppercase mb-0">james alexender</h6>
                                        <span class="text-muted">Screaming...</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="cursor">
                            <div class="media mb-4">
                                <div class="st-alphabet mr-3">
                                    <img class="rounded-circle" src="assets/img/avatar/avatar3.jpg" alt=" ">
                                    <span class="status bg-info"></span>
                                </div>
                                <div class="media-body">
                                    <div class="float-left">
                                        <h6 class="text-uppercase mb-0">ursula sitorus</h6>
                                        <span class="text-muted">Start Exploring</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="cursor">
                            <div class="media mb-3">
                                <div class="st-alphabet mr-3">
                                    <img class="rounded-circle" src="assets/img/avatar/avatar4.jpg" alt=" ">
                                    <span class="status bg-danger"></span>
                                </div>
                                <div class="media-body">
                                    <div class="float-left">
                                        <h6 class="text-uppercase mb-0">jonna pinedda</h6>
                                        <span class="text-muted">Busy</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="right-widget">

                    <div class="custom-title-wrap bar-success mb-4">
                        <div class="custom-title">Notification</div>
                    </div>

                    <div >
                        <div class="dropdown-divider mb-0"></div>
                        <a class="nav-link border-bottom px-0 py-3" href="#">
                            <span class="text-primary">
                            <span class="weight700 f12">
                                <i class="vl_bell weight600 pr-2"></i>Weekly Update</span>
                            </span>
                            <span class="small float-right text-muted">03:14 AM</span>

                            <div class="text-dark f12">
                                This week project update report generated. All team members are requested to check the updates
                            </div>
                        </a>

                        <a class="nav-link border-bottom px-0 py-3" href="#">
                            <span class="text-danger">
                            <span class="weight700 f12">
                                <i class="vl_Download-circle weight600 pr-2"></i>Server Error</span>
                            </span>
                            <span class="small float-right text-muted">10:34 AM</span>

                            <div class="text-dark f12">
                                Unexpectedly server response stop. Responsible members are requested to fix it soon
                            </div>
                        </a>

                        <a class="nav-link border-bottom px-0 py-3" href="#">
                            <span class="text-success">
                            <span class="weight700 f12">
                                <i class="vl_screen weight600 pr-2"></i>Monthly Meeting</span>
                            </span>
                            <span class="small float-right text-muted">12:30 AM</span>

                            <div class="text-dark f12">
                                Our monthly meeting will be held on tomorrow sharp 12:30. All members are requested to attend this meeting.
                            </div>
                        </a>

                        <div class="text-center mt-3">
                            <a class="nav-link px-0" href="#">View all notification</a>
                        </div>
                    </div>

                </div>--}}

            </div>
        </div>
    </div>
    <!--/right sidebar-->

    <!--basic scripts-->
  
    <script src="{{asset('assets/vendor/jquery-ui/jquery-ui.min.js')}}"></script>
    <script src="{{asset('assets/vendor/jquery-dropdown-master/jquery.dropdown.js')}}"></script>

    <script src="{{asset('assets/vendor/m-custom-scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    @yield('table_scripts')

    <!--sparkline-->
    <script src="{{asset('assets/vendor/sparkline/jquery.sparkline.js')}}"></script>
    <!--sparkline initialization-->
    <script src="{{asset('assets/vendor/js-init/sparkline/init-sparkline.js')}}"></script>
    <script src="{{asset('assets/vendor/icheck/skins/icheck.min.js')}}"></script>
    <!--init icheck-->
    <script src="{{asset('assets/vendor/js-init/init-icheck.js')}}"></script>

    @yield('calendar_scripts')

{{--
    <!--c3chart-->
    <script src="{{asset('assets/vendor/c3chart/d3.min.js')}}"></script>
    <script src="{{asset('assets/vendor/c3chart/c3.min.js')}}"></script>
    <!--c3chart initialization-->
    <script src="{{asset('assets/vendor/js-init/c3chart/init-c3chart.js')}}"></script>

    <!--chartjs-->
    <script src="{{asset('assets/vendor/chartjs/Chart.bundle.min.js')}}"></script>
   <!--chartjs initialization-->
    <script src="{{asset('assets/vendor/js-init/chartjs/init-creative-state-chart.js')}}"></script>
    <script src="{{asset('assets/vendor/js-init/chartjs/init-area-chart.js')}}"></script>
    <script src="{{asset('assets/vendor/js-init/chartjs/init-line-chart.js')}}"></script>
    <script src="{{asset('assets/vendor/js-init/chartjs/init-doughnut-chart.js')}}"></script>
    <script src="{{asset('assets/vendor/js-init/chartjs/init-doughnut-chart2.js')}}"></script>
    <script src="{{asset('assets/vendor/js-init/chartjs/init-sales-report-chart.js')}}"></script>
    <script src="{{asset('assets/vendor/js-init/chartjs/init-bubble-chart.js')}}"></script>

    <!--flot chart-->
    <script src="{{asset('assets/vendor/flot/jquery.flot.min.js')}}"></script>
    <script src="{{asset('assets/vendor/flot/jquery.flot.pie.min.js')}}"></script>
    <script src="{{asset('assets/vendor/flot/jquery.flot.tooltip.min.js')}}"></script>
    <!--flot chart initialization-->
    <script src="{{asset('assets/vendor/js-init/flot/init-flot-widget.js')}}"></script>--}}

    <!--vectormap-->
    <script src="{{asset('assets/vendor/vector-map/jquery-jvectormap-1.2.2.min.js')}}"></script>
    <script src="{{asset('assets/vendor/vector-map/jquery-jvectormap-world-mill-en.js')}}"></script>
    <!--vectormap initialization-->
    <script src="{{asset('assets/vendor/js-init/vmap/init-vmap-world.js')}}"></script>

    <!--[if lt IE 9]>
    <script src="assets/vendor/modernizr.js"></script>
    <![endif]-->

    <!--basic scripts initialization-->
    <script src="{{asset('assets/js/scripts.js')}}"></script>
</body>
</html>

