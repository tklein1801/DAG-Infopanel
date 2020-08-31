  
<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json; charset=utf-8');
require "user.php";

$user = new User;
echo json_encode($user->get($_GET['user']), JSON_PRETTY_PRINT);
?>