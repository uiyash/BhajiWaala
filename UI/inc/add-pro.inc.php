<?php
include_once('../connect.php');
session_start();
$uid=$_SESSION['id'];
if (isset($_POST['submit']))
{

    $name =ucfirst(mysqli_real_escape_string($conn, $_POST['name']));
    $aname =ucfirst(mysqli_real_escape_string($conn, $_POST['aname']));
    $we = ucfirst(mysqli_real_escape_string($conn, $_POST['weight']));    
    $gst = mysqli_real_escape_string($conn, $_POST['gst']);
$pro= array("name"=>$name,"aname"=>$aname);
$proj = json_encode($pro);
echo $name;

    $sql1="INSERT INTO `products`(`user_id`,`name`,`weight_type`,`gst`) VALUES ('$uid','$proj','$we','$gst');";
                mysqli_query($conn, $sql1) or die(mysqli_error($conn));
     echo "<script>window.open('../index.php?stat=added','_self')</script>";

}else{
    echo "<script>window.open('../index.php?stat=submit','_self')</script>";
}


?>