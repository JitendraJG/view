<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>. . : : Viewham : : . .</title>
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
		<section id="topbar">
			<div class="container">
				<div class="row">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header col-md-6">
						<a class="page-scroll" href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/images/logo.svg" class="logo"/></a>
						<div class="mobile-menu col-md-6">
								<a href="#" class="bars"><i class="fa fa-bars"></i></a>
								<a href="#" class="signup"><img src="<?php echo base_url(); ?>assets/images/search.svg"> </a>
							 </div>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="signup-nav knowmore pull-right col-md-6">
						<div class="col-md-6 col-lg-7 col-sm-12">
						<div class="search-box ">
							<div class="input-box">
							<input type="text" class="form-control" placeholder="Search by Skill Name">
							</div>
							<div class="mag-box">
							<img src="<?php echo base_url(); ?>assets/images/search.svg">
							</div>
						</div>
						</div>
						<div class="side-menu pull-right col-md-6 col-lg-5 col-sm-12">
				<div class="row">
				<?php if($this->session->userdata('user')){?>
				<a href="<?php echo base_url(); ?>User/Logout" class="">Logout </a>
				<?php }else{?>
				
				<a href="<?php echo base_url(); ?>User/SignUp" class="">Sign Up </a>
				<a href="<?php echo base_url(); ?>User/SignIn" class="">Sign In</a> 
								<?php }?>
				<a href="#" class="bars"><i class="fa fa-bars"></i></a>
			</div>
						</div>
			</div>
			</div>
			</div>
		</div>
	</section>
	
	<section id="title-bar" class="static">
		<div class="container">
				<div class="header-content">
					<div class="header-content-inner">
						<h2>User Dashboard</h2>
						<hr>
					</div>
			</div>
		</div>
	</section>


	<section class="knowmore-box"> 
			<div class="container static">
				<div class="col-md-12 white-box text-center">
							<h3>Thank you!! User Name for signin, We appreciate your enthusiasm. We will come back to you with full version very soon.
							</h3>
							
					 <br>
<?php 
echo "Id: " . $this->session->userdata('user')."<br>";
echo "User name: " . $this->session->userdata('username')."<br>";
echo "Email: " .$this->session->userdata('useremail');

?>	
				</div>
				
				
			</div>
		</section>	
	
		<?php $this->view('home-footer') ?>