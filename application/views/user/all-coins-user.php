	<?php $this->view('admin/user-header') ?>

	<section class="ideazone"> 
		<div class="container">
			<div class="row mb-20">
				<div class="col-md-6">
					<h4 class="mt-0 mb-0">Coins</h4>
				</div>
				<div class="col-md-6 text-right">
					<span class="mt-10 pull-right"><a href="#" class="link">Get Coins</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="<?php echo base_url('add-coins'); ?>" class="link pr-0">Add Coins</a></span>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<!-- Left white Panel Start -->
					<div class="white-block mb-30 hidden-sm hidden-xs">
						<h3><a href="#">Idea Zone</a></h3>					
						<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
						  <div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingOne">
							  <h4 class="panel-title">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								  Gain
								</a>
							  </h4>
							</div>
							<div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
							  <div class="panel-body">
								<ul class="acc-list">
									<li><a href="#">Graphic Designing</a></li>
									<li><a href="#">Invester</a></li>
									<li><a href="#">Entreprenuer</a></li>
									<li><a href="#">Invester</a></li>
									<li><a href="#">Entreprenuer</a></li>
									<li><a href="#">Invester</a></li>
								</ul>
							  </div>
							</div>
						  </div>
						  <div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingTwo">
							  <h4 class="panel-title">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								  Earn
								</a>
							  </h4>
							</div>
							<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
							  <div class="panel-body">
								<ul class="acc-list">
									<li><a href="#">Graphic Designing</a></li>
									<li><a href="#">Invester</a></li>
									<li><a href="#">Entreprenuer</a></li>
									<li><a href="#">Invester</a></li>
									<li><a href="#">Entreprenuer</a></li>
									<li><a href="#">Invester</a></li>
								</ul>
							  </div>
							</div>
						  </div>
						  <div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingThree">
							  <h4 class="panel-title">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								  Learn
								</a>
							  </h4>
							</div>
							<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
							  <div class="panel-body">
								<ul class="acc-list">
									<li><a href="#">Graphic Designing</a></li>
									<li><a href="#">Invester</a></li>
									<li><a href="#">Entreprenuer</a></li>
									<li><a href="#">Invester</a></li>
									<li><a href="#">Entreprenuer</a></li>
									<li><a href="#">Invester</a></li>
								</ul>
							  </div>
							</div>
						  </div>
						</div>						
					</div>
					<div class="mNav visible-xs visible-sm">
						<ul>
						  <li>
							<button class="btn" type="button">
								Idea Zone
						    </button>
						  </li>
						  <li>
							<button class="btn" type="button" id="mNav3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
								Learn
							<span class="caret"></span>
						    </button>
						    <ul class="dropdown-menu" aria-labelledby="mNav3">
								<li><a href="#" class="active">Graphic Designing</a></li>
								<li><a href="#">Invester</a></li>
								<li><a href="#">Entreprenuer</a></li>
								<li><a href="#">Invester</a></li>
								<li><a href="#">Entreprenuer</a></li>
								<li><a href="#">Invester</a></li>
							</ul>
						  </li>
						  
						  <li>
							<button class="btn" type="button" id="mNav2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
								Earn
							<span class="caret"></span>
						    </button>
						    <ul class="dropdown-menu" aria-labelledby="mNav2">
								<li><a href="#">Graphic Designing</a></li>
								<li><a href="#">Invester</a></li>
								<li><a href="#">Entreprenuer</a></li>
								<li><a href="#">Invester</a></li>
								<li><a href="#">Entreprenuer</a></li>
								<li><a href="#">Invester</a></li>
							</ul>
						  </li>
						  
						  <li>
							<button class="btn" type="button" id="mNav1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
								Gain
							<span class="caret"></span>
						    </button>
						    <ul class="dropdown-menu" aria-labelledby="mNav1">
								<li><a href="#" class="active">Graphic Designing</a></li>
								<li><a href="#">Invester</a></li>
								<li><a href="#">Entreprenuer</a></li>
								<li><a href="#">Invester</a></li>
								<li><a href="#">Entreprenuer</a></li>
								<li><a href="#">Invester</a></li>
							</ul>
						  </li>						  
						</ul>
					</div>
					<!-- Left white Panel End -->
				</div>
				<div class="col-md-9">
					<div class="row">
						<div class="col-md-6">
							<!-- Middle Panel1 Start -->
							<div class="panel panel-default earnPanel">
							  <div class="panel-heading">Total Coins (500)</div>
							  <div class="panel-body">
								<ul class="noBG">
									<li>
										<p>You got <b>10 Coins</b> for post in <b>Learn</b></p>										
									</li>
									<li>
										<p>You got <b>20 Coins</b> for post in <b>Ideazone</b></p>										
									</li>
									<li>
										<p>You got <b>100 Coins</b> for post in <b>Gain</b></p>										
									</li>
									<li>
										<p>You got <b>10 Coins</b> for post in <b>Learn</b></p>										
									</li>
									<li>
										<p>You got <b>10 Coins</b> for post in <b>Learn</b></p>										
									</li>
									<li>
										<p>You got <b>20 Coins</b> for post in <b>Ideazone</b></p>										
									</li>
									<li>
										<p>You got <b>100 Coins</b> for post in <b>Gain</b></p>										
									</li>
									<li>
										<p>You got <b>10 Coins</b> for post in <b>Learn</b></p>										
									</li>
								</ul>
							  </div>
							</div>
							<p class="text-right"><a href="#" class="link visible-xs visible-sm mb-20">See More...</a></p>
							<!-- Middle Panel1 End -->
						</div>
						<div class="col-md-6">
							<!-- Right Panel1 Start -->
							<div class="panel panel-default earnPanel">
							  <div class="panel-heading">Spendings (250)</div>
							  <div class="panel-body">
								<ul class="noBG">
									<li>
										<p>You Spent <b>50 Coins</b> to view <b>UX Designer</b> contact</p>										
									</li>
									<li>
										<p>You Spent <b>100 Coins</b> to view <b>Invester</b> contact</p>										
									</li>
									<li>
										<p>You Spent <b>50 Coins</b> to view <b>Invester</b> contact</p>										
									</li>
									<li>
										<p>You Spent <b>50 Coins</b> to view <b>UI Developer</b> contact</p>											
									</li>
									<li>
										<p>You Spent <b>50 Coins</b> to view <b>UX Designer</b> contact</p>										
									</li>
									<li>
										<p>You Spent <b>100 Coins</b> to view <b>Invester</b> contact</p>										
									</li>
									<li>
										<p>You Spent <b>50 Coins</b> to view <b>Invester</b> contact</p>										
									</li>
									<li>
										<p>You Spent <b>50 Coins</b> to view <b>UI Developer</b> contact</p>											
									</li>
								</ul>
							  </div>
							</div>
							<!-- Right Panel1 End -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
		<?php $this->view('home-footer') ?>
		<script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
	
	<!-- View Contact Modal --> 
	<div id="viewContact" class="modal fade" role="dialog">
		<div class="modal-dialog modal-sm">		
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">×</button>
					<h5 class="modal-title">View Contat Details</h5>
				</div>
				<div class="modal-body">
					<h6>Contact Price: <span class="coins"><i class="fa fa-coins"></i>50 Coins</span></h6>
					<hr class="divider" />
					<p class="text-right">
						<button class="btn btn-initiate">Proceed</button>
					</p>
					<div id="contactDetails">
						<h6>Contact Details:</h6>
						<p><b>Name:</b> Mr.Vykuntam Manuka <br />
						   <b>Mobile:</b> 09325168478 <br />
						   <b>E-mail:</b> <a href="mailto:hello@123.com" class="link">hello@123.com</a></p>
					</div>
					<div id="addCoins">
						<h6>Add Coins:</h6>
						<p>You need: <span class="coins">50 coins</span> <br />
						   Available Coins: <span class="coins">20 Coins</span><br />							
						   Continue to: <span class="coins">30 Coins</span></p>
						<hr class="divider" />
						<p class="text-right">
							<button class="btn btn-initiate">Add Coins</button>
						</p>
					</div>
				</div>
			</div>		
		</div>
	</div>
	<!-- View Contact Modal -->
	
	<script>
	$.fn.stars = function() {
        return $(this).each(function() {
            var rating = $(this).data("rating");
            var numStars = $(this).data("numStars");
            var fullStar = new Array(Math.floor(rating + 1)).join('<i class="fa fa-star"></i>');
            var halfStar = ((rating%1) !== 0) ? '<i class="fa fa-star-half-empty"></i>': '';
            var noStar = new Array(Math.floor(numStars + 1 - rating)).join('<i class="fa fa-star-o"></i>');
            $(this).html(fullStar + halfStar + noStar);
        });
    }
    $('.stars').stars();
	</script>
	
