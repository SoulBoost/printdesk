<?php session_start();?>
<?php
require_once '../app/include/database.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>




<?php
if (!empty($_FILES['file'])) {
    if ($link->mysqli_connect_error){
        die("Ошибка: 2" . $link->connect_error);
    }
  
    $id = $_POST['id'];
   

    //image
            if($_SERVER['REQUEST_METHOD'] === 'POST') {
                if (!empty($_FILES['file']['name'])) {
                    $imgname = time() .  "_" . $_FILES['file']['name'];
                    $filetmpname = $_FILES['file']['tmp_name'];
                    $destination = __DIR__ . "\img\\" . $imgname;
                    $id = $link->real_escape_string($_POST['id']);
                    var_dump($destination);
                    $result = move_uploaded_file($filetmpname, $destination);
                    if($_FILES['file']['size'] > 700000){
                        echo  "Картинка превышает объем (должно быть не более 700kb)";
                    }
                    else{
                        $sql = mysqli_query($link, "UPDATE printers SET image = '$imgname' WHERE printers.id = $id");
                        
                        echo "<script>alert(\"Данные успешно обновлены. Нажмите, чтобы продолжить\");
                               window.location.href = 'listprinter.php';</script>";
                    }
                }
            }

 

        






else{
        echo "Ошибка: 1" . $link->error;
    }
    $link->close();


}
?>


