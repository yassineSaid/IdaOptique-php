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
    <body class="page-not-found">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
		<!-- page-wraper-start -->
		<div id="page-wraper">
			<!-- header-area-start -->
			<header>
				<?php 
					include 'header.php';
					require_once '../core/livraisonC.php';

					if(((count($_SESSION['panier']['id_produit'])<=0))&&(!isset($_SESSION['id'])))
						echo "<script type='text/javascript'>document.location.replace('index.php');</script>";
					include_once '../entities/commande.php';
					include_once '../core/commandeC.php';
					require_once '/stripe/init.php';
					if (isset($_POST['app']))
					{
						\Stripe\Stripe::setApiKey("sk_test_rkfr2kuDbj8a7LRmarLt40W7");
						$token = $_POST['stripeToken'];
						$charge = \Stripe\Charge::create([
						    'amount' => $_POST['total']*100,
						    'currency' => 'usd',
						    'description' => 'Example charge',
						    'source' => $token,
						]);
						$comm=new Commande($_SESSION['id'],$_POST['total'],$_POST['nom'],$_POST['prenom'],$_POST['adresse'],$_POST['adresse2'],$_POST['ville'],$_POST['zip']);
						$commC= new CommandeC();
						$id_commande=$commC->confirmerCommande($comm,"Carte de crédit");
						$var=new Livraison($_SESSION['id'],$id_commande,$_POST['livraison_nom'],$_POST['livraison_prenom'],$_POST['livraison_societe'],$_POST['livraison_adresse1'],$_POST['livraison_adresse2'],$_POST['livraison_ville'],$_POST['livraison_code_postal'],$_POST['livraison_pays'],$_POST['livraison_region'],$_POST['livraison_email'],$_POST['livraison_telephone'],$_POST['livraison_order_note']);
						$var2=new LivraisonManage();
						$var2->ajouter_livraison($var);
						if($id_commande!=0)
						{

							if ($_POST['livraison']==1)
							{
								$var=new Livraison($_SESSION['id'],$id_commande,$_POST['livraison_nom'],$_POST['livraison_prenom'],$_POST['livraison_societe'],$_POST['livraison_adresse1'],$_POST['livraison_adresse2'],$_POST['livraison_ville'],$_POST['livraison_code_postal'],$_POST['livraison_pays'],$_POST['livraison_region'],$_POST['livraison_email'],$_POST['livraison_telephone'],$_POST['livraison_order_note']);
								$var2=new LivraisonManage();
								$var2->ajouter_livraison($var);
							}
							else
							{
								$var=new Livraison($_SESSION['id'],$id_commande,$_POST['nom'],$_POST['prenom'],"",$_POST['adresse'],$_POST['adresse2'],$_POST['ville'],$_POST['zip'],"tunisie","","",0,"");
								$var2=new LivraisonManage();
								$var2->ajouter_livraison($var);
							}
							if ($commC->ajouterPaiement($id_commande,$_POST['total'],$token))
								echo "<script type='text/javascript'>document.location.replace('confirmerCommande.php');</script>";
						}
					}
					else if (isset($_POST['paiement']))
					{
					if ($_POST['paiement']=='livraison'){
						$comm=new Commande($_SESSION['id'],$_POST['total'],$_POST['nom'],$_POST['prenom'],$_POST['adresse'],$_POST['adresse2'],$_POST['ville'],$_POST['zip']);
						$commC= new CommandeC();
						$id_commande=$commC->confirmerCommande($comm,"à la livraison");
						if($id_commande!=0)
						{

							if ($_POST['livraison']==1)
							{
								$var=new Livraison($_SESSION['id'],$id_commande,$_POST['livraison_nom'],$_POST['livraison_prenom'],$_POST['livraison_societe'],$_POST['livraison_adresse1'],$_POST['livraison_adresse2'],$_POST['livraison_ville'],$_POST['livraison_code_postal'],$_POST['livraison_pays'],$_POST['livraison_region'],$_POST['livraison_email'],$_POST['livraison_telephone'],$_POST['livraison_order_note']);
								$var2=new LivraisonManage();
								$var2->ajouter_livraison($var);
							}
							else
							{
								$var=new Livraison($_SESSION['id'],$id_commande,$_POST['nom'],$_POST['prenom'],"",$_POST['adresse'],$_POST['adresse2'],$_POST['ville'],$_POST['zip'],"tunisie","","",0,"");
								$var2=new LivraisonManage();
								$var2->ajouter_livraison($var);
							}
							echo "<script type='text/javascript'>document.location.replace('confirmerCommande.php');</script>";
						}
						}
						else if ($_POST['paiement']=='carte'){
				?>
			</header>
			<!-- header-area-end -->
			<!-- breadcrumbs-area-start -->
			<div class="breadcrumbs-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="breadcrumb-content text-center">
								<h2>404</h2>
								<ul>
									<li><a href="#">Home /</a></li>
									<li class="active"><a href="#">404</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- breadcrumbs-area-end -->
			<!-- shop-main-area-start -->
			<div class="shop-main-area">
				<!-- section-element-area-start -->
				<div class="section-element-area">
					<div class="container">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="entry-header text-center mb-20">
									<img src="img/payment-stripe.png" alt="Powered by Stripe" />
								</div>
								<div class="entry-content text-center mb-30">
									<form method="post" action="paiement.php" name="approuve">
									<a href="passerCommande.php" class="annuler">Annuler</a>
									<script
																		    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
																		    data-key="pk_test_q7Dy8VDhH4I9kRddnDfGQ842"
																		    data-amount="<?php $total=$_POST['total']*100; echo $total ?>"
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
																	    <input type="hidden" name="app" value="1">
																	    <?php
																	    	echo "<input type='hidden' name='total' value=".$_POST['total'].">";
																			echo "<input type='hidden' name='nom' value=".$_POST['nom'].">";
																			echo "<input type='hidden' name='prenom' value=".$_POST['prenom'].">";
																			echo "<input type='hidden' name='adresse' value=".$_POST['adresse'].">";
																			echo "<input type='hidden' name='adresse2' value=".$_POST['adresse2'].">";
																			echo "<input type='hidden' name='ville' value=".$_POST['ville'].">";
																			echo "<input type='hidden' name='zip' value=".$_POST['zip'].">";
																	    ?>
									<button type="submit" name="approuve">Payer</button>
								</div>
								</form>
								<?php } }?>
							</div>
						</div>
					</div>
				</div>
				<!-- section-element-area-end -->
			</div>
			<!-- shop-main-area-end -->
			<!-- newslatter-area-start -->
			<div class="newslatter-area pt-80">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="bt-top ptb-80">
								<div class="newlatter-content text-center">
									<h6>Special Ofers For Subscribers</h6>
									<h3>Ten Percent Member Discount</h3>
									<p>Subscribe to our newsletters now and stay up to date with new collections, the latest lookbooks and exclusive offers.</p>
									<form action="#">
										<input type="text" placeholder="Enter you email address here..."/>
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
