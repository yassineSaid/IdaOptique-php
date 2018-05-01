<?php
require "../Core/ClientC.php";
	$client=new ClientManage;

		
		

	$client->modifierPass($_POST['MotDePasse'],$_POST['id']);
?>