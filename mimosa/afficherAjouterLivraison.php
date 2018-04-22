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
    <body class="checkout">
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
			</header>
			<!-- header-area-end -->
			<!-- breadcrumbs-area-start -->
			<div class="breadcrumbs-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="breadcrumb-content text-center">
								<h2>checkout</h2>
								<ul>
									<li><a href="#">Home /</a></li>
									<li class="active"><a href="#">checkout</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- breadcrumbs-area-end -->
			<!-- shop-main-area-start -->
			<div class="shop-main-area">
				<!-- coupon-area-area-start -->
				<div class="coupon-area">
					<div class="container">
						<div class="row">
							<div class="col-lg-12">
								<div class="coupon-accordion">
									<h3>Returning customer? <span id="showlogin">Click here to login</span></h3>
									<div class="coupon-content" id="checkout-login">
										<div class="coupon-info">
											<p class="coupon-text">Quisque gravida turpis sit amet nulla posuere lacinia. Cras sed est sit amet ipsum luctus.</p>
											<form action="#">
												<p class="form-row-first">
													<label>Username or email <span class="required">*</span></label>
													<input type="text">
												</p>
												<p class="form-row-last">
													<label>Password  <span class="required">*</span></label>
													<input type="text">
												</p>
												<p class="form-row">					
													<input type="submit" value="Login">
													<label>
														<input type="checkbox">
														 Remember me 
													</label>
												</p>
												<p class="lost-password">
													<a href="#">Lost your password?</a>
												</p>
											</form>
										</div>
									</div>
									<h3>Have a coupon? <span id="showcoupon">Click here to enter your code</span></h3>
									<div class="coupon-checkout-content" id="checkout_coupon">
										<div class="coupon-info">
											<form action="#">
												<p class="checkout-coupon">
													<input type="text" placeholder="Coupon code">
													<input type="submit" value="Apply Coupon">
												</p>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- coupon-area-area-end -->
				<!-- checkout-area-start -->
				<div class="checkout-area">
					<div class="container">
						<div class="row">
							<form action="ajouter-livraison.php" method="POST">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
									<div class="checkbox-form">						
										<h3>Billing Details</h3>
										<div class="row">
											<div class=" col-lg-12">
												<div class="country-select">
													<label>Country <span class="required">*</span></label>
													<select>
													  <option value="volvo">bangladesh</option>
													  <option value="saab">Algeria</option>
													  <option value="mercedes">Afghanistan</option>
													  <option value="audi">Ghana</option>
													  <option value="audi2">Albania</option>
													  <option value="audi3">Bahrain</option>
													  <option value="audi4">Colombia</option>
													  <option value="audi5">Dominican Republic</option>
													</select> 										
												</div>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
												<div class="checkout-form-list">
													<label>First Name <span class="required">*</span></label>										
													<input type="text" placeholder="">
												</div>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<div class="checkout-form-list">
													<label>Last Name <span class="required">*</span></label>										
													<input type="text" placeholder="">
												</div>
											</div>
											<div class="col-lg-12">
												<div class="checkout-form-list">
													<label>Company Name</label>
													<input type="text" placeholder="">
												</div>
											</div>
											<div class="col-lg-12">
												<div class="checkout-form-list">
													<label>Address <span class="required">*</span></label>
													<input type="text" placeholder="Street address">
												</div>
											</div>
											<div class="col-lg-12">
												<div class="checkout-form-list">									
													<input type="text" placeholder="Apartment, suite, unit etc. (optional)">
												</div>
											</div>
											<div class="col-lg-12">
												<div class="checkout-form-list">
													<label>Town / City <span class="required">*</span></label>
													<input type="text" placeholder="Town / City">
												</div>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<div class="checkout-form-list">
													<label>State / County <span class="required">*</span></label>										
													<input type="text" placeholder="">
												</div>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<div class="checkout-form-list">
													<label>Postcode / Zip <span class="required">*</span></label>										
													<input type="text" placeholder="Postcode / Zip">
												</div>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<div class="checkout-form-list">
													<label>Email Address <span class="required">*</span></label>										
													<input type="email" placeholder="">
												</div>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<div class="checkout-form-list">
													<label>Phone  <span class="required">*</span></label>										
													<input type="text" placeholder="Postcode / Zip">
												</div>
											</div>
											<div class="col-lg-12">
												<div class="checkout-form-list create-acc">	
													<input type="checkbox" id="cbox">
													<label>Create an account?</label>
												</div>
												<div class="checkout-form-list create-account" id="cbox_info" style="display: none;">
													<p>Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
													<label>Account password  <span class="required">*</span></label>
													<input type="password" placeholder="password">	
												</div>
											</div>								
										</div>
										
										<div class="different-address">
												<div class="ship-different-title">
													<h3>
														<label>Ship to a different address?</label>
														<input type="checkbox" id="ship-box">
													</h3>
												</div>
											<div class="row" id="ship-box-info" style="display: none;">
												<div class="col-lg-12">
													<div class="country-select">
														<label>Country <span class="required">*</span></label>
														<select name="livraison_pays">
														  <option value="volvo">Tunisie</option>
														</select> 										
													</div>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
													<div class="checkout-form-list">
														<label>Nom <span class="required">*</span></label>										
														<input type="text" name="livraison_nom" placeholder="">
													</div>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
													<div class="checkout-form-list">
														<label>Prenom <span class="required">*</span></label>										
														<input type="text" name="livraison_prenom" placeholder="">
													</div>
												</div>
												<div class="col-lg-12">
													<div class="checkout-form-list">
														<label>Societe</label>
														<input type="text" name="livraison_societe" placeholder="">
													</div>
												</div>
												<div class="col-lg-12">
													<div class="checkout-form-list">
														<label>Addresse <span class="required">*</span></label>
														<input type="text" name="livraison_adresse1"  placeholder="Street address">
													</div>
												</div>
												<div class="col-lg-12">
													<div class="checkout-form-list">									
														<input type="text" name="livraison_adresse2" placeholder="Apartment, suite, unit etc. (optional)">
													</div>
												</div>
												<div class="col-lg-12">
													<div class="checkout-form-list">
														<label>Ville <span class="required">*</span></label>
														<input type="text" name="livraison_ville"  placeholder="Town / City">
													</div>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
													<div class="checkout-form-list">
														<label>Region <span class="required">*</span></label>										
														<input type="text" name="livraison_region"  placeholder="">
													</div>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
													<div class="checkout-form-list">
														<label>Code Postal <span class="required">*</span></label>										
														<input type="text" name="livraison_code_postal"  placeholder="Postcode / Zip">
													</div>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
													<div class="checkout-form-list">
														<label>Email <span class="required">*</span></label>										
														<input type="email" name="livraison_email"  placeholder="">
													</div>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
													<div class="checkout-form-list">
														<label>Telephone  <span class="required">*</span></label>										
														<input type="text" name="livraison_telephone"  placeholder="Postcode / Zip">
													</div>
												</div>								
											</div>
											<div class="order-notes">
												<div class="checkout-form-list">
													<label>Notes</label>
													<textarea placeholder="Notes about your order, e.g. special notes for delivery." rows="10" cols="30" id="checkout-mess" name="livraison_order_note"></textarea>
												</div>									
											</div>
										</div>
																							
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
									<div class="your-order">
										<h3>Your order</h3>
										<div class="your-order-table table-responsive">
											<table>
												<thead>
													<tr>
														<th class="product-name">Product</th>
														<th class="product-total">Total</th>
													</tr>							
												</thead>
												<tbody>
													<tr class="cart_item">
														<td class="product-name">
															Vestibulum suscipit <strong class="product-quantity"> × 1</strong>
														</td>
														<td class="product-total">
															<span class="amount">£165.00</span>
														</td>
													</tr>
													<tr class="cart_item">
														<td class="product-name">
															Vestibulum dictum magna	<strong class="product-quantity"> × 1</strong>
														</td>
														<td class="product-total">
															<span class="amount">£50.00</span>
														</td>
													</tr>
												</tbody>
												<tfoot>
													<tr class="cart-subtotal">
														<th>Cart Subtotal</th>
														<td><span class="amount">£215.00</span></td>
													</tr>
													<tr class="shipping">
														<th>Shipping</th>
														<td>
															<ul>
																<li>
																	<input type="radio">
																	<label>
																		Flat Rate: <span class="amount">£7.00</span>
																	</label>
																</li>
																<li>
																	<input type="radio">
																	<label>Free Shipping:</label>
																</li>
																<li></li>
															</ul>
														</td>
													</tr>
													<tr class="order-total">
														<th>Order Total</th>
														<td><strong><span class="amount">£215.00</span></strong>
														</td>
													</tr>								
												</tfoot>
											</table>
										</div>
										<div class="payment-method">
											<div class="payment-accordion">
												<div class="collapses-group">
													<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
														<div class="panel panel-default">
															<div class="panel-heading" role="tab" id="headingOne">
																<h4 class="panel-title">
																	<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
																	  Direct Bank Transfer
																	</a>
																</h4>
															</div>
															<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
																<div class="panel-body">
																	<p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
																</div>
															</div>
														</div>
														<div class="panel panel-default">
															<div class="panel-heading" role="tab" id="headingTwo">
																<h4 class="panel-title">
																	<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
																	  Cheque Payment
																	</a>
																</h4>
															</div>
															<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
																<div class="panel-body">
																	<p>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
																</div>
															</div>
														</div>
														<div class="panel panel-default">
															<div class="panel-heading" role="tab" id="headingThree">
																<h4 class="panel-title">
																	<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
																	 PayPal <img src="img/2.png" alt="payment" />
																	</a>
																</h4>
															</div>
															<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
															  <div class="panel-body">
																	<p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
															  </div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="order-button-payment">
												<input type="submit" value="Place order">
											</div>
										
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				<!-- checkout-area-end -->
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
