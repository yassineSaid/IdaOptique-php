<?php
require '../entities/chat.php';

class ChatManage
{
   
    
  function afficherChat($id)
  {
    $sql="SELECT * From chat WHERE id_client=$id ";
    $db = config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        } 
  }
  public function ajouterChat($chat) 
    {
        $db=config::getConnexion();
       // $req="INSERT INTO chat( sender_id, receiver_id, message,'time', status, id_client, pseudo) VALUES (44,66,:message,now(),'unread',124,'raouf')";
         $req="INSERT INTO `chat`(`sender_id`, `receiver_id`, `message`, `time`, `status`, `id_client`, `pseudo`, `pdp`) VALUES (:sender,:receiver,:message,now(),'test',124,:pseudo,'feajk')";
        $sql=$db->prepare($req);
        $sql->bindValue(':message',$chat->get_message());
        $sql->bindValue(':sender',$chat->get_sender_id()); 
        $sql->bindValue(':receiver',$chat->get_receiver_id());
        $sql->bindValue(':pseudo',$chat->get_pseudo());
        
        if( $sql->execute())
        {
            header("Location: chat.php?sid=123&rid=124"); 
exit;

        }
       else
       {
        echo "nami";
        header("Location: chat.php?sid=123&rid=124"); 
exit;

       }

    
   }
   
}

?>