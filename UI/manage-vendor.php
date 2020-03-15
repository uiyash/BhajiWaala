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
				<div class="header-name animated fadeInUp">
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
														<form action="inc/add-seller.inc.php" method="POST">
															<div class="form-group m-b-15">
																<label for="simpleinput">Name</label>
																<input name="name" type="text" id="simpleinput"
																	class="form-control">
															</div>
															<div class="form-group m-b-15">
																<label for="example-email">Email</label>
																<input name="email" type="email" id="example-email"
																	name="example-email" class="form-control"
																	placeholder="Email"> </div>
															<div class="form-group m-b-15"> <label
																	for="example-palaceholder">Phone
																	No</label>
																<input name="phone" type="number"
																	id="example-palaceholder" class="form-control"
																	placeholder="placeholder"> </div>
															<div class="form-group m-b-15"> <label
																	for="example-textarea">Address</label>
																<textarea name="address" class="form-control"
																	id="example-textarea" rows="5"></textarea> </div>
															<div class="form-group m-b-15"> <label
																	for="example-readonly">GSTIN</label>
																<input name="gstin" type="text" id="example-readonly"
																	class="form-control" value="Readonly value"> </div>
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
																<th scope="col">Name</th>
																<th scope="col">Account</th>
																<th scope="col">Amount</th>
																<th scope="col">Status</th>
																<th scope="col">Edit</th>
																<th scope="col">Remove</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td class="table-name"><img src="img/users/user09.jpg"
																		alt="User image">Ron Kohls</td>
																<td class="table-acc"><a href="#">@ron_k</a></td>
																<td class="table-amount">$1500,00</td>
																<td class="table-status approved">Approved</td>
																<td><button type="button"
																		class="btn btn-outline-primary"><i
																			class="dripicons-pencil"></i>Edit</button>
																</td>
																<td><button type="button"
																		class="btn btn-outline-primary"><i
																			class="dripicons-wrong"></i>Remove</button>
																</td>
															</tr>
															<tr>
																<td class="table-name"><img src="img/users/user08.jpg"
																		alt="User image">Julie Steward</td>
																<td class="table-acc"><a href="#">@julies</a></td>
																<td class="table-amount">$2650,00</td>
																<td class="table-status approved">Approved</td>
																<td><button type="button"
																		class="btn btn-outline-primary"><i
																			class="dripicons-pencil"></i>Edit</button>
																</td>
																<td><button type="button"
																		class="btn btn-outline-primary"><i
																			class="dripicons-wrong"></i>Remove</button>
																</td>
															</tr>
															<tr>
																<td class="table-name"><img src="img/users/user04.jpg"
																		alt="User image">Diana Seeger</td>
																<td class="table-acc"><a href="#">@diana.123</a></td>
																<td class="table-amount">$3000,00</td>
																<td class="table-status rejected">Rejected</td>
																<td><button type="button"
																		class="btn btn-outline-primary"><i
																			class="dripicons-pencil"></i>Edit</button>
																</td>
																<td><button type="button"
																		class="btn btn-outline-primary"><i
																			class="dripicons-wrong"></i>Remove</button>
																</td>
															</tr>
															<tr>
																<td class="table-name"><img src="img/users/user10.jpg"
																		alt="User image">Teresa Oyler</td>
																<td class="table-acc"><a href="#">@teresaa</a></td>
																<td class="table-amount">$900,00</td>
																<td class="table-status panding">Pending</td>
																<td><button type="button"
																		class="btn btn-outline-primary"><i
																			class="dripicons-pencil"></i>Edit</button>
																</td>
																<td><button type="button"
																		class="btn btn-outline-primary"><i
																			class="dripicons-wrong"></i>Remove</button>
																</td>
															</tr>
															<tr>
																<td class="table-name"><img src="img/users/user03.jpg"
																		alt="User image">Javier Smith</td>
																<td class="table-acc"><a href="#">@j_smith</a></td>
																<td class="table-amount">$4500,00</td>
																<td class="table-status panding">Pending</td>
																<td><button type="button"
																		class="btn btn-outline-primary"><i
																			class="dripicons-pencil"></i>Edit</button>
																</td>
																<td><button type="button"
																		class="btn btn-outline-primary"><i
																			class="dripicons-wrong"></i>Remove</button>
																</td>
															</tr>
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