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
<form action="inc/create-order.inc.php" method="POST">
<div class="form-group">
    <label for="select-hotel">Select Hotel</label>
    <select class="form-control" id="hotel">
     <?php while ($row= mysqli_fetch_array($result)) {
     echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
     } ?>
    </select>
    
  </div>       
<button name="submit" type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<?php
include_once('footer.php');
?>