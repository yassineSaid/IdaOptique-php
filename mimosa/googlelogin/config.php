<?php
if(session_status()==PHP_SESSION_DISABLED)
{session_start();}
	require_once "GoogleAPI/vendor/autoload.php";
$http = new GuzzleHttp\Client([
    'verify' => 'D:/wamp64/bin/php/php5.6.25/extras/ssl/cacert.pem'
]);
$gClient = new Google_Client;
$gClient->setHttpClient($http);

$gClient->setClientId("962019930958-l1n7s9a6oeo0rd5bf8oighv9nitp6j27.apps.googleusercontent.com");
	$gClient->setClientSecret("o6lIlFNZHpg2XW4qDWrKpmq2");
	$gClient->setApplicationName("Ida optique");
	$gClient->setRedirectUri("http://localhost/code/mimosa/googlelogin/g-callback.php");
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
?>
