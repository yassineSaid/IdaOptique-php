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
    <body class="shop">
    	<div class="container" style="width:800px;">
   
  </div>
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
			<!-- breadcrumbs-area-start -->
			<?php  
			include_once '../core/produitC.php';
         	include_once '../core/imageC.php';
				if (isset($_GET['rate']))
				{
					$prodC1=new ProduitManage();
					$rate=$prodC1->addRating($_GET['id'],$_GET['rate']+1);
				}
			?>
			<div class="breadcrumbs-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="breadcrumb-content text-center">
								<h2>shop</h2>
								<ul>
									<li><a href="#">Home /</a></li>
									<li class="active"><a href="#">shop</a></li>
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
						<div class="col-lg-12">
							<!-- page-bar-start -->
							<div class="page-bar">
								<div class="shop-tab">
									<!-- tab-menu-start -->
									<div class="tab-menu-3">
										<ul>
											<li class="active"><a href="#th" data-toggle="tab"><i class="fa fa-list"></i></a></li>
											<li><a href="#list"  data-toggle="tab"><i class="fa fa-th"></i></a></li>
										</ul>
									</div>
									<!-- tab-menu-end -->
									<!-- toolbar-sorter-start -->
									<div class="toolbar-sorter">
										<select  class="sorter-options" data-role="sorter">
											<option selected="selected" value="Lowest">Sort By: Default</option>
											<option value="Highest">Sort By: Name (A - Z)</option>
											<option value="Product">Sort By: Name (Z - A)</option>
										</select>
									</div>
									<!-- toolbar-sorter-end -->
									<!-- toolbar-sorter-2-start -->
									<div class="toolbar-sorter-2">
										<select  class="sorter-options" data-role="sorter">
											<option selected="selected" value="Lowest">Show: 9</option>
											<option value="Highest">Show: 25</option>
											<option value="Product">Show: 50</option>
										</select>
									</div>
									<!-- toolbar-sorter-2-end -->
								</div>
							</div>
							<!-- page-bar-end -->
						</div>
					</div>
					<div class="row">
						<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 pull-right">
							<!-- shop-right-area-start -->
							<div class="shop-right-area mb-40-2 mb-30">
								<!-- tab-area-start -->
								<div class="tab-content">
									<div class="tab-pane active" id="th">
										<!-- product-wrapper-start -->
										
										<!-- product-wrapper-end -->
										<!-- product-wrapper-start -->
										
										<!-- product-wrapper-end -->
										<!-- product-wrapper-start -->
										
										<!-- product-wrapper-end -->
										<!-- product-wrapper-start -->
											<?php

                                        
                                       // include_once 'header.php';
                                        
                                        $pro= new ProduitManage();
                                        if (isset($_GET['filtre'])||isset($_POST['minPriceSel'])) {
                                        	if (isset($_GET['filtre'])) {
                                        $filtre=$pro->recupererFiltre($_GET['filtre']);


//                                        $results=$pro->afficherProduitCategorie($_GET['categorie']);
                                        foreach ($filtre as $fil) {
                                       $min=$fil['min'];
                                       $max=$fil['max'];

                                       
                                        
                                        
									}}
									else
									{
										$min=$_POST['minPriceSel'];
										$max=$_POST['maxPriceSel'];
									}
                                    ?>
                                     <?php

                                        $result=$pro->afficherProduitFiltre($min,$max,$_GET['categorie']);
                                        	
                                        }
                                        else {
                                        if(isset($_POST['rech'])&&$_POST['rech']!="")
                                        {
                                            $result=$pro->rechercherProduit($_POST['rech']);
                                        }
                                        else
                                        $result=$pro->afficherProduitCategorie($_GET['categorie'],$_GET['page']);
                                        
                                        }
                                        
                                        

                                    ?>
                                     <?php

                                    foreach ($result as $row) 
                                    {
                                    	?>
                                    	
										<div class="product-wrapper product-wrapper-3 mb-40">
											<div class="product-img">
												<a href="<?php echo "detailsProduit.php?id=".$row['produit_id'] ?>">
													
													<img src="<?php echo  "img/tsawer/".$row['nom'] ?>" alt="product" class="primary"/>
													<img src="<?php echo  "img/tsawer/".$row['nom'] ?>" alt="product" class="secondary"/>
												</a>
												<div class="product-icon">
													<a href="#" data-toggle="tooltip" title="Add to Cart"><i class="icon ion-bag"></i></a>
													 <a href="comparateur.php?id=<?php echo $row['produit_id'] ?>" data-toggle="tooltip" title="Compare this Product"><i class="icon ion-android-options"></i></a>
													<a href="#" data-toggle="modal" data-target="#mymodal" title="Quick View"><i class="icon ion-android-open"></i></a>
												</div>
											</div>
											<div class="product-content">
												<div class="manufacture-product">
													<a href="#"><?php echo $row['produit_categorie']?></a>
													<?php $prodC=new ProduitManage();
													$rate=$prodC->getRating($row['produit_id']);
													foreach ($rate as $rate1) {
														$moy=$rate1['r1'];
													}
													 ?>
													<div class="rating">
														<ul>
															<?php for ($i=0;$i<$moy;$i++) {?>
															<li><a href="<?php echo "listeProduits.php?categorie=".$row['produit_categorie']."&id=".$row['produit_id']."&rate=".$i."&page=".$_GET['page'] ?>"><i class="fa fa-star"></i></a></li>
															<?php } for ($i=$moy;$i<5;$i++) {?>
															<li><a href="<?php echo "listeProduits.php?categorie=".$row['produit_categorie']."&id=".$row['produit_id']."&rate=".$i ?>"><i class="fa fa-star-o"></i></a></li>
															<?php }?>
														</ul>
													</div>
												</div>
												<h2><a href="<?php echo "detailsProduit.php?id=".$row['produit_id'] ?>"><?php echo $row['produit_nom'] ?></a></h2>
												<div class="price">
													<ul>
														<li class="new-price"><?php echo $row['produit_prix'];echo " DT" ?></li><br>
														<li class="new-price"><?php echo " En Stock";?></li>
													</ul>
												</div>
												<p><?php echo $row['produit_description']?></p>
											</div>
											<div>
												
											</div>
										</div>
										<?php } ?>

										<!-- product-wrapper-end -->
										<!-- product-wrapper-start -->
										
										<!-- product-wrapper-end -->
										<!-- product-wrapper-start -->
										
										<!-- product-wrapper-end -->
										<!-- product-wrapper-start -->
										
										<!-- product-wrapper-end -->
									</div>
									<div class="tab-pane fade" id="list">

										<div class="row">
											<?php

                                        
                                       // include_once 'header.php';
                                        
                                        $pro= new ProduitManage();
                                        if (isset($_GET['filtre'])||isset($_POST['minPriceSel'])) {
                                        	if (isset($_GET['filtre'])) {
                                        $filtre=$pro->recupererFiltre($_GET['filtre']);


//                                        $results=$pro->afficherProduitCategorie($_GET['categorie']);
                                        foreach ($filtre as $fil) {
                                       $min=$fil['min'];
                                       $max=$fil['max'];

                                       
                                        
                                        
									}}
									else
									{
										$min=$_POST['minPriceSel'];
										$max=$_POST['maxPriceSel'];
									}
                                    ?>
                                     <?php

                                        $result=$pro->afficherProduitFiltre($min,$max,$_GET['categorie']);
                                        	
                                        }
                                        else {
                                        if(isset($_POST['rech'])&&$_POST['rech']!="")
                                        {
                                            $result=$pro->rechercherProduit($_POST['rech']);
                                        }
                                        else
                                        $result=$pro->afficherProduitCategorie($_GET['categorie'],$_GET['page']);
                                        
                                        }
                                        
                                        

                                    ?>
                                     <?php

                                    foreach ($result as $row) 
                                    {
                                    	?>
												<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
												<!-- product-wrapper-start -->
												<div class="product-wrapper mb-40">
													<div class="product-img">
														<a href="<?php echo "detailsProduit.php?id=".$row['produit_id'] ?>">

													<img src="<?php echo  "img/tsawer/".$row['nom'] ?>" alt="product" class="primary"/>
													<img src="<?php echo  "img/tsawer/".$row['nom'] ?>" alt="product" class="secondary"/>
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
															<a href="#"><?php echo $row['produit_categorie']?></a>
															<div class="rating">
																<ul>
																	<li><a href="#"><i class="fa fa-star"></i></a></li>
																	<li><a href="#"><i class="fa fa-star"></i></a></li>
																	<li><a href="#"><i class="fa fa-star"></i></a></li>
																	<li><a href="#"><i class="fa fa-star"></i></a></li>
																	<li><a href="#"><i class="fa fa-star"></i></a></li>
																	<li><a href="#"><i class="fa fa-star"></i></a></li>
																</ul>
															</div>
														</div>
														<h2><a href="<?php echo "detailsProduit.php?id=".$row['produit_id'] ?>"><?php echo $row['produit_nom']?></a></h2>
														<div class="price">
															<ul>
																<li class="new-price"><?php echo $row['produit_prix']?></li>
															</ul>
														</div>
													</div>

												
												</div>
												<!-- product-wrapper-end -->
											</div>
											<?php } ?>
											<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
												<!-- product-wrapper-start -->
												
												<!-- product-wrapper-end -->
											</div>
											<div class="col-lg-4 col-md-4 hidden-sm col-xs-12">
												<!-- product-wrapper-start -->
												
												<!-- product-wrapper-end -->
											</div>
											<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
												<!-- product-wrapper-start -->
												
												<!-- product-wrapper-end -->
											</div>
											<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
												<!-- product-wrapper-start -->
												
												<!-- product-wrapper-end -->
											</div>
											<div class="col-lg-4 col-md-4 hidden-sm col-xs-12">
												<!-- product-wrapper-start -->
												
												<!-- product-wrapper-end -->
											</div>
											<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
												<!-- product-wrapper-start -->
												
												<!-- product-wrapper-end -->
											</div>
											<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
												<!-- product-wrapper-start -->
												
												<!-- product-wrapper-end -->
											</div>
											<div class="col-lg-4 col-md-4 hidden-sm col-xs-12">
												<!-- product-wrapper-start -->
												
												<!-- product-wrapper-end -->
											</div>
										</div>
									</div>
								</div>
								<!-- tab-area-end -->
								<!-- pagination-area-start -->
								<div class="pagination-area">
									<div class="pagination-number">
										<ul>
										<?php 
											$prodC3=new ProduitManage();
											$nbPage=$prodC3->getNbPages($_GET['categorie']); 
											if ($nbPage==1){
										?>
											<li class="active"><a href="<?php echo 'listeProduits.php?categorie='.$_GET['categorie'].'&page=1' ?>">1</a></li>
										<?php } 
											if ($nbPage>1 && $_GET['page']>1){
										?>
											<li><a href="<?php echo 'listeProduits.php?categorie='.$_GET['categorie'].'&page='.($_GET['page']-1) ?>"><i class="fa fa-angle-left"></i></a></li>
											<li><a href="<?php echo 'listeProduits.php?categorie='.$_GET['categorie'].'&page=1' ?>">1</a></li>
											<li class="active"><a href="<?php echo 'listeProduits.php?categorie='.$_GET['categorie'].'&page='.$_GET['page'] ?>"><?php echo $_GET['page'] ?></a></li>
										<?php } 
											if ($nbPage>1 && $_GET['page']==1){
										?>
											<li class="active"><a href="<?php echo 'listeProduits.php?categorie='.$_GET['categorie'].'&page='.$_GET['page'] ?>"><?php echo $_GET['page'] ?></a></li>
										<?php }
											if ($nbPage>1 && $_GET['page']<$nbPage){
										?>
											<li><a href="<?php echo 'listeProduits.php?categorie='.$_GET['categorie'].'&page='.$nbPage ?>"><?php echo $nbPage ?></a></li>
											<li><a href="<?php echo 'listeProduits.php?categorie='.$_GET['categorie'].'&page='.($_GET['page']+1) ?>"><i class="fa fa-angle-right"></i></a></li>
										<?php } 
											?>
										</ul>
									</div>
									<div class="product-count">
										<p>Showing 1 - 12 of 13 items</p>
									</div>
								</div>
								<!-- pagination-area-end -->
							</div>
							<!-- shop-right-area-end -->
						</div>
						<form method="post" action="<?php echo "listeProduits.php?categorie=optique"?>">
						<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
							<!-- shop-left-area-start -->
							<div class="shop-left-area">
								<!-- single-shop-start -->
								<div class="single-shop mb-40">
									<div class="Categories-title">
										<h3>Categories</h3>
									</div>
									<div class="Categories-list">
										<ul>
											<li><a href="#">Women (19)</a></li>
											<li><a href="#">leo sodales (19)</a></li>
											<li><a href="#">Accessories (16)</a></li>
											<li><a href="#">Men (19)</a></li>
											<li><a href="#">sagittis vitae (14)</a></li>
											<li><a href="#">egestas elit (12)</a></li>
											<li><a href="#">egestas magna (17)</a></li>
											<li><a href="#">vestibulum ligula (17)</a></li>
										</ul>
									</div>
								</div>
								<!-- single-shop-end -->
								<!-- single-shop-start -->
								<?php
													$prodC2=new ProduitManage();
													$rate=$prodC2->getMinMaxPrice();
													foreach ($rate as $rate1) {
														$min=$rate1['min'];
														$max=$rate1['max'];
													}
													 ?>
									<input type="hidden" id="maxPrice" value="<?php echo $max ?>">
									<input type="hidden" id="minPriceSel" name="minPriceSel">
									<input type="hidden" id="maxPriceSel" name="maxPriceSel">
								<div class="single-shop mb-40">
									<div class="Categories-title">
										<h3>Price Filter</h3>
									</div>
									<div id="slider-range"></div>
									<input type="text" name="text" id="amount" />
								</div>
								<!-- single-shop-end -->
								<!-- single-shop-start -->
								<div class="single-shop mb-40">
									<div class="Categories-title">
										<h3>Brand</h3>
									</div>
									<div class="Categories-list">
										<ul>
											<li><a href="#">Calvin Klein (11)</a></li>
											<li><a href="#">Diesel (15)</a></li>
											<li><a href="#">Polo (13)</a></li>
											<li><a href="#">Tommy Hilfiger  (14)</a></li>
										</ul>
									</div>
								</div>
								<!-- single-shop-end -->
								<!-- single-shop-start -->
								<div class="single-shop mb-40">
									<div class="Categories-title">
										<h3>Size</h3>
									</div>
									<div class="Categories-list">
										<ul>
											<li><a href="#">L (14)</a></li>
											<li><a href="#">M (11)</a></li>
											<li><a href="#">S (12)</a></li>
											<li><a href="#">XL (14)</a></li>
											<li><a href="#">XS (12)</a></li>
											<li><a href="#">XXL (13)</a></li>
										</ul>
									</div>
								</div>
								<!-- single-shop-end -->
								<!-- single-shop-start -->
								<div class="single-shop mb-40">
									<div class="Categories-title">
										<h3>Color</h3>
									</div>
									<div class="Categories-list">
										<ul>
											<li><a href="#">Black (12)</a></li>
											<li><a href="#">Blue (10)</a></li>
											<li><a href="#">Green (14)</a></li>
											<li><a href="#">Grey (14)</a></li>
											<li><a href="#">Red (12)</a></li>
											<li><a href="#">White (13)</a></li>
										</ul>
									</div>
								</div>
								<!-- single-shop-end -->
							</div>
							<!-- shop-left-area-end -->
							<div class="buttons-cart mb-30 mt-3">
									<ul>
										<li><button type="submit">Rechercher</button></li>
									</ul>
								</div>
						</div>
					</form>
					</div>	
				</div>
			</div>
			<!-- shop-main-area-end -->

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
