	<!-- Modal -->
	<div class="modal fade" id="signinModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<div class="col-md-12 col-sm-12 col-xs-12 sign-box">
						<h3>Sign In Here</h3>
						<form action="#" id="configformlog">
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label input-box">
								<img src="<?php echo base_url(); ?>assets/images/login_profile.svg" />
								<input class="mdl-textfield__input" type="email" id="username" onKeyPress="return loginSubmit(event)">
								<label class="mdl-textfield__label" for="sample3">Enter Email</label>
							</div>
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label input-box">
								<input class="mdl-textfield__input" type="password" id="upassword" onKeyPress="return loginSubmit(event)">
								<img src="<?php echo base_url(); ?>assets/images/login_password.svg" />
								<label class="mdl-textfield__label" for="sample4">Password</label>
								<span class="mdl-textfield__error">Password is not a number!</span>
								<span><a  id="showpassword">Show</a></span>
								<span><a  id="hidepassword">Hide</a></span>
								<input type="hidden" id="rurl">
							</div>
							<div id="peopleerror"></div>
						</form>
						<button id="signinajax" class="btn btn-primary">Sign In</button>
						<a class="forgot-link pull-right">Forgot Password</a>
					</div>
					<div class="line-text col-md-12 col-sm-12 col-xs-12">
						
						<p class="bg-line"><span>Not Registered? <a id="sasignupModal" class="forgot-link" data-toggle="modal" data-target="#signupModal"> Sign Up Here</a></span></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal -->
	<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<div class="col-md-12 col-sm-12 col-xs-12 sign-box signup">
						<h3>Sign Up Here</h3>
						<div id="ajsinup"></div>
						<form action="#" id="scform">
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label input-box">
								<img src="<?php echo base_url(); ?>assets/images/login_profile.svg" />
								<input class="mdl-textfield__input" type="text" id="rname" required>
								<label class="mdl-textfield__label" for="sample3">Name</label>
							</div>
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label input-box">
					<img src="<?php echo base_url(); ?>assets/images/login_email.svg" />
					<input class="mdl-textfield__input" type="text" id="remail" required>
					<label class="mdl-textfield__label" for="sample3">Email</label>
							</div>
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label input-box">
								<img src="<?php echo base_url(); ?>assets/images/login_password.svg" />
								<input class="mdl-textfield__input" type="password" id="rpassword" required>
								<label class="mdl-textfield__label" for="password">Password</label>
							</div>
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label input-box">
								<img src="<?php echo base_url(); ?>assets/images/login_mobile-number.svg" />
								<input class="mdl-textfield__input" type="text" id="rmobile">
								<label class="mdl-textfield__label" for="sample3">Mobile Number</label>
							</div>
						</form>
					<p class="terms-text">By Signing Up with VIEWHAM, you are agreeing to our <a href="<?php echo base_url('terms'); ?>" target="_blank"  class="forgot-link">Terms and  Conditions</a></span></p>
					<button id="rregister" class="btn btn-primary">Register</button>
				</div>
				<div class="line-text col-md-12 col-sm-12 col-xs-12">
					<p class="bg-line"><span>Already Registered? <a id="rsignupc" class="forgot-link" data-toggle="modal" data-target="#signinModal"> Sign In Here</a></span></p>
				</div>
			</div>
		</div>
	</div>
</div>