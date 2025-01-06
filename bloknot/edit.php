<?php 
$pdo = new PDO("mysql:host=1bbcbab602bb.hosting.myjino.ru; dbname=j88638735_var", "j88638735_var", "HdT=67bHa]s"); 
$statement = $pdo->prepare("SELECT * FROM tasks WHERE id=:id");
$statement->bindParam(":id", $_GET["id"]); 
$statement->execute();  
$task = $statement->fetch(PDO::FETCH_ASSOC);
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
                <form action="">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="<?=$task["title"];?>">
                    </div>
                    <div class="form-group">
                      <textarea name="" class="form-control" placeholder="<?=$task["bodyweight"];?>"></textarea>
                    </div>
                    <div class="form-group">
                      <textarea name="" class="form-control" placeholder="<?=$task["content"];?>"></textarea>
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