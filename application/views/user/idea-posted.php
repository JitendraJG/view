	<?php $this->view('admin/user-header') ?>

	<section class="ideazone"> 
		<div class="container">
			<div class="row mb-20">
				<div class="col-md-6">
					<ol class="breadcrumb hidden-xs hidden-sm">
					  <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
					  <li class="breadcrumb-item"><a href="#">Earn</a></li>
					  <li class="breadcrumb-item active">Graphic Designing</li>
					</ol>
				</div>
				<div class="col-md-6 text-right">
					<button class="btn btn-info mb-0 mblock-btn">Post a Business Idea</button>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<div class="white-block mb-30 hidden-xs hidden-sm">
						<h3 class="active"><a href="#">Idea Zone</a></h3>
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
									<li><a href="#" class="active">Graphic Designing</a></li>
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
									<li><a href="#" class="active">Graphic Designing</a></li>
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
								Anim pariatur cliche reprehenderit
							  </div>
							</div>
						  </div>
						</div>
						
					</div>
					
					<a href="javascript:void()" class="filter-btn visible-xs visible-sm"><img src="<?php echo base_url(); ?>assets/images/filter.png" alt="filter"/></a>
					<div class="filter-content grey-block mb-20">
						<h4 class="text-center">Search filters</h4>
						<form>
							<label>Industry</label>
							<?php //print_r($industry); ?>
<select name="industrkey[]" id="e2_2" multiple="multiple" class="mb-5" style="width:100%" tabindex="-1">
<?php foreach($industry as $ind){ ?>
<option  value="<?php echo $ind['ID']; ?>"><?php echo $ind['SDESC']; ?></option>
<?php } ?>
</select>
<script>
        $(document).ready(function() { 
		$("#e2_2").select2({
    placeholder: "Search by Industry"
});});
    </script>				<label>Investment
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
							
							<label>Returns
								<select class="form-control sub-dw pull-right">
									<option value="">INR</option>
								</select>
								<select class="form-control sub-dw pull-right">
									<option value="">Monthly</option>
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
							
							<label>Break-Even
								<select class="form-control sub-dw pull-right">
									<option value="">Monthly</option>
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
							
							<p class="mt-20">
							<button class="btn btn-info mb-0 mr-10">Clear</button>
							<button class="btn btn-primary mb-0">Apply</button>
							</p>
						</form>
					</div>
				</div>
				
				<div class="col-md-9">
					<div>
					  <!-- Nav tabs -->
					  <ul class="nav nav-tabs" role="tablist">
						<li role="presentation" ><a href="<?php echo base_url('ideazone-all'); ?>">All Ideas <span class="badge">10 <i class="new">New</i></span></a></li>
						<li role="presentation" ><a href="<?php echo base_url('ideazone-saved'); ?>" >Saved <span class="badge blue">10</span></a></li>
						<li role="presentation" ><a href="<?php echo base_url('ideazone-initiated'); ?>" >Initiated <span class="badge green">10</span></a></li>
						<li role="presentation"><a href="#" aria-controls="investable" role="tab" data-toggle="tab">Investable <span class="badge purple">10</span></a></li>
						<li role="presentation" class="active"><a href="#" aria-controls="posted" role="tab" data-toggle="tab">Posted <span class="badge pink">10</span></a></li>
					  </ul>

					  <!-- Tab panes -->
					  <div class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="allIdeas">
							
							<?php //print_r($bussinessIdeas);
							foreach($bussinessIdeas as $o){
					$ind= $o['INDUSTRY'];
					$CI =& get_instance();
					$find = $CI->Industry($ind);
					$uid= $o['POSTED_BY'];
					$CI =& get_instance();
					$fid = $CI->usersby($uid);								?>
							
							<div class="ideazone-content" id="<?php echo $o['ID']; ?>">
								<h3><img src="<?php echo base_url(); ?>uploads/images/<?php echo $fid['PROFILE_PICTURE']; ?>" class="profile-pic" /> <?php echo $fid['NAME']; ?><span><?php echo $o['POSTED_DATE']; ?></span> <span class="pull-right"><span class="stars" data-rating="3" data-num-stars="5"></span></span></h3>
								<h6>Idea Title</h6>
								<p><?php echo $o['IDEA_TITLE']; ?></p>
								<h6>Industry</h6>
								<p><?php echo $find['SDESC']; ?></p>
								<h6>Description</h6>
								<p><?php echo $o['DESCRIPTION']; ?></p>
								<ul class="investment list-unstyled">
									<li>Appox Investment <br> <span><?php echo $o['CURRENCY']; ?> <?php echo $o['MIN_INVESTMENT']; ?> - <?php echo $o['MAX_INVESTMENT']; ?></span></li>
									<li>Appox Returns (Monthly) <br> <span><?php echo $o['CURRENCY']; ?> <?php echo $o['MIN_RETURNS']; ?> - <?php echo $o['MAX_RETURNS']; ?></span></li>
									<li>Appox Breakevent <br> <span><?php echo $o['CURRENCY']; ?> <?php echo $o['MIN_BREAKEVEN']; ?> - <?php echo $o['MAX_BREAKEVEN']; ?></span></li>
								</ul>
                                <p class="visible-xs visible-sm mb-0">Resources Required</p>
								<div class="table-responsive">
									<p class="hidden-xs hidden-sm">Resources Required</p>
									<table class="table table-bordered">
										<thead>
											<tr>
												<th>Skill Name</th>
												<th>No. People</th>
												<th>Contribute</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>UI Designing</td>
												<td>3</td>
												<td>All
													<div class="btn-group">
													<div class="dropdown-toggle" data-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</div>
													<ul class="dropdown-menu" role="menu">
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
													</ul>
												</div></td>
											</tr>
											<tr>
													<td>UI Designing</td>
													<td>3</td>
													<td>All
														<div class="btn-group">
														<div class="dropdown-toggle" data-toggle="dropdown">
															<span class="caret"></span>
															<span class="sr-only">Toggle Dropdown</span>
														</div>
														<ul class="dropdown-menu" role="menu">
															<li><a href="#">Action</a></li>
															<li><a href="#">Another action</a></li>
															<li><a href="#">Something else here</a></li>
														</ul>
													</div></td>
												</tr>
												<tr>
														<td>UI Designing</td>
														<td>9</td>
														<td>All
															<div class="btn-group">
															<div class="dropdown-toggle" data-toggle="dropdown">
																<span class="caret"></span>
																<span class="sr-only">Toggle Dropdown</span>
															</div>
															<ul class="dropdown-menu" role="menu">
																<li><a href="#">Action</a></li>
																<li><a href="#">Another action</a></li>
																<li><a href="#">Something else here</a></li>
															</ul>
														</div></td>
													</tr>
													<tr>
														<td>UI Designing</td>
														<td>1</td>
														<td>All
															<div class="btn-group">
															<div class="dropdown-toggle" data-toggle="dropdown">
																<span class="caret"></span>
																<span class="sr-only">Toggle Dropdown</span>
															</div>
															<ul class="dropdown-menu" role="menu">
																<li><a href="#">Action</a></li>
																<li><a href="#">Another action</a></li>
																<li><a href="#">Something else here</a></li>
															</ul>
														</div></td>
													</tr>
										</tbody>
									</table>
								</div>
								<div class="btn-group polls">
									<button data-toggle="modal" data-target="#initiatePopup">Initiate</button>
									<button data-toggle="modal" data-target="#investModal">Invest</button>
									<ul class="pull-right list-unstyled">
										<li><a class="opinion">Opinion</a></li>
										<li><a class="impress">Impress</a>
											<div class="impress-cont">
												<input id="input-2" name="input-2" class="rating rating-loading" data-min="0" data-max="5" data-step="0.1" value="3" />
											</div>
										</li>
										<li><a class="sharing">Share</a>
											<div class="sharing-cont">
												<ul class="share-list">
													<li><a href="#"><i class="fa fa-envelope" title="mail"></i></a></li>
													<li><a href="#"><i class="fa fa-facebook-square" title="facebook"></i></a></li>
													<li><a href="#"><i class="fa fa-youtube-square" title="youtube"></i></a></li>
													<li><a href="#"><i class="fa fa-link" title="copy link"></i></a></li>
												</ul>
											</div>
										</li>
										<li><a class="save-unsave">Save</a></li>
										<li><a href="#" data-toggle="modal" data-target="#reportModal">Report</a></li>
									</ul>
								</div>
								<div class="btn-group polls clearfix">
									<div class="opinion-cont">
										<div class="post-content">
										  <div class="post-container">
											<img src="https://bootdey.com/img/Content/user_1.jpg" class="profile-photo-md pull-left" alt="">
											<div class="post-detail">
											  <div class="user-info">
												<h5><a href="#" class="profile-link">Alexis Clark</a></h5>
												<p class="text-muted">Published a photo about 3 mins ago</p>
											  </div>
											  <div class="reaction">
												<a class="btn text-green"></a>
											  </div>
											  <div class="post-text">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.<i class="em em-anguished"></i> <i class="em em-anguished"></i> <i class="em em-anguished"></i></p>
											  </div>
											  <div class="post-footer">
													<a href="#" class="stat-item">
														<i class="fa fa-thumbs-up"></i> Like
													</a>
													<a href="#" class="stat-item">
														<i class="fa fa-reply"></i> Reply
													</a>
											  </div>											  
											  <div class="post-comment">
												<!--<img src="https://bootdey.com/img/Content/user_1.jpg" alt="" class="profile-pic">-->
												<input type="text" class="form-control" placeholder="Post a comment">
											  </div>
											  <div class="sub-post">
												  <div class="post-comment">
													<img src="<?php echo base_url(); ?>assets/images/user-pic.jpg" alt="" class="profile-pic">
													<p><a href="#" class="profile-link">Diana </a><i class="em em-laughing"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
													<a href="#" class="stat-item">
														<i class="fa fa-thumbs-up"></i> Like
													</a>
													<a href="#" class="stat-item">
														<i class="fa fa-reply"></i> Reply
													</a></p>
												  </div>
												  <div class="post-comment ml-40">
													<input type="text" class="form-control" placeholder="Post a comment">
												  </div>
												  
												  <div class="sub-post">
													  <div class="post-comment">
														<img src="https://bootdey.com/img/Content/user_1.jpg" alt="" class="profile-pic">
														<p><a href="#" class="profile-link">Diana </a><i class="em em-laughing"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
														<a href="#" class="stat-item">
															<i class="fa fa-thumbs-up"></i> Like
														</a>
														<a href="#" class="stat-item">
															<i class="fa fa-reply"></i> Reply
														</a></p>
													  </div>
													  <div class="post-comment ml-40">
														<input type="text" class="form-control" placeholder="Post a comment">
													  </div>
												  </div>
											  </div>
											  <div class="sub-post">
												  <div class="post-comment">
													<img src="<?php echo base_url(); ?>assets/images/user-pic.jpg" alt="" class="profile-pic">
													<p><a href="#" class="profile-link">Diana </a><i class="em em-laughing"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
													<a href="#" class="stat-item">
														<i class="fa fa-thumbs-up"></i> Like
													</a>
													<a href="#" class="stat-item">
														<i class="fa fa-reply"></i> Reply
													</a></p>
												  </div>
												  <div class="post-comment ml-40">
													<input type="text" class="form-control" placeholder="Post a comment">
												  </div>
											  </div>
											  
											</div>
										  </div>
										</div>
									</div>
								</div>								
							</div> 
							<?php }?>
							
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
						<button class="btn btn-initiate btn-ignore" data-toggle="modal" data-target="#shortlistModal">Moved to Saved</button>
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
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
								<input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
								<span class="mdl-radio__label">Spam</span>
							</label>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2">
								<input type="radio" id="option-2" class="mdl-radio__button" name="options" value="2">
								<span class="mdl-radio__label">Duplicate Idea</span>
							</label>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-3">
								<input type="radio" id="option-3" class="mdl-radio__button" name="options" value="3">
								<span class="mdl-radio__label">Factually Incorrect</span>
							</label>
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
					<h5>Request:</h5>
					<div>
						<div class="md-checkbox">
							<input id="i3" type="checkbox" checked>
							<label for="i3" class="funding">Funding</label>
						</div>
						<div class="fundingContent">
							<form class="form-horizontal" action="/">
							  <div class="form-group">
								<label class="control-label col-sm-5" for="">Role Expected from Investor:</label>
								<div class="col-sm-5">
									<input type="text" class="form-control mb-5" id="search-input" onkeyup="myFunction()" placeholder="Search by Role" title="">
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
								</div>
							  </div>
							  <div class="form-group">
								<label class="control-label col-sm-5" for="">Prefered Location:</label>
								<div class="col-sm-5">
									<input type="text" class="form-control mb-5" id="search-input" onkeyup="myFunction()" placeholder="Search by Location" title="">
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
									<!--
									<select class="form-control" multiple="multiple">
										<option value="location1">Location1</option>
										<option value="location2">Location2</option>
										<option value="location3">Location3</option>
										<option value="location4">Location4</option>
										<option value="location5">Location5</option>
									</select> -->
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
									<div class="col-xs-5">
										<input type="text" class="form-control" placeholder="min">
									</div>
									<div class="col-xs-1">
										<span class="percentage">%</span>
									</div>
									<div class="col-xs-5">
										<input type="text" class="form-control" placeholder="max">
									</div>
									<div class="col-xs-1">
										<span class="percentage">%</span>
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
		<div class="modal-dialog modal-md">		
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
							<input type="text" class="form-control mb-5" id="search-input" onkeyup="myFunction()" placeholder="Search by Role" title="">
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
						</div>
					  </div>
					  <div class="form-group">
						<label class="control-label col-sm-5" for="">Prefered Location:</label>
						<div class="col-sm-5">
							<input type="text" class="form-control mb-5" id="search-input" onkeyup="myFunction()" placeholder="Search by Location" title="">
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
							<div class="col-xs-5">
								<input type="text" class="form-control" placeholder="min">
							</div>
							<div class="col-xs-1">
								<span class="percentage">%</span>
							</div>
							<div class="col-xs-5">
								<input type="text" class="form-control" placeholder="max">
							</div>
							<div class="col-xs-1">
								<span class="percentage">%</span>
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
	
	<!-- Edit Initiate Modal -->
	<div id="editInitiateModal" class="modal fade" role="dialog">
		<div class="modal-dialog modal-md">		
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h5 class="modal-title">Initiate Idea</h5>
				</div>
				<div class="modal-body">
					<form class="form-horizontal" action="/">
					  <div class="form-group">
						<label class="control-label col-sm-5" for="">Role Expected from Investor:</label>
						<div class="col-sm-5">
							<input type="text" class="form-control mb-5" id="search-input" onkeyup="myFunction()" placeholder="Search by Role" title="">
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
						</div>
					  </div>
					  <div class="form-group">
						<label class="control-label col-sm-5" for="">Prefered Location:</label>
						<div class="col-sm-5">
							<input type="text" class="form-control mb-5" id="search-input" onkeyup="myFunction()" placeholder="Search by Location" title="">
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
								<input type="text" class="form-control" placeholder="" value="1000">
							</div>
							<div class="col-sm-4">
								<input type="text" class="form-control" placeholder="" value="1500">
							</div>
						  </div>
						</div>
					  </div>
					  <div class="form-group">
						<label class="control-label col-sm-5" for="">Approx Share Offered:</label>
						<div class="col-sm-7">
						  <div class="row">
							<div class="col-xs-5">
								<input type="text" class="form-control" placeholder="min" value="50">
							</div>
							<div class="col-xs-1">
								<span class="percentage">%</span>
							</div>
							<div class="col-xs-5">
								<input type="text" class="form-control" placeholder="max" value="60">
							</div>
							<div class="col-xs-1">
								<span class="percentage">%</span>
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
	
	<!-- Edit Invest Modal -->
	<div id="editInvestModal" class="modal fade" role="dialog">
		<div class="modal-dialog modal-md">		
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
							<input type="text" class="form-control mb-5" id="search-input" onkeyup="myFunction()" placeholder="Search by Role" title="">
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
						</div>
					  </div>
					  <div class="form-group">
						<label class="control-label col-sm-5" for="">Prefered Location:</label>
						<div class="col-sm-5">
							<input type="text" class="form-control mb-5" id="search-input" onkeyup="myFunction()" placeholder="Search by Location" title="">
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
								<input type="text" class="form-control" placeholder="" value="1000">
							</div>
							<div class="col-sm-4">
								<input type="text" class="form-control" placeholder="" value="1500">
							</div>
						  </div>
						</div>
					  </div>
					  <div class="form-group">
						<label class="control-label col-sm-5" for="">Approx Share Offered:</label>
						<div class="col-sm-7">
						  <div class="row">
							<div class="col-xs-5">
								<input type="text" class="form-control" placeholder="min" value="50">
							</div>
							<div class="col-xs-1">
								<span class="percentage">%</span>
							</div>
							<div class="col-xs-5">
								<input type="text" class="form-control" placeholder="max" value="60">
							</div>
							<div class="col-xs-1">
								<span class="percentage">%</span>
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
<?php $this->view('home-footer') ?>
		<script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
						