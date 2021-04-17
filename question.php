<?php
require 'vendor/autoload.php';
session_start();
$_SESSION['question'] = 'Thank You. Your Query is submitted.';

$client = new MongoDB\Client;
$iotdata = $client->iotdata;
$collection = $iotdata->contact;

//insert data when fields are filled
if ( isset($_POST['fname']) && isset($_POST['email'])){
$insert = array(
'fname'=> $_POST['fname'],
'email'=> $_POST['email'],
'subject'=> $_POST['subject'],
'question'=> $_POST['question']
);
$collection->insertOne($insert);
$_SESSION['question'] = 'Thank You. Your Query is submitted.';
header('Location: contact.php');
return;
}
 ?>
