<?php include_once('header.php'); 

include_once 'init.php';?>
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Mimosa-Responsive eCommerce Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Favicon -->
		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">

		<!-- all css here -->
		<!-- bootstrap v3.3.6 css -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- animate css -->
        <link rel="stylesheet" href="css/animate.css">
		<!-- jquery-ui.min css -->
        <link rel="stylesheet" href="css/jquery-ui.min.css">
		<!-- meanmenu css -->
        <link rel="stylesheet" href="css/meanmenu.min.css">
		<!-- owl.carousel css -->
        <link rel="stylesheet" href="css/owl.carousel.css">
		<!-- font-awesome css -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- ionicons.min css -->
        <link rel="stylesheet" href="css/ionicons.min.css">
		<!-- nivo-slider.css -->
        <link rel="stylesheet" href="css/nivo-slider.css">
		<!-- style css -->
		<link rel="stylesheet" href="style.css">
		<!-- responsive css -->
        <link rel="stylesheet" href="css/responsive.css">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
		<!-- modernizr css -->
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body class="contact">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
		<!-- page-wraper-start -->
		<div id="page-wraper">
			<!-- header-area-start -->
			<header>
				
			</header>
			<!-- header-area-end -->
			<!-- breadcrumbs-area-start -->
			<div class="breadcrumbs-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="breadcrumb-content text-center">
								<h2>contact</h2>
								<ul>
									<li><a href="#">Home /</a></li>
									<li class="active"><a href="#">contact</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- breadcrumbs-area-end -->
			<!-- shop-main-area-start -->
			<div class="shop-main-area">
				<!-- googleMap-area-start -->
				<div class="map-area pt-50">
					<div class="container">
						<div class="row">
							<div class="col-lg-12">
								<div id="googleMap"></div>
							</div>
						</div>
					</div>
				</div>
				<!-- googleMap-end -->
				<!-- contact-area-start -->
				<div class="contact-area ptb-80">
					<div class="container">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<div class="contact-info mb-3 mb-40-2">
									<h3>Contact info</h3>
									<ul>

										<li>
											<i class="fa fa-map-marker"></i>
											<span>Address</span>
											Avenue Hedi Nouira Résidence La Coupole Ennasr 2, Tunis 2037						
										</li>
										<li>
											<i class="fa fa-envelope"></i>
											<span>Phone</span>
											70 851 322 
										</li>
										<li>
											<i class="fa fa-mobile"></i>
											<span>Email</span>
											<a href="#">info@ida-optique.com</a>
										</li>
									</ul>
								</div>
							</div>
							
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							
								<div class="contact-form">
									<h3><i class="fa fa-envelope-o"></i>Leave a Message</h3>
									<form  action="contact-ajout.php" method="POST">
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
												<div class="checkout-form-list">
													<input type="text"  name="nom"  placeholder="Name (required)" />
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
												<div class="checkout-form-list">
													<input type="email"  name="email" placeholder="Email (required)" />
											</div>
										</div>
									<div class="col-lg-12 ">
											<div class="checkout-form-list">
										
											<input type="text" name="sujet" placeholder="Subject" >
										</div>

									</div>
								

									
									<div class="col-lg-12 ">
											<div class="checkout-form-list">
										
											<textarea  cols="80" rows="4"  name="message" placeholder="Massage"></textarea>
									</div>
										
									</div>	
									</div>
									<div>
											<input type="submit" value="Submit Form" style="background: #252525 none repeat scroll 0 0;
    border-radius: 0;
    box-shadow: none;
    color: #fff;
    display: inline-block;
    font-size: 12px;
    font-weight: 700;
    height: 40px;
    line-height: 40px;
    margin-right: 15px;
    padding: 0 15px;
    text-shadow: none;
    text-transform: uppercase;
    transition: all 0.3s ease 0s;">
										
									</div>
									</form>
								</div>	

							</div>
							
						</div>
					</div>
				</div>

				<!-- contact-area-end -->
			</div>
			<?php 

				$data = $messages->get_msg(0,265);
				$data1 = $messages->get_msg(0,12);?>
			<!-- shop-main-area-end -->
			<!-- newslatter-area-start -->
			<div class="newslatter-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-5" style="
    margin-left: 700px;
">
            <div class="panel panel-primary">
                <div class="panel-heading" id="accordion">
                    <span class="glyphicon glyphicon-comment"></span> Chat
                    <div class="btn-group pull-right">
                        <a type="button" class="btn btn-default btn-xs" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                            <span class="glyphicon glyphicon-chevron-down"></span>
                        </a>
                    </div>
                </div>
            <div class="panel-collapse collapse" id="collapseOne">
                <div class="panel-body">

                    <ul class="chat">
                    	<?php foreach ($data1 as $record) {
					if ($record['is_actived'] != '0') { ?>
                        <li class="left clearfix"><span class="chat-img pull-left">
                            <img src="http://placehold.it/50/55C1E7/fff&text=U" alt="User Avatar" class="img-circle" />
                        </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                	
                                    <strong class="primary-font"><?php echo $record['username']; ?></strong> <small class="pull-right text-muted">
                                        <span class="glyphicon glyphicon-time"></span><?php echo date("d/m H:i", $record['update_time']); ?></small>
                                </div>
                                <p>
                                  <?php echo $record['message']; ?>
                                </p>
                            </div>
                        </li>
                            <?php
					}
				}
				
				?>
				<?php foreach ($data as $record) {
					if ($record['is_actived'] != '0') { ?>
                        <li class="right clearfix"><span class="chat-img pull-right">
                            <img src="http://placehold.it/50/FA6F57/fff&text=ME" alt="User Avatar" class="img-circle" />
                        </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <small class=" text-muted"><span class="glyphicon glyphicon-time"></span><?php echo date("d/m H:i", $record['update_time']); ?></small>
                                    <strong class="pull-right primary-font"><?php echo $record['username']; ?></strong>
                                </div>
                                <p>
                                    <?php echo $record['message']; ?>
                                </p>
                            </div>
                        </li>
                         <?php
					}
				}
				
				?>
                    </ul>
                   
                </div>
                <div class="panel-footer">
                    <div class="input-group">
                    	<form id="frm-msg" name="frm-msg" onsubmit="return false;">
                        <input id="btn-input" name="msg" type="text" class="form-control input-sm" placeholder="Type your message here..." />
                        <span class="input-group-btn">
                            <input class="btn btn-warning btn-sm" value="Send" id="btn-chat">
                               

                        </span>
                    </form>
                    </div>
                </div>
            </div>
            </div>
        </div>
					</div>
				</div>
			</div>
			<!-- newslatter-area-end -->
			<!-- footer-area-start -->
			<footer>
				<div class="footer-area ptb-40">
					<div class="container">
						<div class="row">
							<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
								<!-- footer-logo-start -->
								<div class="footer-logo mb-3">
									<a href="#"><img src="img/logo/2.png" alt="logo" /></a>
								</div>
								<!-- footer-logo-end -->
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<!-- copy-right-area-start -->
								<div class="copy-right-area mb-3 text-center">
									<p>Copyright © 2018 <a href="#">Hastech</a> . All Right Reserved</p>
								</div>
								<!-- copy-right-area-end -->
							</div>
							<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
								<!-- footer-social-icon-start -->
								<div class="footer-social-icon">
									<ul>
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-rss"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									</ul>
								</div>
								<!-- footer-social-icon-end -->
							</div>
						</div>
					</div>
				</div>
		   </footer>
			<!-- footer-area-end -->
	   </div>
	  <!-- page-wraper-start -->
	  
	  
		<!-- all js here -->
		<!-- jquery latest version -->
        <script src="js/vendor/jquery-1.12.0.min.js"></script>
		<!-- bootstrap js -->
        <script src="js/bootstrap.min.js"></script>
		<!-- owl.carousel js -->
        <script src="js/owl.carousel.min.js"></script>
		<!-- meanmenu js -->
        <script src="js/jquery.meanmenu.js"></script>
		<!-- jquery-ui js -->
        <script src="js/jquery-ui.min.js"></script>
		<!-- wow js -->
        <script src="js/wow.min.js"></script>
		<!-- owl.carousel.min.js -->
        <script src="js/owl.carousel.min.js"></script>
		<!-- jquery.nivo.slider.js -->
        <script src="js/jquery.nivo.slider.js"></script>
		<!-- jquery.elevateZoom-3.0.8.min.js -->
        <script src="js/jquery.elevateZoom-3.0.8.min.js"></script>
		<!-- jquery.parallax-1.1.3.js -->
        <script src="js/jquery.parallax-1.1.3.js"></script>
		<!-- jquery.counterup.min.js -->
        <script src="js/jquery.counterup.min.js"></script>
		<!-- waypoints.min.js -->
        <script src="js/waypoints.min.js"></script>
		<!-- plugins js -->
        <script src="js/plugins.js"></script>
		<!-- main js -->
        <script src="js/main.js"></script>
		<!-- googleapis -->
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAlZPf84AAVt8_FFN7rwQY5nPgB02SlTKs"></script>
		<script>
			/* Google Map js */
			function test5()
			{
				window.location.href = "login.html";
			}
			
			function initialize() {
			  var mapOptions = {
				zoom: 15,
				scrollwheel: false,
				center: new google.maps.LatLng(36.861834, 10.1633907)
			  };

			  var map = new google.maps.Map(document.getElementById('googleMap'),
				  mapOptions);

			  var marker = new google.maps.Marker({
				position: map.getCenter(),
				animation:google.maps.Animation.BOUNCE,
				icon: 'img/map.png',
				map: map
			  });

			}
			google.maps.event.addDomListener(window, 'load', initialize);
		</script>
    </body>
</html>
