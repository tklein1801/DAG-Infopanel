  
<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json; charset=utf-8');
require "gang.php";

$gang = new GangMoney;
echo json_encode($gang->deleteTransaction($_POST['transaction']), JSON_PRETTY_PRINT);
?>