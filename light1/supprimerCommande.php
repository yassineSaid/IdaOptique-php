<?php
	include_once '../mimosa/CommandeC.php';
    $comm= new CommandeC();
    $comm->supprimerCommande($_POST['id_commande']);
?>