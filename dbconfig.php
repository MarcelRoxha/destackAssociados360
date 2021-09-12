<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "destackassociados360";

$conn = new PDO("mysql: host=$host;dbname=" .$dbname, $user, $pass);
$conetion = mysqli_connect($host,$user,$pass,$dbname);

?>