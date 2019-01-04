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
					<a href="<?php echo base_url(); ?>User/SignIn" class="">Sign In</a> 
								<a href="#" class="bars"><i class="fa fa-bars"></i></a>
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
						<h2>EARN</h2>
						<hr>
					<h3>EARN what your skills are worth</h3>
					</div>
					<div class="btn-group col-md-6 col-md-offset-3">
    <button type="button" class="btn btn-primary">Create my skill profiles</button>
    <button type="button" class="btn btn-primary">Add other’s skills as mediator</button>
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
						<div class="title">Create Profile</div>
						<div class="desc">From Idea Zone</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6 pd-0">
						<div class="box">
							<div class="icon"><img src="<?php echo base_url(); ?>assets/images/MaintainTrustfactor.svg"></div>
							<div class="title">Maintain Trust factor</div>
							<div class="desc">With Proper Vision</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6 pd-0">
							<div class="box">
								<div class="icon"><img src="<?php echo base_url(); ?>assets/images/ShowInterest&GetWork.svg"></div>
								<div class="title">Show Interest & Get Work</div>
								<div class="desc">From Human & Financial Resources</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6 pd-0">
								<div class="box">
									<div class="icon"><img src="<?php echo base_url(); ?>assets/images/Perform&Earn.svg"></div>
									<div class="title">Perform & Earn</div>
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
							<h2>Introducing 'Earn'</h2>
							<hr>
							<p>Have you ever wondered how it would feel or what it would mean to have a multi-purpose platform where you can actively find a secondary source of income? Viewham is the only platform that does that. You can now choose to work and earn on any of your skill, either on professional or personal. It’s all about offering you an extra opportunity to earn more. 
							</p>
				</div>											
				</div>
			</div>
		</section>	
		<section class="knowmore-box"> 
				<div class="container">
					<div class="">
						<div class="col-md-12 grey-box">
								<h2>How does ‘Earn’ work?</h2>
								<hr>
								<p>Say you have no skill, but you are great at networking! You know how to get things done and where to find the resources. Viewham has something for you as well. You can now choose to create a profile for an upper limit of seven people. While doing so, you can update their skills, and in turn earn a small commission if you get work for them.</p>
<p>All you have to do is fill the ‘Earn’ form with necessary credentials such as skills you would want to work with, availability of your time for the job, resource cost, service related details and so on.</p>
<p>This option helps you showcase your skills to other people who might be interested in; and in return you earn! The skill you choose here is also the same skill set displayed in the learn section of your profile, where you can explore further by posting questions and answers on the topics of your choice.
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
									<p>Your first step should be to register and create a profile with relevant skill set. There on, you may choose to verify your contact details to increase and score on your trust factor which is the star rating you would get. 
									</p>
									<p>With Extra-Income Opportunities, Viewham now allows you to not just earn on your professional skills but also on your talent. You can upload your work to find recruiters and directly choose to get paid on a convenient basis. This platform also gives you the flexibility to create an account for others, more like a proxy and earn commission on every contract of service billed. Professional skills, Hobbies that you have an inborn talent with, DIY crafts that you can teach, Ideas that change the way one thinks, and so much more to connect with, all on one platform, Viewham! Use it the way you want and make yourself noted. By creating an account on Viewham, you are opening up to the world with the skills you have acquired over the years. With it, you now have a chance to do more than just showcase.</p>
										<p>With Business Opportunities, everywhere over Viewham, for all genre of people, exchanging of services for quick and easy money cannot get easier. There is something for all in Viewham. This platform has evolved to provide opportunities to anyone from a small-time carpenter, to human resource for an MNC. All one has to do is exhibit one’s idea and proposal in a manner which is understood and noticed by potential takers; To sum it up, this is one giant opportunity to earn more!</p>
						</div>											
						</div>
					</div>
				</section>
				<section class="knowmore-box"> 
						<div class="container">
							<div class="">
								<div class="col-md-12 btn-box text-center">
									<button class="btn btn-primary">Create my skill profiles</button>
									<button class="btn btn-primary">Add other’s skills as mediator</button>
							</div>											
							</div>
						</div>
					</section>
	<?php $this->view('home-footer') ?>