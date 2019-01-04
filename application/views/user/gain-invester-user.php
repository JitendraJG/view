	<?php $this->view('admin/user-header') ?>
	<section class="ideazone gain"> 
		<div class="container">
			<div class="row mb-20">
				<div class="col-md-6">
					<ol class="breadcrumb hidden-xs hidden-sm">
					  <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
					  <li class="breadcrumb-item"><a href="#">Gain</a></li>
					  <li class="breadcrumb-item active">Invester</li>
					</ol>
				</div>
				<div class="col-md-6 text-right">
					<button class="btn btn-info mb-0 mblock-btn">Post Own Business</button>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<div class="white-block mb-30 hidden-xs hidden-sm">
						<h3><a href="#">Idea Zone</a></h3>
						<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
						  <div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingOne">
							  <h4 class="panel-title">
								<a class="" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
								  Gain
								</a>
							  </h4>
							</div>
							<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
							  <div class="panel-body">
								<ul class="acc-list">
									<li><a href="#">Entreprenuer</a></li>
									<li><a href="#" class="active">Invester</a></li>
								</ul>
							  </div>
							</div>
						  </div>
						  <div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingTwo">
							  <h4 class="panel-title">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								  Earn
								</a>
							  </h4>
							</div>
							<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
							  <div class="panel-body">
								<ul class="acc-list">
									<li><a href="#" class="active">Graphic Designing</a></li>
									<li><a href="#">Invester</a></li>
									<li><a href="#">Entreprenuer</a></li>
									<li><a href="#">Invester</a></li>
									<li><a href="#">Entreprenuer</a></li>
									<li><a href="#">Invester</a></li>
								</ul>
							  </div>
							</div>
						  </div>
						  <div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingThree">
							  <h4 class="panel-title">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								  Learn
								</a>
							  </h4>
							</div>
							<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
							  <div class="panel-body">
								Anim pariatur cliche reprehenderit
							  </div>
							</div>
						  </div>
						</div>						
					</div>
					<a href="javascript:void()" class="filter-btn visible-xs visible-sm"><img src="<?php echo base_url(); ?>assets/images/filter.png" alt="filter"></a>
					<div class="filter-content grey-block mb-20">
						<h4 class="text-center">Search filters</h4>
						<form>
							<label>Role</label>
							<input type="text" class="form-control mb-5" id="search-input" onkeyup="myFunction()" placeholder="Search by Role" title="">
							<div>
								<div class="chip"><i class="close fa fa-times"></i>Role1</div>
								<div class="chip"><i class="close fa fa-times"></i>Role2</div>
							</div>
							<ul id="tag-user" class="popup-searchList">
							  <li><a href="#">Role1</a></li>
							  <li><a href="#">Role2</a></li>
							  <li><a href="#">Role3</a></li>
							  <li><a href="#">Role4</a></li>
							</ul>
							
							<label>Location</label>
							<input type="text" class="form-control mb-5" id="search-input" onkeyup="myFunction()" placeholder="Search by Location" title="">
							<div>
								<div class="chip"><i class="close fa fa-times"></i>Location1</div>
								<div class="chip"><i class="close fa fa-times"></i>Location2</div>
							</div>
							<ul id="tag-user" class="popup-searchList">
							  <li><a href="#">Location1</a></li>
							  <li><a href="#">Location2</a></li>
							  <li><a href="#">Location3</a></li>
							  <li><a href="#">Location4</a></li>
							</ul>
							
							<label>Investment
								<select class="form-control sub-dw pull-right">
									<option value="">INR</option>
								</select>
							</label>
							<div class="row">
								<div class="col-xs-6">
									<input type="text" class="form-control" placeholder="min">
								</div>
								<div class="col-xs-6">
									<input type="text" class="form-control" placeholder="max">
								</div>
							</div>
							
							<label>Share</label>
							<div class="row">
								<div class="col-xs-6">
									<input type="text" class="form-control" placeholder="min">
								</div>
								<div class="col-xs-6">
									<input type="text" class="form-control" placeholder="max">
								</div>
							</div>						
							
							<p class="mt-20">
							<button class="btn btn-info mb-0 mr-10">Clear</button>
							<button class="btn btn-primary mb-0">Apply</button>
							</p>
						</form>
					</div>
				</div>
				<div class="col-md-6">
					<div>
					  <!-- Nav tabs -->
					  <ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#allinvestbles" aria-controls="allinvestbles" role="tab" data-toggle="tab">All Investables <span class="badge">10 <i class="new">New</i></span></a></li>
						<li role="presentation"><a href="#fundingRequests" aria-controls="fundingRequests" role="tab" data-toggle="tab">Funding Requests <span class="badge blue">10</span></a></li>
					  </ul>

					  <!-- Tab panes -->
					  <div class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="allinvestbles">
							<!-- Idea Flag Block Start -->
							<div class="ideazone-content relative">
								<h3><img src="<?php echo base_url(); ?>assets/images/user-pic.jpg" class="profile-pic"> Ajay Krishna <span>12/06/2018</span>
								<span class="pull-right"><button class="btn btn-initiate" data-toggle="modal" data-target="#editInvestModal">Invest <i class="glyphicon glyphicon-pencil"></i></button> &nbsp;<button class="btn btn-initiate btn-ignore" data-toggle="modal" data-target="#ignoreModal">Ignore</button></span>
								</h3>
								
								<div class="side-ribbon">
									<span>idea</span>
								</div>								
								<h6>Idea Title</h6>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam perferendis labore nemo quis saepe nulla qui nesciunt et voluptatum sequi.</p>
								<h6>Industry</h6>
									<p>Information Technology.</p>
									<h6>Description</h6>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam perferendis labore nemo quis saepe nulla qui nesciunt et voluptatum sequi.</p>
								<div class="more-cont">
									<h6>Initiators</h6>
									<div class="row p30">
										<div class="col-sm-6">
											<div class="profile-box">
												<div class="p10">
												<div class="mb-10">
													<span>Mr Manohar</span>
													<span class="pull-right"><span class="stars" data-rating="3" data-num-stars="5"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></span></span>
												</div>
												<div class="mb-10">
													<div class="gray-text">Skill Name</div>
													<div class="dark-text">Sr. Ux Designer</div>
												</div>
												<div class="mb-10">
													<div class="gray-text">Location</div>
													<div class="dark-text">Hyderabad, Banglore</div>
												</div>
												<div class="mb-10">
													<div class="gray-text">Experience</div>
													<div class="dark-text">05 Years</div>
												</div>
												<div class="mb-10">
													<div class="gray-text">Price</div>
													<div class="dark-text">$ 450/hr</div>
												</div>
												</div>
												<div>
													<button class="btn">View Contact</button>
													<button class="btn">Shortlist</button>
												</div>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="profile-box">
												<div class="p10">
												<div class="mb-10">
													<span>Mr Manohar</span>
													<span class="pull-right"><span class="stars" data-rating="3" data-num-stars="5"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></span></span>
												</div>
												<div class="mb-10">
													<div class="gray-text">Skill Name</div>
													<div class="dark-text">Sr. Ux Designer</div>
												</div>
												<div class="mb-10">
													<div class="gray-text">Location</div>
													<div class="dark-text">Hyderabad, Banglore</div>
												</div>
												<div class="mb-10">
													<div class="gray-text">Experience</div>
													<div class="dark-text">05 Years</div>
												</div>
												<div class="mb-10">
													<div class="gray-text">Price</div>
													<div class="dark-text">$ 450/hr</div>
												</div>
												</div>
												<div>
													<button class="btn">View Contact</button>
													<button class="btn">Shortlist</button>
												</div>
											</div>
										</div>
									</div> 
									<p class="text-center"><a href="" class="link">Show all</a></p>
								</div>
								<p class="text-center"><a href="#" class="see-more">...See More</a></p>								
								<ul class="pull-right list-unstyled">
									<li><a href="#">Opinion</a></li>
									<li><a href="#">Impress</a></li>
									<li><a href="#">Share</a></li>
									<li><a href="#">Save</a></li>
									<li><a href="#" data-toggle="modal" data-target="#reportModal">Report</a></li>
								</ul>
							</div>
							<!-- Idea Flag Block End -->
							
							<!-- Business Flag Block Start -->
							<div class="ideazone-content relative">
								<h3><img src="<?php echo base_url(); ?>assets/images/user-pic.jpg" class="profile-pic"> Ajay Krishna <span>12/06/2018</span>
								<span class="pull-right"><button class="btn btn-initiate" data-toggle="modal" data-target="#editInvestModal">Invest <i class="glyphicon glyphicon-pencil"></i></button> &nbsp;<button class="btn btn-initiate btn-ignore" data-toggle="modal" data-target="#ignoreModal">Ignore</button></span>
								</h3>
								
								<div class="side-ribbon blue-ribbon">
									<span>Own Business</span>
								</div>								
								<h6>Project Description</h6>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam perferendis labore nemo quis saepe nulla qui nesciunt et voluptatum sequi.</p>
                                <h6>Industry</h6>
                                <p>Information Technology</p>
								<h6>Current Status</h6>
                                <p>Lorem ipsum</p>
								<h6>Location</h6>
                                <p>Hyderabad</p>
								<h6>View Details</h6>
								<p><b>Name:</b> Mr.Vykuntam Manuka <br>
								   <b>Mobile:</b> 09325168478 <br>
								   <b>E-mail:</b> <a href="mailto:hello@123.com" class="link">hello@123.com</a></p>
							</div>
							<!-- Business Flag Block End -->
							
							<!-- Outsource Flag Block Start -->
							<div class="ideazone-content relative">
								<h3><img src="<?php echo base_url(); ?>assets/images/user-pic.jpg" class="profile-pic"> Ajay Krishna <span>12/06/2018</span>
								<span class="pull-right"><button class="btn btn-initiate btn-ignore" data-toggle="modal" data-target="#ignoreModal">Ignore</button></span>
								</h3>
								
								<div class="side-ribbon purple-ribbon">
									<span>Request for Funding</span>
								</div>								
								<h6>Project Description</h6>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam perferendis labore nemo quis saepe nulla qui nesciunt et voluptatum sequi.</p>
                                <h6>Industry</h6>
                                <p>Information Technology</p>
								<h6>Current Status</h6>
                                <p>Lorem ipsum</p>
								<h6>Location</h6>
                                <p>Hyderabad</p>								
								<ul class="investment list-unstyled">
									<li>Approx Investment Expected <br> <span>$1000 - $2000</span></li>
									<li>Approx Share Offered <br> <span>20% - 40%</span></li>
								</ul>
								<h6>Role Expected from Investor</h6>
                                <p>Lorem ipsum</p>
								<div class="contact-details">
									<h6>Contact Details</h6>
									<p><b>Name:</b> Mr.Vykuntam Manuka <br>
									   <b>Mobile:</b> 09325168478 <br>
									   <b>E-mail:</b> <a href="mailto:hello@123.com" class="link">hello@123.com</a></p>
								</div>
							</div>
							<!-- Outsource Flag Block End -->
							<p class="text-right"><a href="#" class="link visible-xs visible-sm mb-20">See More...</a></p>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="fundingRequests">
							<div class="ideazone-content">
								<div class="row">
									<div class="col-sm-6">
										<div class="profile-box">
											<div class="p10">
											<div class="mb-10">
												<span>Mr.Vykuntam Manuka</span>
												<span class="pull-right"></span>
											</div>
											<div class="mb-10">
												<div class="gray-text">Industry</div>
												<div class="dark-text">IT- Software</div>
											</div>
											<div class="mb-10">
												<div class="gray-text">Location</div>
												<div class="dark-text">Hyderabad, Banglore</div>
											</div>
											<div class="mb-10">
												<div class="gray-text">Quote</div>
												<div class="dark-text">$10000</div>
											</div>
											<div class="mb-10">
												<div class="gray-text">Duration</div>
												<div class="dark-text">2months</div>
											</div>
											</div>
											<div>
												<button class="btn">View Contact</button>
												<button class="btn" data-toggle="modal" data-target="#fundingInvest">Invest</button>
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="profile-box">
											<div class="p10">
											<div class="mb-10">
												<span>Mr.Vykuntam Manuka</span>
												<span class="pull-right"></span>
											</div>
											<div class="mb-10">
												<div class="gray-text">Industry</div>
												<div class="dark-text">IT- Software</div>
											</div>
											<div class="mb-10">
												<div class="gray-text">Location</div>
												<div class="dark-text">Hyderabad, Banglore</div>
											</div>
											<div class="mb-10">
												<div class="gray-text">Quote</div>
												<div class="dark-text">$10000</div>
											</div>
											<div class="mb-10">
												<div class="gray-text">Duration</div>
												<div class="dark-text">2months</div>
											</div>
											</div>
											<div>
												<button class="btn">View Contact</button>
												<button class="btn" data-toggle="modal" data-target="#fundingInvest">Invest</button>
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="profile-box">
											<div class="p10">
											<div class="mb-10">
												<span>Mr.Vykuntam Manuka</span>
												<span class="pull-right"></span>
											</div>
											<div class="mb-10">
												<div class="gray-text">Industry</div>
												<div class="dark-text">IT- Software</div>
											</div>
											<div class="mb-10">
												<div class="gray-text">Location</div>
												<div class="dark-text">Hyderabad, Banglore</div>
											</div>
											<div class="mb-10">
												<div class="gray-text">Quote</div>
												<div class="dark-text">$10000</div>
											</div>
											<div class="mb-10">
												<div class="gray-text">Duration</div>
												<div class="dark-text">2months</div>
											</div>
											</div>
											<div>
												<button class="btn">View Contact</button>
												<button class="btn" data-toggle="modal" data-target="#fundingInvest">Invest</button>
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="profile-box">
											<div class="p10">
											<div class="mb-10">
												<span>Mr.Vykuntam Manuka</span>
												<span class="pull-right"></span>
											</div>
											<div class="mb-10">
												<div class="gray-text">Industry</div>
												<div class="dark-text">IT- Software</div>
											</div>
											<div class="mb-10">
												<div class="gray-text">Location</div>
												<div class="dark-text">Hyderabad, Banglore</div>
											</div>
											<div class="mb-10">
												<div class="gray-text">Quote</div>
												<div class="dark-text">$10000</div>
											</div>
											<div class="mb-10">
												<div class="gray-text">Duration</div>
												<div class="dark-text">2months</div>
											</div>
											</div>
											<div>
												<button class="btn">View Contact</button>
												<button class="btn" data-toggle="modal" data-target="#fundingInvest">Invest</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="franchize">
							<div class="ideazone-content">
								<div class="row">
									<div class="col-sm-6">
										<div class="profile-box">
											<div class="p10">
											<div class="mb-10">
												<span>Mr.Vykuntam Manuka</span>
												<span class="pull-right"></span>
											</div>
											<div class="mb-10">
												<div class="gray-text">Industry</div>
												<div class="dark-text">IT- Software</div>
											</div>
											<div class="mb-10">
												<div class="gray-text">Location</div>
												<div class="dark-text">Hyderabad, Banglore</div>
											</div>
											<div class="mb-10">
												<div class="gray-text">Quote</div>
												<div class="dark-text">$10000</div>
											</div>
											<div class="mb-10">
												<div class="gray-text">Duration</div>
												<div class="dark-text">2months</div>
											</div>
											</div>
											<div>
												<button class="btn">View Contact</button>
												<button class="btn" data-toggle="modal" data-target="#fundingInvest">Invest</button>
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="profile-box">
											<div class="p10">
											<div class="mb-10">
												<span>Mr.Vykuntam Manuka</span>
												<span class="pull-right"></span>
											</div>
											<div class="mb-10">
												<div class="gray-text">Industry</div>
												<div class="dark-text">IT- Software</div>
											</div>
											<div class="mb-10">
												<div class="gray-text">Location</div>
												<div class="dark-text">Hyderabad, Banglore</div>
											</div>
											<div class="mb-10">
												<div class="gray-text">Quote</div>
												<div class="dark-text">$10000</div>
											</div>
											<div class="mb-10">
												<div class="gray-text">Duration</div>
												<div class="dark-text">2months</div>
											</div>
											</div>
											<div>
												<button class="btn">View Contact</button>
												<button class="btn" data-toggle="modal" data-target="#franchizeInitiate">Initiate</button>
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="profile-box">
											<div class="p10">
											<div class="mb-10">
												<span>Mr.Vykuntam Manuka</span>
												<span class="pull-right"></span>
											</div>
											<div class="mb-10">
												<div class="gray-text">Industry</div>
												<div class="dark-text">IT- Software</div>
											</div>
											<div class="mb-10">
												<div class="gray-text">Location</div>
												<div class="dark-text">Hyderabad, Banglore</div>
											</div>
											<div class="mb-10">
												<div class="gray-text">Quote</div>
												<div class="dark-text">$10000</div>
											</div>
											<div class="mb-10">
												<div class="gray-text">Duration</div>
												<div class="dark-text">2months</div>
											</div>
											</div>
											<div>
												<button class="btn">View Contact</button>
												<button class="btn" data-toggle="modal" data-target="#franchizeInitiate">Initiate</button>
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="profile-box">
											<div class="p10">
											<div class="mb-10">
												<span>Mr.Vykuntam Manuka</span>
												<span class="pull-right"></span>
											</div>
											<div class="mb-10">
												<div class="gray-text">Industry</div>
												<div class="dark-text">IT- Software</div>
											</div>
											<div class="mb-10">
												<div class="gray-text">Location</div>
												<div class="dark-text">Hyderabad, Banglore</div>
											</div>
											<div class="mb-10">
												<div class="gray-text">Quote</div>
												<div class="dark-text">$10000</div>
											</div>
											<div class="mb-10">
												<div class="gray-text">Duration</div>
												<div class="dark-text">2months</div>
											</div>
											</div>
											<div>
												<button class="btn">View Contact</button>
												<button class="btn" data-toggle="modal" data-target="#franchizeInitiate">Initiate</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					  </div>
					</div>
				</div>
				<div class="col-md-3">
					<!-- Proposals Section Start -->
					<div class="panel panel-default earnPanel">
					  <div class="panel-heading">Proposals</div>
					  <div class="panel-body">
						<ul class="scroll-v-big">
							<li>
								<div class="row">
									<div class="col-md-12">
										<p><span class="title">Priyanka</span></p>
										<p>Have requirement for UIDesigner</p>
									</div>
									<div class="col-md-12 mt-10 text-right mText-left">
										<button class="btn btn-primary" data-toggle="modal" data-target="#viewContact">View Contact</button>
										<button class="btn btn-gray disabled" data-toggle="tooltip" data-placement="top" data-html="true" data-title="Your interest has been sent">Interested</button>
									</div>
								</div>
							</li>
							<li>
								<div class="row">
									<div class="col-md-12">
										<p><span class="title">Priyanka</span> <span class="date">12/06/2018</span></p>
										<p>Have requirement for UIDesigner</p>
									</div>
									<div class="col-md-12 mt-10 text-right mText-left">
										<button class="btn btn-primary" data-toggle="tooltip" data-placement="top" data-html="true" data-title="Ph: 9959645999<br />Fax: 9959645999">View Contact</button>
										<button class="btn btn-gray disabled" data-toggle="tooltip" data-placement="top" data-html="true" data-title="Your interest has been sent">Interested</button>
									</div>
								</div>
							</li>
							<li>
								<div class="row">
									<div class="col-md-12">
										<p><span class="title">Priyanka</span> <span class="date">12/06/2018</span></p>
										<p>Have requirement for UIDesigner</p>
									</div>
									<div class="col-md-12 mt-10 text-right mText-left">
										<button class="btn btn-gray disabled">View Contact</button>
										<button class="btn btn-gray disabled" data-toggle="tooltip" data-placement="top" data-html="true" data-title="Your interest has been sent">Interested</button>
									</div>
								</div>
							</li>
							<li>
								<div class="row">
									<div class="col-md-12">
										<p><span class="title">Priyanka</span> <span class="date">12/06/2018</span></p>
										<p>Have requirement for UIDesigner</p>
									</div>
									<div class="col-md-12 mt-10 text-right mText-left">
										<button class="btn btn-primary" data-toggle="tooltip" data-placement="top" data-html="true" data-title="Ph: 9959645999<br />Fax: 9959645999">View Contact</button>
										<button class="btn btn-gray disabled" data-toggle="tooltip" data-placement="top" data-html="true" data-title="Your interest has been sent">Interested</button>
									</div>
								</div>
							</li>
						</ul>
					  </div>
					</div>
					<!-- Proposals Section End -->
					<!-- Invester Section Start -->
					<div class="panel panel-default earnPanel">
					  <div class="panel-heading">Invester <a href="#" class="pull-right link">Edit</a></div>
					  <div class="panel-body">
						<ul class="noBG">
							<li>
								<h4>Industry</h4>
								<div class="row">
									<div class="col-md-6"><input type="text" class="form-control" value="ids1" /></div>
									<div class="col-md-6"><input type="text" class="form-control" value="ids2" /></div>
								</div>								
							</li>
							<li>
								<h4>Asspciation Role</h4>
								<div class="row">
									<div class="col-md-6"><input type="text" class="form-control" value="Role1" /></div>
									<div class="col-md-6"><input type="text" class="form-control" value="Role2" /></div>
								</div>								
							</li>
							<li>
								<h4>Location</h4>
								<div class="row">
									<div class="col-md-6"><input type="text" class="form-control" value="loc1" /></div>
									<div class="col-md-6"><input type="text" class="form-control" value="loc2" /></div>
								</div>								
							</li>							
							<li>
								<h4>Expertise</h4>
								<div class="row">
									<div class="col-md-6"><input type="text" class="form-control" value="Exp1" /></div>
									<div class="col-md-6"><input type="text" class="form-control" value="Exp2" /></div>
								</div>								
							</li>
							<li>
								<h4>Investment</h4>
								<div class="row">
									<div class="col-md-12"><input type="text" class="form-control" value="$200 - $2000" /></div>
								</div>								
							</li>
							<li>
								<h4>Share</h4>
								<div class="row">
									<div class="col-md-12"><input type="text" class="form-control" value="20% - 40%" /></div>
								</div>								
							</li>
						</ul>
					  </div>
					</div>
					<!-- Invester Section End -->
                    <!-- Feedback Section Start -->
                    <div class="panel panel-default earnPanel">
                        <div class="panel-heading">Feedback <span class="pull-right">
                            <span class="stars" data-rating="3" data-num-stars="5" ></span></span>
                        </div>
                        <div class="panel-body">
                            <ul class="list-group scroll-v">
                              <li class="list-group-item">
                                <div class="row earnPanel">
                                    <div class="col-xs-7">
                                        <p class="title mb-0">Priyanka</p>
                                        <p class="date mb-0">Great work done!!</p>
                                    </div>
                                    <div class="col-xs-5 text-right">
                                        <span class="stars" data-rating="3" data-num-stars="5" ></span>
                                    </div>
                                </div>
                              </li>
                              <li class="list-group-item">
                                <div class="row earnPanel">
                                    <div class="col-xs-7">
                                        <p class="title mb-0">Priyanka</p>
                                        <p class="date mb-0">Great work done!!</p>
                                    </div>
                                    <div class="col-xs-5 text-right">
                                        <span class="stars" data-rating="3" data-num-stars="5" ></span>
                                    </div>
                                </div>
                              </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Feedback Section End -->
				</div>
			</div>
		</div>
		
		<!-- Modal fundingInvest -->
		<div id="fundingInvest" class="modal fade" role="dialog">
			<div class="modal-dialog modal-sm">		
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h5 class="modal-title">Funding Invest Project</h5>
					</div>
					<div class="modal-body">
						<h6>Project Description</h6>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam perferendis labore nemo quis saepe nulla qui nesciunt et voluptatum sequi.</p>
						<h6>Industry</h6>
						<p>Information Technology</p>
						<h6>Current Status</h6>
						<p>Lorem ipsum</p>
						<h6>Location</h6>
						<p>Hitech City, Hyderabad.</p>
						<ul class="investment list-unstyled">
							<li>Approx Investment Expected <br> <span>$1000 - $2000</span></li>
							<li>Approx Share Offered <br> <span>20% - 40%</span></li>
						</ul>
						<h6>Role Expected from Investor</h6>
						<p>Lorem ipsum</p>
						<h6>View Details</h6>
						<p><b>Name:</b> Mr.Vykuntam Manuka <br />
						   <b>Mobile:</b> 09325168478 <br />
						   <b>E-mail:</b> <a href="mailto:hello@123.com" class="link">hello@123.com</a></p>
					</div>
					<div class="modal-footer fl-right">
						<button class="btn btn-initiate">Invest</button>
					</div>
				</div>		
			</div>
		</div>
		
		<!-- Modal outsoureInitiate -->
		<div id="outsoureInitiate" class="modal fade" role="dialog">
			<div class="modal-dialog modal-sm">		
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h5 class="modal-title">Out Soure Project</h5>
					</div>
					<div class="modal-body">
						<h6>Project Description</h6>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam perferendis labore nemo quis saepe nulla qui nesciunt et voluptatum sequi.</p>
						<h6>Industry</h6>
						<p>Information Technology.</p>
						<h6>Location</h6>
						<p>Hitech City, Hyderabad.</p>
						<ul class="investment list-unstyled">
							<li>Quote <br> <span>$10000</span></li>
							<li>Duration <br> <span>3months</span></li>
						</ul>
						<h6>View Details</h6>
						<p><b>Name:</b> Mr.Vykuntam Manuka <br />
						   <b>Mobile:</b> 09325168478 <br />
						   <b>E-mail:</b> <a href="mailto:hello@123.com" class="link">hello@123.com</a></p>
					</div>
					<div class="modal-footer fl-right">
						<button class="btn btn-initiate">Initiate</button>
					</div>
				</div>		
			</div>
		</div>
		
		<!-- Modal franchizeInitiate -->
		<div id="franchizeInitiate" class="modal fade" role="dialog">
			<div class="modal-dialog modal-sm">		
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h5 class="modal-title">Franchize Project</h5>
					</div>
					<div class="modal-body">
						<h6>Project Description</h6>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam perferendis labore nemo quis saepe nulla qui nesciunt et voluptatum sequi.</p>
						<h6>Industry</h6>
						<p>Information Technology.</p>
						<h6>Franchize Modal</h6>
						<p>frm001</p>
						<h6>Location</h6>
						<p>Hitech City, Hyderabad.</p>
						<ul class="investment list-unstyled">
							<li>Approx Invest <br> <span>$10000</span></li>
							<li>Returns <br> <span>$10000</span></li>
							<li>Break Even <br> <span>Lorem Ipsum</span></li>
						</ul>
						<h6>View Details</h6>
						<p><b>Name:</b> Mr.Vykuntam Manuka <br />
						   <b>Mobile:</b> 09325168478 <br />
						   <b>E-mail:</b> <a href="mailto:hello@123.com" class="link">hello@123.com</a></p>
					</div>
					<div class="modal-footer fl-right">
						<button class="btn btn-initiate">Initiate</button>
					</div>
				</div>		
			</div>
		</div>
		
		<!-- Modal ignoreModal -->
		<div id="ignoreModal" class="modal fade" role="dialog">
			<div class="modal-dialog modal-sm">		
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h5 class="modal-title">Ignore Idea</h5>
					</div>
					<div class="modal-body">
						<p>Ignoring the initiated idea will result in deletion of your proposal !</p>
					</div>
					<div class="modal-footer">
						<button class="btn btn-initiate">Ignore Completely </button>
						<button class="btn btn-initiate btn-ignore" data-toggle="modal" data-target="#shortlistModal">Moved to Saved</button>
					</div>
				</div>		
			</div>
		</div>
		<div id="shortlistModal" class="modal fade" role="dialog">
			<div class="modal-dialog modal-sm">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-body">
					<p>The Idea has been moved to saved items</p>
				</div>
			</div>
			</div>
		</div>
		<div id="reportModal" class="modal fade" role="dialog">
				<div class="modal-dialog modal-sm">
			
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h5 class="modal-title">Report Idea</h5>
					</div>
					<div class="modal-body">
						<div class="radio-grp">
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
								<input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
								<span class="mdl-radio__label">Spam</span>
							</label>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2">
								<input type="radio" id="option-2" class="mdl-radio__button" name="options" value="2">
								<span class="mdl-radio__label">Duplicate Idea</span>
							</label>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-3">
								<input type="radio" id="option-3" class="mdl-radio__button" name="options" value="3">
								<span class="mdl-radio__label">Factually Incorrect</span>
							</label>
						</div>
					</div>
					<div class="modal-footer">
						<button class="btn btn-initiate btn-ignore">Submit</button>
					</div>
				</div>
			
				</div>
			</div>
	</section>
	
	<!-- initiate Modal -->
	<div id="initiatePopup" class="modal fade" role="dialog">
		<div class="modal-dialog modal-md">		
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h5 class="modal-title">Initiate Idea</h5>
				</div>
				<div class="modal-body">
					<h5>Offer:</h5>
					<div>
						<div class="md-checkbox md-checkbox-inline">
							<input id="i1" type="checkbox">
							<label for="i1">Employee</label>
						</div>
						<div class="md-checkbox md-checkbox-inline">
							<input id="i2" type="checkbox">
							<label for="i2">Partner</label>
						</div>
					</div>
					<h5>Request:</h5>
					<div>
						<div class="md-checkbox">
							<input id="i3" type="checkbox" checked>
							<label for="i3" class="funding">Funding</label>
						</div>
						<div class="fundingContent">
							<form class="form-horizontal" action="/">
							  <div class="form-group">
								<label class="control-label col-sm-5" for="">Role Expected from Investor:</label>
								<div class="col-sm-5">
									<input type="text" class="form-control mb-5" id="search-input" onkeyup="myFunction()" placeholder="Search by Role" title="">
									<div>
										<div class="chip"><i class="close fa fa-times"></i>Role1</div>
										<div class="chip"><i class="close fa fa-times"></i>Role2</div>
									</div>
									<ul id="tag-user" class="popup-searchList">
									  <li><a href="#">Role1</a></li>
									  <li><a href="#">Role2</a></li>
									  <li><a href="#">Role3</a></li>
									  <li><a href="#">Role4</a></li>
									  <li><a href="#">Role5</a></li>
									</ul>
								</div>
							  </div>
							  <div class="form-group">
								<label class="control-label col-sm-5" for="">Prefered Location:</label>
								<div class="col-sm-5">
									<input type="text" class="form-control mb-5" id="search-input" onkeyup="myFunction()" placeholder="Search by Location" title="">
									<div>
										<div class="chip"><i class="close fa fa-times"></i>loc1</div>
										<div class="chip"><i class="close fa fa-times"></i>loc2</div>
									</div>
									<ul id="tag-user" class="popup-searchList">
									  <li><a href="#">Location1</a></li>
									  <li><a href="#">Location2</a></li>
									  <li><a href="#">Location3</a></li>
									  <li><a href="#">Location4</a></li>
									  <li><a href="#">Location5</a></li>
									</ul>
									<!--
									<select class="form-control" multiple="multiple">
										<option value="location1">Location1</option>
										<option value="location2">Location2</option>
										<option value="location3">Location3</option>
										<option value="location4">Location4</option>
										<option value="location5">Location5</option>
									</select> -->
								</div>
							  </div>
							  <div class="form-group">
								<label class="control-label col-sm-5" for="">Approx Investiment Expected:</label>
								<div class="col-sm-7">
								  <div class="row">
									<div class="col-sm-4">
										<select class="form-control pull-right">
											<option value="">INR</option>
										</select>
									</div>
									<div class="col-sm-4">
										<input type="text" class="form-control" placeholder="min">
									</div>
									<div class="col-sm-4">
										<input type="text" class="form-control" placeholder="max">
									</div>
								  </div>
								</div>
							  </div>
							  <div class="form-group">
								<label class="control-label col-sm-5" for="">Approx Share Offered:</label>
								<div class="col-sm-7">
								  <div class="row">
									<div class="col-xs-5">
										<input type="text" class="form-control" placeholder="min">
									</div>
									<div class="col-xs-1">
										<span class="percentage">%</span>
									</div>
									<div class="col-xs-5">
										<input type="text" class="form-control" placeholder="max">
									</div>
									<div class="col-xs-1">
										<span class="percentage">%</span>
									</div>
								  </div>
								</div>
							  </div>
							</form>
						</div>
						<div class="md-checkbox">
							<input id="i4" type="checkbox">
							<label for="i4">Consultant</label>
						</div>
						<div class="md-checkbox">
							<input id="i5" type="checkbox">
							<label for="i5">Mentorship</label>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button class="btn btn-initiate btn-ignore">Submit</button>
				</div>
			</div>		
		</div>
	</div>
	
	<!-- Invest Modal -->
	<div id="investModal" class="modal fade" role="dialog">
		<div class="modal-dialog modal-sm">		
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h5 class="modal-title">Invest Idea</h5>
				</div>
				<div class="modal-body">
					<form class="form-horizontal" action="/">
					  <div class="form-group">
						<label class="control-label col-sm-5" for="">Role Expected from Investor:</label>
						<div class="col-sm-5">
							<input type="text" class="form-control mb-5" id="search-input" onkeyup="myFunction()" placeholder="Search by Role" title="">
							<div>
								<div class="chip"><i class="close fa fa-times"></i>Role1</div>
								<div class="chip"><i class="close fa fa-times"></i>Role2</div>
							</div>
							<ul id="tag-user" class="popup-searchList">
							  <li><a href="#">Role1</a></li>
							  <li><a href="#">Role2</a></li>
							  <li><a href="#">Role3</a></li>
							  <li><a href="#">Role4</a></li>
							  <li><a href="#">Role5</a></li>
							</ul>
						</div>
					  </div>
					  <div class="form-group">
						<label class="control-label col-sm-5" for="">Prefered Location:</label>
						<div class="col-sm-5">
							<input type="text" class="form-control mb-5" id="search-input" onkeyup="myFunction()" placeholder="Search by Location" title="">
							<div>
								<div class="chip"><i class="close fa fa-times"></i>loc1</div>
								<div class="chip"><i class="close fa fa-times"></i>loc2</div>
							</div>
							<ul id="tag-user" class="popup-searchList">
							  <li><a href="#">Location1</a></li>
							  <li><a href="#">Location2</a></li>
							  <li><a href="#">Location3</a></li>
							  <li><a href="#">Location4</a></li>
							  <li><a href="#">Location5</a></li>
							</ul>
						</div>
					  </div>
					  <div class="form-group">
						<label class="control-label col-sm-5" for="">Approx Investiment Expected:</label>
						<div class="col-sm-7">
						  <div class="row">
							<div class="col-sm-4">
								<select class="form-control pull-right">
									<option value="">INR</option>
								</select>
							</div>
							<div class="col-sm-4">
								<input type="text" class="form-control" placeholder="min">
							</div>
							<div class="col-sm-4">
								<input type="text" class="form-control" placeholder="max">
							</div>
						  </div>
						</div>
					  </div>
					  <div class="form-group">
						<label class="control-label col-sm-5" for="">Approx Share Offered:</label>
						<div class="col-sm-7">
						  <div class="row">
							<div class="col-xs-5">
								<input type="text" class="form-control" placeholder="min">
							</div>
							<div class="col-xs-1">
								<span class="percentage">%</span>
							</div>
							<div class="col-xs-5">
								<input type="text" class="form-control" placeholder="max">
							</div>
							<div class="col-xs-1">
								<span class="percentage">%</span>
							</div>
						  </div>
						</div>
					  </div>
					</form>
				</div>
				<div class="modal-footer">
					<button class="btn btn-initiate btn-ignore">Submit</button>
				</div>
			</div>		
		</div>
	</div>
	
	<!-- Edit Initiate Modal -->
	<div id="editInitiateModal" class="modal fade" role="dialog">
		<div class="modal-dialog modal-sm">		
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h5 class="modal-title">Initiate Idea</h5>
				</div>
				<div class="modal-body">
					<form class="form-horizontal" action="/">
					  <div class="form-group">
						<label class="control-label col-sm-5" for="">Role Expected from Investor:</label>
						<div class="col-sm-5">
							<input type="text" class="form-control mb-5" id="search-input" onkeyup="myFunction()" placeholder="Search by Role" title="">
							<div>
								<div class="chip"><i class="close fa fa-times"></i>Role1</div>
								<div class="chip"><i class="close fa fa-times"></i>Role2</div>
							</div>
							<ul id="tag-user" class="popup-searchList">
							  <li><a href="#">Role1</a></li>
							  <li><a href="#">Role2</a></li>
							  <li><a href="#">Role3</a></li>
							  <li><a href="#">Role4</a></li>
							  <li><a href="#">Role5</a></li>
							</ul>
						</div>
					  </div>
					  <div class="form-group">
						<label class="control-label col-sm-5" for="">Prefered Location:</label>
						<div class="col-sm-5">
							<input type="text" class="form-control mb-5" id="search-input" onkeyup="myFunction()" placeholder="Search by Location" title="">
							<div>
								<div class="chip"><i class="close fa fa-times"></i>loc1</div>
								<div class="chip"><i class="close fa fa-times"></i>loc2</div>
							</div>
							<ul id="tag-user" class="popup-searchList">
							  <li><a href="#">Location1</a></li>
							  <li><a href="#">Location2</a></li>
							  <li><a href="#">Location3</a></li>
							  <li><a href="#">Location4</a></li>
							  <li><a href="#">Location5</a></li>
							</ul>
						</div>
					  </div>
					  <div class="form-group">
						<label class="control-label col-sm-5" for="">Approx Investiment Expected:</label>
						<div class="col-sm-7">
						  <div class="row">
							<div class="col-sm-4">
								<select class="form-control pull-right">
									<option value="">INR</option>
								</select>
							</div>
							<div class="col-sm-4">
								<input type="text" class="form-control" placeholder="" value="1000">
							</div>
							<div class="col-sm-4">
								<input type="text" class="form-control" placeholder="" value="1500">
							</div>
						  </div>
						</div>
					  </div>
					  <div class="form-group">
						<label class="control-label col-sm-5" for="">Approx Share Offered:</label>
						<div class="col-sm-7">
						  <div class="row">
							<div class="col-xs-5">
								<input type="text" class="form-control" placeholder="min" value="50">
							</div>
							<div class="col-xs-1">
								<span class="percentage">%</span>
							</div>
							<div class="col-xs-5">
								<input type="text" class="form-control" placeholder="max" value="60">
							</div>
							<div class="col-xs-1">
								<span class="percentage">%</span>
							</div>
						  </div>
						</div>
					  </div>
					</form>
				</div>
				<div class="modal-footer">
					<button class="btn btn-initiate btn-ignore">Submit</button>
				</div>
			</div>		
		</div>
	</div>
	
	<!-- Edit Invest Modal -->
	<div id="editInvestModal" class="modal fade" role="dialog">
		<div class="modal-dialog modal-sm">		
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h5 class="modal-title">Invest Idea</h5>
				</div>
				<div class="modal-body">
					<form class="form-horizontal" action="/">
					  <div class="form-group">
						<label class="control-label col-sm-5" for="">Role Expected from Investor:</label>
						<div class="col-sm-5">
							<input type="text" class="form-control mb-5" id="search-input" onkeyup="myFunction()" placeholder="Search by Role" title="">
							<div>
								<div class="chip"><i class="close fa fa-times"></i>Role1</div>
								<div class="chip"><i class="close fa fa-times"></i>Role2</div>
							</div>
							<ul id="tag-user" class="popup-searchList">
							  <li><a href="#">Role1</a></li>
							  <li><a href="#">Role2</a></li>
							  <li><a href="#">Role3</a></li>
							  <li><a href="#">Role4</a></li>
							  <li><a href="#">Role5</a></li>
							</ul>
						</div>
					  </div>
					  <div class="form-group">
						<label class="control-label col-sm-5" for="">Prefered Location:</label>
						<div class="col-sm-5">
							<input type="text" class="form-control mb-5" id="search-input" onkeyup="myFunction()" placeholder="Search by Location" title="">
							<div>
								<div class="chip"><i class="close fa fa-times"></i>loc1</div>
								<div class="chip"><i class="close fa fa-times"></i>loc2</div>
							</div>
							<ul id="tag-user" class="popup-searchList">
							  <li><a href="#">Location1</a></li>
							  <li><a href="#">Location2</a></li>
							  <li><a href="#">Location3</a></li>
							  <li><a href="#">Location4</a></li>
							  <li><a href="#">Location5</a></li>
							</ul>
						</div>
					  </div>
					  <div class="form-group">
						<label class="control-label col-sm-5" for="">Approx Investiment Expected:</label>
						<div class="col-sm-7">
						  <div class="row">
							<div class="col-sm-4">
								<select class="form-control pull-right">
									<option value="">INR</option>
								</select>
							</div>
							<div class="col-sm-4">
								<input type="text" class="form-control" placeholder="" value="1000">
							</div>
							<div class="col-sm-4">
								<input type="text" class="form-control" placeholder="" value="1500">
							</div>
						  </div>
						</div>
					  </div>
					  <div class="form-group">
						<label class="control-label col-sm-5" for="">Approx Share Offered:</label>
						<div class="col-sm-7">
						  <div class="row">
							<div class="col-xs-5">
								<input type="text" class="form-control" placeholder="min" value="50">
							</div>
							<div class="col-xs-1">
								<span class="percentage">%</span>
							</div>
							<div class="col-xs-5">
								<input type="text" class="form-control" placeholder="max" value="60">
							</div>
							<div class="col-xs-1">
								<span class="percentage">%</span>
							</div>
						  </div>
						</div>
					  </div>
					</form>
				</div>
				<div class="modal-footer">
					<button class="btn btn-initiate btn-ignore">Submit</button>
				</div>
			</div>		
		</div>
	</div>
	   <!-- View Contact Modal --> 
	<div id="viewContact" class="modal fade" role="dialog">
		<div class="modal-dialog modal-sm">		
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">×</button>
					<h5 class="modal-title">View Contat Details</h5>
				</div>
				<div class="modal-body">
					<h6>Contact Price: <span class="coins"><i class="fa fa-coins"></i>50 Coins</span></h6>
					<hr class="divider" />
					<p class="text-right">
						<button class="btn btn-initiate">Proceed</button>
					</p>
					<div id="contactDetails">
						<h6>Contact Details:</h6>
						<p><b>Name:</b> Mr.Vykuntam Manuka <br />
						   <b>Mobile:</b> 09325168478 <br />
						   <b>E-mail:</b> <a href="mailto:hello@123.com" class="link">hello@123.com</a></p>
					</div>
					<div id="addCoins">
						<h6>Add Coins:</h6>
						<p>You need: <span class="coins">50 coins</span> <br />
						   Available Coins: <span class="coins">20 Coins</span><br />							
						   Continue to: <span class="coins">30 Coins</span></p>
						<hr class="divider" />
						<p class="text-right">
							<button class="btn btn-initiate">Add Coins</button>
						</p>
					</div>
				</div>
				<!--
				<div class="modal-footer fl-right">
					<button class="btn btn-initiate">Initiate</button>
				</div> -->
			</div>		
		</div>
	</div>
	<!-- View Contact Modal -->

		<?php $this->view('home-footer') ?>
		<script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
						