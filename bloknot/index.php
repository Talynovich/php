<?php 
    #подключение к базе данных 
    $pdo = new PDO("mysql:host=1bbcbab602bb.hosting.myjino.ru; dbname=j88638735_var", "j88638735_var", "HdT=67bHa]s"); 
    $statement = $pdo->prepare("SELECT * FROM tasks");  #подготавливаем запрос prepare = подготовить
    $statement->execute(); #выполняем запрос execute = выполнять  
    $tasks = $statement; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>All Tasks</h1>
                <a href="create.php" class="btn btn-success">All Tasks</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Actions</th>
                        </tr>
                        <tbody>
                            <?php foreach( $tasks as $task): ?>
                                <tr>
                                    <td><?=$task["id"];?></td>
                                    <td><?=$task["title"];?></td>
                                    <td>
                                        <a href="#" class="btn btn-warning">Edit</a>
                                        <a href="#" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            <?php endforeach;?>
                        </tbody>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</body>
</html>