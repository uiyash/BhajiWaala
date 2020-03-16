<?php
session_start();
if(!strcmp("admin",$_SESSION['privilege'])==0)
{
  // header("Location:index.php");
  // exit();
 echo "<script>window.open('login.php','_self')</script>";

} 
include_once('connect.php');
include_once('header.php'); 

$cid=$_SESSION['id'];
$sql="SELECT * FROM products WHERE user_id=".$cid; 
$result=mysqli_query($conn,$sql);

?>



			<!-- PLAY WITH THIS BEGIN-->
			<div id="content-header">
				<div class="header-name animated fadeInUp">
					<h1><span>Manage Products</span></h1>
					<p>“There is only one boss. The customer. And he can fire everybody in the company from the chairman
						on down, simply by spending his money somewhere else.” -Sam Walton</p>
				</div>
			</div>
			<div id="main-content">
				<div class="row">
					<div class="col-xl-12 m-b-30">

						<ul class="team-tablist nav justify-content-center" role="tablist">
							<li class="active">
								<a class="active" href="#b-f-elements" role="tab" data-toggle="tab"
									aria-expanded="false">Add New product</a>
							</li>
							<li class="">
								<a href="#f-Uploads" role="tab" data-toggle="tab" aria-expanded="true">Edit/Remove
									Hotels</a>
							</li>
						</ul>

						<div class="team-tablist-content tab-content">
							<div role="tabpanel" class="tab-pane active animated fadeInUp" id="b-f-elements">
								<div class="row">
									<div class="col-lg-6 m-b-30">
										<div class="card-box">
											<div class="card-h">
												<h5 class="card-caption">Add new product</h5>
											</div>
											<div style="padding: 20px;" class="card-b">
												<div class="row">
													<div class="col-lg-12">
													<form action="inc/add.php" method="POST">

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
<input name="stat" type="text" id="example-readonly" class="form-control" value="pro" hidden>

<button name="submit" type="submit" class="btn btn-primary">Submit</button>
</form>
													</div>


												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane animated fadeInUp" id="f-Uploads">
								<div class="row">
									<div class="main-table-card col-sm-12 m-b-30">
										<div class="card-box">
											<div class="card-h">
												<h5 style="display:inline-block;" class="card-caption">All Hotels</h5>
											</div>
											<div class="card-b" style="padding: 20px;">
												<div class="main-t-table table-responsive">
													<table class="table display" id="data-table">
														<thead>
															<tr>
																<th scope="col">No</th>
																<th scope="col">Name</th>
																<th scope="col">Marathi</th>
																<th scope="col">Hindi</th>
																<th scope="col">Weight Type</th>
																<th scope="col">Gst </th>
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
																<td class="table-name">'.$row['name'].'</td>
																<td class="table-name">'.$row['marathi'].'</td>
																<td class="table-name">'.$row['hindi'].'</td>
																<td class="table-amount">'.$row['weight_type'].'</td>
																<td class="table-amount">'.$row['gst'].'</td>
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
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- PLAY WITH THIS END -->








<?php include_once('footer.php');?>