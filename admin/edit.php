<?php session_start();?>


<?php require_once '../app/include/database.php'; ?>

<?php
    $printer_id = $_GET['id'];
    $printer = mysqli_query($link, "SELECT * FROM printers WHERE id = $printer_id");
    $printer = mysqli_fetch_assoc($printer);
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit#printers</title>
    <link rel="stylesheet" href="addprinters.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
    


</head>
<body>
<form action="action_edit.php" method="POST">
<?php if(!empty($_SESSION["login"])) : ?>

    <div class="text-center" style="margin-top: 15px;">
    <a type="button" class="btn btn-success" href = "../vol/rolfvolg.php">На главную</a>
    <a type="button" class="btn btn-success" href = "listprinter.php">К списку принтеров</a>
    <a type="button" class="btn btn-success" href = "form.php">Админка</a>


    <div class="cont" style="margin-top: 10%">
    <p>ID PRINTER: <?php echo  $printer['id']?></p>

    <input type="hidden" name="id" value ="<?=$printer['id'] ?>">
    
                <div class="input-group flex-nowrap mt-2">
                    <span class="input-group-text" id="addon-wrapping">Доменное название принтера</span>
                    <input type="text" class="form-control" placeholder="Пример: VOL-32-HP402" name="nameprint" value= "<?= $printer['nameprint'] ?>" aria-describedby="addon-wrapping">            
                </div>


            <div class="input-group flex-nowrap mt-2">
                    <span class="input-group-text" id="addon-wrapping">IP address:</span>
                    <input type="text" class="form-control" placeholder="Пример: 10.53.14.23" value= "<?= $printer['ip'] ?>" name="ip" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group mb-3 mt-2">
                    <label class="input-group-text" for="inputGroupSelect01" disabled>Выберите филиал</label>
                    <select class="form-select" id="inputGroupSelect01" name = "select-filial">
                    <option value="0">Выберите филиал</option>
                    <option value="1">volgogradskiy</option>
                    <option value="2">regions</option>
                    <option value="3">east</option>
                    </select>
                </div>

                    <div class="text-center">
                    <button class="btn btn-success mt-auto" type="submit" onclick="alert('Данные обновлены')" href="#">Обновить параметры</button>
                    </div>
                </div>
        </div>
    </div>

    </form>
    <?php else:
    echo '<h2> Необходимо авторизоваться </h2>';
    echo '<a href="auth.php">123</a>';
     ?>
<?php endif?>
</body>
</html>

