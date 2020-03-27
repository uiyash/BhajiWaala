
<nav id="top-nav">
				<div class="sideNavToggle"><i class="dripicons-align-justify"></i></div>
				<div class="nav-search-input">
					<input type="text" class="form-control" placeholder="Search...">
					<i id="search" class="dripicons-search"></i>
				</div>
				<div class="mobile-search-active animated fadeInRight">
					<form class="mobile-search-box">
						<i class="dripicons-search"></i>
						<input class="mobile-search-input" autofocus type="text" spellcheck="false"
							placeholder="Search...">
						<button type="button" class="exit-search">
							<span>×</span>
						</button>
					</form>
				</div>
				<a class="logo-mobile" href="index.html"><img src="img/logo.png" alt="Aba logo"></a>
				<div class="user-profile dropdown show">
					<a class="dropdown-toggle" href="#" data-display="static" data-toggle="dropdown" role="button"
						aria-haspopup="true" aria-expanded="false">
						<img src="img/users/user01.jpg" alt="User image">
						<i class="user-icon-m dripicons-user"></i>
						<span class="dropdown-arrow dripicons-chevron-down"></span>
					</a>
					<div class="dropdown-menu animated zoomIn">
						<div class="dropdown-menu-wrapper">
							<a class="dropdown-item" href="profile.html"><i class="dripicons-user"></i> Profile</a>
							<a class="dropdown-item" href="#"><i class="dripicons-toggles"></i> Settings</a>
							<div id="dark-toggle" class="dropdown-item"><span id='dark-toggle-text'> Dark mode:</span>
								<label class="mode-container">
									<input type="checkbox">
									<span class="checkmark"></span>
								</label>
							</div>
							<a class="dropdown-item" href="support.html"><i class="dripicons-anchor"></i> FAQ</a>
							<a class="dropdown-item" href="support.html"><i class="dripicons-ticket"></i> Support</a>
							<a class="dropdown-item" href="logout.php"><i class="dripicons-exit"></i> Sign out</a>
						</div>
					</div>
				</div>
				<p class="user-name">
					<?php 
					echo $mrow['name'];
					?>
					<span class="user-position">Team Admin</span>
				</p>
				<ul class="nav-icons">
					<li class="nav-calendar dropdown">
						<a class="dropdown-toggle" data-display="static" href="#" data-toggle="dropdown" role="button"
							aria-haspopup="true" aria-expanded="false">
							<i class="dripicons-calendar"></i>
						</a>
						<ul class="user-calendar dropdown-menu animated zoomIn">
							<li>
								<div class="dropdown-menu-wrapper">
									<div id="calendar"></div>
								</div>
							</li>
						</ul>
					</li>
					<li class="nav-messages dropdown">
						<a class="dropdown-toggle" data-display="static" href="#" data-toggle="dropdown" role="button"
							aria-haspopup="true" aria-expanded="false">
							<i class="dripicons-message"></i>
						</a>
						<ul class="user-messages timeline dropdown-menu-wrapper dropdown-menu animated zoomIn">
							<li>
								<a href="view-mail.html">
									<img src="img/users/user02.jpg" alt="User profile">
									<p class="user-messages-header">Adelia Hess</p>
									<p class="user-messages-preview">Just checking in to make sure that you got new
										report…</p>
									<span class="user-messages-time">2 hours ago</span>
								</a>
							</li>
							<li>
								<a href="view-mail.html">
									<img src="img/users/user03.jpg" alt="User profile">
									<p class="user-messages-header">Javier Smith</p>
									<p class="user-messages-preview">I appreciate you giving me your direct phone
										number. I’ll call you in two weeks, as you suggested, once ...</p>
									<span class="user-messages-time">3 hours ago</span>
								</a>
							</li>
							<li>
								<a href="view-mail.html">
									<img src="img/users/user04.jpg" alt="User profile">
									<p class="user-messages-header">Diana Seeger</p>
									<p class="user-messages-preview">Hey, thanks for the update...</p>
									<span class="user-messages-time">12 hours ago</span>
								</a>
							</li>
							<li><a href="mail.html" class="view-all">View All Messages</a></li>
						</ul>
					</li>
					<li class="nav-bell dropdown">
						<a class="dropdown-toggle" data-display="static" href="#" data-toggle="dropdown" role="button"
							aria-haspopup="true" aria-expanded="false">
							<i class="dripicons-bell"></i>
						</a>
						<ul class="user-notification timeline dropdown-menu dropdown-menu-wrapper animated zoomIn">
							<li>
								<a href="javascript:;">
									<i class="dripicons-user-group"></i>
									<p class="user-notification-header">Users</p>
									<p class="user-notification-desc"><span class="users">24</span> New users joined
										today<span class="users">!</span></p>
									<span class="user-notification-time">few sec ago</span>
								</a>
							</li>
							<li>
								<a href="javascript:;">
									<i class="dripicons-document-remove"></i>
									<p class="user-notification-header">Reports</p>
									<p class="user-notification-desc">Daily report is now available for download.</p>
									<span class="user-notification-time">3 hours ago</span>
								</a>
							</li>
							<li>
								<a href="javascript:;">
									<i class="dripicons-warning"></i>
									<p class="user-notification-header">Server Error</p>
									<p class="user-notification-desc">HTTP ERROR <span class="error">500</span>
										(INTERNAL SERVER ERROR)</p>
									<span class="user-notification-time">7 hours ago</span>
								</a>
							</li>
							<li><a class="view-all" href="javascript:;">View All Notifications</a></li>
						</ul>
					</li>
				</ul>
				<div class="nav-tour">
					<a id="start-tour" href="#">
						<i class="dripicons-trophy"></i>
						<span>Start guided tour</span>
					</a>
				</div>
			</nav>