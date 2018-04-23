<?php
include_once "../entities/favoris.php";
include_once '../config.php';
include_once '../entities/Client.php';
include_once '../entities/produit.php';


class FavorisC
{
    function afficherFavorisSession($id_client)
    {
        $sql="SELECT * From favoris f1,produit p,images i where f1.id_client=$id_client and f1.produit_id=p.produit_id and f1.produit_id=i.produit_id and i.type='principal'";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        } 
    }
function rechercherFavoris($id_client,$id_produit)
    {
        $db=Config::getConnexion();
        $sql="SELECT * from favoris where id_client=$id_client AND produit_id=$id_produit";
        $req=$db->prepare($sql);
        try
        {  
        
            $req->execute();
            
            if ($req->rowCount()>0)
                return true;
            else
                return false;
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
        }
    }

function ajouterProduitFavoris($favoris){
        $id_client=$favoris->get_id_client();
        $id_produit=$favoris->get_id_produit();
        if (FavorisC::rechercherFavoris($id_client,$id_produit)==true)
        {
             echo "<meta http-equiv='refresh' content='0;url=afficherFavoris1.php?id=".$id_client."'>";
        }
        else
        {
            $sql="INSERT into favoris (id_client,produit_id) values (:id_client,:id_produit)";
            $db = config::getConnexion();
            try{
            $req=$db->prepare($sql);
            
            $req->bindValue(':id_client',$id_client);
            $req->bindValue(':id_produit',$id_produit);
            
            
               if( $req->execute())
               {
            

            echo "<meta http-equiv='refresh' content='0;url=afficherFavoris1.php?id=".$id_client."'>";
        }
        else 
        {

          echo "<meta http-equiv='refresh' content='0;url=afficherFavoris1.php?id=".$id_client."'>";
        }
            }
               
            
            catch (Exception $e){
                echo 'Erreur: '.$e->getMessage();
            }
        }
        
    }

   function supprimerProduitFavoris($id_produit,$id_client){
        $sql="DELETE FROM favoris where produit_id=$id_produit and id_client=$id_client";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
    
        try{
            $req->execute();
             echo "<meta http-equiv='refresh' content='0;url=afficherFavoris1.php?id=".$id_client."'>";
          
            
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
}


?>