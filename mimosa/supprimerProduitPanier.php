<?php
	session_start();
	include '../core/panierC.php';
	$pan=new panierC();
	if (isset($_SESSION['id']))
		$pan->supprimerProduitPanier($_GET['id_produit'],$_SESSION['id']);
	else
		$pan->supprimerProduitPanierSession($_GET['id_produit']);
?>