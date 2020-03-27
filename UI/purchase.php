<?php
include_once('connect.php');
include_once('header.php');
// include_once('navbar.php');
// session_start();
$uid=$_SESSION['id'];
$sql="SELECT * From seller where cid=".$uid;
$result= mysqli_query($conn,$sql);
$sql2="SELECT * From products where user_id=".$uid;
$result2= mysqli_query($conn,$sql2);
?>
<!-- PLAY WITH THIS BEGIN-->
<div id="content-header">
	<div class="header-name animated">
		<h1><span>Purchasing</span></h1>
		<p>“There is only one boss. The customer. And he can fire everybody in the company from the chairman
			on down, simply by spending his money somewhere else.” -Sam Walton</p>
	</div>
</div>
<div id="main-content">
	<div class="row">
		<div class="main-table-card col-sm-12 m-b-30">
			<div class="card-box">
				<form action="inc/add.php" method="POST">
					<div class="card-box">
						<div class="card-h">
							<h5 class="card-caption">Purchase Details</h5>
						</div>
						<div class="form-group m-b-15">
							<label for="example-select">Select seller</label>
							<select class="form-control" id="seller" name="seller">
     <?php while ($row= mysqli_fetch_array($result)) {
     echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
     } ?>
    </select>
						</div>
						<div class="form-group m-b-15">
							<label for="example-select">purchasing Date</label>
							<input class="form-control" id="date" type="date" name="date">
						</div>
						<br>
						<div class="card-h">
							<h5 class="card-caption">Products & Quantities</h5>
						</div>
						<div class="card-b" style="padding: 20px;">
							<div class="main-t-table table-responsive">
								<table class="table display" id="data-table">
									<thead>
										<tr>
											<th scope="col"><i class="fas fa-sort"></i> SR #</th>
											<th scope="col"><i class="fas fa-sort"></i> Name </th>
											<th scope="col"><i class="fas fa-sort"></i>Marathi Name </th>
											<th scope="col">Quantity</th>
											<th scope="col">Price</th>

											 
										</tr>
									</thead>
									<tbody>
										<?php
										$c = 1;
										while ($row2 = mysqli_fetch_assoc($result2)) {
											echo '
															<tr>
																<td>' . $c . '</td>
                                <td class="table-amount">' . $row2['name'] .'</td>
                                <td class="table-amount">' . $row2['marathi'] .'</td>

                                <td class="table-amount"><input type="text" name="q_'.$c.'" placeholder="Enter the amount">
                                <input type="hidden" name="id_'.$c.'" value="' . $row2['id'] . '"></td>
                                <td><input type="number" name="price_'.$c.'"></td></td>																
															</tr>';
											$c++;
										}
										?>
									</tbody>
								</table>
							</div>
						</div>
            <input name="stat" type="text" id="example-readonly" class="form-control" value="purchase" hidden>

            <input type="hidden" name="count" value="<?php   echo $rowcount=mysqli_num_rows($result2);?>"></td>

						<button name="submit" type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>
  <?php
include_once('footer.php');
?>