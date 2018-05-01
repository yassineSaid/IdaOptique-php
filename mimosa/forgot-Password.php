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
    <body class="register">
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
								<h2>register</h2>
								<ul>
									<li><a href="#">Home /</a></li>
									<li class="active"><a href="#">register</a></li>
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
			
				
				
			
				<!-- user-login-area-end -->
			
			<!-- shop-main-area-end -->
			
			<!-- newslatter-area-start -->
			
			<!-- newslatter-area-end -->

			<!-- footer-area-start -->
			

	<form method="post">
<h2 class="form-signin-heading">Mot de passe oublié</h2>
<div class="input-group">
	<span class="input-group-addon" id="basic-addon1">@</span>
	<input type="text" name="email" class="form-control" placeholder="email">
 </div>
 <br />
<div class="order-button-payment">
	<input type="submit" name="modif" value="Envoyez-moi un email">
</div>
									

</form>
<form method="post" action="forgot-Password.php">
	<link rel="stylesheet" href="forgot-Password.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
 
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
 
<link rel="stylesheet" href="styles.css" >

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</form>
	<form  method="post" action="Sms.php">
<h2 class="form-signin-heading">Ou bien</h2>
<div class="input-group">
	<span class="input-group-addon" id="basic-addon1"></span>
	<input type="text" name="telephone" class="form-control" placeholder="Numéro de téléphone">
 </div>
 <br />
 <button class="btn btn-lg btn-primary btn-block" type="submit">Récupérer mon mot de passe</button>

</form>



 

<?php
include_once 'connect.php'; 


 

if(isset($_POST) & !empty($_POST)){
	$email = mysqli_real_escape_string($connection, $_POST['email']);
	$sql = "SELECT id FROM client WHERE email = '$email'";
	$res = mysqli_query($connection, $sql);
	$count = mysqli_num_rows($res);
	if($count == 1){

$r= mysqli_fetch_assoc($res);
$to = $_POST['email'];
$subject = "Récupérez votre mot de passe";
 $message='<html>
                  <body>



                    <div id="contenu" align="Center">
                      <header>
        
      </header>

                        <img src="https://i.imgur.com/0xAWO1X.png" width="250" height="250">
                        <br>
                        <font color =#FF866A size=5px> Veuillez utiliser ce lien pour modifier votre mot de passe </font>
                        <br>
                        <br>
                        <br>
                        <br>
                        <font color =#E9383F size= 2px><a href="http://127.0.0.1//code//mimosa/changer-pass.php?id='.$r['id'].'"> Récupérez votre mot de passe </a></font>
                    </div>
                  </body>
                </html>';

$headers='Content-type: text/html; charset=iso-8859-1 From :idaoptique@gmail.com';

if(mail($to, $subject, $message, $headers)){
	//echo "Your Password has been sent to your email http://127.0.0.1//code//mimosa/changer-pass.php?id=".$r['id'];
}else{

	echo "Réessayez de nouveau";
}

	}else{
		echo "votre mail ne correspond à aucun compte";
	}
}




?>

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


