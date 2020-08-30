  
<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json; charset=utf-8');
require "gang.php";

$gang = new GangMoney;
print_r($gang->deleteTransaction($_POST['transaction']));
?>