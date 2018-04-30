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
        $message = 'Merci de vous être abonné   Email: '.$to.'. '  ;
        $message .= 'Cliquez ici pour vous désabonner de votre e-mail :   '.$link.'
        Unsubscribe' ;

        $mail_sent=mail($to, $strSubject, $message);

header('Location: http://localhost/code/light/page-confirm-mail.html');
        



?>