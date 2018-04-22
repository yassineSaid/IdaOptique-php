<?php
	session_start();
	
	include_once '../core/favorisC.php';
	$favo= new FavorisC();
	if (isset($_SESSION['id']))
	{
		$fav=new Favoris($_SESSION['id'],$_GET['id']);
		$favo->ajouterProduitFavoris($fav);
		
	}
	else
	{
	echo "tu dois etre connecte pour avoir des favoris";
	}

?>