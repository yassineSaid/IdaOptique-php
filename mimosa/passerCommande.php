<!doctype html>
<?php include 'header.php';?>
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
        			document.commande.adresse.style.borderColor="#e5e5e5";
        		}
        		if (window.document.commande.ville.value.length<3)
        		{
        			document.commande.ville.style.borderColor="red";
        			v=1;
        		}
        		else
        		{
        			document.commande.ville.style.borderColor="#e5e5e5";
        		}
        		if ((window.document.commande.zip.value.length<4)|| (parseInt(window.document.commande.zip.value)!=(window.document.commande.zip.value) ))
        		{
        			document.commande.zip.style.borderColor="red";
        			v=1;
        		}
        		else
        		{
        			document.commande.zip.style.borderColor="#e5e5e5";
        		}
        		if ((!window.document.commande.paiement[0].checked)&&(!window.document.commande.paiement[1].checked))
        		{
        			
        			document.getElementById("paim").innerHTML='<span style="color: red;">Paiement à la livraison</span>';
        			document.getElementById("paim1").innerHTML='<span style="color: red;">Paiement par carte de crédit</span>';
        			v=1;
        		}
        		else
        		{
        			document.getElementById("paim").innerHTML='<span style="color: #777;">Paiement à la livraison</span>';
        			document.getElementById("paim1").innerHTML='<span style="color: #777;">Paiement par carte de crédit</span>';
        		}
        		if (window.document.commande.livraison.checked)
        		{
        			if (window.document.commande.livraison_nom.value.length<3)
	        		{
	        			document.commande.livraison_nom.style.borderColor="red";
	        			v=1;
	        		}
	        		else
	        		{
	        			document.commande.livraison_nom.style.borderColor="#e5e5e5";
	        			
	        		}
	        		if (window.document.commande.livraison_prenom.value.length<3)
	        		{
	        			document.commande.livraison_prenom.style.borderColor="red";
	        			v=1;
	        		}
	        		else 
	        		{
	        			document.commande.livraison_prenom.style.borderColor="#e5e5e5";
	        		}
	        		if (window.document.commande.livraison_adresse1.value.length<8)
	        		{
	        			document.commande.livraison_adresse1.style.borderColor="red";
	        			v=1;
	        		}
	        		else 
	        		{
	        			document.commande.livraison_adresse1.style.borderColor="#e5e5e5";
	        		}
	        		if (window.document.commande.livraison_ville.value.length<3)
	        		{
	        			document.commande.livraison_ville.style.borderColor="red";
	        			v=1;
	        		}
	        		else
	        		{
	        			document.commande.livraison_ville.style.borderColor="#e5e5e5";
	        		}
	        		if ((window.document.commande.livraison_code_postal.value.length<4)|| (parseInt(window.document.commande.livraison_code_postal.value)!=(window.document.commande.livraison_code_postal.value) ))
	        		{
	        			document.commande.livraison_code_postal.style.borderColor="red";
	        			v=1;
	        		}
	        		else
	        		{
	        			document.commande.livraison_code_postal.style.borderColor="#e5e5e5";
	        		}
	        		if (parseInt(window.document.commande.livraison_telephone.value)!=(window.document.commande.livraison_telephone.value))
	        		{
	        			document.commande.livraison_telephone.style.borderColor="red";
	        			v=1;
	        		}
	        		else
	        		{
	        			document.commande.livraison_telephone.style.borderColor="#e5e5e5";
	        		}
	        		if (window.document.commande.livraison_email.value.length<3)
	        		{
	        			document.commande.livraison_email.style.borderColor="red";
	        			v=1;
	        		}
	        		else
	        		{
	        			document.commande.livraison_email.style.borderColor="#e5e5e5";
	        		}
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
					<?php 
						include_once '../core/panierC.php'; 
						if(((count($_SESSION['panier']['id_produit'])<=0))&&(!isset($_SESSION['id'])))
						echo "<script type='text/javascript'>document.location.replace('index.php');</script>";
						else if (!isset($_SESSION['id']))
						{
							$_SESSION['redirect']=true;
							echo "<script type='text/javascript'>document.location.replace('login-client-inter.php');</script>";
						}
						else if (isset($_SESSION['id']))
						{
							$panier=new PanierC();
							if ($panier->calculPanier($_SESSION['id'])<=0)
								echo "<script type='text/javascript'>document.location.replace('afficherPanier.php');</script>";
						}
						include_once '../core/commandeC.php';
						
						if (isset($_SESSION['id']))
						{
							$commande=new CommandeC();
							$info=$commande->getInfoClient($_SESSION['id']);


				?>
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
								<div class="coupon-accordion" style="display:none;" >
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
							<form action="paiement.php" method="post" name="commande" onsubmit="return verif(this)">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
									<div class="checkbox-form">						
										<h3>Détails de facturation</h3>
										<div class="row">
											<div class=" col-lg-12">
												<div class="country-select">
													<label>Pays <span class="required">*</span></label>
													<select>
													  <option value="Tunisie">Tunisie</option>
													  <option value="Suisse">Suisse</option>
													</select> 										
												</div>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
												<div class="checkout-form-list">
													<label>Prénom <span class="required">*</span></label>										
													<input type="text" placeholder="" name="prenom" value="<?php echo $info['prenom'] ?>">
												</div>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<div class="checkout-form-list">
													<label>Nom <span class="required">*</span></label>										
													<input type="text" placeholder="" name="nom" value="<?php echo $info['nom'] ?>">
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
													<input type="text" placeholder="Rue" name="adresse"  value="<?php echo $info['adresse'] ?>">
												</div>
											</div>
											<div class="col-lg-12">
												<div class="checkout-form-list">									
													<input type="text" placeholder="Appartement... (optionnel)" name="adresse2"  value="<?php echo $info['adresse2'] ?>">
												</div>
											</div>
											<div class="col-lg-12">
												<div class="checkout-form-list">
													<label>Ville <span class="required">*</span></label>
													<input type="text" placeholder="" name="ville"  value="<?php echo $info['cite'] ?>">
												</div>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<div class="checkout-form-list">
													<label>Code postal <span class="required">*</span></label>										
													<input type="text" placeholder="" name="zip"  value="<?php echo $info['zip'] ?>">
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
										<?php } ?>
										<div class="different-address">
												<div class="ship-different-title">
													<h3>
														<label>Livrer à une autre adresse</label>
														<input type="checkbox" id="ship-box" name="livraison" value="1">
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
														<input type="text" name="livraison_nom" placeholder="votre nom...">
													</div>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
													<div class="checkout-form-list">
														<label>Prenom <span class="required">*</span></label>										
														<input type="text" name="livraison_prenom" placeholder="votre prénom...">
													</div>
												</div>
												<div class="col-lg-12">
													<div class="checkout-form-list">
														<label>Societe</label>
														<input type="text" name="livraison_societe" placeholder="votre societe...">
													</div>
												</div>
												<div class="col-lg-12">
													<div class="checkout-form-list">
														<label>Addresse <span class="required">*</span></label>
														<input type="text" name="livraison_adresse1"  placeholder="votre addresse...">
													</div>
												</div>
												<div class="col-lg-12">
													<div class="checkout-form-list">									
														<input type="text" name="livraison_adresse2" placeholder="">
													</div>
												</div>
												<div class="col-lg-12">
													<div class="checkout-form-list">
														<label>Ville <span class="required">*</span></label>
														<input type="text" name="livraison_ville"  placeholder="votre ville...">
													</div>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
													<div class="checkout-form-list">
														<label>Region <span class="required">*</span></label>										
														<input type="text" name="livraison_region"  placeholder="votre région...">
													</div>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
													<div class="checkout-form-list">
														<label>Code Postal <span class="required">*</span></label>										
														<input type="text" name="livraison_code_postal"  placeholder="votre code postal...">
													</div>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
													<div class="checkout-form-list">
														<label>Email <span class="required">*</span></label>										
														<input type="email" name="livraison_email"  placeholder="votre adresse email...">
													</div>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
													<div class="checkout-form-list">
														<label>Telephone  <span class="required">*</span></label>										
														<input type="text" name="livraison_telephone"  placeholder="votre numéro de téléphone...">
													</div>
												</div>								
											</div>
											<div class="order-notes">
												<div class="checkout-form-list">
													<label>Order Notes</label>
													<textarea placeholder="" rows="10" cols="30" id="checkout-mess" name="livraison_order_note"></textarea>
												</div>									
											</div>
										</div>													
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
									<div class="your-order">
										<h3>Votre commande</h3>
										<?php 
											$pan = new panierC();
											$total=0; ?>
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
													<?php }}
													else if (count($_SESSION['panier']['id_produit'])>0)
													{
														$nbArticles=count($_SESSION['panier']['id_produit']);
																
															for ($i=0 ;$i < $nbArticles ; $i++)
															{
																$listePanier=$pan->afficherPanierSession($_SESSION['panier']['id_produit'][$i]);
																foreach ($listePanier as $row) { ?>	
													<tr class="cart_item">
														<td class="product-name">
															<?php echo $row['produit_nom'] ?> <strong class="product-quantity"> × <?php echo $_SESSION['panier']['qte'][$i] ?></strong>
														</td>
														<td class="product-total">
															<span class="amount"><?php $total +=$_SESSION['panier']['qte'][$i]*$row['produit_prix']; echo $row['produit_prix']; ?> DT</span>
														</td>
													</tr>
													<?php }}} ?>
												</tbody>
												<tfoot>
													<?php if(isset($_SESSION['pourcentage'])){ if ($_SESSION['pourcentage']!=0){?>
													<tr class="cart-subtotal">
														<th>Total</th>
														<td><span class="amount"><strike><?php echo $total?> DT</strike></span></td>
													</tr>
													<tr class="cart-subtotal">
														<th>Réduction</th>
														<?php $total=$total-(($total*$_SESSION['pourcentage'])/100) ?>
														<td><span class="amount"><?php echo $_SESSION['pourcentage']?>%</span></td>
													</tr>
													<?php }} ?>
													<tr class="order-total">
														<th>Total de la commande</th>
														<td><strong><span class="amount"><?php echo $total ;?> DT</span></strong>
															<input type="hidden" name="total" value="<?php echo $total ?>">
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
																		<input type="radio" name="paiement" value="livraison"> <span id="paim">Paiement à la livraison</span> <hr>
																		<input type="radio" name="paiement" value="carte"> <span id="paim1">Paiement par carte de crédit </span><img src="img/2.png" alt="payment" />
																	</p>
															  </div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="order-button-payment">
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
