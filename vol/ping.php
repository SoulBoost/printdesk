
<?php session_start();?>


<?php require_once '../app/include/database.php'; ?>

<?php
    $printer_id = $_GET['id'];
    $printers = mysqli_query($link, "SELECT * FROM printers");
    $printers = mysqli_fetch_all($printers)
?>


<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
</head>
<body>



<?php
// $ip = 'vol-it-03';
foreach($printers as $id => $ip){
    $printers[$id] = exec("ping -n 1 ".$ip);
 }
// exec("ping -n 1 -w 200 vol-it-03",$output, $status);
// под *nix заменить -n 1 на -c 1
// if ($status <> 0) {
    // echo "Offline";
// }
// else{
    // echo "Online";
// }
 ?>
</body>
</html>