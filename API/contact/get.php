  
<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json; charset=utf-8');
require "contact.php";

$contact = new Contact;
echo json_encode($contact->get($_GET['contact']), JSON_PRETTY_PRINT);
?>