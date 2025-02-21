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
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
		<!-- page-wraper-start -->
		<div id="page-wraper">
			<!-- header-area-start -->
			<header>
				<?php  include 'header.php'; ?>
			</header>
			<!-- header-area-end -->
			<!-- slider-area-start -->
			<?php include_once '../core/produitC.php';

			if (isset($_GET['rate'])&&isset($_SESSION['id']))
				{
					$prodC1=new ProduitManage();
					$rate=$prodC1->addRating($_GET['id'],$_GET['rate']+1,$_SESSION['id']);
				} ?>
			<div class="slider-area">
				<div id="slider">
					<img src="img/slider/slider1.jpg" alt="slider-img" title="#caption1" />
					<img src="img/slider/slider2.jpg" alt="slider-img" title="#caption2" />
					<img src="img/slider/slider3.jpg" alt="slider-img" title="#caption3" />
				</div>
				<div class="nivo-html-caption" id="caption1" >
					<div class="container">
						<div class="row">
							<div class="col-lg-12">
								<div class="slider-text">
									<h5 class="wow fadeInLeft" data-wow-delay=".3s">clothing</h5>
									<h5 class="wow fadeInLeft" data-wow-delay=".5s">new collection</h5>
									<h2 class="wow fadeInRight" data-wow-delay=".7s">New arrivals!</h2>
									<h1 class="wow fadeInRight" data-wow-delay=".9s">amazing mimosa</h1>
									<p class="wow fadeInLeft" data-wow-delay="1.3s">We crack for this purely rock style with stitched quills in relief and metallic <br /> hardware.</p>
									<a href="#" class=" wow bounceInRight" data-wow-delay="1.5s">read more</a>
								</div>
							</div><!-- col -->
						</div><!-- row -->
					</div><!-- container -->
				</div>
				<div class="nivo-html-caption" id="caption2" >
					<div class="container">
						<div class="row">
							<div class="col-lg-12">
								<div class="slider-text">
									<h5 class="wow fadeInLeft" data-wow-delay=".3s">handbag</h5>
									<h5 class="wow fadeInLeft" data-wow-delay=".5s">new collection</h5>
									<h2 class="wow fadeInRight" data-wow-delay=".7s">Clean & Elegant! </h2>
									<h1 class="wow fadeInRight" data-wow-delay=".9s">Black Handbag</h1>
									<p class="wow fadeInLeft" data-wow-delay="1.3s">BlackBird collection of minimal, sleek and functional Carryalls were designed <br /> with creatives in mind.</p>
									<a href="#" class=" wow bounceInRight" data-wow-delay="1.5s">read more</a>
								</div>
							</div><!-- col -->
						</div><!-- row -->
					</div><!-- container -->
				</div>
				<div class="nivo-html-caption" id="caption3" >
					<div class="container">
						<div class="row">
							<div class="col-lg-12">
								<div class="slider-text">
									<h5 class="wow fadeInLeft" data-wow-delay=".3s">handbag</h5>
									<h5 class="wow fadeInLeft" data-wow-delay=".5s">new collection</h5>
									<h2 class="wow fadeInRight" data-wow-delay=".7s">amazing product! </h2>
									<h1 class="wow fadeInRight" data-wow-delay=".9s">backpack</h1>
									<p class="wow fadeInLeft" data-wow-delay="1.3s">Inspired by the Kastrup backpack, but reimagined for the modern woman, the <br /> Piper  marries the functionality our backpacks are known for with more feminine <br /> proportions and details. </p>
									<a href="#" class=" wow bounceInRight" data-wow-delay="1.5s">read more</a>
								</div>
							</div><!-- col -->
						</div><!-- row -->
					</div><!-- container -->
				</div>
			</div>
			<!-- slider-area-end -->
			<!-- founder-area-start -->
			<div class="founder-area ptb-80">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="founder-description text-center">
								<h3>Qui sommes nous</h3>
								<h1>Bienvenue a IDA OPTIQUE</h1>
								<img src="img/logo/IDA-OPTIQUE.jpg" alt="banner" />
								<p>Chez IDA Optique, vous trouverez sans aucun doute les lunettes qui vous conviennent grâce à notre large sélection de montures.﻿
								<br>
								Nous serons heureux de vous offrir nos conseils personnalisés afin de choisir le type de verres qui correspond au mieux à vos besoins. Chaque porteur est unique, son équipement aussi. C'est pourquoi chez nous, vous repartirez avec un équipement dont les verres sont adaptés aussi bien à votre correction qu'à la monture choisie. ﻿</p>
								
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- founder-area-end -->
			<!-- banner-area-start -->

			<!-- banner-area-end -->
			<!-- feature-product-area-start -->
			<div class="feature-product-area ptb-80">	
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="section-title mb-30 text-center">
								<h2>Nos Produits</h2>
								<p>Découvrez notre large gamme de lunettes pour hommes et femmes.</p>
							</div>
						</div>
						<div class="col-lg-12">
							<!-- tab-menu-start -->
							<div class="tab-menu mb-50 text-center">
								<ul>
									<li class="active"><a href="#Clothing" data-toggle="tab">Optique</a></li>
									<li><a href="#Handbags"  data-toggle="tab">Solaire</a></li>
								</ul>
							</div>
							<!-- tab-menu-end -->
						</div>
					</div>		
					<!-- tab-area-start -->
					<div class="tab-content">
						<div class="tab-pane active" id="Clothing">
							<div class="row">
								<div class="product-active">	
									<?php 
										include_once '../core/produitC.php';
                                        $pro= new ProduitManage();
                                        $result=$pro->afficherProduitCategorie("optique",1);
                                        include_once '../core/visiteurM.php';
                                        $vis2=new VisiteurManage();
										date_default_timezone_set('GMT');
										$TIME = date("d-m-Y H:i:s"); 
										//$PP = getenv("REMOTE_ADDR");
										//$J7 = simplexml_load_file("http://www.geoplugin.net/xml.gp?ip=$PP");
										//$COUNTRY = $J7->geoplugin_countryName ; 
										$COUNTRY= "Tunisie";
										//$_SESSION['COUNTRYIP'] = $COUNTRY;
										//$COUNTRYCODE = $J7->geoplugin_countryCode ; 
										$ip = getenv("REMOTE_ADDR");
										$vis=new Visiteur($ip,$COUNTRY,$TIME);
										$vis2->ajouterVisiteur($vis);

                                        
									
									?>
									<?php

                                    foreach ($result as $row) 
                                    {
                                        $id=$row['produit_id'];
                                        
										$description=$row['produit_description'];
										$nom=$row['produit_nom'];
										$categorie=$row['produit_categorie'];
										$prix=$row['produit_prix'];
										$quantite=$row['produit_qte'];
                                    	?>	
									<div class="col-lg-12">
										<!-- product-wrapper-start -->
										<div class="product-wrapper">
										<div class="product-img"  style="height: 184px; width: 262px; max-height: 184px; max-width: 262px;">
											<a href="<?php echo "detailsProduit.php?id=".$id ?>">
												<img src="<?php echo "img/product/".$row['nom']; ?>" alt="product" class="primary"/>
												<img src="<?php echo "img/product/".$row['nom']; ?>" alt="product" class="secondary"/>
											</a>
											
											<div class="product-icon">
												<a href="ajouterPanier.php?id_produit=<?php echo $row['produit_id'] ?>" data-toggle="tooltip" title="Ajouter au panier"><i class="icon ion-bag"></i></a>
												<a href="comparateur.php?id=<?php echo $row['produit_id'] ?>" data-toggle="tooltip" title="Comparer ce produit"><i class="icon ion-android-options"></i></a>
												<a href="#" data-toggle="modal" data-target="#mymodal" title="Quick View"><i class="icon ion-android-open"></i></a>
											</div>
										</div>
										<div class="product-content pt-20">
											<div class="manufacture-product">
												<a href="#"><?php echo $row['produit_categorie'] ?></a>
												<?php $prodC=new ProduitManage();
													$rate=$prodC->getRating($row['produit_id']);
													foreach ($rate as $rate1) {
														$moy=$rate1['r1'];
													}
													 ?>
												<div class="rating">
													<ul>
														<?php for ($i=0;$i<$moy;$i++) {?>
															<li><a href="<?php echo "index.php?id=".$row['produit_id']."&rate=".$i ?>"><i class="fa fa-star"></i></a></li>
															<?php } for ($i=$moy;$i<5;$i++) {?>
															<li><a href="<?php echo "index.php?id=".$row['produit_id']."&rate=".$i ?>"><i class="fa fa-star-o"></i></a></li>
															<?php }?>
													</ul>
												</div>
											</div>
											<h2><a href="<?php echo "detailsProduit.php?id=".$row['produit_id'] ?>"><?php echo $row['produit_nom'] ?></a></h2>
											<div class="price">
												<ul>
													<li class="new-price"><?php echo $row['produit_prix']; echo "  DT" ?></li>
												</ul>
											</div>
										</div>
									</div>
										<!-- product-wrapper-end -->
									</div>
									<?php } ?>
									
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="Handbags">
							<div class="row">
								<div class="product-active">
									<?php 
										include_once '../core/produitC.php';
                                        $pro= new ProduitManage();
                                        $result=$pro->afficherProduitCategorie("solaire",1);
                                        
									
									?>
									<?php

                                    foreach ($result as $row) 
                                    {
                                        $id=$row['produit_id'];
                                        
										$description=$row['produit_description'];
										$nom=$row['produit_nom'];
										$categorie=$row['produit_categorie'];
										$prix=$row['produit_prix'];
										$quantite=$row['produit_qte'];
                                    	?>	
									<div class="col-lg-12">
										<!-- product-wrapper-start -->
										<div class="product-wrapper">
										<div class="product-img"  style="height: 184px; width: 262px; max-height: 184px; max-width: 262px;">
											<a href="<?php echo "detailsProduit.php?id=".$id ?>">
												<img src="<?php echo "img/product/".$row['nom']; ?>" alt="product" class="primary"/>
												<img src="<?php echo "img/product/".$row['nom']; ?>" alt="product" class="secondary"/>
											</a>
											
											<div class="product-icon">
												<a href="ajouterPanier.php?id_produit=<?php echo $row['produit_id'] ?>" data-toggle="tooltip" title="Ajouter au panier"><i class="icon ion-bag"></i></a>
												<a href="comparateur.php?id=<?php echo $row['produit_id'] ?>" data-toggle="tooltip" title="Comparer ce produit"><i class="icon ion-android-options"></i></a>
												<a href="#" data-toggle="modal" data-target="#mymodal" title="Quick View"><i class="icon ion-android-open"></i></a>
											</div>
										</div>
										<div class="product-content pt-20">
											<div class="manufacture-product">
												<a href="#"><?php echo $row['produit_categorie'] ?></a>
												<?php $prodC=new ProduitManage();
													$rate=$prodC->getRating($row['produit_id']);
													foreach ($rate as $rate1) {
														$moy=$rate1['r1'];
													}
													 ?>
												<div class="rating">
													<ul>
														<?php for ($i=0;$i<$moy;$i++) {?>
															<li><a href="<?php echo "index.php?id=".$row['produit_id']."&rate=".$i ?>"><i class="fa fa-star"></i></a></li>
															<?php } for ($i=$moy;$i<5;$i++) {?>
															<li><a href="<?php echo "index.php?id=".$row['produit_id']."&rate=".$i ?>"><i class="fa fa-star-o"></i></a></li>
															<?php }?>
													</ul>
												</div>
											</div>
											<h2><a href="<?php echo "detailsProduit.php?id=".$row['produit_id'] ?>"><?php echo $row['produit_nom'] ?></a></h2>
											<div class="price">
												<ul>
													<li class="new-price"><?php echo $row['produit_prix']; echo "  DT" ?></li>
												</ul>
											</div>
										</div>
									</div>
										<!-- product-wrapper-end -->
									</div>
									<?php } ?>
									
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="Shoes">
							<div class="row">
								<div class="product-active">
									<div class="col-lg-12">
										<!-- product-wrapper-start -->
										<div class="product-wrapper">
											<div class="product-img"  style="height: 184px; width: 262px; max-height: 184px; max-width: 262px;">
												<a href="#">
													<img src="img/product/21.jpg" alt="product" class="primary" style="max-height: 184px; max-width: 262px;"/>
													<img src="img/product/22.jpg" alt="product" class="secondary" style="max-height: 184px; max-width: 262px;"/>
												</a>
												<span class="sale">sale</span>
												<div class="product-icon">
													<a href="#" data-toggle="tooltip" title="Add to Cart"><i class="icon ion-bag"></i></a>
													<a href="#" data-toggle="tooltip" title="Compare this Product"><i class="icon ion-android-options"></i></a>
													<a href="#" data-toggle="modal" data-target="#mymodal" title="Quick View"><i class="icon ion-android-open"></i></a>
												</div>
											</div>
											<div class="product-content pt-20">
												<div class="manufacture-product">
													<a href="#">H&M </a>
													<?php $prodC=new ProduitManage();
													$rate=$prodC->getRating($row['produit_id']);
													foreach ($rate as $rate1) {
														$moy=$rate1['r1'];
													}
													 ?>
													<div class="rating">
														<ul>
															<?php for ($i=0;$i<$moy;$i++) {?>
															<li><a href="<?php echo "listeProduits.php?categorie=".$row['produit_categorie']."&id=".$row['produit_id']."&rate=".$i ?>"><i class="fa fa-star"></i></a></li>
															<?php } for ($i=$moy;$i<5;$i++) {?>
															<li><a href="<?php echo "listeProduits.php?categorie=".$row['produit_categorie']."&id=".$row['produit_id']."&rate=".$i ?>"><i class="fa fa-star-o"></i></a></li>
															<?php }?>
														</ul>
													</div>
												</div>
												<h2><a href="product-details.html">Lopo Designs Woolrich Klettersack Backpack</a></h2>
												<div class="price">
													<ul>
														<li class="new-price">$122.00</li>
													</ul>
												</div>
											</div>
										</div>
										<!-- product-wrapper-end -->
									</div>
									
									
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="Accessories">
							<div class="row">
								<div class="product-active">
									
									
								</div>
							</div>
						</div>
					</div>
					<!-- tab-area-end -->
				</div>
		   </div>
			<!-- feature-product-area-end -->
			<!-- testimonial-area-start -->
		<?php 
						include_once 'mapIndex.php';

						 ?>
			<!-- testimonial-area-end -->
			<!-- arrivals-area-start -->
			<div class="arrivals-area ptb-80">
				<div class="container">
						
					<!-- tab-area-start -->
				
					<!-- tab-area-end -->
				</div>
		   </div>
			<!-- arrivals-area-end -->
			<!-- banner-area-start -->
			
			<!-- banner-area-end -->
			<!-- banner-area-2-start -->
			<div class="banner-area-2">
				<div class="container">
					<div class="row">
						<div class="br-bottom ptb-80">
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
								<!-- single-banner-2-start -->
								
								<!-- single-banner-2-end -->
							</div>
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
								<!-- single-banner-2-start -->
								
								<!-- single-banner-2-end -->
							</div>
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
								<!-- single-banner-2-start -->
								
								<!-- single-banner-2-end -->
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- banner-area-2-end -->
			<!-- blog-area-start -->
			<!-- blog-area-end -->

			<!-- newslatter-area-start -->
			<?php  include 'newsletter.php'; ?>
			<!-- newslatter-area-end -->

			
			<!-- footer-area-start -->
			<footer>
				<div class="footer-area ptb-40">
					<div class="container">
						<div class="row">
							<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
								<!-- footer-logo-start -->
								<div class="footer-logo mb-3">
									<a href="#"><img src="img/logo/IDA-OPTIQUE.jpg" alt="logo" /></a>
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
			<!-- modal-area-start -->
			<div class="modal-area">
				<!-- single-modal-start -->
				<div class="modal fade" id="mymodal" tabindex="-1" role="dialog">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<div class="modal-img">
									<div class="single-img">
										<img src="img/product/2.jpg" alt="hat" class="primary" />
									</div>
								</div>
								<div class="model-text">
									<h2><a href="#">Pyrolux Pyrostone</a> </h2>
									<div class="product-rating">
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star"></i></a>
										<a href="#"><i class="fa fa-star-o"></i></a>
									</div>
									<div class="price-rate">
										<span class="old-price"><del>$30.00</del></span>
										<span class="new-price">$28.00</span>
									</div>
									<div class="short-description mt-20">
										<p>Bacon ipsum dolor sit amet ut nostrud chuck, voluptate adipisicing veniam kielbasa fugiat ex spare ribs. Incididunt sint officia non cow, ut et. Cillum porchetta tongue occaecat laborum bacon aliquip fatback flank dolore short loin ball tip bresaola deserunt dolor. Shoulder fugiat ut in ut tail swine dolore, capicola ullamco beef occaecat meatball. Laboris turkey in et chuck deserunt ad incididunt do.</p>
									</div>
									<form action="#">
										<input type="number" value="1"/>
										<button type="submit">Add to cart</button>
									</form>
									<div class="product-meta">
										<span>
											Categories: 
											<a href="#">albums</a>,<a href="#">Music</a>
										</span>
										<span>
											Tags: 
											<a href="#">albums</a>,<a href="#">Music</a>
										</span>
									</div>
									<!-- social-icon-start -->
									<div class="social-icon mt-20">
										<ul>
											<li><a href="#" data-toggle="tooltip" title="Share on Facebook"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#" data-toggle="tooltip" title="Share on Twitter"><i  class="fa fa-twitter"></i></a></li>
											<li><a href="#" data-toggle="tooltip" title="Email to a Friend"><i class="fa fa-envelope-o"></i></a></li>
											<li><a href="#" data-toggle="tooltip" title="Pin on Pinterest"><i class="fa fa-pinterest"></i></a></li>
											<li><a href="#" data-toggle="tooltip" title="Share on Google+"><i class="fa fa-google-plus"></i></a></li>
										</ul>
									</div>
									<!-- social-icon-end -->
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- single-modal-end -->
			</div>
			<!-- modal-area-end -->
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

