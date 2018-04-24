<?php
session_start();
if(!isset($_SESSION['comparateur']))
{
	$_SESSION['comparateur']=array();
	$_SESSION['comparateur']['id_produit'] = array();
}
if(isset($_GET['id']))
{
	array_push($_SESSION['comparateur']['id_produit'],$_GET['id']);
}

				

//session_write_close();


//session_destroy();

?>