
<?php session_start();?>


<?php require_once '../app/include/database.php'; ?>

<?php
$sql = mysqli_query($link, "DELETE FROM history");

echo ("<script>alert(\"Данные успешно обновлены. Принтер удален. Нажмите, чтобы продолжить\");
                        window.location.href = 'history.php';</script>");

?>