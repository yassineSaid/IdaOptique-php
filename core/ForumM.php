<?php

include "../entities/Forum.php";

class ForumManage
{
public function ajouterPost($post) 
    {
        $db=config::getConnexion();
        
        $req="INSERT INTO `post`(`titre`, `categorie`, `post`, `image`, `date_post`, `id_client`) VALUES (:titre,:categorie,:post,:image,now(),:id_client)";
        $id=$post->get_id_client();
        $sql=$db->prepare($req);
        
        $sql->bindValue(':titre',$post->get_titre());
        $sql->bindValue(':categorie',$post->get_categorie());
        $sql->bindValue(':post',$post->get_post());
        $sql->bindValue(':image',$post->get_image());
        $sql->bindValue(':id_client',$post->get_id_client());
      

         if($sql->execute())
         {
          $last_id = $db->lastInsertId();
                 echo "<meta http-equiv=\"refresh\" content=\"0;URL=forum-detail.php?id=".$last_id."\">"; 
               }
            else
                 echo "<meta http-equiv=\"refresh\" content=\"0;URL=ajouter-post.php\">"; 
        	
       
    } 
    public function ajouterCommentaire($comment,$id_client,$id_post,$nom) 
    {
        $db=config::getConnexion();
        
        $req="INSERT INTO `commentaire`( `nom`,`comment`, `date_com`, `id_client`, `id_post`) VALUES ($nom,:comment,now(),$id_client,$id_post)";
       
        $sql=$db->prepare($req);
        
        $sql->bindValue(':comment',$comment->get_comment());

      

         if($sql->execute())
         {
                 echo "<meta http-equiv=\"refresh\" content=\"0;URL=forum-detail.php?id=".$id_post."\">"; 
               }
            else
                  echo "<meta http-equiv=\"refresh\" content=\"0;URL=login-client-inter.php\">"; 
          
       
    } 
     public function afficherPost()
    {
        $db=config::getConnexion();
        $result ="SELECT * FROM post";
        $sql=$db->query($result);
        return $sql;
       
    

    }
    public function maxPost()
    {
        $db=config::getConnexion();
        $result ="SELECT max(id) as max_post FROM post";
        $sql=$db->query($result);
        return $sql;
       
    }
      public function minPost()
    {
        $db=config::getConnexion();
        $result ="SELECT min(id) as min_post FROM post";
        $sql=$db->query($result);
        return $sql;
       
    }
    function recupererCommentaire($id_post)
    {
        $db = config::getConnexion();
        $sql="SELECT * from commentaire where id_post=$id_post";
        
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
      public function supprimerPost($id)
    {
         $db=config::getConnexion();
        $sql=$db->prepare("DELETE FROM post WHERE id= $id");
        if($sql->execute())
                 echo "<meta http-equiv=\"refresh\" content=\"0;URL=forum.php\">"; 
            else
                 echo "<meta http-equiv=\"refresh\" content=\"0;URL=forum.php\">"; 

    }
public function modifierPost($post,$id_post)
    {
       
      
        
        $db=config::getConnexion();
        
        $req="UPDATE `post` SET `titre`=:titre,`categorie`=:categorie,`post`=:post,`date_post`=now() WHERE id=$id_post";


         $sql=$db->prepare($req);
         $sql->bindValue(':titre',$post->get_titre());
        $sql->bindValue(':categorie',$post->get_categorie());
        $sql->bindValue(':post',$post->get_post());
  
      if($sql->execute())
                 echo "<meta http-equiv=\"refresh\" content=\"0;URL=forum-detail.php?id=".$id_post."\">"; 
            else
                 echo "<meta http-equiv=\"refresh\" content=\"0;URL=forum-detail.php?id=".$id_post."\">";  
        
    }
    function recupererPost($id)
    {
        $db = config::getConnexion();
        $sql="SELECT * from post where id=$id";
        
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

}












?>