<?php 
class QueryBuilder{
    // получить список записей
    function getAllTasks() {
        $pdo = new PDO("mysql:host=81.177.141.86; port=3306; dbname=bloknot", "bloknot", "HdT=67bHa]s"); 
        $statement = $pdo->prepare("SELECT * FROM tasks");  #подготавливаем запрос prepare = подготовить
        $statement->execute(); #выполняем запрос execute = выполнять  
        $tasks = $statement; 
        return $tasks;
        
    }

    // Добавляет новую запись 
    function addTask($data){
        $sql = "INSERT INTO tasks (title, content, bodyweight) VALUES (:title, :content, :bodyweight)";
        $pdo = new PDO("mysql:host=81.177.141.86; port=3306; dbname=bloknot", "bloknot", "HdT=67bHa]s");
        $statement = $pdo ->prepare($sql);
        // $statement->bindParam(":title", $_POST["title"]); 
        // $statement->bindParam(":content", $_POST["content"]); 
        // $statement->bindParam(":bodyweight" , $_POST["bodyweight"]); 
        // То, что выше можно не указывать, так как ниже для execute мы передали параметр _POST
        $statement->execute($data); // здесь уже через $data передаем данные с POST запроса 
        }
        // вывод одной записи 
    function getTask($id){
            $pdo = new PDO("mysql:host=81.177.141.86; port=3306; dbname=bloknot", "bloknot", "HdT=67bHa]s");
            $statement = $pdo->prepare("SELECT * FROM tasks WHERE id=:id");
            // $statement->bindParam(":id", $_GET["id"]); 
            $statement->execute($id);  
            $task = $statement->fetch(PDO::FETCH_ASSOC);
            return $task; 
            }
            //  изменение / обновление одной записи 
    function updateTask($data){
                $pdo = new PDO("mysql:host=81.177.141.86; port=3306; dbname=bloknot", "bloknot", "HdT=67bHa]s");
                $statement = $pdo->prepare(query: "UPDATE tasks SET content=:content, title=:title, bodyweight=:bodyweight WHERE id=:id");
                // $statement->bindParam(":id", $_GET["id"]); 
                // $statement->bindParam(":title", $_POST["title"]); 
                // $statement->bindParam(":content", $_POST["content"]); 
                // $statement->bindParam(":bodyweight", $_POST["bodyweight"]); 
                $statement->execute($data);
            }
            // удаление записи 
    function deletaTask($id){
                $pdo = new PDO("mysql:host=81.177.141.86; port=3306; dbname=bloknot", "bloknot", "HdT=67bHa]s"); 
                $statement = $pdo->prepare("DELETE FROM tasks WHERE id=:id");
                // $statement->bindParam(":id", $_GET["id"]); 
                $statement->execute($id);  
                }
}
?>