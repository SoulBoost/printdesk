<!--  Модуль, который загружает картинку принтера  -->
<?php
require_once '../app/include/database.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<?php
// все переменные
$nameprint = $link->real_escape_string($_POST["nameprint"]);
$ip = $link->real_escape_string($_POST["IP"]);
$filial = $link->real_escape_string($_POST["select-filial"]);

//  загрузка изображения. Проверка на наличе заполненного поля. Если поле пустое, то значение будет стандартным.
 if (!empty($_FILES['fileimg']['name'])) 
    {
        $imgname = time() .  "_" . $_FILES['fileimg']['name'];
        $filetmpname = $_FILES['fileimg']['tmp_name'];
        $destination = __DIR__ . "\img\\" . $imgname;
        $result = move_uploaded_file($filetmpname, $destination);
            if($_FILES['fileimg']['size'] > 300000)
            {
                echo  "Картинка превышает объем (должно быть не более 300kb)";
            }
    }
 else { $imgname = 'default.png'; }
    
// Выбор филиала ( 0 - волгоградский, 1 - регионы, 2 - восток)
switch ($filial) 
    {
        case 0: 
            $text = $link->real_escape_string($_POST["nameprint"]);
            echo($text);
            $text_in = '@echo off
            rundll32 printui.dll,PrintUIEntry /in /n "\\\dp-print-01\\'.$text."";
            $filename = $text.  '.bat';
            $filepath = "scripts/".$filename;
            file_put_contents($filepath, $text_in);
                $link->query("INSERT INTO printers (nameprint, ip, scriptfile, image) VALUES ('$nameprint', '$ip', '$filename', '$imgname')");
                $link->close(); 
                   echo "<script>alert(\"Данные успешно обновлены. Нажмите, чтобы продолжить\");
                       window.location.href = 'listprinter.php';</script>";
            break;
        case 1:
            $text = $link->real_escape_string($_POST["nameprint"]);
            echo($text);
            $text_in = '@echo off
            rundll32 printui.dll,PrintUIEntry /in /n "\\\dp-print-01\\'.$text."";
            $filename = $text.  '.bat';
            $filepath = "scripts/".$filename;
            file_put_contents($filepath, $text_in);
                $link->query("INSERT INTO regions (nameprint, ip, scriptfile, image) VALUES ('$nameprint', '$ip', '$filename', '$imgname')");
                $link->close(); 
                   echo "<script>alert(\"Данные успешно обновлены. Нажмите, чтобы продолжить\");
                       window.location.href = 'listprinter.php';</script>";
            
             break;
        case 2: 
            $text = $link->real_escape_string($_POST["nameprint"]);
            echo($text);
            $text_in = '@echo off
            rundll32 printui.dll,PrintUIEntry /in /n "\\\dp-print-01\\'.$text."";
            $filename = $text.  '.bat';
            $filepath = "scripts/".$filename;
            file_put_contents($filepath, $text_in);
                $link->query("INSERT INTO east (nameprint, ip, scriptfile, image) VALUES ('$nameprint', '$ip', '$filename', '$imgname')");
                $link->close(); 
                   echo "<script>alert(\"Данные успешно обновлены. Нажмите, чтобы продолжить\");
                       window.location.href = 'listprinter.php';</script>";
            break;
    }

?>