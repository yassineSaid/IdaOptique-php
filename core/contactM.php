<?php

include '../entities/contact.php';

class ContactManage
{
   
    public function ajouterContact($contact) 
    {
        $db=config::getConnexion();
        $req="INSERT INTO contact(nom,email,sujet,message,date_ajout) values (:nom,:email,:sujet,:message,now());";
        $sql=$db->prepare($req);
        $sql->bindValue(':nom',$contact->get_nom());
        $sql->bindValue(':email',$contact->get_email());
        $sql->bindValue(':sujet',$contact->get_sujet());
        $sql->bindValue(':message',$contact->get_message());
        if( $sql->execute())
        {
            header("Location: contact.html"); 
exit;

        }
       else
       {
        header("Location: contact.html"); 
exit;

       }

    
   }
    function afficherContact()
  {
    $sql="SElECT * From contact";
    $db = config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        } 
  }
  function supprimercontact($id){
    $sql="DELETE FROM contact where id_contact= :id";
    $db = config::getConnexion();
        $req=$db->prepare($sql);
    $req->bindValue(':id',$id);
    try{
            $req->execute();
           echo "<meta http-equiv=\"refresh\" content=\"0;URL=contact-inbox.php\">"; 
            //header('Location: contact-inbox.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
  }
}

?>
