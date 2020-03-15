<?php
session_start();
if(!strcmp("admin",$_SESSION['privilege'])==0)
{
  // header("Location:index.php");
  // exit();
 echo "<script>window.open('login.php','_self')</script>";

} 
include_once('header.php'); ?>

		
			<div id="content-header">
				<div class="header-name">
					<h1 class="tour-step-one">Hi, <span>Anthony</span></h1>
					<p>have a <span>nice</span> day!</p>
				</div>
				<div class="header-team">
					<p class="title">Team members</p>
					<span>20</span>
				</div>
				<div class="header-status">
					<p class="title">Team status</p>
					<span>Busy</span>
				</div>
				<div class="header-tasks">
					<p class="title">Pending tasks</p>
					<span>103</span>
				</div>
			</div>
			<div id="main-content">
				<div class="row main-data">
					<div class="users-card col-md-12 col-lg-6 col-xl-3 m-b-30">
						<div class="card-box">
							<div class="card-h">
								<h5 class="card-caption">Total users</h5>
								<div class="card-dropdown">
								  <i class="menu-drop dripicons-chevron-down"></i>
								  <div class="card-dropdown-content">
								    <a href="index.html"><i class="dripicons-clockwise"></i>Update</a>
								    <a href="index.html"><i class="dripicons-document-edit"></i>Edit Widget</a>
								    <a href="index.html"><i class="dripicons-anchor"></i>FAQ</a>
								  </div>
								</div>
							</div>
							<div class="card-b">
								<div class="main">
									<div class="mainInfo">
										<p class="card-num">15,796</p>
										<p class="c-growth">You have <span class="more">+20.4%</span><br> more users than last week.</p>
									</div>
									<div class="chartWrapper"><canvas id="users"></canvas></div>
								</div>
								<div class="row info-box">
									<div class="info-box-l col-6">
										<p>Goal: <span class="more">20k</span></p>
										<div class="progress">
											<div class="progress-bar b-b" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>									
										</div>
									</div>
									<div class="info-box-r col-6">
										<p>Time: <span class="duration">4w</span></p>
										<div class="progress">
										  <div class="progress-bar b-o" role="progressbar" style="width: 33%;" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="sales-card col-md-12 col-lg-6 col-xl-3 m-b-30">
						<div class="card-box">
							<div class="card-h">
								<h5 class="card-caption">Total sales</h5>
								<div class="card-dropdown">
								  <i class="menu-drop dripicons-chevron-down"></i>
								  <div class="card-dropdown-content">
								    <a href="index.html"><i class="dripicons-clockwise"></i>Update</a>
								    <a href="index.html"><i class="dripicons-document-edit"></i>Edit Widget</a>
								    <a href="index.html"><i class="dripicons-anchor"></i>FAQ</a>
								  </div>
								</div>

							</div>
							<div class="card-b">
								<div class="main">
									<div class="mainInfo">
										<p class="card-num"><span>$</span>357,953</p>
										<p class="c-growth">You have <span class="more">+14.4%</span><br> more sales than last week.</p>
									</div>
									<div class="chartWrapper"><canvas id="sales"></canvas></div>
								</div>
								<div class="info-box download-report">
									<a href="#">
										<i class="dripicons-cloud-download"></i>
										Download overall report
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="reviews-card col-md-12 col-lg-6 col-xl-3 m-b-30">
						<div class="card-box">
							<div class="card-h">
								<h5 class="card-caption">Reviews</h5>
								<div class="card-dropdown">
								  <i class="menu-drop dripicons-chevron-down"></i>
								  <div class="card-dropdown-content">
								    <a href="index.html"><i class="dripicons-clockwise"></i>Update</a>
								    <a href="index.html"><i class="dripicons-document-edit"></i>Edit Widget</a>
								    <a href="index.html"><i class="dripicons-anchor"></i>FAQ</a>
								  </div>
								</div>
							</div>
							<div class="card-b">
								<p class="card-num">2,036</p>
								<p class="c-growth">You got <span class="more">+11.1%</span><br> more reviews than last week.</p>
								<div class="reviews-comments">
									<p><span>742</span> left a comment</p>
									<div class="reviews-img">
										<a href="profile.html"><img src="img/users/user02.jpg" alt="User image"></a>
										<a href="profile.html"><img src="img/users/user03.jpg" alt="User image"></a>
										<a href="profile.html"><img src="img/users/user04.jpg" alt="User image"></a>
										<a href="profile.html"><img src="img/users/user05.jpg" alt="User image"></a>
										<a href="profile.html"><img src="img/users/user06.jpg" alt="User image"></a>
									</div>
								</div>
								<div class="row info-box box-bottom">
									<div class="info-box-l col-6">
										<p class="reviews-num">1642</p>
										<p class="reviews-desc"><i class="dripicons-plus more"></i>positive</p>
									</div>
									<div class="info-box-r col-6">
										<p class="reviews-num">394</p>
										<p class="reviews-desc"><i class="dripicons-minus less"></i>negative</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="rating-card col-md-12 col-lg-6 col-xl-3 m-b-30">
						<div class="card-box">
							<div class="card-h">
								<h5 class="card-caption">
									Avg. rating
								</h5>
								<div class="card-dropdown">
								  <i class="menu-drop dripicons-chevron-down"></i>
								  <div class="card-dropdown-content">
								    <a href="index.html"><i class="dripicons-clockwise"></i>Update</a>
								    <a href="index.html"><i class="dripicons-document-edit"></i>Edit Widget</a>
								    <a href="index.html"><i class="dripicons-anchor"></i>FAQ</a>
								  </div>
								</div>
							</div>
							<div class="card-b">
								<div class="main ratingWrapper">
									<div class="mainInfo">
										<p class="card-num">4.5</p>
										<div class="rating-stars">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star-half-alt"></i>
										</div>
										<p class="c-growth m-b-10 m-t--2"><span class="more">+0.1%</span> points from last week.</p>
									</div>
									<div class="chartWrapper">
								  		<div class="rating-chart">
								  			<canvas id="ratingGrowth"></canvas>
											<div class="align">
												<i class="dripicons-trophy"></i>
											</div>
								  		</div>
								  		<p class="rating-msg">Superb!</p>
							  		</div>
							  	</div>
							  	
							  	<div class="rating-info">
							  		<p class="rating-info-n">86<span>%</span></p>
							  		<p class="rating-info-t">of users is satisfied <br> with their purchases.</p>
							  	</div>
							</div>
						</div>
					</div>	
				</div>
				<div class="row">
					<div class="activity-card col-lg-12 col-xl-6 m-b-30">
						<div class="card-box">
							<div class="card-h">
								<h5 class="card-caption">Activity feed</h5>
								<div class="card-dropdown">
								  <i class="menu-drop dripicons-chevron-down"></i>
								  <div class="card-dropdown-content">
								    <a href="index.html"><i class="dripicons-clockwise"></i>Update</a>
								    <a href="index.html"><i class="dripicons-document-edit"></i>Edit Widget</a>
								    <a href="index.html"><i class="dripicons-anchor"></i>FAQ</a>
								  </div>
								</div>
							</div>
							<div class="card-b">
								<ul class="activity-list timeline scroll"> 
									<li>
							        	<a href="profile.html">
							        		<img src="img/users/user02.jpg" alt="User profile">
							        		<div class="activity-list-header">
								        		<p class="activity-user-time">17 minutes ago</p>
								        		<p class="activity-user-name">Adelia Hess</p>
							        		</div>
							        	</a>
							        	<div class="activity-list-body">
							        		<p class="activity-desc"><i class="dripicons-camera"></i>Uploaded 3 photos to album <span>I love my job</span>.</p>
							        		<div class="activity-desc-img">
							        			<a href="img/work01.jpg" target="_blank"><img src="img/work01.jpg" alt="I love my job"></a>
							        			<a href="img/work02.jpg" target="_blank"><img src="img/work02.jpg" alt="I love my job"></a>
							        			<a href="img/work09.jpg" target="_blank"><img src="img/work09.jpg" alt="I love my job"></a>
							        		</div>
							        	</div>
							        </li>
							        <li>
							        	<a href="profile.html">
							        		<img src="img/users/user03.jpg" alt="User profile">
							        		<div class="activity-list-header">
								        		<p class="activity-user-time">2 hours ago</p>
								        		<p class="activity-user-name">Javier Smith</p>
							        		</div>
							        	</a>
							        	<div class="activity-list-body">
							        		<p class="activity-desc"><i class="dripicons-pencil"></i>Assigned a task to <span>Diana Seeger</span>.</p>
							        	</div>
							        </li>
							        <li>
							        	<a href="profile.html">
							        		<img src="img/users/user05.jpg" alt="User profile">
							        		<div class="activity-list-header">
								        		<p class="activity-user-time">4 hours ago</p>
								        		<p class="activity-user-name">Fred Marker</p>
							        		</div>
							        	</a>
							        	<div class="activity-list-body">
							        		<p class="activity-desc"><i class="dripicons-message"></i>Replied to your comment on <span>Aba project</span>.</p>
							        		<p class="activity-desc-comment">
							        			<q>I appreciate your taking the time to answer my question!</q>
							        		</p>
							        	</div>
							        </li>
							        <li>
							        	<a href="profile.html">
							        		<img src="img/users/user04.jpg" alt="User profile">
							        		<div class="activity-list-header">
								        		<p class="activity-user-time">7 hours ago</p>
								        		<p class="activity-user-name">Diana Seeger</p>
							        		</div>
							        	</a>
							        	<div class="activity-list-body">
							        		<p class="activity-desc"><i class="dripicons-pencil"></i>Assigned a task to <span>Adelia Hess</span>.</p>
							        	</div>
							        </li>
							        <li>
							        	<a href="profile.html">
							        		<img src="img/users/user03.jpg" alt="User profile">
							        		<div class="activity-list-header">
								        		<p class="activity-user-time">2 hours ago</p>
								        		<p class="activity-user-name">Javier Smith</p>
							        		</div>
							        	</a>
							        	<div class="activity-list-body">
							        		<p class="activity-desc"><i class="dripicons-pencil"></i>Assigned a task to <span>Diana Seeger</span>.</p>
							        	</div>
							        </li>       
						    	</ul>
						    	<div class="a-activity"><a class="all-activity" href="javascript:;">View All Activities</a></div>
							</div>
						</div>
					</div>
					<div class="basic-info-card col-md-12 col-lg-12 col-xl-6 m-b-30">
						<div class="row">
							<div class="col-lg-12">
								<div class="team-members-card card-box">
									<div class="card-h">
										<h5 class="card-caption">
											Team members
										</h5>
										<div class="scroll-btns">
											<i class="scroll-left menu-drop dripicons-chevron-left"></i>
											<i class="scroll-right menu-drop dripicons-chevron-right"></i>
										</div>
									</div>
									<div class="card-b">
										<div class="team-members-wrapper scroll">
											<div class="team-member">
												<a href="profile.html">
													<img src="img/users/user10.jpg" alt="User">
													<p class="t-member-name">Teresa Oyler</p>
													<p class="t-member-position">UX Designer</p>
												</a>
											</div>
											<div class="team-member">
												<a href="profile.html">
													<img src="img/users/user11.jpg" alt="User">
													<p class="t-member-name">Colin Kirst</p>
													<p class="t-member-position">Test engineer</p>
												</a>
											</div>
											<div class="team-member">
												<a href="profile.html">
													<img src="img/users/user02.jpg" alt="User">
													<p class="t-member-name">Adelia Hess</p>
													<p class="t-member-position">Project menager</p>
												</a>
											</div>	
											<div class="team-member">
												<a href="profile.html">
													<img src="img/users/user03.jpg" alt="User">
													<p class="t-member-name">Javier Smith</p>
													<p class="t-member-position">Test engineer</p>
												</a>
											</div>	
											<div class="team-member">
												<a href="profile.html">
													<img src="img/users/user04.jpg" alt="User">
													<p class="t-member-name">Diana Seeger</p>
													<p class="t-member-position">UX Designer</p>
												</a>
											</div>	
											<div class="team-member">
												<a href="profile.html">
													<img src="img/users/user05.jpg" alt="User">
													<p class="t-member-name">Fred Marker</p>
													<p class="t-member-position">UI Developer</p>
												</a>
											</div>	
											<div class="team-member">
												<a href="profile.html">
													<img src="img/users/user06.jpg" alt="User">
													<p class="t-member-name">Kacie Wong</p>
													<p class="t-member-position">Web Developer</p>
												</a>
											</div>
											<div class="team-member">
												<a href="profile.html">
													<img src="img/users/user07.jpg" alt="User">
													<p class="t-member-name">Kirk Taranto</p>
													<p class="t-member-position">UX Designer</p>
												</a>
											</div>
											<div class="team-member">
												<a href="profile.html">
													<img src="img/users/user08.jpg" alt="User">
													<p class="t-member-name">Julie Steward</p>
													<p class="t-member-position">Web Developer</p>
												</a>
											</div>
											<div class="team-member">
												<a href="profile.html">
													<img src="img/users/user09.jpg" alt="User">
													<p class="t-member-name">Ron Kohls</p>
													<p class="t-member-position">UI Developer</p>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>	
						<div class="row productivity-row">
							<div class="col-lg-6 m-b-30">
								<div class="card-box">
									<div class="card-h">
										<h5 class="card-caption">Member of the month</h5>
										<div class="card-dropdown">
										  <i class="menu-drop dripicons-chevron-down"></i>
										  <div class="card-dropdown-content">
										    <a href="index.html"><i class="dripicons-clockwise"></i>Update</a>
										    <a href="index.html"><i class="dripicons-document-edit"></i>Edit Widget</a>
										    <a href="index.html"><i class="dripicons-anchor"></i>FAQ</a>
										  </div>
										</div>
									</div>
									<div class="card-b product-card">
										<a class="product-member" href="profile.html">
											<img src="img/users/user06.jpg" alt="User">
											<i class="product-trophy dripicons-trophy"></i>
											<p class="p-member-name">Kacie Wong</p>
											<p class="p-member-position">Web Developer</p>
										</a>
										<div class="p-chart-box">
											<div class="product-chart">
												<canvas id="productivity"></canvas>
											</div>
											<div class="p-increase">
												<p>+18<span>%</span></p>
												<span>Productivity</span>
											</div>
										</div>
									</div>
								</div>
							</div>	
							<div class="col-lg-6 m-b-30">
								<div class="card-box">
									<div class="card-h">
										<h5 class="card-caption">Website traffic</h5>
										<div class="card-dropdown">
										  <i class="menu-drop dripicons-chevron-down"></i>
										  <div class="card-dropdown-content">
										    <a href="index.html"><i class="dripicons-clockwise"></i>Update</a>
										    <a href="index.html"><i class="dripicons-document-edit"></i>Edit Widget</a>
										    <a href="index.html"><i class="dripicons-anchor"></i>FAQ</a>
										  </div>
										</div>
									</div>
									<div class="card-b">
										<div class="w-unique">
											<p class="unique-num">46,185</p>
											<p class="unique-desc">Unique visitors</p>
										</div>
										<div class="w-progress-bar">
											<div class="progress">
											  <div class="progress-bar bar-direct" role="progressbar" style="width: 46%" aria-valuenow="46" aria-valuemin="0" aria-valuemax="100"></div>
											  <div class="progress-bar bar-search" role="progressbar" style="width: 31%" aria-valuenow="31" aria-valuemin="0" aria-valuemax="100"></div>
											  <div class="progress-bar bar-referrals" role="progressbar" style="width: 16%" aria-valuenow="16" aria-valuemin="0" aria-valuemax="100"></div>
											  <div class="progress-bar bar-social" role="progressbar" style="width: 7%" aria-valuenow="7" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</div>
										<div class="w-table table-responsive">					
											<table class="table">
											  <tbody>
											    <tr>
											      <td>
											      	<p class="w-list-name"><i class="w-direct dripicons-media-record"></i>Direct</p>
												  </td>
											      <td>
											      	<p class="w-list-num">21,245</p>
											      </td>
											      <td>
											      	<p class="w-list-per">46%</p>
											      </td>
											    </tr>
											    <tr>
											      <td>
											      	<p class="w-list-name"><i class="w-search dripicons-media-record"></i>Search</p>
											      </td>
											      <td>
											      	<p class="w-list-num">14,317</p>
											  	  </td>
											      <td>
											      	<p class="w-list-per">31%</p>
											  	  </td>
											    </tr>
											    <tr>
											      <td>
											      	<p class="w-list-name"><i class="w-referrals dripicons-media-record"></i>Referrals</p>
											      </td>
											      <td>
											      	<p class="w-list-num">7,389</p>
											      </td>
											      <td>
											      	<p class="w-list-per">16%</p>
											      </td>
											    </tr>
											    <tr>
											      <td>
											      	<p class="w-list-name"><i class="w-social dripicons-media-record"></i>Social</p>
											      </td>
											      <td>
											      	<p class="w-list-num">3,232</p>
											      </td>
											      <td>
											      	<p class="w-list-per">7%</p>
											      </td>
											    </tr>
											  </tbody>
											</table>
										</div>
									</div>	
								</div>
							</div>	
						</div>
						<div class="row emails-info-row">
							<div class="col-lg-12 m-b-30">
								<div class="card-box">
									<div class="card-h">
										<h5 class="card-caption">Emails sent</h5>
										<div class="card-dropdown">
										  <i class="menu-drop dripicons-chevron-down"></i>
										  <div class="card-dropdown-content">
										    <a href="index.html"><i class="dripicons-clockwise"></i>Update</a>
										    <a href="index.html"><i class="dripicons-document-edit"></i>Edit Widget</a>
										    <a href="index.html"><i class="dripicons-anchor"></i>FAQ</a>
										  </div>
										</div>
									</div>
									<div class="card-b">
										<div class="emails-sent e-sent">
											<p class="emails-num">3,212</p>
											<p class="emails-info">Emails sent</p>
										</div>
										<div class="emails-sent e-goal">
											<p class="emails-num">7,000</p>
											<p class="emails-info">Goal</p> 
										</div>
										<div class="emails-sent">
											<p class="emails-num">891</p>
											<p class="emails-info">Open rate</p>
										</div>
										<div class="emails-sent">
											<p class="emails-num">433</p>
											<p class="emails-info">Click rate</p>
										</div>
										<div class="emails-sent">
											<p class="emails-num">96</p>
											<p class="emails-info">Bounce</p>
										</div>
									</div>
								</div>
							</div>	
						</div>					
					</div>
				</div>
				<div class="row">
					<div class="main-table-card col-sm-12 m-b-30">
						<div class="card-box">
							<div class="card-h">
								<h5 class="card-caption">Active deals</h5>
								<select class="selectpicker">
								  <optgroup label="Deal filter options">
								    <option>All deals</option>
								    <option>Pending deals</option>
								    <option>Approved deals</option>
								    <option>Rejected deals</option>
								  </optgroup>
								</select>
							</div>
							<div class="card-b">
								<div class="main-t-table table-responsive">
									<table class="table">
									  <thead>
									    <tr>
									      <th scope="col">Number</th>
									      <th scope="col">Name</th>
									      <th scope="col">Account</th>
									      <th scope="col">Amount</th>
									      <th scope="col">Status</th>
									      <th scope="col">Edit</th>
									    </tr>
									  </thead>
									  <tbody>
									    <tr>
									      <td class="table-num">01</td>
									      <td class="table-name"><img src="img/users/user09.jpg" alt="User image">Ron Kohls</td>
									      <td class="table-acc"><a href="#">@ron_k</a></td>
									      <td class="table-amount">$1500,00</td>
									      <td class="table-status approved">Approved</td>
									      <td><button type="button" class="btn btn-outline-primary"><i class="dripicons-pencil"></i>Change</button></td>
									    </tr>
									    <tr>
									      <td class="table-num">02</td>
									      <td class="table-name"><img src="img/users/user08.jpg" alt="User image">Julie Steward</td>
									      <td class="table-acc"><a href="#">@julies</a></td>
									      <td class="table-amount">$2650,00</td>
									      <td class="table-status approved">Approved</td>
									      <td><button type="button" class="btn btn-outline-primary"><i class="dripicons-pencil"></i>Change</button></td>
									    </tr>
									    <tr>
									      <td class="table-num">03</td>
									      <td class="table-name"><img src="img/users/user04.jpg" alt="User image">Diana Seeger</td>
									      <td class="table-acc"><a href="#">@diana.123</a></td>
									      <td class="table-amount">$3000,00</td>
									      <td class="table-status rejected">Rejected</td>
									      <td><button type="button" class="btn btn-outline-primary"><i class="dripicons-pencil"></i>Change</button></td>
									    </tr>
									    <tr>
									      <td class="table-num">04</td>
									      <td class="table-name"><img src="img/users/user10.jpg" alt="User image">Teresa Oyler</td>
									      <td class="table-acc"><a href="#">@teresaa</a></td>
									      <td class="table-amount">$900,00</td>
									      <td class="table-status panding">Pending</td>
									      <td><button type="button" class="btn btn-outline-primary"><i class="dripicons-pencil"></i>Change</button></td>
									    </tr>
									    <tr>
									      <td class="table-num">05</td>
									      <td class="table-name"><img src="img/users/user03.jpg" alt="User image">Javier Smith</td>
									      <td class="table-acc"><a href="#">@j_smith</a></td>
									      <td class="table-amount">$4500,00</td>
									      <td class="table-status panding">Pending</td>
									      <td><button type="button" class="btn btn-outline-primary"><i class="dripicons-pencil"></i>Change</button></td>
									    </tr>
									    <tr>
									      <td class="table-num">06</td>
									      <td class="table-name"><img src="img/users/user07.jpg" alt="User image">Kirk Taranto</td>
									      <td class="table-acc"><a href="#">@kirkkk</a></td>
									      <td class="table-amount">$2300,00</td>
									      <td class="table-status rejected">Rejected</td>
									      <td><button type="button" class="btn btn-outline-primary"><i class="dripicons-pencil"></i>Change</button></td>
									    </tr>
									  </tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="task-card col-md-12 col-lg-6 col-xl-4 m-b-30">
						<div class="card-box">
							<div class="card-h">
								<h5 class="card-caption">Today's tasks</h5>
								<div class="card-dropdown">
								  <i class="menu-drop dripicons-chevron-down"></i>
								  <div class="card-dropdown-content">
								    <a href="index.html"><i class="dripicons-clockwise"></i>Update</a>
								    <a href="index.html"><i class="dripicons-document-edit"></i>Edit Widget</a>
								    <a href="index.html"><i class="dripicons-anchor"></i>FAQ</a>
								  </div>
								</div>
							</div>
							<div class="card-b tasks-card">
								<p class="tasks-header"><i class="dripicons-media-record ui-task-icon"></i>USER INTERFACE <span>(3)</span></p>
								<ul>
									<li class="task-item">
										<label class="task-mode-container">
										  <input type="checkbox">
										  <span class="task-checkmark checkmark"></span>
										</label>
										<p class="task-item-info">Design admin dashboard</p>
									</li>
									<li class="task-item task-muted">
										<label class="task-mode-container">
										  <input type="checkbox" checked="">
										  <span class="task-checkmark checkmark"></span>
										</label>
										<p class="task-item-info">Design user profile</p>
									</li>
									<li class="task-item">
										<label class="task-mode-container">
										  <input type="checkbox">
										  <span class="task-checkmark checkmark"></span>
										</label>
										<p class="task-item-info">Create overall flow prototype</p>
									</li>									
								</ul>
								<p class="tasks-header"><i class="dripicons-media-record design-task-icon"></i>DESIGN SYSTEM <span>(4)</span></p>
								<ul>
									<li class="task-item  task-muted">
										<label class="task-mode-container">
										  <input type="checkbox" checked="">
										  <span class="task-checkmark checkmark"></span>
										</label>
										<p class="task-item-info">Switch primary font-size to 14px</p>
									</li>
									<li class="task-item">
										<label class="task-mode-container">
										  <input type="checkbox">
										  <span class="task-checkmark checkmark"></span>
										</label>
										<p class="task-item-info">Add standard form elements</p>
									</li>
									<li class="task-item">
										<label class="task-mode-container">
										  <input type="checkbox">
										  <span class="task-checkmark checkmark"></span>
										</label>
										<p class="task-item-info">Refine basic elements</p>
									</li>
									<li class="task-item task-muted">
										<label class="task-mode-container">
										  <input type="checkbox" checked="">
										  <span class="task-checkmark checkmark"></span>
										</label>
										<p class="task-item-info">Change primary color</p>
									</li>
								</ul>
								<div class="info-box add-new-task download-report">
									<form class="form-inline">
									  <div class="form-group">
									    <input type="text" class="form-control" placeholder="Add new task...">
									  </div>
									  <button type="submit" class="add-task-btn btn btn-primary">+</button>
									</form>
								</div>
							</div>
						</div>
					</div>
					<div class="completedTasks-card col-md-12 col-lg-6 col-xl-4 m-b-30">
						<div class="card-box">
							<div class="card-h">
								<h5 class="card-caption">Completed tasks</h5>
								<div class="card-dropdown">
								  <i class="menu-drop dripicons-chevron-down"></i>
								  <div class="card-dropdown-content">
								    <a href="index.html"><i class="dripicons-clockwise"></i>Update</a>
								    <a href="index.html"><i class="dripicons-document-edit"></i>Edit Widget</a>
								    <a href="index.html"><i class="dripicons-anchor"></i>FAQ</a>
								  </div>
								</div>
							</div>
							<div class="card-b">
								<div class="tasks-chart">
									<canvas id="tasksCompleted"></canvas>
									<canvas id="tasksDue"></canvas>
									<canvas id="tasksAssigned"></canvas>
									<p class="t-completed"><i class="dripicons-graph-line"></i>45%<span>Completed</span></p>
									<p class="t-due"><i class="dripicons-graph-line"></i>73%<span>Due</span></p>
									<p class="t-assigned"><i class="dripicons-graph-line"></i>100%<span>Assigned</span></p>
									<div class="task-productivity">
										<p>+11<span>%</span></p>
										<span>Productivity</span>
									</div>
								</div>
								<div class="tasksProductivity-chart">
									<canvas id="tasksProductivity"></canvas>
								</div>

								<div class="tasks-report info-box download-report">
									<a href="#">
										<i class="dripicons-cloud-download"></i>
										Download overall report
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="update-profile-card col-md-12 col-lg-12 col-xl-4 m-b-30">
						<div class="card-box">
							<div class="card-h">
								<div class="card-dropdown">
								  <i class="menu-drop dripicons-chevron-down"></i>
								  <div class="card-dropdown-content">
								    <a href="index.html"><i class="dripicons-clockwise"></i>Update</a>
								    <a href="index.html"><i class="dripicons-document-edit"></i>Edit Widget</a>
								    <a href="index.html"><i class="dripicons-anchor"></i>FAQ</a>
								  </div>
								</div>
							</div>
							<div class="card-b">
								<h2>Hi Anthony.</h2>
								<p>Let us help you get the most <br>
									out of you account </p>
								<ul>
									<li><a href="index.html"><i class="dripicons-user"></i><span>Account details</span></a></li>
									<li><a href="index.html"><i class="dripicons-graduation"></i><span>Finish guided tour</span></a></li>
									<li><a href="index.html"><i class="dripicons-upload"></i><span>Import your data</span></a></li>
									<li><a href="index.html"><i class="dripicons-user-group"></i><span>Invite your friends</span></a></li>							
								</ul>
							</div>
						</div>
					</div>	
				</div>
				<div class="row">			
					<div class="weather-card col-md-12 col-lg-12 col-xl-8 m-b-30">
						<div class="card-box">
							<div class="row">
								<div class="weather-day col-lg-4">
									<div class="weather-header">
										Monday
									</div>
									<div class="weather-center">
										<i class="fas fa-cloud-sun-rain"></i>
										<p>+25&#176;</p>
										<span>Cloudy day</span>
									</div>
									<div class="weather-footer">
										15 Jun
									</div>
								</div>
								<div class="weather-day center-w-div col-lg-4">
									<div class="weather-header">
										Tuesday
									</div>
									<div class="weather-center">
										<i class="fas fa-sun"></i>
										<p>+31&#176;</p>
										<span>Sunny day</span>
									</div>
									<div class="weather-footer">
										16 Jun
									</div>
								</div>
								<div class="weather-day col-lg-4">
									<div class="weather-header">
										Wednesday
									</div>
									<div class="weather-center">
										<i class="fas fa-cloud-showers-heavy"></i>
										<p>+22&#176;</p>
										<span>Rainy day</span>
									</div>
									<div class="weather-footer">
										17 Jun
									</div>
								</div>
							</div>
						</div>
					</div>	
					<div class="contacts-card col-lg-12 col-xl-4 m-b-30">
						<div class="card-box">
							<div class="card-h">
								<h5 class="card-caption">Contacts</h5>
								<div class="card-dropdown">
								  <i class="menu-drop dripicons-chevron-down"></i>
								  <div class="card-dropdown-content">
								    <a href="index.html"><i class="dripicons-clockwise"></i>Update</a>
								    <a href="index.html"><i class="dripicons-document-edit"></i>Edit Widget</a>
								    <a href="index.html"><i class="dripicons-anchor"></i>FAQ</a>
								  </div>
								</div>
							</div>
							<div class="card-b">
								<div class="contact-wrapper">
									<div class="contact">
										<img src="img/users/user02.jpg" alt="User image">
										<p class="contact-name">Adelia Hess <span class="contact-address">adelia.hess@aba.com</span></p>
										<a href="#"><i class="dripicons-message"></i></a>
									</div>
									<div class="contact">
										<img src="img/users/user10.jpg" alt="User image">
										<p class="contact-name">Teresa Oyler <span class="contact-address">teresa.oyler@aba.com</span></p>
										<a href="#"><i class="dripicons-message"></i></a>
									</div>
									<div class="contact">
										<img src="img/users/user11.jpg" alt="User image">
										<p class="contact-name">Colin Kirst <span class="contact-address">colinkirst@mymail.com</span></p>
										<a href="#"><i class="dripicons-message"></i></a>
									</div>
									<div class="contact contact-last">
										<img src="img/users/user08.jpg" alt="User image">
										<p class="contact-name">Julie Steward <span class="contact-address">julie.steward@mai.com</span></p>
										<a href="#"><i class="dripicons-message"></i></a>
									</div>
									<a class="show-all-contacts" href="index.html">Show all contacts</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>



<?php include_once('footer.php');?>
