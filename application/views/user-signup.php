<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>. . : : Sign Up : : . .</title>
		<link rel="icon" href="<?php echo base_url()?>favicon.png" type="image/gif">		<!-- Bootstrap Core CSS -->
		<link href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		
		<!-- Custom Fonts -->
		<link href="<?php echo base_url(); ?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<!-- Plugin CSS -->
		<link href="<?php echo base_url(); ?>assets/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
		<!-- Theme CSS -->
		<link href="<?php echo base_url(); ?>assets/css/creative.min.css" rel="stylesheet">
		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
		 <!-- Material Design Lite -->
		<script src="<?php echo base_url(); ?>assets/material/material.min.js"></script>
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/material/material.indigo-pink.min.css">
		<!-- Material Design Lite -->
		<link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet">
	</head>
	<body>
		<div class="container-fluid">
			<div class="row intro">
				<div class="col-md-6 col-sm-12 intro-left hidden-xs hidden-sm">
					<h2>Use Viewham Power <br>to Empower your Income</h2>
					<hr>
					<a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/images/logo.svg" class="logo"/></a>
					<div class="mouse"><div class="scroll"></div></div>
				</div>
				<div class="col-md-6 col-sm-12 intro-right">
					<div class="col-md-8 col-sm-12 col-xs-12 sign-box signup">
						<h3>Sign Up Here</h3>
						<?php $msgg = $this->session->flashdata('error'); 
						if($msgg){	?>
						<p class="sbg-line"><?php echo $msgg; ?></p><?php } ?>
						<?php $reg = $this->session->flashdata('msg'); 
						if($reg){	?>
						<p style="color: #6460e1;"><?php echo $reg; ?></p><?php } ?>
						 <form id="post-Register" action="<?php echo base_url(); ?>User/Signup" method="post">
						 <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label input-box">
	  <img src="<?php echo base_url(); ?>assets/images/login_profile.svg" />
        <input class="mdl-textfield__input" name="name" type="text" id="name" data-validation="custom" data-validation-regexp="^([a-zA-Z_ ]+)$"
		 data-validation-length="3-12" 
		 data-validation-error-msg="Name Allows only a-z chars">
        <label class="mdl-textfield__label" for="sample3">Name</label>
      </div>
	   <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label input-box">
	  <img src="<?php echo base_url(); ?>assets/images/login_email.svg" />
        <input class="mdl-textfield__input" name="email" type="text" id="email" data-validation="email" data-validation-error-msg="Enter valid email">
        <label class="mdl-textfield__label" for="email">Email</label>
      </div>
	   <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label input-box">
	  <img src="<?php echo base_url(); ?>assets/images/login_password.svg" />
        <input class="mdl-textfield__input" name="password" type="password" id="password"  data-validation="strength" 
		 data-validation-strength="2">
        <label class="mdl-textfield__label" for="password">Password</label>
      </div>
	   <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label input-box">
	  <img src="<?php echo base_url(); ?>assets/images/login_mobile-number.svg" />
        <input class="mdl-textfield__input" name="phone" type="text" id="phone" maxlength="11" data-validation="number">
        <label class="mdl-textfield__label" for="sample3">Mobile Number</label>
      </div>
				
					<p class="terms-text">By Signing Up with VIEWHAM, you are agreeing to our <a href="<?php echo base_url('terms'); ?>" target="_blank" class="forgot-link">Terms and  Conditions</a></span></p>
					<button id="submit_form" class="btn btn-primary" type="button" >Register</button>
					<!-- <button class="btn btn-primary" data-toggle="modal" data-target="#otpModal">Register</button> -->
					
				</div></form>
				<div class="line-text col-md-8 col-sm-12 col-xs-12">
					<p class="bg-line"><span>Already Registered? <a href="<?php echo base_url(); ?>User/SignIn" class="forgot-link"> Sign In Here</a></span></p>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal -->
	<div id="SendotpMsgModal" class="modal fade" role="dialog">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<div class="col-md-12 col-sm-12 col-xs-12 sign-box otp-box">
						<div class="input-box">
							<label>Mobile:</label><input id="phone-otp" type="text" class="form-control" placeholder="xxxxxx4822" disabled><button class="phone-get-otp btn btn-primary"style="margin-top: 20px !important; margin-left: 10px;">Resend OTP</button>
							<input type="hidden" name="userid" id="userid" />
							<input type="hidden" name="uemail" id="uemail" />
							<input type="hidden" name="uname" id="uname" />
						</div>
						<div class="input-box">
							<label>OTP:</label><input id="otp-msg" type="text" class="form-control" placeholder=""><span class="otp-stuts"></span>
						</div>
						
						<div class="input-box text-center">
							
							<button class="phone-otp-submit btn btn-primary">Done</button>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>	
	<div id="SendotpMsgModalemail" class="modal fade" role="dialog">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					
					<div class="col-md-12 col-sm-12 col-xs-12 sign-box otp-box">
						<div class="input-box">
						<label>Email:</label>
						<input type="text" id="email-otp" class="form-control" placeholder="xxxxxx@gxxx.com" disabled><a  class=""><i class="fa fa-edit"></i></a><a  class="email-get-otp link">Get OTP</a>
						</div>
						<div class="input-box">
							<label>OTP:</label>
							<input type="text" id="otp-email" class="form-control " placeholder="">	
						</div>
						<div class="input-box text-center">
						<span class="emal-otp-stuts"></span>
							<a class="skip-email forgot-link">Skip</a>
							<button class="email-otp-submit btn btn-primary">Done</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="Msgmodel" class="modal fade" role="dialog">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					
					<div class="col-md-12 col-sm-12 col-xs-12 sign-box otp-box">
						<div class="message"></div>
					</div>
				</div>
			</div>
		</div>
	</div>	
	<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/jquery.min.js"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script>

  $.validate({
    modules : 'location, date, security, file',
    onModulesLoaded : function() {
     //alert('ss');
    }
  });
  
$(document).ready(function () {
$("#submit_form").click(function(){
var name=$('#name').val();	
var email=$('#email').val();	
var password=$('#password').val();	
var phone=$('#phone').val();
var filter = /^((\+[1-9]{1,4}[ \-]*)|(\([0-9]{2,3}\)[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9]{3,4}?[ \-]*[0-9]{3,4}?$/;	
if((!name) || (!password) || (!email) || (!phone))
{
var fields = [];
if(!name){
fields.push("name");
}
if(!email){
fields.push("email");
}
if(!phone){
fields.push("phone");
}
if(!password){
fields.push("password");
}
$(fields).each(function (index, value) { 
   $("#"+value).css("border-color","rgb(185, 74, 72)");
});
 
return false;
}
if (filter.test(phone)) {
       // return true;
  }else{

  return false;
}
 	var url = "<?php echo base_url('User/Signup'); ?>";
	var formm = $('#post-Register')[0];

		// Create an FormData object 
        var data = new FormData(formm);
    $.ajax({
           type: "POST",
           url: url,
		   enctype: 'multipart/form-data',
		   data: data,
		   dataType: 'json',
           processData: false,
           contentType: false,
           cache: false,
           timeout: 600000,
           success: function(data)
           {
               console.log(data);
               console.log(data.email);
               console.log(data.userid);
			  $('#phone-otp').val(data.phone);
			  $('#userid').val(data.userid);
			  $('#uname').val(data.uname);
			  $('#uemail').val(data.uemail);
			  $('#email-otp').val(data.email);
			  
			   if(data.signup=='1'){
				  // $('#post-Register')[0].reset();
				   $('#SendotpMsgModal').modal('toggle');
				   $('.phone-get-otp').click();
			   }else if(data.signup=='2'){
				    alert("email already existed");
			   }else if(data.signup=='3'){
				    alert("Phone already existed");
			   }else{
			
			  $('.msgs').html('<p class="alert-success">OOps Wrong..! will back to you..</p>')
			  $('#SendotpMsgModal').modal('toggle');
			
			   }
           }
         });
});	

$(".phone-get-otp").click(function(){
	
var phone = $('#phone-otp').val();
if((!phone)){
	alert('Enter Phone or Email');
	return false;
}
var url = "<?php echo base_url('User/SendOtpRegister'); ?>";
	
$.ajax({
    type: "POST",
    url: url,
    data: {
      "phone": phone
    },
    success: function(JSONObject) {
		
		
	if(JSONObject==1){
     
     $('.otp-stuts').html('<span class="alert-success">Otp Sent</span>');
	 	}else if(JSONObject==2){
			$('.OTP-Sent').show('slow');
     $('.OTP-Sent').html('Oops Worng.. will get back to you.');
	 setTimeout(function() {
        
		$('.OTP-Sent').hide();
		$('.OTP-Sent').html('');
		
    }, 5000);
		}else{
		alert(JSONObject);	
		}
    }
  });
});
$(".email-get-otp").click(function(){
	
var email = $('#email-otp').val();
var url = "<?php echo base_url('User/SendOtpRegister'); ?>";
	
$.ajax({
    type: "POST",
    url: url,
    data: {
      "email": email
    },
    success: function(JSONObject) {
		
		
	if(JSONObject==1){
     $('.emal-otp-stuts').html('<span class="alert-success">Otp Sent</span>');
	 setTimeout(function() {
        
		$('.OTP-Sent').hide('slow');
		$('.OTP-Sent').html('');
		 $('.get-otp').show();
		
    }, 5000);
		}else if(JSONObject==2){
			$('.OTP-Sent').show('slow');
     $('.OTP-Sent').html('Oops Worng.. will get back to you.');
	 setTimeout(function() {
        
		$('.OTP-Sent').hide();
		$('.OTP-Sent').html('');
		
    }, 5000);
		}else{
		alert(JSONObject);	
		}
    }
  });
});
$(".get-otp-email").click(function(){
	
var email = $('#email-no').val();
if((!email)){
	alert('Enter Email');
	return false;
}
var url = "<?php echo base_url('User/SendOtpRegister'); ?>";
	
$.ajax({
    type: "POST",
    url: url,
    data: {
      "email": email
    },
    success: function(JSONObject) {
		
		
	if(JSONObject==1){
      $('.get-otp-email').hide();
		$('.emal-otp-stuts').html('<span class="alert-success">Otp Sent</span>');
	 setTimeout(function() {
        
		$('.OTP-Sent').hide('slow');
		$('.OTP-Sent').html('');
		 $('.get-otp-email').show();
		
    }, 5000);
		}else if(JSONObject==2){
			$('.OTP-Sent').show('slow');
     $('.OTP-Sent').html('Oops Worng.. will get back to you.');
	 setTimeout(function() {
        
		$('.OTP-Sent').hide();
		$('.OTP-Sent').html('');
		
    }, 5000);
		}else{
		alert(JSONObject);	
		}
    }
  });
});
$(".phone-otp-submit").click(function(){
var phone = $('#phone-otp').val();
var userid = $('#userid').val();
var uemail = $('#uemail').val();
var uname = $('#uname').val();
var otp = $('#otp-msg').val();
var url = "<?php echo base_url('User/VerifyOtp'); ?>";
	
$.ajax({
    type: "POST",
    url: url,
    data: {
      "phone": phone,
      "userid": userid,
      "uemail": uemail,
      "uname": uname,
      "otp": otp
    },
    success: function(msg) {
		console.log(msg);
		if(msg==1){
		$('.otp-stuts').html('<span class="alert-success">Verified</span>');
		setTimeout(function() {
			$('.message').html('<span>Registered Successfully. Please verify your registered email</span>');
			 $('#SendotpMsgModal').modal('toggle');
			$('#Msgmodel').modal('toggle');
		setTimeout(function() {
			  window.location.href = "<?php echo base_url("ideazone-all"); ?>";
		}, 1000);
		
    }, 1000);
		}else if(msg==3){
				$('.otp-stuts').html('<span class="alert-danger">Wrong entry</span>');
		}
		
    }
  });
});
$(".skip-email").click(function(){
		$('.message').html('<span>Registered Successfully</span>');
			$('#SendotpMsgModalemail').modal('toggle');
			$('#Msgmodel').modal('toggle');
		
		setTimeout(function() {
			  window.location.href = "<?php echo base_url("ideazone-all"); ?>";
		}, 1000);
});
$(".email-otp-submit").click(function(){
var email = $('#email-otp').val();
var userid = $('#userid').val();
var otp = $('#otp-email').val();
var url = "<?php echo base_url('User/VerifyOtp'); ?>";
	
$.ajax({
    type: "POST",
    url: url,
    data: {
      "email": email,
      "userid": userid,
      "otp": otp
    },
    success: function(msg) {
		console.log(msg);
		if(msg==1){
		$('.emal-otp-stuts').html('<span class="alert-success">Verified</span>');
		setTimeout(function() {
			$('.message').html('<span>Registered Successfully</span>')
			$('#SendotpMsgModalemail').modal('toggle');
			$('#Msgmodel').modal('toggle');
		}, 500);
		setTimeout(function() {
			  window.location.href = "<?php echo base_url("ideazone-all"); ?>";
		}, 1000);
		}else if(msg==3){
				$('.otp-stuts').html('<span class="alert-danger">Wrong entry</span>');
		}
		
    }
  });
});
});
</script>
<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script> 
</body>	
</html>
