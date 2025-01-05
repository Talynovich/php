<?php 
    $tasks= [
        [
            "id"=> 15,
            "title"=> "go to the store123",
            "content"=> "asdaadada"
        ],
    ];
    $dsn = 'mysql:dbname=j88638735_var;host=1bbcbab602bb.hosting.myjino.ru';
    $user = 'j88638735_var';
    $password = 'HdT=67bHa]s';
    
    $dbh = new PDO($dsn, $user, $password);

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
                <h1>Hello World</h1>
                <a href="#" class="btn btn-success">All Tasks</a>
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