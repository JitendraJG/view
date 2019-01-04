<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Welcome to Viewham - Creating Opportunities for all, at any place, anywhere, & at any time! Exclusive features and more are now available to you, all in one platform">
		<meta name="keywords" content="Creating Opportunities, Income Opportunities, Business Opportunities, Investment Opportunities, Best Opportunities, Online Opportunities, Entrepreneur Opportunities, and Online Work Opportunities.">
		<meta name="author" content="">
		<title>Viewham: Earn, Learn, Gain & Idea Zone - Empower Your Income</title>
		<link rel="canonical" href="https://viewham.com/" />
		<meta name="robots" content="INDEX, FOLLOW"><meta name="google-site-verification" content="NyGJFnXTQDLW4WQArDLtXWAsqLmyBI_NDcKy9vws27s" />
<meta name="geo.region" content="India-Hyd"/>
<meta name="geo.placename" content="HITEC City"/>
<meta name="geo.position" content="32.819118;-96.915766"/>
<meta name="ICBM" content="32.819118, -96.915766"/>
		<!-- Bootstrap Core CSS -->
		<link href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/jquery.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
		<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  -->
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
		<!--slider-->
		<link href="<?php echo base_url(); ?>assets/css/liteaccordion.css" rel="stylesheet">
		<script src="<?php echo base_url(); ?>assets/js/liteaccordion.jquery.js"></script>
		<!--slider-->
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
	<div id="topbar">
			<div class="container">
				<div class="row">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header col-md-6 col-sm-6">
						<a class="page-scroll" href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/images/logo.svg" class="logo"/></a>
						<div class="mobile-menu col-md-6">
							<a href="#" class="bars"><i class="fa fa-bars"></i></a>
						    <a href="#" class="signup">Sign Up </a>
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
						<div class="side-menu pull-right col-md-6 col-lg-5 col-sm-12">
							<div class="row">
				
				<a href="<?php echo base_url(); ?>User/SignIn" class="">Sign In</a>
							<!--	<a href="#" class="bars"><i class="fa fa-bars"></i></a>-->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php }?>
		<div class="container">
			<div class="header-content">
				<div class="header-content-inner">
					<h2>Use Viewham Power <br/>to Empower your Income</h2>
					<hr>
					<div class="col-md-12 home-box-list">
						<div class="row below-1200" >
							<div class="col-md-3 col-sm-6 col-xs-6">
								<div class="home-box">
									<div class="title">Idea zone</div>
									<div class="icon">
									<a href="<?php echo base_url(); ?>Ideazone">
									<img src="<?php echo base_url(); ?>assets/images/ideazone.svg"></a></div>
									<div class="desc">Ideas Live Forever</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-6">
								<div class="home-box">
									<div class="title">Gain</div>
									<div class="icon">
									<a href="<?php echo base_url(); ?>gain">
									<img src="<?php echo base_url(); ?>assets/images/gain.svg"></a></div>
									<div class="desc">Only profits GAIN, Not Wages</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-6">
								<div class="home-box">
									<div class="title">Earn</div>
									<div class="icon">
									<a href="<?php echo base_url(); ?>earn">
									<img src="<?php echo base_url(); ?>assets/images/earn.svg"></a></div>
									<div class="desc">Earn what skills are worth</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-6">
								<div class="home-box">
									<div class="title">Learn</div>
									<div class="icon">
									<a href="<?php echo base_url(); ?>learn">
									<img src="<?php echo base_url(); ?>assets/images/learn.svg"></a></div>
									<div class="desc">Learn to master your skills</div>
								</div>
							</div>
						</div>
						<div class="row above-1201">
						<div class="slider">

				<div class="accordian">
					<ul>
						<li class="idea-zone">
							<div class="image_title">
								<a href="<?php echo base_url(); ?>ideazone">IDEA ZONE</a>
								<div class="icon"><img src="<?php echo base_url(); ?>assets/images/ideazone.svg"></div>
								<h3>IDEAS Live Forever</h3>
							</div>
							<div class="accordian-content">
								<div class="title">
								<h2>IDEA ZONE</h2>
								</div>
								<div class="inner">
								<div class="desc">
								<p><img src="<?php echo base_url(); ?>assets/images/postBusiness.svg">Post & Explore Ideas</p>
								<p><img src="<?php echo base_url(); ?>assets/images/developBusiness.svg">Validate Idea</p>
								<p><img src="<?php echo base_url(); ?>assets/images/UseViewham.svg">Gather Support</p>
								<p><img src="<?php echo base_url(); ?>assets/images/executePlan.svg">Build Business</p>
		                        	<a href="<?php echo base_url(); ?>ideazone" class="button primary">Know More</a>
		                        </div>
		                        <div class="enquire">
		                         <a href="<?php echo base_url('business-ideas'); ?>">	<button class="btn btn-primary">View Business Ideas</button></a>
									 <a href="<?php echo base_url(); ?>Ideazone/Postidea">
								<button class="btn btn-primary">Post a Business Idea</button></a>
									<div class="icon">
									<a href="<?php echo base_url(); ?>Ideazone"><img src="<?php echo base_url(); ?>assets/images/ideazone.svg"></a></div>
		                        </div>
		                        </div>
	                       	</div>
						</li>
						<li class="gain">
							<div class="image_title">
								<a href="#">GAIN</a>
								<div class="icon"><img src="<?php echo base_url(); ?>assets/images/gain.svg"></div>
								<h3>Only profits GAIN, Not Wages</h3>
							</div>
							<div class="accordian-content">
								<div class="title">
								<h2>GAIN</h2>
								</div>
								<div class="inner">
								<div class="desc">
								<p><img src="<?php echo base_url(); ?>assets/images/CreateProfile-w.svg">Create Profile</p>
								<p><img src="<?php echo base_url(); ?>assets/images/ChooseOpportunity-w.svg">Choose Opportunity</p>
								<p><img src="<?php echo base_url(); ?>assets/images/UseViewham.svg">Gather Support</p>
								<p><img src="<?php echo base_url(); ?>assets/images/BuildBusiness.svg">Build Business</p>
		                        	<a href="<?php echo base_url(); ?>gain" class="button primary">Know More</a>
		                        </div>
		                        <div class="enquire">
								<a href="<?php echo base_url(); ?>Gain/Entrepreneur">
		                        	<button class="btn btn-primary">Entrepreneur?</button></a>
								<a href="<?php echo base_url(); ?>Gain/Investor">	
									<button class="btn btn-primary">Investors!</button></a>
									<div class="icon">
									<a href="<?php echo base_url(); ?>gain">
				<img src="<?php echo base_url(); ?>assets/images/gain.svg"></a></div>
		                        </div>
		                        </div>
	                       	</div>
						</li>
						<li class="earn">
							<div class="image_title">
								<a href="#">EARN</a>
								<div class="icon"><img src="<?php echo base_url(); ?>assets/images/earn.svg"></div>
								<h3>Earn what skills are worth</h3>
							</div>
							<div class="accordian-content">
								<div class="title">
								<h2>EARN</h2>
								</div>
								<div class="inner">
								<div class="desc">
								<p><img src="<?php echo base_url(); ?>assets/images/CreateProfile-w.svg">Create Profile</p>
								<p><img src="<?php echo base_url(); ?>assets/images/MaintainTrustFactor-w.svg">Maintain Trust factor</p>
								<p><img src="<?php echo base_url(); ?>assets/images/Showinterest_getHired.svg">Show Interest & Get Work</p>
								<p><img src="<?php echo base_url(); ?>assets/images/PerformAndEarn.svg">Perform & Earn</p>
		                        	<a href="<?php echo base_url(); ?>earn" class="button primary">Know More</a>
		                        </div>
		                        <div class="enquire">
		                      <a href="<?php echo base_url(); ?>Earn/Profile">
						  <button class="btn btn-primary">Create my skill profiles</button></a>
			<a href="<?php echo base_url(); ?>Earn/Mediator">
						<button class="btn btn-primary">Add other’s skills as mediator</button></a>
									<div class="icon">
						<a href="<?php echo base_url(); ?>earn">			
						<img src="<?php echo base_url(); ?>assets/images/earn.svg"></a></div>
		                        </div>
		                        </div>
	                       	</div>
						</li>
						<li class="learn">
							<div class="image_title">
								<a href="#">LEARN</a>
								<div class="icon"><img src="<?php echo base_url(); ?>assets/images/learn.svg"></div>
								<h3>Learn to master your skills</h3>
							</div>
							<div class="accordian-content">
								<div class="title">
								<h2>LEARN</h2>
								</div>
								<div class="inner">
								<div class="desc">
								<p><img src="<?php echo base_url(); ?>assets/images/postBusiness.svg">Select Skills</p>
								<p><img src="<?php echo base_url(); ?>assets/images/developBusiness.svg">Share your knowledge</p>
								<p><img src="<?php echo base_url(); ?>assets/images/UseViewham.svg">Ask your Questions</p>
								<p><img src="<?php echo base_url(); ?>assets/images/executePlan.svg">Learn from each other</p>
		                        	<a href="<?php echo base_url(); ?>Learn" class="button primary">Know More</a>
		                        </div>
		                        <div class="enquire">
		                        	<button class="btn btn-primary">Want to share!</button>
									<button class="btn btn-primary">Question in mind?</button>
									<div class="icon">
					<a href="<?php echo base_url(); ?>ideazone">
					<img src="<?php echo base_url(); ?>assets/images/learn.svg">
					</a></div>
		                        </div>
		                        </div>
	                       	</div>
						</li>
					</ul>
				</div>
            </div>
						</div>
					</div>
				<a href="#"><div class="video-box"><img src="<?php echo base_url(); ?>assets/images/play.svg" class="play"/>One Minute Overview</div></a>
				</div>
			</div>
		</div>
	</section>
	
<section class="help"> 
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="blue text-center">How we help you to move forward</h2>
					<div class="circles row">
						<div class="col-md-3 col-sm-6 col-xs-12 ">
						<a href="<?php echo base_url('Gain/Investor'); ?>"><div class="circle"><img src="<?php echo base_url(); ?>images/investor.svg" ></div></a>
						<div class="title mt-20">Fly Like a Investor</div>
						<div class="if mt-0">If Can't</div>						
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12 ">
						<a href="<?php echo base_url('Gain/Entrepreneur'); ?>"><div class="circle"><img src="<?php echo base_url(); ?>images/entrepreneur.svg" ></div></a>
						<div class="title mt-20">Run Like an Entrepreneur</div>
                        <div class="if mt-0">If Can't</div>						
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12 ">
						<a href="<?php echo base_url('Earn/Profile'); ?>"><div class="circle"><img src="<?php echo base_url(); ?>images/freelancer.svg" ></div></a>
						<div class="title mt-20">Walk Like a Freelancer</div>
                        <div class="if mt-0">If Can't</div>						
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12 ">
						<a href="<?php echo base_url('Earn/Mediator'); ?>"><div class="circle"><img src="<?php echo base_url(); ?>images/mediator.svg" ></div></a>
						<div class="title mt-20">Crawl Like a Mediator</div>
                        <div class="if">&nbsp;</div>
						
						</div>
						</div>
						</div>
						</div>
						</div>
						</section>							
						<section class="grey"> 
						<div class="container">
						<div class="row">
						<div class="col-md-4 col-sm-4 col-xs-12 pd-0">
						<a href="<?php echo base_url(); ?>who-we-are"><div class="box">
						<div class="icon"><img src="<?php echo base_url(); ?>assets/images/whoweare.svg" class="normal"><img src="<?php echo base_url(); ?>assets/images/whowearecolor.svg" class="on-hover"></div>
						<div class="title">Who We Are</div>
						</div></a>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12 pd-0">
						<a href="<?php echo base_url(); ?>what-we-do"><div class="box">
						<div class="icon"><img src="<?php echo base_url(); ?>assets/images/whatwedo.svg" class="normal"><img src="<?php echo base_url(); ?>assets/images/whatwedocolor.svg" class="on-hover"></div>
						<div class="title">What We Do</div>
						</div></a>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12 pd-0">
						<a href="<?php echo base_url(); ?>how-it-works"><div class="box">
						<div class="icon"><img src="<?php echo base_url(); ?>assets/images/howitworks.svg" class="normal"><img src="<?php echo base_url(); ?>assets/images/howitworkscolor.svg" class="on-hover"></div>
						<div class="title">How It Works</div>
						</div></a>
						</div>											
						</div>
						</div>
						</section>	
						
		<?php $this->view('home-footer') ?>