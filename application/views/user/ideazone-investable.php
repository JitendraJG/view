	<?php $this->view('admin/user-header') ?>

	<section class="ideazone"> 
		<div class="container">
			<div class="row mb-20">
				<div class="col-md-6">
					<ol class="breadcrumb hidden-xs hidden-sm">
					  <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
					  <li class="breadcrumb-item"><a href="#">Investable</a></li>
					  <li class="breadcrumb-item active">Initiators - All Profiles</li>
					</ol>
				</div>
				<div class="col-md-6 text-right">
					<button class="btn btn-info mb-0 mblock-btn">Post a Business Idea</button>
				</div>
			</div>
			<div class="row relative">
				<div class="col-md-3">
					<a href="javascript:void()" class="filter-btn visible-xs visible-sm"><img src="images/filter.png" alt="filter"/></a>
					<div class="grey-block filter-content mb-20">
						<h4 class="text-center">Search filters</h4>
						<form>
                            <label>Association Role</label>
							<input type="text" class="form-control mb-5" id="search-input" onkeyup="myFunction()" placeholder="Search by Role" title="" />
							<div>
								<div class="chip"><i class="close fa fa-times"></i>Role1</div>
								<div class="chip"><i class="close fa fa-times"></i>Role2</div>
							</div>
							<ul id="tag-user" class="popup-searchList">
							  <li><a href="#">Role1</a></li>
							  <li><a href="#">Role2</a></li>
							  <li><a href="#">Role3</a></li>
							  <li><a href="#">Role4</a></li>
							  <li><a href="#">Role5</a></li>
							</ul>
                            
							<label>Investment
								<select class="form-control sub-dw pull-right">
									<option value="">INR</option>
								</select>
							</label>
							<div class="row">
								<div class="col-xs-6">
									<input type="text" class="form-control" placeholder="min" />
								</div>
								<div class="col-xs-6">
									<input type="text" class="form-control" placeholder="max" />
								</div>
							</div>
							
							<label>Share</label>
							<div class="row">
								<div class="col-xs-6">
									<input type="text" class="form-control" placeholder="min" />
								</div>
								<div class="col-xs-6">
									<input type="text" class="form-control" placeholder="max" />
								</div>
							</div>
							
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
							
							<p class="mt-20">
							<button class="btn btn-info mb-0 mr-10">Clear</button>
							<button class="btn btn-primary mb-0">Apply</button>
							</p>
						</form>
					</div>
				</div>
				<div class="col-md-9">
					<div class="ideazone-content">
						<h2>Initiators</h2>
						<div class="skill-block">
							<div class="row">
								<div class="col-sm-6 col-md-4">
									<div class="profile-box">
										<div class="p10">
										<div class="mb-10">
											<span>Mr.Vykuntam Manuka</span>
										</div>
										<div class="mb-10">
											<div class="gray-text">Association Role</div>
											<div class="dark-text">Sr. UI Designer</div>
										</div>
										<div class="mb-10">
											<div class="gray-text">Preferred Location</div>
											<div class="dark-text">Hyderabad, Banglore</div>
										</div>
										<div class="mb-10">
											<div class="gray-text">Approx Investment Expected</div>
											<div class="dark-text">$200-$2000</div>
										</div>
										<div class="mb-10">
											<div class="gray-text">Approx Share Offered</div>
											<div class="dark-text">20% - 50%</div>
										</div>
										</div>
										<div>
											<button class="btn">View Contact</button>
											<button class="btn">Shortlist</button>
										</div>
									</div>
								</div>
								<div class="col-sm-6 col-md-4">
									<div class="profile-box">
										<div class="p10">
										<div class="mb-10">
											<span>Mr.Vykuntam Manuka</span>
										</div>
										<div class="mb-10">
											<div class="gray-text">Association Role</div>
											<div class="dark-text">Sr. UI Designer</div>
										</div>
										<div class="mb-10">
											<div class="gray-text">Preferred Location</div>
											<div class="dark-text">Hyderabad, Banglore</div>
										</div>
										<div class="mb-10">
											<div class="gray-text">Approx Investment Expected</div>
											<div class="dark-text">$200-$2000</div>
										</div>
										<div class="mb-10">
											<div class="gray-text">Approx Share Offered</div>
											<div class="dark-text">20% - 50%</div>
										</div>
										</div>
										<div>
											<button class="btn">View Contact</button>
											<button class="btn">Shortlist</button>
										</div>
									</div>
								</div>
								<div class="col-sm-6 col-md-4">
									<div class="profile-box">
										<div class="p10">
										<div class="mb-10">
											<span>Mr.Vykuntam Manuka</span>
										</div>
										<div class="mb-10">
											<div class="gray-text">Association Role</div>
											<div class="dark-text">Sr. UI Designer</div>
										</div>
										<div class="mb-10">
											<div class="gray-text">Preferred Location</div>
											<div class="dark-text">Hyderabad, Banglore</div>
										</div>
										<div class="mb-10">
											<div class="gray-text">Approx Investment Expected</div>
											<div class="dark-text">$200-$2000</div>
										</div>
										<div class="mb-10">
											<div class="gray-text">Approx Share Offered</div>
											<div class="dark-text">20% - 50%</div>
										</div>
										</div>
										<div>
											<button class="btn">View Contact</button>
											<button class="btn">Shortlist</button>
										</div>
									</div>
								</div>
								<div class="col-sm-6 col-md-4">
									<div class="profile-box">
										<div class="p10">
										<div class="mb-10">
											<span>Mr.Vykuntam Manuka</span>
										</div>
										<div class="mb-10">
											<div class="gray-text">Association Role</div>
											<div class="dark-text">Sr. UI Designer</div>
										</div>
										<div class="mb-10">
											<div class="gray-text">Preferred Location</div>
											<div class="dark-text">Hyderabad, Banglore</div>
										</div>
										<div class="mb-10">
											<div class="gray-text">Approx Investment Expected</div>
											<div class="dark-text">$200-$2000</div>
										</div>
										<div class="mb-10">
											<div class="gray-text">Approx Share Offered</div>
											<div class="dark-text">20% - 50%</div>
										</div>
										</div>
										<div>
											<button class="btn">View Contact</button>
											<button class="btn">Shortlist</button>
										</div>
									</div>
								</div>
								<div class="col-sm-6 col-md-4">
									<div class="profile-box">
										<div class="p10">
										<div class="mb-10">
											<span>Mr.Vykuntam Manuka</span>
										</div>
										<div class="mb-10">
											<div class="gray-text">Association Role</div>
											<div class="dark-text">Sr. UI Designer</div>
										</div>
										<div class="mb-10">
											<div class="gray-text">Preferred Location</div>
											<div class="dark-text">Hyderabad, Banglore</div>
										</div>
										<div class="mb-10">
											<div class="gray-text">Approx Investment Expected</div>
											<div class="dark-text">$200-$2000</div>
										</div>
										<div class="mb-10">
											<div class="gray-text">Approx Share Offered</div>
											<div class="dark-text">20% - 50%</div>
										</div>
										</div>
										<div>
											<button class="btn">View Contact</button>
											<button class="btn">Shortlist</button>
										</div>
									</div>
								</div>
								<div class="col-sm-6 col-md-4">
									<div class="profile-box">
										<div class="p10">
										<div class="mb-10">
											<span>Mr.Vykuntam Manuka</span>
										</div>
										<div class="mb-10">
											<div class="gray-text">Association Role</div>
											<div class="dark-text">Sr. UI Designer</div>
										</div>
										<div class="mb-10">
											<div class="gray-text">Preferred Location</div>
											<div class="dark-text">Hyderabad, Banglore</div>
										</div>
										<div class="mb-10">
											<div class="gray-text">Approx Investment Expected</div>
											<div class="dark-text">$200-$2000</div>
										</div>
										<div class="mb-10">
											<div class="gray-text">Approx Share Offered</div>
											<div class="dark-text">20% - 50%</div>
										</div>
										</div>
										<div>
											<button class="btn">View Contact</button>
											<button class="btn">Shortlist</button>
										</div>
									</div>
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
