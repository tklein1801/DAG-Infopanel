  
<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json; charset=utf-8');
require "gang.php";

$gang = new GangMoney;
echo json_encode($gang->getTransactions(), JSON_PRETTY_PRINT);
?>