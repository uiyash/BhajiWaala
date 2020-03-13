<?php
include_once('connect.php');
include_once('header.php');
include_once('navbar.php');
// session_start();
$uid=$_SESSION['id'];
$sql="SELECT * From products where user_id=".$uid;
$result= mysqli_query($conn,$sql);

?>
<div class="section" style="marging-top:50px;">
<form action="inc/add-pro.inc.php" method="POST">

    <div class="col-md-6">
    <label for="product">Enter Product Name</label>
      <input name="name" type="text" class="form-control" placeholder="Name">
    </div>
    <div class="col-md-6">
      <input name="marathi" type="text" class="form-control" placeholder="Marathi Name">
    </div>
    <div class="col-md-6">
      <input name="hindi" type="text" class="form-control" placeholder="Hindi Name">
    </div>
    <div class="col-md-6">
      <input name="weight" type="text" class="form-control" placeholder="Enter weight">
    </div>
    <div class="col-md-6">
      <input name="gst" type="text" class="form-control" placeholder="Enter gst">
    </div>
 
<button name="submit" type="submit" class="btn btn-primary">Submit</button>
</form>
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Product Name</th>
      <th scope="col">Marathi</th>
      <th scope="col">Hindi</th>
      <th scope="col">Weight Type</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $c=1;
    while ($row= mysqli_fetch_array($result)) {
 
      echo '<tr><td>'.$c.'</td><td>'.$row['name'].'</td><td>'.$row['marathi'].'</td><td>'.$row['hindi'].'</td><td>'.$row['weight_type'].'</td></tr>';
    $c++;
    }
    ?>  
  </tbody>
</table>
</div>
<?php
include_once('footer.php');
?>