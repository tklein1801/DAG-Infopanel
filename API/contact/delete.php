  
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json; charset=utf-8');
require "contact.php";

$contact = new Contact;
echo json_encode($contact->delete($_POST['contact']), JSON_PRETTY_PRINT);
?>