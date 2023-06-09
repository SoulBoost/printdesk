<?php require_once '../app/include/database.php';?>
<?php session_start();?>
<?php

    
    $login = $_POST['login'];
    $pass = $_POST['pass'];

    $check = mysqli_query($link, "SELECT * FROM users WHERE login = '$login' AND pass = '$pass'");
    if (mysqli_num_rows($check) > 0){
       
       $_SESSION['login'] = $login;
       echo "<script>alert(\"Вы успешно вошли, нажмите чтобы продолжить.\");;
       window.location.href = '../index.php';</script>";
   
    } 
    else {
      //   вывод модуля ошибки (#incorrect)
         echo "<script>alert(\"Данные от админ.панели указаны неверно.\");;
               window.location.href = '../';</script>";
      
        

    }
?>
