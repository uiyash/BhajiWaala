<?php
$dbServername= "localhost";
$dbUsername= 'root';
$dbPassword='' ;
$dbName= 'bhajiwaala';



$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName) or die("Connection failed");
mysqli_set_charset( $conn, 'utf8');
?>