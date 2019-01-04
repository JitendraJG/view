<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		
		<title>. . : : Viewham : : . .</title>
		<link rel="icon" href="<?php echo base_url()?>favicon.png" type="image/gif">
	
	<script src="https://cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		
		
		<link href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		
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
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/normalize.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/stylesheet.css">
    <script src="<?php echo base_url(); ?>assets/js/standalone/selectize.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/index.js"></script>
		<!-- Material Design Lite -->
		
		<script src="<?php echo base_url(); ?>assets/material/material.min.js"></script>
		<script src="<?php echo base_url(); ?>assets//material/magicsuggest.js"></script>
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/material/material.indigo-pink.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/star-rating.min.css">
		<!-- Material Design Lite -->
		<link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		
		
		
		
		
	</head>
	<body><?php $session_user = $this->session->userdata('user');  
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
<!--	<nav class="nav-bar">
		<div class="container">
			<a href="<?php echo base_url(); ?>Ideazone" class="active">Idea Zone</a>
			<a class="">Learn</a>
			<a class="">Earn</a>
			<a class="">Gain</a>
		</div>
	</nav>-->
	<section id="title-bar" style="margin-top: 64px;">
		<div class="container">
			<div class="header-content">
				<div class="header-content-inner">
					<h2>IDEA ZONE</h2>
					<hr>
					<h3>Ideas live  Forever</h3>
				</div>
				<div class="btn-group col-md-6 col-md-offset-3">
					
					<button type="button" onclick="javascript:location.href='<?php echo base_url('business-ideas'); ?>'" class="btn btn-primary" >View Business Ideas</button>
					<button type="button" class="btn btn-primary active" >Post a Business Idea</button>
				</div>
			</div>
		</div>
	</section>
<?php $this->view('signin-signupmodel') ?>

<section class="form-section"> 
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
				<div class="row">
					<div class="col-md-4 col-sm-12 col-xs-12 blue-box">
						<!--<p>Get upto bonus of 100 coins by<br> creating your  profile <img src="<?php echo base_url(); ?>assets/images/info.svg" id="tt3"></p>-->
						
						<div class="flow-section">
							<h3>How it Works</h3>
							<hr>
							<div class="img-section">
								<img src="<?php echo base_url(); ?>assets/images/postBusiness.svg"><b></b>
								<img src="<?php echo base_url(); ?>assets/images/developBusiness.svg"><b></b>
								<img src="<?php echo base_url(); ?>assets/images/UseViewham.svg"><b></b>
								<img src="<?php echo base_url(); ?>assets/images/executePlan.svg">
							</div>
							<div class="desc-section">
								<ul>
									<li>Post a Business Idea For Validation</li>
									<li>Develop Business Ideas with Proper Vision And Plan</li>
									<li>Use VIEWHAM To Gather Human & Financial Services</li>
									<li>Execute Plan  with Passion</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-8 col-sm-12 col-xs-12 form-box">
						<!-- Tabs -->
						<div class="row">
							<div class="top-btn">
								<a class="active">Post a Business Idea
								<?php $msgg = $this->session->flashdata('msg'); 
						if($msgg){	?>
						<?php echo $msgg; ?></p><?php } ?></a>
								
							</div>
							<!-- Accordions -->
				<div class="content">
		<form id="post-idea" action="" method="post">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label input-box">
					
					<textarea onkeyup="textAreaAdjust(this)" style="overflow:hidden" class="mdl-textfield__input" id="title" name="title" maxlength="180" required></textarea>

					<label class="mdl-textfield__label" for="title">Idea Title <sup class="red">*</sup></label>
				</div>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label input-box">
				<label class="lsample" for="title">Industry <sup class="red">*</sup></label>
					<select style="width:100%" id="select-industry" name="industry" class="e2_2ss demo-default" placeholder="Select Industry" required>
                                            <option value="">Select a Industry...</option>
                                            <?php foreach($industry as $p){ ?>
                                                <option value="<?php echo $p['ID']; ?>">
                                                    <?php echo $p['SDESC']; ?>
                                                </option>
                                                <?php } ?>

                                        </select>

                     		<script>
        $(document).ready(function() { 
		
$('.e2_2ss').selectize({
					});
});
    </script>                  
					
					
				</div>
					<label class="" for="description">Description</label>
					<div class="" style="margin-bottom:10px;">
					
					<textarea class="mdl-textfield__input content2" rows="3" name="description" id="editor1"  required></textarea>
						
					</div>
					<label>Approx Investment <sup class="red">*</sup></label>
					<div class="grey-form-box">
						<div class="day-col">
					<select class="medium form-control currencyintitate " name="currency" id="currency" required>
									<option value="">Select</option>
									<option value="INR">India(₹)</option>
									<option value="USD">U.S. Dollar($)</option>
									<option value="EUR">European Euro(€)</option>
									<option value="JPY">Japanese (¥)</option>
									<option value="GBP">British Pound (£)</option>
									<option value="CHF">Swiss Franc (SFr)</option>
									<option value="CAD">Canadian Dollar (C$)</option>
									<option value="AUD">Australian (A$)</option>
									<option value="ZAR">South African Rand (R)</option>
									
								</select>
								
							</select>
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label input-box w-120">
						<input class="mdl-textfield__input"  type="number" name="min_invest" id="min_invest" required>
						<label class="mdl-textfield__label" for="sample3">Min Investment</label>
							</div><span class="hidden-xs">-</span>
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label input-box w-120">
					<input class="mdl-textfield__input" type="number" name="max_invest" id="max_invest"  required>
					<label class="mdl-textfield__label" for="sample3">Max Investment</label>
							</div>
							
						</div>
					</div>
					<label>Approx Returns <sup class="red">*</sup></label>
					<div class="grey-form-box">
						<div class="day-col">
							<select class="medium form-control returns " name="returns_type" id="returns_type">
									<option value="">Select</option>
									<option value="Daily">Daily</option>
									<option value="Weekly">Weekly</option>
									<option value="Monthly">Monthly</option>
									<option value="Yearly">Yearly </option>
								</select>
								
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label input-box w-120">
				<input class="mdl-textfield__input" type="number" name="min_return" id="min_return" required>
				<label class="mdl-textfield__label" for="sample3">Min Returns</label>
				</div><span class="hidden-xs">-</span>
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label input-box w-120">
				<input  class="mdl-textfield__input" type="number" name="max_return" id="max_return" required>
				<label class="mdl-textfield__label" for="sample3">Max Returns</label>
			</div>														</div>
					</div>
					<label>Breakeven Time <sup class="red">*</sup></label>
					<div class="grey-form-box">
						<div class="day-col">
					<select class="medium form-control breakeven" name="breakeven_type" id="breakeven_type" required>
					<option value="">Select</option>
					<option value="Days">Days</option>
					<option value="Months">Months</option>
					<option value="Years">Years </option>
					</select>
					
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label input-box w-120">
					<input class="mdl-textfield__input" type="number" name="breakeven_min" id="breakeven_min" required>
					<label class="mdl-textfield__label" for="sample3">Min </label>
				</div><span class="hidden-xs">-</span>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label input-box w-120">
			<input class="mdl-textfield__input" type="number" name="breakeven_max" id="breakeven_max" required>
			<label class="mdl-textfield__label" for="sample3">Max </label>
							</div>		</div>
					</div>
					<label>Resources Required <sup class="red">*</sup></label>
					<div class="grey-form-box">
					
                <div id="field0qq">
                <div class="skillsadds">
						<div id="" class="skillsadd  day-col" style="width: 75%;float: left;">
							
							<select  placeholder="Select Skill" class="combobox  e2_2 medium" name="resourse[]" >
							<option value=''>Select Skill</option>
							<?php foreach($skils as $ind){ ?>
							<option  value="<?php echo $ind['ID']; ?>"><?php echo $ind['SDESC']; ?></option>
							<?php } ?>
							</select>
							
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label input-box w-120">
							<input class="form-control mdl-textfield__input" name="rs_qnty[]" type="number" id="sample3">
								
							</div><span class="glyphicon glyphicon-remove text-danger"></span>
							
						</div>
						</div>
			<div class="add-sec">	<button type="button" id="addd" class="btn btn-primary small ">Add</button></div>
				</div>
						
					
						
			<script>
									function selectizeme(){
			$('.combobox').selectize({
				///create: true,
				//sortField: 'text'
			});
		}

								
								$('#addd').on('click',function(){
									
   $('.combobox').each(function(){ // do this for every select with the 'combobox' class
      if ($(this)[0].selectize) { // requires [0] to select the proper object
         var value = $(this).val(); // store the current value of the select/input
         $(this)[0].selectize.destroy(); // destroys selectize()
         $(this).val(value);  // set back the value of the select/input
      }
   });
   $('.skillsadds:first')
      .clone() // copy
      .insertAfter('.skillsadds:last'); // where
      selectizeme(); // reinitialize selectize on all .combobox
});
	   $(function(){ // same as $(document).ready()
			selectizeme(); // selectize all .combobox
	   });

$("#field0qq").on('click', '.glyphicon-remove', function () {
	var numItems = $('.skillsadds').length;
	if(numItems > 1){
	            $(this).closest(".skillsadds").remove();
				 
	}else{
		alert('Last Item Not Possible to remove ');
	}
    });	
								</script>

               
	
					</div>
					
					<label for="tags">Tags<sup class="red">*</sup></label>
					<div class="grey-form-box1">
							<select name="tags[]" id="e2_2" multiple="multiple" class="e2_2aaa mb-5" style="width:100%" tabindex="-1">
							<?php
							foreach($tags as $ind){   ?>
							<option  value="<?php echo $ind['id']; ?>" <?php if(!empty($_GET['name'])){
							if (in_array($ind['ID'], $marks)){  echo "selected";  } }?>><?php echo $ind['name']; ?></option>
							<?php } ?>
							</select>
							<script>
							$(document).ready(function() { 
							$(".e2_2aaa").select2({
								placeholder: "Search Tags"
							});
							});
							</script>
					
					</div>

					<button id="submit_form" type="button" class="btn btn-primary sub pull-right">Submit</button>
					
				</form></div>  
							
						</div>  
					</div>
				</div>
			</div>											
		</div>
	</div>
	<div id="MsgModal" class="modal fade" role="dialog">
				<div class="modal-dialog modal-sm">
			
				<!-- Modal content-->
			<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						
					</div>
					<div class="modal-body">
					
						<div class="msgs"></div>
					</div>
					<div class="modal-footer">
						
					</div>
				</div>
			
				</div>
			</div>
</section>	
<?php $this->view('loginjs') ?>
<script>

$(document).ready(function () {
$("#submit_form").click(function(){
var hoby = $('#title').val();
var industry = $('#select-industry').val();
if(!hoby){
	alert('Please Enter Title');
	return false;
}if(!industry){
	alert('Please Select Industry');
	return false;
}
var min_invest = $('#min_invest').val();
var max_invest = $('#max_invest').val();
var currency = $('#currency').val();
if(!currency){
	alert('Please Select currency');
	return false;
}
if(!min_invest || !max_invest){
	alert('Please Enter Min Invest, max Invest');
	return false;
}
if( parseInt($("#min_invest").val()) > parseInt($("#max_invest").val()) ){
alert('Min Invest is larger than Max Invest');
return false;
}
var min_return = $('#min_return').val();
var max_return = $('#max_return').val();
var returns_type = $('#returns_type').val();
if(!returns_type){
	alert('Please Select Returns Type');
	return false;
}
if(!min_return || !max_return){
	alert('Please Enter Min Returns, Max Returns');
	return false;
}
if( parseInt($("#min_return").val()) > parseInt($("#max_return").val()) ){
alert('Min Returns is larger than Max Returns');
return false;
}
var breakeven_min = $('#breakeven_min').val();
var breakeven_max = $('#breakeven_max').val();
var breakeven = $('#breakeven_type').val();
if(!breakeven){
	alert('Please Select Breakeven Type');
	return false;
}
if(!breakeven_min || !breakeven_max){
	alert('Please Enter Min Returns, Max Returns');
	return false;
}
if( parseInt($("#breakeven_min").val()) > parseInt($("#breakeven_max").val()) ){
alert('Breakeven min is larger than Breakeven Max');
return false;
}
for (instance in CKEDITOR.instances) 
{
    CKEDITOR.instances[instance].updateElement();
}

	var url = "<?php echo base_url('Ideazone/Postidea'); ?>";
	var formm = $('#post-idea')[0];

		// Create an FormData object 
        var data = new FormData(formm);
    $.ajax({
           type: "POST",
           url: url,
		   enctype: 'multipart/form-data',
		   data: data,
           processData: false,
           contentType: false,
           cache: false,
           timeout: 600000,
           success: function(data)
           {
               console.log(data);
			  
			   if(data=='nosess'){
				   $('#configformlog')[0].reset();
				   $('#signinModal').modal('toggle');
			   }else if(data=='duplicate'){
				    alert("Skills duplicate existed");
			   }else{
			 
			  $('.msgs').html('<p class="alert-success">Successfully Busssiness Idea Posted</p>')
			  $('#MsgModal').modal('toggle');
			  	 setTimeout(function() {
        
		 window.location.href = "<?php echo base_url("ideazone-all#tab"); ?>"+data;
		
    }, 5000);
			  
			   
			   }
           }
         });
});	

});

function textAreaAdjust(o) {
  o.style.height = "1px";
  o.style.height = (25+o.scrollHeight)+"px";
}
</script>
   <style>
   .add-sec  .btn-primary{
	   margin-top:20px;
   }
   #s2id_autogen6:nth-child(2){
	   display:none;
   }
  
        .lsample {
            color: #515151;
            font-weight: normal;
            font-size: 14px;
        }
		 .selectize-dropdown.single.demo-default,
        .selectize-dropdown.multi.mb-10 {
            width: 100% !important;
            top: 37px !important;
        }
		
div#s2id_currency {
    width: 33%;
}
div#s2id_autogen3 {
    width: 33%;
}
div#s2id_breakeven_type {
    width: 33%;
}
span.highlight {
    margin: 0px !important;
    font-size: 12px !important;
}
span.glyphicon.glyphicon-remove.text-danger {
    cursor: pointer;
	top: 6px;
}
.selectize-control.combobox.e2_2.medium.single {
    top: 13px;
}
a.richText-toolbar {
   color: black;
}
.richText-toolbar a {
    color: black;
}
a.richText-help {
    display: none !important;
    cursor: none !important;
}
div#mceu_13-body {
    display: none;
}
    </style>
 
	<?php $this->view('home-footer') ?>
<script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
		<script>
			CKEDITOR.replace( 'editor1',
	{
		toolbar :
		[
			{ name: 'basicstyles', items : [ 'Bold','Italic','Underline','Strike','Subscript','Superscript','-','RemoveFormat' ] },
			{ name: 'paragraph', items : [ 'NumberedList','BulletedList','-','Outdent','Indent','-','Blockquote','CreateDiv',
	'-','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock','-','BidiLtr','BidiRtl' ] },
			{ name: 'tools', items : [ 'Maximize','-' ] },
				{ name: 'insert', items : [ 'Image','Flash','Table','HorizontalRule','Smiley','SpecialChar','PageBreak','Iframe' ] },
				{ name: 'clipboard', items : [ 'Cut','Copy','Paste','PasteText','PasteFromWord','-','Undo','Redo' ] },
			
		]
	});
		</script>
<style>
div#mceu_30 {
    display: none;
}
</style>