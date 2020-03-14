<?php
$dbServername= "dev.daxy.in:3306";
$dbUsername= 'test';
$dbPassword='VzvjkOpRYQ2x9hEg' ;
$dbName= 'bhajiwaala';

// $dbServername= "localhost";
// $dbUsername= 'root';
// $dbPassword='' ;
// $dbName= 'bhajiwaala';


$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName) or die("Connection failed");
mysqli_set_charset( $conn, 'utf8');
?>