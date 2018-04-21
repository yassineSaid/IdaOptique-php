<?php
require 'config.php';
class Livraison
{
	private $id_client,$id_commande,$nom,$prenom,$sosciete,$adresse1,$adresse2,$ville,$code_postal,$pays,$region,$email,$telephone,$note;
	public function __construct($id_client,$id_commande,$nom,$prenom,$sosciete,$adresse1,$adresse2,$ville,$code_postal,$pays,$region,$email,$telephone,$note/*,$date_livraison,$heure_livraison*/)
	{
		$this->id_client=$id_client;
		$this->id_commande=$id_commande;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->sosciete=$sosciete;
		$this->adresse1=$adresse1;
		$this->adresse2=$adresse2;
		$this->ville=$ville;
		$this->code_postal=$code_postal;
		$this->pays=$pays;
		$this->region=$region;
		$this->email=$email;
		$this->telephone=$telephone;
		$this->note=$note;
		//$this->date_livraison=$date_livraison;
		//$this->heure_livraison=$heure_livraison;
	}
	public function get_id_client(){return $this->id_client;}
	public function get_id_commande(){return $this->id_commande;}
	public function get_nom(){return $this->nom;}
	public function get_prenom(){return $this->prenom;}
	public function get_sosciete(){return $this->sosciete;}
	public function get_adresse1(){return $this->adresse1;}
	public function get_adresse2(){return $this->adresse2;}
	public function get_ville(){return $this->ville;}
	public function get_code_postal(){return $this->code_postal;}
	public function get_pays(){return $this->pays;}
	public function get_region(){return $this->region;}
	public function get_email(){return $this->email;}
	public function get_telephone(){return $this->telephone;}
	public function get_note(){return $this->note;}
	
	public function set_id_client($val){$this->id_client=$val;}
	public function set_id_commande($val){$this->id_commande=$val;}
	public function set_adresse1($val){$this->adresse1=$val;}
	public function set_adresse2($val){$this->adresse2=$val;}
	public function set_code_postal($val){$this->code_postal=$val;}
	public function set_ville($val){$this->ville=$val;}
	public function set_pays($val){$this->pays=$val;}
	public function set_date_livraison($val){$this->date_livraison=$val;}
	public function set_heure_livraison($val){$this->heure_livraison=$val;}
}
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
				echo "haw zebbi ken khdemt";
			}	
		}
		public function afficher_livraison($id)
	{
		$db=config::getConnexion();
		$req="SELECT * FROM livraison where id_client=$id";
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
		
	
}	
?>