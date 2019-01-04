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
		
		<!-- Custom Fonts -->
		<link href="<?php echo base_url(); ?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<!-- Plugin CSS -->
		<link href="<?php echo base_url(); ?>assets/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
		<!-- Theme CSS -->
		<link href="<?php echo base_url(); ?>assets/css/creative.min.css" rel="stylesheet">
		<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
		<!-- Material Design Lite -->
		<script src="<?php echo base_url(); ?>assets/material/material.min.js"></script>
		
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/material/material.indigo-pink.min.css">
		<!-- Material Design Lite -->
		<link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet">
		
				<!-- file upload-2 -->
		
<link href="<?php echo base_url(); ?>assets/file/jquery.growl.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>assets/file/src/fileup.css" rel="stylesheet" type="text/css">
<!-- End file upload-2 -->

    <!--  Autocomplete Start -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/normalize.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/stylesheet.css">
    <script src="<?php echo base_url(); ?>assets/js/standalone/selectize.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/index.js"></script>
    <!-- Autocomplete End -->
	<script>
	$( document ).ready(function() {
		var height=$('.form-box').height();
		var rheight = height - 60
		$('.blue-box').height(rheight);
	});	
	</script>
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
	<nav class="nav-bar">
		<div class="container">
			<a href="<?php echo base_url(); ?>Ideazone" class="">Idea Zone</a>
			<a href="<?php echo base_url(); ?>Learn" class="">Learn</a>
			<a href="<?php echo base_url(); ?>Earn" class="active">Earn</a>
			<a href="<?php echo base_url(); ?>Gain" class="">Gain</a>
		</div>
	</nav>
	<section id="title-bar">
		<div class="container">
			<div class="">
				<div class="header-content">
					<div class="header-content-inner">
						<h2>EARN</h2>
						<hr>
						<h3>Earn what skills are worth</h3>
					</div>
					<div class="btn-group col-md-6 col-md-offset-3">
						<button type="button" class="btn btn-primary active">Create My Skill Profiles</button>
			<a href="<?php echo base_url(); ?>Earn/Mediator">			
						<button type="button" class="btn btn-primary">Add other skill as Mediator</button></a>
					</div>
					
				</div>
			</div>
			<div class="row header-content">
				<h3><?php $msgg = $this->session->flashdata('msg'); 
				if($msgg){	?><br><br>
				<?php echo $msgg; ?></p><?php } ?>
				</h3>
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
			<p>Get upto bonus of 100 coins by<br> creating your  profile <img src="<?php echo base_url(); ?>assets/images/info.svg" id="tt3"></p>
		<div class="mdl-tooltip mdl-tooltip--right" data-mdl-for="tt3">
			<div class="tooltip-box">
				<h3>hobby form coins</h3>
				<div class="tt-inner">
					<div class="tt-left">
						<div class="tt-title">Field</div>
						<div class="tt-content">
							<ul class="br">
								<li>Skill</li>
								<li>Sub-Skill</li>
								<li>Location</li>
								<li>Experience</li>
								<li>Portfolio</li>
								<li>Career Objective</li>
								<li>Work Time</li>
								<li>Work Short time</li>
								<li>Work Long time</li>
							</ul>
						</div>
						<div class="tt-ftr">Total Coins</div>
					</div>
					<div class="tt-right">
						<div class="tt-title">Coins</div>
						<div class="tt-content">
							<ul>
								<li>05</li>
								<li>10</li>
								<li>10</li>
								<li>10</li>
								<li>15</li>
								<li>15</li>
								<li>15</li>
								<li>10</li>
								<li>10</li>
							</ul>
						</div>
						<div class="tt-ftr">100</div>
					</div>
				</div>
			</div>
		</div>
		<div class="flow-section">
			<h3>How it Works</h3>
			<hr>
				<div class="img-section">
					<img src="<?php echo base_url(); ?>assets/images/CreateProfile-w.svg"><b></b>
					<img src="<?php echo base_url(); ?>assets/images/MaintainTrustFactor-w.svg"><b></b>
					<img src="<?php echo base_url(); ?>assets/images/Showinterest_getHired.svg"><b></b>
					<img src="<?php echo base_url(); ?>assets/images/PerformAndEarn.svg">
				</div>
				<div class="desc-section">
					<ul>
						<li>Create Profile with genuine Information</li>
						<li>Maintain Trust Factor More than 4 star</li>
						<li>Show interest & get Hired by buying contacts</li>
						<li>Perform & Earn by Satisfying Clients</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-md-8 col-sm-12 col-xs-12 form-box">
			<!-- Tabs -->
			<div class="row">
			<div class="top-btn">
				<a class="" href="<?php echo base_url(); ?>Earn/Profile">Create Professinal Profile</a>
				<a class="active" href="#">Create Hobby Profile</a>
			</div>
			<!-- Accordions -->
			<div class="content">
			<form action="" method="post" enctype="multipart/form-data">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label input-box">
						
						<label class="lsample" for="sample3">Hobby Skill</label>
			<select id="hobbyskill" name="hobbyskill"  class="mb-10" style="width: 100%;margin-bottom: 10px !important;" placeholder="Primary skill" required>

			<option value="">Hobby Skill</option>
			<?php foreach($skils as $p){ ?>
			<option value="<?php echo $p['ID']; ?>">
			<?php echo $p['SDESC']; ?>
			</option>
			<?php } ?>

			</select>
			<script>
				$('#hobbyskill').selectize({
					});
			</script>
					</div>
					<label class="lsample" for="sample3">Related Skills</label>
					<select id="select-state" name="roles[]" multiple class="mb-10" style="width: 100%;margin-bottom: 10px !important;" placeholder="Related Skills" required>

					<option value="">Select a Role...</option>
					<?php foreach($skils as $p){ ?>
					<option value="<?php echo $p['ID']; ?>">
					<?php echo $p['SDESC']; ?>
					</option>
					<?php } ?>

					</select>
					<script>
					$('#select-state').selectize({
					maxItems: 5
					});
					</script>
<label class="lsample" for="sample3">Experience</label>			
<select id="select-experience" name="experience" class="mb-10"  placeholder="Select Experience">
                            
                            <option value="0">Fresher</option>
                            <option value="1">0-1 Years</option>
                            <option value="2">1-2 Years</option>
                            <option value="3">2-3 Years</option>
                            <option value="4">3-4 Years</option>
                            <option value="5">4-5 Years</option>
                            <option value="6">5-6 Years</option>
                            <option value="7">6-7 Years</option>
                            <option value="8">7-8 Years</option>
                            <option value="9">8-9 Years</option>
                            <option value="10">More then 10 Years</option>
                        </select>
						<script>
					$('#select-experience').selectize();
				</script>
			<label class="lsample" for="sample3">Location</label>
			<select id="select-location" name="location" class="mb-10" placeholder="Select location">
			<option value="">Select a location</option>
			<?php foreach($locations as $p){ ?>
			<option value="<?php echo $p['c_code']; ?>">
			<?php echo $p['c_name']; ?>
			</option>
			<?php } ?>

			</select>

			<script>
			$('#select-location').selectize();
			</script>
		<label>Work Timings</label>
		<div class="grey-form-box">
		<div class="day-col">
		<label>Select Day</label>
	
	
	<?php if(!empty($_GET)){?>
	<?php $dday = $_GET['day']; ?>
	<select class="form-control medium" name="day" id="day">
	<option value="<?php echo $dday;?>"><?php echo $dday;?></option>
	
	</select>
		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label input-box small">
							<input class="mdl-textfield__input" value="<?php echo $_GET['from']; ?>" type="text" id="fromtime">
							<label class="mdl-textfield__label" for="sample3">00:00</label>
						</div><span>-</span>
						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label input-box small">
							<input class="mdl-textfield__input" value="<?php echo $_GET['to']; ?>"  type="text" id="totime">
							<input value="update"  type="hidden" id="updates">
							<input value="<?php echo $_GET['id']; ?>"  type="hidden" id="idd">
							<label class="mdl-textfield__label" for="sample3">00:00</label>
						</div>
	<button id="addday" type="button" class="btn btn-primary small">Update</button>
	
		
<?php	}else{ ?>
<select class="form-control medium" name="day" id="day">
	<option value="Monday">Monday</option>
	<option value="Tuesday">Tuesday</option>
	<option value="Wednesday">Wednesday</option>
	<option value="Thursday">Thursday</option>
	<option value="Friday">Friday</option>
	<option value="Saturday">Saturday</option>									
	<option value="Sunday">Sunday</option>
	</select>
	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label input-box small">
							<input class="mdl-textfield__input" type="text" id="fromtime">
							<label class="mdl-textfield__label" for="sample3">00:00</label>
						</div><span>-</span>
						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label input-box small">
							<input class="mdl-textfield__input"  type="text" id="totime">
							<label class="mdl-textfield__label" for="sample3">00:00</label>
						</div>
	<button type="button" id="addday" class="btn btn-primary small">Add</button>

<?php }?>
</div>
	<div id="people"></div>
	
	
</div>
				<label>My Price <sup class="red">*</sup></label>
				<div class="grey-form-box">
	<div class="short-term">
		<label>Short Term Work</label>
		<select name="currency" id="select-country" class="mb-10 medium" placeholder="Select Currency">
									<option value="">Select a Currency</option>
									<option value="INR">India</option>
									<option value="USD">U.S. Dollar</option>
									<option value="EUR">European Euro</option>
									<option value="JPY">Japanese </option>
									<option value="GBP">British Pound </option>
									<option value="CHF">Swiss Franc </option>
									<option value="CAD">Canadian Dollar </option>
									<option value="AUD">Australian </option>
									<option value="ZAR">South African Rand </option>
		
		</select>	
<script>
$('#select-country').selectize();
</script>		
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label input-box small">
			<input class="mdl-textfield__input" type="text" name="price" id="price" required>
			<label class="mdl-textfield__label" for="sample3">Price</label>
						</div>
		<select name="price_per" class="form-control small" required>
		<option value="Hour">Hour</option>
		<option value="Day">Day</option>
		
		</select>
	</div>
	<div class="long-term">
		<label>Long Term Work</label>
		<div class="radio-grp">
		 <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
      <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1">
      <span class="mdl-radio__label">Negotiable</span>
    </label>
    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2">
      <input type="radio" id="option-2" class="mdl-radio__button" name="options" value="2" checked>
      <span class="mdl-radio__label">Non-Negotiable</span>
    </label>
										</div>
				<div class="asempss"><div class="as-emp">As Employee
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label input-box small">
									<input class="mdl-textfield__input" type="number" name="min_emplye" id="min_emplye">
									<label class="mdl-textfield__label" for="sample3">Min</label>
								</div>
								<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label input-box small">
									<input class="mdl-textfield__input" name="max_emplye" type="number" id="max_emplye">
									<label class="mdl-textfield__label" for="sample3">Max</label>
								</div>
				</div>
				<div class="as-part">As Partner
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label input-box small">
									<input onkeyup="handleChange(this);" class="mdl-textfield__input" name="min_partner" type="number" id="min_partner">
									<label class="mdl-textfield__label" for="sample3">Min %</label>
								</div>
								<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label input-box small">
									<input onkeyup="handleChange(this);" class="mdl-textfield__input" name="max_partner" type="number" id="max_partner">
									<label class="mdl-textfield__label" for="sample3">Max %</label>
								</div>
				</div>
				</div>
									</div>
								</div>
								<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label input-box">
					<input class="mdl-textfield__input" name="competitive" type="text" id="competitive">
										<label class="mdl-textfield__label" for="sample3">Competitive Advantage</label>
									</div>
								<div class="fileup-btn"><div class="attach">Attach your Portfolio <img src="<?php echo base_url(); ?>assets/images/attach.svg">
       
       <input type="file" id="files" name="avatar[]" multiple></div>
    </div>

    

        
								<div class="attach-list mb-20">
								<div id="selectedFiles"></div>
								</div>
								
				<?php if($this->session->userdata('user')){?>
					<button type="submit" class="btn btn-primary sub pull-right">Submit</button>
					<?php }else{?>

					<button id="ssigninModal" type="button" class="btn btn-primary active" data-toggle="modal" data-target="#signinModal">Login & Continue</button>

					<?php }?>
					<button type="submit" class="form-sub btn btn-primary sub pull-right">Submit</button>
					</form>
							</div>  
							
							</div>  
						</div>
					</div>
				</div>											
			</div>
		</div>
	</section>	
	<?php $this->view('loginjs') ?>
		
<script>
$("#addday").click(function(){
	//alert('sads');
	var day = $('#day').val();
	var totime = $('#totime').val();
	var fromtime = $('#fromtime').val();
	var uid = $('#uid').val();
	var formname = $('#formname').val();
	var updates = $('#updates').val();
	if(updates == 'update'){
	var url = '<?php echo base_url('Earn/Updateusertimings'); ?>';
	var idd = $('#idd').val();
	}else{
	var url = '<?php echo base_url('Earn/Createusertimings'); ?>';
	var idd ="";
	}
	if( !fromtime ) {
	alert('please enter time');
		return false;
    }
	if( !totime ) {
	alert('please enter time');
	return false;
    }
	
$.ajax({
	
    type: "POST",
    data: {
      "totime": totime, "fromtime": fromtime, "day": day, "idd":idd
    },
    url: url,
    dataType: "json",
    success: function(JSONObject) {
		if(JSONObject == 1){
			 window.location.replace("<?php echo base_url('Earn/Myhobby'); ?>");
		}
      var peopleHTML = "";

      // Loop through Object and create peopleHTML
      for (var key in JSONObject) {
        if (JSONObject.hasOwnProperty(key)) {
          peopleHTML += "<div class='dayslist'>";
            peopleHTML += "<div class='day'>" + JSONObject[key]["day"] + "</div>";
            peopleHTML += "<div class='time'>" + JSONObject[key]["from_time"] + "-" + JSONObject[key]["to_time"] + "</div>";
            peopleHTML += "<div class='edit'>" + "<a style='color: green;' href='<?php echo base_url('Earn/Myhobby'); ?>?day="+ JSONObject[key]["day"] +"&from="+ JSONObject[key]["from_time"] +"&to="+JSONObject[key]["to_time"]+"&id="+ JSONObject[key]["id"] +"' class='editc'>Edit</a>" + "</div>";
            peopleHTML += "<div class='delete'>" + "<input type='hidden' id='id" + JSONObject[key]["id"] +"' value='"+ JSONObject[key]["id"] +"'><a href='<?php echo base_url('Earn/Usertimedelete'); ?>/" + JSONObject[key]["id"] +"'> Delete </a>" + "</div>";
          peopleHTML += "</div>";
        }
      }

      // Replace table’s tbody html with peopleHTML
      $("#people").html(peopleHTML);
    }
  });

});

/////// get uesr tinings

$(document).ready(function(){
//	alert('dddddd')
	var url = '<?php echo base_url('Earn/Getusertimings'); ?>';
	
$.ajax({
    type: "POST",
    url: url,
    dataType: "json",
    success: function(JSONObject) {
      var peopleHTML = "";

      // Loop through Object and create peopleHTML
      for (var key in JSONObject) {
        if (JSONObject.hasOwnProperty(key)) {
          peopleHTML += "<div class='dayslist'>";
            peopleHTML += "<div class='day'>" + JSONObject[key]["day"] + "</div>";
            peopleHTML += "<div class='time'>" + JSONObject[key]["from_time"] + "-" + JSONObject[key]["to_time"] + "</div>";
            peopleHTML += "<div class='edit'>" + "<a style='color: green;' href='<?php echo base_url('Earn/Myhobby'); ?>?day="+ JSONObject[key]["day"] +"&from="+ JSONObject[key]["from_time"] +"&to="+JSONObject[key]["to_time"]+"&id="+ JSONObject[key]["id"] +"' class='editc'>Edit</a>" + "</div>";
            peopleHTML += "<div class='delete'>" + "<input type='hidden' id='id" + JSONObject[key]["id"] +"' value='"+ JSONObject[key]["id"] +"'><a style='color: red;' href='<?php echo base_url('Earn/Usertimedelete'); ?>/" + JSONObject[key]["id"] +"'> Delete </a>" + "</div>";
          peopleHTML += "</div>";
        }
      }

      // Replace table’s tbody html with peopleHTML
      $("#people").html(peopleHTML);
    }
  });

});

</script>

		
<script>
     var selDiv = "";
    var storedFiles = [];
    
    $(document).ready(function() {
        $("#files").on("change", handleFileSelect);
        
        selDiv = $("#selectedFiles"); 
        $("#myForm").on("submit", handleForm);
        
        $("body").on("click", ".selFile", removeFile);
    });
        
    function handleFileSelect(e) {
        var files = e.target.files;
        var filesArr = Array.prototype.slice.call(files);
        filesArr.forEach(function(f) {          

            if(!f.type.match("image.*")) {
                return;
            }
            storedFiles.push(f);
            
            var reader = new FileReader();
            reader.onload = function (e) {
                var html = "<div class='attach-item '>" +f.name+ "<a class='x-delete selFile'>x</a></div>";
                selDiv.append(html);
                
            }
            reader.readAsDataURL(f); 
        });
        
    }
        
    function handleForm(e) {
        e.preventDefault();
        var data = new FormData();
        
        for(var i=0, len=storedFiles.length; i<len; i++) {
            data.append('files', storedFiles[i]); 
        }
        
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'handler.cfm', true);
        
        xhr.onload = function(e) {
            if(this.status == 200) {
                console.log(e.currentTarget.responseText);  
                alert(e.currentTarget.responseText + ' items uploaded.');
            }
        }
        
        xhr.send(data);
    }
        
    function removeFile(e) {
        var file = $(this).data("file");
        for(var i=0;i<storedFiles.length;i++) {
            if(storedFiles[i].name === file) {
                storedFiles.splice(i,1);
                break;
            }
        }
        $(this).parent().remove();
    }
    </script>
<style>
.selectize-dropdown.single.demo-default,
.selectize-dropdown.multi.mb-10 {
	width: 100% !important;
	top: 37px !important;
}
.selectize-dropdown.single.mb-10 {
top: 35px !important;
width: 100% !important;
}
.lsample {
	color: #515151;
	font-weight: normal;
	font-size: 14px;
}
</style>	
<script>
$("#option-1").click(function(){
    
	$(".asempss").hide();
});	
$("#option-2").click(function(){
    
	$(".asempss").show();
});	
  function handleChange(input) {
    if (input.value < 0) input.value = 0;
    if (input.value > 100) input.value = 100;
  }
</script>	
		<?php $this->view('home-footer') ?>
												