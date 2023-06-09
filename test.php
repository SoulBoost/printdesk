<?php
require_once 'app/include/database.php'; 
echo('Страница для тестов'); ?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">

    
    <title>Тестовая страница</title>
</head>
<body>
<form action="action_test.php" method="POST" enctype="multipart/form-data">

<div class="cont">
           

            <div class="input-group flex-nowrap mt-2">
                <span class="input-group-text" id="addon-wrapping">Введите название принтера: </span>
                <input type="text" class="form-control" placeholder="Пример: VOL-32-HP402" name="text" aria-describedby="addon-wrapping" >
            </div>
            <div class="text-center">
                <button class="btn btn-success mt-auto" type="submit" onclick="alert('Данные обновлены')" href="form.php">Добавить принтер</button>
                </div>
    </div>
</div>


</form>
</body>
</html>
