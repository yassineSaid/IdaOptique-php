<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <title>Adminto - Responsive Admin Dashboard Template</title>

        <!-- Circlifull chart css -->
        <link href="assets/plugins/jquery-circliful/css/jquery.circliful.css" rel="stylesheet" type="text/css"/>

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="assets/js/modernizr.min.js"></script>

    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="index.html" class="logo"><span>Admin<span>to</span></span><i class="mdi mdi-layers"></i></a>
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container-fluid">

                        <!-- Page title -->
                        <ul class="nav navbar-nav list-inline navbar-left">
                            <li class="list-inline-item">
                                <button class="button-menu-mobile open-left">
                                    <i class="mdi mdi-menu"></i>
                                </button>
                            </li>
                            <li class="list-inline-item">
                                <h4 class="page-title">Other Charts</h4>
                            </li>
                        </ul>

                        <nav class="navbar-custom">

                            <ul class="list-unstyled topbar-right-menu float-right mb-0">

                                <li>
                                    <!-- Notification -->
                                    <div class="notification-box">
                                        <ul class="list-inline mb-0">
                                            <li>
                                                <a href="javascript:void(0);" class="right-bar-toggle">
                                                    <i class="mdi mdi-bell-outline noti-icon"></i>
                                                </a>
                                                <div class="noti-dot">
                                                    <span class="dot"></span>
                                                    <span class="pulse"></span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- End Notification bar -->
                                </li>

                                <li class="hide-phone">
                                    <form class="app-search">
                                        <input type="text" placeholder="Search..."
                                               class="form-control">
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                    </form>
                                </li>

                            </ul>
                        </nav>
                    </div><!-- end container -->
                </div><!-- end navbar -->
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">

                    <!-- User -->
                    <div class="user-box">
                        <div class="user-img">
                            <img src="assets/images/users/avatar-1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle img-thumbnail img-responsive">
                            <div class="user-status offline"><i class="mdi mdi-adjust"></i></div>
                        </div>
                        <h5><a href="#">Mat Helme</a> </h5>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="#" >
                                    <i class="mdi mdi-settings"></i>
                                </a>
                            </li>

                            <li class="list-inline-item">
                                <a href="#" class="text-custom">
                                    <i class="mdi mdi-power"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- End User -->

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <ul>
                            <li class="text-muted menu-title">Navigation</li>

                            <li>
                                <a href="index.html" class="waves-effect"><i class="mdi mdi-view-dashboard"></i> <span> Dashboard </span> </a>
                            </li>

                            <li>
                                <a href="typography.html" class="waves-effect"><i class="mdi mdi-format-font"></i> <span> Typography </span> </a>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-invert-colors"></i> <span> User Interface </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="ui-buttons.html">Buttons</a></li>
                                    <li><a href="ui-cards.html">Cards</a></li>
                                    <li><a href="ui-draggable-cards.html">Draggable Cards</a></li>
                                    <li><a href="ui-checkbox-radio.html">Checkboxs-Radios</a></li>
                                    <li><a href="ui-material-icons.html">Material Design Icons</a></li>
                                    <li><a href="ui-font-awesome-icons.html">Font Awesome</a></li>
                                    <li><a href="ui-dripicons.html">Dripicons</a></li>
                                    <li><a href="ui-themify-icons.html">Themify Icons</a></li>
                                    <li><a href="ui-modals.html">Modals</a></li>
                                    <li><a href="ui-notification.html">Notification</a></li>
                                    <li><a href="ui-range-slider.html">Range Slider</a></li>
                                    <li><a href="ui-components.html">Components</a>
                                    <li><a href="ui-sweetalert.html">Sweet Alert</a>
                                    <li><a href="ui-treeview.html">Tree view</a>
                                    <li><a href="ui-widgets.html">Widgets</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-texture"></i><span class="badge badge-warning pull-right">7</span><span> Forms </span> </a>
                                <ul class="list-unstyled">
                                    <li><a href="form-elements.html">General Elements</a></li>
                                    <li><a href="form-advanced.html">Advanced Form</a></li>
                                    <li><a href="form-validation.html">Form Validation</a></li>
                                    <li><a href="form-wizard.html">Form Wizard</a></li>
                                    <li><a href="form-fileupload.html">Form Uploads</a></li>
                                    <li><a href="form-wysiwig.html">Wysiwig Editors</a></li>
                                    <li><a href="form-xeditable.html">X-editable</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-view-list"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="tables-basic.html">Basic Tables</a></li>
                                    <li><a href="tables-datatable.html">Data Table</a></li>
                                    <li><a href="tables-responsive.html">Responsive Table</a></li>
                                    <li><a href="tables-editable.html">Editable Table</a></li>
                                    <li><a href="tables-tablesaw.html">Tablesaw Table</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-chart-donut-variant"></i><span> Charts </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="chart-flot.html">Flot Chart</a></li>
                                    <li><a href="chart-morris.html">Morris Chart</a></li>
                                    <li><a href="chart-chartist.html">Chartist Charts</a></li>
                                    <li><a href="chart-chartjs.html">Chartjs Chart</a></li>
                                    <li><a href="chart-other.html">Other Chart</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="calendar.html" class="waves-effect"><i class="mdi mdi-calendar"></i><span> Calendar </span></a>
                            </li>

                            <li>
                                <a href="inbox.html" class="waves-effect"><i class="mdi mdi-email"></i><span class="badge badge-purple pull-right">New</span><span> Mail </span></a>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-google-pages"></i><span> Pages </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="page-starter.html">Starter Page</a></li>
                                    <li><a href="page-login.html">Login</a></li>
                                    <li><a href="page-register.html">Register</a></li>
                                    <li><a href="page-recoverpw.html">Recover Password</a></li>
                                    <li><a href="page-lock-screen.html">Lock Screen</a></li>
                                    <li><a href="page-confirm-mail.html">Confirm Mail</a></li>
                                    <li><a href="page-404.html">Error 404</a></li>
                                    <li><a href="page-500.html">Error 500</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-layers"></i><span>Extra Pages </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="extras-projects.html">Projects</a></li>
                                    <li><a href="extras-tour.html">Tour</a></li>
                                    <li><a href="extras-taskboard.html">Taskboard</a></li>
                                    <li><a href="extras-taskdetail.html">Task Detail</a></li>
                                    <li><a href="extras-profile.html">Profile</a></li>
                                    <li><a href="extras-maps.html">Maps</a></li>
                                    <li><a href="extras-contact.html">Contact list</a></li>
                                    <li><a href="extras-pricing.html">Pricing</a></li>
                                    <li><a href="extras-timeline.html">Timeline</a></li>
                                    <li><a href="extras-invoice.html">Invoice</a></li>
                                    <li><a href="extras-faq.html">FAQ</a></li>
                                    <li><a href="extras-gallery.html">Gallery</a></li>
                                    <li><a href="extras-email-template.html">Email template</a></li>
                                    <li><a href="extras-maintenance.html">Maintenance</a></li>
                                    <li><a href="extras-comingsoon.html">Coming soon</a></li>
                                </ul>
                            </li>

                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                </div>

            </div>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-xl-4">
                                <div class="card-box">
                                    <div class="dropdown pull-right">
                                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                        </div>
                                    </div>

                                    <h4 class="header-title m-t-0 m-b-30">Line Charts</h4>

                                    <div id="sparkline1"></div>
                                </div>
                            </div><!-- end col-->

                            <div class="col-xl-4">
                                <div class="card-box">
                                    <div class="dropdown pull-right">
                                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                        </div>
                                    </div>

                                    <h4 class="header-title m-t-0 m-b-30">Bar Chart</h4>

                                    <div id="sparkline2" class="text-center"></div>
                                </div>
                            </div><!-- end col-->

                            <div class="col-xl-4">
                                <div class="card-box">
                                    <div class="dropdown pull-right">
                                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                        </div>
                                    </div>

                                    <h4 class="header-title m-t-0 m-b-30">Pie Chart</h4>

                                    <div id="sparkline3" class="text-center"></div>
                                </div>
                            </div><!-- end col-->
                        </div>
                        <!-- end Row -->


                        <div class="row">
                            <div class="col-xl-4">
                                <div class="card-box">
                                    <div class="dropdown pull-right">
                                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                        </div>
                                    </div>

                                    <h4 class="header-title m-t-0 m-b-30">Custom Line Chart</h4>

                                    <div id="sparkline4" class="text-center"></div>
                                </div>
                            </div><!-- end col-->

                            <div class="col-xl-4">
                                <div class="card-box">
                                    <div class="dropdown pull-right">
                                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                        </div>
                                    </div>

                                    <h4 class="header-title m-t-0 m-b-30">Mouse Speed Chart Example</h4>

                                    <div id="sparkline5" class="text-center"></div>
                                </div>
                            </div><!-- end col-->

                            <div class="col-xl-4">
                                <div class="card-box">
                                    <div class="dropdown pull-right">
                                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                        </div>
                                    </div>

                                    <h4 class="header-title m-t-0 m-b-30">Composite bar Chart</h4>

                                    <div id="sparkline6" class="text-center"></div>
                                </div>
                            </div><!-- end col-->
                        </div>
                        <!-- end Row -->


                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box">
                                    <div class="dropdown pull-right">
                                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                        </div>
                                    </div>

                                    <h4 class="header-title m-t-0 m-b-30">Jquery Knob</h4>

                                    <div class="row">
                                        <div class="col-md-6 col-xl-3 text-center">
                                            <div class="m-b-25">
                                                <input data-plugin="knob" data-width="150" data-height="150"
                                                       data-fgColor="#71b6f9" data-displayInput=false value="35"/>
                                                <h5 class="font-600 text-muted">Disable display input</h5>
                                            </div>
                                        </div><!-- end col-->
                                        <div class="col-md-6 col-xl-3 text-center">
                                            <div class="m-b-25">
                                                <input data-plugin="knob" data-width="150" data-height="150" data-cursor=true
                                                       data-fgColor="#10c469" value="29"/>
                                                <h5 class="font-600 text-muted">Cursor mode</h5>
                                            </div>
                                        </div><!-- end col-->
                                        <div class="col-md-6 col-xl-3 text-center">
                                            <div class="m-b-25">
                                                <input data-plugin="knob" data-width="150" data-height="150" data-min="-100"
                                                       data-fgColor="#f9c851" data-displayPrevious=true value="44"/>
                                                <h5 class="font-600 text-muted">Display previous value</h5>
                                            </div>
                                        </div><!-- end col-->
                                        <div class="col-md-6 col-xl-3 text-center">
                                            <div class="m-b-25">
                                                <input data-plugin="knob" data-width="150" data-height="150" data-min="-100"
                                                       data-fgColor="#35b8e0" data-displayPrevious=true data-angleOffset=-125
                                                       data-angleArc=250 value="44"/>
                                                <h5 class="font-600 text-muted">Angle offset and arc</h5>
                                            </div>
                                        </div><!-- end col-->
                                    </div><!-- end row -->

                                    <div class="row">
                                        <div class="col-md-6 col-xl-3 text-center">
                                            <div class="p-20">
                                                <input data-plugin="knob" data-width="150" data-height="150"
                                                       data-angleOffset="90" data-linecap="round" data-fgColor="#ff8acc"
                                                       value="35"/>
                                                <h5 class="font-600 text-muted">Angle offset</h5>
                                            </div>
                                        </div><!-- end col-->
                                        <div class="col-md-6 col-xl-3 text-center">
                                            <div class="p-20">
                                                <input data-plugin="knob" data-width="150" data-height="150" data-min="-15000"
                                                       data-displayPrevious=true data-max="15000" data-step="1000"
                                                       value="-11000" data-fgColor="#5b69bc"/>
                                                <h5 class="font-600 text-muted">5-digit values, step 1000</h5>
                                            </div>
                                        </div><!-- end col-->
                                        <div class="col-md-6 col-xl-3 text-center">
                                            <div class="p-20">
                                                <input data-plugin="knob" data-width="150" data-height="150" data-linecap=round
                                                       data-fgColor="#435966" value="80" data-skin="tron" data-angleOffset="180"
                                                       data-readOnly=true data-thickness=".1"/>
                                                <h5 class="font-600 text-muted">Readonly</h5>
                                            </div>
                                        </div><!-- end col-->
                                        <div class="col-md-6 col-xl-3 text-center">
                                            <div class="p-20">
                                                <input data-plugin="knob" data-width="150" data-height="150"
                                                       data-displayPrevious=true data-fgColor="#ff5b5b" data-skin="tron"
                                                       data-cursor=true value="75" data-thickness=".2" data-angleOffset=-125
                                                       data-angleArc=250 value="44"/>
                                                <h5 class="font-600 text-muted">Angle offset and arc</h5>
                                            </div>
                                        </div><!-- end col-->
                                    </div><!-- end row-->

                                </div>
                            </div><!-- end col-->
                        </div>
                        <!-- End row -->


                        <div class="row">

                            <div class="col-md-12">
                                <div class="card-box">
                                    <div class="dropdown pull-right">
                                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                        </div>
                                    </div>

                                    <h4 class="header-title m-t-0 m-b-30">Circliful Charts</h4>

                                    <div class="row text-center">
                                        <div class="col-md-6 col-xl-3">
                                            <div data-plugin="circliful" class="circliful-chart m-b-30" data-dimension="180"
                                                 data-text="35%" data-info="New Clients" data-width="20" data-fontsize="24"
                                                 data-percent="35" data-fgcolor="#10c469" data-bgcolor="#ebeff2"
                                                 data-fill="#f4f8fb"></div>
                                        </div>

                                        <div class="col-md-6 col-xl-3">
                                            <div data-plugin="circliful" class="circliful-chart m-b-30" data-dimension="180"
                                                 data-text="35%" data-info="New Clients" data-width="30" data-fontsize="24"
                                                 data-percent="35" data-fgcolor="#71b6f9" data-bgcolor="#ebeff2"></div>
                                        </div>

                                        <div class="col-md-6 col-xl-3">
                                            <div data-plugin="circliful" class="circliful-chart m-b-30" data-startdegree="90"
                                                 data-dimension="180" data-text="35%" data-info="New Clients" data-width="30"
                                                 data-fontsize="24" data-percent="35" data-fgcolor="#f9c851"
                                                 data-bgcolor="#ebeff2"></div>
                                        </div>

                                        <div class="col-md-6 col-xl-3">
                                            <div data-plugin="circliful" class="circliful-chart m-b-30" data-startdegree="180"
                                                 data-dimension="180" data-text="35%" data-info="New Clients" data-width="30"
                                                 data-fontsize="24" data-percent="35" data-fgcolor="#5b69bc"
                                                 data-bgcolor="#ebeff2"></div>
                                        </div>

                                    </div><!-- end row -->


                                    <div class="row text-center">
                                        <div class="col-md-6 col-xl-3">
                                            <div data-plugin="circliful" class="circliful-chart" data-dimension="200"
                                                 data-text="35%" data-info="New Clients" data-width="30" data-fontsize="24"
                                                 data-percent="35" data-fgcolor="#35b8e0" data-bgcolor="#ebeff2"
                                                 data-type="half" data-fill="#f4f8fb"></div>
                                        </div>

                                        <div class="col-md-6 col-xl-3">
                                            <div data-plugin="circliful" class="circliful-chart" data-startdegree="45"
                                                 data-dimension="200" data-text="50%" data-info="New Clients" data-width="30"
                                                 data-fontsize="24" data-percent="50" data-fgcolor="#ff5b5b"
                                                 data-bgcolor="#ebeff2" data-type="half" data-fill="#f4f8fb"></div>
                                        </div>

                                    </div><!-- end col-->
                                </div>
                            </div><!-- end col-->

                        </div> <!-- End row -->


                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card-box">
                                    <div class="dropdown pull-right">
                                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                        </div>
                                    </div>

                                    <h4 class="header-title m-t-0 m-b-30">Pie Charts</h4>

                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Graph</th>
                                            <th>Code</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        <tr>
                                            <td>
                                                    <span data-plugin="peity-pie" data-colors="#71b6f9,#ebeff2" data-width="30"
                                                          data-height="30">1/5</span>
                                            </td>
                                            <td>
                                                <code>&lt;span data-plugin="peity-pie" data-colors="#71b6f9,#ebeff2"
                                                    data-width="30" data-height="30"&gt;1/5&lt;/span&gt;</code>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                    <span data-plugin="peity-pie" data-colors="#71b6f9,#ebeff2" data-width="30"
                                                          data-height="30">226/360</span>
                                            </td>
                                            <td>
                                                <code>&lt;span data-plugin="peity-pie" data-colors="#71b6f9,#ebeff2"
                                                    data-width="30" data-height="30"&gt;226/360&lt;/span&gt;</code>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                    <span class="pie" data-plugin="peity-pie" data-colors="#71b6f9,#ebeff2"
                                                          data-width="30" data-height="30">0.52/1.561</span>
                                            </td>
                                            <td>
                                                <code>&lt;span data-plugin="peity-pie" data-colors="#71b6f9,#ebeff2"
                                                    data-width="30" data-height="30"&gt;0.52/1.561&lt;/span&gt;</code>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                    <span class="pie" data-plugin="peity-pie" data-colors="#71b6f9,#ebeff2"
                                                          data-width="30" data-height="30">1,4</span>
                                            </td>
                                            <td>
                                                <code>&lt;span data-plugin="peity-pie" data-colors="#71b6f9,#ebeff2"
                                                    data-width="30" data-height="30"&gt;1,4&lt;/span&gt;</code>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                    <span class="pie" data-plugin="peity-pie" data-colors="#71b6f9,#ebeff2"
                                                          data-width="30" data-height="30">226,134</span>
                                            </td>
                                            <td>
                                                <code>&lt;span data-plugin="peity-pie" data-colors="#71b6f9,#ebeff2"
                                                    data-width="30" data-height="30"&gt;226,134&lt;/span&gt;</code>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                    <span class="pie" data-plugin="peity-pie" data-colors="#71b6f9,#ebeff2"
                                                          data-width="30" data-height="30">0.52,1.041</span>
                                            </td>
                                            <td>
                                                <code>&lt;span data-plugin="peity-pie" data-colors="#71b6f9,#ebeff2"
                                                    data-width="30" data-height="30"&gt;0.52,1.041&lt;/span&gt;</code>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div><!-- end col-->


                            <div class="col-xl-6">
                                <div class="card-box">
                                    <div class="dropdown pull-right">
                                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                        </div>
                                    </div>

                                    <h4 class="header-title m-t-0 m-b-30">Donut Charts</h4>

                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Graph</th>
                                            <th>Code</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                    <span class="donut" data-plugin="peity-donut" data-colors="#71b6f9,#ebeff2"
                                                          data-width="30" data-height="30">1/5</span>
                                            </td>
                                            <td>
                                                <code>&lt;span data-plugin="peity-donut" data-colors="#71b6f9,#ebeff2"
                                                    data-width="30" data-height="30"&gt;1/5&lt;/span&gt;</code>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                    <span class="donut" data-plugin="peity-donut" data-colors="#71b6f9,#ebeff2"
                                                          data-width="30" data-height="30">226/360</span>
                                            </td>
                                            <td>
                                                <code>&lt;span data-plugin="peity-donut" data-colors="#71b6f9,#ebeff2"
                                                    data-width="30" data-height="30"&gt;226/360&lt;/span&gt;</code>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                    <span class="donut" data-plugin="peity-donut" data-colors="#71b6f9,#ebeff2"
                                                          data-width="30" data-height="30">0.52/1.561</span>
                                            </td>
                                            <td>
                                                <code>&lt;span data-plugin="peity-donut" data-colors="#71b6f9,#ebeff2"
                                                    data-width="30" data-height="30"&gt;0.52/1.561&lt;/span&gt;</code>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                    <span class="donut" data-plugin="peity-donut" data-colors="#71b6f9,#ebeff2"
                                                          data-width="30" data-height="30">1,4</span>
                                            </td>
                                            <td>
                                                <code>&lt;span data-plugin="peity-donut" data-colors="#71b6f9,#ebeff2"
                                                    data-width="30" data-height="30"&gt;1/4&lt;/span&gt;</code>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                    <span class="donut" data-plugin="peity-donut" data-colors="#71b6f9,#ebeff2"
                                                          data-width="30" data-height="30">226,134</span>
                                            </td>
                                            <td>
                                                <code>&lt;span data-plugin="peity-donut" data-colors="#71b6f9,#ebeff2"
                                                    data-width="30" data-height="30"&gt;226,134&lt;/span&gt;</code>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                    <span class="donut" data-plugin="peity-donut" data-colors="#71b6f9,#ebeff2"
                                                          data-width="30" data-height="30">1,2,3,2,2</span>
                                            </td>
                                            <td>
                                                <code>&lt;span data-plugin="peity-donut" data-colors="#71b6f9,#ebeff2"
                                                    data-width="30" data-height="30"&gt;1,2,3,2,2&lt;/span&gt;</code>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div><!-- end col-->
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card-box">
                                    <div class="dropdown pull-right">
                                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                        </div>
                                    </div>

                                    <h4 class="header-title m-t-0 m-b-30">Line and Bars Charts</h4>

                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Graph</th>
                                            <th>Code</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        <tr>
                                            <td>
                                                <span data-plugin="peity-line" data-fill="#71b6f9" data-stroke="#169c81"
                                                      data-width="120" data-height="40">5,3,9,6,5,9,7,3,5,2</span>
                                            </td>
                                            <td>
                                                <code>&lt;span data-plugin="peity-line" data-fill="#71b6f9"
                                                    data-stroke="#169c81" data-width="100" data-height="40"&gt;5,3,9,6,5,9,7,3,5,2&lt;/span&gt;</code>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span data-plugin="peity-line" data-fill="#71b6f9" data-stroke="#169c81"
                                                      data-width="120" data-height="40">5,3,2,-1,-3,-2,2,3,5,2</span>
                                            </td>
                                            <td>
                                                <code>&lt;span data-plugin="peity-line" data-fill="#71b6f9"
                                                    data-stroke="#169c81" data-width="100" data-height="100"&gt;5,3,2,-1,-3,-2,2,3,5,2&lt;/span&gt;</code>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span data-plugin="peity-line" data-fill="#71b6f9" data-stroke="#169c81"
                                                      data-width="120" data-height="40">0,-3,-6,-4,-5,-4,-7,-3,-5,-2</span>
                                            </td>
                                            <td>
                                                <code>&lt;span data-plugin="peity-line" data-fill="#71b6f9"
                                                    data-stroke="#169c81" data-width="100" data-height="100"&gt;0,-3,-6,-4,-5,-4,-7,-3,-5,-2&lt;/span&gt;</code>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span data-plugin="peity-bar" data-colors="#71b6f9,#ebeff2" data-width="100"
                                                      data-height="30">5,3,9,6,5,9,7,3,5,2</span>
                                            </td>
                                            <td>
                                                <code>&lt;span data-plugin="peity-bar" data-colors="#71b6f9,#ebeff2"
                                                    data-width="100" data-height="30"&gt;5,3,9,6,5,9,7,3,5,2&lt;/span&gt;</code>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span data-plugin="peity-bar" data-colors="#71b6f9,#ebeff2" data-width="100"
                                                      data-height="30">5,3,2,-1,-3,-2,2,3,5,2</span>
                                            </td>
                                            <td>
                                                <code>&lt;span data-plugin="peity-bar" data-colors="#71b6f9,#ebeff2"
                                                    data-width="100"
                                                    data-height="30"&gt;5,3,2,-1,-3,-2,2,3,5,2&lt;/span&gt;</code>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div><!-- end col-->


                            <div class="col-xl-6">
                                <div class="card-box">
                                    <div class="dropdown pull-right">
                                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                        </div>
                                    </div>

                                    <h4 class="header-title m-t-0 m-b-30">Data-attributes charts</h4>

                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Graph</th>
                                            <th>Code</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        <tr>
                                            <td>
                                                <span data-plugin="peity-donut-alt"
                                                      data-peity='{ "fill": ["#4c5667", "#ebeff2"], "innerRadius": 24, "radius": 30 }'>6/7</span>
                                            </td>
                                            <td>
                                                <code>
                                                    &lt;span data-plugin="peity-donut-alt" data-peity='{ "fill": ["#4c5667",
                                                    "#ebeff2"], "innerRadius": 24, "radius": 30 }'"&gt;6/7&lt;/span&gt;
                                                </code>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span data-plugin="peity-donut-alt"
                                                      data-peity='{ "fill": ["#71b6f9", "#ebeff2"],  "innerRadius": 18, "radius": 28 }'>4/7</span>
                                            </td>
                                            <td>
                                                <code>
                                                    &lt;span data-plugin="peity-donut-alt" data-peity='{ "fill": ["#71b6f9`",
                                                    "#ebeff2"], "innerRadius": 18, "radius": 28 }'"&gt;4/7&lt;/span&gt;
                                                </code>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <span data-plugin="peity-donut-alt"
                                                      data-peity='{ "fill": ["#5d9cec", "#ebeff2"],   "innerRadius": 20, "radius": 24 }'>5/7</span>
                                            </td>
                                            <td>
                                                <code>
                                                    &lt;span data-plugin="peity-donut-alt" data-peity='{ "fill": ["#5d9cec",
                                                    "#ebeff2"], "innerRadius": 20, "radius": 24 }'"&gt;5/7&lt;/span&gt;
                                                </code>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span data-plugin="peity-donut-alt"
                                                      data-peity='{ "fill": ["#fb6d9d", "#ebeff2"], "innerRadius": 18, "radius": 20 }'>6/7</span>
                                            </td>
                                            <td>
                                                <code>
                                                    &lt;span data-plugin="peity-donut-alt" data-peity='{ "fill": ["#fb6d9d",
                                                    "#ebeff2"], "innerRadius": 18, "radius": 20 }'"&gt;6/7&lt;/span&gt;
                                                </code>
                                            </td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div><!-- end col-->
                        </div>
                        <!-- end row -->

                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                    2016 - 2018 © Adminto. Coderthemes.com
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
            <div class="side-bar right-bar">
                <a href="javascript:void(0);" class="right-bar-toggle">
                    <i class="mdi mdi-close-circle-outline"></i>
                </a>
                <h4 class="">Notifications</h4>
                <div class="notification-list nicescroll">
                    <ul class="list-group list-no-border user-list">
                        <li class="list-group-item">
                            <a href="#" class="user-list-item">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-2.jpg" alt="">
                                </div>
                                <div class="user-desc">
                                    <span class="name">Michael Zenaty</span>
                                    <span class="desc">There are new settings available</span>
                                    <span class="time">2 hours ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="#" class="user-list-item">
                                <div class="icon bg-info">
                                    <i class="mdi mdi-account"></i>
                                </div>
                                <div class="user-desc">
                                    <span class="name">New Signup</span>
                                    <span class="desc">There are new settings available</span>
                                    <span class="time">5 hours ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="#" class="user-list-item">
                                <div class="icon bg-pink">
                                    <i class="mdi mdi-comment"></i>
                                </div>
                                <div class="user-desc">
                                    <span class="name">New Message received</span>
                                    <span class="desc">There are new settings available</span>
                                    <span class="time">1 day ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item active">
                            <a href="#" class="user-list-item">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-3.jpg" alt="">
                                </div>
                                <div class="user-desc">
                                    <span class="name">James Anderson</span>
                                    <span class="desc">There are new settings available</span>
                                    <span class="time">2 days ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item active">
                            <a href="#" class="user-list-item">
                                <div class="icon bg-warning">
                                    <i class="mdi mdi-settings"></i>
                                </div>
                                <div class="user-desc">
                                    <span class="name">Settings</span>
                                    <span class="desc">There are new settings available</span>
                                    <span class="time">1 day ago</span>
                                </div>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
            <!-- /Right-bar -->

        </div>
        <!-- END wrapper -->


        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <!-- KNOB JS -->
        <!--[if IE]>
        <script type="text/javascript" src="assets/plugins/jquery-knob/excanvas.js"></script>
        <![endif]-->
        <script src="assets/plugins/jquery-knob/jquery.knob.js"></script>

        <!-- Circliful -->
        <script src="assets/plugins/jquery-circliful/js/jquery.circliful.min.js"></script>

        <!-- Sparkline charts -->
        <script src="assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
        <script src="assets/pages/jquery.other-charts.js"></script>

        <!-- peity charts -->
        <script src="assets/plugins/peity/jquery.peity.min.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>