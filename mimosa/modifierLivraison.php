<?php
	require_once '../core/livraisonC.php';
	$l=new Livraison($_POST['id_client'],$_POST['id_commande'],$_POST['livraison_nom'],$_POST['livraison_prenom'],$_POST['livraison_sosciete'],$_POST['livraison_adresse1'],$_POST['livraison_adresse2'],$_POST['livraison_ville'],$_POST['livraison_code_postal'],$_POST['livraison_pays'],$_POST['livraison_region'],$_POST['livraison_email'],$_POST['livraison_telephone'],$_POST['livraison_note']);
	$liv=new LivraisonManage();
    													$liv->modifierLivraison($l);
    												
?>