<!doctype html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script>
	function changerQte(id)
	{
		var rows = document.getElementById('liste').getElementsByTagName("tr").length-1;
		var total=0;
		$.post(
			'mAjPanier.php',
			{
				id_produit: document.getElementById('form'+id).id_produit.value,
				qte: document.getElementById('form'+id).qte.value
			},
			function()
			{
				document.getElementById('prixProd'+id).innerHTML=document.getElementById('form'+id).qte.value*document.getElementById('form'+id).prix.value+" DT";
				for (var i = 0; i < rows; i++) {
					total+=document.getElementById('form'+i).qte.value*document.getElementById('form'+i).prix.value;
				}
				document.getElementById('total').innerHTML=total+" DT";
			}
			)
	}
	function checkCoupon()
	{
		console.log(document.getElementById('conf'));
		$.post(
			'checkCoupon.php',
			{
				coupon: document.getElementById('coup').coupon.value
			},
			function(data)
			{
				document.getElementById('coup').reduction.value=data;
				if (data!=0)
					document.getElementById('conf').textContent="Vous bénéficiez d'une réduction de "+data+"%";
				else
					document.getElementById('conf').textContent="Ce coupon n'est pas valable";
			}
			)
	}
</script>
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
    <?php include_once '../core/panierC.php' ;
    ?>
    <body class="cart">
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
								<h2>cart</h2>
								<ul>
									<li><a href="#">Home /</a></li>
									<li class="active"><a href="#">cart</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- breadcrumbs-area-end -->
			<!-- shop-main-area-start -->
			<div class="shop-main-area">
				<!-- cart-main-area-start -->
				<?php 
											$pan = new panierC();
											if (isset($_SESSION['id']))
											{
												$nb = $pan->calculPanier($_SESSION['id']);
											}
											else if (!isset($_SESSION['panier']))
											{
												$pan->creationPanier();
												$nb = count($_SESSION['panier']['id_produit']);
											}
											else
											{
												$nb = count($_SESSION['panier']['id_produit']);
											}
											if ($nb!=0){

					?>
				<div class="cart-main-area">
					<div class="container">
						<div class="row">
							<div class="col-lg-12">
									<div class="table-content table-responsive">
										<table id="liste">
											<thead>
												<tr>
													<th class="product-thumbnail">Image</th>
													<th class="product-name">Produit</th>
													<th class="product-price">Prix</th>
													<th class="product-quantity">Quantité</th>
													<th class="product-subtotal">Total</th>
													<th class="product-remove">Supprimer</th>
												</tr>
											</thead>
											<tbody>
												<?php 
														$total=0;
														$i=0;
														if (isset($_SESSION['id']))
														{
															$listePanier=$pan->afficherPanier($_SESSION['id']);
														?>
													
														<?php
														foreach($listePanier as $row){
													?>
													<tr>
													<form method="post" action="mAjPanier.php" role="form" id="<?php echo 'form'.$i ?>">
													<td class="product-thumbnail"><a href="#"><img src="<?php echo  "img/product/".$row['nom'] ?>" alt="man" /></a>
														
													</td>
													<td class="product-name"><a href="#"><?php echo $row['produit_nom'] ?></a></td>
													<td class="product-price"><span class="amount"><?php echo $row['produit_prix'] ?> DT</span></td>
													<td class="product-quantity"><input type="number" name="qte" min="0" value="<?php echo $row['qte'] ?>" onChange="changerQte(<?php echo $i ?>)"></td>
													<td class="product-subtotal"><span id="<?php echo 'prixProd'.$i ?>"><?php $total +=$row['qte']*$row['produit_prix']; echo $row['qte']*$row['produit_prix']; ?> DT</span></td>
													<td class="product-remove"><a href="<?php echo  "supprimerProduitPanier.php?id_produit=".$row['id_produit'] ?>"><i class="fa fa-times"></i></a></td>
															<input type="hidden" name="id_produit" value="<?php echo $row['id_produit'] ?>">
															<input type="hidden" name="id_client" value="<?php echo $_SESSION['id'] ?>">
															<input type="hidden" name="prix" value="<?php echo $row['produit_prix'] ?>">
													</form>
												</tr>
												<?php $i++; }}
												else if (count($_SESSION['panier']['id_produit'])>0)
												{
													$nbArticles=count($_SESSION['panier']['id_produit']);
																
															for ($i=0 ;$i < $nbArticles ; $i++)
															{
																$listePanier=$pan->afficherPanierSession($_SESSION['panier']['id_produit'][$i]);
																foreach ($listePanier as $row) { ?>
																<tr>
													<form method="post" action="mAjPanier.php" role="form" id="<?php echo 'form'.$i ?>">
													<td class="product-thumbnail"><a href="#"><img src="<?php echo  "img/product/".$row['nom'] ?>" alt="man" /></a>
														
													</td>
													<td class="product-name"><a href="#"><?php echo $row['produit_nom'] ?></a></td>
													<td class="product-price"><span class="amount"><?php echo $row['produit_prix'] ?> DT</span></td>
													<td class="product-quantity"><input type="number" name="qte" min="0" value="<?php echo $_SESSION['panier']['qte'][$i] ?>" onChange="changerQte(<?php echo $i ?>)"></td>
													<td class="product-subtotal" name="prixProd"><span id="<?php echo 'prixProd'.$i ?>"><?php $total +=$_SESSION['panier']['qte'][$i]*$row['produit_prix']; echo $_SESSION['panier']['qte'][$i]*$row['produit_prix']; ?> DT</span></td>
													<td class="product-remove"><a href="<?php echo  "supprimerProduitPanier.php?id_produit=".$row['produit_id'] ?>"><i class="fa fa-times"></i></a></td>
															<input type="hidden" name="id_produit" value="<?php echo $row['produit_id'] ?>">
															<input type="hidden" name="prix" value="<?php echo $row['produit_prix'] ?>">
													</form>
												</tr>
												<?php 
												}}}
												?>
											</tbody>
										</table>
									</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
								<div class="buttons-cart mb-30 mt-3">
									<ul>
										<li><a href="listeProduits.php">Continuer les achats</a></li>
									</ul>
								</div>
								<div class="coupon">
									<h3>Coupon</h3>
									<p>Enterez un coupon si vous en avez: </p>
									<form action="" id="coup">
										<input type="text" placeholder="Code coupon" name="coupon">
										<a onclick="checkCoupon()">Appliquer</a>
										<input type="hidden" name="reduction">
									</form>
								</div>
										<span id="conf"></span>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
								<div class="cart_totals">
									<h2>Total du panier</h2>
									<table>
										<tbody>
											<tr class="order-total">
												<th>Total</th>
												<td>
													<strong>
														<span class="amount" id="total"><?php echo $total ;?> DT</span>
													</strong>
												</td>
											</tr>
										</tbody>
									</table>
									<div class="wc-proceed-to-checkout">
										<a href="passerCommande.php">Passer la commande</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php } else { ?>
					<div class="page-not-found">
						<div class="section-element-area">
						<div class="container">
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="entry-header text-center mb-20">
										<p>Votre panier est vide</p>
									</div>
									<div class="entry-content text-center mb-30">
										<a href="listeProduits.php?categorie=optique&page=1">Découvrez nos produits</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div><?php } ?>
				<!-- cart-main-area-end -->
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
