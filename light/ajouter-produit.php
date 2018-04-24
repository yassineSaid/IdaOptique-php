<?php

//require '../entities/produit.php';
//require '../entities/image.php';
//require 'images/upload_image.php';
require_once '../core/produitC.php';
require '../core/imageC.php';
$categorie=$_POST['categorie'];




date_default_timezone_get('GMT');
$time=date("d-m-Y H:i:s");
$prods=new Produit($_POST['idproduit'],$_POST['description'],$_POST['prix'],$_POST['quantite'],$time,$time,$_POST['nom'],$categorie,$_POST['marque'],$_POST['forme'],$_POST['couleur']);
$pr=new ProduitManage();
$pr->ajouter_produit($prods);

$im= new Images($_FILES['image']['type'],$_FILES['image']['name'],$_FILES['image']['size'],$_POST['idproduit'],$_POST['type1']);
$M= new ImagesManage();
//$M->transfert();
$val=$M->recupNext();	
$M->upload_image($val);

//if(isset($_FILES['image']['tmp_name']))
$M->ajouter_image($_FILES['image']['type'],$_FILES['image']['name'],$_FILES['image']['size'],$val,$_POST['type1']);



$im2= new Images($_FILES['image2']['type'],$_FILES['image2']['name'],$_FILES['image2']['size'],$_POST['idproduit'],$_POST['type2']);
$M2= new ImagesManage();
$val2=$M2->recupNext();	
$M2->upload_image2($val2);

//if(isset($_FILES['image2']['tmp_name']))
$M2->ajouter_image($_FILES['image2']['type'],$_FILES['image2']['name'],$_FILES['image2']['size'],$val2,$_POST['type2']);
//else echo "error";



$im3= new Images($_FILES['image3']['type'],$_FILES['image3']['name'],$_FILES['image3']['size'],$_POST['idproduit'],$_POST['type3']);
$M3= new ImagesManage();
$val3=$M3->recupNext();	
$M3->upload_image3($val3);

//if(isset($_FILES['image3']['tmp_name']))
$M3->ajouter_image($_FILES['image3']['type'],$_FILES['image3']['name'],$_FILES['image3']['size'],$val3,$_POST['type3']);
//else echo "error";
//$M->transfert2($_FILES['image']['type'],$_FILES['image']['name'],$_FILES['image']['size']);
//$M->transfert3();1


/*$M->upload_image_url($im);*/
//$M->ajouter_image();

         




?>