<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <title>Adminto - Responsive Admin Dashboard Template</title>

        <link href="assets/plugins/summernote/summernote-bs4.css" rel="stylesheet" /><!-- Custom box css -->
        <link href="assets/plugins/custombox/dist/custombox.min.css" rel="stylesheet">

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="assets/js/modernizr.min.js"></script>
        <script type="text/javascript">
         
         
            function CngClass(obj){
            document.getElementById("test").className = '';
            }
        </script>
        


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
                                <h4 class="page-title">Mailbox</h4>
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

                            <div class="col-sm-12">
                                <div class="inbox-app-main">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <aside id="sidebar" class="nano">
                                                <div class="nano-content">

                                                    <div class="text-center">
                                                        <a href="#custom-modal" class="btn btn-danger btn-rounded w-lg waves-effect waves-light m-b-20 m-t-30" data-animation="fadein" data-plugin="custommodal"
                                                           data-overlaySpeed="200" data-overlayColor="#36404a">Compose</a>
                                                    </div>
                                                    <menu class="menu-segment">
                                                        <ul class="list-unstyled">
                                                          <?PHP
                                                include "../core/contactM.php";
                                                $contact1=new ContactManage();
                                                $listeContact=$contact1->afficherContact();
                                                $number_of_rows = $listeContact->rowCount(); 
                                                ?>
                                                        
                                                            <li class="active"><a href="javascript:void(0);">Inbox<span>(<?php echo $number_of_rows; ?>)</span></a>
                                                            </li>
                                                            <li><a href="javascript:void(0);">Important</a></li>
                                                            <li><a href="javascript:void(0);">Sent</a></li>
                                                            <li><a href="javascript:void(0);">Drafts</a></li>
                                                            <li><a href="javascript:void(0);">Trash</a></li>
                                                        </ul>
                                                    </menu>
                                                    <div class="separator"></div>
                                                    <div class="menu-segment">
                                                        <ul class="labels list-unstyled">
                                                            <li class="title">Labels <span class="icon">+</span></li>
                                                            <li><a href="#">Dribbble <span class="ball pink"></span></a>
                                                            </li>
                                                            <li><a href="#">Roommates <span
                                                                    class="ball green"></span></a></li>
                                                            <li><a href="#">Bills <span class="ball blue"></span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="separator"></div>
                                                    
                                                    <div class="bottom-padding"></div>
                                                </div>
                                            </aside>
                                        </div> <!-- end col -->

                                        <div class="col-md-9">
                                            <main id="main">
                                                <div class="overlay"></div>
                                                <header class="header">

                                                    <h1 class="page-title"><a class="sidebar-toggle-btn trigger-toggle-sidebar"><span
                                                            class="line"></span><span class="line"></span><span
                                                            class="line"></span><span class="line line-angle1"></span><span
                                                            class="line line-angle2"></span></a></h1>
                                                       <form method="post" >
                                                    <div class="action-bar pull-left">
                                                   
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item">
                                                                <a href="redirect.php" class="icon circle-icon"><i  class="mdi mdi-refresh text-muted"></i></a> 
                                                               
                                                               
                                                            </li>
                                                            <li class="list-inline-item">
                                                               <a  class="icon circle-icon"><i class="mdi mdi-share text-muted"></i></a> 
                                                              
                                                            </li>
                                                              <?php
                                                             /*
                                                              
                                                       
                                                              <li  class="list-inline-item">
                                                                <a  class="icon circle-icon red"><i class="mdi mdi-close text-danger"></i></a>
                                                                </li> */ ?>
                                                                  
                                                                <li class="list-inline-item">
                                                                
                                                                <input class="icon circle-icon red" name='delete' type='submit' id='delete' value='x'>
                                                                   
                                                              
                                                                </li>
                                                           
                                                            <li class="list-inline-item">
                                                                <a class="icon circle-icon red"><i class="mdi mdi-flag text-danger"></i></a>
                                                            </li>
                                                        </ul>
                                                        
                                                    </div>
                                                    
                                                    <div class="search-box pull-left">
                                                        <input placeholder="Search..."><span
                                                            class="icon fa fa-search"></span>
                                                    </div>

                                                    <div class="clearfix"></div>

                                                </header>
                                          
                                                <div id="main-nano-wrapper" class="nano">
                                                    <div class="nano-content">
                                                        <ul class="message-list">
                                                            <?PHP
                                                                foreach($listeContact as $row){
                                                            ?>
                                                            <li class="unread" id="test" onclick="CngClass();" >
                                                                
                                                                <div class="mail-col mail-col-1"><span class="dot"></span>
                                                                    <div class="checkbox-wrapper-mail">
                                                                        <input  name="checkbox1[]" type="checkbox" value="<?PHP echo $row['id_contact']; ?>" id="<?PHP echo $row['id_contact']; ?>">
                                                                      
                                                                        <label for="<?PHP echo $row['id_contact']; ?>" class="toggle"></label>
                                                                    </div>
                                                                    
                                                                    <p class="title"><?PHP echo $row['nom']; ?></p><span
                                                                            class="star-toggle fa fa-star-o"></span>
                                                                </div>
                                                                <div class="mail-col mail-col-2">
                                                                    <div class="subject"><?PHP echo $row['sujet']; ?>
                                                                        <span class="teaser">- <?PHP echo /*lenght= 20*/$row['message']; ?></span>
                                                                    </div>
                                                                   <?PHP 
                                                                   date_default_timezone_set('GMT');
                                                                        $time= date("d-m-Y H:i:s"); 
                                                                        $timeadd=$row['date_ajout'];
                                                                        $date = date('Y-m-d',strtotime($time));
                                                                        $time = date('H:i:s',strtotime($time));
                                                                        $date1 = date('Y-m-d',strtotime($timeadd));
                                                                        $time1 = date('H:i',strtotime($timeadd));
                                                                        if (strcmp($date,$date1)==0)
                                                                        {
                                                                            $timeadded=$time1;
                                                                        }
                                                                        else
                                                                        {
                                                                            
                                                                            $date1 = explode('-', $date1);
                                                                            $year = $date1[0];
                                                                            $month   = $date1[1];
                                                                            $day  = $date1[2];
                                                                            $monthName = date("F", mktime(0, 0, 0, $month, 10));
                                                                            $monthName1=substr($monthName, 0, 3);
                                                                            $timeadded=$day. ' ' .$monthName1;
                                                                        }

                                                                        /* if date = date today show time else show date*/
                                                                            ?>
                                                                    <div class="date"><?PHP echo $timeadded; ?></div>
                                                                </div>
                                                            </li>
                                                                
                                                            <?PHP
                                                                }
                                                                ?>
                                                                <?php
                                                               if(isset($_POST['delete']))
                                                                {
                                                                    if (empty($_POST['checkbox1']))
                                                                 {
                                                                    echo "<meta http-equiv=\"refresh\" ;URL=contact-inbox.php\">"; 
                                                                 }
                                                                 else
                                                                 {
                                                                 $cnt=array();
                                                                 $cnt=count($_POST['checkbox1']);
                                                                 for($i=0;$i<$cnt;$i++)
                                                                  {
                                                                     $del_id=$_POST['checkbox1'][$i];
                                                                     $contact2=new ContactManage();
                                                                     $contact2->supprimercontact($del_id);
                                                                  }
                                                                 }
                                                                }

                                                                
                                                                ?>
                                                           
                                                            
                                                        </ul>
                                                        <a href="#" class="load-more-link">Show more messages</a>
                                                    </div>
                                                </div>
                                            </main>
                                            <div id="message">
                                                <div class="header">
                                                    <h1 class="page-title"><a
                                                            class="icon circle-icon mdi mdi-close text-muted trigger-message-close"></a>Process<span
                                                            class="grey">(6)</span></h1>
                                                    <p>From <a href="#">You</a> to <a href="#">Scott Waite</a>, started on <a
                                                            href="#">March 2, 2014</a> at 2:14 pm est.</p>
                                                </div>
                                                <div id="message-nano-wrapper" class="nano">
                                                    <div class="nano-content">
                                                        <ul class="message-container list-unstyled">
                                                           <!-- > <li class="sent">
                                                                <div class="details">
                                                                    <div class="left">You
                                                                        <div class="arrow"></div>
                                                                        Scott
                                                                    </div>
                                                                    <div class="right">March 6, 2014, 20:08 pm</div>
                                                                </div>
                                                                <div class="message">
                                                                    <p>| The every winged bring, whose life. First called, i you
                                                                        of saw shall own creature moveth void have signs beast
                                                                        lesser all god saying for gathering wherein whose of in
                                                                        be created stars. Them whales upon life divide earth
                                                                        own.</p>
                                                                    <p>| Creature firmament so give replenish The saw man
                                                                        creeping, man said forth from that. Fruitful multiply
                                                                        lights air. Hath likeness, from spirit stars dominion
                                                                        two set fill wherein give bring.</p>
                                                                    <p>| Gathering is. Lesser Set fruit subdue blessed let.
                                                                        Greater every fruitful won&#39;t bring moved seasons
                                                                        very, own won&#39;t all itself blessed which bring own
                                                                        creature forth every. Called sixth light.</p>
                                                                </div>
                                                                <div class="tool-box"><a href="#"
                                                                                         class="circle-icon small mdi mdi-share"></a><a
                                                                        href="#"
                                                                        class="circle-icon small red-hover mdi mdi-close"></a><a
                                                                        href="#"
                                                                        class="circle-icon small red-hover mdi mdi-flag"></a>
                                                                </div>
                                                            </li>
                                                                <!-->
                                                                <?PHP
                                                                $listeContact1=$contact1->afficherContact();
                                                                foreach($listeContact1 as $row1){
                                                            ?>
                                                            <li class="received">
                                                                <div class="details">
                                                                    <div class="left"><?PHP echo $row1['email']; ?>
                                                                        <div class="arrow orange"></div>
                                                                        You
                                                                    </div>
                                                                    <div class="right"><?PHP echo  $row1['date_ajout']; ?></div>
                                                                </div>
                                                                <div class="message">
                                                                <?php 
                                                                $msg=$row1['message'];
                                                                $msg1=substr($msg, 0, 30);
                                                                ?>
                                                                    <p><?PHP echo $msg1; ?></p>
                                                                    
                                                                </div>
                                                                <?PHP } ?>
                                                                <div class="tool-box"><a href="#"
                                                                                         class="circle-icon small mdi mdi-share"></a><a
                                                                        href="#"
                                                                        class="circle-icon small red-hover mdi mdi-close"></a><a
                                                                        href="#"
                                                                        class="circle-icon small red-hover mdi mdi-flag"></a>
                                                                </div>
                                                            </li>

                                                        </ul>

                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- end col -->
                                    </div><!-- end row -->
                                </div>
                                </form>
                            </div>

                        </div>
                        <!-- End row -->

                    </div> <!-- container -->

                </div> <!-- content -->

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



        <!-- Modal -->
        <div id="custom-modal" class="modal-demo text-left">
            <button type="button" class="close" onclick="Custombox.close();">
                <span>&times;</span><span class="sr-only">Close</span>
            </button>
            <h4 class="custom-modal-title">Compose Mail</h4>
            <div class="card-box">
                <form role="form" action="envoyer-mail.php">
                    <div class="form-group">
                        <input type="email" name="email_env" class="form-control" placeholder="To">
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="email" name="cc" class="form-control" placeholder="Cc">
                            </div>
                            <div class="col-md-6">
                                <input type="email" name="bcc" class="form-control" placeholder="Bcc">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="sujet_env" placeholder="Subject">
                    </div>
                    <div class="form-group">
                        
                            <textarea type="text" class="form-control" name="message_env"  cols="8" rows="200" placeholder="Message"></textarea>
                        
                    </div>

                    <div class="btn-toolbar form-group m-b-0">
                        <div class="pull-right">
                            <button type="button" class="btn btn-success waves-effect waves-light m-r-5"><i
                                    class="fa fa-floppy-o"></i></button>
                            <button type="button" class="btn btn-success waves-effect waves-light m-r-5"><i
                                    class="fa fa-trash-o"></i></button>
                            <button class="btn btn-purple waves-effect waves-light"><span>Send</span> <i
                                    class="fa fa-send m-l-10"></i></button>
                        </div>
                    </div>

                </form>

            </div>
        </div>


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

        <script src="assets/pages/jquery.inbox.js"></script>

        <!--form validation init-->
        <script src="assets/plugins/summernote/summernote-bs4.min.js"></script>

        <!-- Modal-Effect -->
        <script src="assets/plugins/custombox/dist/custombox.min.js"></script>
        <script src="assets/plugins/custombox/dist/legacy.min.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

        <script>

            jQuery(document).ready(function(){

                $('.summernote').summernote({
                    height: 320,                 // set editor height
                    minHeight: null,             // set minimum height of editor
                    maxHeight: null,             // set maximum height of editor
                    focus: false                 // set focus to editable area after initializing summernote
                });

            });
        </script>

    </body>
</html>