

<?php
require_once '../../app/include/database.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// $id = $_POST['id'];
// $nameprint = $_POST['nameprint'];
// $ip = $_POST['ip'];

$nameprint = $link->real_escape_string($_POST["nameprint"]);
$ip = $link->real_escape_string($_POST["ip"]);
$id = $link->real_escape_string($_POST['id']);



switch ($filial) 
    {
        case 1: 
            $dc = "volgogradskiy";
            break;
        case 2:
             $dc = "regions";
             break;
        case 3: 
            $dc = "east";
            break;
    }
    
$sql = mysqli_query($link, "UPDATE regions SET nameprint = '$nameprint', ip = '$ip' WHERE regions.id = '$id'");
header('Location: ../listprinterREG.php');

#$conn->close();
?>








