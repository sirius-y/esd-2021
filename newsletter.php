<?php
require 'vendor/autoload.php';
session_start();

$client = new MongoDB\Client;
$iotdata = $client->iotdata;
$collection = $iotdata->newsletter;

//insert data when fields are filled
if ( isset($_POST['email'])){
$insert = array(
'email'=> $_POST['email']
);
$collection->insertOne($insert);
$_SESSION['newsletter'] = 'Thank You for Subscribing to our Newsletter';
header('Location: index.php');
return;
}
 ?>
