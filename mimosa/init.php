<?php


//require 'classes/users.php';
require '../core/messagesM.php';
 $db=config::getConnexion();
//$users = new User($db);
$messages = new Message($db);
$errors = array();