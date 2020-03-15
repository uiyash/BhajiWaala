<?php
$dbServername   = '103.55.245.88';
$dbUsername     = 'test';
$dbPassword     = 'VzvjkOpRYQ2x9hEg' ;
$dbName         = 'bhajiwaala';
$db_port        = '3306';

// $dbServername= "localhost";
// $dbUsername= 'root';
// $dbPassword='' ;
// $dbName= 'bhajiwaala';


$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName, $db_port) or die("Connection failed");
mysqli_set_charset( $conn, 'utf8');
?>