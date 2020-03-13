<?php
include_once('../connect.php');
session_start();
$uid=$_SESSION['id'];
if (isset($_POST['submit']))
{

    $name =ucfirst(mysqli_real_escape_string($conn, $_POST['name']));
    $marathi =ucfirst(mysqli_real_escape_string($conn, $_POST['marathi']));
    $hindi =ucfirst(mysqli_real_escape_string($conn, $_POST['hindi']));

    $we = ucfirst(mysqli_real_escape_string($conn, $_POST['weight']));    
    $gst = mysqli_real_escape_string($conn, $_POST['gst']);
mysqli_set_charset( $conn, 'utf8');  
    $sql1="INSERT INTO `products`(`user_id`,`name`,`marathi`,`hindi`,`weight_type`,`gst`) VALUES ('$uid','$name','$marathi','$hindi','$we','$gst');";
                mysqli_query($conn, $sql1) or die(mysqli_error($conn));
     echo "<script>window.open('../index.php?stat=added','_self')</script>";

}else{
    echo "<script>window.open('../index.php?stat=submit','_self')</script>";
}


?>