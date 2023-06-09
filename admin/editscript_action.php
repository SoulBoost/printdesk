<?php session_start();?>
<?php
require_once '../app/include/database.php';


if (!empty($_FILES['file'])) {
    if ($link->mysqli_connect_error){
        die("Ошибка: 2" . $link->connect_error);
    }
  
    $id = $_POST['id'];
   

    //image
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (!empty($_FILES['file']['name'])) {
            $scrname = time() .  "_" . $_FILES['file1']['name'];
            $filetmpname = $_FILES['file']['tmp_name'];
            $destination = __DIR__ . "../scripts\\" . $scrname .".bat";
            $result = move_uploaded_file($filetmpname, $destination); 
            $sql = mysqli_query($link, "UPDATE printers SET scriptfile = '$scrname.bat' WHERE printers.id = $id");
                        echo "<script>alert(\"Данные успешно обновлены. Нажмите, чтобы продолжить\");
                          window.location.href = 'listprinter.php';</script>";
                    
    }
}


 

    


}
?>


