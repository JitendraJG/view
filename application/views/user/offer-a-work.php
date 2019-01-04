<?php $this->view('admin/user-header') ?>
	<section class="ideazone">
		<div class="container">
			<div class="row mb-20">
				<div class="col-md-6">
					<h4 class="mt-0 mb-0">Offer a Work</h4>
				</div>
				<div class="col-md-6 text-right">
					<a href="#" class="link mt-10 pull-right">View History</a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="ideazone-content form-box">						
						<div class="content">
							<label>Skill Type <sup class="red">*</sup></label>
							<select class="form-control mb-30">
								<option>Ui Designer</option>
								<option>UI Developer</option>
								<option>.Net Developer</option>
							</select>
							<label>Experience <sup class="red">*</sup></label>
							<select class="form-control mb-30">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
							</select>
							<label>Work Type <sup class="red">*</sup></label>
							<select class="form-control mb-20">
								<option>Design</option>
								<option>Development</option>
								<option>Testing</option>
							</select>
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label input-box">
								<textarea class="mdl-textfield__input form-control" rows="4" type="text" id="txarea1"></textarea>
								<label class="mdl-textfield__label" for="txarea1">Job Description <sup class="red">*</sup></label>
							</div>						
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label input-box">
								<input class="mdl-textfield__input" type="text" id="loc1">
								<label class="mdl-textfield__label" for="loc1">Location <sup class="red">*</sup></label>
							</div>
							<label class="mt-20">Salary <sup class="red">*</sup></label>
							<div class="grey-form-box">
								<div class="day-col">
									<select class="form-control medium">
										<option>Currency</option>
										<option>Currency</option>
										<option>Currency</option>
									</select>
									<select class="form-control medium">
										<option>Daily</option>
										<option>Monthly</option>
										<option>Yearly</option>
									</select>
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label input-box w-120">
										<input class="mdl-textfield__input" type="text" id="min1">
										<label class="mdl-textfield__label" for="min1">Min</label>
									</div><span>-</span>
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label input-box w-120">
										<input class="mdl-textfield__input" type="text" id="max1">
										<label class="mdl-textfield__label" for="max1">Max</label>
									</div>									
								</div>
							</div>
							<button class="btn btn-primary sub pull-right sumbit-btn">Submit</button>
							
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
<?php $this->view('home-footer') ?>
<script src="<?php echo base_url(); ?>assets/js/custom.js"></script>