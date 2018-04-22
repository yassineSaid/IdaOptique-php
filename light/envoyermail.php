<?php
   
     require "../config.php";

$to      = $_POST['to'];
$objet   = $_POST['objet'];
$message = $_POST['area'];

mail($_POST['to'], $_POST['objet'], $_POST['area']);

header('Location: http://localhost/projet/light/page-confirm-mail.html');



?>