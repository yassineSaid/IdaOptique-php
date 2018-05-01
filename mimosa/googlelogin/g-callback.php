<?php
session_start();
	require_once "config.php";

	if (isset($_SESSION['access_token']))
		$gClient->setAccessToken($_SESSION['access_token']);
	else if (isset($_GET['code'])) {
		$token = $gClient->fetchAccessTokenWithAuthCode($_GET['code']);
		$_SESSION['access_token'] = $token;
	} else {
		header('Location: http://127.0.0.1/code/mimosa/index.php');
		exit();
	}
	$oAuth = new Google_Service_Oauth2($gClient);
	$userData = $oAuth->userinfo_v2_me->get();
$_SESSION['google']=true;
	$_SESSION['idd'] = $userData['id'];
	//$_SESSION['email'] = $userData['email'];
	//$_SESSION['gender'] = $userData['gender'];
	$_SESSION['picture'] = $userData['picture'];
	//$_SESSION['familyName'] = $userData['familyName'];
	//$_SESSION['givenName'] = $userData['givenName'];
$_SESSION['id']=$userData['givenName'].'_'.$userData['familyName'].'_'.$userData['gender'].'_'.$userData['id'];
	header("Location: http://localhost/code/mimosa/index.php?id=".$_SESSION['id']);
	exit();
?>