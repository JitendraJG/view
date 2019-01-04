	<?php $this->view('admin/user-header'); 
	$session_user = $this->session->userdata('user'); ?>

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
						<li role="presentation" class="active"><a href="#allIdeas" aria-controls="allIdeas" role="tab" data-toggle="tab">All Ideas <span class="badge"><?php echo count($bussinessIdeas); ?> <i class="new">New</i></span></a></li>
						<li role="presentation"><a href="<?php echo base_url('ideazone-saved'); ?>" >Saved <span class="badge blue badge-blue"><?php echo count($savedideas); ?></span></a></li>
						<li role="presentation"><a href="#" aria-controls="initiated" role="tab" data-toggle="tab">Initiated <span class="badge green">0</span></a></li>
						<li role="presentation"><a href="#" aria-controls="investable" role="tab" data-toggle="tab">Investable <span class="badge purple">0</span></a></li>
						<li role="presentation"><a href="#" aria-controls="posted" role="tab" data-toggle="tab">Posted <span class="badge pink">10</span></a></li>
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
					$fid = $CI->usersby($uid);		
					$uid= $o['ID'];
					$CI =& get_instance();
					$issave = $CI->savedideacheck($uid,$session_user);		
					//print_r($issave);

					?>
					 <span id="tab<?php echo $o['ID']; ?>"></span>
							
							<div class="ideazone-content" id="<?php echo $o['ID']; ?>">
								<h3><img src="<?php echo base_url(); ?>uploads/images/<?php echo $fid['PROFILE_PICTURE']; ?>" class="profile-pic" /> <?php echo $fid['NAME']; ?><span><?php echo $o['POSTED_DATE']; ?></span> <span class="pull-right">
								<?php 
					$pideaid= $o['ID'];
					$CI =& get_instance();
					$feed = $CI->FeedbackPost($pideaid);	
					$count= count($feed); 
					$sum=0;
					foreach($feed as $f){
							$sum+=$f['feedback'];
						}
						$fdb = $sum/$count;
						?>
								<span class="stars" data-rating="<?php echo $fdb; ?>" data-num-stars="5"></span>
								
								</span></h3>
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
										<?php 
										$a =  $o['resources']; 
										$b =  $o['resources_qty'];
										$cats = explode(",", $a);
										$catss = explode(",", $b);
										$arrlength=count($cats);
										for($x=0;$x<$arrlength;$x++){?>
							 <tr>
													<td><?php  $cats[$x]; 
													
													$ind= $cats[$x];
													$CI =& get_instance();
													$skill = $CI->Skill($ind);
													echo $skill['SDESC'];
													
													
													?></td>
													<td><?php echo $catss[$x]; ?></td>
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
    
<?php }	?>
											
												
													
										</tbody>
									</table>
								</div>
								<div class="btn-group polls">
			<button class="Initiate-model" data-postid="<?php echo $o['ID']; ?>" data-toggle="modal" data-target="#initiatePopup">Initiate</button>
					<button class="Invest-model" data-toggle="modal" data-postid="<?php echo $o['ID']; ?>" data-target="#investModal">Invest</button>
									<ul class="pull-right list-unstyled">
										<li><a class="opinion">Opinion</a></li>
										<li><a id="<?php echo $o['ID']; ?>" class="impress">Impress</a>
				<div class="impress-cont impresscount<?php echo $o['ID']; ?>">
				<input id="input-2" name="input-2" class="rating rating-loading" data-min="0" data-max="5" data-step="0.1" value="3" />
											</div><span class="feedbackmsg" id="feedbackmsg<?php echo $o['ID']; ?>"></span>
											
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
										<li><a id="<?php echo $o['ID']; ?>" uid="<?php echo $session_user; ?>" class="save-unsave save-unsave_<?php echo $o['ID']; ?>">
										<?php if(count($issave)=='0'){ echo "Save";}else{ echo "Unsave"; } ?>
										</a></li>
										<li><a href="#" class="report-model" data-postid="<?php echo $o['ID']; ?>" data-toggle="modal" data-target="#reportModal">Report</a></li>
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
					<form id="report-submit">
						<div class="radio-grp">
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
								<input type="radio" id="option-1" class="mdl-radio__button" name="optionsreport" value="1" checked>
								<span class="mdl-radio__label">Spam</span>
							</label>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2">
								<input type="radio" id="option-2" class="mdl-radio__button" name="optionsreport" value="2">
								<span class="mdl-radio__label">Duplicate Idea</span>
							</label>
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-3">
								<input type="radio" id="option-3" class="mdl-radio__button" name="optionsreport" value="3">
								<span class="mdl-radio__label">Factually Incorrect</span>
							</label>
							<input type="hidden" name="postidreport" id="postidreport"> 
						</div>
						</form>
						<div class="msgs"></div>
					</div>
					<div class="modal-footer">
						<button id="report-report" class="btn btn-initiate btn-ignore">Submit</button>
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
				<form class="form-horizontal"  id="initiate-form" >
				<div class="modal-body">
					<h5>Offer:</h5>
					<div>
						<div class="md-checkbox md-checkbox-inline">
							<input name="Employee"  id="i1" type="checkbox">
							<label for="i1">Employee</label>
						</div>
						<div class="md-checkbox md-checkbox-inline">
							<input name="Partner"  id="i2" type="checkbox">
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
									<select name="Role" id="Roleintiate"  class="mb-5" style="width:100%" tabindex="-1">
<?php foreach($industry as $ind){ ?>
<option  value="<?php echo $ind['ID']; ?>"><?php echo $ind['SDESC']; ?></option>
<?php } ?>
</select>
<script>
        $(document).ready(function() { 
		$("#Roleintiate").select2({
    placeholder: "Search by Role"
});});
    </script>	
								</div>
							  </div>
							  <div class="form-group">
								<label class="control-label col-sm-5" for="">Prefered Location:</label>
								<div class="col-sm-5">
					<select name="Location" id="Locationintiate"  class="mb-5" style="width:100%" tabindex="-1">
<?php foreach($locations as $p){ ?>
 <option value="<?php echo $p['c_code']; ?>"><?php echo $p['c_name']; ?></option>
<?php } ?>
</select>
<script>
        $(document).ready(function() { 
		$("#Locationintiate").select2({
    placeholder: "Search by Location"
});});
    </script>		
								</div>
							  </div>
							  <div class="form-group">
								<label class="control-label col-sm-5" for="">Approx Investiment Expected:</label>
								<div class="col-sm-7">
								  <div class="row">
									<div class="col-sm-4">
										<select name="currency" id="currencyintitate" width="100%" class="">
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
        $(document).ready(function() { 
		$("#currencyintitate").select2({
    placeholder: "Select by currency"
});});
    </script>
									</div>
									<div class="col-sm-4">
										<input type="number" name="initiate_min" id="initiate_min" class="form-control" placeholder="min">
									</div>
									<div class="col-sm-4">
										<input type="number" name="initiate_max" id="initiate_max" class="form-control" placeholder="max">
										<input type="hidden" name="post_id" id="initiatepost_id" class="form-control" placeholder="Postid">
									</div>
								  </div>
								</div>
							  </div>
							  <div class="form-group">
								<label class="control-label col-sm-5" for="">Approx Share Offered:</label>
								<div class="col-sm-7">
								  <div class="row">
									<div class="col-xs-5">
										<input name="share_offered_min" type="number" class="form-control" placeholder="min">
									</div>
									<div class="col-xs-1">
										<span class="percentage">%</span>
									</div>
									<div class="col-xs-5">
										<input name="share_offered_max" type="number" class="form-control" placeholder="max">
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
							<input name="consultant" id="i4" type="checkbox">
							<label for="i4">Consultant</label>
						</div>
						<div class="md-checkbox">
							<input name="mentorship" id="i5" type="checkbox">
							<label for="i5">Mentorship</label>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button id="initiate-submit" class="btn btn-initiate btn-ignore">Submit</button>
				</div>
				</form>
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
					<form id="invest-form" class="form-horizontal" action="/">
					  <div class="form-group">
						<label class="control-label col-sm-5" for="">Role Expected from Investor:</label>
						<div class="col-sm-5">
							
							<select name="Role" id="Role"  class="mb-5" style="width:100%" tabindex="-1">
<?php foreach($industry as $ind){ ?>
<option  value="<?php echo $ind['ID']; ?>"><?php echo $ind['SDESC']; ?></option>
<?php } ?>
</select>
<script>
        $(document).ready(function() { 
		$("#Role").select2({
    placeholder: "Search by Role"
});});
    </script>	
							
								
						</div>
					  </div>
					  <div class="form-group">
						<label class="control-label col-sm-5" for="">Prefered Location:</label>
						<div class="col-sm-5">
							
							<select name="Location" id="Location"  class="mb-5" style="width:100%" tabindex="-1">
<?php foreach($locations as $p){ ?>
 <option value="<?php echo $p['c_code']; ?>"><?php echo $p['c_name']; ?></option>
<?php } ?>
</select>
<script>
        $(document).ready(function() { 
		$("#Location").select2({
    placeholder: "Search by Location"
});});
    </script>		
						</div>
					  </div>
					  
					  <div class="form-group">
						<label class="control-label col-sm-5" for="">Approx Investiment Expected:</label>
						<div class="col-sm-7">
						  <div class="row">
							<div class="col-sm-4">
								<select name="currency" id="currency" width="100%" class="">
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
        $(document).ready(function() { 
		$("#currency").select2({
    placeholder: "Select by currency"
});});
    </script>	
	<style>
	div#s2id_currency {
    width: 100%;
}	div#s2id_currencyintitate {
    width: 100%;
}</style>
							</div>
							<div class="col-sm-4">
									<input type="number" name="currency_min" id="currency_min" class="form-control" placeholder="min">
							</div>
							
									<input type="hidden" name="post_id" id="post_id" class="form-control" placeholder="Postid">
							
							<div class="col-sm-4">
								<input type="number" name="currency_max" id="currency_max" class="form-control" placeholder="max">
							</div>
						  </div>
						</div>
					  </div>
					  <div class="form-group">
						<label class="control-label col-sm-5" for="">Approx Share Offered:</label>
						<div class="col-sm-7">
						  <div class="row">
							<div class="col-xs-5">
								<input type="number" name="min_offer" class="form-control" placeholder="min">
							</div>
							<div class="col-xs-1">
								<span class="percentage">%</span>
							</div>
							<div class="col-xs-5">
								<input type="number" name="max_offer" id="max_offer" class="form-control" placeholder="max">
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
					<button id="invest-submit" class="btn btn-initiate btn-ignore">Submit</button>
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
							
							
						</div>
					  </div>
					  <div class="form-group">
				<label class="control-label col-sm-5" for="">Prefered Location:</label>
				<div class="col-sm-5">
				<input type="text" class="form-control mb-5" id="search-input"  placeholder="Search by Location" title="">
								
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
	
	
	<!-- jQuery -->
<?php $this->view('home-footer') ?>
		<script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
<script>
$(".report-model").click(function(){
	var postid = $(this).data("postid");
		$('#postidreport').val(postid);
		 $('.msgs').html('');
  $('.radio-grp').show();
   
});
$(".Invest-model").click(function(){
	var postid = $(this).data("postid");
		$('#post_id').val(postid);
   
});
$(".Initiate-model").click(function(){
	var postid = $(this).data("postid");
		$('#initiatepost_id').val(postid);  
});

$("#invest-submit").click(function(e) {


    var form = $(this);
    var url = "<?php echo base_url('Ideazone/InvestIdea'); ?>";

    $.ajax({
           type: "POST",
           url: url,
           data: $('#invest-form').serialize(), // serializes the form's elements.
           success: function(data)
           {
               console.log(data);
			   $('#invest-form').trigger("reset");
 $('#investModal').modal('toggle');

			   // show response from the php script.
           }
         });

    e.preventDefault(); // avoid to execute the actual submit of the form.
});
$("#initiate-submit").click(function(e) {


    var form = $(this);
    var url = "<?php echo base_url('Ideazone/initiateIdea'); ?>";

    $.ajax({
           type: "POST",
           url: url,
           data: $('#initiate-form').serialize(), // serializes the form's elements.
           success: function(data)
           {
               console.log(data);
			  $('#initiate-form').trigger("reset");
			$('#initiatePopup').modal('toggle');

			   // show response from the php script.
           }
         });

    e.preventDefault(); // avoid to execute the actual submit of the form.
});

$(document).on('click', '.impress', function(){ 	
	var color = $('.label-default').text();
	 var impress = color.slice(0, 3);
	 var impressid = $(this).attr("id");
	 if(impress.length!=''){
     var url = "<?php echo base_url('Ideazone/ImpressIdea'); ?>";

    $.ajax({
           type: "POST",
           url: url,
          data : {ideaid: impressid, impress: impress},
           success: function(data)
           {
               console.log(data);
			  $('.label-default').text("");
			  $('#feedbackmsg'+impressid).html('Thanks for feedback');
			  setTimeout(function() { $('#feedbackmsg'+impressid).html(''); }, 2000);
			  
			//$('#initiatePopup').modal('toggle');

			   // show response from the php script.
           }
         });
	 }
});

$("#report-report").click(function(e) {
 
    var url = "<?php echo base_url('Ideazone/reportIdea'); ?>";

    $.ajax({
           type: "POST",
           url: url,
           data: $('#report-submit').serialize(), // serializes the form's elements.
           success: function(data)
           {
               console.log(data);
			  $('#report-submit').trigger("reset");
			  $('.radio-grp').hide();
			  $('.msgs').html('<h3>Thanks for reporting Will get back to you.</h3>');
			      setTimeout(function() {
        $('#reportModal').modal('toggle');
    }, 1500);
			

			   // show response from the php script.
           }
         });

    e.preventDefault(); // avoid to execute the actual submit of the form.
});
</script>
<style>
.feedbackmsg {
    position: absolute;
    top: 28px;
    left: -23px;
    right: -40px;
    line-height: 1.2;
    font-size: 14px;
    color: #ffb600;
}
</style>