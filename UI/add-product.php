<?php
include_once('connect.php');
include_once('header.php');
include_once('navbar.php');
// session_start();
$uid=$_SESSION['id'];
$sql="SELECT * From customer where cid=".$uid;
$result= mysqli_query($conn,$sql);
?>
<div class="section" style="marging-top:50px;">
<form action="inc/add-pro.inc.php" method="POST">

    <div class="col-md-6">
    <label for="product">Enter Product Name</label>
      <input name="name" type="text" class="form-control" placeholder="Name">
    </div>
    <div class="col-md-6">
      <input name="aname" type="text" class="form-control" placeholder="Alternate Name">
    </div>
    <div class="col-md-6">
      <input name="weight" type="text" class="form-control" placeholder="Enter weight">
    </div>
    <div class="col-md-6">
      <input name="gst" type="text" class="form-control" placeholder="Enter gst">
    </div>
 
<button name="submit" type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<?php
include_once('footer.php');
?>