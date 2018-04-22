<?php
   
     require "../config.php";

$to      = $_POST['to'];


 $db = config::getConnexion();
        $req = $db->query("SELECT email, hash from subscribe where email='$to' ");
            
                            $donnees = $req->fetch();
                            $hash=$donnees['hash'];


 $link = 'http://localhost/projet/light/unsubscribe.php?key='.$hash; //change your domain here.

        $strSubject="IDA_OPTIQUE | Email Subscription";
        $message = '<p>Thank you for subscribing  <br>Email: '.$to.'.</p>' ;
        $message .= '<p>Click here to unsubscribe your email : <a href="'.$link.'">
        Unsubscribe</a></p>' ;

        $mail_sent=mail($to, $strSubject, $message);

header('Location: http://localhost/projet/light/page-confirm-mail.html');
        



?>