<?php

include '../core/produitC.php';
include '../core/imageC.php';
$categorie=$_POST['categorieM'];
$forme=$_POST['formeM'];
 date_default_timezone_get('GMT');
$time=date("d-m-Y H:i:s");
 $pr=new ProduitManage();
$prod=new Produit($_POST['idproduitM'],$_POST['descriptionM'],$_POST['prixM'],$_POST['quantiteM'],$time,$time,$_POST['nomM'],$categorie,$_POST['marqueM'],$forme ,$_POST['couleurM']);
$pr->modifierProduit($prod);
$M= new ImagesManage();
//$M->transfert();
var_dump($_POST['idproduitM']);
echo "string";
$result=$M->getIdUpload($_POST['idproduitM']);

foreach ($result as $row) {
	$id[]=$row['id_image'];
}
if($_FILES['imageM']['tmp_name']!=""){
var_dump($_POST['idproduitM']);
$M->upload_imageM($id[0]);

}
if($_FILES['image2M']['tmp_name']!=""){
var_dump($_POST['idproduitM']);
$M->upload_image2M($id[1]);

}
if($_FILES['image3M']['tmp_name']!=""){
var_dump($_POST['idproduitM']);
$M->upload_image3M($id[2]);

}



/*if($_FILES['image']['tmp_name']!=""){
$ph->modifier_image($_FILES['image']['type'],$_FILES['image']['name'],$_FILES['image']['size'],$val,$type,$id);
}*/
                                                    
?>