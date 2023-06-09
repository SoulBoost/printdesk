<?php session_start();?>

<?php require_once '../app/header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="addprinters.css">
    
    <title>Добавление принтера</title>
</head>
<body>
<form action="action.php" method="POST" enctype="multipart/form-data">
<?php if(!empty($_SESSION["login"])) : ?>
<div class="cont">
           

            <div class="input-group flex-nowrap mt-2">
                <span class="input-group-text" id="addon-wrapping">Доменное название принтера</span>
                <input type="text" class="form-control" placeholder="Пример: VOL-32-HP402" name="nameprint" aria-describedby="addon-wrapping">
            </div>


           <div class="input-group flex-nowrap mt-2">
                <span class="input-group-text" id="addon-wrapping">IP address:</span>
                <input type="text" class="form-control" placeholder="Пример: 10.53.14.23" name="IP" aria-describedby="addon-wrapping">
            </div>

            <div class="input-group mb-3 mt-2">
                <label class="input-group-text" for="inputGroupSelect01">Выберите филиал</label>
                <select class="form-select" id="inputGroupSelect01">
                <option value="0">Волгоградский</option>
                </select>
            </div>
            <p>Выберите путь к скрипту (bat формат)</p>
            <div class="input-group mb-3">
                <input type="file" class="form-control" name="file" id="inputGroupFile01">
                </div>
            <p>Выберите изображение</p>
            <div class="input-group mb-3">
                <input type="file" class="form-control" name="filemg" id="inputGroupFile01">
            </div>

                <div class="text-center">
                <button class="btn btn-success mt-auto" type="submit" onclick="alert('Данные обновлены')" href="form.php">Добавить принтер</button>
                </div>
            </div>
    </div>
</div>
<?php else:
    echo '<h2> Необходимо авторизоваться </h2>';
    echo '<a href="auth.php">Авторизация</a>';
     ?>
<?php endif?>
</form>
</body>
</html>
