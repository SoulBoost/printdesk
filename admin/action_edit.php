

<?php
require_once '../app/include/database.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$id = $_POST['id'];
$nameprint = $_POST['nameprint'];
$ip = $_POST['ip'];
$filial = $link->real_escape_string($_POST["select-filial"]);



#$conn = mysqli_connect('10.56.10.182','root','','prints') ; /* connect to db */
$nameprint = $link->real_escape_string($_POST["nameprint"]);
$ip = $link->real_escape_string($_POST["ip"]);
$id = $link->real_escape_string($_POST['id']);


switch ($filial) 
    {
        case 1: 
            $dc = "volgogradskiy";
            $sql = mysqli_query($link, "UPDATE printers SET nameprint = '$nameprint', ip = '$ip' WHERE printers.id = '$id'");
            break;
        case 2:
             $dc = "regions";
             $sql = mysqli_query($link, "UPDATE regions SET nameprint = '$nameprint', ip = '$ip' WHERE regions.id = '$id'");
             break;
        case 3: 
            $sql = mysqli_query($link, "UPDATE east SET nameprint = '$nameprint', ip = '$ip' WHERE east.id = '$id'");
            $dc = "east";
            break;
    }
header('Location: listprinter.php');
// $sql->close();
?>








