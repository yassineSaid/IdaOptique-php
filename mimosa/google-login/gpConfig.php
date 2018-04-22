<?php

//Include Google client library 
include_once 'src/Google_Client.php';
include_once 'src/contrib/Google_Oauth2Service.php';

/*
 * Configuration and setup Google API
 */
$clientId = '962019930958-vsje9rk72et9vqt7p6tiu923osth159m.apps.googleusercontent.com'; //Google client ID
$clientSecret = '7rYXabe8ffwze86fPlzHz3Pa'; //Google client secret
$redirectURL = 'http://127.0.0.1/login-google'; //Callback URL

//Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Login to CodexWorld.com');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>