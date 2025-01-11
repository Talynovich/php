<?php 
function updateTask($data){
    $pdo = new PDO("mysql:host=1bbcbab602bb.hosting.myjino.ru; dbname=j88638735_var", "j88638735_var", "HdT=67bHa]s"); 
    $statement = $pdo->prepare(query: "UPDATE tasks SET content=:content, title=:title, bodyweight=:bodyweight WHERE id=:id");
    // $statement->bindParam(":id", $_GET["id"]); 
    // $statement->bindParam(":title", $_POST["title"]); 
    // $statement->bindParam(":content", $_POST["content"]); 
    // $statement->bindParam(":bodyweight", $_POST["bodyweight"]); 
    $statement->execute($data);
}
$data = [
    "id"=> $_GET["id"],
    "title"=> $_POST["title"],
    "content"=> $_POST["content"],
    "bodyweight"=> $_POST["bodyweight"]
]; 
updateTask($data); 

header("location: /");
?>