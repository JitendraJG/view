<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="<?php if(isset($page)) { ?>Page <?php echo $page." - "; } ?>Looking for New Business Ideas or Opportunities? Welcome to Viewham, an online platform for the modern-day entrepreneur & beginners to start sharing ideas!">
		<meta name="author" content="">
		<title>Business Ideas | Best Startup Ideas Online <?php if(isset($page)) { ?> - Page <?php echo $page ?> <?php } ?></title>
<link rel="icon" href="<?php echo base_url()?>favicon.png" type="image/gif">		
		<meta name="robots" content="INDEX, FOLLOW"><meta name="google-site-verification" content="NyGJFnXTQDLW4WQArDLtXWAsqLmyBI_NDcKy9vws27s" />
<meta name="robots" content="INDEX, FOLLOW"><meta name="google-site-verification" content="NyGJFnXTQDLW4WQArDLtXWAsqLmyBI_NDcKy9vws27s" />
<meta name="geo.region" content="India-Hyd"/>
<meta name="geo.placename" content="HITEC City"/>
<meta name="geo.position" content="32.819118;-96.915766"/>
<meta name="ICBM" content="32.819118, -96.915766"/>
		<?php $append = ""; if(isset($page)) { $append = "page/".$page."/"; } ?> 
		<link rel="canonical" href="<?php echo base_url(); ?>businessideas/<?php echo $append; ?>" />
		<!-- Bootstrap Core CSS -->
		<link href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/jquery.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/star-rating.min.js"></script>
		<!-- Custom Fonts -->
		<link href="<?php echo base_url(); ?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<!-- Plugin CSS -->
		<link href="<?php echo base_url(); ?>assets/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
		<!-- Theme CSS -->
		<link href="<?php echo base_url(); ?>assets/css/creative.min.css" rel="stylesheet">
		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
		<!-- Select2 Design Lite -->
		<link href="<?php echo base_url(); ?>assets/css/select2.css" rel="stylesheet"/>
		<script src="<?php echo base_url(); ?>assets/js/select2.js"></script>
		<!-- Material Design Lite -->
		
		<script src="<?php echo base_url(); ?>assets/material/material.min.js"></script>
		<script src="<?php echo base_url(); ?>assets//material/magicsuggest.js"></script>
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/material/material.indigo-pink.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/star-rating.min.css">
		<!-- Material Design Lite -->
		<link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-112767933-1"></script><script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-112767933-1');
</script>
	</head>
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
						<a href="#" class="bars"><i class="fa fa-bars"></i></a>
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
				<a href="<?php echo base_url(); ?>User/SignUp" class="">Sign Up </a>
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

	<section class="ideazone">
		<div class="container">
			<div class="row mb-20">
				<div class="col-md-6">
					<h4 class="mt-0 mb-0">Business Ideas</h4>
				</div>
				<div class="col-md-6 text-right">
					<a href="<?php echo base_url('Ideazone/Postidea'); ?>"><button class="btn btn-info mb-0 mblock-btn">Post a Business Idea</button></a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 side-sticky">
					<a href="javascript:void()" class="filter-btn visible-xs visible-sm"><img src="<?php echo base_url(); ?>assets/images/filter.png" alt="filter"/></a>
					<div class="filter-content grey-block mb-20">
						<h4 class="text-center">Search filters</h4>
						<form action="<?php echo base_url('Ideazone/search'); ?>">
							<label>Industry</label>
							<?php
							if(!empty($_GET['industrkey']))
							{$marks = $_GET['industrkey'];
							if (in_array("32110", $marks)){  echo "Checked";  } }?>
							<select name="industrkey[]" id="e2_2" multiple="multiple" class="e2_2aaa mb-5" style="width:100%" tabindex="-1">
							<?php

							foreach($industry as $ind){ ?>
							<option  value="<?php echo $ind['ID']; ?>" <?php if(!empty($_GET['industrkey'])){$marks = $_GET['industrkey'];
							if (in_array($ind['ID'], $marks)){  echo "selected";  } }?>><?php echo $ind['SDESC']; ?></option>
							<?php } ?>
							</select>
							<script>
							$(document).ready(function() { 
							$(".e2_2aaa").select2({
							placeholder: "Search by Industry"
							});});
							</script>			
							<!--<label>Investment
								<select class="form-control sub-dw pull-right">
									<option value="">INR</option>
								</select>
							</label>
							<div class="row">
								<div class="col-xs-6">
									<input value="<?php if(!empty($_GET['min_inv'])){ echo $_GET['min_inv'];} ?>" name="min_inv" type="text" class="form-control" placeholder="min" />
								</div>
								<div class="col-xs-6">
									<input value="<?php if(!empty($_GET['max_inv'])){ echo $_GET['max_inv'];} ?>" name="max_inv" type="text" class="form-control" placeholder="max" />
								</div>
							</div>
							
							<label>Returns
								<select class="form-control sub-dw pull-right">
									<option value="">INR</option>
								</select>
								<select class="form-control sub-dw pull-right">
									<option value="">Monthly</option>
								</select>
							</label>
							<div class="row">
								<div class="col-xs-6">
									<input value="<?php if(!empty($_GET['ret_min'])){ echo $_GET['ret_min'];} ?>" name="ret_min" type="text" class="form-control" placeholder="min" />
								</div>
								<div class="col-xs-6">
									<input value="<?php if(!empty($_GET['ret_max'])){ echo $_GET['ret_max'];} ?>" name="ret_max" type="text" class="form-control" placeholder="max" />
								</div>
							</div>
							
							<label>Break-Even
								<select class="form-control sub-dw pull-right">
									<option value="">Monthly</option>
								</select>
							</label>
							<div class="row">
								<div class="col-xs-6">
									<input value="<?php if(!empty($_GET['break_min'])){ echo $_GET['break_min'];} ?>" name="break_min" type="text" class="form-control" placeholder="min" />
								</div>
								<div class="col-xs-6">
									<input value="<?php if(!empty($_GET['break_max'])){ echo $_GET['break_max'];} ?>" name="break_max" type="text" class="form-control" placeholder="max" />
								</div>
							</div>
							-->
							<p class="mt-20">
							<button type="button" onclick="window.location.href='<?php echo base_url('business-ideas'); ?>'" class="btn btn-info mb-0 mr-10">Clear</button>
							<button type="submit" class="btn btn-primary mb-0">Apply</button>
							</p>
						</form>
		</div>
				</div>
				<div class="col-md-9">
				
				<?php //print_r($bussinessIdeas);
				
					foreach($bussinessIdeas as $o){ 
					$ind= $o['INDUSTRY'];
					$CI =& get_instance();
					$find = $CI->Industry($ind);
					$uid= $o['POSTED_BY'];
					$CI =& get_instance();
					$fid = $CI->usersby($uid);
					
					

					?>
				
					<span id="tab<?php echo $o['ID']; ?>"></span>
							
						<div class="panel panel-default ideazone-content" id="<?php echo $o['ID']; ?>">
						<div class="panel-heading">
					<?php if(empty($fid['PROFILE_PICTURE'])){
									$primg = 'svg.svg';
								}else{
									$primg = $fid['PROFILE_PICTURE'];
								} ?>
						<h3><img src="<?php echo base_url(); ?>uploads/images/<?php echo $primg; ?>" class="profile-pic" /> <?php echo $fid['NAME']; ?>
						<span>
						<?php //echo time_elapsed_string(strtotime($o['POSTED_DATE'])); ?></span>
<span class="pull-right">
								<?php  
					$pideaid= $o['ID'];
					$CI =& get_instance();
					$feed = $CI->FeedbackPost($pideaid);	
					$count= count($feed); 
					
					if(!empty($count)){
					$sum=0;
					foreach($feed as $f){
												if (is_numeric($f['feedback'])) {
						$sum+=$f['feedback'];
						}else{
							$sum=0;
						}
						}
						$fdb = $sum/$count;
					}else{
						$fdb=0;
					}
						?>
								<span class="stars" data-rating="<?php echo $fdb; ?>" data-num-stars="5"></span>
								
								</span>
						</h3>
						</div>
						<div class="panel-body">
						<h6>Idea Title</h6>
						<p><?php echo $o['IDEA_TITLE']; ?></p>
						<h6>Industry</h6>
						<p><?php echo $find['SDESC']; ?></p>
						<h6>Description</h6>
						<p><?php $original_string = $o['DESCRIPTION'];
							echo truncate($original_string, 100, 10000);
							if($this->uri->segment(3)){
							$seg = 'page/'.$this->uri->segment(3);
						}else{
							$seg ='';
						}
						?><span><a data-url="<?php echo base_url('ideazoneall/').$seg; ?>#tab<?php echo $o['ID'];?>" class=" checksession" > ..see more</a></span></p>
						
					</div>
						<?php if(!empty($o['TAGS'])){ ?>
							<div class="panel-footer" style="background-color:#f9f9f9;padding:5px 15px; ">
								<p class="ideatags"><?php echo $o['TAGS']; ?></p>
							</div>
						<?php } ?>
						</div>
				<?php }
				?>
				<div class="pagination pagination_edit">			
<?php				foreach ($links as $link) {
echo $link;
}	?>
</div>
			</div>
		</div>
	</section>
	<style>
	p.ideatags{ margin:0px;height: 50px;overflow-y: scroll;}
	</style>
	<?php $this->view('signin-signupmodel') ?>

<?php $this->view('loginjs-business-idea'); 
if((base_url(uri_string())=='https://viewham.com/businessideas') && (empty($_GET))){
	

	?>

	 <div class="container footer-top ">
		<div class="row"><div class="col-md-12 panel-body">
		<p></p>
		<h4 class="text-center mt-0 mb-0">What sparked IdeaZone</h4>
		<p></p>
<p>		It all starts with a dream and a desire to do something new and better! If you have a decent start-up idea or a Business Idea, however small, that can make money, then that idea is worth a shot! All you then need is a platform! Welcome to Viewham – an online platform for the modern-day entrepreneur!</p>

<p>Money making ideas shared and partnered with others fetches more credibility and can glean returns in the market these days. All you have to do is post the idea online on our platform to gain attributes such as visibility, publicity, popularity and free advertising. Viewham hosts a diverse range of start-up ranging from small business ideas for beginners  to something as big as being an entrepreneur! Scroll down to know more and seek resourceful information now!</p>

<p>Sharing an idea is as important as the idea itself! Sharing new ideas begin by posting the idea online, starting an open discussion about it with experts, finding the resources, partnering to refine the thought process and so on. Therefore, refining a start-up idea is one way to get to the next step from what you call a basic idea. Refining will only happen if the business idea is discussed about. The best way to discuss this is to post it online and let a network of experienced people to discuss about the same. What you lack out of sheer experience is what the online network will make it up for you. </p><p>

Start-up ideas remain at the heart of every tech city today. Strong networking and online ventures have fast tracked almost everything by creating avenues and channels of opportunities. Viewham is an online platform designed to help you find the right kind of space in the money-making market. Hundreds of people log in everyday to post their business ideas online where they share the importance, benefits, improvement points and so on to transform a dream into reality. Take a look below to know more!
</p><p>
“Business ideas are meant for the selected few” is no longer a reality! Whoever you are, whatever your hobby is, whatever your interest lies in, we at Viewham help you turn them into a money-making process. Do you want to know how? Scroll through to explore!
</p><p>
Viewham has something for everyone! If you are new to business and its nuances, Viewham is the right place for you to get started! We have everything online ranging from top start-up ideas to a small-time investment plan in any of those ideas catered to fit and be used by an everyday common man! We will teach you how to start?, where to go?, what to expect? such that you will be someone known as an entrepreneur tomorrow. Sign up today to know more!</p>
<br>
<br>
</div>
</div>
</div>
<?php } ?>
		<?php $this->view('home-footer') ?>
		<script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
		
		
		

<?php 					function time_elapsed_string($ptime)
{

    $etime = time() - $ptime;

    if ($etime < 1)
    {
        return '0 seconds';
    }

    $a = array( 365 * 24 * 60 * 60  =>  'year',
                 30 * 24 * 60 * 60  =>  'month',
                      24 * 60 * 60  =>  'day',
                           60 * 60  =>  'hour',
                                60  =>  'minute',
                                 1  =>  'second'
                );
    $a_plural = array( 'year'   => 'years',
                       'month'  => 'months',
                       'day'    => 'days',
                       'hour'   => 'hours',
                       'minute' => 'minutes',
                       'second' => 'seconds'
                );

    foreach ($a as $secs => $str)
    {
        $d = $etime / $secs;
        if ($d >= 1)
        {
            $r = round($d);
            return $r . ' ' . ($r > 1 ? $a_plural[$str] : $str) . ' ago';
        }
    }
}
function truncate($input, $maxWords, $maxChars)
{
    $words = preg_split('/\s+/', $input);
    $words = array_slice($words, 0, $maxWords);
    $words = array_reverse($words);

    $chars = 0;
    $truncated = array();

    while(count($words) > 0)
    {
        $fragment = trim(array_pop($words));
        $chars += strlen($fragment);

        if($chars > $maxChars) break;

        $truncated[] = $fragment;
    }

    $result = implode($truncated, ' ');

    if ($input == $result)
    {
        return $input;
    }
    else
    {
        return preg_replace('/[^\w]$/', '', $result) . '...';
    }
}
 ?>
<!-- Forgot Modal -->

<style>
.panel-body p:nth-last-child(2) {
  
    padding-right: 10px;
}
</style>
<script>
	function loginSubmit(e) {
   if(e && e.keyCode == 13) {
      $('#signinajax').click();
   }
}
</script>
