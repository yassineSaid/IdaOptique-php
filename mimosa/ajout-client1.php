<!doctype html>
<?php include 'header.php' ?>
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
			<!-- shop-main-area-start -->
			<div class="shop-main-area">
				<!-- user-login-area-start -->
				
				<div class="user-login-area">
					<div class="container">
						<form class="form-horizontal" role="form" action="ajoutClient.php" method="POST" name="client" onsubmit="return verif(this)">
						<div class="row">
							<div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
								<div class="billing-fields">
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
											<div class="single-register">
													<label>Prenom<span id="span_prenom">*</span></label>
													<input class="prenom" type="text" id="prenom" name="prenom"/>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
											<div class="single-register">
													<label>Nom<span id="span_nom">*</span></label>
													<input class="prenom" type="text" id="nom" name="nom"/>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
											<div class="single-register">
													<label>Email Address<span id="span_id">*</span></label>
													<input class="prenom" type="text" id="email_id" name="email"/>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
											<div class="single-register">
													<label>Téléphone<span id="span_telephone">*</span></label>
													<input class="prenom" id="telephone" type="text" name="telephone"/>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
											<div class="single-register">
													<label>Fax<span id="span_fax">*</span></label>
													<input class="prenom" type="text" id="fax" name="fax" onblur="queDesChiffres(this)"/>
											</div>
										</div>
									</div>
									<div class="single-register">
										<label>Pays<span>*</span></label>
										<select class="chosen-select" tabindex="1" style="width:100%;" data-placeholder="Default Sorting" name="pays">
											<option value="country">Séléctionnez un pays</option>
											<option value="Tunisie">Tunisie</option>
										</select>
									</div>
									<div class="single-register">
											<label>Addresse<span>*</span></label>
											<input type="text" class="prenom" placeholder="adresse" name="adresse"/>
											<input type="text" class="prenom" id="billing_address_2"  name="adresse2" placeholder="Appartement, suite..etc. (optional"/>
										</form>
									</div>
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
											<div class="single-register">
												<label>Ville<span>*</span></label>
												<select class="chosen-select" name="cite" tabindex="1" style="width:100%;" data-placeholder="Default Sorting">
													<option value="Select">Selectionnez votre ville</option>
													<option value="Tunis">Tunis</option>
													<option value="Ariana">Ariana</option>
													<option value="Ben Arous">Ben Arous</option>
													<option value="Manouba">Manouba</option>
													<option value="Nabeul">Nabeul</option>
													<option value="Zaghouan">Zaghouan</option>
													<option value="Bizerte">Bizerte</option>
													<option value="Beja">Beja</option>
													<option value="Kef">Kef</option>
													<option value="Siliana">Siliana</option>
													<option value="Sousse">Sousse</option>
													<option value="Monastir">Monastir</option>
													<option value="Mahdia">Mahdia</option>
													<option value="Sfax">Sfax</option>
													<option value="Kairouan">Kairouan</option>
													<option value="Kasserine">Kasserine</option>
													<option value="Sidi Bouzid">Sidi Bouzid</option>
													<option value="Gabes">Gabes</option>
													<option value="Mednine">Mednine</option>
													<option value="Tataouine">Tataouine</option>
													<option value="Gafsa">Gafsa</option>
													<option value="Tozeur">Tozeur</option>
													<option value="Kebili">Kebili</option>
												</select>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
											<div class="single-register">
													<label>Code postal<span id="span_zip">*</span></label>
													<input class="prenom" id="zip" type="text" placeholder="" name="zip"/>
											</div>
										</div>
									</div>
									<div class="single-register">
											<label>Mot de passe<span id="mdp_span">*</span></label>
											<input class="prenom" type="password" name="motDePasse" id="mdp" placeholder="Entrer votre mot de passe"/>
									</div>
									<div class="single-register">
											<label>Confirmez le mot de passe<span id="mdpC_span">*</span></label>
											<input class="prenom" type="password" name="ConfirmPass" id="ConfirmPass" placeholder="Confirmez"/>
									</div>
									<div class="single-register single-register-3" style="display: inline; visibility: hidden;">
										<input id="rememberme" type="checkbox" name="rememberme" value="forever">
										<label class="inline">I agree <a href="#">Terms & Condition</a></label>
									</div>
									<div class="single-register">
										<input class="confirmer" type="submit" onclick="verif()" value="S'inscrire">
									</div>
								</div>
							</div>
			</form>
						</div>
					</div>
				</div>
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

        <script src="verif_inscrit.js"></script>

         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </body>
</html>
