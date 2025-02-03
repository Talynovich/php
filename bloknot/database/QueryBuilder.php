<?php 
class QueryBuilder{
    public $pdo; 

    function __construct(){
        $this->pdo = new PDO("mysql:host=81.177.141.86; port=3306; dbname=bloknot; charset=utf8", "bloknot", "HdT=67bHa]s");
    }

    // получить список записей
    function getAllTasks() {
        $sql = ("SELECT * FROM tasks"); 
        $statement = $this->pdo->prepare($sql);  #подготавливаем запрос prepare = подготовить
        $statement->execute(); #выполняем запрос execute = выполнять  
        $tasks = $statement; 
        return $tasks;
        
    }

    // Добавляет новую запись 
    function addTask($data){
        $sql = "INSERT INTO tasks (title, content, bodyweight) VALUES (:title, :content, :bodyweight)";
        $statement = $this->pdo ->prepare($sql);
        // $statement->bindParam(":title", $_POST["title"]); 
        // $statement->bindParam(":content", $_POST["content"]); 
        // $statement->bindParam(":bodyweight" , $_POST["bodyweight"]); 
        // То, что выше можно не указывать, так как ниже для execute мы передали параметр _POST
        $statement->execute($data); // здесь уже через $data передаем данные с POST запроса 
        }
        // вывод одной записи 
    function getTask($id){
            $sql = ("SELECT * FROM tasks WHERE id=:id"); 
            $statement = $this->pdo->prepare($sql);
            // $statement->bindParam(":id", $_GET["id"]); 
            $statement->execute($id);  
            $task = $statement->fetch(PDO::FETCH_ASSOC);
            return $task; 
            }
            //  изменение / обновление одной записи 
    function updateTask($data){
                $statement = $this->pdo->prepare(query: "UPDATE tasks SET content=:content, title=:title, bodyweight=:bodyweight WHERE id=:id");
                // $statement->bindParam(":id", $_GET["id"]); 
                // $statement->bindParam(":title", $_POST["title"]); 
                // $statement->bindParam(":content", $_POST["content"]); 
                // $statement->bindParam(":bodyweight", $_POST["bodyweight"]); 
                $statement->execute($data);
            }
            // удаление записи 
    function deletaTask($id){
                $statement = $this->pdo->prepare("DELETE FROM tasks WHERE id=:id");
                // $statement->bindParam(":id", $_GET["id"]); 
                $statement->execute($id);  
                }
}
?>