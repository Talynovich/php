<?php 
    #подключение к базе данных 
    require './database/QueryBuilder.php'; 

    $db = new QueryBuilder; 

    $db->addTask($_POST); // передаем функции addTask данные с POST запроса, который пришли с файла create.php 

    header("location: /");
?>