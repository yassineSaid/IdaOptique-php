<!doctype html>
<?php include('header.php'); ?>
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
        <script>
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
        		if (window.document.commande.email.value.length<8)
        		{
        			document.commande.email.style.borderColor="red";
        			v=1;
        		}
        		else 
        		{
        			document.commande.email.style.borderColor="e5e5e5";
        		}
        		if (window.document.commande.telephone.value.length<3)
        		{
        			document.commande.telephone.style.borderColor="red";
        			v=1;
        		}
        		else
        		{
        			document.commande.telephone.style.borderColor="e5e5e5";
        		}
        		if (window.document.commande.date_achat.value.length<4)
        		{
        			document.commande.date_achat.style.borderColor="red";
        			v=1;
        		}
        		else
        		{
        			document.commande.date_achat.style.borderColor="e5e5e5";
        		}
        		if (window.document.commande.notes.value.length<4)
        		{
        			document.commande.notes.style.borderColor="red";
        			v=1;
        		}
        		else
        		{
        			document.commande.notes.style.borderColor="e5e5e5";
        		}
        		if (window.document.commande.adresse1.value.length<4)
        		{
        			document.commande.adresse1.style.borderColor="red";
        			v=1;
        		}
        		else
        		{
        			document.commande.adresse1.style.borderColor="e5e5e5";
        		}
        		if (window.document.commande.adresse2.value.length<4)
        		{
        			document.commande.adresse2.style.borderColor="red";
        			v=1;
        		}
        		else
        		{
        			document.commande.adresse2.style.borderColor="e5e5e5";
        		}
        		if (window.document.commande.code_postal.value.length<4)
        		{
        			document.commande.code_postal.style.borderColor="red";
        			v=1;
        		}
        		else
        		{
        			document.commande.code_postal.style.borderColor="e5e5e5";
        		}


        		if (window.document.commande.ville.value.length<4)
        		{
        			document.commande.ville.style.borderColor="red";
        			v=1;
        		}
        		else
        		{
        			document.commande.ville.style.borderColor="e5e5e5";
        		}
        		

        		if (window.document.commande.pays.value.length<4)
        		{
        			document.commande.pays.style.borderColor="red";
        			v=1;
        		}
        		else
        		{
        			document.commande.pays.style.borderColor="e5e5e5";
        		}


        		if (window.document.commande.ville.value.length<4)
        		{
        			document.commande.ville.style.borderColor="red";
        			v=1;
        		}
        		else
        		{
        			document.commande.ville.style.borderColor="e5e5e5";
        		}


        		if (window.document.commande.region.value.length<4)
        		{
        			document.commande.region.style.borderColor="red";
        			v=1;
        		}
        		else
        		{
        			document.commande.region.style.borderColor="e5e5e5";
        		}


        		if (window.document.commande.produit.value.length<4)
        		{
        			document.commande.produit.style.borderColor="red";
        			v=1;
        		}
        		else
        		{
        			document.commande.produit.style.borderColor="e5e5e5";
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
    function formcheck() {
  var fields = $(".checkout-form-list")
        .find("select, textarea, input").serializeArray();
  
  $.each(fields, function(i, field) {
    if (!field.value)
      alert(field.name + ' is required');
   }); 
  console.log(fields);
}

</script>
<script>
      // This example displays an address form, using the autocomplete feature
      // of the Google Places API to help users fill in the information.

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      var placeSearch, autocomplete;
      var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
      };

      function initAutocomplete() {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
            {types: ['geocode']});

        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        autocomplete.addListener('place_changed', fillInAddress);
      }

      function fillInAddress() {
        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();

        for (var component in componentForm) {
          document.getElementById(component).value = '';
          document.getElementById(component).disabled = false;
        }

        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
        for (var i = 0; i < place.address_components.length; i++) {
          var addressType = place.address_components[i].types[0];
          if (componentForm[addressType]) {
            var val = place.address_components[i][componentForm[addressType]];
            document.getElementById(addressType).value = val;
          }
        }
      }

      // Bias the autocomplete object to the user's geographical location,
      // as supplied by the browser's 'navigator.geolocation' object.
      function geolocate() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var geolocation = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            var circle = new google.maps.Circle({
              center: geolocation,
              radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
          });
        }
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAlZPf84AAVt8_FFN7rwQY5nPgB02SlTKs&libraries=places&callback=initAutocomplete"
        async defer></script>
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
				<?php if(((count($_SESSION['panier']['id_produit'])<=0))&&(!isset($_SESSION['id'])))
						echo "<script type='text/javascript'>document.location.replace('index.php');</script>";
				?>
			
			</header>
			<form action="ajouter-reclamation.php" method="post"  >
			<!-- header-area-end -->
			<!-- breadcrumbs-area-start -->
			<div class="breadcrumbs-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="breadcrumb-content text-center">
								<h2>Reclamation</h2>
								<ul>
									<li><a href="#">Home /</a></li>
									<li class="active"><a href="#">Reclamation</a></li>
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
						<div class="row">
							<div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
								<div class="billing-fields">
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
											<div class="checkout-form-list">
												
													<label>First Name<span>*</span></label>
													<input  name="nom" type="text"/>
												
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
											<div class="checkout-form-list">
												
													<label>Last Name<span>*</span></label>
													<input  name="prenom" type="text"/>
												
											</div>
										</div>
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
											<div class="checkout-form-list">
										
											<label>Age</label>
											<input name="age" type="text"/>
										
									</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
											<div class="checkout-form-list">
												
													<label>Email Address<span>*</span></label>
													<input name="email" type="text"/>
												
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
											<div class="checkout-form-list">
												
													<label>Phone<span>*</span></label>
													<input name="telephone" type="text"/>
												
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
											<div class="checkout-form-list">
										
											<label>Date d'achat<span></span></label>
											<input name="date_achat" type="date" placeholder="Date d'achat"/>
										
									</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
											<div class="checkout-form-list">
										
											<label>Profession</label>
											<input name="profession" type="text"/>
										
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
											<div class="checkout-form-list">
										
											<label>Notes<span>*</span></label>
											<input name="notes" type="text" placeholder="Notes a propos de votre commande."/>
										</div>
									</div>

										<div class="col-lg-12">
											<div class="checkout-form-list">
										
											<label>Search Adress<span></span></label>
											<input id="autocomplete" placeholder="Enter your address" onFocus="geolocate()" type="text"></input>
										</div>
									</div>
										
										<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
											<div class="checkout-form-list">
										
											<label>Address<span>*</span></label>
											<input name="adresse1" id="street_number" type="text" placeholder="Street address"/>
										
											
									</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
											<div class="checkout-form-list">
										
											<label>Address2<span></span></label>
											
											<input name="adresse2" id="route" type="text"  placeholder="Apartment, suite, unit etc. (optional"/>
										
									</div>
									</div>
									
									
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
											<div class="checkout-form-list">
												
													<label>Postcode<span>*</span></label>
													<input name="code_postal" id="postal_code" type="text" placeholder="Postcode"/>
												
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
											<div class="checkout-form-list">
										
											<label>Town/City<span>*</span></label>
											<input name="ville" id="locality" type="text" />
											<input name="id_client"  type="hidden" value="<?php echo $_SESSION['id']; ?>" />
										
									</div>
									</div>

										 
										 <div class="col-lg-12">
										<div class="country-select">
										<label>Country<span>*</span></label>
										<select name="pays" class="chosen-select" id="country" tabindex="1" 
										style="width:100%;" data-placeholder="Default Sorting">
											<option  >Select a country</option>
											<option value="Tunisia">Tunisia</option>
											
										</select>
									</div>
									</div>
									
									
									<div class="col-lg-12">
										<div class="country-select">
												<label>State<span>*</span></label>
												<select name="region" class="chosen-select" tabindex="1" id="administrative_area_level_1" style="width:100%;" data-placeholder="Default Sorting">
													<option >Select a State</option>
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
									
										
									
									<?php 
											include '../core/reclamationM.php';
											$rec=new ReclamationManage();
							    			$result1=$rec->afficherProduitpourReclamation();
							    		
							    			?>
									
										<div class="col-lg-12">
										<div class="country-select">
										<label>Produit<span>*</span></label>
										<select name="produit" class="chosen-select" tabindex="1" style="width:100%;" data-placeholder="Default Sorting">
											
											<option value="produit">Selectioner un produit</option>

											<?php
											
											 foreach ($result1 as $key => $item) { ?>
																					<option value="<?php echo $item['produit_nom']; ?>"><?php echo $item['produit_nom']; ?></option>
																					
											<?php } ?>
											
										</select>
									</div>
								</div>
						
								
						</div>
											
									
									

									<div class="single-register">
										<input type="submit" onclick="formcheck();" value="Reclamer"></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- user-login-area-end -->
			</div>
			</form>
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
