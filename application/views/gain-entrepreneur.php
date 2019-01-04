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
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
    <!-- Material Design Lite -->
    <script src="<?php echo base_url(); ?>assets/material/material.min.js"></script>
    
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/material/material.indigo-pink.min.css">
    <!-- Material Design Lite -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/normalize.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/stylesheet.css">
    <link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet">

    <script src="<?php echo base_url(); ?>assets/js/standalone/selectize.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/index.js"></script>
    <script>
        $(document).ready(function() {
            var height = $('.form-box').height();
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
                    <a class="page-scroll" href="#"><img src="<?php echo base_url(); ?>assets/images/logo.svg" class="logo"/></a>
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
            <a href="<?php echo base_url(); ?>Earn" class="">Earn</a>
            <a href="<?php echo base_url(); ?>Gain" class="active">Gain</a>
        </div>
    </nav>
    <section id="title-bar">
        <div class="container">
            <div class="">
                <div class="header-content">
                    <div class="header-content-inner">
                        <h2>GAIN</h2>
                        <hr>
                        <h3>Only Profits Gain, Not Wages</h3>
                    </div>
                    <div class="btn-group col-md-6 col-md-offset-3">
                        <button type="button" class="btn btn-primary active">Entrepreneur</button>
                        <a href="<?php echo base_url(); ?>Gain/Investor">
                            <button type="button" class="btn btn-primary">Investor</button>
                        </a>
                    </div>

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
                            <p>Get upto bonus of 100 coins by
                                <br> creating your profile <img src="<?php echo base_url(); ?>assets/images/info.svg" id="tt3"></p>
                            <div class="mdl-tooltip mdl-tooltip--right" data-mdl-for="tt3">
                                <div class="tooltip-box">
                                    <h3>Entrepreneur form coins</h3>
                                    <div class="tt-inner">
                                        <div class="tt-left">
                                            <div class="tt-title">Field</div>
                                            <div class="tt-content">
                                                <ul class="br">
                                                    <li>Industry </li>
                                                    <li>Location</li>
                                                    <li>Expertise</li>
                                                    <li>Experience</li>
                                                    <li>Budget</li>
                                                    <li>Preferred business</li>
                                                </ul>
                                            </div>
                                            <div class="tt-ftr">Total Coins</div>
                                        </div>
                                        <div class="tt-right">
                                            <div class="tt-title">Coins</div>
                                            <div class="tt-content">
                                                <ul>
                                                    <li>10</li>
                                                    <li>20</li>
                                                    <li>20</li>
                                                    <li>20</li>
                                                    <li>20</li>
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
                                    <img src="<?php echo base_url(); ?>assets/images/ChooseOpportunity-w.svg"><b></b>
                                    <img src="<?php echo base_url(); ?>assets/images/UseViewham.svg"><b></b>
                                    <img src="<?php echo base_url(); ?>assets/images/BuildBusiness.svg">
                                </div>
                                <div class="desc-section">
                                    <ul>
                                        <li>Create Entrepreneur Profile with genuine Information</li>
                                        <li>Choose Opportunity with proper vision & plan</li>
                                        <li>Use VIEWHAM To gather human & financial resources</li>
                                        <li>Build Business with Passion</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-12 col-xs-12 form-box">
                            <!-- Tabs -->
                            <div class="row">
                                <div class="top-btn">
                                    <a class="active" >Entrepreneur <?php $msgg = $this->session->flashdata('msg'); 
						if($msgg){	?>
						<?php echo $msgg; ?></p><?php } ?></a>
                                </div>
                                <!-- Accordions -->
	<div class="content">
		<form action="" method="post">

			<!--<input name="industry" class="mdl-textfield__input" type="text" id="industry">-->
			<label class="lsample" for="sample3">Industry</label>
			<select id="select-industry" name="industry" class="mb-10" placeholder="Select Industry">
				<option value="">Select a Industry...</option>
				<?php foreach($industry as $p){ ?>
					<option value="<?php echo $p['ID']; ?>">
						<?php echo $p['SDESC']; ?>
					</option>
					<?php } ?>

			</select>

			<script>
				$('#select-industry').selectize();
			</script>

			<label class="lsample" for="sample3">Association Role</label>
			<select id="select-state" name="roles[]" multiple class="mb-10" style="width: 100%;margin-bottom: 10px !important;" placeholder="Association Role">

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
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label input-box">
				<input name="nature" class="mdl-textfield__input" type="text" id="sample3">
				<label class="mdl-textfield__label" for="sample3">Nature of Business</label>
			</div>
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

			<label>Budget <sup class="red">*</sup></label>
			<div class="grey-form-box">
				<div class="day-col">
					<select name="currency" class="form-control medium">
						
						<option value="Indian">Indian</option>
						<option value="USD">USD</option>
						<option value="UK">UK</option>
					</select>
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label input-box w-120">
						<input name="min_budget" class="mdl-textfield__input" type="text" id="min_budget">
						<label class="mdl-textfield__label" for="sample3">Min Budget</label>
					</div><span>-</span>
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label input-box w-120">
						<input name="max_budget" class="mdl-textfield__input" type="text" id="max_budget">
						<label class="mdl-textfield__label" for="sample3">Max Budget</label>
					</div>
				</div>
			</div>
			<div class="clear"></div>
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
	<?php $this->view('home-footer') ?>
<style>
    .lsample {
        color: #515151;
        font-weight: normal;
        font-size: 14px;
    }
</style>