<?php
include_once "../config.php";
function existeMail($mail)
{
    $c=config::getConnexion();
    $sql="select * from client WHERE email='$mail'  ";
    try{
        $liste=$c->query($sql);
        if( $liste->rowCount()!=0)
        {
            return true;
        }

    }catch (PDOException $e)
    {
        die( "Echec de connexion".$e->getMessage());
    }
}

if(isset($_GET['email'])){
if(existeMail($_GET['email']))
{
echo 1;


}
else {
	echo 2;
}
}














?>