  
<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json; charset=utf-8');
require "gang.php";

$gang = new GangMoney;
$gang->registerTransaction($_POST['sender'], $_POST['reason'], $_POST['amount']);
?>