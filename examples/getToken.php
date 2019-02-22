<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);


require 'Osms.php';

use \Osms\Osms;

$config = array(
    'clientId' => '3fQ7SRVHlc9WLarqfxSIA7MUfbTzMbAs',
    'clientSecret' => 'GlorDnsnofBUKF4m'
);

$osms = new Osms($config);

//$osms->setVerifyPeerSSL(false);

$response = $osms->getTokenFromConsumerKey();

if (empty($response['error'])) {
    echo $response['access_token'];
    // echo $osms->getToken();
    // echo '<pre>'; print_r($response); echo '</pre>';
} else {
    echo $response['error'];
}
