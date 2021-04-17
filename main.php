<?php
require 'vendor/autoload.php';
$messege='Data is Exported and Saved in Directory';
echo '<p style="color:green">'.$messege."</p>\n";
$client = new MongoDB\Client;
$iotdata = $client->iotdata;
$collection = $iotdata->iotdata;

$disp = $collection->find(
  [],
   ['projection'=>['_id' => 0, 'location'=>1, 'forecast'=>1, 'Temperature'=> 1]]
 );
$array=array();
 foreach ($disp as $doc) {
   echo '<pre>';
   var_dump($doc);
   echo '</pre>';
   $array[]=$doc;
    }
    $json = json_encode($array);
    date_default_timezone_set("Asia/Kolkata");
    $bytes = file_put_contents("dbdata/data".date("dHi").".json", $json);
 ?>
 <button onclick="goBack()">Go Back</button>

 <script>
 function goBack() {
   window.location="index.php";
 }
 </script>
