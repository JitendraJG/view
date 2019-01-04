	<?php $this->view('admin/user-header') ?>

	<section class="ideazone">
		<div class="container">
			<div class="row mb-10 hidden-sm hidden-xs">
				<div class="col-md-5">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">
							<a href="#">Dashboard</a>
						</li>
						<li class="breadcrumb-item">
							<a href="#">learn</a>
						</li>
						<li class="breadcrumb-item active">Professional Skill - Explore</li>
					</ol>
				</div>
				<div class="col-md-3 col-xs-6">
					<ul class="switch-tab" role="tablist">
						<li role="presentation" class="active">
							<a href="#explore" aria-controls="explore" role="tab" data-toggle="tab">Explore</a>
						</li>
						<li role="presentation">
							<a href="#myFeed" aria-controls="myFeed" role="tab" data-toggle="tab">My Feed</a>
						</li>
					</ul>
				</div>
				<div class="col-md-4 col-xs-6 text-right search-skill">
					<ul class="nav nav-pills notify-nav" role="tablist">
						<li role="presentation" class="dropdown">
							<form id="demo-2">
								<input type="search" placeholder="Search" class="cont-search">
							</form>
						</li>
						<li role="presentation" class="dropdown">
							<a href="#" class="dropdown-toggle filter" id="n2" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-filter"></i>
							</a>
							<ul class="dropdown-menu animation slideDownIn" id="menu1" aria-labelledby="n2">
								<li>
									<a href="#">All</a>
								</li>
								<li>
									<a href="#">Post</a>
								</li>
								<li>
									<a href="#">Q & A</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<!-- Left white Panel Start -->
					<div class="white-block mb-30 hidden-sm hidden-xs">
						<h3>Idea Zone</h3>

						<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingOne">
									<h4 class="panel-title">
										<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true"
										 aria-controls="collapseOne">
											Gain
										</a>
									</h4>
								</div>
								<div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
									<div class="panel-body">
										Anim pariatur cliche reprehenderit
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingTwo">
									<h4 class="panel-title">
										<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false"
										 aria-controls="collapseTwo">
											Earn
										</a>
									</h4>
								</div>
								<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
									<div class="panel-body">
										<ul class="acc-list">
											<li>
												<a href="#">Graphic Designing</a>
											</li>
											<li>
												<a href="#">Invester</a>
											</li>
											<li>
												<a href="#">Invester</a>
											</li>
											<li>
												<a href="#">Entreprenuer</a>
											</li>
											<li>
												<a href="#">Invester</a>
											</li>
											<li>
												<a href="#">Invester</a>
											</li>
											<li>
												<a href="#">Entreprenuer</a>
											</li>
											<li>
												<a href="#">Invester</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingThree">
									<h4 class="panel-title">
										<a class="" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
											Learn
										</a>
									</h4>
								</div>
								<div id="collapseThree" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingThree">
									<div class="panel-body">
										<ul class="acc-list">
											<li>
												<a href="#" class="active">Professional Skill</a>
											</li>
											<li>
												<a href="#">Hobby Skill</a>
											</li>
											<li>
												<a href="#">My Interests</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="mNav visible-xs visible-sm">
						<ul>
							<li>Idea Zone</li>
							<li>
								<button class="btn" type="button" id="mNav3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
									Learn
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu" aria-labelledby="mNav3">
									<li>
										<a href="#" class="active">Graphic Designing</a>
									</li>
									<li>
										<a href="#">Invester</a>
									</li>
									<li>
										<a href="#">Invester</a>
									</li>
									<li>
										<a href="#">Entreprenuer</a>
									</li>
									<li>
										<a href="#">Invester</a>
									</li>
									<li>
										<a href="#">Invester</a>
									</li>
									<li>
										<a href="#">Entreprenuer</a>
									</li>
									<li>
										<a href="#">Invester</a>
									</li>
								</ul>
							</li>

							<li>
								<button class="btn" type="button" id="mNav2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
									Earn
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu" aria-labelledby="mNav2">
									<li>
										<a href="#" class="active">Graphic Designing</a>
									</li>
									<li>
										<a href="#">Invester</a>
									</li>
									<li>
										<a href="#">Invester</a>
									</li>
									<li>
										<a href="#">Entreprenuer</a>
									</li>
									<li>
										<a href="#">Invester</a>
									</li>
									<li>
										<a href="#">Invester</a>
									</li>
									<li>
										<a href="#">Entreprenuer</a>
									</li>
									<li>
										<a href="#">Invester</a>
									</li>
								</ul>
							</li>

							<li>
								<button class="btn" type="button" id="mNav1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
									Gain
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu" aria-labelledby="mNav1">
									<li>
										<a href="#" class="active">Graphic Designing</a>
									</li>
									<li>
										<a href="#">Invester</a>
									</li>
									<li>
										<a href="#">Invester</a>
									</li>
									<li>
										<a href="#">Entreprenuer</a>
									</li>
									<li>
										<a href="#">Invester</a>
									</li>
									<li>
										<a href="#">Invester</a>
									</li>
									<li>
										<a href="#">Entreprenuer</a>
									</li>
									<li>
										<a href="#">Invester</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
					
					<div class="row mb-10 visible-sm visible-xs">
						<div class="col-md-3 col-xs-6">
							<ul class="switch-tab" role="tablist">
								<li role="presentation" class="active">
									<a href="#explore" aria-controls="explore" role="tab" data-toggle="tab">Explore</a>
								</li>
								<li role="presentation">
									<a href="#myFeed" aria-controls="myFeed" role="tab" data-toggle="tab">My Feed</a>
								</li>
							</ul>
						</div>
						<div class="col-md-4 col-xs-6 text-right search-skill">
							<ul class="nav nav-pills notify-nav" role="tablist">
								<li>
									<a href="#" class="filter notify-btn">
										<i class="fa fa-bell"></i>
									</a>
								</li>
								<li role="presentation" class="dropdown">
									<a href="#" class="dropdown-toggle filter" id="n2" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
										<i class="fa fa-filter"></i>
									</a>
									<ul class="dropdown-menu animation slideDownIn" id="menu1" aria-labelledby="n2">
										<li>
											<a href="#">All</a>
										</li>
										<li>
											<a href="#">Post</a>
										</li>
										<li>
											<a href="#">Q & A</a>
										</li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
			
					<!-- Left white Panel End -->
				</div>
				<div class="col-md-9">
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="explore">
							<div class="row">
								<div class="col-md-8">
								<div class="xs-notify visible-xs visible-sm">
									<div class="notify-content">
									<div class="panel panel-default earnPanel">
										<div class="panel-heading">Notifications</div>
										<div class="panel-body">
											<ul>
												<li class="noBG">
													<p class="title mb-0">Today</p>
													<ul class="notifications">
														<li>
															<p class="info">Congratulations! You have reached 5k points
																<span class="date">5 minutes ago</span>
															</p>
														</li>
														<li>
															<p class="info">Congratulations! You have reached 5k points
																<span class="date">5 minutes ago</span>
															</p>
														</li>
														<li>
															<p>Lorem Ipsum is simply dummy text of the printing
																<span class="date">5 minutes ago</span>
															</p>
														</li>
														<li>
															<p>Lorem Ipsum is simply dummy text of the printing
																<span class="date">5 minutes ago</span>
															</p>
														</li>
														<li>
															<p>Lorem Ipsum is simply dummy text of the printing
																<span class="date">5 minutes ago</span>
															</p>
														</li>
														<li>
															<p>Lorem Ipsum is simply dummy text of the printing
																<span class="date">5 minutes ago</span>
															</p>
														</li>
														<li>
															<p>Lorem Ipsum is simply dummy text of the printing
																<span class="date">5 minutes ago</span>
															</p>
														</li>
														<li>
															<p>Lorem Ipsum is simply dummy text of the printing
																<span class="date">5 minutes ago</span>
															</p>
														</li>
													</ul>
												</li>
												<li>
													<p>Yesterday</p>
													<ul class="notifications">
														<li>
															<p class="info">Congratulations! You have reached 5k points
																<span class="date">5 minutes ago</span>
															</p>
														</li>
														<li>
															<p class="info">Congratulations! You have reached 5k points
																<span class="date">5 minutes ago</span>
															</p>
														</li>
														<li>
															<p>Lorem Ipsum is simply dummy text of the printing
																<span class="date">5 minutes ago</span>
															</p>
														</li>
														<li>
															<p>Lorem Ipsum is simply dummy text of the printing
																<span class="date">5 minutes ago</span>
															</p>
														</li>
														<li>
															<p>Lorem Ipsum is simply dummy text of the printing
																<span class="date">5 minutes ago</span>
															</p>
														</li>
														<li>
															<p>Lorem Ipsum is simply dummy text of the printing
																<span class="date">5 minutes ago</span>
															</p>
														</li>
														<li>
															<p>Lorem Ipsum is simply dummy text of the printing
																<span class="date">5 minutes ago</span>
															</p>
														</li>
														<li>
															<p>Lorem Ipsum is simply dummy text of the printing
																<span class="date">5 minutes ago</span>
															</p>
														</li>
													</ul>
												</li>
												<li class="text-right noBG">
													<a href="#" class="link2 font16">See More</a>
												</li>
											</ul>
											<p class="text-right"></p>
										</div>
									</div>
									</div>
								</div>
									<!-- Add Post -->
									<div class="bootstrap snippet">
										<div class="row">
											<div class="col-xs-12">
												<div class="well well-sm well-social-post">
													<form>
														<ul class="list-inline" id='list_PostActions'>
															<li>
																<a href='#'>Post</a>
															</li>
															<li class='active'>
																<a href='#'>Q&A</a>
															</li>
														</ul>
														<div class="row" id="post_content">
															<div class="col-sm-1 col-xs-2">
																<img src="<?php echo base_url() ?>assets/images/user-pic.jpg" class="user-pic">
															</div>
															<div class="col-sm-9 col-xs-10">
																<div class="tag-container">
																	<div class="chip blue lighten-2">
																		<img src="https://bootdey.com/img/Content/user_1.jpg" alt="Contact Person"> John Doe
																		<i class="close fa fa-times"></i>
																	</div>
																	<div class="chip amber lighten-3">
																		<img src="<?php echo base_url() ?>assets/images/user-pic.jpg" alt="Contact Person"> Danny Moore
																		<i class="close fa fa-times"></i>
																	</div>
																	<div class="chip purple lighten-4">
																		<img src="https://bootdey.com/img/Content/user_1.jpg" alt="Contact Person"> Adam Grey
																		<i class="close fa fa-times"></i>
																	</div>
																</div>
																<textarea class="form-control" placeholder="Ask your Question..."></textarea>
															</div>
															<div class="col-sm-2 col-xs-12 text-right dropdown">
																<button class="btn btn-info tag-btn mTag-btn dropdown-toggle" data-toggle="dropdown">
																	<i class="fa fa-tags"></i> Tag</button>
																<ul class="dropdown-menu" id="tag-user">
																  <li><div class="search-box-container"><input type="text" id="search-input" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name"></div></li>
																  <li><a href="#">Ajay</a></li>
																  <li><a href="#">Krishna</a></li>
																  <li><a href="#">Prasad</a></li>
																</ul>
															</div>
														</div>
														<ul class="list-inline post-actions">
															<li>
																<label class="file-upload btn btn-info tag-btn">
																	Attachment
																	<input type="file" />
																</label>
															</li>
															<li class='pull-right'>
																<button href="#" class='btn btn-primary post-btn'>Post</a>
															</li>
														</ul>
													</form>
												</div>
											</div>
										</div>
									</div>
									<!-- Post1 -->
									<div class="row bootstrap snippet">
										<div class="col-sm-12">
											<div class="panel panel-white post panel-shadow">
												<i class="fa fa-bookmark"></i>
												<div class="post-heading">
													<div class="pull-left image">
														<img src="https://bootdey.com/img/Content/user_1.jpg" class="img-circle avatar" alt="user profile image">
													</div>
													<div class="pull-left meta">
														<h5 class="post-title">
															<a href="#">Loremipsum</a>
														</h5>
														<h6 class="text-muted">Just now - Hyderabad</h6>
													</div>
													<div class="pull-right">
														<div role="presentation" class="dropdown">
															<a href="#" class="dropdown-toggle dots" id="n2" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
																<span>...</span>
															</a>
															<ul class="dropdown-menu animation slideDownIn" id="menu1" aria-labelledby="n2">
																<li>
																	<a href="#">View</a>
																</li>
																<li>
																	<a href="#">Reply</a>
																</li>
																<li>
																	<a href="#">Delete</a>
																</li>
															</ul>
														</div>
													</div>
												</div>
												<div class="post-description">
													<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
														standard dummy text</p>
													<div>
														<button class="btn btn-info tag-btn red-tag">
															<i class="fa fa-tags"></i> Hyd</button>
														<button class="btn btn-info tag-btn">
															<i class="fa fa-tags"></i> Lorem Ipsum</button>
														<button class="btn btn-info tag-btn blue-tag">
															<i class="fa fa-tags"></i> Lorem</button>
													</div>
												</div>
												<div class="post-footer">
													<a href="#" class="stat-item">
														<i class="glyphicon glyphicon-thumbs-up"></i> Vote Up
													</a>
													<a href="#" class="stat-item">
														<i class="glyphicon glyphicon-comment"></i> Answer
													</a>
													<a href="#" class="stat-item">
														<i class="glyphicon glyphicon-share"></i> Share
													</a>
												</div>
												<div class="post-footer">
													<a href="#" class="like">
														<i class="fa fa-thumbs-up"></i> Chuck Norries
													</a>
												</div>
											</div>
										</div>
									</div>
									
									<!-- Post2 -->
									<div class="row bootstrap snippet">
										<div class="col-sm-12">
											<div class="panel panel-white post panel-shadow">
												<i class="fa fa-bookmark enable"></i>
												<div class="post-heading">
													<div class="pull-left image">
														<img src="https://bootdey.com/img/Content/user_1.jpg" class="img-circle avatar" alt="user profile image">
													</div>
													<div class="pull-left meta">
														<h5 class="post-title">
															<a href="#">Loremipsum</a>
														</h5>
														<h6 class="text-muted">Just now - Hyderabad</h6>
													</div>
													<div class="pull-right">
														<div role="presentation" class="dropdown">
															<a href="#" class="dropdown-toggle dots" id="n2" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
																<span>...</span>
															</a>
															<ul class="dropdown-menu animation slideDownIn" id="menu1" aria-labelledby="n2">
																<li>
																	<a href="#">View</a>
																</li>
																<li>
																	<a href="#">Reply</a>
																</li>
																<li>
																	<a href="#">Delete</a>
																</li>
															</ul>
														</div>
													</div>
												</div>
												<div class="post-description">
													<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
														standard dummy text</p>
													<div>
														<button class="btn btn-info tag-btn red-tag">
															<i class="fa fa-tags"></i> Hyd</button>
														<button class="btn btn-info tag-btn">
															<i class="fa fa-tags"></i> Lorem Ipsum</button>
														<button class="btn btn-info tag-btn blue-tag">
															<i class="fa fa-tags"></i> Lorem</button>
													</div>
													<img src="<?php echo base_url() ?>assets/images/post-img1.jpg" class="mt-20 img-responsive img-rounded" />
												</div>
												<div class="post-footer">
													<a href="#" class="stat-item">
														<i class="glyphicon glyphicon-thumbs-up"></i> Vote Up
													</a>
													<a href="#" class="stat-item">
														<i class="glyphicon glyphicon-comment"></i> Answer
													</a>
													<a href="#" class="stat-item">
														<i class="glyphicon glyphicon-share"></i> Share
													</a>
												</div>
												<div class="post-footer">
													<a href="#" class="like">
														<i class="fa fa-thumbs-up"></i> Chuck Norries
													</a>
												</div>
											</div>
										</div>
									</div>


								</div>
								<div class="col-md-4">
									<!-- Right Panel Start -->
									<div class="panel panel-default earnPanel hidden-xs hidden-sm">
										<div class="panel-heading">Notifications</div>
										<div class="panel-body">
											<ul>
												<li class="noBG">
													<p class="title mb-0">Today</p>
													<ul class="notifications">
														<li>
															<p class="info">Congratulations! You have reached 5k points
																<span class="date">5 minutes ago</span>
															</p>
														</li>
														<li>
															<p class="info">Congratulations! You have reached 5k points
																<span class="date">5 minutes ago</span>
															</p>
														</li>
														<li>
															<p>Lorem Ipsum is simply dummy text of the printing
																<span class="date">5 minutes ago</span>
															</p>
														</li>
														<li>
															<p>Lorem Ipsum is simply dummy text of the printing
																<span class="date">5 minutes ago</span>
															</p>
														</li>
														<li>
															<p>Lorem Ipsum is simply dummy text of the printing
																<span class="date">5 minutes ago</span>
															</p>
														</li>
														<li>
															<p>Lorem Ipsum is simply dummy text of the printing
																<span class="date">5 minutes ago</span>
															</p>
														</li>
														<li>
															<p>Lorem Ipsum is simply dummy text of the printing
																<span class="date">5 minutes ago</span>
															</p>
														</li>
														<li>
															<p>Lorem Ipsum is simply dummy text of the printing
																<span class="date">5 minutes ago</span>
															</p>
														</li>
													</ul>
												</li>
												<li>
													<p>Yesterday</p>
													<ul class="notifications">
														<li>
															<p class="info">Congratulations! You have reached 5k points
																<span class="date">5 minutes ago</span>
															</p>
														</li>
														<li>
															<p class="info">Congratulations! You have reached 5k points
																<span class="date">5 minutes ago</span>
															</p>
														</li>
														<li>
															<p>Lorem Ipsum is simply dummy text of the printing
																<span class="date">5 minutes ago</span>
															</p>
														</li>
														<li>
															<p>Lorem Ipsum is simply dummy text of the printing
																<span class="date">5 minutes ago</span>
															</p>
														</li>
														<li>
															<p>Lorem Ipsum is simply dummy text of the printing
																<span class="date">5 minutes ago</span>
															</p>
														</li>
														<li>
															<p>Lorem Ipsum is simply dummy text of the printing
																<span class="date">5 minutes ago</span>
															</p>
														</li>
														<li>
															<p>Lorem Ipsum is simply dummy text of the printing
																<span class="date">5 minutes ago</span>
															</p>
														</li>
														<li>
															<p>Lorem Ipsum is simply dummy text of the printing
																<span class="date">5 minutes ago</span>
															</p>
														</li>
													</ul>
												</li>
												<li class="text-right noBG">
													<a href="#" class="link2 font16">See More</a>
												</li>
											</ul>
											<p class="text-right"></p>
										</div>
									</div>
									<!-- Right Panel End -->
								</div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="myFeed">
							<div class="row">
								<div class="col-md-8">
								<div class="xs-notify visible-xs visible-sm">
									<a href="javascript:void()" class="filter-btn"><img src="<?php echo base_url() ?>assets/images/filter.png" alt="filter"/></a>
									<div class="notify-content">
									<div class="panel panel-default earnPanel">
										<div class="panel-heading">Notifications</div>
										<div class="panel-body">
											<ul>
												<li class="noBG">
													<p class="title mb-0">Today</p>
													<ul class="notifications">
														<li>
															<p class="info">Congratulations! You have reached 5k points
																<span class="date">5 minutes ago</span>
															</p>
														</li>
														<li>
															<p class="info">Congratulations! You have reached 5k points
																<span class="date">5 minutes ago</span>
															</p>
														</li>
														<li>
															<p>Lorem Ipsum is simply dummy text of the printing
																<span class="date">5 minutes ago</span>
															</p>
														</li>
														<li>
															<p>Lorem Ipsum is simply dummy text of the printing
																<span class="date">5 minutes ago</span>
															</p>
														</li>
														<li>
															<p>Lorem Ipsum is simply dummy text of the printing
																<span class="date">5 minutes ago</span>
															</p>
														</li>
														<li>
															<p>Lorem Ipsum is simply dummy text of the printing
																<span class="date">5 minutes ago</span>
															</p>
														</li>
														<li>
															<p>Lorem Ipsum is simply dummy text of the printing
																<span class="date">5 minutes ago</span>
															</p>
														</li>
														<li>
															<p>Lorem Ipsum is simply dummy text of the printing
																<span class="date">5 minutes ago</span>
															</p>
														</li>
													</ul>
												</li>
												<li>
													<p>Yesterday</p>
													<ul class="notifications">
														<li>
															<p class="info">Congratulations! You have reached 5k points
																<span class="date">5 minutes ago</span>
															</p>
														</li>
														<li>
															<p class="info">Congratulations! You have reached 5k points
																<span class="date">5 minutes ago</span>
															</p>
														</li>
														<li>
															<p>Lorem Ipsum is simply dummy text of the printing
																<span class="date">5 minutes ago</span>
															</p>
														</li>
														<li>
															<p>Lorem Ipsum is simply dummy text of the printing
																<span class="date">5 minutes ago</span>
															</p>
														</li>
														<li>
															<p>Lorem Ipsum is simply dummy text of the printing
																<span class="date">5 minutes ago</span>
															</p>
														</li>
														<li>
															<p>Lorem Ipsum is simply dummy text of the printing
																<span class="date">5 minutes ago</span>
															</p>
														</li>
														<li>
															<p>Lorem Ipsum is simply dummy text of the printing
																<span class="date">5 minutes ago</span>
															</p>
														</li>
														<li>
															<p>Lorem Ipsum is simply dummy text of the printing
																<span class="date">5 minutes ago</span>
															</p>
														</li>
													</ul>
												</li>
												<li class="text-right noBG">
													<a href="#" class="link2 font16">See More</a>
												</li>
											</ul>
											<p class="text-right"></p>
										</div>
									</div>
									</div>
								</div>
									<!-- Add Post -->
									<div class="bootstrap snippet">
										<div class="row">
											<div class="col-xs-12">
												<div class="well well-sm well-social-post">
													<form>
														<ul class="list-inline" id='list_PostActions'>
															<li>
																<a href='#'>Post</a>
															</li>
															<li class='active'>
																<a href='#'>Q&A</a>
															</li>
														</ul>
														<div class="row" id="post_content">
															<div class="col-sm-1 col-xs-2">
																<img src="<?php echo base_url() ?>assets/images/user-pic.jpg" class="user-pic">
															</div>
															<div class="col-sm-9 col-xs-10">
																<div class="tag-container">
																	<div class="chip blue lighten-2 waves-effect waves-effect">
																		<img src="https://bootdey.com/img/Content/user_1.jpg" alt="Contact Person"> John Doe
																		<i class="close fa fa-times"></i>
																	</div>
																	<div class="chip amber lighten-3 waves-effect waves-effect">
																		<img src="<?php echo base_url() ?>assets/images/user-pic.jpg" alt="Contact Person"> Danny Moore
																		<i class="close fa fa-times"></i>
																	</div>
																	<div class="chip purple lighten-4 waves-effect waves-effect">
																		<img src="https://bootdey.com/img/Content/user_1.jpg" alt="Contact Person"> Adam Grey
																		<i class="close fa fa-times"></i>
																	</div>
																</div>
																<textarea class="form-control" placeholder="Ask your Question..."></textarea>
															</div>
															<div class="col-sm-2 col-xs-12 text-right dropdown">
																<button class="btn btn-info tag-btn mTag-btn dropdown-toggle" data-toggle="dropdown">
																	<i class="fa fa-tags"></i> Tag</button>
																<ul class="dropdown-menu" id="tag-user">
																  <li><div class="search-box-container"><input type="text" id="search-input" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name"></div></li>
																  <li><a href="#">Ajay</a></li>
																  <li><a href="#">Krishna</a></li>
																  <li><a href="#">Prasad</a></li>
																</ul>
															</div>
														</div>
														<ul class="list-inline post-actions">
															<li>
																<label class="file-upload btn btn-info tag-btn">
																	<i class="fa fa-paperclip"></i> Attachment
																	<input type="file" />
																</label>
															</li>
															<li class='pull-right'>
																<button href="#" class='btn btn-primary post-btn'>Post</a>
															</li>
														</ul>
													</form>
												</div>
											</div>
										</div>
									</div>
									<!-- Post1 -->
									<div class="row bootstrap snippet">
										<div class="col-sm-12">
											<div class="panel panel-white post panel-shadow">
												<i class="fa fa-bookmark"></i>
												<div class="post-heading">
													<div class="pull-left image">
														<img src="https://bootdey.com/img/Content/user_1.jpg" class="img-circle avatar" alt="user profile image">
													</div>
													<div class="pull-left meta">
														<h5 class="post-title">
															<a href="#">Loremipsum</a>
														</h5>
														<h6 class="text-muted">Just now - Hyderabad</h6>
													</div>
													<div class="pull-right">
														<div role="presentation" class="dropdown">
															<a href="#" class="dropdown-toggle dots" id="n2" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
																<span>...</span>
															</a>
															<ul class="dropdown-menu animation slideDownIn" id="menu1" aria-labelledby="n2">
																<li>
																	<a href="#">View</a>
																</li>
																<li>
																	<a href="#">Reply</a>
																</li>
																<li>
																	<a href="#">Delete</a>
																</li>
															</ul>
														</div>
													</div>
												</div>
												<div class="post-description">
													<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
														standard dummy text</p>
													<div>
														<button class="btn btn-info tag-btn red-tag">
															<i class="fa fa-tags"></i> Hyd</button>
														<button class="btn btn-info tag-btn">
															<i class="fa fa-tags"></i> Lorem Ipsum</button>
														<button class="btn btn-info tag-btn blue-tag">
															<i class="fa fa-tags"></i> Lorem</button>
													</div>
												</div>
												<div class="post-footer">
													<a href="#" class="stat-item">
														<i class="glyphicon glyphicon-thumbs-up"></i> Vote Up
													</a>
													<a href="#" class="stat-item">
														<i class="glyphicon glyphicon-comment"></i> Answer
													</a>
													<a href="#" class="stat-item">
														<i class="glyphicon glyphicon-share"></i> Share
													</a>
												</div>
												<div class="post-footer">
													<a href="#" class="like">
														<i class="fa fa-thumbs-up"></i> Chuck Norries
													</a>
												</div>
											</div>
										</div>
									</div>
									
									<!-- Post2 -->
									<div class="row bootstrap snippet">
										<div class="col-sm-12">
											<div class="panel panel-white post panel-shadow">
												<i class="fa fa-bookmark enable"></i>
												<div class="post-heading">
													<div class="pull-left image">
														<img src="https://bootdey.com/img/Content/user_1.jpg" class="img-circle avatar" alt="user profile image">
													</div>
													<div class="pull-left meta">
														<h5 class="post-title">
															<a href="#">Loremipsum</a>
														</h5>
														<h6 class="text-muted">Just now - Hyderabad</h6>
													</div>
													<div class="pull-right">
														<div role="presentation" class="dropdown">
															<a href="#" class="dropdown-toggle dots" id="n2" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
																<span>...</span>
															</a>
															<ul class="dropdown-menu animation slideDownIn" id="menu1" aria-labelledby="n2">
																<li>
																	<a href="#">View</a>
																</li>
																<li>
																	<a href="#">Reply</a>
																</li>
																<li>
																	<a href="#">Delete</a>
																</li>
															</ul>
														</div>
													</div>
												</div>
												<div class="post-description">
													<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
														standard dummy text</p>
													<div>
														<button class="btn btn-info tag-btn red-tag">
															<i class="fa fa-tags"></i> Hyd</button>
														<button class="btn btn-info tag-btn">
															<i class="fa fa-tags"></i> Lorem Ipsum</button>
														<button class="btn btn-info tag-btn blue-tag">
															<i class="fa fa-tags"></i> Lorem</button>
													</div>
													<img src="<?php echo base_url() ?>assets/images/post-img1.jpg" class="mt-20 img-responsive img-rounded" />
												</div>
												<div class="post-footer">
													<a href="#" class="stat-item">
														<i class="glyphicon glyphicon-thumbs-up"></i> Vote Up
													</a>
													<a href="#" class="stat-item">
														<i class="glyphicon glyphicon-comment"></i> Answer
													</a>
													<a href="#" class="stat-item">
														<i class="glyphicon glyphicon-share"></i> Share
													</a>
												</div>
												<div class="post-footer">
													<a href="#" class="like">
														<i class="fa fa-thumbs-up"></i> Chuck Norries
													</a>
												</div>
											</div>
										</div>
									</div>


								</div>
								<div class="col-md-4">
									<!-- Right Panel Start -->
									<div class="panel panel-default earnPanel hidden-xs hidden-sm">
										<div class="panel-heading">Notifications</div>
										<div class="panel-body">
											<ul>
												<li class="noBG">
													<p class="title mb-0">Today</p>
													<ul class="notifications">
														<li>
															<p class="info">Congratulations! You have reached 5k points
																<span class="date">5 minutes ago</span>
															</p>
														</li>
														<li>
															<p class="info">Congratulations! You have reached 5k points
																<span class="date">5 minutes ago</span>
															</p>
														</li>
														<li>
															<p>Lorem Ipsum is simply dummy text of the printing
																<span class="date">5 minutes ago</span>
															</p>
														</li>
														<li>
															<p>Lorem Ipsum is simply dummy text of the printing
																<span class="date">5 minutes ago</span>
															</p>
														</li>
														<li>
															<p>Lorem Ipsum is simply dummy text of the printing
																<span class="date">5 minutes ago</span>
															</p>
														</li>
														<li>
															<p>Lorem Ipsum is simply dummy text of the printing
																<span class="date">5 minutes ago</span>
															</p>
														</li>
														<li>
															<p>Lorem Ipsum is simply dummy text of the printing
																<span class="date">5 minutes ago</span>
															</p>
														</li>
														<li>
															<p>Lorem Ipsum is simply dummy text of the printing
																<span class="date">5 minutes ago</span>
															</p>
														</li>
													</ul>
												</li>
												<li>
													<p>Yesterday</p>
													<ul class="notifications">
														<li>
															<p class="info">Congratulations! You have reached 5k points
																<span class="date">5 minutes ago</span>
															</p>
														</li>
														<li>
															<p class="info">Congratulations! You have reached 5k points
																<span class="date">5 minutes ago</span>
															</p>
														</li>
														<li>
															<p>Lorem Ipsum is simply dummy text of the printing
																<span class="date">5 minutes ago</span>
															</p>
														</li>
														<li>
															<p>Lorem Ipsum is simply dummy text of the printing
																<span class="date">5 minutes ago</span>
															</p>
														</li>
														<li>
															<p>Lorem Ipsum is simply dummy text of the printing
																<span class="date">5 minutes ago</span>
															</p>
														</li>
														<li>
															<p>Lorem Ipsum is simply dummy text of the printing
																<span class="date">5 minutes ago</span>
															</p>
														</li>
														<li>
															<p>Lorem Ipsum is simply dummy text of the printing
																<span class="date">5 minutes ago</span>
															</p>
														</li>
														<li>
															<p>Lorem Ipsum is simply dummy text of the printing
																<span class="date">5 minutes ago</span>
															</p>
														</li>
													</ul>
												</li>
												<li class="text-right noBG">
													<a href="#" class="link2 font16">See More</a>
												</li>
											</ul>
											<p class="text-right"></p>
										</div>
									</div>
									<!-- Right Panel End -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- jQuery -->
	<script>
	$('document').ready(function() {
		$('.file-upload').file_upload();
	});
	</script>
<?php $this->view('home-footer') ?>
<script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
