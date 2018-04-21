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
        <script type="text/javascript">
        	function verif()
        	{
        		var v=0
        		if (window.document.commande.nom.value.length<3)
        		{
        			document.commande.nom.style.borderColor="red";
        			v=1;
        		}
        		else
        		{
        			document.commande.nom.style.borderColor="#e5e5e5";
        			
        		}
        		if (window.document.commande.prenom.value.length<3)
        		{
        			document.commande.prenom.style.borderColor="red";
        			v=1;
        		}
        		else 
        		{
        			document.commande.prenom.style.borderColor="#e5e5e5";
        		}
        		if (window.document.commande.adresse.value.length<8)
        		{
        			document.commande.adresse.style.borderColor="red";
        			v=1;
        		}
        		else 
        		{
        			document.commande.adresse.style.borderColor="e5e5e5";
        		}
        		if (window.document.commande.ville.value.length<3)
        		{
        			document.commande.ville.style.borderColor="red";
        			v=1;
        		}
        		else
        		{
        			document.commande.ville.style.borderColor="e5e5e5";
        		}
        		if (window.document.commande.zip.value.length<4)
        		{
        			document.commande.zip.style.borderColor="red";
        			v=1;
        		}
        		else
        		{
        			document.commande.zip.style.borderColor="e5e5e5";
        		}
        		if (v==1)
        		{
        			return false;
        		}
        		else
        		{
        			return true;
        		}
        	}
        </script>
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
				<?php include 'header.php'; ?>
			</header>
			<!-- header-area-end -->
			<!-- breadcrumbs-area-start -->
			<div class="breadcrumbs-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="breadcrumb-content text-center">
								<h2>Confirmation</h2>
								<ul>
									<li><a href="#">Home /</a></li>
									<li class="active"><a href="#">Confirmation</a></li>
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
							<form action="confirmationCommande.php" method="post" name="commande" onsubmit="return verif(this)">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
									<div class="checkbox-form">						
										<h3>Détails de facturation</h3>
										<div class="row">
											<div class=" col-lg-12">
												<div class="country-select">
													<label>Pays <span class="required">*</span></label>
													<select>
													  <option value="volvo">Tunisie</option>
													  <option value="saab">Suisse</option>
													</select> 										
												</div>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
												<div class="checkout-form-list">
													<label>Prénom <span class="required">*</span></label>										
													<input type="text" placeholder="" name="prenom">
												</div>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<div class="checkout-form-list">
													<label>Nom <span class="required">*</span></label>										
													<input type="text" placeholder="" name="nom">
												</div>
											</div>
											<div class="col-lg-12">
												<div class="checkout-form-list">
													<label>Société</label>
													<input type="text" placeholder="" name="societe">
												</div>
											</div>
											<div class="col-lg-12">
												<div class="checkout-form-list">
													<label>Adresse <span class="required">*</span></label>
													<input type="text" placeholder="Rue" name="adresse">
												</div>
											</div>
											<div class="col-lg-12">
												<div class="checkout-form-list">									
													<input type="text" placeholder="Appartement... (optionnel)" name="adresse2">
												</div>
											</div>
											<div class="col-lg-12">
												<div class="checkout-form-list">
													<label>Ville <span class="required">*</span></label>
													<input type="text" placeholder="" name="ville">
												</div>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<div class="checkout-form-list">
													<label>Code postal <span class="required">*</span></label>										
													<input type="text" placeholder="" name="zip">
												</div>
											</div>
											<div class="col-lg-12">
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
												<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
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
											</div>
											<div class="order-notes">
												<div class="checkout-form-list">
													<label>Order Notes</label>
													<textarea placeholder="Notes about your order, e.g. special notes for delivery." rows="10" cols="30" id="checkout-mess"></textarea>
												</div>									
											</div>
										</div>													
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
									<div class="your-order">
										<h3>Votre commande</h3>
										<?php 
											
											
											include_once '../core/panierC.php'; 
											$pan = new panierC();
											if (isset($_SESSION['id']))
											{
												
											
											?>
										<div class="your-order-table table-responsive">
											<table>
												<thead>
													<tr>
														<th class="product-name">Produit</th>
														<th class="product-total">Total</th>
													</tr>							
												</thead>
												<tbody>
													<?php
															if (isset($_SESSION['id']))
													{
														$listePanier=$pan->afficherPanier($_SESSION['id']);
														$total=0;
														foreach($listePanier as $row){													
													?>
													<tr class="cart_item">
														<td class="product-name">
															<?php echo $row['produit_nom'] ?> <strong class="product-quantity"> × <?php echo $row['qte'] ?></strong>
														</td>
														<td class="product-total">
															<span class="amount"><?php $total +=$row['qte']*$row['produit_prix']; echo $row['produit_prix']; ?> DT</span>
														</td>
													</tr>
													<?php }} ?>
												</tbody>
												<tfoot>
													<tr class="order-total">
														<th>Total de la commande</th>
														<td><strong><span class="amount"><?php echo $total ;?> DT</span></strong>
															<input type="hidden" name="total" value="<?php echo $total ?>">
															<input type="hidden" name="total" value="<?php echo $total ;}?>">
														</td>
													</tr>								
												</tfoot>
											</table>
										</div>
										<div class="payment-method" >
											<div class="payment-accordion">
												<div class="collapses-group">
													<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
														<div class="panel panel-default">
															<div class="panel-heading" role="tab" id="headingOne">
																<h4 class="panel-title">
																</h4>
															</div>
															<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
																<div class="panel-body">
																	<p>
																		<input type="radio" name="paiement" value="livraison"> Paiement à la livraison <hr>
																		<input type="radio" name="paiement" value="carte"> Paiement par carte de crédit <img src="img/2.png" alt="payment" />
																	</p>
															  </div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="order-button-payment">
												<script
																		    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
																		    data-key="pk_test_q7Dy8VDhH4I9kRddnDfGQ842"
																		    data-amount="<?php $total; echo $total ?>"
																		    data-name="Demo Site"
																		    data-description="Widget"
																		    data-currency="usd"
																		    data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
																		    data-locale="fr">
																		</script>
																		<script>
																	        // Hide default stripe button, be careful there if you
																	        // have more than 1 button of that class
																	        document.getElementsByClassName("stripe-button-el")[0].style.display = 'none';
																	    </script>
												<input type="submit" value="Confirmer la commande" >
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
