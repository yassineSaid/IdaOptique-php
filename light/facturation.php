<?PHP
include "config.php";
class Facturation {
function afficherFacture ($ref){
        $sql="SElECT * From produit p,facture_ligne l where refFacture=$ref and l.idProduit=p.produit_id";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        } 
    }
    /*function calculerSalaire($employe){
        echo $employe->getNbHeures() * $employe->getTarifHoraire();
    }
    function ajouterEmploye($employeemploye){
        $sql="insert into employe (cin,nom,prenom,nbHeures,tarifHoraire) values (:cin, :nom,:prenom,:nbH,:tarifH)";
        $db = config::getConnexion();
        try{
        $req=$db->prepare($sql);
        
        $cin=$employe->getCin();
        $nom=$employe->getNom();
        $prenom=$employe->getPrenom();
        $nb=$employe->getNbHeures();
        $tarif=$employe->getTarifHoraire();
        $req->bindValue(':cin',$cin);
        $req->bindValue(':nom',$nom);
        $req->bindValue(':prenom',$prenom);
        $req->bindValue(':nbH',$nb);
        $req->bindValue(':tarifH',$tarif);
        
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
        
    }*/
    
    function afficherFactures(){
        //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
        $sql="SElECT * From facture";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }/*
    function supprimerEmploye($cin){
        $sql="DELETE FROM employe where cin= :cin";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':cin',$cin);
        try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function modifierEmploye($employe,$cin){
        $sql="UPDATE employe SET cin=:cinn, nom=:nom,prenom=:prenom,nbHeures=:nbH,tarifHoraire=:tarifH WHERE cin=:cin";
        
        $db = config::getConnexion();
        //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{        
        $req=$db->prepare($sql);
        $cinn=$employe->getCin();
        $nom=$employe->getNom();
        $prenom=$employe->getPrenom();
        $nb=$employe->getNbHeures();
        $tarif=$employe->getTarifHoraire();
        $datas = array(':cinn'=>$cinn, ':cin'=>$cin, ':nom'=>$nom,':prenom'=>$prenom,':nbH'=>$nb,':tarifH'=>$tarif);
        $req->bindValue(':cinn',$cinn);
        $req->bindValue(':cin',$cin);
        $req->bindValue(':nom',$nom);
        $req->bindValue(':prenom',$prenom);
        $req->bindValue(':nbH',$nb);
        $req->bindValue(':tarifH',$tarif);
        
        
            $s=$req->execute();
            
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
        
    }
    function recupererEmploye($cin){
        $sql="SELECT * from employe where cin=$cin";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    
    function rechercherListeEmployes($tarif){
        $sql="SELECT * from employe where tarifHoraire=$tarif";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }*/
}

?>