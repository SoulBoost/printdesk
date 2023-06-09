<?php

$link = mysqli_connect('127.0.0.1','root','','prints') ; /* connect to db */
    // $link = mysqli_connect('127.0.0.1', 'root', '', 'prints');
if(mysqli_connect_errno())
{
    echo 'Error in connect to database ('.mysqli_connect_errno().'): '.mysqli_connect_error();
    exit();

}
?>