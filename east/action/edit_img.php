<?php session_start();?>


<?php require_once '../../app/include/database.php'; ?>

<?php
    $printer_id = $_GET['id'];
    $printer = mysqli_query($link, "SELECT * FROM east WHERE id = $printer_id");
    $printer = mysqli_fetch_assoc($printer);
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit#printers</title>
    <link rel="stylesheet" href="../../css/addprinters.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
    


</head>
<body>
<form action="editimg_action.php" method="POST" enctype="multipart/form-data">
<?php if(!empty($_SESSION["login"])) : ?>

    <div class="text-center" style="margin-top: 15px;">
    <a type="button" class="btn btn-success" href = "../../index.php">На главную</a>
    <a type="button" class="btn btn-success" href = "../listprinterEAST.php">К списку принтеров</a>


    <div class="cont" style="margin-top: 10%">
    <p>ID PRINTER: <?php echo  $printer['id']?></p>

    <input type="hidden" name="id" value ="<?=$printer['id'] ?>">
                
                <p>Выберите изображение</p>
                <div class="input-group mb-3">
                    <input type="file" class="form-control" name="file" id="inputGroupFile01" required> 
                </div>

                    <div class="text-center">
                    <button class="btn btn-success mt-auto" type="submit">Добавить принтер</button>
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




