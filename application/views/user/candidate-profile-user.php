<?php $this->view('admin/user-header') ?>
	<section class="ideazone"> 
		<div class="container">
			<div class="row mb-10 hidden-sm hidden-xs">
				<div class="col-md-6">
					<h4 class="mt-0 mb-0">Candidate Profile</h4>
				</div>
				<div class="col-md-6 text-right">
					<button class="btn btn-info mb-0 mblock-btn">Request For Work</button>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<!-- Left Panel1 Start -->
					<div class="panel panel-default earnPanel">
					  <div class="panel-heading">Candidate Profile</div>
					  <div class="panel-body">
						<div class="profile-img-blk">
							<img src="<?php echo base_url(); ?>assets/images/user-pic.jpg" class="avatar img-circle" alt="avatar">
						</div>
						<ul class="noBG">
							<li>
								<h4>Name</h4>
								<p>Praveen Kothapally</p>
							</li>
							<li>
								<h4>Gender</h4>
								<p>Male</p>
							</li>
							<li>
								<h4>Mobile</h4>
								<p>9988665544</p>
							</li>
							<li>
								<h4>Age</h4>
								<p>28</p>
							</li>
							<li>
								<h4>Email</h4>
								<p><a href="mailto:praveen.kothapally@gmail.com" class="link">praveen.kothapally@gmail.com</a></p>
							</li>
							<li>
								<h4>Linkedin</h4>
								<p><a href="#" class="link">www.linkedin.com/in/praveen-kothapally</a></p>
							</li>
						</ul>
					  </div>
					</div>
					<!-- Left Panel1 End -->
				</div>
				<div class="col-md-5">
					<!-- Right Panel2 Start -->
					<div class="panel panel-default earnPanel">
					  <div class="panel-heading">Skill Details</div>
					  <div class="panel-body">
						<ul class="noBG">
							<li>
								<h4>Select Occupation</h4>
								<p>Graphic Designing</p>
							</li>
							<li>
								<h4>Related Skills</h4>
								<ul class="inline-list">
								  <li>UI Designing</li>
								  <li>UI Designing</li>
								  <li>UI Designing</li>
								  <li>UI Designing</li>
								  <li>UI Designing</li>
								  <li>UI Designing</li>
								</ul>
							</li>
							<li>
								<h4>Experience</h4>
								<p>9 Years</p>
							</li>
							<li>
								<h4>Locations</h4>
								<ul class="inline-list">
								  <li>Hyderabad</li>
								  <li>Hyderabad</li>
								</ul>
							</li>
							<li>
								<h4>Languages</h4>
								<ul class="inline-list">
								  <li>Telugu</li>
								  <li>English</li>
								  <li>Hindi</li>
								</ul>
							</li>
							<li>
								<h4>Work Timings</h4>
								<div class="row">
									<div class="col-xs-5">
										<p>Monday</p>
										<p>Friday</p>
										<p>Sunday</p>
									</div>
									<div class="col-xs-7">
										<p>11:30 - 14:20</p>
										<p>10:30 - 16:20</p>
										<p>23:30 - 04:20</p>
									</div>
								</div>
							</li>
							<li>
								<h4>My Price</h4>
								<div class="row">
									<div class="col-xs-5">
										<p>Short Term Work</p>
										<p>126 USD / Hour</p>
									</div>
									<div class="col-xs-7">
										<p>Long Term Work</p>
										<p><b>Non-Negotiable</b></p>
										<p><span class="font-w500">As Employee</span> : 20 - 200 USD</p>
										<p><span class="font-w500">As Partner :</span> 2 - 20 %</p>
									</div>
								</div>
							</li>
							<li>
								<h4>Competitive Advantage</h4>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
							</li>
							<li>
								<h4>My Portfolio</h4>
								<ul class="inline-list">
								  <li>Ui Profole.doc</li>
								  <li>Ui Profole.pdf</li>
								</ul>
							</li>
							<!--
                            <li class="text-right">
								<button class="btn btn-primary mb-0 btn-md">Interested</button>
								<button class="btn btn-info mb-0 btn-md">View Contact</button>
							</li> -->
						</ul>
					  </div>
					</div>
					<!--<p class="text-right"><a href="#" class="link visible-xs visible-sm mb-20">See More...</a></p>-->
					<!-- Middle Panel1 End -->
				</div>
				<div class="col-md-4">
					<!-- Right Panel1 Start -->
					<div class="panel panel-default sidePanel">
					  <div class="panel-heading">Feedback <span class="pull-right">
					  <input id="input-1" name="input-1" class="rating rating-loading" data-min="0" data-max="5" data-step="0.1" value="3" />
					  </span></div>
					  <div class="panel-body">
						<textarea cols="" rows="10" class="form-control" placeholder="write feedback..."></textarea>
						<button class="btn btn-primary mb-0 mt-10 pull-right">Submit</button>
					  </div>
					</div>
					<!-- Right Panel1 End -->					
				</div>
			</div>
		</div>
	</section>
	
		<?php $this->view('home-footer') ?>
		

	<!-- jQuery -->
	
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
	<script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
