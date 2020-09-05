  
<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json; charset=utf-8');
require "news.php";

$news = new News;
echo json_encode($news->create($_POST['author'], $_POST['heading'], $_POST['content']), JSON_PRETTY_PRINT);
?>