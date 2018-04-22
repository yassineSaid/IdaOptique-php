<?php

require "../config.php";

Class ClientfideleC
{     



        function ajouterClientfidele($clientfidele)
    {

        $db = config::getConnexion();
        $req = $db->query("SELECT id_client, sum(total) as sumCom  , count(*) as counCom from commande WHERE id_client=$clientfidele");
            
                            $donnees = $req->fetch();
                            $count=$donnees['sumCom'];
                            $nb=$donnees['counCom'];
                            $id=$donnees['id_client'];


                            if (($count>300) and ($count<500))

                              {

                                        $q=$db->prepare("SELECT codePromo , pourcentage from promotion where pourcentage='10' ");
                                        $q->execute();
                                        $liste=$q->fetchAll();

                                   
                                          foreach($liste as $val) 
                                          {
                                             $code=$val['codePromo'] ;
                                             $pourcentage=$val['pourcentage'] ;                                          }

                               }
                               if  (($count>500) and ($count<700))
                              {

                                        $q=$db->prepare("SELECT codePromo , pourcentage from promotion where pourcentage='15' ");
                                        $q->execute();
                                        $liste=$q->fetchAll();

                                   
                                          foreach($liste as $val) 
                                          {
                                             $code=$val['codePromo'] ;
                                             $pourcentage=$val['pourcentage'] ;   
                                          }

                               }
                               if (($count>700) and ($count<900))

                              {

                                        $q=$db->prepare("SELECT codePromo , pourcentage from promotion where pourcentage='20' ");
                                        $q->execute();
                                        $liste=$q->fetchAll();

                                   
                                          foreach($liste as $val) 
                                          {
                                             $code=$val['codePromo'] ;
                                             $pourcentage=$val['pourcentage'] ;   
                                          }

                               }


                              if ($count>900) 

                              {

                                        $q=$db->prepare("SELECT codePromo , pourcentage from promotion where pourcentage='25' ");
                                        $q->execute();
                                        $liste=$q->fetchAll();

                                   
                                          foreach($liste as $val) 
                                          {
                                             $code=$val['codePromo'] ;
                                             $pourcentage=$val['pourcentage'] ;   
                                          }

                               }

                  $validite=1;
                  $p="INSERT INTO clientfidele (id_client, codePromo, sum , count , pourcentage,  validite) VALUES ('$id' ,'$code','$count', '$nb',  '$pourcentage','$validite') ";
                                $sql = $db->prepare($p);
                       
       

                                         if ($sql->execute())
                                                
                                                    echo "ok";
                                                    else echo "gg";
                                                    header('Location: Clienfidele.php');
    }




 function afficherClientfidele ()
            {    
            	$db = config::getConnexion();
                $sql="SELECT * From clientfidele";
                try{
                $liste=$db->query($sql);
                return $liste;
                }
                catch (Exception $e){
                    die('Erreur: '.$e->getMessage());
                } 
            }



 function supprimerClientfidele($clientfidele)
    {
    $sql="DELETE FROM clientfidele where id_client= :clientfidele";
    $db = config::getConnexion();
        $req=$db->prepare($sql);
    $req->bindValue(':clientfidele',$clientfidele);
    try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
  }

}










?>