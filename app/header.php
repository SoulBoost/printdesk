<!-- переписать хэдер -->

<?php
    require_once 'include/database.php';
    require_once 'include/functions.php';
    session_start();
?>
<!--<pre>
#print_r($printers);
</pre>
-->
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Рольф принтеры</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script> 
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>



    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

<!--vendors styles-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
<link rel="stylesheet" href="../css/default.css" id="theme-color">

    <nav class="navbar navbar-expand-md navbar-transparent fixed-top sticky-navigation navbar-light bg-white shadow-bottom" id="lambda-navbar">
      
            <a class="navbar-brand" href="../index.php">
                Рольф ИТ
            </a>
            <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                
                <div class="collapse navbar-collapse" id="navbarCollapse">
                      <ul class="navbar-nav ">
                      <li class="nav-item">
                        <a class="nav-link " href="../index.php">Перейти к выбору филиала</a>
                    </li>  
                    <li class="nav-item">
                        <!-- <a class="nav-link " href="#features">Помощь</a> -->
                    </li>
                    </ul>
                  
                      <button class="btn btn-lg btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" >Как установить?</button>
                     
                  </div>
                  <p class="text-center mr-3">Для поиска нажмите CTRL + F</p>

                  <ul class="navbar-nav ml-auto">
                  <?php if(!empty($_SESSION["login"])) : ?>
                    <li class="nav-item dropdown">
                    <button type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#EDIT">Управление принтерами</button>
                    </li>
                    <div class="btn-group">

                    
                    <!-- <li class="nav-item">
                        <a class="nav-link btn-outline-info  ml-2" href="../admin/listprinter.php">Список всех принтеров</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link btn-outline-danger btn-xs ml-2 mt-auto " href="../admin/admin_logout.php">Выход из админки</a>
                    </li>
                  
                    <?php endif?>
                </ul>
                


                <form class="form-inline mr-3">
                    <!-- <a href="../admin/login.php" class="btn btn-navbar  btn-primary ml-3">Admin_PANEL</a> -->
                    <button class="btn btn-navbar btn-primary mb-auto ml-2" type="button" data-bs-toggle="modal" data-bs-target="#login" >admin_panel</button>
                    
                </form>
            </div>
        </nav>

  </head>
  <div class="modal fade" id="EDIT" tabindex="-1" aria-labelledby="EDITLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title " id="EDITLabel">Управление принтерами</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
      </div>
      <div class="text-center">
      <a type="button" class="btn btn-secondary btn-block" href="../admin/testform.php">Добавить принтер</a>
      <a type="button" class="btn btn-secondary btn-block" href= "../admin/listprinter.php">Редактировать/удалить принтер</a>
      <a type="button" class="btn btn-secondary btn-block" href= "../admin/listprinter.php">Список всех принтеров</a>
      <a type="button" class="btn btn-secondary btn-block" href= "../admin/history.php">Логи</a>
      <a type="button" class="btn btn-danger btn-block" href= "http://print/openserver/phpmyadmin/index.php">Вход в БД</a>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn" data-bs-dismiss="modal">Закрыть</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="login" tabindex="-1" aria-labelledby="loginLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginLabel">Управление принтерами</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
      </div>
      <div class="text-center">
      <form action="../admin/auth.php" method="post">
        <h1>Вход</h1>
            <input type="text" class="form-control" name="login" autocomplete="off" id="login" placeholder="login"><br>
            <input type="password" class="form-control" name="pass"  id="pass" placeholder="password"><br>
            <button class="btn btn-success" type="submit">Login</button><br>
        </form>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn" data-bs-dismiss="modal">Закрыть</button>
      </div>
    </div>
  </div>
</div>






  <body>
<!-- php if(!empty($_SESSION["login"])) : ?> -->
  <!-- Сделать форму и action выход из админки -->
  <!-- <div class="col-mb-3 text-end"> -->
      <!-- <div class="btn-group" role="group" aria-label="Basic example">
      <button type="button" class="btn btn-danger " type="submit">Выйти из админки</button>
      <button type="button" class="btn btn-primary">Список всех принтеров ДЦ "Волгоградский"</button>
      <button type="button" class="btn btn-danger " type="submit">Выйти из админки</button>
    </div> --> 

  <!-- <div class="btn-group" role="group" aria-label="Basic outlined example">
  <button type="button" class="btn btn-outline-primary">Список всех принтеров ДЦ "Волгоградский"</button>
  <button type="button" class="btn btn-outline-primary">Управление принтарами</button>
  <button type="button" class="btn btn-danger" type= "submit">Выйти из админки</button>
</div>
       php endif?>
<header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
      </a>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="/" class="nav-link px-15 link-secondary">ГЛАВНАЯ</a></li>
        
        <li><a href="../index.php" class="nav-link px-2 link-dark">Выбор филиала</a></li>  -->
        <!-- <li><a href="../app/eventupdate.php" class="nav-link px-2 link-dark">Журнал обновлений</a></li>  -->
      <!-- </ul>
      <div class="col-md-3 text-end">
      <a class="btn btn-outline btn-outline-info me-2"  href="../admin/login.php" data-bs-target="#exampleModal">Admin panel</a>
      </div> -->



      <!-- <a class="btn btn-outline btn-outline-primary me-2 dropdown-toggle"  href="#" data-bs-toggle="dropdown">Управление принтерами</a>
    
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
      <li><a class="dropdown-item" href="#">Добавить принтер</a></li>
      <li><a class="dropdown-item" href="#">Редактировать принтер</a></li>
      <li><a class="dropdown-item" href="#">Удалить принтер</a></li>
    </ul> -->
</header>
</body>
</html>
