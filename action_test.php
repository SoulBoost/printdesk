<?php
require_once 'app/include/database.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<?php

    $text = $link->real_escape_string($_POST["text"]);
    echo($text);
    // $sql = mysqli_query($link, "INSERT INTO `test` (`text`) VALUES ('@echo off rundll32 printui.dll,PrintUIEntry /in /n \\dp-print-01\\'$text'') ");

    $text_in = '@echo off
    rundll32 printui.dll,PrintUIEntry /in /n "\\\dp-print-01\\'.$text."";
    $filename = $text.  '.bat';
    $filepath = "scripts/".$filename;
    file_put_contents($filepath, $text_in);
    // print($sql);
    // $scrname = time() .  "_";
    // $destination = __DIR__ . "123\\" . $scrname .".bat";
    // $result = move_uploaded_file($scrname, $destination); 
            // $sql = mysqli_query($link, "UPDATE printers SET scriptfile = '$scrname.bat' WHERE printers.id = $id");
                        // echo "<script>alert(\"Данные успешно обновлены. Нажмите, чтобы продолжить\");
                        //   window.location.href = 'listprinter.php';</script>";
                    
    


?>


