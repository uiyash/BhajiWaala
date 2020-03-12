<?php
include('../header.php');
include('../connect.php');
$cid=$_SESSION['id'];
if (isset($_POST['submit']))
{

    $name =ucfirst(mysqli_real_escape_string($conn, $_POST['name']));
    $email =ucfirst(mysqli_real_escape_string($conn, $_POST['email']));
    $address = ucfirst(mysqli_real_escape_string($conn, $_POST['address']));    
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $gstin = mysqli_real_escape_string($conn, $_POST['gstin']);

    $sql1="INSERT INTO `customer`(`cid`,`name`,`phone`, `email`, `address`,`gstin`) VALUES ('$cid','$name','$phone','$email','$address','$gstin');";
                mysqli_query($conn, $sql1) or die(mysqli_error($conn));
    echo "<script>window.open('../index.php?stat=added','_self')</script>";

}else{
    echo "<script>window.open('../index.php?stat=submit','_self')</script>";
}

?>