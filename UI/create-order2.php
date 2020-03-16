<?php
session_start();
if(!strcmp("admin",$_SESSION['privilege'])==0)
{
  // header("Location:index.php");
  // exit();
 echo "<script>window.open('login.php','_self')</script>";

} 
include_once('header.php'); ?>



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
		<div class="col-xl-12 m-b-30">
			<div class="row">
				<div class="col-lg-6 m-b-30">
					<div class="card-box">

						<div style="padding: 20px;" class="card-b">
							<div class="row">
								<div class="col-lg-12">
									<form action="inc/add-hotel.inc.php" method="POST">
										<div class="form-group m-b-15">
											<h5 class="card-caption">Select Hotel</h5>
											<select class="custom-select mt-3">
												<option selected="">Open this select menu</option>
												<option value="1">Hotel One</option>
												<option value="2">Hotel Two</option>
												<option value="3">Hotel Three</option>
											</select>
										</div>
										<div class="form-group m-b-15">
										<h5 class="card-caption">Delivery Date</h5>
											<input class="form-control" id="date" type="date" name="date"
												style='text-transform:uppercase;'>
										</div>
										<div class="card-h">
											<h5 class="card-caption">Products & Quantities</h5>
										</div>
										<div class="form-group m-b-15">
											<div class="main-t-table table-responsive">
												<table class="table display" id="product">
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
															<td><input class="form-control" id="number" type="text" name="number"></td>
													</tbody>
												</table>
											</div>
										</div>
										<button name="submit" type="submit" class="btn btn-primary">Submit</button>
									</form>
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
document.getElementById("day-mode").onload = function() {myFunction()};
document.getElementById("dark-mode").onload = function() {myFunction()};


function myFunction() {
	$('#product').DataTable({
    paging: false
} );
}
</script>




<?php include_once('footer.php');?>