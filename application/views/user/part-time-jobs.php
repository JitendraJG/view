<?php $this->view('admin/user-header') ?>
	<section class="ideazone"> 
		<div class="container">
			<div class="row mb-20">
				<div class="col-md-6">
					<h4 class="mt-0 mb-0">Part Time Jobs</h4>
				</div>
				<div class="col-md-6 text-right">
					<button class="btn btn-info mb-0 mblock-btn">Request for Work</button>
				</div>
			</div>
			<div class="row relative">
				<div class="col-md-3">
					<a href="javascript:void()" class="filter-btn visible-xs visible-sm"><img src="images/filter.png" alt="filter"/></a>
					<div class="grey-block filter-content mb-20">
						<h4 class="text-center">Search filters</h4>
						<form>
                            <label>Skill Name</label>
							<input type="text" class="form-control mb-5" id="search-input" onkeyup="myFunction()" placeholder="Search by Role" title="" />
							<div>
								<div class="chip"><i class="close fa fa-times"></i>Skill1</div>
								<div class="chip"><i class="close fa fa-times"></i>Skill1</div>
							</div>
							<ul id="tag-user" class="popup-searchList">
							  <li><a href="#">Skill1</a></li>
							  <li><a href="#">Skill1</a></li>
							  <li><a href="#">Skill3</a></li>
							  <li><a href="#">Skill4</a></li>
							  <li><a href="#">Skill5</a></li>
							</ul>
							<label>Location</label>
							<div class="row">
								<div class="col-xs-12">
									<input type="text" class="form-control mb-5" id="search-input" onkeyup="myFunction()" placeholder="Search by Location" title="" />
									<div>
										<div class="chip"><i class="close fa fa-times"></i>loc1</div>
										<div class="chip"><i class="close fa fa-times"></i>loc2</div>
									</div>
									<ul id="tag-user" class="popup-searchList">
									  <li><a href="#">Location1</a></li>
									  <li><a href="#">Location2</a></li>
									  <li><a href="#">Location3</a></li>
									  <li><a href="#">Location4</a></li>
									  <li><a href="#">Location5</a></li>
									</ul>
								</div>
							</div>
							
							<label>Experience</label>
							<select class="form-control">
								<option>1+</option>
								<option>2+</option>
								<option>3+</option>
							</select>
							
							<label>Job Type</label>
							<select class="form-control">
								<option>Pemanent</option>
								<option>Temporary</option>
							</select>							
                            
							<label>Price</label>
							<div class="row">
								<div class="col-xs-6">
									<input type="text" class="form-control" placeholder="min" />
								</div>
								<div class="col-xs-6">
									<input type="text" class="form-control" placeholder="max" />
								</div>
							</div>
							
							<p class="mt-20">
							<button class="btn btn-info mb-0 mr-10">Clear</button>
							<button class="btn btn-primary mb-0">Apply</button>
							</p>
						</form>
					</div>
				</div>
				<div class="col-md-9">
					<!--
					<div class="panel panel-default sidePanel">
						<div class="panel-heading">80 <b>"Designer"</b> Jobs found</div>
					</div>-->
					<div class="panel panel-default sidePanel no-radius jobs">
						<div class="panel-body">
							<div class="row">
								<div class="col-md-6">
									<h3>User Experience Designer</h3>
									<p class="estimate font15"><i class="fa fa-map-marker"></i> Hyderabad</p>
								</div>
								<div class="col-md-6 text-right">
									<p class="estimate"><span><i class="fa fa-suitcase"></i> 3-8 Years</span><em class="line-seperator">|</em><span><i class="rupee">&#8377;</i> 100 to 800 Hourly</span></p>
								</div>
							</div>
							<h6>Job Description</h6>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam perferendis labore nemo quis saepe nulla qui nesciunt et voluptatum sequi, dolore provident quo veritatis iste eos. Saepe molestias sed tempore.Lorem ipsum dolor sit amet consectetur adipisicing elit... <a href="#" class="link font-bold">See More</a></p>
							<hr class="line-divider" />
							<div class="row">
								<div class="col-md-6">
									<p class="estimate font15 mb-0 mt-5"><span>Posted by <b class="font16"><i class="fa fa-user"></i> Ajay Krishna</b><em class="line-seperator">|</em>Today</span></p>
								</div>
								<div class="col-md-6 promo flex-right">
									<button class="btn btn-primary mt-5 mb-0 mr-10">I'm Interested</button>
									<button class="btn btn-primary mt-5 mb-0">View Contact</button>
								</div>
							</div>
						</div>
					</div>
					<div class="panel panel-default sidePanel no-radius jobs">
						<div class="panel-body">
							<div class="row">
								<div class="col-md-6">
									<h3>UI Designer</h3>
									<p class="estimate font15"><i class="fa fa-map-marker"></i> Hyderabad, Mumbai, Bangalore</p>
								</div>
								<div class="col-md-6 text-right">
									<p class="estimate"><span><i class="fa fa-suitcase"></i> 2-6 Years</span><em class="line-seperator">|</em><span><i class="rupee">&#8377;</i> 100 to 600 Hourly</span></p>
								</div>
							</div>
							<h6>Job Description</h6>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam perferendis labore nemo quis saepe nulla qui nesciunt et voluptatum sequi, dolore provident quo veritatis iste eos. Saepe molestias sed tempore.Lorem ipsum dolor sit amet consectetur adipisicing elit... <a href="#" class="link font-bold">See More</a></p>
							<hr class="line-divider" />
							<div class="row">
								<div class="col-md-6">
									<p class="estimate font15 mb-0 mt-5"><span>Posted by <b class="font16"><i class="fa fa-user"></i> Mahesh</b><em class="line-seperator">|</em>Posted 1 day ago</span></p>
								</div>
								<div class="col-md-6 promo flex-right">
									<button class="btn btn-primary mt-5 mb-0 mr-10">I'm Interested</button>
									<button class="btn btn-primary mt-5 mb-0">View Contact</button>
								</div>
							</div>
						</div>
					</div>
					<div class="panel panel-default sidePanel no-radius jobs">
						<div class="panel-body">
							<div class="row">
								<div class="col-md-6">
									<h3>UI Developer</h3>
									<p class="estimate font15"><i class="fa fa-map-marker"></i> Hyderabad, Mumbai, Bangalore</p>
								</div>
								<div class="col-md-6 text-right">
									<p class="estimate"><span><i class="fa fa-suitcase"></i> 2-6 Years</span><em class="line-seperator">|</em><span><i class="rupee">&#8377;</i> 100 to 600 Hourly</span></p>
								</div>
							</div>
							<h6>Job Description</h6>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam perferendis labore nemo quis saepe nulla qui nesciunt et voluptatum sequi, dolore provident quo veritatis iste eos. Saepe molestias sed tempore.Lorem ipsum dolor sit amet consectetur adipisicing elit... <a href="#" class="link font-bold">See More</a></p>
							<hr class="line-divider" />
							<div class="row">
								<div class="col-md-6">
									<p class="estimate font15 mb-0 mt-5"><span>Posted by <b class="font16"><i class="fa fa-user"></i> Mahesh</b><em class="line-seperator">|</em>Posted 1 day ago</span></p>
								</div>
								<div class="col-md-6 promo flex-right">
									<button class="btn btn-primary mt-5 mb-0 mr-10">I'm Interested</button>
									<button class="btn btn-primary mt-5 mb-0">View Contact</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Modal -->
		<div id="ignoreModal" class="modal fade" role="dialog">
			<div class="modal-dialog modal-sm">		
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h5 class="modal-title">Ignore Idea</h5>
					</div>
					<div class="modal-body">
						<p>Ignoring the initiated idea will result in deletion of your proposal !</p>
					</div>
					<div class="modal-footer">
						<button class="btn btn-initiate">Ignore Completely </button>
						<button class="btn btn-initiate btn-ignore">Moved to Saved</button>
					</div>
				</div>		
			</div>
		</div>
		<div id="shortlistModal" class="modal fade" role="dialog">
			<div class="modal-dialog modal-sm">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-body">
					<p>The Idea has been moved to saved items</p>
				</div>
			</div>
			</div>
		</div>
		<div id="reportModal" class="modal fade" role="dialog">
				<div class="modal-dialog modal-sm">
			
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h5 class="modal-title">Report Idea</h5>
					</div>
					<div class="modal-body">
							<div class="radio-grp">
									<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect mdl-js-ripple-effect--ignore-events is-upgraded" for="option-1" data-upgraded=",MaterialRadio,MaterialRipple">
										<input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1">
										<span class="mdl-radio__label">Spam</span>
									<span class="mdl-radio__outer-circle"></span><span class="mdl-radio__inner-circle"></span><span class="mdl-radio__ripple-container mdl-js-ripple-effect mdl-ripple--center" data-upgraded=",MaterialRipple"><span class="mdl-ripple"></span></span></label>
									<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect mdl-js-ripple-effect--ignore-events is-checked is-upgraded" for="option-2" data-upgraded=",MaterialRadio,MaterialRipple">
										<input type="radio" id="option-2" class="mdl-radio__button" name="options" value="2" checked="">
										<span class="mdl-radio__label">Duplicate Idea</span>
									<span class="mdl-radio__outer-circle"></span><span class="mdl-radio__inner-circle"></span><span class="mdl-radio__ripple-container mdl-js-ripple-effect mdl-ripple--center" data-upgraded=",MaterialRipple"><span class="mdl-ripple"></span></span></label>
									<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect mdl-js-ripple-effect--ignore-events is-upgraded" for="option-3" data-upgraded=",MaterialRadio,MaterialRipple">
											<input type="radio" id="option-3" class="mdl-radio__button" name="options" value="1">
											<span class="mdl-radio__label">Factually Incorrect</span>
										<span class="mdl-radio__outer-circle"></span><span class="mdl-radio__inner-circle"></span><span class="mdl-radio__ripple-container mdl-js-ripple-effect mdl-ripple--center" data-upgraded=",MaterialRipple"><span class="mdl-ripple"></span></span></label>
								</div>
					</div>
					<div class="modal-footer">
						<button class="btn btn-initiate btn-ignore">Submit</button>
					</div>
				</div>
			
				</div>
			</div>
	</section>
		<!-- initiate Modal -->
	<div id="initiatePopup" class="modal fade" role="dialog">
		<div class="modal-dialog modal-md">		
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h5 class="modal-title">Initiate Idea</h5>
				</div>
				<div class="modal-body">
					<h5>Offer:</h5>
					<div>
						<div class="md-checkbox md-checkbox-inline">
							<input id="i1" type="checkbox">
							<label for="i1">Employee</label>
						</div>
						<div class="md-checkbox md-checkbox-inline">
							<input id="i2" type="checkbox">
							<label for="i2">Partner</label>
						</div>
					</div>
					<h5>Offer:</h5>
					<div>
						<div class="md-checkbox">
							<input id="i3" type="checkbox" checked>
							<label for="i3">Funding</label>
						</div>
						<div class="fundingContent">
							<form class="form-horizontal" action="/">
							  <div class="form-group">
								<label class="control-label col-sm-5" for="">Role Expected from Investor:</label>
								<div class="col-sm-5">
								  <input type="email" class="form-control">
								</div>
							  </div>
							  <div class="form-group">
								<label class="control-label col-sm-5" for="">Prefered Location:</label>
								<div class="col-sm-5">
								  <input type="email" class="form-control">
								</div>
							  </div>
							  <div class="form-group">
								<label class="control-label col-sm-5" for="">Approx Investiment Expected:</label>
								<div class="col-sm-7">
								  <div class="row">
									<div class="col-sm-4">
										<select class="form-control pull-right">
											<option value="">INR</option>
										</select>
									</div>
									<div class="col-sm-4">
										<input type="email" class="form-control" placeholder="min">
									</div>
									<div class="col-sm-4">
										<input type="email" class="form-control" placeholder="max">
									</div>
								  </div>
								</div>
							  </div>
							  <div class="form-group">
								<label class="control-label col-sm-5" for="">Approx Share Offered:</label>
								<div class="col-sm-7">
								  <div class="row">
									<div class="col-sm-6">
										<input type="email" class="form-control" placeholder="min">
									</div>
									<div class="col-sm-6">
										<input type="email" class="form-control" placeholder="max">
									</div>
								  </div>
								</div>
							  </div>
							</form>
						</div>
						<div class="md-checkbox">
							<input id="i4" type="checkbox">
							<label for="i4">Consultant</label>
						</div>
						<div class="md-checkbox">
							<input id="i5" type="checkbox">
							<label for="i5">Mentorship</label>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button class="btn btn-initiate btn-ignore">Submit</button>
				</div>
			</div>		
		</div>
	</div>
	
	<!-- Invest Modal -->
	<div id="investModal" class="modal fade" role="dialog">
		<div class="modal-dialog modal-sm">		
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h5 class="modal-title">Invest Idea</h5>
				</div>
				<div class="modal-body">
					<form class="form-horizontal" action="/">
					  <div class="form-group">
						<label class="control-label col-sm-5" for="">Role Expected from Investor:</label>
						<div class="col-sm-5">
						  <input type="text" class="form-control">
						</div>
					  </div>
					  <div class="form-group">
						<label class="control-label col-sm-5" for="">Prefered Location:</label>
						<div class="col-sm-5">
						    <input type="text" class="form-control mb-5" id="search-input" onkeyup="myFunction()" placeholder="Search by Location" title="" />
							<div>
								<div class="chip"><i class="close fa fa-times"></i>loc1</div>
								<div class="chip"><i class="close fa fa-times"></i>loc2</div>
							</div>
							<ul id="tag-user" class="popup-searchList">
							  <li><a href="#">Location1</a></li>
							  <li><a href="#">Location2</a></li>
							  <li><a href="#">Location3</a></li>
							  <li><a href="#">Location4</a></li>
							  <li><a href="#">Location5</a></li>
							</ul>
						</div>
					  </div>
					  <div class="form-group">
						<label class="control-label col-sm-5" for="">Approx Investiment Expected:</label>
						<div class="col-sm-7">
						  <div class="row">
							<div class="col-sm-4">
								<select class="form-control pull-right">
									<option value="">INR</option>
								</select>
							</div>
							<div class="col-sm-4">
								<input type="text" class="form-control" placeholder="min">
							</div>
							<div class="col-sm-4">
								<input type="text" class="form-control" placeholder="max">
							</div>
						  </div>
						</div>
					  </div>
					  <div class="form-group">
						<label class="control-label col-sm-5" for="">Approx Share Offered:</label>
						<div class="col-sm-7">
						  <div class="row">
							<div class="col-sm-6">
								<input type="text" class="form-control" placeholder="min">
							</div>
							<div class="col-sm-6">
								<input type="text" class="form-control" placeholder="max">
							</div>
						  </div>
						</div>
					  </div>
					</form>
				</div>
				<div class="modal-footer">
					<button class="btn btn-initiate btn-ignore">Submit</button>
				</div>
			</div>		
		</div>
	</div>
	

	<!-- jQuery -->	
	<script>
	$(document).ready(function(){
		$('#more-cont').hide();
		$('.see-more').click(function(){
			$(this).hide();
			$('#more-cont').show();
		});
	});
	</script>
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
<?php $this->view('home-footer') ?>
<script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
