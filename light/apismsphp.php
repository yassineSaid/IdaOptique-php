<?php

                                     
                                        
     require '../core/offremanage.php';
     $off= new OffreManage();
     $idoffre=$_POST['idoffre'];
     $liste=$off->recupererOffre($idoffre);

            foreach ($liste as $val) 
            $idproduit=$val['produit_id'];
            $list=$off->recupererProduit($idproduit);

                 {
                    foreach ($list as $row) 

                         {
                         	$nomOffre=$val['nom'];
                         	$nomProduit= $row['produit_nom'];
                         	$pourcentage=$val['pourcentage'];


        $db = config::getConnexion();
        $req = $db->query("SELECT telephone from client ");
            
                            $donnees = $req->fetch();
                            $numero=$donnees['telephone'];


	// Authorisation details.
	$username = "idaoptique@gmail.com";
	$hash = "9d86480d31bc0b4b00569e61ffc4977faada86596c68187c148b9e2b1c089e6b";

	// Config variables. Consult http://api.txtlocal.com/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = "IDA-OPTIQUE"; // This is who the message appears to be from.
	$numbers = $numero ; // A single number or a comma-seperated list of numbers
	//$message = 'hi';
	$message = ' '.$nomOffre.'!! Profitez d une superbe réduction de -'.$pourcentage.'%  sur l article ** '.$nomProduit.' **' ;
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.txtlocal.com/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
	curl_close($ch);
	echo $result;

header('Location: http://localhost/code/light/ListeDesOffres.php');
}}


?>
