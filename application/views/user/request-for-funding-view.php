<?php $this->view('admin/user-header') ?>

	<section class="ideazone">
		<div class="container">
			<div class="row mb-20">
				<div class="col-md-6">
					<h4 class="mt-0 mb-0">Request for Funding</h4>
				</div>
				<div class="col-md-6 text-right">
					<button class="btn btn-info mb-0 mblock-btn">Request Funding</button>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="ideazone-content form-box p-0">						
						<div class="content p-lr-5">
							<div class="row">
								<div class="col-md-6">
									<h6 class="mt-0">Industry</h6>
									<p>Software</p>
									<h6>Project Description</h6>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam perferendis labore nemo quis saepe nulla qui nesciunt et voluptatum sequi, dolore provident quo veritatis iste eos. Saepe molestias sed tempore.Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
									<h6>Current Stage</h6>
									<p>Idea Stage</p>									
									<h6>Location</h6>
									<p>Hyderabad</p>
                                    <h6>Approx Investment Expected</h6>
                                    <ul class="inline-list p-0">
                                      <li class="clearfix">INR.200000 - INR.500000</li>
                                    </ul>
                                    <h6>Approx Share Offered</h6>
                                    <ul class="inline-list p-0">
                                      <li class="clearfix">30% - 50%</li>
                                    </ul>    
                                    <h6>Role Expected from Investor</h6>
									<p>As a sleeping partner</p>									
								</div>
								<div class="col-md-5 col-md-offset-1">
									<div class="panel panel-default earnPanel">
									  <div class="panel-heading">Responces</div>
									  <div class="panel-body">
										<ul>
											<li>
												<p class="title">Ajay has shown interest <button class="btn btn-primary pull-right">View Contact</button></p>
											</li>
											<li>
												<p class="title">kishna has viewed contact <button class="btn btn-primary pull-right">View Contact</button></p>
											</li>
											<li>
												<p class="title">Ajay has shown interest <button class="btn btn-primary pull-right">View Contact</button></p>
											</li>
											<li>
												<p class="title">kishna has viewed contact <button class="btn btn-primary pull-right">View Contact</button></p>
											</li>
											<li>
												<p class="title">Ajay has shown interest <button class="btn btn-primary pull-right">View Contact</button></p>
											</li>
                                            <li>
												<p class="title">Ajay has shown interest <button class="btn btn-primary pull-right">View Contact</button></p>
											</li>
											<li>
												<p class="title">kishna has viewed contact <button class="btn btn-primary pull-right">View Contact</button></p>
											</li>
											<li>
												<p class="title">Ajay has shown interest <button class="btn btn-primary pull-right">View Contact</button></p>
											</li>
											<li>
												<p class="title">kishna has viewed contact <button class="btn btn-primary pull-right">View Contact</button></p>
											</li>
											<li>
												<p class="title">Ajay has shown interest <button class="btn btn-primary pull-right">View Contact</button></p>
											</li>
                                            <li>
												<p class="title">Ajay has shown interest <button class="btn btn-primary pull-right">View Contact</button></p>
											</li>
										</ul>
									  </div>
									</div>
									<p class="text-right"><a href="#" class="link mb-20">See More...</a></p>
								</div>
							</div>
							
							
							
							<div class="blue-box2 clearfix" id="payment-info">
								<h3>Payment Information</h3>
								<div class="row">
									<div class="col-md-offset-3 col-md-8">
										<p><input type="text" class="form-control text-center" value="100" /> <span class="text-style1">Coins for "<b>10</b>" Days</span></p>
										<p class="clear text-style1">To display post: "<b>10</b>" Coins per day</span></p>										
									</div>
									<hr class="divider clearfix" />
									<p class="text-right">
										<button class="btn btn-primary sub mb-0 mr-10">Done</button>
									</p>
								</div>
							</div>
						</div>
					</div>
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
	
<!-- Theme JavaScript -->
<?php $this->view('home-footer') ?>
<script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
