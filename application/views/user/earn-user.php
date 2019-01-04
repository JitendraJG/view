<?php $this->view('admin/user-header') ?>
	<section class="ideazone"> 
		<div class="container">
			<div class="row mb-10 hidden-sm hidden-xs">
				<div class="col-md-6">
					<ol class="breadcrumb">
					  <li class="breadcrumb-item"><a href="<?php echo base_url('User/Dashboard'); ?>">Dashboard</a></li>
					  <li class="breadcrumb-item active"><a href="#">Earn</a></li>
					  <?php //print_r($skill_byid); ?>
					 <!--<li class="breadcrumb-item active"><?php print_r($skill_byid); ?></li>-->
					</ol>
				</div>
				<div class="col-md-6 text-right">
					<a href="<?php echo base_url('request-for-work'); ?>"><button class="btn btn-info mb-0 mblock-btn">Request For Work</button></a>
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
									<?php //print_r($skills_profiles);
									foreach($skills_profiles as $sp){ ?>
									<li><a href="<?php echo $sp['p_id']; ?>" class="active"><?php echo $sp['skill']; ?> </a></li>
									<?php }?>
									
								</ul>
								
							  </div>
							</div>
						  </div>
						  <div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingTwo">
							  <h4 class="panel-title">
								<a class="" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								  Earn
								</a>
							  </h4>
							</div>
							<div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
							  <div class="panel-body">
								<ul class="acc-list">
									<?php //print_r($skills_profiles);
									foreach($skills_profiles as $sp){ ?>
									<li><a href="<?php echo base_url('Earn/myprofiles/').$sp['p_id']; ?>" class="active">
									<?php
									$ind= $sp['skill'];
									$CI =& get_instance();
									$find = $CI->Skill($ind);
									echo $find['FDESC'];
									?> </a></li>
									<?php }?>
								</ul>
							  </div>
							</div>
						  </div>
						  <!--<div class="panel panel-default">
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
									<li><a href="#" class="active">Graphic Designing</a></li>
									<li><a href="#">Invester</a></li>
									<li><a href="#">Entreprenuer</a></li>
									<li><a href="#">Invester</a></li>
									<li><a href="#">Entreprenuer</a></li>
									<li><a href="#">Invester</a></li>
								</ul>
							  </div>
							</div>
						  </div>-->
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
								<li><a href="#" class="active">Graphic Designing</a></li>
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
                    <button class="btn btn-info mb-10 mblock-btn visible-xs visible-sm">Request For Work</button>
					<!-- Left white Panel End -->
				</div>
				<div class="col-md-9">
					<div class="row">
						<div class="col-md-7">
							<!-- Middle Panel1 Start -->
							<div class="panel panel-default earnPanel">
							  <div class="panel-heading">Proposals</div>
							  <div class="panel-body">
								<ul>
									<li>
										<div class="row">
											<div class="col-md-6">
												<p><span class="title">Priyanka</span> <span class="date">12/06/2018</span></p>
												<p>Have requirement for UIDesigner</p>
											</div>
											<div class="col-md-6 mt-10 text-right mText-left">
												<button class="btn btn-primary" data-toggle="modal" data-target="#viewContact">View Contact</button>
												<button class="btn btn-gray disabled" data-toggle="tooltip" data-placement="top" data-html="true" data-title="Your interest has been sent">Interested</button>
											</div>
										</div>
									</li>
									<li>
										<div class="row">
											<div class="col-md-6">
												<p><span class="title">Priyanka</span> <span class="date">12/06/2018</span></p>
												<p>Have requirement for UIDesigner</p>
											</div>
											<div class="col-md-6 mt-10 text-right mText-left">
												<button class="btn btn-primary" data-toggle="modal" data-target="#viewContact">View Contact</button>
												<button class="btn btn-gray disabled" data-toggle="tooltip" data-placement="top" data-html="true" data-title="Your interest has been sent">Interested</button>
											</div>
										</div>
									</li>
									<li>
										<div class="row">
											<div class="col-md-6">
												<p><span class="title">Priyanka</span> <span class="date">12/06/2018</span></p>
												<p>Have requirement for UIDesigner</p>
											</div>
											<div class="col-md-6 mt-10 text-right mText-left">
												<button class="btn btn-gray disabled" data-toggle="tooltip" data-placement="top" data-html="true" data-title="Ph: 9959645999<br />Fax: 9959645999">View Contact</button>
												<button class="btn btn-primary">Interested</button>
											</div>
										</div>
									</li>
									<li>
										<div class="row">
											<div class="col-md-6">
												<p><span class="title">Priyanka</span> <span class="date">12/06/2018</span></p>
												<p>Have requirement for UIDesigner</p>
											</div>
											<div class="col-md-6 mt-10 text-right mText-left">
												<button class="btn btn-primary" data-toggle="tooltip" data-placement="top" data-html="true" data-title="Ph: 9959645999<br />Fax: 9959645999">View Contact</button>
												<button class="btn btn-gray disabled" data-toggle="tooltip" data-placement="top" data-html="true" data-title="Your interest has been sent">Interested</button>
											</div>
										</div>
									</li>
									<li>
										<div class="row">
											<div class="col-md-6">
												<p><span class="title">Priyanka</span> <span class="date">12/06/2018</span></p>
												<p>Have requirement for UIDesigner</p>
											</div>
											<div class="col-md-6 mt-10 text-right mText-left">
												<button class="btn btn-primary" data-toggle="tooltip" data-placement="top" data-html="true" data-title="Ph: 9959645999<br />Fax: 9959645999">View Contact</button>
												<button class="btn btn-gray disabled" data-toggle="tooltip" data-placement="top" data-html="true" data-title="Your interest has been sent">Interested</button>
											</div>
										</div>
									</li>
									<li>
										<div class="row">
											<div class="col-md-6">
												<p><span class="title">Priyanka</span> <span class="date">12/06/2018</span></p>
												<p>Have requirement for UIDesigner</p>
											</div>
											<div class="col-md-6 mt-10 text-right mText-left">
												<button class="btn btn-gray disabled">View Contact</button>
												<button class="btn btn-gray disabled" data-toggle="tooltip" data-placement="top" data-html="true" data-title="Your interest has been sent">Interested</button>
											</div>
										</div>
									</li>
									<li>
										<div class="row">
											<div class="col-md-6">
												<p><span class="title">Priyanka</span> <span class="date">12/06/2018</span></p>
												<p>Have requirement for UIDesigner</p>
											</div>
											<div class="col-md-6 mt-10 text-right mText-left">
												<button class="btn btn-gray disabled" >View Contact</button>
												<button class="btn btn-primary">Interested</button>
											</div>
										</div>
									</li>
                                    <p class="text-center"><a href="#" class="link visible-xs visible-sm mb-20"><i class="fa fa-arrow-down"></i></a></p>
								</ul>
							  </div>
							</div>
							<!--<p class="text-right"><a href="#" class="link visible-xs visible-sm mb-20">See More...</a></p>-->
							<!-- Middle Panel1 End -->
							<!-- Middle Panel2 End -->
							<div class="panel panel-default earnPanel">
							  <div class="panel-heading">Lorem Ipsum</div>
							  <div class="panel-body">
								<ul class="noBG">
									<li>
										<h4>Idea Title</h4>
										<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam perferendis labore nemo quis saepe nulla qui nesciunt et voluptatum sequi, dolore provident quo veritatis iste eos. Saepe molestias sed tempore.Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam perferendis labore nemo quis saepe nulla qui nesciunt et voluptatum sequi, dolore provident quo veritatis iste eos. Saepe molestias sed tempore.</p>
									</li>
									<li>
										<h4>Description</h4>
										<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam perferendis labore nemo quis saepe nulla qui nesciunt et voluptatum sequi, dolore provident quo veritatis iste eos. Saepe molestias sed tempore.Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam perferendis labore nemo quis saepe nulla qui nesciunt et voluptatum sequi, dolore provident quo veritatis iste eos. Saepe molestias sed tempore.</p>
									</li>
								</ul>
								
							  </div>
							</div>
							<!-- Middle Panel2 End -->
						</div>
						<div class="col-md-5">
							<!-- Right Panel1 Start -->
							<div class="panel panel-default sidePanel">
							  <div class="panel-heading">Trust Factor <span class="pull-right">
							  <span class="stars" data-rating="3" data-num-stars="5" ></span>
							  <!--<input id="input-1" name="input-1" class="rating rating-loading" data-min="0" data-max="5" data-step="0.1" value="3" />--></span></div>
							  <div class="panel-body">
								<div class="panel-group mb-0" id="accordion2" role="tablist" aria-multiselectable="true">
								  <div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingOne">
									  <h4 class="panel-title">
										<a class="" role="button" data-toggle="collapse" data-parent="#accordion2" href="#p1" aria-expanded="true" aria-controls="collapseOne">
										  General Trust Factor &nbsp;<span class="stars" data-rating="3" data-num-stars="5" ></span>
										</a>
									  </h4>
									</div>
									<div id="p1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
									  <div class="panel-body">
										<ul class="list-group">
										  <li class="list-group-item">
											<div class="row font-sm">
												<div class="col-xs-4">Mobile</div>
												<div class="col-xs-4 text-center"><span class="not-verified">Not Verified</span></div>
												<div class="col-xs-4 text-right"><a href="#" class="link font-sm">Edit</a></div>
											</div>
											<div class="row"><?php //print_r($user); ?>
												<div class="col-xs-6">+91 <?php echo $user['MOBILENO']; ?></div>
												<div class="col-xs-6 text-right"><span class="stars" data-rating="3" data-num-stars="5" ></span></div>
											</div>
										  </li>
										  <li class="list-group-item">
											<div class="row font-sm">
												<div class="col-xs-4">E-mail</div>
												<div class="col-xs-4 text-center">
												<span class="not-verified">Not Verified</span>
												<!--<span class="verified">Verified</span>-->
												</div>
												<div class="col-xs-4 text-right"><a href="#" class="link font-sm">Edit</a></div>
											</div>
											<div class="row">
												<div class="col-xs-6"><?php echo $user['EMAIL']; ?></div>
												<div class="col-xs-6 text-right"><span class="stars" data-rating="3" data-num-stars="5" ></span></div>
											</div>
										  </li>
										</ul>
									  </div>
									</div>
								  </div>
								  <div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingTwo">
									  <h4 class="panel-title">
										<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#p2" aria-expanded="false" aria-controls="collapseTwo">
										  Skill Tust Factor &nbsp;<span class="stars" data-rating="3" data-num-stars="5" ></span>
										</a>
									  </h4>
									</div>
									<div id="p2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
									  <div class="panel-body">
										<ul class="list-group">
										  <li class="list-group-item">Learn Participation <span class="glyphicon glyphicon-info-sign info" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="some content"></span> <span class="pull-right"><span class="stars" data-rating="3" data-num-stars="5" ></span></span></li>
										  <li class="list-group-item">Over All Activeness <span class="glyphicon glyphicon-info-sign info" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="some content"></span> <span class="pull-right"><span class="stars" data-rating="3" data-num-stars="5" ></span></span></li>
										</ul>
									  </div>
									</div>
								  </div>
								  <div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingOne">
									  <h4 class="panel-title">
										<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#p3" aria-expanded="true" aria-controls="collapseOne">
										  Feedback &nbsp;<span class="stars" data-rating="3" data-num-stars="5" ></span>
										</a>
									  </h4>
									</div>
									<div id="p3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
									  <div class="panel-body">
										<ul class="list-group scroll-v">
										  <li class="list-group-item">
											<div class="row earnPanel">
												<div class="col-xs-8">
													<p class="title mb-0">Priyanka</p>
													<p class="date mb-0">Great work done!!</p>
												</div>
												<div class="col-xs-4 text-right">
													<span class="stars" data-rating="3" data-num-stars="5" ></span>
												</div>
											</div>
										  </li>
										  <li class="list-group-item">
											<div class="row earnPanel">
												<div class="col-xs-8">
													<p class="title mb-0">Priyanka</p>
													<p class="date mb-0">Great work done!!</p>
												</div>
												<div class="col-xs-4 text-right">
													<span class="stars" data-rating="3" data-num-stars="5" ></span>
												</div>
											</div>
										  </li>
										</ul>
									  </div>
									</div>
								  </div>
								</div>
							  </div>
							</div>
							<!-- Right Panel1 End -->
							<!-- Right Panel2 Start -->
							<div class="panel panel-default earnPanel">
							  <div class="panel-heading">Skill Details <a href="#" class="pull-right link">Edit</a></div>
							  <div class="panel-body">
								<ul class="noBG">
									<li>
										<h4>Skill Name</h4>
										<p><?php 
										$cat = $skill_byid['skill'];
										$CI =& get_instance();
										$cuss = $CI->skill($cat);
										echo $cuss['FDESC'];?></p>
									</li>
									<li>
										<h4>Related Skills</h4>
										<ul class="inline-list">
										<?php  
										$categories = '';
										$cats = explode(",", $skill_byid['association']);
										$result = '';
										foreach($cats as $cat) {
										$cat = trim($cat);
										$CI =& get_instance();
										$cus = $CI->skill($cat) ; ?>
										
										<li><?php echo $cus['FDESC']; ?></li>
										<?php } ?>
										  
										  
										</ul>
									</li>
									<li>
										<h4>Experience</h4>
										<p><?php echo $skill_byid['experience'];
											
										?> Years</p>
									</li>
									<li>
										<h4>Locations</h4>
										<ul class="inline-list">
										  <li><?php $loc = $skill_byid['location'];
										$CI =& get_instance();
										$locat = $CI->Location($loc);
										echo $locat['c_name'];										  ?></li>
										  
										</ul>
									</li>
									<li>
										<h4>Work Timings</h4>
										<?php //print_r($usertimngs);
										foreach($usertimngs as $ut){ ?>
										<div class="row">
											<div class="col-xs-5"><p><?php echo $ut['day']; ?></p></div>
											<div class="col-xs-7"><p><?php echo $ut['from_time']; ?> - <?php echo $ut['to_time']; ?></p></div>
										</div>
										<?php }?>
									</li>
									<li>
										<h4>My Price</h4>
										<div class="row">
											<div class="col-xs-5">
												<p>Short Term Work</p>
												<p><?php echo $skill_byid['currency']; ?> <?php echo $skill_byid['investment_currency']; ?> / <?php echo $skill_byid['price_per']; ?></p>
											</div>
											<div class="col-xs-7">
												<p>Long Term Work</p>
												<p><?php if($skill_byid['min_as_employee']==1){?>
													<b>Negotiable</b>
												<?php }else{?><b>Non-Negotiable</b></p>
												<p><span class="font-w500">As Employee</span> : <?php echo $skill_byid['min_as_employee']; ?> - <?php echo $skill_byid['max_as_employee']; ?> <?php echo $skill_byid['investment_currency']; ?></p>
												<p><span class="font-w500">As Partner :</span> <?php echo $skill_byid['min_as_partner']; ?> - <?php echo $skill_byid['max_as_partner']; ?> %</p><?php }?>
											</div>
										</div>
									</li>
									<li>
										<h4>Competitive Advantage</h4>
										<p><?php echo $skill_byid['competitive']; ?></p>
									</li>
									<li>
										<h4>My Portfolio</h4>
										<ul class="inline-list">
										<?php 
							  $categories = '';
							$cats = explode(",", $skill_byid['portfolio']);
							
							foreach($cats as $cat) {?>
								 <li><a style="color:blue" target="_blank" href="<?php echo base_url('uploads/images/').$cat; ?>"><?php echo $cat; ?></a></li>
							<?php } ?>
										  
										</ul>
									</li>
									<?php if($skill_byid['post_type']=='Mediator') {?>
									<li>
										<h4><?php echo $skill_byid['candidate']; ?></h4>
										<div class="row">
											<div class="col-xs-6">
												<p class="font-w500">Name of candidate</p>
												<p><?php echo $skill_byid['candidate']; ?></p>
											</div>
											<div class="col-xs-6">
												<p class="font-w500">Mobile Number</p>
												<p><?php echo $skill_byid['mobile']; ?></p>
											</div>
										</div>
									</li>
									<?php }?>
								</ul>
							  </div>
							</div>
							<!-- Right Panel2 End -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php $this->view('home-footer') ?>
		
	
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