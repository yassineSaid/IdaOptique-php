<?php
	session_start();
	include_once '../entities/panier.php';
	include_once '../core/panierC.php';
	$pani=new PanierC();
	if (isset($_SESSION['id']))
	{
		$pan=new Panier($_SESSION['id'],$_POST['id_produit'],$_POST['qte']);
		$pani->ajouterProduit($pan);
	}
	else
	{
		if (isset($_SESSION['panier']))
		{
			$pani->ajouterProduitSession($_POST['id_produit'],$_POST['qte']);
		}
	}
	header('Location: afficherPanier.php');
?>