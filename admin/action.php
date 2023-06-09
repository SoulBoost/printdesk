<?php
require_once '../app/include/database.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<?php
if (isset($_POST["nameprint"]) && isset($_POST["IP"]) && !empty($_FILES['fileimg'])) {
    if ($link->mysqli_connect_error){
        die("Ошибка: " .$link->connect_error);
    }
    $nameprint = $link->real_escape_string($_POST["nameprint"]);
    $ip = $link->real_escape_string($_POST["IP"]);
    $file = $link->real_escape_string($_POST["scriptfile"]);
   // $image = $conn->real_escape_string($_POST['fileimg']);
    $sql = "INSERT INTO printers (nameprint, ip, scriptfile, image) VALUES ('$nameprint', '$ip', '$file', '$image')";
    $image  = $_FILES['fileimg'];
    $namefile = $image['name'];
    $pathfile = __DIR__ . '/img/' .$namefile;
        if(!move_uploaded_file($namefile['tmp_name'], $pathfile)) {
            
        }

    if($link->query($sql)){
        //var_dump($_FILES);
        header ('Location: ../listprinter.php');
        
    }
    else{
        echo "Ошибка: " . $link->error;
    }
    $link->close();


}
?>


