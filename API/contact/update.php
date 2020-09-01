  
<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json; charset=utf-8');
require "contact.php";

$contact = new Contact;
echo json_encode($contact->update($_POST['contact'], $_POST['name'], $_POST['information']), JSON_PRETTY_PRINT);
?>