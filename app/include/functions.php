<?php

function get_printers(){

    global $link;

    $sql = "SELECT * FROM printers";

    $result = mysqli_query($link, $sql);

    $printers = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $printers;

}

?>



<?php


function get_stat(){

    $iplist = ["1.1.1","234"];
    $i = count($iplist);

    for ($j=0; $j<$i; $j++){
        $ip = $iplist($j);
        $ping = exec ("ping -n l $ip", $output,$status);
        echo $status;
    }

}

?>