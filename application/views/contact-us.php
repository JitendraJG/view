<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Contact Us - Small Business Side Income Ideas | Viewham</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Have a question on how to learn more about submitting product ideas and services, and more then please contact us!">
		<meta name="author" content="">
		<link rel="icon" href="<?php echo base_url()?>favicon.png" type="image/gif">
		<link rel="canonical" href="<?php echo site_url(); ?>contact-us/" />
		
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
	</head>
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-112767933-1"></script><script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-112767933-1');
</script>
	<body>
		<section id="topbar" class="dashboard-top">
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
						
						</div>
						<div class="side-menu pull-right col-md-6 col-lg-5 col-sm-12">
					<div class="row">
				<a href="<?php echo base_url(); ?>User/SignUp" class="">Sign Up </a>
				<a href="<?php echo base_url(); ?>User/SignIn" class="">Sign In</a> 
				
			</div>	
						</div>
			</div>
			</div>
			</div>
		</div>
	</section>
	
	<section id="title-bar" class="static" style="padding-top: 64px;">
		<div class="container">
				<div class="header-content">
					<div class="header-content-inner">
						<h2>Contact Us</h2>
						<hr>
					</div>
			</div>
		</div>
	</section>
	<section class="knowmore-box"> 
			<div class="container static form-box">
			
			<div class="content white-box">
			<form action="" method="post" id="post-Register">
				<div class="col-md-6 ">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label input-box">
					<input type="text" class="mdl-textfield__input" id="name" name="name" required>
					

					<label class="mdl-textfield__label" for="title">Name <sup class="red">*</sup></label>
				</div>		
				</div>
				<div class="col-md-6 ">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label input-box">
					<input type="number" class="mdl-textfield__input" id="phone" name="phone" required>
					<label class="mdl-textfield__label" for="title">Phone Number <sup class="red">*</sup></label>
				</div>		
				</div>
				<div class="col-md-6 ">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label input-box">
					
					<textarea  onkeyup="textAreaAdjust(this)" rows="3" class="mdl-textfield__input" id="message" name="message" required></textarea>

					<label class="mdl-textfield__label" for="title">Message <sup class="red">*</sup></label>
				</div>		
				</div>
				<div class="col-md-6 ">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label input-box">
					<input type="email" class="mdl-textfield__input" id="email" name="email" required>
					<label class="mdl-textfield__label" for="title">Email <sup class="red">*</sup></label>
				</div>	
<button type="button" id="submit_form" class="btn btn-primary">send</button>	
<div id="message-success"></div>			
				</div>
				
					
				
				</form>
			</div>
			</div>
		</section>	
	
			<?php $this->view('home-footer') ?>
<script>

function textAreaAdjust(o) {
  o.style.height = "1px";
  o.style.height = (25+o.scrollHeight)+"px";
}
$("#submit_form").click(function(){

var name=$('#name').val();	
var email=$('#email').val();	
var message=$('#message').val();	
var phone=$('#phone').val();	
if((!name) || (!message) || (!email) || (!phone))
{
var fields = [];
if(!name){
fields.push("name");
}
if(!email){
fields.push("email");
}if(!phone){
fields.push("phone");
}if(!message){
fields.push("message");
}
$(fields).each(function (index, value) { 
    $('#'+value).addClass('error-contact');
});
 
return false;
} 	var url = "<?php echo base_url('User/Contact'); ?>";
	var formm = $('#post-Register')[0];

		// Create an FormData object 
        var data = new FormData(formm);
    $.ajax({
           type: "POST",
           url: url,
		   enctype: 'multipart/form-data',
		   data: data,
		  // dataType: 'json',
           processData: false,
           contentType: false,
           cache: false,
           timeout: 600000,
           success: function(data)
           {
               console.log(data);
			   
			   $('#post-Register')[0].reset();
			   $('#message-success').html('<div class="alert alert-success">'+data+'</div>')
              
           }
         });
});
</script>			
<style>								
.error-contact {
    border: solid 2px red !important;
}
</style>								