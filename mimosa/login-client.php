<?php
session_start();
if(isset($_SESSION['id'])){
  header("location: index.php");
}
require "config.php";
$conn=Config::getConnexion();
if(isset($_POST['MotDePasse'])){
$user = $_POST['email'];
$pass = ($_POST['MotDePasse']);
$messeg = "";

if(empty($user) || empty($pass)) {
    $messeg = "email/MotDePasse con't be empty";
} else {
    $sql = "SELECT id,email, MotDePasse FROM client WHERE email=? AND 
  MotDePasse=? ";

    $query = $conn->prepare($sql);
    $query->execute(array($user,$pass));
    
    if($query->rowCount() >= 1) {
       foreach ($query as $row) {
           $_SESSION['id'] = $row['id'];
       }
        
        $_SESSION['time_start_login'] = time();
        echo $_SESSION['id'];
        header("location: index.php");
    } else {
        $messeg = "Username/Password is wrong";
        header("location: login-client-inter.php?connect=error");

    }
}
}
?>