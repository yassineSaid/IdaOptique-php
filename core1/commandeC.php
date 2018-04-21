<?php
include_once '../entities/commande.php';
include_once '../entities/panier.php';
include_once '../config.php';
class CommandeC 
{
    function afficherCommandes ()
    {
        $sql="SELECT * From commande";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        } 
    }
    function afficherCommandesClient ($id_client)
    {
        $sql="SELECT * From commande where id_client=$id_client";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        } 
    }
    function afficherCommande ($id_commande)
    {
        $sql="SELECT * From commande where id_commande=$id_commande";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        } 
    }
    function afficherLigneCommande ($id_commande){
        $sql="SELECT * From produit p,ligne_commande l where id_commande=$id_commande and l.id_produit=p.produit_id";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        } 
    }
    function creerIdCommande()
    {
        $conn=Config::getConnexion();
        $sql="SELECT max(id_commande) max from commande";
        $result = $conn->query($sql);
        $value = $result->fetch();
        return $value['max']+1;
    }
    function afficherInfoCommande($id_commande)
    {
        $conn=Config::getConnexion();
        $sql="SELECT * from commande where id_commande=$id_commande";
        $result = $conn->query($sql);
        $value = $result->fetch();
        return $value;
    }
    function ajouterLigne($id_commande,$id_produit,$qte)
    {
        $sql="INSERT into ligne_commande values (:id_commande,:id_produit,:qte)";
        $db = config::getConnexion();
            try{
            $req=$db->prepare($sql);
            $req->bindValue(':id_commande',$id_commande);
            $req->bindValue(':id_produit',$id_produit);
            $req->bindValue(':qte',$qte);
            
               if( $req->execute())
               {
                return true;
            }
               
            }
            catch (Exception $e){
                echo 'Erreur: '.$e->getMessage();
            }
    }
    function ajouterCommande($commande){
        
        $id_client=$commande->getId_client();
        $sql="SELECT * From panier p,produit p1 where id_client=$id_client and p1.produit_id=id_produit";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        foreach($liste as $row)
        {
            CommandeC::ajouterLigne($commande->getId_commande(),$row['id_produit'],$row['qte']);
        }
        return true;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        } 
        
    }   
    function confirmerCommande($commande)
    {
        $commande->setId_commande(CommandeC::creerIdCommande());
        $sql="INSERT into commande values (:id_commande,:id_client,:total,:nom,:prenom,:adresse,:adresse2,:ville,:zip,now())";
        $db = config::getConnexion();
            try{
            $req=$db->prepare($sql);
            $req->bindValue(':id_commande',$commande->getId_commande());
            $req->bindValue(':id_client',$commande->getId_client());
            $req->bindValue(':total',$commande->getTotal());
            $req->bindValue(':nom',$commande->getNom());
            $req->bindValue(':prenom',$commande->getPrenom());
            $req->bindValue(':adresse',$commande->getAdresse());
            $req->bindValue(':adresse2',$commande->getAdresse2());
            $req->bindValue(':ville',$commande->getVille());
            $req->bindValue(':zip',$commande->getZip());
            
               if( $req->execute())
               {
                if(CommandeC::ajouterCommande($commande))
                    {
                    if (CommandeC::supprimerPanier($commande->getId_client()))
                        {
                            header('Location: confirmerCommande.php');
                            return true;
                        }
                    }
            }
               
            }
            catch (Exception $e){
                echo 'Erreur: '.$e->getMessage();
            }
        
    }
    
    function supprimerPanier($id_client){
        $sql="DELETE FROM panier where id_client=:id_client";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':id_client',$id_client);
        try{
            $req->execute();
            return true;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function supprimerLigneCommande($id_commande){
        $sql="DELETE FROM ligne_commande where id_commande=:id_commande";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':id_commande',$id_commande);
        try{
            if($req->execute())
            {
                header("Location: afficherCommandes.php");
                return true;
            }
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function supprimerCommande($id_commande){
        $sql="DELETE FROM commande where id_commande=:id_commande";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':id_commande',$id_commande);
        try{
            if (CommandeC::supprimerLigneCommande($id_commande))
            {
                if($req->execute())
                {
                    header("Location: afficherCommandes.php");
                    return true;
                }
            }
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function modifierPanier($id_client,$id_produit,$qte){
        $sql="UPDATE panier SET qte=:qte WHERE id_produit=:id_produit and id_client=:id_client";
        
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
        try
        {  
            $req->bindValue(':id_client',$id_client);
            $req->bindValue(':id_produit',$id_produit);
            $req->bindValue(':qte',$qte);
        
            $s=$req->execute();
            
           header('Location: afficherPanier.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
        
    
}
}

?>