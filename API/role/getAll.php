  
<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json; charset=utf-8');
require "role.php";

$role = new Role;
echo json_encode($role->getAll(), JSON_PRETTY_PRINT);
?>