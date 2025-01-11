<?php 
function deletaTask($id){
$pdo = new PDO("mysql:host=1bbcbab602bb.hosting.myjino.ru; dbname=j88638735_var", "j88638735_var", "HdT=67bHa]s"); 
$statement = $pdo->prepare("DELETE FROM tasks WHERE id=:id");
// $statement->bindParam(":id", $_GET["id"]); 
$statement->execute($id);  
}
deletaTask($_GET); 
header("location: /");
?>