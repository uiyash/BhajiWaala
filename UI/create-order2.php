<?php
session_start();
if(!strcmp("admin",$_SESSION['privilege'])==0)
{
  // header("Location:index.php");
  // exit();
 echo "<script>window.open('login.php','_self')</script>";

}
include_once('connect.php');

$cid=$_SESSION['id'];
$sql="SELECT * FROM customer WHERE cid=".$cid; 
$result=mysqli_query($conn,$sql);

include_once('header.php');
 ?>




<!-- PLAY WITH THIS BEGIN-->
<div id="content-header">
	<div class="header-name animated">
		<h1><span>Create Order</span></h1>
		<p>“There is only one boss. The customer. And he can fire everybody in the company from the chairman
			on down, simply by spending his money somewhere else.” -Sam Walton</p>
	</div>
</div>
<div id="main-content">
<div class="row">
									<div class="main-table-card col-sm-12 m-b-30">
										<div class="card-box">
										<form action="inc/add-hotel.inc.php" method="POST">
										<div class="card-box">
						<div class="card-h">
							<h5 class="card-caption">Order Details</h5>
						</div>
										<div class="form-group m-b-15">
											<label for="example-select">Select Hotel</label>
											<select class="form-control" id="example-select" >
												<option>Hotel 1</option>
												<option>Hotel 2</option>
												<option>Hotel 3</option>
												<option>Hotel 4</option>
												<option>Hotel 5</option>
											</select>
										</div>
										<div class="form-group m-b-15">
											<label for="example-select">Delivery Date</label>
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
																<th scope="col"><i class="fas fa-sort"></i> Phone</th>
																<th scope="col"><i class="fas fa-sort"></i> Email</th>
																<th scope="col"><i class="fas fa-sort"></i> Address</th>
																<th scope="col"><i class="fas fa-sort"></i> GSTIN</th>
																<th scope="col">Edit</th>
																<th scope="col">Remove</th>
															</tr>
														</thead>
														<tbody>
														<?php
														$c=1;
														 while($row = mysqli_fetch_assoc($result)) {
															echo '
															<tr>
																<td>'.$c.'</td>
																<td class="table-name"><img src="img/users/hotel.png"
																alt="User image">'.$row['name'].'</td>
																<td class="table-amount">'.$row['phone'].'</td>
																<td class="table-acc"><a href="#">'.$row['email'].'</a></td>
																<td class="table-amount">'.$row['address'].'</td>
																<td class="table-amount">'.$row['gstin'].'</td>
																<td><button type="button"
																		class="btn btn-outline-primary"><i
																			class="dripicons-pencil"></i>Edit</button>
																</td>
																<td><button type="button"
																		class="btn btn-outline-primary"><i
																			class="dripicons-wrong"></i>Remove</button>
																</td>
															</tr>';
															$c++;
														}
														?>
														</tbody>
													</table>
												</div>
											</div>

											<button name="submit" type="submit" class="btn btn-primary">Submit</button>
									</form>
										</div>
									</div>
								</div>

	<div class="row">	
		<div class="col-xl-12 m-b-30">
			<div class="row">
				<div class="col-lg-6 m-b-30">
					<div class="card-box">
						<div class="card-h">
							<h5 class="card-caption">Order Details</h5>
						</div>
						<div style="padding: 20px;" class="card-b">
							<div class="row">
								<div class="col-lg-12">
									<form action="inc/add-hotel.inc.php" method="POST">
										<div class="form-group m-b-15">
											<label for="example-select">Select Hotel</label>
											<select class="form-control" id="example-select" >
												<option>Hotel 1</option>
												<option>Hotel 2</option>
												<option>Hotel 3</option>
												<option>Hotel 4</option>
												<option>Hotel 5</option>
											</select>
										</div>
										<div class="form-group m-b-15">
											<label for="example-select">Delivery Date</label>
											<input class="form-control" id="date" type="date" name="date">
										</div>
										<br>
										<div class="card-h">
										<h5 class="card-caption">Products & Quantities</h5>
										</div>
										<div class="main-table-card col-sm-12 m-b-30">
										<!-- <div class="main-t-table table-responsive"> -->
										<!-- <div role="tabpanel" class="tab-pane animated fadeInUp" id="d-tables"> -->
											<table class="table display" id="product-table">
												<thead>
													<tr>
														<th scope="col"> SR #</th>
														<th scope="col"> Name </th>
														<th scope="col"> Quantity</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td class="table-num">01</td>
														<td class="table-name">Ron Kohls</td>
														<td><input class="form-control" id="number" type="text"
																name="number"></td>
												</tbody>
											</table>
										</div>
										
								</div>

								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- PLAY WITH THIS END -->

<script>
	document.querySelector("body").onload = function () { myFunction() };

	function myFunction() {
		$('#product-table').DataTable({
			paging: false
		});
	}
</script>




<?php include_once('footer.php');?>