  
<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json; charset=utf-8');
require "gallery.php";

$gal = new Gallery;
echo json_encode($gal->get($_GET['image']), JSON_PRETTY_PRINT);
?>