<?php 
require_once 'database.php';
session_start();
#ПЕРЕПИСАТЬ ФУНКЦИЮ
#АДМИНЫ, ПОЛЬЗОВАТЕЛИ

$ipaddr = $_SERVER['REMOTE_ADDR']; #узнает IP клиента
$date = date('Y-m-d h:i:s'); # дата
$check = mysqli_query($link, "SELECT * FROM history WHERE localip = '$ipaddr'"); # проверяет наличие адреса клиента в БД

$count_result = mysqli_query($link, "SELECT COUNT(*) FROM history");
$count_array = mysqli_fetch_row($count_result);
$count = $count_array[0];
// $count = mysqli_query($link, "SELECT COUNT(*) FROM history");
// $count_a = mysqli_fetch_row($count);
// $count_result = $count_a[0];
// // $count = $count_array[0];
// var_dump($count_result);
// URL страницы сохраняется в БД в строку URL
$url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$url = explode('?', $url);
$url = $url[0];
// 

// Если IP адрес есть в БД, то не записываем клиента
if (empty(mysqli_num_rows($check) > 0)){
    $sql = mysqli_query($link, "INSERT INTO history (localip, time, url) VALUES ('$ipaddr', '$date', '$url')");

}

 
// if (empty(mysqli_num_rows($check) > 0)){
//     if(!empty($_SESSION["login"] != '1' && $ipaddr != '127.0.0.1' )){
//         $sql = mysqli_query($link, "INSERT INTO history (localip, time) VALUES ('$ipaddr', '$date')");
//         var_dump($sql);
//      }
//      elseif($_SESSION["login"] != 'admin'){
//         $sql = mysqli_query($link, "INSERT INTO history (localip, time) VALUES ('$ipaddr ', '$date')");
//      }
//         else {
//             $sql = mysqli_query($link, "INSERT INTO history (localip, time) VALUES ('$ipaddr adm', '$date')");
//         }
       
//     } 
// else {
//     if(!empty($_SESSION["login"] === '1' && $ipaddr != '127.0.0.1' )){
//         $sql = mysqli_query($link, "INSERT INTO history (localip, time) VALUES ('$ipaddr ADMIN', '$date')");
//      }
//      elseif($_SESSION["login"] === 'admin'){
//         $sql = mysqli_query($link, "INSERT INTO history (localip, time) VALUES ('$ipaddr SUPERADMIN', '$date')");
//      }
// }

?>