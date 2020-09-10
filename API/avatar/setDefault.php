<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json; charset=utf-8');
require "avatar.php";

$avatar = new Avatar;
echo json_encode($avatar->setDefault($_POST['owner']), JSON_PRETTY_PRINT);
