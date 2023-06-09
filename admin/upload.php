<?php
require_once '../app/include/database.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<?php
if (!empty($_FILES['filescript'])) {
    if ($link->connect_errno){
        die("Ошибка: 2" . $link->connect_error);
    }

$nameprint = $link->real_escape_string($_POST["nameprint"]);
$ip = $link->real_escape_string($_POST["IP"]);
$filial = $link->real_escape_string($_POST["select-filial"]);
$checkbox = $link->real_escape_string($_POST["defaultimg"]);


# Проверка по выбору ДЦ ( 0 - Волгоградский, 1 - Регионы, 2 - Восток)

    if ($filial === '0') {
        if ($checkbox === 'a1'){                                                   #
            $imgname = "default.img";                                              # Если чекбокс активен, значит ставится изображение по умолчанию.
            $destination = __DIR__. "\img\\" . $imgname;                           #
            $result = move_uploaded_file($imgname, $destination);
            print_r($result);
        }
            else{
                $imgname = time() .  "_" . $_FILES['fileimg']['name'];
                $filetmpname = $_FILES['fileimg']['tmp_name'];
                $destination = __DIR__ . "\img\\" . $imgname;
                $result = move_uploaded_file($filetmpname, $destination);
                print_r($imgname);
            }
            if($_FILES['fileimg']['size'] > 300000){
                echo  "Картинка превышает объем (должно быть не более 300kb)";
             }                                
    }
print_r($result);
    // загрузка изображения
            // if($_SERVER['REQUEST_METHOD'] === 'POST') {
            //     if (!empty($_FILES['file']['name'])) {
            //         $imgname = time() .  "_" . $_FILES['file']['name'];
            //         $filetmpname = $_FILES['file']['tmp_name'];
            //         $destination = __DIR__ . "\img\\" . $imgname;
            //         $result = move_uploaded_file($filetmpname, $destination);
            //         if($_FILES['file']['size'] > 300000){
            //             echo  "Картинка превышает объем (должно быть не более 300kb)";
            //         }
                
                    
            //     }
            // }

    // script
            if($_SERVER['REQUEST_METHOD'] === 'POST') {
                if (!empty($_FILES['file1']['name'])) {
                    $scrname = time() .  "_" . $_FILES['file1']['name'];
                    $filetmpname = $_FILES['file1']['tmp_name'];
                    $destination = __DIR__ . "../scripts\\" . $scrname;
                    $result = move_uploaded_file($filetmpname, $destination);
                    $link->query("INSERT INTO printers (nameprint, ip, scriptfile, image) VALUES ('$nameprint', '$ip', '$scrname', '$imgname')");
                    
                               echo "<script>alert(\"Данные успешно обновлены. Нажмите, чтобы продолжить\");
                               Location: listprinter.php;</script>";
            }
        }


else{
        echo "Ошибка: 1" . $link->error;
    }
    $link->close();


}
?>


