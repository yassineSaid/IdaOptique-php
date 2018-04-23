<?php

require '../core/contactM.php';


$chat1=new chat(778,124,$_POST['text_message'],'raouff');
$ch=new ChatManage();
$ch->ajouterChat($chat1);



?>