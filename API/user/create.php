  
<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json; charset=utf-8');
require "user.php";

$user = new User;
echo json_encode($user->create($_POST['tool_access'], $_POST['tole'], $_POST['username'],  $_POST['password'],  $_POST['email']), JSON_PRETTY_PRINT);
?>