<?php

include '../core/produitC.php';
$categorie=$_POST['categorieM'];
$forme=$_POST['formeM'];
 date_default_timezone_get('GMT');
$time=date("d-m-Y H:i:s");
 $pr=new ProduitManage();
$prod=new Produit($_POST['idproduitM'],$_POST['descriptionM'],$_POST['prixM'],$_POST['quantiteM'],$time,$time,$_POST['nomM'],$categorie,$_POST['marqueM'],$forme ,$_POST['couleurM']);
$pr->modifierProduit($prod);
                                                    
?>