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
        <script>
function verif(champ) {
	if(champ.value.length==0)
   { 
         alert("empty");  	
        
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
				<div class="header-top-area" id="sticky-header">
					<div class="container">
						<div class="row">
							<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
								<!-- logo-area-start -->
								<div class="logo-area">
									<a href="index.html"><img src="img/logo/1.png" alt="logo" /></a>
								</div>
								<!-- logo-area-end -->
							</div>
							<div class="col-lg-7 col-md-7 hidden-sm hidden-xs">
								<!-- menu-area-start -->
								<div class="menu-area">
									<nav>
										<ul>
											<li class="active"><a href="index.html">Home</a>
												<ul class="sub-menu">
													<li><a href="index-2.html">Home-2</a></li>
													<li><a href="index-3.html">Home-3</a></li>
													<li><a href="index-4.html">Home-4</a></li>
													<li><a href="index-5.html">Home-5</a></li>
													<li><a href="index-6.html">Home-6</a></li>
												</ul>
											</li>
											<li><a href="shop.html">Men</a>
												<ul class="mega-menu">
													<li><a href="#">Integer vestib</a>
														<ul class="sub-menu-2">
															<li><a href="shop.html">finibus iaculis</a></li>
															<li><a href="shop.html">Integer rhoncus</a></li>
															<li><a href="shop.html">purus elittincidu</a></li>
															<li><a href="shop.html">tincidunt est</a></li>
														</ul>
													</li>
													<li><a href="#">Phasellus inviv</a>
														<ul class="sub-menu-2">
															<li><a href="shop.html">Fusce eurhon</a></li>
															<li><a href="shop.html">iaculis ipsum</a></li>
															<li><a href="shop.html">ligula consectet</a></li>
															<li><a href="shop.html">vestibulum egest</a></li>
														</ul>
													</li>
													<li><a href="#">suscipit mauris</a>
														<ul class="sub-menu-2">
															<li><a href="shop.html">Integer rhoncus</a></li>
															<li><a href="shop.html">ipsum ametus</a></li>
															<li><a href="shop.html">Morbi vitae</a></li>
															<li><a href="shop.html">semper vulputate</a></li>
														</ul>
													</li>
													<li><a href="#">viverra lacus</a>
														<ul class="sub-menu-2">
															<li><a href="shop.html">Aliquam acsus</a></li>
															<li><a href="shop.html">Morbi amimi</a></li>
															<li><a href="shop.html">pretium metus</a></li>
															<li><a href="shop.html">suscipit felis</a></li>
														</ul>
													</li>
												</ul>
											</li>
											<li><a href="shop.html">Accessories</a>
												<ul class="mega-menu mega-menu-2">
													<li><a href="#">suscipit mauris</a>
														<ul class="sub-menu-2">
															<li><a href="shop.html">Integer rhoncus</a></li>
															<li><a href="shop.html">ipsum ametus</a></li>
															<li><a href="shop.html">Morbi vitae</a></li>
															<li><a href="shop.html">semper vulputate</a></li>
														</ul>
													</li>
													<li><a href="#">viverra lacus</a>
														<ul class="sub-menu-2">
															<li><a href="shop.html">Aliquam acsus</a></li>
															<li><a href="shop.html">Morbi amimi</a></li>
															<li><a href="shop.html">pretium metus</a></li>
															<li><a href="shop.html">suscipit felis</a></li>
														</ul>
													</li>
												</ul>
											</li>
											<li><a href="shop.html">Women</a>
												<ul class="mega-menu mega-menu-2">
													<li><a href="#">fermentum grav</a>
														<ul class="sub-menu-2">
															<li><a href="shop.html">arcu dignissim</a></li>
															<li><a href="shop.html">congue quamm</a></li>
															<li><a href="shop.html">necfer mentuma</a></li>
															<li><a href="shop.html">ultricies volutpat</a></li>
														</ul>
													</li>
													<li><a href="#">gravida metus</a>
														<ul class="sub-menu-2">
															<li><a href="shop.html">acaliquet orci</a></li>
															<li><a href="shop.html">dignissim placera</a></li>
															<li><a href="shop.html">risussed trist</a></li>
															<li><a href="shop.html">Utsuscipit urna</a></li>
														</ul>
													</li>
												</ul>
											</li>
											<li><a href="blog.html">Blog</a>
												<ul class="sub-menu">
													<li><a href="blog.html">blog</a></li>
													<li><a href="blog-details.html">blog details</a></li>
												</ul>
											</li>
											<li><a href="#">pages</a>
												<ul class="sub-menu">
													<li><a href="reclamation-affiche.php">Ajouter Reclamation</a></li>
													<li><a href="afficher-reclamation.php?id=123">Afficher Reclamation</a></li>
													<li><a href="contact.html">Contact</a></li>
												</ul>
											</li>
										</ul>
									</nav>
								</div>
								<!-- menu-area-end -->
							</div>
							<div class="col-lg-3 col-md-3 com-sm-6 col-xs-6">
								<!-- header-right-area-start -->
								<div class="header-right-area">
									<ul>
										<li><a href="#" id="show-search"><i class="icon ion-ios-search-strong"></i></a>
											<div class="search-content" id="hide-search">
												<div class="search-text">
													<h1>Search</h1>
													<form action="#">
														<input type="text" placeholder="search"/>
														<button class="btn" type="button">
															<i class="fa fa-search"></i>
														</button>
													</form>
												</div>
											</div>
										</li>
										<li><a href="cart.html"><i class="icon ion-bag"></i></a>
											<span>2</span>
											<div class="mini-cart-sub">
												<div class="cart-product">
													<div class="single-cart">
														<div class="cart-img">
															<a href="#"><img src="img/product/1.jpg" alt="book" /></a>
														</div>
														<div class="cart-info">
															<h5><a href="#">Joust Duffle Bag</a></h5>
															<p>1 x £60.00</p>
														</div>
													</div>
													<div class="single-cart">
														<div class="cart-img">
															<a href="#"><img src="img/product/3.jpg" alt="book" /></a>
														</div>
														<div class="cart-info">
															<h5><a href="#">Chaz Kangeroo Hoodie</a></h5>
															<p>1 x £52.00</p>
														</div>
													</div>
												</div>
												<div class="cart-totals">
													<h5>Total <span>£12.00</span></h5>
												</div>
												<div class="cart-bottom">
													<a href="checkout.html">Check out</a>
												</div>
											</div>
										</li>
										<li id="show-cart"><a href="#"><i class="icon ion-drag"></i></a>
											<div class="shapping-area" id="hide-cart">
												<div class="single-shapping mb-20">
													<span>Currency</span>
													<ul>
														<li><a href="#">€ Euro </a></li>
														<li><a href="#">£ Pound Sterling</a></li>
														<li><a href="#">$ US Dollar</a></li>
													</ul>
												</div>
												<div class="single-shapping mb-20">
													<span>Language</span>
													<ul>
														<li><a href="#"><img src="img/flag/1.jpg" alt="flag" />   English</a></li>
														<li><a href="#"><img src="img/flag/2.jpg" alt="flag" />   French</a></li>
													</ul>
												</div>
												<div class="single-shapping">
													<span>My Account</span>
													<ul>
														<li><a href="register.html">Register</a></li>
														<li><a href="login.html">Login</a></li>
													</ul>
												</div>
											</div>
										</li>
									</ul>
								</div>
								<!-- header-right-area-end -->
							</div>
						</div>
					</div>
				</div>
				<!-- header-top-area-end -->
				<!-- mobile-menu-area-start -->
				<div class="mobile-menu-area hidden-md hidden-lg">
					<div class="container">
						<div class="row">
							<div class="col-lg-12">
								<div class="mobile-menu">
									<nav id="mobile-menu-active">
										<ul id="nav">
											<li><a href="index.html">Home</a>
												<ul>
													<li><a href="index-2.html">Home-2</a></li>
													<li><a href="index-3.html">Home-3</a></li>
													<li><a href="index-4.html">Home-4</a></li>
													<li><a href="index-5.html">Home-5</a></li>
													<li><a href="index-6.html">Home-6</a></li>
												</ul>
											</li>
											<li><a href="shop.html">Men</a>
												<ul>
													<li><a href="shop.html">finibus iaculis</a></li>
													<li><a href="shop.html">Integer rhoncus</a></li>
													<li><a href="shop.html">purus elittincidu</a></li>
													<li><a href="shop.html">tincidunt est</a></li>
													<li><a href="shop.html">Fusce eurhon</a></li>
													<li><a href="shop.html">iaculis ipsum</a></li>
													<li><a href="shop.html">ligula consectet</a></li>
													<li><a href="shop.html">vestibulum egest</a></li>
													<li><a href="shop.html">Integer rhoncus</a></li>
													<li><a href="shop.html">ipsum ametus</a></li>
													<li><a href="shop.html">Morbi vitae</a></li>
													<li><a href="shop.html">semper vulputate</a></li>
													<li><a href="shop.html">Aliquam acsus</a></li>
													<li><a href="shop.html">Morbi amimi</a></li>
													<li><a href="shop.html">pretium metus</a></li>
													<li><a href="shop.html">suscipit felis</a></li>
												</ul>
											</li>
											<li><a href="shop.html">Accessories</a>
												<ul>
													<li><a href="shop.html">Integer rhoncus</a></li>
													<li><a href="shop.html">ipsum ametus</a></li>
													<li><a href="shop.html">Morbi vitae</a></li>
													<li><a href="shop.html">semper vulputate</a></li>
													<li><a href="shop.html">Aliquam acsus</a></li>
													<li><a href="shop.html">Morbi amimi</a></li>
													<li><a href="shop.html">pretium metus</a></li>
													<li><a href="shop.html">suscipit felis</a></li>
												</ul>
											</li>
											<li><a href="shop.html">Women</a>
												<ul>
													<li><a href="shop.html">arcu dignissim</a></li>
													<li><a href="shop.html">congue quamm</a></li>
													<li><a href="shop.html">necfer mentuma</a></li>
													<li><a href="shop.html">ultricies volutpat</a></li>
													<li><a href="shop.html">acaliquet orci</a></li>
													<li><a href="shop.html">dignissim placera</a></li>
													<li><a href="shop.html">risussed trist</a></li>
													<li><a href="shop.html">Utsuscipit urna</a></li>
												</ul>
											</li>
											<li><a href="blog.html">blog</a>
												<ul>
													<li><a href="blog.html">Blog</a></li>
													<li><a href="blog-details.html">blog details</a></li>
												</ul>
											</li>
											<li><a href="shop.html">Pages</a>
												<ul>
													<li><a href="shop.html">Shop</a></li>
													<li><a href="product-details.html">product details</a></li>
													<li><a href="blog.html">Blog</a></li>
													<li><a href="blog-details.html">blog details</a></li>
													<li><a href="about.html">About</a></li>
													<li><a href="contact.html">Contact</a></li>
													<li><a href="checkout.html">Checkout</a></li>
													<li><a href="cart.html">Cart</a></li>
													<li><a href="login.html">Login</a></li>
													<li><a href="register.html">Register</a></li>
													<li><a href="wishlist.html">Wishlist</a></li>
													<li><a href="404.html">404 Page</a></li>
												</ul>
											</li>
										</ul>
									</nav>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- mobile-menu-area-end -->
			</header>
			<form action="ajouter-reclamation.php" method="post">
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

										<div class="col-lg-12">
											<div class="checkout-form-list">
										
											<label>Search Adress<span></span></label>
											<input id="autocomplete" placeholder="Enter your address"
             onFocus="geolocate()" type="text"></input>
										
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
									
										
									
									
									
										<div class="col-lg-12">
										<div class="country-select">
										<label>Produit<span>*</span></label>
										<select name="produit" class="chosen-select" tabindex="1" style="width:100%;" data-placeholder="Default Sorting">
											<option value="produit">Selectioner un produit</option>
											<option value="lunette1">Lunette</option>
											
										</select>
									</div>
								
									</div>
									
									<div class="order-notes">
									<div class="checkout-form-list">
										
											<label>Notes<span>*</span></label>
											<textarea name="notes" placeholder="Notes a propos de votre commande." rows="10" cols="30" id="checkout-mess"></textarea>
										
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
