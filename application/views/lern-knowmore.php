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
					<a href="<?php echo base_url(); ?>User/SignUp" class="">Sign Up </a>
					<a href="<?php echo base_url(); ?>User/SignIn" class="">Sign In</a> 		<a href="#" class="bars"><i class="fa fa-bars"></i></a>
							</div>	
						</div>
			</div>
			</div>
			</div>
		</div>
	</section>
		<?php $segm = $this->uri->segment(2);
		if($segm == "Idea_zone" ){ $aclass = "active"; }else{ $aclass=""; }
		if($segm == "Gain" ){ $bclass = "active"; }else{ $bclass=""; }
		if($segm == "Earn" ){ $cclass = "active"; }else{ $cclass=""; }
		if($segm == "Learn" ){ $dclass = "active"; }else{ $dclass=""; }
	?>
	<nav class="nav-bar">
		<div class="container">
			<a href="<?php echo base_url(); ?>Home/Idea_zone" class="<?php echo $aclass; ?>">Idea Zone</a>
			<a href="<?php echo base_url(); ?>Home/Gain" class="<?php echo $bclass; ?>">Gain</a>
			<a href="<?php echo base_url(); ?>Home/Earn" class="<?php echo $cclass; ?>">Earn</a>
			<a href="<?php echo base_url(); ?>Home/Learn" class="<?php echo $dclass; ?>">Learn</a>
			</div>
	</nav>
	<section id="title-bar">
		<div class="container">
			<div class="">
				<div class="header-content">
					<div class="header-content-inner">
						<h2>LEARN</h2>
						<hr>
					<h3>LEARN to master your skills</h3>
					</div>
					<div class="btn-group col-md-6 col-md-offset-3">
    <button type="button" class="btn btn-primary">Want to share!</button>
    <button type="button" class="btn btn-primary">Question in mind?</button>
  </div>
					
				</div>
			</div>
		</div>
	</section>
	<section class="knowmore-box"> 
		<div class="container">
			<div class="col-md-12 grey-box">
				<div class="col-md-3 col-sm-6 col-xs-6 pd-0">
					<div class="box">
						<div class="icon"><img src="<?php echo base_url(); ?>assets/images/CreateProfile.svg"></div>
						<div class="title">Select Skills</div>
						<div class="desc">From Idea Zone</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6 pd-0">
						<div class="box">
							<div class="icon"><img src="<?php echo base_url(); ?>assets/images/Shareyourknowledge.svg"></div>
							<div class="title">Share your knowledge</div>
							<div class="desc">With Proper Vision</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6 pd-0">
							<div class="box">
								<div class="icon"><img src="<?php echo base_url(); ?>assets/images/AskyourQuestions.svg"></div>
								<div class="title">Ask your Questions</div>
								<div class="desc">From Human & Financial Resources</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6 pd-0">
								<div class="box">
									<div class="icon"><img src="<?php echo base_url(); ?>assets/images/Learnfromeachother.svg"></div>
									<div class="title">Learn from each other</div>
									<div class="desc">With Like Minded People</div>
								</div>
							</div>
			</div>											
		</div>
	</section>	
	<section class="knowmore-box"> 
			<div class="container">
				<div class="">
					<div class="col-md-12 white-box">
							<h2>Introducing 'Learn'</h2>
							<hr>
							<p>Learning is one on of the foremost step any person must follow to grow and be successful. Viewham provides you with just that! </p>
<p>Viewham offers you a platform to share knowledge. You may be someone with a lot of skills, both professional and personal. You might want to know more about those skills, find updates on them and might even have certain questions related to them. Well, Viewham is the one place you must look for! 
							</p>
				</div>											
				</div>
			</div>
		</section>	
		<section class="knowmore-box"> 
				<div class="container">
					<div class="">
						<div class="col-md-12 grey-box">
								<h2>What does ‘Learn’ do?</h2>
								<hr>
								<p>The platform is designed to organize information and data you need at your disposal in a very friendly manner on a timeline basis.</p><p>
Viewham allows you to kick off by helping you shortlist your skills from a wide range of professional and personal skill options available at our database. </p><p>
Now that you have a list of skills selected, you can choose to post a random question or choose to answer one in case you wish to learn more about it. </p><p>
Viewham uniquely tracks your activity on the sight and sends you notifications and updates on your preferences. </p><p>
By doing this, you would learn and understand new ways, modern techniques, trending matters in the fields you are interested in. This gives you a great opportunity to analyze different perspectives and understand better.</p><p>
The knowledge you choose to learn in this section, will purely be based on the skills you shortlist in your profile from ‘Earn’ section as well. By this, our platform avoids cluttering you with unnecessary information. 
								</p>
					</div>											
					</div>
				</div>
			</section>
			<section class="knowmore-box"> 
					<div class="container">
						<div class="">
							<div class="col-md-12 white-box">
									<h2>Get Going</h2>
									<hr>
									<p>All you have to do is create an account on our platform, and upload your skills with relevant details. The platform helps you track your progress through questions and answers on a timeline. Your overall profile and your interactivity on our website will help you earn stars as a trust factor. 
									</p>
									<p>So, what are you waiting for? Get stated right ahead!</p>
						</div>											
						</div>
					</div>
				</section>
				<section class="knowmore-box"> 
						<div class="container">
							<div class="">
								<div class="col-md-12 btn-box text-center">
									<button class="btn btn-primary">Want to share!</button>
									<button class="btn btn-primary">Question in mind?</button>
							</div>											
							</div>
						</div>
					</section>
				
	<?php $this->view('home-footer') ?>