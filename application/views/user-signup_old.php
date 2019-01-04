<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>. . : : Sign Up : : . .</title>
		<!-- Bootstrap Core CSS -->
		<link href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/jquery.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
		<!-- Custom Fonts -->
		<link href="<?php echo base_url(); ?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<!-- Plugin CSS -->
		<link href="<?php echo base_url(); ?>assets/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
		<!-- Theme CSS -->
		<link href="<?php echo base_url(); ?>assets/css/creative.min.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet">
		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
	</head>
	<body>
		<div class="container-fluid">
			<div class="row intro">
				<div class="col-md-6 col-sm-12 intro-left">
					<h2>Use Viewham Power <br>to Empower your Income</h2>
					<hr>
				<a href="<?php echo base_url(); ?>">	<img src="<?php echo base_url(); ?>assets/images/logo.svg" class="logo"/></a>
				</div>
				<div class="col-md-6 col-sm-12 intro-right">
					
					<div class="col-md-8 col-sm-12 col-xs-12 sign-box signup">
						<h3>Sign Up Here</h3>
						<?php $msgg = $this->session->flashdata('msg'); 
						if($msgg){	?>
						<p class="bg-line"><?php echo $msgg; ?></p><?php } ?>
						<form action="" method="post">
						<input type="text" id="name" name="name" class="form-control" placeholder="Name" required>
						<input type="text" class="form-control" id="email" name="email" placeholder="Email" required>	
						<input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
						<input type="text" class="form-control" id="phone" name="phone" placeholder="Mobile Number">	
					<p class="terms-text">By Signing Up with VIEWHAM, you are agreeing to our <a class="forgot-link">Terms and  Conditions</a></span></p>
					<button type="submit" class="btn btn-primary">Register</button>
				</form></div>
				<div class="line-text col-md-8 col-sm-12 col-xs-12">
				
					<p class="bg-line"><span>Already Registered? <a href="<?php echo base_url(); ?>User/SignIn" class="forgot-link"> Sign In Here</a></span></p>
				</div>
			</div>
		</div>
	</div>
	<script src="<?php echo base_url(); ?>assets/js/creative.min.js"></script>		
</body>	
</html>
