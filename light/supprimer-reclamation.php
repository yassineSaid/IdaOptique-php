<?php

require '../core/reclamationM.php';

$cl=new ReclamationManage();
$cl->supprimerreclamation($_GET['id']);


?>