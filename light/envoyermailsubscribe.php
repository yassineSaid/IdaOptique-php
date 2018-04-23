<?php
   
     require "../config.php";

$to      = $_POST['to'];
$message = $_FILES['image'];


 $db = config::getConnexion();
        $req = $db->query("SELECT email, hash from subscribe where email='$to' ");
            
                            $donnees = $req->fetch();
                            $hash=$donnees['hash'];


 $link = 'http://localhost/code/light/unsubscribe.php?key='.$hash; //change your domain here.

        $strSubject="IDA_OPTIQUE | Newsletter";
        $message = 'Thank you for subscribing  Email: '.$to.'.' ;
        $message .= 'Click here to unsubscribe your email : <a href="'.$link.'">
        Unsubscribe</a>' ;

        $mail_sent=mail($to, $strSubject, $message);

header('Location: http://localhost/code/light/page-confirm-mail.html');
        



?>