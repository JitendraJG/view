<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Got an idea? Too busy to find promoters? Too busy to look for man power? Viewham helps to build credibility to your account while you are too busy building your product.">
		<meta name="keywords" content="How To Invest Money, Online Investment, Entrepreneurs, Start New Business, Invest Money Online, Investment Plans, Business Investment, Business Entrepreneur, Investment Ideas, Investment, Small Investment Business, Small Investment Opportunities.">
		<meta name="author" content="">
		<title> Got an Idea | Build Business Profile | Become an Entrepreneur </title>
		
		<meta name="robots" content="INDEX, FOLLOW"><meta name="google-site-verification" content="NyGJFnXTQDLW4WQArDLtXWAsqLmyBI_NDcKy9vws27s" />
<meta name="geo.region" content="India-Hyd"/>
<meta name="geo.placename" content="HITEC City"/>
<meta name="geo.position" content="32.819118;-96.915766"/>
<meta name="ICBM" content="32.819118, -96.915766"/>
<link rel="canonical" href="https://www.viewham.com/Gain/" />

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
						<!--<div class="search-box ">
							<div class="input-box">
							<input type="text" class="form-control" placeholder="Search by Skill Name">
							</div>
							<div class="mag-box">
							<img src="<?php echo base_url(); ?>assets/images/search.svg">
							</div>
						</div>-->
						</div>
			<div class="side-menu pull-right col-md-6 col-lg-5 col-sm-12">
			<?php $session_user = $this->session->userdata('user');  
	if($session_user){?>
	
	<ul class="nav nav-pills notify-nav" role="tablist">
								<?php if(empty($user['PROFILE_PICTURE'])){
									$prf = 'svg.svg';
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
			
	<?php }else{ ?>
		<div class="row">
				<a href="<?php echo base_url(); ?>User/SignUp" class="">Sign Up </a>
				<a href="<?php echo base_url(); ?>User/SignIn" class="">Sign In</a> 
				
			</div>
	<?php } ?>	
		</div>
			</div>
			</div>
			</div>
		</div>
	</section>
	<nav class="nav-bar">
				<div class="container">
			<a href="<?php echo base_url(); ?>ideazone" class="">Idea Zone</a>
			<a href="<?php echo base_url();?>learn" class="">Learn</a>
			<a href="<?php echo base_url(); ?>earn" class="">Earn</a>
			<a href="<?php echo base_url(); ?>gain" class="">Gain</a>
		</div>
	</nav>
	<section >
		<div class="container">
			<div class="">
				<div class="header-content">
					<div class="header-content-inner" style="text-align:center">
						<h2></h2>
						<hr>
					<h1 >404 Page Not Found</h1>
					<h2></h2>
					<h2></h2>
					<h2></h2>
					<br>
					<br>
					<br>
					<br>
					</div>
					
					
				</div>
			</div>
		</div>
	</section>

	<?php $this->view('home-footer') ?>
	<script src="<?php echo base_url(); ?>assets/js/custom.js"></script>