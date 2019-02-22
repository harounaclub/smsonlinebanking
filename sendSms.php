<?php



require 'Osms.php';

$token=$_POST["token"];
$tel=$_POST["tel"];
$message=$_POST["message"];

use \Osms\Osms;

$config = array(
    'token' => $token
);

$osms = new Osms($config);

//$osms->setVerifyPeerSSL(false);

$response = $osms->sendSms('tel:+22508891055','tel:+225'.$tel,$message);

if (empty($response['error'])) {
    echo 'Done!';
} else {
    echo $response['error'];
}
