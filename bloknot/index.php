<?php 
    #подключение к базе данных 
require './database/QueryBuilder.php'; 

$db = new QueryBuilder; 

$tasks = $db ->getAllTasks();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>All tasks</title>
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
                            <th>Дата</th>
                            <th>Вес</th>
                            <th>Заметки</th>
                            <th>Actions</th>
                        </tr>
                        <tbody>
                            <?php foreach( $tasks as $task): ?>
                                <tr>
                                    <td><?=$task["id"];?></td>
                                    <td><?=$task["title"];?></td>
                                    <td><?=$task["bodyweight"];?></td>
                                    <td><?=mb_substr(rtrim($task["content"]), 0, 25); echo '...';?></td>
                                    <td>
                                        <a href="show.php?id=<?=$task["id"];?>" class="btn btn-info">Show</a>
                                        <a href="edit.php?id=<?=$task["id"];?>" class="btn btn-warning">Edit</a>
                                        <a href="delete.php?id=<?=$task["id"];?>" class="btn btn-danger">delete</a>
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