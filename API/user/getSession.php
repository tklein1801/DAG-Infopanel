<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json; charset=utf-8');
session_start();
$arr = array();
if (isset($_SESSION['login'])) {
  $arr = array('loggedIn' => true, 'userId' => $_SESSION['login']['userId'], 'username' => $_SESSION['login']['username']);
} else {
  $arr = array('loggedIn' => false, 'userId' => null, 'username' => null);
}

echo json_encode($arr, JSON_PRETTY_PRINT);
