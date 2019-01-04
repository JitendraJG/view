<?php $this->view('admin/user-header') ?>

	<section class="ideazone">
		<div class="container">
			<div class="row mb-20">
				<div class="col-md-6">
					<h4 class="mt-0 mb-0">Recognition</h4>
				</div>
				<div class="col-md-6">
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="ideazone-content form-box">						
						<div class="row mt-20">
							  <!-- left column -->
							  <div class="col-md-8 col-md-offset-2">
								<h2>Recognition</h2>
								<div class="alert alert-success"><b>Congratulations!!</b> Your "UI Designer" profile has been recognized as best for 06-2018 in Hyderabad/India</div>
								<div>
								  <img src="<?php echo base_url();?>assets/images/user-pic.jpg" class="avatar img-circle" alt="avatar" />
								  <textarea cols="" rows="3" class="form-control mt-10 mb-10" placeholder="Write Message..."></textarea>
								  <div class="radio-grp auto-width">
									<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option1">
										<input type="radio" id="option1" class="mdl-radio__button" name="options" value="1" checked>
										<span class="mdl-radio__label">Thanks to viewham</span>
									</label>
									<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option2">
										<input type="radio" id="option2" class="mdl-radio__button" name="options" value="2">
										<span class="mdl-radio__label">I am Happy</span>
									</label>
								</div>
								<button class="btn btn-primary sub mt-20">Submit & Share</button>
								</div>
							  </div>
							  <br />
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
	
<?php $this->view('home-footer') ?>
<script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
