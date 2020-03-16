<?php
// include('../header.php');
session_start();
include('../connect.php');
$cid=$_SESSION['id'];
if (isset($_POST['submit']))
{
if($_POST['stat']=='hotel'){
    $name =ucfirst(mysqli_real_escape_string($conn, $_POST['name']));
    $email =ucfirst(mysqli_real_escape_string($conn, $_POST['email']));
    $address = ucfirst(mysqli_real_escape_string($conn, $_POST['address']));    
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $gstin = mysqli_real_escape_string($conn, $_POST['gstin']);

    $sql1="INSERT INTO `customer`(`cid`,`name`,`phone`, `email`, `address`,`gstin`) VALUES ('$cid','$name','$phone','$email','$address','$gstin');";
                mysqli_query($conn, $sql1) or die(mysqli_error($conn));
    echo "<script>window.open('../index.php?stat=added','_self')</script>";
}elseif($_POST['stat']=='seller'){
    $name =ucfirst(mysqli_real_escape_string($conn, $_POST['name']));
    $email =ucfirst(mysqli_real_escape_string($conn, $_POST['email']));
    $address = ucfirst(mysqli_real_escape_string($conn, $_POST['address']));    
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $gstin = mysqli_real_escape_string($conn, $_POST['gstin']);
// echo '232';
    $sql1="INSERT INTO `seller`(`cid`,`name`,`phone`, `email`, `address`,`gstin`) VALUES ('$cid','$name','$phone','$email','$address','$gstin');";
    // echo $sql1;           
    mysqli_query($conn, $sql1) or die(mysqli_error($conn));
               
    echo "<script>window.open('../index.php?stat=added','_self')</script>";

}elseif($_POST['stat']=='pro'){
    $name =ucfirst(mysqli_real_escape_string($conn, $_POST['name']));
    $marathi =ucfirst(mysqli_real_escape_string($conn, $_POST['marathi']));
    $hindi =ucfirst(mysqli_real_escape_string($conn, $_POST['hindi']));

    $we = ucfirst(mysqli_real_escape_string($conn, $_POST['weight']));    
    $gst = mysqli_real_escape_string($conn, $_POST['gst']);
mysqli_set_charset( $conn, 'utf8');  
    $sql1="INSERT INTO `products`(`user_id`,`name`,`marathi`,`hindi`,`weight_type`,`gst`) VALUES ('$cid','$name','$marathi','$hindi','$we','$gst');";
                mysqli_query($conn, $sql1) or die(mysqli_error($conn));
     echo "<script>window.open('../index.php?stat=added','_self')</script>";

}else{
    echo "<script>window.open('../index.php?stat=submit','_self')</script>";
}
    

}else{
    echo "<script>window.open('../index.php?stat=submit','_self')</script>";
}
include_once('../footer.php');
?>