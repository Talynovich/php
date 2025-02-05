<?php 

 #подключение к базе данных 
require './database/QueryBuilder.php'; 

$db = new QueryBuilder; 
// вывод одной зачади 
$task = $db->getTask($_GET); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Edit</title>
</head>
<body>
    <!-- div.container>div.row>div.col-md-12 -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Edit Tasks</h1>
                <form action="update.php?id=<?= $task["id"];?>" method="post">
                    <div class="form-group">
                      <input name="title" type="text" value="<?=$task["title"];?>" class="form-control" placeholder="<?=$task["title"];?>">
                    </div>
                    <div class="form-group">
                      <textarea name="bodyweight" class="form-control"><?=$task["bodyweight"];?></textarea>
                    </div>
                    <div class="form-group">
                      <textarea name="content" class="form-control"><?=$task["content"];?></textarea>
                    </div>
                    <div class="form-group">
                      <button class="btn btn-warning">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>