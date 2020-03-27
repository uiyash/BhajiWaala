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

}elseif($_POST['stat']=='order'){
    $hotel =ucfirst(mysqli_real_escape_string($conn, $_POST['hotel']));
    $date =ucfirst(mysqli_real_escape_string($conn, $_POST['date']));
    $count =ucfirst(mysqli_real_escape_string($conn, $_POST['count']));
    $arr=array();
    // echo $count;
while ($count != 0) {
    $q = mysqli_real_escape_string($conn, $_POST['q_'.$count.'']);
    $pro = mysqli_real_escape_string($conn, $_POST['id_'.$count.'']);
    $price = mysqli_real_escape_string($conn, $_POST['price_'.$count.'']);
    
    if (empty($q)) {
// echo "null".$q;
}else{
    // echo "not null".$q;
   $array = array();
$array=array('id' => $pro, 'q' => $q,'price'=>$price);;
array_push($arr, $array); 
}
$count--;
}
$narr= json_encode($arr);      
    $sql1="INSERT INTO `C_order`(`user_id`,`customer_id`,`products`,`date`) VALUES ('$cid','$hotel','$narr','$date');";
    $bill_id = $conn->insert_id;
                mysqli_query($conn, $sql1) or die(mysqli_error($conn));
    $sql2="INSERT INTO `invoice`(`user_id`,`bill_id`,`products`,`order_type`,`date`) VALUES ('$cid','$bill_id','$narr','c','$date');";
                mysqli_query($conn, $sql2) or die(mysqli_error($conn));
     echo "<script>window.open('../index.php?stat=o_added','_self')</script>";

}elseif($_POST['stat']=='purchase'){
    $seller =ucfirst(mysqli_real_escape_string($conn, $_POST['seller']));
    $date =ucfirst(mysqli_real_escape_string($conn, $_POST['date']));
    $count =ucfirst(mysqli_real_escape_string($conn, $_POST['count']));
    $arr=array();
    $pr=0;
    // echo $count;
while ($count != 0) {
    $q = mysqli_real_escape_string($conn, $_POST['q_'.$count.'']);
    $pro = mysqli_real_escape_string($conn, $_POST['id_'.$count.'']);
    $price = mysqli_real_escape_string($conn, $_POST['price_'.$count.'']);
    
    if (empty($q)) {
// echo "null".$q;
}else{
    $pr=$price+$pr;
    // echo "not null".$q;
   $array = array();
$array=array('id' => $pro, 'q' => $q,'price'=>$price);;
array_push($arr, $array); 
}
$count--;
}
$narr= json_encode($arr);      
    $sql1="INSERT INTO `S_order`(`user_id`,`seller_id`,`products`,`date`,`total_amount`) VALUES ('$cid','$seller','$narr','$date','$pr');";
    $bill_id = $conn->insert_id;
                mysqli_query($conn, $sql1) or die(mysqli_error($conn));
    $sql2="INSERT INTO `invoice`(`user_id`,`bill_id`,`products`,`order_type`,`date`,`total_amount`) VALUES ('$cid','$bill_id','$narr','s','$date','$pr');";
                mysqli_query($conn, $sql2) or die(mysqli_error($conn));
     echo "<script>window.open('../index.php?stat=o_added','_self')</script>";

}else{
    echo "<script>window.open('../index.php?stat=submit','_self')</script>";
}
    

}else{
    echo "<script>window.open('../index.php?stat=submit','_self')</script>";
}
include_once('../footer.php');
?>