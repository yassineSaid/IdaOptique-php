<?php
require '../entities/livraison.php';
$var=new Livraison(123,966,$_POST['livraison_nom'],$_POST['livraison_prenom'],$_POST['livraison_societe'],$_POST['livraison_adresse1'],$_POST['livraison_adresse2'],$_POST['livraison_ville'],$_POST['livraison_code_postal'],$_POST['livraison_pays'],$_POST['livraison_region'],$_POST['livraison_email'],$_POST['livraison_telephone'],$_POST['livraison_order_note']);
$var2=new LivraisonManage();
$var2->ajouter_livraison($var);
?>