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
		<!-- modernizr css -->
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body class="register">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
		<!-- page-wraper-start -->
		<div id="page-wraper">
			<!-- header-area-start -->
			<header>
				<!-- header-top-area-start -->
				<?php include 'header.php';?>
				<!-- mobile-menu-area-end -->
			</header>
			<!-- header-area-end -->
			<!-- breadcrumbs-area-start -->
			<div class="breadcrumbs-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="breadcrumb-content text-center">
								<h2>register</h2>
								<ul>
									<li><a href="#">Home /</a></li>
									<li class="active"><a href="#">register</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- breadcrumbs-area-end -->
			<form method="post" action="modifierLivraison.php">
			<!-- shop-main-area-start -->
			<div class="shop-main-area">
				<!-- user-login-area-start -->
				<?php
				require_once '../core/livraisonC.php';
				$liv=new LivraisonManage();
    			$result=$liv->recupererLivraison($_GET['id'],$_GET['id_commande']);
				foreach($result as $row){
				?>
				<div class="user-login-area">
					<div class="container">
						<div class="row">
							<div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
								<div class="billing-fields">
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
											<div class="single-register">
													<label>First Name<span>*</span></label>
													<input type="text" name="livraison_nom" value="<?php echo $row['nom']; ?>"/>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
											<div class="single-register">
													<label>Last Name<span>*</span></label>
													<input type="text" name="livraison_prenom" value="<?php echo $row['prenom']; ?>" />
											</div>
										</div>
									</div>
									<div class="single-register">
											<label>Company Name</label>
											<input type="text" name="livraison_sosciete" value="<?php echo $row['sosciete']; ?>" />
									</div>
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
											<div class="single-register">
													<label>Email Address<span>*</span></label>
													<input type="text" name="livraison_email" value="<?php echo $row['email']; ?>" />
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
											<div class="single-register">
													<label>Phone<span>*</span></label>
													<input type="text" name="livraison_telephone" value="<?php echo $row['telephone']; ?>" />
											</div>
										</div>
									</div>
									<div class="single-register">
										<label>Country<span>*</span></label>
										<select class="chosen-select" tabindex="1" style="width:100%;" name="livraison_pays" data-placeholder="Default Sorting">
											<option value="Tunisie">Tunisie </option>
											
										</select>
									</div>
									<div class="single-register">
											<label>Address<span>*</span></label>
											<input type="text" name="livraison_adresse1" value="<?php echo $row['adresse1']; ?>" placeholder="Street address"/>
											<input type="text" name="livraison_adresse2" value="<?php echo $row['adresse2']; ?>" id="billing_address_2" placeholder="Apartment, suite, unit etc. (optional"/>
									</div>
									<div class="single-register">
											<label>Town/City<span>*</span></label>
											<input type="text" name="livraison_ville" value="<?php echo $row['ville']; ?>" />
									</div>
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
											<div class="single-register">
												<label>State<span>*</span></label>
												<input type="text" name="livraison_region" value="<?php echo $row['region']; ?>" />
												
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
											<div class="single-register">
												
													<label>Postcode/zip<span>*</span></label>
													<input type="text" name="livraison_code_postal" value="<?php echo $row['code_postal']; ?>" placeholder="Postcode/zip"/>
											
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
											<div class="single-register">
												
													<label>Note<span>*</span></label>
													<textarea type="text" name="livraison_note" value="<?php echo $row['note']; ?>" placeholder="Postcode/zip"/></textarea>
													<input type="hidden" name="id_commande" value="<?php echo $_GET['id_commande']; ?>"/>
													<input type="hidden" name="id_client" value="<?php echo $row['id_client']; ?>"/>
											
											</div>
										</div>
									</div>
										<?php 
									}
									?>
									
									<div class="single-register">
										<button type="submit" name="modif">Modifier</button>
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</form>
				<!-- user-login-area-end -->
			</div>
			<!-- shop-main-area-end -->
			<!-- newslatter-area-start -->
			<div class="newslatter-area pt-80">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="bt-top ptb-80">
								<div class="newlatter-content text-center">
									<h6>Special Offers For Subscribers</h6>
									<h3>Ten Percent Member Discount</h3>
									<p>Subscribe to our newsletters now and stay up to date with new collections, the latest lookbooks and exclusive offers.</p>
									<form action="#">
										<input type="text" placeholder="Enter your email address here..."/>
										<button type="submit">Subscribe</button>
									</form>
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
    </body>
</html>
