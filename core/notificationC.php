<?php
include_once '../entities/notification.php';
include_once '../config.php';
class NotificationC 
{
    function afficherNotifications ()
    {
        $sql="SELECT * From notification ORDER BY id_notification desc";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        } 
    }  
    function ajouterNotification($notification)
    {
        $sql="INSERT into notification (titre,contenu,type,heure,link) values (:titre,:contenu,:type,now(),:link)";
        $db = config::getConnexion();
        try
        {
            $req=$db->prepare($sql);
            $req->bindValue(':titre',$notification->getTitre());
            $req->bindValue(':contenu',$notification->getContenu());
            $req->bindValue(':type',$notification->getType());
            $req->bindValue(':link',$notification->getLink());
            
            $req->execute();
        }
            catch (Exception $e)
            {
                echo 'Erreur: '.$e->getMessage();
            }
    }   
    function updateNotification()
    {
        $sql="UPDATE notification SET statut='seen' where statut='unseen'";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        try{
            $req->execute();
            return true;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function countUnseen()
    {
        $sql="SELECT count(*) AS nbr From notification WHERE statut='unseen'";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        $result=$liste->fetch();
        return $result['nbr'];
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        } 
    }
    function supprimerNotification()
    {
        $sql="DELETE FROM notification";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        try
        {
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
}
?>