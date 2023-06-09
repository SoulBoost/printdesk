<?php session_start();?>

<?php
require_once '../app/include/database.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($link->connect_errno){
        die("Ошибка: 2" . $link->connect_error);
    }

?>


<?php require_once '../app/include/database.php'; ?>

<?php
    $printer_id = $_GET['id'];
     // $printer_id = $link->real_escape_string($_POST['id']);
   

    
    // $link->query("DELETE FROM printers WHERE id = $printer_id");
    $sql = mysqli_query($link, "DELETE FROM printers WHERE printers.id = '$printer_id'");
    $link->close();
     echo ("<script>alert(\"Данные успешно обновлены. Принтер удален. Нажмите, чтобы продолжить\");
        window.location.href = 'listprinter.php';</script>");
    
?>