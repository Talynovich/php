<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Create</title>
</head>
<body>
    <!-- div.container>div.row>div.col-md-12 -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Create Tasks</h1>
                <form action="store.php" method="post">
                    <div class="form-group">
                      <input type="text" class="form-control" value="<?= date("d.m.y");?>" name="title">
                    </div>

                    <div class="form-group">
                      <textarea name="bodyweight" class="form-control" placeholder="Вес"></textarea>
                    </div>

                    <div class="form-group">
                      <textarea name="content" class="form-control" placeholder="Заметка по желанию"></textarea>
                    </div>

                    <div class="form-group">
                      <button class="btn btn-success">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>