<?php 
$sql = "INSERT INTO tasks (title, content) VALUES (:title, :content)";
$pdo = new PDO("mysql:host=1bbcbab602bb.hosting.myjino.ru; dbname=j88638735_var", "j88638735_var", "HdT=67bHa]s"); 
$statement = $pdo ->prepare($sql);
$statement->bindParam(":title", $_POST["title"]); 
$statement->bindParam(":content", $_POST["content"]); 
$statement->execute(); 
header("location: /bloknot/");
?>