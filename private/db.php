<?php


$serverName = "127.0.0.1";
$userName = "root";
$password = "";
$dbName = "worldwide_logistics";

//create connection

$con = mysqli_connect($serverName, $userName, $password, $dbName);

if ($con) {

} else {
    echo 'not connected';
    exit();
}

//if (mysqli_connect_errno()) {
//    echo "failed to connect";
//
//}
