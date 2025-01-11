<?php 
function addTask($data){// здесь $data принимает первый параметром данные, которые мы нежиме передали для функции addTask
$sql = "INSERT INTO tasks (title, content, bodyweight) VALUES (:title, :content, :bodyweight)";
$pdo = new PDO("mysql:host=1bbcbab602bb.hosting.myjino.ru; dbname=j88638735_var", "j88638735_var", "HdT=67bHa]s"); 
$statement = $pdo ->prepare($sql);
// $statement->bindParam(":title", $_POST["title"]); 
// $statement->bindParam(":content", $_POST["content"]); 
// $statement->bindParam(":bodyweight" , $_POST["bodyweight"]); 
// То, что выше можно не указывать, так как ниже для execute мы передали параметр _POST
$statement->execute($data); // здесь уже через $data передаем данные с POST запроса 
}
addTask($_POST); // передаем функции addTask данные с POST запроса, который пришли с файла create.php 

header("location: /");
?>