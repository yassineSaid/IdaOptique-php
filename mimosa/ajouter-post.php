<?php
include '../core/ForumM.php';

$image="img/blog/general.png";
if ($_POST['categorie']=="General")
$image="img/blog/general.png";
else if ($_POST['categorie']=="Actualites") 
$image="img/blog/news.png";
else if ($_POST['categorie']=="Aide")
$image="img/blog/help.png";
else if ($_POST['categorie']=="Feedback")
$image="img/blog/feedback.png";
else if ($_POST['categorie']=="Questions")
$image="img/blog/questions.png";


$var=new Forum($_POST['titre'],$_POST['categorie'],$_POST['msg'],$image,$_POST['id_client']);
$var2=new ForumManage();
$var2->ajouterPost($var);
?>