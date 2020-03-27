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
					<h1><span>Manage Hotels</span></h1>
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
									aria-expanded="false">Add New Hotel</a>
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
												<h5 class="card-caption">Add new Hotel</h5>
											</div>
											<div style="padding: 20px;" class="card-b">
												<div class="row">
													<div class="col-lg-12">
															<div class="form-group m-b-15">
																<label for="name">Name</label>
																<input name="name" type="text" id="name"
																	class="form-control" placeholder="Raj Kapoor">
															</div>
															<div class="form-group m-b-15"> <label
																	for="phone">Phone
																	No</label>
																<input name="phone" type="tel"
																	id="phone" class="form-control"
																	placeholder="8779113007" minlength="10" maxlength="10"> </div>
															<div class="form-group m-b-15">
																<label for="email">Email</label>
																<input name="email" type="email" id="email"
																	name="email" class="form-control"
																	placeholder="raj@gmail.com"> </div>
															<div class="form-group m-b-15"> <label
																	for="example-textarea">Address</label>
																<textarea name="address" class="form-control"
																	id="address" rows="1" placeholder="N M Joshi marg, Mumbai 27."></textarea> </div>
															<div class="form-group m-b-15"> <label
																	for="example-readonly">GSTIN</label>
																<input name="gstin" type="text" id="example-readonly"
																	class="form-control" placeholder="22XXXXXXXXXX123"> </div>
															<button name="submit" type="submit"
																class="btn btn-primary">Submit</button>
														</form>
													</div>


												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div role="tabKaranpanel" class="tab-pane animated fadeInUp" id="f-Uploads">
								<div class="row">
									<div class="main-table-card col-sm-12 m-b-30">
										<div class="card-box">
											<div class="card-h">
												<h5 style="display:inline-block;" class="card-caption">All Hotels</h5>
											</div>
											<div class="card-b" style="padding: 20px;">
												<div class="main-t-table table-responsive">
													<table class="table display" id="manage-hotel">
														<thead>
															<tr>
																<th scope="col"><i class="fas fa-sort"></i> SR #</th>
																<th scope="col"><i class="fas fa-sort"></i> Name </th>
																<th scope="col"><i class="fas fa-sort"></i> Phone</th>
																<th scope="col"><i class="fas fa-sort"></i> Email</th>
																<th scope="col"><i class="fas fa-sort"></i> Address</th>
																<th scope="col"><i class="fas fa-sort"></i> GSTIN</th>
																<th scope="col">action</th>
																
															</tr>
														</thead>
														<tbody>
														<?php
														$c=1;
														 while($row = mysqli_fetch_assoc($result)) {
														 	?>
															
															<tr id="<?php echo $row['id']; ?>">
															<?php	

															echo '
																<td>'.$row['id'].'</td>
																<td class="table-name"><img src="img/users/hotel.png"
																alt="User image">'.$row['name'].'</td>
																<td class="table-amount">'.$row['phone'].'</td>
																<td class="table-acc"><a href="#">'.$row['email'].'</a></td>
																<td class="table-amount">'.$row['address'].'</td>
																<td class="table-amount">'.$row['gstin'].'</td>
																
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


<script>

$(document).ready(function(){
	$('#manage-hotel').Tabledit({
		deleteButton: true,
		editButton: false,   	
		columns: {
		  identifier: [0, 'id'],                    
		  editable: [[1, 'name'], [2, 'phone'], [3, 'email'], [4, 'address'], [5, 'gsLovetin']]
		},
		hideIdentifier: false,
		url: 'inc/edit.php?stat=h'		
	});
});
</script>


<?php include_once('footer.php');?>