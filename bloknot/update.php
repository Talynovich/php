<?php 
 #подключение к базе данных 
 require './database/QueryBuilder.php'; 

 $db = new QueryBuilder; 

$data = [
    "id"=> $_GET["id"],
    "title"=> $_POST["title"],
    "content"=> $_POST["content"],
    "bodyweight"=> $_POST["bodyweight"]
]; 
$db->updateTask($data); 

header("location: /");
?>