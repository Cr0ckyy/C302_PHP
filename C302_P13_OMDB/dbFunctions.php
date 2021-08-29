<?php
$HOST = "localhost";
$USERNAME = "root";
$PASSWORD = "";
$DB = "c302_p13";
$link = mysqli_connect($HOST,$USERNAME,$PASSWORD,$DB);


if (!$link) {
    die("connection failed: " . mysqli_connect_error());
}

//if ($link) {
//    echo "MYSQL connection success";
//}

?>