  
<?php
header('Access-Control-Allow-Origin: *');
require "gang.php";

$gang = new GangMoney;
echo $gang->getBalance();
?>