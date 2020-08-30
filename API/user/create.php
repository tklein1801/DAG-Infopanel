  
<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json; charset=utf-8');
require "user.php";

$user = new User;
$user->create($_POST['tool_access'], $_POST['tole'], $_POST['username'],  $_POST['password'],  $_POST['email']);
?>