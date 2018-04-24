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
    <body class="product-details">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
		<!-- page-wraper-start -->
		<div id="page-wraper">
			<!-- header-area-start -->
			<header>
				<?php include_once 'header.php'; ?>
			</header>
			<!-- header-area-end -->
			<!-- breadcrumbs-area-start -->
			<div class="breadcrumbs-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="breadcrumb-content text-center">
								<h2>product details</h2>
								<ul>
									<li><a href="#">Home /</a></li>
									<li class="active"><a href="#">product details</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- breadcrumbs-area-end -->
			<!-- shop-main-area-start -->
					

			<div class="shop-main-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<!-- zoom-area-start -->

													<?php

                                        include_once '../core/produitC.php';

                                        include_once '../core/imageC.php';

                                        

                                        
                                        
                                        
                                        $pro= new ProduitManage();
                                        $result=$pro->recupererProduit2($_GET['id']);
                                        

                                 

                                    foreach ($result as $row) 
                                    {
                                    	$p=new ImagesManage();
                                        $list=$p->afficherImage($_GET['id']);
                                        $id=$row['produit_id'];
                                        
										$description=$row['produit_description'];
										$nom=$row['produit_nom'];
										$categorie=$row['produit_categorie'];
										$prix=$row['produit_prix'];
										$quantite=$row['produit_qte'];
                                    	?>
                                    
							
							<div class="zoom-area mb-3">

								 <?php
                                    foreach ($list as $val) 
                                    {
                                    	if (!isset($first))
                                    	{
                                    		$first="img/tsawer/".$val['nom'];
									?> <img id="zoompro" src="<?php echo "img/tsawer/".$val['nom']; ?>" data-zoom-image="<?php echo $first; ?>	" alt="zoom"/><?php 
                                    	}
                                    	?>

								
								
								<div id="gallery" class="mt-30">
									
								
									  <a href="#" data-image="<?php echo "img/tsawer/".$val['nom']; ?>" data-zoom-image="<?php echo "img/tsawer/".$val['nom']; ?>">
										<img src="<?php echo "img/tsawer/".$val['nom']; ?>" alt="zoom"/>
										</a>
										

								</div>
								<?php } ?>
							</div>

							
							
							

							<!-- zoom-area-end -->
						</div>

			
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<!-- zoom-product-details-start -->

                                    
							<div class="zoom-product-details">
								<h1><?php echo $nom?></h1>
								<div class="main-area mtb-30">
									
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
								<div class="price">
									<ul>
										<li class="new-price"><?php echo $prix ; echo "  DT"?></li>
									</ul>
									

								</div>
								<div class="name">
									<ul>
										<li> Description: <?php echo $description ?></li>
									</ul>
									
								</div>
							
								<div class="list-unstyled">
									<ul>
										<li>Categorie: <a href="#"><?php echo $categorie ?></a></li>
										<li>ID-produit: <a href="#"><?php echo $id ?></a></li>
										
										
									</ul>

								</div>

								<div class="catagory-select mb-30">
									<h3>options valables</h3>
									<form action="#">
										<label for="#">Select:</label>
										<select  class="sorter-options" data-role="sorter">
											<option selected="selected" value="Lowest">Blue</option>
											<option value="Highest">White</option>
											<option value="Product">Green</option>
										</select>
									</form>
								</div>

								<form action="ajouterPanier.php" method="post">	
									<div class="quality-button">
										<input class="qty" type="text" value="1" name="qte" />
										<input type="button" value="+" data-max="1000"  class="plus" />
										<input type="button" value="-" data-min="1" class="minus" />
										<input type="hidden" name="id_produit" value="<?php echo $id ; ?>">
									</div>

									<button type="submit">Ajouter au panier</button>
									<div class="product-icon">
										<a href="<?php echo "ajouterFavoris.php?id=".$_GET['id']; ?> " data-toggle="tooltip" title="Ajouter au favoris"><img src="img/star.png"></a>
										<a href="<?php echo "comparateur.php?id=".$_GET['id']; ?>" data-toggle="tooltip" title="Compare this Product"><i class="icon ion-android-options"></i></a>
									</div>
								</form>
							</div>
							<?php } ?>


							<!-- zoom-product-details-end -->
						</div>
					</div>
					<div class="row">
						<!-- products-detalis-area-start -->
						<div class="products-detalis-area pt-80">
							<div class="col-lg-12">
								<!-- tab-menu-start -->
								<div class="tab-menu mb-30 text-center">
									<ul>
										<li class="active"><a href="#Description" data-toggle="tab">Description</a></li>
										<li><a href="#Reviews"  data-toggle="tab">Reviews (0)</a></li>
										<li><a href="#Tags" data-toggle="tab">Add Tags</a></li>
									</ul>
								</div>
								<!-- tab-menu-end -->
							</div>
							<!-- tab-area-start -->
							<div class="tab-content">
								<div class="tab-pane active" id="Description">
									<div class="col-lg-12">
										<div class="tab-description">
											<p><?php echo $description;?>.</p>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="Reviews">
									<div class="col-lg-12">
										<div class="reviews-area">
											<h3>Reviews</h3>
											<p>Be the first to review “Apple 16Gb iPad Mini” </p>
											<div class="rating-area mb-10">
												<h4>Your Rating</h4>
												<a href="#"><i class="fa fa-star" ></i></a>
												<a href="#"><i class="fa fa-star" ></i></a>
												<a href="#"><i class="fa fa-star" ></i></a>
												<a href="#"><i class="fa fa-star" ></i></a>
											</div>
											<div class="comment-form mb-10">
												<label>Your Review</label>
												<textarea name="comment" id="comment" cols="20" rows="7"></textarea>
											</div>
											<div class="comment-form-author mb-10">
												<label>Name</label>
												<input type="text" />
											</div>
											<div class="comment-form-email mb-10">
												<label>email</label>
												<input type="text" />
											</div>
											<button type="submit">submit</button>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="Tags">
									<div class="col-lg-12">
										<div class="tab-description">
											<p> Custom Tab Content here. <br />
											Tail sed sausage magna quis commodo swine. Aliquip strip steak esse ex in ham hock fugiat in. Labore velit pork belly eiusmod ut shank doner capicola consectetur landjaeger fugiat excepteur short loin. Pork belly laboris mollit in leberkas qui. Pariatur swine aliqua pork chop venison veniam. Venison sed cow short loin bresaola shoulder cupidatat capicola drumstick dolore magna shankle. </p>
										</div>
									</div>
								</div>
							</div>
							<!-- tab-area-end -->
						</div>
						<!-- products-detalis-area-end -->
					</div>
				</div>
			</div>
			<!-- shop-main-area-end -->
			<!-- arrivals-area-start -->
			<div class="arrivals-area ptb-80">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="section-title mb-30 text-center">
								<h2>Related Products</h2>
								<p> Order online and have your products delivered to your closest store for free </p>
							</div>
						</div>
					</div>	
					<!-- tab-area-start -->
					<div class="tab-content">
						<div class="row">
							<div class="product-active">

								<?php 
                                        $pro= new ProduitManage();
                                        $result=$pro->afficherProduit();
                                        
									
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
										<div class="product-img">
											<a href="<?php echo "detailsProduit.php?id=".$row['produit_id'] ?>">
												<img src="<?php echo "img/tsawer/".$row['nom']; ?>" alt="product" class="primary"/>
												<img src="<?php echo "img/tsawer/".$row['nom']; ?>" alt="product" class="secondary"/>
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
															<li><a href="<?php echo "listeProduits.php?categorie=".$row['produit_categorie']."&id=".$row['produit_id']."&rate=".$i ?>"><i class="fa fa-star"></i></a></li>
															<?php } for ($i=$moy;$i<5;$i++) {?>
															<li><a href="<?php echo "listeProduits.php?categorie=".$row['produit_categorie']."&id=".$row['produit_id']."&rate=".$i ?>"><i class="fa fa-star-o"></i></a></li>
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
					<!-- tab-area-end -->
				</div>
			</div>
			<!-- arrivals-area-end -->

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
										<button type="submit">Ajouter</button>
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
