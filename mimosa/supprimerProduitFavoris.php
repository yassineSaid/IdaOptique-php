<?php
	session_start();
	include '../core/favorisC.php';
	$fav=new FavorisC();
	
		$fav->supprimerProduitFavoris($_GET['produit_id'],$_SESSION['id']);
	var_dump($_SESSION);

	
?>