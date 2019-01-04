	<?php $this->view('admin/user-header') ?>

	
	<section class="ideazone">
		<div class="container">
			<div class="row mb-20">
				<div class="col-md-6">
					<h4 class="mt-0 mb-0">Investor Profiles</h4>
				</div>
				<div class="col-md-6 text-right">
					<button class="btn btn-info mb-0 mblock-btn">Investor</button>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<a href="javascript:void()" class="filter-btn visible-xs visible-sm"><img src="images/filter.png" alt="filter"/></a>
					<div class="filter-content grey-block mb-20">
						<h4 class="text-center">Search filters</h4>
						<form>
							<label>Industry</label>
							<input type="text" class="form-control mb-5" id="search-input" onkeyup="myFunction()" placeholder="Search by Industry" title="" />
							<div>
								<div class="chip"><i class="close fa fa-times"></i>Industry1</div>
								<div class="chip"><i class="close fa fa-times"></i>Industry2</div>
							</div>
							<ul id="tag-user" class="popup-searchList">
							  <li><a href="#">Industry1</a></li>
							  <li><a href="#">Industry2</a></li>
							  <li><a href="#">Industry3</a></li>
							  <li><a href="#">Industry4</a></li>
							</ul>
							
							<label>Investment
								<select class="form-control sub-dw pull-right">
									<option value="">INR</option>
								</select>
							</label>
							<div class="row">
								<div class="col-xs-6">
									<input type="text" class="form-control" placeholder="min" />
								</div>
								<div class="col-xs-6">
									<input type="text" class="form-control" placeholder="max" />
								</div>
							</div>
							
							<label>Returns
								<select class="form-control sub-dw pull-right">
									<option value="">INR</option>
								</select>
								<select class="form-control sub-dw pull-right">
									<option value="">Monthly</option>
								</select>
							</label>
							<div class="row">
								<div class="col-xs-6">
									<input type="text" class="form-control" placeholder="min" />
								</div>
								<div class="col-xs-6">
									<input type="text" class="form-control" placeholder="max" />
								</div>
							</div>
							
							<label>Break-Even
								<select class="form-control sub-dw pull-right">
									<option value="">Monthly</option>
								</select>
							</label>
							<div class="row">
								<div class="col-xs-6">
									<input type="text" class="form-control" placeholder="min" />
								</div>
								<div class="col-xs-6">
									<input type="text" class="form-control" placeholder="max" />
								</div>
							</div>
							
							<p class="mt-20">
							<button class="btn btn-info mb-0 mr-10">Clear</button>
							<button class="btn btn-primary mb-0">Apply</button>
							</p>
						</form>
					</div>
				</div>
				<div class="col-md-9">
					<div class="ideazone-content">
						<div class="row">
							<div class="col-sm-6 col-md-4">
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
							<div class="col-sm-6 col-md-4">
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
							<div class="col-sm-6 col-md-4">
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
							<div class="col-sm-6 col-md-4">
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
							<div class="col-sm-6 col-md-4">
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
							<div class="col-sm-6 col-md-4">
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
					</div>
				</div>
			</div>
		</div>
	</section>
	
				
<footer>
	<div class="container">
		<div class="row">
			<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
					<h3>Resources</h3>
					<a href="#">Blog</a>
					<a href="#">Faqs</a>
					<a href="#">Quick Links</a>
					<a href="#">Site Map</a>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
					<h3>Company</h3>
					<a href="#">Who we are</a>
					<a href="#">What we do</a>
				<a href="#">How it works</a>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
					<h3>Reach Us</h3>
					<a href="#">Contact Us</a>
					<a href="#">Careers</a>
				</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 pull-right">
					<div class="social-profiles">
						<h3>Connect</h3>
						<div class="rectangle">
							<a title="google" href="#"><img src="images/google.svg"/></a>
							<a title="facebook" href="#"><img src="images/facebook.svg"/></a>
							<a title="linkedin" href="#"><img src="images/linkedin.svg"/></a>
							<a title="twitter" href="#"><img src="images/twitter.svg"/></a>
							<a title="instagram" href="#"><img src="images/instagram.svg"/></a>
							<a title="youtube" href="#"><img src="images/youtube.svg"/></a>
							<div class="clearfix"></div>
						</div>
					</div>
			</div>
		</div>
	</div>
</footer>	
<section id="footer-btm">
<div class="container copyright-bar">
<div class="row">
<div class="col-md-6 text-left">
<img src="images/logo.svg" class="ftr-logo"/>
</div>
<div class="col-md-6 text-right">
<div class="copyright"><a href="#" class="link">Terms & Conditions </a> | © Workship Network Pvt. Ltd.</div>
</div>
</div>	
</div>
</section>	
<!-- jQuery -->

<!-- Signin Modal -->
<div id="signin" class="modal fade" role="dialog">
	<div class="modal-dialog modal-md">		
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h5 class="modal-title">Signin</h5>
			</div>
			<div class="modal-body sign-box">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<h3>Signin Here</h3>
							<form action="#">
						  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label input-box">
						  <img src="images/login_profile.svg" />
							<input class="mdl-textfield__input" type="text" id="sample3">
							<label class="mdl-textfield__label" for="sample3">Enter User Name</label>
						  </div>
						   <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label input-box">
							<input class="mdl-textfield__input" type="password" pattern="-?[0-9]*(\.[0-9]+)?" id="password">
							<img src="images/login_password.svg" />
							<label class="mdl-textfield__label" for="sample4">Password</label>
							<span><a href="" id="showpassword">Show</a></span>
							<span class="mdl-textfield__error">Password is not a number!</span>
						  </div>
						 </form>
							<a class="link pull-right" data-toggle="modal" data-target="#forgotModal">Forgot Password</a>
						</div>
					</div>
			</div>
			<div class="modal-footer">
				<button class="btn btn-initiate btn-ignore">Signin</button>
				<button class="btn btn-initiate btn-ignore" data-toggle="modal" data-target="#signup">Register</button>
			</div>
		</div>		
	</div>
</div>

<!-- Signup Modal -->
<div id="signup" class="modal fade" role="dialog">
	<div class="modal-dialog modal-md">		
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h5 class="modal-title">Signup</h5>
			</div>
			<div class="modal-body sign-box">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<h3>Signup Here</h3>
							<form action="#">
								 <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label input-box">
								  <img src="images/login_profile.svg" />
									<input class="mdl-textfield__input" type="text" id="sample3">
									<label class="mdl-textfield__label" for="sample3">Name</label>
								  </div>
								   <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label input-box">
								  <img src="images/login_email.svg" />
									<input class="mdl-textfield__input" type="text" id="sample3">
									<label class="mdl-textfield__label" for="sample3">Email</label>
								  </div>
								   <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label input-box">
								  <img src="images/login_password.svg" />
									<input class="mdl-textfield__input" type="text" id="sample3">
									<label class="mdl-textfield__label" for="sample3">Password</label>
								  </div>
								   <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label input-box">
								  <img src="images/login_mobile-number.svg" />
									<input class="mdl-textfield__input" type="text" id="sample3">
									<label class="mdl-textfield__label" for="sample3">Mobile Number</label>
								  </div>
							</form>
							<p class="terms-text">By Signing Up with VIEWHAM, you are agreeing to our <a class="forgot-link">Terms and  Conditions</a></span></p>
						</div>
					</div>
			</div>
			<div class="modal-footer">
				<button class="btn btn-initiate btn-ignore">Register</button>
			</div>
		</div>		
	</div>
</div>


<!-- Forgot Modal -->
<div class="modal fade" id="forgotModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<div class="col-md-12 col-sm-12 col-xs-12 sign-box otp-box">
				<h3>Forgot Password</h3>
					<div class="input-box">
						<label>Mobile:</label><input type="text" class="form-control" placeholder="xxxxxx4822" disabled><a href="#" class="link">Get OTP</a>
					</div>
					<div class="input-box">
						<label>OTP:</label><input type="text" class="form-control" placeholder="">
					</div>
					<div class="input-box text-center">
						<a class="forgot-link">Resend OTP</a>
						<button class="btn btn-primary">Done</button>
					</div>
				</div>
			<div class="line-text col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
				<p class="bg-line"><span>or</span></p>
			</div>
				<div class="col-md-12 col-sm-12 col-xs-12 sign-box otp-box">
					<div class="input-box">
						<label>Email:</label><input type="text" class="form-control" placeholder="xxxxxx@gxxx.com" disabled><a href="#" class="link">Get OTP</a>
					</div>
					<div class="input-box">
						<label>OTP:</label><input type="text" class="form-control " placeholder="">
					</div>
					<div class="input-box text-center">
						<!-- <a class="forgot-link">Resend OTP</a> -->
						<button class="btn btn-primary">Done</button>
					</div>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12 sign-box otp-box" style="display:none">
					<div class="input-box">
						<label class="big">New Password:</label><input type="text" class="form-control"  >
					</div>
					<div class="input-box">
						<label class="big">Confirm Password:</label><input type="text" class="form-control" >
					</div>
					<div class="input-box text-center">
						<!-- <a class="forgot-link">Resend OTP</a> -->
						<button class="btn btn-primary">Done</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	
<?php $this->view('home-footer') ?>
<script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
