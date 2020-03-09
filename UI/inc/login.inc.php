<?php 
session_start();
include_once "../connect.php";
if(isset($_POST['submit'])) {
    $phone=$_POST['phone'];
    $pass=$_POST['pass'];  
}else
{
	 // header("Location: ../login.php?login=empty");
  //     exit();
 echo "<script>window.open('../login.php?login=invalid','_self')</script>";

}
    if(empty($phone) || empty($pass)) {
      // header("Location: ../login.php?login=empty");
      // exit();
 echo "<script>window.open('../login.php?login=empty','_self')</script>";

    }

    else{
        $sql="SELECT * FROM user WHERE phone='$phone';"; 
        $result=mysqli_query($conn,$sql)or die("connection failed");

        if($row = mysqli_fetch_assoc($result)) {
            // Dehashing the password
            $hashedPassCheck = password_verify($pass, $row['password']);
            if($hashedPassCheck == true) {
                $_SESSION['privilege'] = "admin";
                $_SESSION['id'] = $row['id'];
                // header("Location: admin.php");
                // exit();
 echo "<script>window.open('../index.php','_self')</script>";


                }else{
                    // header("Location: ../login.php?login=error");
                    // exit();
 echo "<script>window.open('../login.php?login=error','_self')</script>";

                }
    

    	}
    }

?>