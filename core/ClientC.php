<?php

include "../entities/Client.php";
class ClientManage
{
public function ajouterClient($client,$confirmationMail) 
    {
        $db=config::getConnexion();
    $req="INSERT INTO `client` (`nom`, `prenom`, `email`, `MotDePasse`,`pays`,`cite`,`zip`,`telephone`,`fax`,`adresse`,`adresse2`,`confirmationMail`,`status`) VALUES (:nom, :prenom, :email, :motDePasse, :pays, :cite,:zip, :telephone, :fax, :adresse, :adresse2, :confirmationMail, 0);";

        $sql=$db->prepare($req);
        
        $sql->bindValue(':nom',$client->get_nom());
        $sql->bindValue(':prenom',$client->get_prenom());
        $sql->bindValue(':email',$client->get_email());
        $sql->bindValue(':motDePasse',$client->get_motDePasse());
        $sql->bindValue(':pays',$client->get_pays());
        $sql->bindValue(':cite',$client->get_cite());
        $sql->bindValue(':telephone',$client->get_telephone());
        $sql->bindValue(':fax',$client->get_fax());
        $sql->bindValue(':adresse',$client->get_adresse());
        $sql->bindValue(':adresse2',$client->get_adresse2());
        $sql->bindValue(':zip',$client->get_zip());
     $sql->bindValue(':confirmationMail',$confirmationMail);
       if($sql->execute())
       {
        echo "<meta http-equiv='refresh' content='0;url=login-client-inter.php'>";

       }
        
        else
            {echo "noo";}
    } 
public function ajouterClientGoogle($nom,$prenom,$google_id,$email) 
    {
        $db=config::getConnexion();
    $req="INSERT INTO `client` (`nom`, `prenom`, `email`, `type`,`google_id`,`status`) VALUES (:nom, :prenom, :email, 'google', :google_id, 1);";

        $sql=$db->prepare($req);
        
        $sql->bindValue(':nom',$nom);
        $sql->bindValue(':prenom',$prenom);
        $sql->bindValue(':email',$email);
        $sql->bindValue(':google_id',$google_id);
       if($sql->execute())
       {
       // echo "<meta http-equiv='refresh' content='0;url=login-client-inter.php'>";

       }
        
        else
            {echo "noo";}
    } 
   public function afficherClients()
    {
        $db=config::getConnexion();
       $result ="SELECT * FROM client;";
        $sql=$db->query($result);
        return $sql;
    

    }
   public function connexionGoogle($google_id)
    {
        $db=config::getConnexion();
       $result ="SELECT id FROM client WHERE google_id=$google_id;";
        $sql=$db->query($result);
        return $sql;
    }
      public function supprimerClient()
    {
         $db=config::getConnexion();
        $sql=$db->prepare("DELETE FROM client WHERE id= :id");
        $sql->bindValue(':id',$_GET ['id']);
        $sql->execute();

    }

         public function modifierClient($Client,$id)
    {
        $sql="UPDATE `client` SET `nom`=:nom,`prenom`=:prenom,`email`=:email,`MotDePasse`=:motDePasse,`pays`=:pays,`cite`=:cite,`zip`=:zip,`telephone`=:telephone,`fax`=:fax,`adresse`=:adresse,`adresse2`=:adresse2 WHERE id= $id";
       
       
        $db =config::getConnexion();
       $req=$db->prepare($sql);

        
        //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
        //try{        
     
   
      /* $req->bindValue(':idd',$idd);
        $req->bindValue(':id',$idd);
        $req->bindValue(':idd',18);*/
       // $req->bindValue(':id',$Client->get_id());
        $req->bindValue(':nom',$Client->get_nom());
        $req->bindValue(':prenom',$Client->get_prenom());
        $req->bindValue(':email',$Client->get_email());
       $req->bindValue(':motDePasse',$Client->get_motDePasse());
       $req->bindValue('pays',$Client->get_pays());
       $req->bindValue(':cite',$Client->get_cite());
       $req->bindValue(':zip',$Client->get_zip());
       $req->bindValue(':telephone',$Client->get_telephone());
       $req->bindValue(':fax',$Client->get_fax());
       $req->bindValue(':adresse',$Client->get_adresse());
       $req->bindValue(':adresse2',$Client->get_adresse2());
 
     


     if ($req->execute())
        
        {
            echo "<meta http-equiv='refresh' content='0;url=afficherProfil.php?id=".$id."'>";
        }
        else 
        {
           echo "<meta http-equiv='refresh' content='0;url=afficherProfil.php?id=".$id."'>";
        }
            
           // header('Location: index.php');
       // }
        /*catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }*/
        
    
    }
   
function recupererClient($id)
    {
        $db = config::getConnexion();
        $sql="SELECT * from client where id=$id";
        
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
function recupererClientMail($email)
    {
        $db = config::getConnexion();
        $sql="SELECT * from client where email='$email'";
        
        try{
        $liste=$db->query($sql);
        $result=$liste->fetch();
        return $result['id'];
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
      function VerifierEmailConfirmation($id,$code)
    {
        $db = config::getConnexion();

      $q = $db->prepare("SELECT * FROM Client where id=:id AND confirmationMail=:code");
      $q->bindParam(":id",$id);
      $q->bindParam(":code",$code);
      $q->execute();
      return $q;
      
    }
       function UpdateConfirmation($id)
    {
      $db = config::getConnexion();
      $q=$db->prepare("UPDATE Client set status=1 where id=:id");
      $q->bindParam(":id",$id);
      if($q->execute())
      {
      header('Location: ../mimosa/login-client-inter.php');
      exit;
    }
    else
    { 
        echo "erreur";
    }
  }
   public function modifierPass($mdp,$id)
    {
        $sql="UPDATE `client` SET `MotDePasse`='$mdp' WHERE id= $id";
       
       
        $db =config::getConnexion();
       $req=$db->prepare($sql);

       if ($req->execute())
        
        {
            echo "<meta http-equiv='refresh' content='0;url=login-client-inter.php'>";
        }
        else 
        {
          echo "erreur";
        }
            
           // header('Location: index.php');
       // }
        /*catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }*/
        
    
    }
    
}
?>