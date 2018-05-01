<?php

include "../entities/visiteur.php";

class VisiteurManage
{
public function ajouterVisiteur($visiteur) 
    {
        $db=config::getConnexion();
        
        $req="INSERT INTO `visiteur` (`ip_visit`, `country_visit` ,`date_visit`) VALUES ( :ip, :country, :date_visit);";
      
        $sql=$db->prepare($req);
        $sql->bindValue(':ip',$visiteur->get_ip_visit());
        $sql->bindValue(':country',$visiteur->get_country_visit());
        $sql->bindValue(':date_visit',$visiteur->get_date_visit());
         $sql->execute();      
              
    } 
     /*public function afficherVisiteurs()
    {
        $db=config::getConnexion();
        $result ="SELECT * FROM visiteur;";
        $sql=$db->query($result);
        return $sql;
    }*/
     

}












?>