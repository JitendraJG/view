<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Welcome to Viewham - Creating Opportunities for all, at any place, anywhere, & at any time! Exclusive features and more are now available to you, all in one platform">
		<meta name="keywords" content="How To Share Ideas, Share Business Ideas, Investment Ideas, Best Online Business, Entrepreneur Ideas, Best Investment Ideas, Money Investment Ideas, Explore Business Ideas, Share Ideas Online, Share And Discuss Ideas, Successful Business Ideas, Important Business Ideas.">
		<meta name="author" content="">
		<title>Welcome to Viewham - Creating Opportunities for all, at any place, anywhere, & at any time! Exclusive features and more are now available to you, all in one platform</title>

<meta name="robots" content="INDEX, FOLLOW"><meta name="google-site-verification" content="NyGJFnXTQDLW4WQArDLtXWAsqLmyBI_NDcKy9vws27s" />
<meta name="robots" content="INDEX, FOLLOW"><meta name="google-site-verification" content="NyGJFnXTQDLW4WQArDLtXWAsqLmyBI_NDcKy9vws27s" />
<meta name="geo.region" content="India-Hyd"/>
<meta name="geo.placename" content="HITEC City"/>
<meta name="geo.position" content="32.819118;-96.915766"/>
<meta name="ICBM" content="32.819118, -96.915766"/>
<link rel="canonical" href="https://viewham.com/ideazone/" />
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
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-112767933-1"></script><script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-112767933-1');
</script>
	<body>
	<?php $session_user = $this->session->userdata('user');  
	if($session_user){?>
		<section id="topbar" class="dashboard-top">
			<div class="container">
				<div class="row">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header col-md-4">
						<a class="page-scroll" href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/images/logo.svg" class="logo"/></a>
						<div class="mobile-menu col-md-6">
							 <!--<span><img src="<?php echo base_url(); ?>assets/images/notifications.svg"><div class="redbox">29</div></span>-->
						</div>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="signup-nav pull-right col-md-8">
						<div class="col-md-6 col-lg-6 col-sm-5">
								</div>
						<div class="side-menu col-md-6 col-lg-6 col-sm-7">
							<ul class="nav nav-pills notify-nav" role="tablist">
								<?php if(empty($user['PROFILE_PICTURE'])){
									$prf = '15319149683.jpg';
								}else{
									$prf =$user['PROFILE_PICTURE'];
								} ?>
								  <li role="presentation" class="dropdown"> <a href="#" class="dropdown-toggle" id="n4" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="<?php echo base_url(); ?>uploads/images/<?php echo $prf; ?>" class="profile-pic" /></span>
								<?php echo $user['NAME']; ?> <i class="fa fa-angle-down"></i></a>
								<ul class="dropdown-menu animation slideDownIn" id="menu1" aria-labelledby="n4">
										<li><a href="<?php echo base_url('User/Editprofile'); ?>"><i class="glyphicon glyphicon-pencil"></i>&nbsp; Edit Profile</a></li>
										
										
										<li role="separator" class="divider"></li>
										<li><a href="<?php echo base_url('User/logout'); ?>"><i class="glyphicon glyphicon-off"></i>&nbsp; Logout</a></li>
									</ul>
								</li>
							</ul>	
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>	
	<?php }else{ ?>
	<div id="topbar" class="dashboard-top">
			<div class="container">
				<div class="row">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header col-md-6 col-sm-6">
						<a class="page-scroll" href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/images/logo.svg" class="logo"/></a>
						<div class="mobile-menu col-md-6">
							<a href="#" class="bars"><i class="fa fa-bars"></i> </a>
						    <a href="<?php echo base_url('User/SignUp'); ?>" class="signup">Sign Up </a>
						</div>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="signup-nav pull-right col-md-6  col-sm-6">
						<div class="col-md-6 col-lg-7 col-sm-12">
							<!--<div class="search-box">
								<div class="input-box">
									<input type="text" class="form-control" placeholder="Search by Skill Name">
								</div>
								<div class="mag-box">
									<img src="<?php echo base_url(); ?>assets/images/search.svg">
								</div>
							</div>-->
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php }?>
	<section id="title-bar" style="margin-top: 64px;" >
		<div class="container">
			<div class="">
				<div class="header-content">
					<div class="header-content-inner">
						<h2>IDEA ZONE</h2>
						<hr>
					<h3>Ideas live Forever</h3>
					</div>
					<div class="btn-group col-md-6 col-md-offset-3">
    <button onclick="window.location.href='<?php echo base_url('business-ideas'); ?>'" type="button" class="btn btn-primary">View Business Ideas</button>
  
   <button onclick="window.location.href='<?php echo base_url(); ?>Ideazone/Postidea'" type="button" class="btn btn-primary">Post a Business Idea</button>
   
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
						<div class="icon"><img src="<?php echo base_url(); ?>assets/images/Post_ExploreIdeas.svg"></div>
						<div class="title">Post & Explore Ideas</div>
						<div class="desc">From Idea Zone</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6 pd-0">
						<div class="box">
							<div class="icon"><img src="<?php echo base_url(); ?>assets/images/ValidateIdea.svg"></div>
							<div class="title">Validate Idea</div>
							<div class="desc">With Proper Vision</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6 pd-0">
							<div class="box">
								<div class="icon"><img src="<?php echo base_url(); ?>assets/images/GatherSupport.svg"></div>
								<div class="title">Gather Support</div>
								<div class="desc">From Human & Financial Resources</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6 pd-0">
								<div class="box">
									<div class="icon"><img src="<?php echo base_url(); ?>assets/images/BuildaBusiness.svg"></div>
									<div class="title">Build a Business</div>
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
							<h2>Introducing 'Idea Zone'</h2>
							<hr>
							<p>An eco-system of tech savvy people, ideas that crop up from everywhere, an environment flooding with 
							constructive thoughts is where a tomorrow’s leader has to be, and Viewham provides a budding leader with the 
							same type of eco-system virtually.
							</p>
				</div>											
				</div>
			</div>
		</section>	
		<section class="knowmore-box"> 
				<div class="container">
					<div class="">
						<div class="col-md-12 grey-box">
								<h2>Benefits from Idea Zone</h2>
								<hr>
								<p>Viewham is making its way to be a great platform where people would Login to pave way for “The Next Big Thing!” We understand what hard-work is, 
								therefore we are inclined to provide you with the best opportunity there is for you, to transform your idea into a reality. 
								
								</p>
	<p>Some of things you could benefit from is as listed!</p>
<ul><li>	Small investment for small time business ideas
</li><li>	Select from a pool of ideas and businesses for all age-groups
</li><li>	Facts that encourage you to take up two jobs at the same time
</li><li>	Investment ideas that are simple and easy to execute
</li><li>	Ideas from all industry types that help you activate a secondary source of income!
</li><li>	Partner with like-minded people to scale up quickly. 
</li>
	</ul>			 	</div>											
					</div>
				</div>
			</section>
			<section class="knowmore-box"> 
					<div class="container">
						<div class="">
							<div class="col-md-12 white-box">
									<h2>Get Going</h2>
									<hr>
									<p>Creating an account here will be your first step to start something new. Viewham thus is an open source platform to discuss 
									real-time ideas openly, seek some real-time resources that are economically viable, and also contributes by bringing in various 
									different perspectives. If you have an idea that you like to post on the website, go right ahead! People may present their 
									opinions and may also choose to hit the ‘impressed’ button to like your idea. It doesn’t just end there; It continues to 
									provide a field providing you with the required resources such as HR, Consultants, Investors, Mentors to help you collaborate 
									the whole process.
									</p>
									<p>We believe in settling for nothing less than the very best; and having you aboard will be great!</p>
									<p>All you have to do is just Login to <a href="http://www.viewham.com">www.viewham.com</a> to know more.  </p>
						</div>											
						</div>
					</div>
				</section>
				<section class="knowmore-box"> 
						<div class="container">
							<div class="">
								<div class="col-md-12 btn-box text-center">
									<button onclick="window.location.href='<?php echo base_url(); ?>business-ideas'" class="btn btn-primary">View Business Ideas</button>
									<button onclick="window.location.href='<?php echo base_url(); ?>Ideazone/Postidea'" class="btn btn-primary">Post a Business Idea</button>
							</div>											
							</div>
						</div>
					</section>
	<?php $this->view('home-footer') ?>
	