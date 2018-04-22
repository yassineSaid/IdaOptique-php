<?php
require_once '../entities/livraison.php';

class LivraisonManage
{
	public function ajouter_livraison($livraison)
	{
		$db=config::getConnexion();
		$req="INSERT INTO livraison (id_client, id_commande,nom,prenom, sosciete,adresse1, adresse2, ville, code_postal, pays, region, email, telephone,note,date_livraison,statut/*, date_livraison, heure_livraison*/) VALUES (:id_client, :id_commande, :nom, :prenom, :sosciete, :adresse1, :adresse2, :ville, :code_postal, :pays, :region, :email, :telephone, :note, now(),'en attente'/*, :date_livraison, :heure_livraison*/);";
		$sql=$db->prepare($req);
		$sql->bindvalue(':id_client',$livraison->get_id_client());
		$sql->bindvalue(':id_commande',$livraison->get_id_commande());
		$sql->bindvalue(':nom',$livraison->get_nom());
		$sql->bindvalue(':prenom',$livraison->get_prenom());
		$sql->bindvalue(':sosciete',$livraison->get_sosciete());
		$sql->bindvalue(':adresse1',$livraison->get_adresse1());
		$sql->bindvalue(':adresse2',$livraison->get_adresse2());
		$sql->bindvalue(':ville',$livraison->get_ville());
		$sql->bindvalue(':code_postal',$livraison->get_code_postal());
		$sql->bindvalue(':pays',$livraison->get_pays());
		$sql->bindvalue(':region',$livraison->get_region());
		$sql->bindvalue(':email',$livraison->get_email());
		$sql->bindvalue(':telephone',$livraison->get_telephone());
		$sql->bindvalue(':note',$livraison->get_note());
		//$sql->bindvalue(':date_livraison',$livraison->get_date_livraison());
		//$sql->bindvalue(':heure_livraison',$livraison->get_heure_livraison());
		if($sql->execute())
			echo "succes";
		else  {
				echo "aaaaa";
			}	
		}
		public function afficher_livraison($id)
	{
		$db=config::getConnexion();
		$req="SELECT * FROM livraison where id_client=$id";
		$sql=$db->query($req);
		return $sql;
	}
		public function afficher_livraisons()
	{
		$db=config::getConnexion();
		$req="SELECT * FROM livraison";
		$sql=$db->query($req);
		return $sql;
	}
	function recupererLivraison($id,$id1){
		$sql="SELECT * from livraison where id_client=$id and id_commande=$id1";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function check($id){
		$sql="SELECT statut from livraison where id_client=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierLivraison($livraison){
		$sql="UPDATE livraison SET nom=:nom,prenom=:prenom,sosciete=:societe,adresse1=:adresse1,adresse2=:adresse2,ville=:ville,code_postal=:code_postal,pays=:pays,region=:region,email=:email,telephone=:telephone,note=:note,date_livraison=now() WHERE id_client=:id_client and id_commande=:id_commande";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
	
        $req=$db->prepare($sql);
		$id_client=$livraison->get_id_client();
        $id_commande=$livraison->get_id_commande();
        $nom=$livraison->get_nom();
        $prenom=$livraison->get_prenom();
        $sosciete=$livraison->get_sosciete();
        $adresse1=$livraison->get_adresse1();
        $adresse2=$livraison->get_adresse2();
        $ville=$livraison->get_ville();
        $code_postal=$livraison->get_code_postal();
        $pays=$livraison->get_pays();
        $region=$livraison->get_region();
        $email=$livraison->get_email();
        $telephone=$livraison->get_telephone();
        $note=$livraison->get_note();
		
		
		$req->bindValue(':id_client',$id_client);
		$req->bindValue(':id_commande',$id_commande);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':societe',$sosciete);
		$req->bindValue(':adresse1',$adresse1);
		$req->bindValue(':adresse2',$adresse2);
		$req->bindValue(':ville',$ville);
		$req->bindValue(':code_postal',$code_postal);
		$req->bindValue(':pays',$pays);
		$req->bindValue(':region',$region);
		$req->bindValue(':email',$email);
		$req->bindValue(':telephone',$telephone);
		$req->bindValue(':note',$note);
		try
		{
          $s= $req->execute();
			
           header('Location: afficheraa.php?id='.$id_client.'&id_commande='.$id_commande);
        
    }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
    }
    function supprimerLivraison($id_commande){
		$sql="DELETE FROM livraison where  id_commande=:id_commande";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_commande',$id_commande);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function enregistrerLivraison($livraison){
		$sql="UPDATE livraison SET statut=:statut,date_livraison=:date_livraison WHERE id_client=:id_client and id_commande=:id_commande";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
	
        $req=$db->prepare($sql);
		
        $date_livraison=$livraison->get_date_livraison();
        $statut=$livraison->get_statut();
        $id_commande=$livraison->get_id_commande();
        $id_client=$livraison->get_id_client();
		$req->bindValue(':id_client',$id_client);
		$req->bindValue(':id_commande',$id_commande);
		$req->bindValue(':date_livraison',$date_livraison);
		$req->bindValue(':statut',$statut);
		try
		{
          $s= $req->execute();

			
           header('Location: afficher-livraison.php');
        exit;
    }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
    }
   
		
	
}	
?>