<?php session_start();?>
<!-- не забываем очищать сессию $_SESSION = array(); -->

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="test.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script> 
  



    <title>Добавление принтера</title>
</head>
<body>
<form action="upload_new.php" method="POST" enctype="multipart/form-data">
<?php if(!empty($_SESSION["login"])) : ?>
<div class="text-center" style="margin-top: 15px;">
    <a type="button" class="btn btn-success" href = "../index.php">На главную</a>
    <a type="button" class="btn btn-success" href = "listprinter.php">К списку принтеров</a>
    <!-- <a type="button" class="btn btn-success" href = "form.php">Админка</a> -->


<div class="cont">

    <img class="image" src="img/images.png" alt="..." />
                <div class="input-group flex-nowrap mt-2">
                    <span class="input-group-text" id="addon-wrapping">Доменное название принтера</span>
                    <input type="text" class="form-control" placeholder="Пример: VOL-32-HP402" name="nameprint" aria-describedby="addon-wrapping" required>
                </div>


            <div class="input-group flex-nowrap mt-2">
                    <span class="input-group-text" id="addon-wrapping">IP address:</span>
                    <input type="text" class="form-control" placeholder="Пример: 10.53.14.23" name="IP" aria-describedby="addon-wrapping" required>
                </div>

                <div class="input-group mb-3 mt-2">
                    <label class="input-group-text" name = "select-filial" for="inputGroupSelect01">Выберите филиал</label>
                    <select class="form-select" id="inputGroupSelect01" name = "select-filial">
                    <option value="0">Волгоградский</option>
                    <option value="1">Регионы</option>
                    <option value="2">Восток</option>


                    </select>
                </div>
                <!-- <p>Выберите путь к скрипту (bat формат)</p>
                <div class="input-group mb-3">
                    <input type="file" class="form-control" name="filescript" id="inputGroupFile01" required >
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#help">Как создать скрипт?</button>
                    </div> -->
                    
                <!-- <p>Выберите изображение. (если оставить пустым, то изображение будет дефолтным)</p>
                <div class="input-group mb-3 mr-5">
                    <input type="file" class="form-control " name="fileimg" id="inputGroupFile01" > 

                </div> -->
                <div class="input-group mb-3 "> <p><input type="checkbox" name="defaultimg" value="a1" checked>   По умолчанию стоит дефолтное изображение<Br></div>
                
                    <div class="text-center">
                    <button class="btn btn-success mt-auto" type="submit">Добавить принтер</button>
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


<div class="modal fade" id="help" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="helpLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="helpLabel">Как создать скрипт?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
      </div>
      <div class="modal-body">
          <p> Создаем текстовый документ, в него заносим код: <p>
          <p class="text-muted bg-light">@echo off</br>
                                    rundll32 printui.dll,PrintUIEntry /in /n "\\SERVER\nameprint"</p>
          <p>Где SERVER - принт сервер, nameprint - ДОМЕННОЕ название принтера <p>
            <div class="text-center">
          <button class="btn btn-secondary btn-sm text-center mb-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Пример </button>
          </div>
    

                        <div class="collapse" id="collapseExample">
                            <div class="card card-body">
                            @echo off<br>
                            rundll32 printui.dll,PrintUIEntry /in /n "\\dp-print-01\VOL-10-HP477-Reception_Lex"
                            </div>
                        </div>
        Сохраняем в расширении ".bat".<br> ОБЯЗАТЕЛЬНО: название должно быть соответствующее (либо полное название, либо номер принтера)
      </div>
      <div class="modal-footer">
        <p class="text-muted mr-3"> *Не забываем проверить </p>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Закрыть</button>
      </div>
    </div>
  </div>
  <? require '../app/include/historyuser.php' ?>