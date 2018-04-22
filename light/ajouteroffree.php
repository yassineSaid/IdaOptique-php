<?php


require '../entities/offre.php';
require '../core/offremanage.php';

	$offre = new Offre($_POST['nom'],$_POST['produit_id'],$_POST['pourcentage']);
	

	$off= new OffreManage();
	$off->ajoutOffre($offre);
	header('Location: ListeDesOffres.php');
	

?>