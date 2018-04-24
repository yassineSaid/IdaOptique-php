<?php
 include_once '../entities/produit.php';
class ProduitManage
{
	public function ajouter_produit($produit)
	{	
		$db=config::getConnexion();
		$req="INSERT INTO produit (produit_id, produit_marque, produit_categorie, produit_nom, produit_description, produit_forme, produit_couleur, produit_prix,produit_qte,produit_date_ajout,produit_date_modification) VALUES (:id_produit,:produit_marque,:produit_categorie,:produit_nom,:description,:produit_forme,:produit_couleur,:prix,:quantite,:dateajout,:datemod);";
		date_default_timezone_get('GMT');
		$time=date("d-m-Y H:i:s");
		$sql=$db->prepare($req);
		$sql->bindvalue(':id_produit',$produit->get_idproduit());
        $sql->bindvalue(':produit_marque',$produit->get_marque());
		$sql->bindvalue(':produit_categorie',$produit->get_categorie());
		$sql->bindvalue(':produit_nom',$produit->get_nom());
		$sql->bindvalue(':description',$produit->get_description());
        $sql->bindvalue(':produit_forme',$produit->get_forme());
        $sql->bindvalue(':produit_couleur',$produit->get_couleur());
		$sql->bindvalue(':prix',$produit->get_prix());
		$sql->bindvalue(':quantite',$produit->get_quantite());
		$sql->bindvalue(':dateajout',$time);
		$sql->bindvalue(':datemod',$time);
		//$sql->execute();
		if($sql->execute())
        {
        	
           //echo "<meta http-equiv=\"refresh\" content=\"0;URL=affichage-produit.php\">";
         }
        	else
        {
           //echo "<meta http-equiv=\"refresh\" content=\"0;URL=affichage-produit.php\">";
        }
		

	}
	public function afficherProduit()
	{
		$db=config::getConnexion();
		$req="SELECT * from produit p,images i where p.produit_id=i.produit_id and i.type='principal'";
		$sql=$db->query($req);
		
		return $sql;
	}
	public function rechercherProduit($val)
	{
		$db=config::getConnexion();
		$req="SELECT * from produit where  produit_nom like '%$val%' or produit_id like '%$val%'";

		$sql=$db->query($req);
		
		return $sql;

	}
	public function supprimerProduit()
	{
		
		$db=config::getConnexion();
		$req="DELETE from produit where produit_id=:id";
		$sql=$db->prepare($req);
		$sql->bindvalue(":id",$_GET['id']);
		if($sql->execute())
        {
        	
            echo "<p style='text-align: center;'><img src='http://pluspng.com/img-png/success-png-success-icon-image-23194-400.png' width='319' height='319' /></p>";
             echo "<h2 style='text-align: center;'><span style='color: #3BB54A;'><strong>Supprimer avec succes</strong></span></h2>";
             header("Refresh:2;url=affichage-produit.php");
             exit;
         }
        	else
        {
            echo "<p style='text-align: center;'><img src='https://cdn1.iconfinder.com/data/icons/smallicons-controls/32/614338-.svg-512.png' width='319' height='319' /></p>";
            echo "<h2 style='text-align: center;'><span style='color: #E2574C;'><strong>Erreur de suppression !</strong></span></h2>";
            header("Refresh:2;url=affichage-produit.php");
            	
            exit;
        }


	}
	function recupererProduit($idp){
		$sql="SELECT * from produit where produit_id=$idp";
		$db=config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	public function modifierProduit($produit)
	{
		$db=config::getConnexion();
		date_default_timezone_get('GMT');
		$time=date("d-m-Y H:i:s");
	
		$req = "UPDATE produit SET produit_marque=:produit_marque,produit_categorie=:produit_categorie, produit_nom=:produit_nom,produit_description=:description, produit_forme=:produit_forme,produit_couleur=:produit_couleur,produit_prix=:prix, produit_qte=:quantite, produit_date_modification=:datemod WHERE produit_id=:idProduit";

	$sql= $db->prepare($req);
 		$sql->bindvalue(':idProduit',$produit->get_idproduit());
        $sql->bindvalue(':produit_marque',$produit->get_marque());
 		$sql->bindvalue(':produit_categorie',$produit->get_categorie());
 		$sql->bindvalue(':produit_nom',$produit->get_nom());
        $sql->bindvalue(':description',$produit->get_description());
        $sql->bindvalue(':produit_forme',$produit->get_forme());
        $sql->bindvalue(':produit_couleur',$produit->get_couleur());
		$sql->bindvalue(':prix',$produit->get_prix());
		$sql->bindvalue(':quantite',$produit->get_quantite());
		$sql->bindvalue(':datemod',$time);

 	
	
 	
 	if($sql->execute())
        {
        	
            echo "<p style='text-align: center;'><img src='success.png' width='319' height='319' /></p>";
             echo "<h2 style='text-align: center;'><span style='color: #3BB54A;'><strong>Modifier avec succes</strong></span></h2>";
             header("Refresh:2;url=affichage-produit.php");
             exit;
         }
        	else
        {
            echo "<p style='text-align: center;'><img src='erreur.png' width='319' height='319' /></p>";
            echo "<h2 style='text-align: center;'><span style='color: #E2574C;'><strong>Erreur de modification !</strong></span></h2>";
            header("Refresh:2;url=affichage-produit.php");
            	
            exit;
        }
 		
 	

 	

	
	 
 
}
public function afficherProduitCategorie($cat,$page)
	{
		$db=config::getConnexion();
		$sel=($page-1)*10;
		$req="SELECT * from produit p,images i where p.produit_id=i.produit_id and i.type='principal' and p.produit_categorie='$cat' LIMIT $sel,10";
		$sql=$db->query($req);
		
		return $sql;
	}
    function getNbPages($cat)
    {
    	$conn=Config::getConnexion();
        $sql="SELECT * from produit where produit_categorie='$cat'";
        $query = $conn->prepare($sql);
        $query->execute();
        return ceil($query->rowCount()/10);
    }
	function recupererProduit2($idp){
		$sql="SELECT * from produit p,images i where p.produit_id=$idp and i.produit_id=$idp and i.type='principal'";
		$db=config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
/*public function afficherComparateur()
	{
		$db=config::getConnexion();
		$req="SELECT produit_id from comparateur";
		$sql=$db->query($req);
		
		return $sql;
	}*/
	public function afficherProduitCmp($val)
	{
		$db=config::getConnexion();
		$req="SELECT * from produit p,images i where p.produit_id=$val and i.type='principal' and i.produit_id=$val";
		$sql=$db->query($req);
		
		return $sql;
	}
	
	public function afficherProduitFiltre($min,$max,$cat)
	{
		$db=config::getConnexion();
		$req="SELECT * from produit p,images i where p.produit_id=i.produit_id and i.type='principal' and p.produit_categorie='$cat' and produit_prix between $min and $max";
		$sql=$db->query($req);
		
		return $sql;
	}
	public function recupererFiltre($filtre)
	{
		$db=config::getConnexion();
		$req="SELECT * from filtre where id_filtre=$filtre";
		$sql=$db->query($req);
		
		return $sql;
	}
	public function getRating($id)
	{
		$db=config::getConnexion();
		$req="SELECT round(avg(rate)) r1 from rating where produit_id=$id";
		$sql=$db->query($req);
		return $sql;
	}
	public function addRating($id,$rate)
	{
		$db=config::getConnexion();
		$req="INSERT INTO rating (produit_id,rate) VALUES (:id_produit,:rate)";
		$sql=$db->prepare($req);
		$sql->bindvalue(':id_produit',$id);
        $sql->bindvalue(':rate',$rate);
		if($sql->execute())
        {
        	
           //echo "<meta http-equiv=\"refresh\" content=\"0;URL=affichage-produit.php\">";
         }
        	else
        {
           //echo "<meta http-equiv=\"refresh\" content=\"0;URL=affichage-produit.php\">";
        }
	}
	public function getMinMaxPrice()
	{
		$db=config::getConnexion();
		$req="SELECT min(produit_prix) min,max(produit_prix) max from produit";
		$sql=$db->query($req);
		return $sql;
	}



}




?>