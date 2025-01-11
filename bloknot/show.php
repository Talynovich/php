<?php 
function getTask($id){
    $pdo = new PDO("mysql:host=1bbcbab602bb.hosting.myjino.ru; dbname=j88638735_var", "j88638735_var", "HdT=67bHa]s"); 
    $statement = $pdo->prepare("SELECT * FROM tasks WHERE id=:id");
    // $statement->bindParam(":id", $_GET["id"]); 
    $statement->execute($id);  
    $task = $statement->fetch(PDO::FETCH_ASSOC);
    return $task; 
    }
    $task = getTask($_GET); 
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Show</title>
</head>
<body>
    <!-- div.container>div.row>div.col-md-12 -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1><?=$task["title"];?></h1>
                <p class="h4"><?= $task["bodyweight"];?></p>
                <p><?=$task["content"];?></p>
                <a href="/" class="btn btn-dark" >Go back</a>
            </div>
        </div>
    </div>
</body>
</html>