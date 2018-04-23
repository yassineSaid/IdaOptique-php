<?php

include '../core/contactM.php';

$con=new Contact($_POST['nom'],$_POST['email'],$_POST['sujet'],$_POST['message']);
$co=new ContactManage();
$co->ajouterContact($con);



?>