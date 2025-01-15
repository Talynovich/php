<?php 

 #подключение к базе данных 
 require './database/QueryBuilder.php'; 

 $db = new QueryBuilder; 
$db->deletaTask($_GET); 
header("location: /");
?>