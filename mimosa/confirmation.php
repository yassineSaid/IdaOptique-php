<?php
	require "../Core/ClientC.php";
	$client=new ClientManage;

		
		$user=$client->VerifierEmailConfirmation($_GET['id'],$_GET['code']);
		
		if($user->rowCount()!=0)
		{
			$client->UpdateConfirmation($_GET['id']);
			
		}
		else
		{
			echo "cet Utilisateur n'existe pas";
		}
	
?>