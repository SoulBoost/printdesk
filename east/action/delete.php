<?php session_start();?>

<?php require_once '../../app/include/database.php'; ?>

<?php
    $printer_id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
    if($printer_id === false) {
        
          echo ("<script>alert(\"ERROR'\");
          window.location.href = '../listprinterEAST.php';</script>");
    }

    else{
        $link = mysqli_query($link, "DELETE FROM `east` WHERE `id` = '$printer_id'");
        echo($link);
        echo ("<script>alert(\"Данные успешно обновлены. Принтер удален. Нажмите, чтобы продолжить\");
              window.location.href = '../listprinterEAST.php';</script>");
    }
    
    
?>