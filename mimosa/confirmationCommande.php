<?php
session_start();
	include_once '../entities/commande.php';
	include_once '../core/commandeC.php';
	require_once '/stripe/init.php';
	if ($_POST['paiement']=='livraison')
	{	
		$comm=new Commande($_SESSION['id'],$_POST['total'],$_POST['nom'],$_POST['prenom'],$_POST['adresse'],$_POST['adresse2'],$_POST['ville'],$_POST['zip']);
		$commC= new CommandeC();
		$commC->confirmerCommande($comm);
	}
	else if ($_POST['paiement']=='carte')
	{
	}
	\Stripe\Stripe::setApiKey("sk_test_rkfr2kuDbj8a7LRmarLt40W7");

// Token is created using Checkout or Elements!
// Get the payment token ID submitted by the form:
	$token = $_POST['stripeToken'];
	$charge = \Stripe\Charge::create([
	    'amount' => $_POST['total'],
	    'currency' => 'usd',
	    'description' => 'Example charge',
	    'source' => $token,
	]);
?>