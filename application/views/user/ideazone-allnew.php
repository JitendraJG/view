<?php 
$this->view('admin/user-header'); 
$redirect= 'https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$session_user = $this->session->userdata('user'); ?>
	<style>
	p.ideatags{ margin:0px;height: 50px;overflow-y: scroll;}
	</style>
	<section class="ideazone"> 
		<div class="container">
			<div class="row mb-20">
				<div class="col-md-3" >
					<ol class="breadcrumb hidden-xs hidden-sm">
					  <li class="breadcrumb-item">Dashboard</li>
					  <li class="breadcrumb-item">Idea Zone</li>
					  
					</ol>
				</div>
				<div class="col-md-6">
				<?php $reg = $this->session->flashdata('msg'); 
						if($reg){	?>
						<p style="color: #6460e1;"><?php echo $reg; ?></p><?php } ?>
				</div>
				<div class="col-md-3 text-right">
					<a href="<?php echo base_url('Ideazone/Postidea'); ?>"><button class="btn btn-info mb-0 mblock-btn">Post a Business Idea</button></a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3  side-sticky">
					<div class="white-block mb-30 hidden-xs hidden-sm">
						<h3 class="active"><a >Idea Zone</a></h3>
						<!-- <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
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
									<li><a href="<?php echo base_url('Gain/Entrepreneurs'); ?>">Entreprenuer</a></li>
									<li><a href="<?php echo base_url('Gain/Investors'); ?>" class="active">Invester</a></li>
								</ul>
							  </div>
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
						</div>-->
						
					</div>
					<a href="javascript:void()" class="filter-btn visible-xs visible-sm"><img src="<?php echo base_url(); ?>assets/images/filter.png" alt="filter"/></a>
					<div class="filter-content grey-block mb-20">
						<h4 class="text-center">Search filters</h4>
						<form action="<?php echo base_url('Ideazone/search'); ?>">
							<label>Industry</label>
							<?php
if(!empty($_GET['industrkey']))
{$marks = $_GET['industrkey'];
if (in_array("32110", $marks)){  echo "Checked";  } }?>
<select name="industrkey[]" id="e2_2" multiple="multiple" class="e2_2aaa mb-5" style="width:100%" tabindex="-1">
<?php

 foreach($industry as $ind){ ?>
<option  value="<?php echo $ind['ID']; ?>" <?php if(!empty($_GET['industrkey'])){$marks = $_GET['industrkey'];
if (in_array($ind['ID'], $marks)){  echo "selected";  } }?>><?php echo $ind['SDESC']; ?></option>
<?php } ?>
</select>
<script>
        $(document).ready(function() { 
		$(".e2_2aaa").select2({
    placeholder: "Search by Industry"
});});
    </script>		
<!--	<label>Investment
								<select class="form-control sub-dw pull-right">
									<option value="">INR</option>
								</select>
							</label>
							<div class="row">
								<div class="col-xs-6">
									<input value="<?php if(!empty($_GET['min_inv'])){ echo $_GET['min_inv'];} ?>" name="min_inv" type="text" class="form-control" placeholder="min" />
								</div>
								<div class="col-xs-6">
									<input value="<?php if(!empty($_GET['max_inv'])){ echo $_GET['max_inv'];} ?>" name="max_inv" type="text" class="form-control" placeholder="max" />
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
									<input value="<?php if(!empty($_GET['ret_min'])){ echo $_GET['ret_min'];} ?>" name="ret_min" type="text" class="form-control" placeholder="min" />
								</div>
								<div class="col-xs-6">
									<input value="<?php if(!empty($_GET['ret_max'])){ echo $_GET['ret_max'];} ?>" name="ret_max" type="text" class="form-control" placeholder="max" />
								</div>
							</div>
							
							<label>Break-Even
								<select class="form-control sub-dw pull-right">
									<option value="">Monthly</option>
								</select>
							</label>
							<div class="row">
								<div class="col-xs-6">
									<input value="<?php if(!empty($_GET['break_min'])){ echo $_GET['break_min'];} ?>" name="break_min" type="text" class="form-control" placeholder="min" />
								</div>
								<div class="col-xs-6">
									<input value="<?php if(!empty($_GET['break_max'])){ echo $_GET['break_max'];} ?>" name="break_max" type="text" class="form-control" placeholder="max" />
								</div>
							</div>-->
							
							<p class="mt-20">
							<a href="<?php echo base_url('ideazone-all'); ?>" class="btn btn-info mb-0 mr-10">Clear</a>
							<button class="btn btn-primary mb-0">Apply</button>
							</p>
						</form>
					</div>
				</div>
				<div class="col-md-9">
					<div>
					  <!-- Nav tabs -->
					  <ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#allIdeas" aria-controls="allIdeas" role="tab" data-toggle="tab">All Ideas  <!--<i class="new">New</i>--></span></a></li>
						<li role="presentation"><a href="#saved" aria-controls="saved" role="tab" data-toggle="tab">Saved </a></a></li>
						<!--<li role="presentation"><a href="#initiated" aria-controls="initiated" role="tab" data-toggle="tab">Initiated <span class="badge green"><?php echo count($InitiatedIdeas); ?></span></a></li>
						<li role="presentation"><a href="#investable" aria-controls="investable" role="tab" data-toggle="tab">Investable <span class="badge purple"><?php echo count($InvestIdeas); ?></span></a></li>-->
						<li role="presentation"><a href="#posted" aria-controls="posted" role="tab" data-toggle="tab">Posted </a></li>
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
							<div class="panel panel-default ideazone-content" id="allPosted_div_<?php echo $o['ID']; ?>">
							<div class="panel-heading">
					<?php if(empty($fid['PROFILE_PICTURE'])){
									$primg = 'svg.svg';
								}else{
									$primg = $fid['PROFILE_PICTURE'];
								} ?>				
		<h3><img src="<?php echo base_url(); ?>uploads/images/<?php echo $primg; ?>" class="profile-pic" /> <?php echo $fid['NAME']; ?>
		<span><?php //echo time_elapsed_string(strtotime($o['POSTED_DATE'])); ?></span>
		<span class="pull-right">
								<?php 
					$pideaid= $o['ID'];
					$CI =& get_instance();
					$feed = $CI->FeedbackPost($pideaid);	
					$count= count($feed); 
					if(!empty($count)){
					$sum=0;
					foreach($feed as $f){
					if (is_numeric($f['feedback'])) {
						$sum+=$f['feedback'];
						}else{
							$sum=0;
						}
						}
						$fdb = $sum/$count;
					}else{
						$fdb=0;
					}
						?>
								<span class="stars allstars_<?php echo $o['ID']; ?>" data-rating="<?php echo $fdb; ?>" data-num-stars="5"></span>
								
								</span></h3>
								</div>
								<div class="panel-body">
								<h6>Idea Title</h6>
								<p><?php echo $o['IDEA_TITLE']; ?></p>
								<h6>Industry</h6>
								<p><?php echo $find['SDESC']; ?></p>
								<h6>Description</h6>
								<div class="cmore see-more_<?php echo $o['ID']; ?>">
								<p ><?php $big = $o['DESCRIPTION'];
								echo truncate($big, 100, 10000);	?> <span><a data-seemore="<?php echo $o['ID']; ?>" class="seemore btn btn-xs btn-info">See More</a></span></p>
								</div>
								<div class="see-les_<?php echo $o['ID']; ?>" style="display:none">
								<p><?php echo $o['DESCRIPTION']; ?></p>
								
								<p><a data-seemore="<?php echo $o['ID']; ?>" class="see-lesss btn btn-xs btn-info">See Less</a> 
								</p>
								
								<ul class="investment list-unstyled">
									<li>Approx Investment <br> <span>
									<?php echo $o['CURRENCY']; ?> 
									<?php echo ceil($o['MIN_INVESTMENT']); ?> - 
									<?php echo ceil($o['MAX_INVESTMENT']); ?>
									</span></li>
									<li>Approx Returns (<?php echo $o['RETURNS_TYPE']; ?>) <br> <span> <?php echo ceil($o['MIN_RETURNS']); ?> - <?php echo ceil($o['MAX_RETURNS']); ?></span></li>
									<li>Approx Breakeven <br> <span><?php echo $o['BREAKEVEN_TYPE']; ?> <?php echo $o['MIN_BREAKEVEN']; ?> - <?php echo $o['MAX_BREAKEVEN']; ?></span></li>
								</ul>
                                <p class="visible-xs visible-sm mb-0">Resources Required</p>
								<div class="table-responsive">
									<p class="hidden-xs hidden-sm">Resources Required</p>
									<table class="table table-bordered">
										<thead>
											<tr>
												<th>Skill Name</th>
												<th>No. People</th>
												<!--<th>Contribute</th>-->
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
													<!--<td>All
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
													</div></td>-->
												</tr>
    
<?php }	?>
											
												
													
										</tbody>
									</table>
									
								</div>
								</div>
								<div class="btn-group polls">
			<!--<button class="Initiate-model" data-postid="<?php echo $o['ID']; ?>" data-toggle="modal" data-target="#initiatePopup">Initiate</button>
					<button class="Invest-model" data-toggle="modal" data-postid="<?php echo $o['ID']; ?>" data-target="#investModal">Invest</button>-->
									<ul class="pull-right list-unstyled">
				<li><a class="opinion" data-opinion="<?php echo $o['ID']; ?>">Opinion</a></li>
				<li><a id="<?php echo $o['ID']; ?>" data-impid="<?php echo $o['ID']; ?>" class="impress impressall star_<?php echo $o['ID']; ?>">Impress</a>
				<div data-imid="<?php echo $o['ID']; ?>" class="impress-cont impresscount<?php echo $o['ID']; ?>">
				<input name="input-2" class="rating rating-loading" data-imid="<?php echo $o['ID']; ?>" data-min="0" data-max="5" data-step="0.1" value="0" />
											</div><span class="feedbackmsg" id="feedbackmsg<?php echo $o['ID']; ?>"></span>
											
										</li>
				<li><a class="sharing" data-share="<?php echo $o['ID']; ?>">Share</a>
					<div class="sharing-cont share_<?php echo $o['ID']; ?>"> 
						<ul class="share-list ">
							<li><a href="https://plus.google.com/share?url=<?php echo base_url('ideazone/idea/').$o['ID']; ?>"><i class="fa fa-google-plus-square" title="Google Plus"></i></a></li>
							<li><a target="_blank" href="http://www.facebook.com/sharer.php?u=<?php echo base_url('ideazone/idea/').$o['ID']; ?>"><i class="fa fa-facebook-square" title="Facebook"></i></a></li>
							<li><a href="https://twitter.com/share?url=<?php echo base_url('ideazone/idea/').$o['ID']; ?>&text=<?php echo $o['IDEA_TITLE']; ?>" target="_blank"><i class="fa fa-twitter-square" title="Twitter"></i></a></li>
							<li><a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo base_url('ideazone/idea/').$o['ID']; ?>" target="_blank"><i class="fa fa-linkedin-square" title="Linkedin"></i></a></li>
							<li> <a  data-clipboard-text="<?php echo base_url('ideazone/idea/').$o['ID']; ?>" class="allowCopy"><i class="fa fa-link" title="copy link">
                        </i></li>
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
					<div class="opinion-cont opinion_<?php echo $o['ID']; ?>">
						<div class="post-content">
						<div class="post-container" style="border: ridge 1px #ccc;">
						<div class="post-detail">
						<div class="post-comment">
			<?php
			if(empty($user['PROFILE_PICTURE'])){
				$user['PROFILE_PICTURE']='svg.svg';
			} 
			if(empty($comus['PROFILE_PICTURE'])){
				$comus['PROFILE_PICTURE']='svg.svg';
			} 
			if(empty($scomus['PROFILE_PICTURE'])){
				$scomus['PROFILE_PICTURE']='svg.svg';
			}
			if(empty($fid['PROFILE_PICTURE'])){
				$fid['PROFILE_PICTURE']='svg.svg';
			} 
			
			?>	
		
<ul class="v-opinion">
<li> <img style="width:48px; height: 48px;" src="<?php echo base_url(); ?>uploads/images/<?php echo $user['PROFILE_PICTURE']; ?>" alt="" class="profile-pic"></li>
<li>
<textarea style="margin-top: 0px; margin-bottom: 3px;height:48px;" rows="3" class="form-control comment_title_<?php echo $o['ID']; ?>" placeholder="Post a comment"></textarea>	
</li>
<li>
<button data-replayparent="<?php echo $o['ID']; ?>" data-postideaid="<?php echo $o['ID']; ?>" class="csbmt btn-block">send</button>
</li>
</ul>			
		
	

								
							  </div>
							  </div>
							  </div>
							  <div class="commm_<?php echo $o['ID']; ?>">
						<?php 
									$ind= $o['ID']; 
									$CI =& get_instance();
									$com = $CI->Comments($ind);
									//print_r($com);
									foreach($com as $c){
						?>
						  <div class="post-container">
						  <?php 
									$in= $c['comment_byuser']; 
									$CI =& get_instance();
									$comus = $CI->userdata($in);
									if(empty($comus['PROFILE_PICTURE'])){
				$comus['PROFILE_PICTURE']='svg.svg';
			} 
						  ?>
							
							<div class="post-detail">
							
							<img src="<?php echo base_url(); ?>uploads/images/<?php echo $comus['PROFILE_PICTURE']; ?>" class="profile-photo-md pull-left" alt="">
							  <div class="user-info">
								<h5><a class="profile-link"><?php echo $comus['NAME']; ?></a>
								<span class="text-muted">
								<?php //echo time_elapsed_string(strtotime($c['comment_created'])); ?></span>
								</h5>
								
							  </div>
							  <div class="reaction">
								<a class="btn text-green"></a>
							  </div>
							 
																		  
								<div class="reaction">
								<a class="btn text-green"></a>
								</div>
								<div class="post-text">
								<p><?php echo $c['comment_name']; ?><i class="em em-anguished"></i> <i class="em em-anguished"></i> <i class="em em-anguished"></i><br>
								<a data-commentid="<?php echo $c['comment_id']; ?>" data-status="1"  class="stat-item commentlike commentlike_<?php echo $c['comment_id']; ?>">
								<i class="fa fa-thumbs-up"></i> <span class="like_class_<?php echo $c['comment_id']; ?>"><?php $in= $c['comment_id']; 
									$CI =& get_instance();
									$clike = $CI->comment_ById($in);
									if(!empty($clike)){
									if($clike['status']='1'){echo "Liked";}else{ echo "Like";}}else{echo "Like";}
									?></span>
									</a></p>
								</div>
								
									
						<div class="replay_input_<?php echo $c['comment_id']; ?> post-comment" >
									<img src="<?php echo base_url(); ?>uploads/images/<?php echo $user['PROFILE_PICTURE']; ?>" alt="" class="profile-pic">
			<input type="text" class="replay_comment_name_<?php echo $c['comment_id']; ?> form-control" onKeyPress="return checkSubmit(event)" placeholder="Replay a comment">
			<a data-postid="<?php echo $o['ID']; ?>" data-replayid="<?php echo $c['comment_id']; ?>" class="replay stat-item replay_<?php echo $c['comment_id']; ?>">
									<i class="fa fa-reply"></i> 
									</a>
									</div>
									<div class="subcommm_<?php echo $c['comment_id']; ?>">
									 <div class="sub-post"><?php 
								$ind= $c['comment_id']; 
								$CI =& get_instance();
								$scom = $CI->SubComments($ind);
									
								foreach($scom as $sc){
								
									$in= $sc['comment_byuser']; 
									$CI =& get_instance();
									$scomus = $CI->userdata($in);
									if(empty($scomus['PROFILE_PICTURE'])){
				$scomus['PROFILE_PICTURE']='svg.svg';
			} 
						  ?>
							 
												  <div class="post-comment">
													<img src="<?php echo base_url(); ?>uploads/images/<?php echo $scomus['PROFILE_PICTURE']; ?>" alt="" class="profile-pic">
													<p><a  class="profile-link"><?php echo $scomus['NAME']; ?> </a><i class="em em-laughing"></i><br>
													<?php echo $sc['comment_name']; ?><br>
													<a data-commentid="<?php echo $sc['comment_id']; ?>" data-status="1"  class="stat-item commentlike commentlike_<?php echo $sc['comment_id']; ?>">
									<i class="fa fa-thumbs-up"></i> <span class="like_class_<?php echo $sc['comment_id']; ?>"><?php $in= $sc['comment_id']; 
									$CI =& get_instance();
									$clike = $CI->comment_ById($in);
									if(!empty($clike)){
									if($clike['status']='1'){echo "Liked";}else{ echo "Like";}}else{echo "Like";}
									?></span>
									</a>
													</p>
												  </div>
								<?php }?>
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
							<?php if(!empty($o['TAGS'])){ ?>
						<div class="panel-footer" style="background-color:#f9f9f9;padding:5px 15px; ">
							<p class="ideatags"><?php echo $o['TAGS']; ?></p>
						</div>
					<?php } ?>
							</div>
							<?php } ?>
					<div class="pagination pagination_edit">			
						<?php
						foreach ($links as $link) {
						echo $link;
						}	?>
					</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="saved">
							
							
							<?php //print_r($bussinessIdeas);
							foreach($SavedIdeasb as $o){
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
							
							<div class="panel panel-default ideazone-content" id="saved<?php echo $o['ID']; ?>">
					<div class="panel-heading">
							
								<h3>
								<?php if(empty($fid['PROFILE_PICTURE'])){
									$primg = 'svg.svg';
								}else{
									$primg = $fid['PROFILE_PICTURE'];
								} ?>
						
<img src="<?php echo base_url(); ?>uploads/images/<?php echo $primg; ?>" class="profile-pic" /> <?php echo $fid['NAME']; ?>
	<span><?php //echo time_elapsed_string(strtotime($o['POSTED_DATE'])); ?></span>
						<span class="pull-right">
								<?php  
					$pideaid= $o['ID'];
					$CI =& get_instance();
					$feed = $CI->FeedbackPost($pideaid);	
					$count= count($feed); 
					
					if(!empty($count)){
					$sum=0;
					foreach($feed as $f){
						if (is_numeric($f['feedback'])) {
						$sum+=$f['feedback'];
						}else{
							$sum=0;
						}
							
						}
						$fdb = $sum/$count;
					}else{
						$fdb=0;
					}
						?>
								<span class="stars" data-rating="<?php echo $fdb; ?>" data-num-stars="5"></span>
								
								</span></h3>
								</div>
					<div class="panel-body">
								<h6>Idea Title</h6>
								<p><?php echo $o['IDEA_TITLE']; ?></p>
								<h6>Industry</h6>
								<p><?php echo $find['SDESC']; ?></p>
								<h6>Description</h6>
								
								<div class="see-more_<?php echo $o['ID']; ?>">
								<?php $big = $o['DESCRIPTION'];
							
								echo truncate($big, 100, 10000);	?><span> 
								<a data-seemore="<?php echo $o['ID']; ?>" class="seemore">...See More</a></span>
								</div>
								<div class="see-les_<?php echo $o['ID']; ?>" style="display:none">
								<?php echo $o['DESCRIPTION']; ?><a data-seemore="<?php echo $o['ID']; ?>" class="see-lesss">...See Less</a>
								<ul class="investment list-unstyled">
									<li>Approx Investment <br> <span><?php echo $o['CURRENCY']; ?> <?php echo ceil($o['MIN_INVESTMENT']); ?> - <?php echo ceil($o['MAX_INVESTMENT']); ?></span></li>
									<li>Approx Returns (<?php echo $o['RETURNS_TYPE']; ?>) <br> <span> <?php echo ceil($o['MIN_RETURNS']); ?> - <?php echo ceil($o['MAX_RETURNS']); ?></span></li>
									<li>Approx Breakeven <br> <span><?php echo $o['BREAKEVEN_TYPE']; ?> <?php echo $o['MIN_BREAKEVEN']; ?> - <?php echo $o['MAX_BREAKEVEN']; ?></span></li>
								</ul>
                                <p class="visible-xs visible-sm mb-0">Resources Required</p>
								<div class="table-responsive">
									<p class="hidden-xs hidden-sm">Resources Required</p>
									<table class="table table-bordered">
										<thead>
											<tr>
												<th>Skill Name</th>
												<th>No. People</th>
												<!--<th>Contribute</th>-->
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
													<!--<td>All
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
													</div></td>-->
												</tr>
    
<?php }	?>
											
												
													
										</tbody>
									</table>
								</div>
								</div>
								<div class="btn-group polls">
			<!--<button class="Initiate-model" data-postid="<?php echo $o['ID']; ?>" data-toggle="modal" data-target="#initiatePopup">Initiate</button>
					<button class="Invest-model" data-toggle="modal" data-postid="<?php echo $o['ID']; ?>" data-target="#investModal">Invest</button>-->
									<ul class="pull-right list-unstyled">
										<li><a class="opinion" data-opinion="<?php echo $o['ID']; ?>">Opinion</a></li>
										<li><a id="<?php echo $o['ID']; ?>" class="impress savedimpress">Impress</a>
				<div class="impress-cont impresscount<?php echo $o['ID']; ?>">
				<input id="input-2" name="input-2" class="rating rating-loading" data-min="0" data-max="5" data-step="0.1" value="0" />
											</div><span class="feedbackmsg" id="feedbackmsgsaved<?php echo $o['ID']; ?>"></span>
											
										</li>
										<li>
										<a class="sharing" data-share="<?php echo $o['ID']; ?>">Share</a>
					<div class="sharing-cont share_<?php echo $o['ID']; ?>"> 
												<ul class="share-list">
							<li><a href="https://plus.google.com/share?url=<?php echo base_url('ideazone/idea/').$o['ID']; ?>"><i class="fa fa-google-plus-square" title="Google Plus"></i></a></li>
							<li><a target="_blank" href="http://www.facebook.com/sharer.php?u=<?php echo base_url('ideazone/idea/').$o['ID']; ?>"><i class="fa fa-facebook-square" title="Facebook"></i></a></li>
							<li><a href="https://twitter.com/share?url=<?php echo base_url('ideazone/idea/').$o['ID']; ?>&text=<?php echo $o['DESCRIPTION']; ?>&hashtags=viewham" target="_blank"><i class="fa fa-twitter-square" title="Twitter"></i></a></li>
							<li><a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo base_url('ideazone/idea/').$o['ID']; ?>" target="_blank"><i class="fa fa-linkedin-square" title="Linkedin"></i></a></li>
							<li> <a  data-clipboard-text="<?php echo base_url('ideazone/idea/').$o['ID']; ?>" class="allowCopy"><i class="fa fa-link" title="copy link">
                        </i></li>
						</ul>
											</div>
										</li>
										<li><a id="<?php echo $o['ID']; ?>" uid="<?php echo $session_user; ?>" class="save-unsave saved-unsave save-unsave_<?php echo $o['ID']; ?>">
										<?php if(count($issave)=='0'){ echo "Save";}else{ echo "Unsave"; } ?>
										</a></li>
										<li><a href="#" class="report-model" data-postid="<?php echo $o['ID']; ?>" data-toggle="modal" data-target="#reportModal">Report</a></li>
									</ul>
								</div>
								
<div class="btn-group polls clearfix">
					<div class="opinion-cont opinion_<?php echo $o['ID']; ?>">
						<div class="post-content">
						<div class="post-container" style="border: ridge 1px #ccc;">
						<div class="post-detail">
						<div class="post-comment">
		<img style="width:48px; height: 48px;" src="<?php echo base_url(); ?>uploads/images/<?php echo $user['PROFILE_PICTURE']; ?>" alt="" class="profile-pic">
<textarea style="margin-top: 3px; margin-bottom: 3px; height: 48px;" rows="3" class="form-control savedcomment_title_<?php echo $o['ID']; ?>" placeholder="Post a comment"></textarea>		
<button data-savedreplayparent="<?php echo $o['ID']; ?>" data-savedpostideaid="<?php echo $o['ID']; ?>" class="savedcsbmt">send</button>
								
							  </div>
							  </div>
							  </div>
							  <div class="savedcommm_<?php echo $o['ID']; ?>">
						<?php 
									$ind= $o['ID']; 
									$CI =& get_instance();
									$com = $CI->Comments($ind);
									//print_r($com);
									foreach($com as $c){
						?>
						  <div class="post-container">
						  <?php 
									$in= $c['comment_byuser']; 
									$CI =& get_instance();
									$comus = $CI->userdata($in);
									if(empty($comus['PROFILE_PICTURE'])){
				$comus['PROFILE_PICTURE']='svg.svg';
			} 
						  ?>
							
							<div class="post-detail">
							
							<img src="<?php echo base_url(); ?>uploads/images/<?php echo $comus['PROFILE_PICTURE']; ?>" class="profile-photo-md pull-left" alt="">
							  <div class="user-info">
								<h5><a class="profile-link"><?php echo $comus['NAME']; ?></a></h5>
								<p class="text-muted">
								<?php //echo time_elapsed_string(strtotime($c['comment_created'])); ?></p>
							  </div>
							  <div class="reaction">
								<a class="btn text-green"></a>
							  </div>
							 
																		  
								<div class="reaction">
								<a class="btn text-green"></a>
								</div>
								<div class="post-text">
								<p><?php echo $c['comment_name']; ?><i class="em em-anguished"></i> <i class="em em-anguished"></i> <i class="em em-anguished"></i>
								<a data-savedcommentid="<?php echo $c['comment_id']; ?>" data-status="1"  class="stat-item savedcommentlike savedcommentlike_<?php echo $c['comment_id']; ?>">
								<i class="fa fa-thumbs-up"></i> <span class="savedlike_class_<?php echo $c['comment_id']; ?>"><?php $in= $c['comment_id']; 
									$CI =& get_instance();
									$clike = $CI->comment_ById($in);
									if(!empty($clike)){
									if($clike['status']='1'){echo "Liked";}else{ echo "Like";}}else{echo "Like";}
									?></span>
									</a></p>
								</div>
								
									
			<div class="replay_input_<?php echo $c['comment_id']; ?> post-comment" >
			<img src="<?php echo base_url(); ?>uploads/images/<?php echo $user['PROFILE_PICTURE']; ?>" alt="" class="profile-pic">
			<input type="text" class="savedreplay_comment_name_<?php echo $c['comment_id']; ?> form-control" placeholder="Post a comment">
			<a data-savedpostid="<?php echo $o['ID']; ?>" data-savedreplayid="<?php echo $c['comment_id']; ?>" class="savedreplay stat-item savedreplay_<?php echo $c['comment_id']; ?>">
									<i class="fa fa-reply">send</i></a>
			</div>
									<div class="savedsubcommm_<?php echo $c['comment_id']; ?>">
									 <div class="sub-post"><?php 
								$ind= $c['comment_id']; 
								$CI =& get_instance();
								$scom = $CI->SubComments($ind);
									
								foreach($scom as $sc){
								
									$in= $sc['comment_byuser']; 
									$CI =& get_instance();
									$scomus = $CI->userdata($in);
									if(empty($scomus['PROFILE_PICTURE'])){
				$scomus['PROFILE_PICTURE']='svg.svg';
			} 
			
						  ?>
							 
												  <div class="post-comment">
													<img src="<?php echo base_url(); ?>uploads/images/<?php echo $scomus['PROFILE_PICTURE']; ?>" alt="" class="profile-pic">
													<p><a  class="profile-link"><?php echo $scomus['NAME']; ?> </a><i class="em em-laughing"></i>
													<?php echo $sc['comment_name']; ?>
													<a data-savedcommentid="<?php echo $sc['comment_id']; ?>" data-status="1"  class="stat-item savedcommentlike savedcommentlike_<?php echo $sc['comment_id']; ?>">
									<i class="fa fa-thumbs-up"></i> <span class="savedlike_class_<?php echo $sc['comment_id']; ?>"><?php $in= $sc['comment_id']; 
									$CI =& get_instance();
									$clike = $CI->comment_ById($in);
									if(!empty($clike)){
									if($clike['status']='1'){echo "Liked";}else{ echo "Like";}}else{echo "Like";}
									?></span>
									</a>
													</p>
												  </div>
								<?php }?>
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
					<?php if(!empty($o['TAGS'])){ ?>
						<div class="panel-footer" style="background-color:#f9f9f9;padding:5px 15px; ">
							<p style="margin:0px;"><?php  echo $o['TAGS']; ?></p>
						</div>
					<?php } ?>

				
								</div> 
							<?php }?>
							
						</div>
						
						<div role="tabpanel" class="tab-pane fade" id="initiated">
							
								
							<?php //print_r($InitiatedIdeas);
							foreach($InitiatedIdeas as $o){
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
					 <span id="initab<?php echo $o['ID']; ?>"></span>
							
							<div class="ideazone-content" id="initiate<?php echo $o['ID']; ?>">
							<?php if(empty($fid['PROFILE_PICTURE'])){
									$primg = 'svg.svg';
								}else{
									$primg = $fid['PROFILE_PICTURE'];
								} ?>
	<h3><img src="<?php echo base_url(); ?>uploads/images/<?php echo $primg; ?>" class="profile-pic" /> <?php echo $fid['NAME']; ?>
	<span><?php //echo time_elapsed_string(strtotime($o['POSTED_DATE'])); ?></span>
								<span class="pull-right"><button class="btn btn-initiate" data-toggle="modal" data-target="#editInitiateModal<?php echo $o['ID']; ?>">Initiate <i class="glyphicon glyphicon-pencil"></i></button> &nbsp;<button data-posttype="1" data-postinid="<?php echo $o['ID']; ?>" class="ignoreidea btn btn-initiate btn-ignore" data-toggle="modal" data-target="#ignoreModal">Ignore</button></span></h3>
								<h6>Idea Title</h6>
								<p><?php echo $o['IDEA_TITLE']; ?></p>
								<h6>Industry</h6>
								<p><?php echo $find['SDESC']; ?></p>
								<h6>Description</h6>
								<p><?php echo $o['DESCRIPTION']; ?> </p>
								
								<div class="more-cont">
								<ul class="investment list-unstyled">
									<li>Approx Investment <br> <span><?php echo $o['CURRENCY']; ?> <?php echo ceil($o['MIN_INVESTMENT']); ?> - <?php echo ceil($o['MAX_INVESTMENT']); ?></span></li>
									<li>Approx Returns (<?php echo $o['RETURNS_TYPE']; ?>) <br> <span> 
									<?php echo ceil($o['MIN_RETURNS']); ?> - <?php echo ceil($o['MAX_RETURNS']); ?></span></li>
									<li>Approx Breakeven <br> <span><?php echo $o['BREAKEVEN_TYPE']; ?> <?php echo $o['MIN_BREAKEVEN']; ?> - <?php echo $o['MAX_BREAKEVEN']; ?></span></li>
								</ul>
                                <p class="visible-xs visible-sm mb-0">Resources Required</p>
								<div class="table-responsive">
									<p class="hidden-xs hidden-sm">Resources Required</p>
																	</div>
									
									<!-- innerTabs1 Start -->
									<div class="innerTabStyle1">
									  <ul class="nav nav-tabs" role="tablist">
										<li role="presentation" class="active"><a href="#reqSkills" aria-controls="reqSkills" role="tab" data-toggle="tab">Required Skills</a></li>
										<li role="presentation"><a href="#investors" aria-controls="investors" role="tab" data-toggle="tab">Investors</a></li>
										<li role="presentation"><a href="#initiators" aria-controls="initiators" role="tab" data-toggle="tab">Initiators</a></li>
									  </ul>
									  <div class="tab-content">
										<div role="tabpanel" class="tab-pane p10 active" id="reqSkills">
											<!-- innerTabs2 Start -->
											<div class="innerTabStyle2">
											  <ul class="nav nav-tabs" role="tablist">
												<li role="presentation" class="active"><a href="#role1" aria-controls="role1" role="tab" data-toggle="tab">Ux Designer</a></li>
												<li role="presentation"><a href="#role2" aria-controls="role2" role="tab" data-toggle="tab">UI Designer</a></li>
												<li role="presentation"><a href="#role3" aria-controls="role3" role="tab" data-toggle="tab">UI Developer</a></li>
												<li role="presentation"><a href="#role4" aria-controls="role4" role="tab" data-toggle="tab">Web Developer</a></li>
												<li role="presentation"><a href="#role5" aria-controls="role5" role="tab" data-toggle="tab">Web Developer</a></li>
												<li role="presentation"><a href="#role6" aria-controls="role6" role="tab" data-toggle="tab">Web Developer</a></li>
											  </ul>
											  <div class="tab-content">
												<div role="tabpanel" class="tab-pane p10 active" id="role1">
													<p class="text-center qty">Quantity: 3</p>
													<div class="row">
														<div class="col-sm-6 col-md-4">
															<div class="profile-box">
																<div class="p10">
																<div class="mb-10">
																	<span>Mr Manohar</span>
																	<span class="pull-right"><span class="stars" data-rating="3" data-num-stars="5" ></span></span>
																</div>
																<div class="mb-10">
																	<div class="gray-text">Skill Name</div>
																	<div class="dark-text">Sr. Ux Designer</div>
																</div>
																<div class="mb-10">
																	<div class="gray-text">Location</div>
																	<div class="dark-text">Hyderabad, Banglore</div>
																</div>
																<div class="mb-10">
																	<div class="gray-text">Experience</div>
																	<div class="dark-text">05 Years</div>
																</div>
																<div class="mb-10">
																	<div class="gray-text">Price</div>
																	<div class="dark-text">$ 450/hr</div>
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
																	<span>Mr Manohar</span>
																	<span class="pull-right"><span class="stars" data-rating="3" data-num-stars="5" ></span></span>
																</div>
																<div class="mb-10">
																	<div class="gray-text">Skill Name</div>
																	<div class="dark-text">Sr. Ux Designer</div>
																</div>
																<div class="mb-10">
																	<div class="gray-text">Location</div>
																	<div class="dark-text">Hyderabad, Banglore</div>
																</div>
																<div class="mb-10">
																	<div class="gray-text">Experience</div>
																	<div class="dark-text">05 Years</div>
																</div>
																<div class="mb-10">
																	<div class="gray-text">Price</div>
																	<div class="dark-text">$ 450/hr</div>
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
																	<span>Mr Manohar</span>
																	<span class="pull-right"><span class="stars" data-rating="3" data-num-stars="5" ></span></span>
																</div>
																<div class="mb-10">
																	<div class="gray-text">Skill Name</div>
																	<div class="dark-text">Sr. Ux Designer</div>
																</div>
																<div class="mb-10">
																	<div class="gray-text">Location</div>
																	<div class="dark-text">Hyderabad, Banglore</div>
																</div>
																<div class="mb-10">
																	<div class="gray-text">Experience</div>
																	<div class="dark-text">05 Years</div>
																</div>
																<div class="mb-10">
																	<div class="gray-text">Price</div>
																	<div class="dark-text">$ 450/hr</div>
																</div>
																</div>
																<div>
																	<button class="btn">View Contact</button>
																	<button class="btn">Shortlist</button>
																</div>
															</div>
														</div>
													</div>
													<p class="text-center"><a href="" class="link">Show all</a></p>
												</div>
												<div role="tabpanel" class="tab-pane p10" id="role2">UI Designer</div>
												<div role="tabpanel" class="tab-pane p10" id="role3">UI Developer</div>
												<div role="tabpanel" class="tab-pane p10" id="role4">Web Developer</div>
												<div role="tabpanel" class="tab-pane p10" id="role5">Web Developer</div>
												<div role="tabpanel" class="tab-pane p10" id="role6">Web Developer</div>
											  </div>
										   </div>
										   <!-- innerTabs2 End -->
										</div>
										<div role="tabpanel" class="tab-pane p10" id="investors">Investors</div>
										<div role="tabpanel" class="tab-pane p10" id="initiators">Initiators</div>
									  </div>
								   </div>
								   <!-- innerTabs1 End -->
								</div>
								<p class="text-center"><a href="#" class="see-more">...See More</a></p>
								<ul class="pull-right list-unstyled">
										<li><a class="opinion" data-opinion="<?php echo $o['ID']; ?>">Opinion</a></li>
										<li><a id="<?php echo $o['ID']; ?>" class="impress iniimpress">Impress</a>
				<div class="impress-cont impresscount<?php echo $o['ID']; ?>">
				<input id="input-2" name="input-2" class="rating rating-loading" data-min="0" data-max="5" data-step="0.1" value="0" />
											</div><span class="feedbackmsg" id="feedbackmsgini<?php echo $o['ID']; ?>"></span>
											
										</li>
										<li>
										<a class="sharing" data-share="<?php echo $o['ID']; ?>">Share</a>
					<div class="sharing-cont share_<?php echo $o['ID']; ?>"> 
												<ul class="share-list">
							<li><a href="https://plus.google.com/share?url=<?php echo base_url('ideazone/idea/').$o['ID']; ?>"><i class="fa fa-google-plus-square" title="Google Plus"></i></a></li>
							<li><a target="_blank" href="http://www.facebook.com/sharer.php?u=<?php echo base_url('ideazone/idea/').$o['ID']; ?>"><i class="fa fa-facebook-square" title="Facebook"></i></a></li>
							<li><a href="https://twitter.com/share?url=<?php echo base_url('ideazone/idea/').$o['ID']; ?>&text=<?php echo $o['DESCRIPTION']; ?>&hashtags=viewham" target="_blank"><i class="fa fa-twitter-square" title="Twitter"></i></a></li>
							<li><a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo base_url('ideazone/idea/').$o['ID']; ?>" target="_blank"><i class="fa fa-linkedin-square" title="Linkedin"></i></a></li>
							<li> <a  data-clipboard-text="<?php echo base_url('ideazone/idea/').$o['ID']; ?>" class="allowCopy"><i class="fa fa-link" title="copy link">
                        </i></li>
						</ul>
											</div>
										</li>
										<li><a id="<?php echo $o['ID']; ?>" uid="<?php echo $session_user; ?>" class="save-unsave save-unsave_<?php echo $o['ID']; ?>">
										<?php if(count($issave)=='0'){ echo "Save";}else{ echo "Unsave"; } ?>
										</a></li>
										<li><a href="#" class="report-model" data-postid="<?php echo $o['ID']; ?>" data-toggle="modal" data-target="#reportModal">Report</a></li>
									</ul>
<div class="btn-group polls clearfix">
	<div class="opinion-cont opinion_<?php echo $o['ID']; ?>">
	<div class="post-content">
		<div class="post-container" style="border: ridge 1px #ccc;">
			<div class="post-detail">
				<div class="post-comment">
		<img style="width:48px; height: 48px;" src="<?php echo base_url(); ?>uploads/images/<?php echo $user['PROFILE_PICTURE']; ?>" alt="" class="profile-pic">
<textarea style="margin-top: 3px; margin-bottom: 3px; height: 48px;" rows="3" class="form-control inicomment_title_<?php echo $o['ID']; ?>" placeholder="Post a comment"></textarea>		
<button data-inireplayparent="<?php echo $o['ID']; ?>" data-inipostideaid="<?php echo $o['ID']; ?>" class="inicsbmt">send</button>
								
							  </div>
							  </div>
							  </div>
							  <div class="inicommm_<?php echo $o['ID']; ?>">
						<?php 
									$ind= $o['ID']; 
									$CI =& get_instance();
									$com = $CI->Comments($ind);
									//print_r($com);
									foreach($com as $c){
						?>
						  <div class="post-container">
						  <?php 
									$in= $c['comment_byuser']; 
									$CI =& get_instance();
									$comus = $CI->userdata($in);
									if(empty($comus['PROFILE_PICTURE'])){
				$comus['PROFILE_PICTURE']='svg.svg';
			} 
						  ?>
							
							<div class="post-detail">
							
							<img src="<?php echo base_url(); ?>uploads/images/<?php echo $comus['PROFILE_PICTURE']; ?>" class="profile-photo-md pull-left" alt="">
							  <div class="user-info">
								<h5><a class="profile-link"><?php echo $comus['NAME']; ?></a></h5>
								<p class="text-muted">
								<?php //echo time_elapsed_string(strtotime($c['comment_created'])); ?></p>
							  </div>
							  <div class="reaction">
								<a class="btn text-green"></a>
							  </div>
							 
																		  
								<div class="reaction">
								<a class="btn text-green"></a>
								</div>
								<div class="post-text">
								<p><?php echo $c['comment_name']; ?><i class="em em-anguished"></i> <i class="em em-anguished"></i> <i class="em em-anguished"></i>
								<a data-inicommentid="<?php echo $c['comment_id']; ?>" data-status="1"  class="stat-item inicommentlike inicommentlike_<?php echo $c['comment_id']; ?>">
								<i class="fa fa-thumbs-up"></i> <span class="inilike_class_<?php echo $c['comment_id']; ?>"><?php $in= $c['comment_id']; 
									$CI =& get_instance();
									$clike = $CI->comment_ById($in);
									if(!empty($clike)){
									if($clike['status']='1'){echo "Liked";}else{ echo "Like";}}else{echo "Like";}
									?></span>
									</a></p>
								</div>
								
									
						<div class="inireplay_input_<?php echo $c['comment_id']; ?> post-comment" >
									<img src="<?php echo base_url(); ?>uploads/images/<?php echo $user['PROFILE_PICTURE']; ?>" alt="" class="profile-pic">
			<input type="text" class="inireplay_comment_name_<?php echo $c['comment_id']; ?> form-control" placeholder="Post a comment">
			<a data-inipostid="<?php echo $o['ID']; ?>" data-inireplayid="<?php echo $c['comment_id']; ?>" class="inireplay stat-item inireplay_<?php echo $c['comment_id']; ?>">
									<i class="fa fa-reply">send</i> 
									</a>
									</div>
									<div class="inisubcommm_<?php echo $c['comment_id']; ?>">
									 <div class="sub-post"><?php 
								$ind= $c['comment_id']; 
								$CI =& get_instance();
								$scom = $CI->SubComments($ind);
									
								foreach($scom as $sc){
								
									$in= $sc['comment_byuser']; 
									$CI =& get_instance();
									$scomus = $CI->userdata($in);
									if(empty($scomus['PROFILE_PICTURE'])){
				$scomus['PROFILE_PICTURE']='svg.svg';
			} 
						  ?>
							 
			<div class="post-comment">
				<img src="<?php echo base_url(); ?>uploads/images/<?php echo $scomus['PROFILE_PICTURE']; ?>" alt="" class="profile-pic">
				<p><a  class="profile-link"><?php echo $scomus['NAME']; ?> </a><i class="em em-laughing"></i>
				<?php echo $sc['comment_name']; ?>
				<a data-inicommentid="<?php echo $sc['comment_id']; ?>" data-status="1"  class="stat-item inicommentlike inicommentlike_<?php echo $sc['comment_id']; ?>">
				<i class="fa fa-thumbs-up"></i> <span class="inilike_class_<?php echo $sc['comment_id']; ?>"><?php $in= $sc['comment_id']; 
				$CI =& get_instance();
				$clike = $CI->comment_ById($in);
				if(!empty($clike)){
				if($clike['status']='1'){echo "Liked";}else{ echo "Like";}}else{echo "Like";}
				?></span>
				</a>
				</p>
			</div>
			<?php }?>
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
							<!--Edit initiate Modal -->
	<div id="editInitiateModal<?php echo $o['ID']; ?>" class="modal fade" role="dialog">
		<div class="modal-dialog modal-md">		
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h5 class="modal-title">Edit Initiate Idea</h5>
					<?php $modelid = $o['ID'];
				$CI =& get_instance();
				$ini = $CI->intiatedbyId($modelid);
				//print_r($ini);
				?>
				</div>
				<form class="form-horizontal"  id="update-initiate-form" >
				<div class="modal-body">
					<h5>Offer:</h5>
					<div>
						<div class="md-checkbox md-checkbox-inline">
							<input name="Employee"  id="i1" type="checkbox" <?php if($ini['is_employee'] == 'on'){ echo "checked";} ?>>
							<label for="i1">Employee</label>
						</div>
						<div class="md-checkbox md-checkbox-inline">
							<input name="Partner"  id="i2" type="checkbox" <?php if($ini['is_partner'] == 'on'){ echo "checked";} ?>>
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
									<select name="Role" id="editRoleintiate"  class="mb-5" style="width:100%" tabindex="-1">
<?php foreach($industry as $ind){ ?>
<option  value="<?php echo $ind['ID']; ?>" <?php if($ini['role'] == $ind['ID']){ echo "selected";} ?>><?php echo $ind['SDESC']; ?></option>
<?php } ?>
</select>
<script>
        $(document).ready(function() { 
		$("#editRoleintiate").select2({
    placeholder: "Search by Role"
});});
    </script>	
								</div>
							  </div>
							  <div class="form-group">
								<label class="control-label col-sm-5" for="">Prefered Location:</label>
								<div class="col-sm-5">
					<select name="Location" id="editLocationintiate"  class="mb-5" style="width:100%" tabindex="-1">
<?php foreach($locations as $p){ ?>
 <option value="<?php echo $p['c_code']; ?>" <?php if($ini['location'] == $p['c_code']){ echo "selected";} ?>><?php echo $p['c_name']; ?></option>
<?php } ?>
</select>
<script>
        $(document).ready(function() { 
		$("#editLocationintiate").select2({
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
										<select name="currency" id="editcurrencyintitate" width="100%" class="">
<option value="INR" <?php if($ini['currency'] == 'INR'){ echo "selected";} ?>>India</option>
<option value="USD" <?php if($ini['currency'] == 'USD'){ echo "selected";} ?>>U.S. Dollar</option>
<option value="EUR" <?php if($ini['currency'] == 'EUR'){ echo "selected";} ?>>European Euro</option>
<option value="JPY" <?php if($ini['currency'] == 'JPY'){ echo "selected";} ?>>Japanese </option>
<option value="GBP" <?php if($ini['currency'] == 'GBP'){ echo "selected";} ?>>British Pound </option>
<option value="CHF" <?php if($ini['currency'] == 'CHF'){ echo "selected";} ?>>Swiss Franc </option>
<option value="CAD" <?php if($ini['currency'] == 'CAD'){ echo "selected";} ?>>Canadian Dollar </option>
<option value="AUD" <?php if($ini['currency'] == 'AUD'){ echo "selected";} ?>>Australian </option>
<option value="ZAR" <?php if($ini['currency'] == 'ZAR'){ echo "selected";} ?>>South African Rand </option>								
								</select>
								<script>
        $(document).ready(function() { 
		$("#editcurrencyintitate").select2({
    placeholder: "Select by currency"
});});
    </script>
									</div>
		<div class="col-sm-4">
			<input type="number" name="initiate_min" value="<?php echo $ini['initiate_min']; ?>" id="initiate_min" class="form-control" placeholder="min">
		</div>
		<div class="col-sm-4">
			<input type="number" name="initiate_max" value="<?php echo $ini['initiate_max']; ?>" id="initiate_max" class="form-control" placeholder="max">
			<input type="hidden" name="post_id" value="<?php echo $ini['id']; ?>" id="initiatepost_id<?php echo $ini['id']; ?>" class="form-control" placeholder="Postid">
			<input type="hidden" name="ideapost_id" value="<?php echo $o['ID']; ?>" id="initiateidea_id<?php echo $ini['id']; ?>" class="form-control" placeholder="Postid">
		</div>
								  </div>
								</div>
							  </div>
							  <div class="form-group">
								<label class="control-label col-sm-5" for="">Approx Share Offered:</label>
								<div class="col-sm-7">
								  <div class="row">
									<div class="col-xs-5">
										<input value="<?php echo $ini['share_offered_min']; ?>" name="share_offered_min" type="number" class="form-control" placeholder="min">
									</div>
									<div class="col-xs-1">
										<span class="percentage">%</span>
									</div>
									<div class="col-xs-5">
										<input value="<?php echo $ini['share_offered_max']; ?>" name="share_offered_max" type="number" class="form-control" placeholder="max">
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
							<input name="consultant"  id="i4" type="checkbox" <?php if($ini['consultant'] == 'on'){ echo "checked";} ?>>
							<label for="i4">Consultant</label>
						</div>
						<div class="md-checkbox">
							<input name="mentorship"  id="i5" type="checkbox" <?php if($ini['mentorship'] == 'on'){ echo "checked";} ?>>
							<label for="i5">Mentorship</label>
						</div>
					</div>
				</div>
				<div class="modal-footer"><div class="inismsg"></div>
					<button id="update-initiate-submit" data-postinid="<?php echo $o['ID']; ?>" class="btn btn-initiate btn-ignore">Submit</button>
				</div>
				</form>
				
			</div>		
		</div>
	</div>

							<?php }?>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="investable">
							<?php //print_r($InitiatedIdeas);
							foreach($InvestIdeas as $o){
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
					 <span id="investTab<?php echo $o['ID']; ?>"></span>
							
							<div class="ideazone-content" id="<?php echo $o['ID']; ?>">
			<?php if(empty($fid['PROFILE_PICTURE'])){
									$primg = 'svg.svg';
								}else{
									$primg = $fid['PROFILE_PICTURE'];
								} ?>				
		<h3><img src="<?php echo base_url(); ?>uploads/images/<?php echo $primg; ?>" class="profile-pic" /> <?php echo $fid['NAME']; ?>
		<span><?php //echo time_elapsed_string(strtotime($o['POSTED_DATE'])); ?></span>
								<span class="pull-right"><button class="btn btn-initiate" data-toggle="modal" data-target="#editInvestModal<?php echo $o['ID']; ?>">Invest <i class="glyphicon glyphicon-pencil"></i></button> &nbsp;<button data-posttype="2" data-postinid="<?php echo $o['ID']; ?>" class="ignoreidea btn btn-initiate btn-ignore" data-toggle="modal" data-target="#ignoreModal">Ignore</button></span></h3>
								<h6>Idea Title</h6>
								<p><?php echo $o['IDEA_TITLE']; ?></p>
								<h6>Industry</h6>
								<p><?php echo $find['SDESC']; ?></p>
								<h6>Description</h6>
								<p><?php echo $o['DESCRIPTION']; ?></p>
								
								<div class="more-cont">
								<ul class="investment list-unstyled">
									<li>Approx Investment <br> <span><?php echo $o['CURRENCY']; ?> <?php echo ceil($o['MIN_INVESTMENT']); ?> - <?php echo ceil($o['MAX_INVESTMENT']); ?></span></li>
									<li>Approx Returns (<?php echo $o['RETURNS_TYPE']; ?>) <br> <span> <?php echo ceil($o['MIN_RETURNS']); ?> - <?php echo ceil($o['MAX_RETURNS']); ?></span></li>
									<li>Approx Breakeven <br> <span><?php echo $o['BREAKEVEN_TYPE']; ?> <?php echo $o['MIN_BREAKEVEN']; ?> - <?php echo $o['MAX_BREAKEVEN']; ?></span></li>
								</ul>
									<h6>Initiators</h6>
									<div class="row p30">
										<div class="col-sm-6 col-md-4">
											<div class="profile-box">
												<div class="p10">
												<div class="mb-10">
													<span>Mr Manohar</span>
													<span class="pull-right"><span class="stars" data-rating="3" data-num-stars="5"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></span></span>
												</div>
												<div class="mb-10">
													<div class="gray-text">Skill Name</div>
													<div class="dark-text">Sr. Ux Designer</div>
												</div>
												<div class="mb-10">
													<div class="gray-text">Location</div>
													<div class="dark-text">Hyderabad, Banglore</div>
												</div>
												<div class="mb-10">
													<div class="gray-text">Experience</div>
													<div class="dark-text">05 Years</div>
												</div>
												<div class="mb-10">
													<div class="gray-text">Price</div>
													<div class="dark-text">$ 450/hr</div>
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
													<span>Mr Manohar</span>
													<span class="pull-right"><span class="stars" data-rating="3" data-num-stars="5"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></span></span>
												</div>
												<div class="mb-10">
													<div class="gray-text">Skill Name</div>
													<div class="dark-text">Sr. Ux Designer</div>
												</div>
												<div class="mb-10">
													<div class="gray-text">Location</div>
													<div class="dark-text">Hyderabad, Banglore</div>
												</div>
												<div class="mb-10">
													<div class="gray-text">Experience</div>
													<div class="dark-text">05 Years</div>
												</div>
												<div class="mb-10">
													<div class="gray-text">Price</div>
													<div class="dark-text">$ 450/hr</div>
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
													<span>Mr Manohar</span>
													<span class="pull-right"><span class="stars" data-rating="3" data-num-stars="5"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></span></span>
												</div>
												<div class="mb-10">
													<div class="gray-text">Skill Name</div>
													<div class="dark-text">Sr. Ux Designer</div>
												</div>
												<div class="mb-10">
													<div class="gray-text">Location</div>
													<div class="dark-text">Hyderabad, Banglore</div>
												</div>
												<div class="mb-10">
													<div class="gray-text">Experience</div>
													<div class="dark-text">05 Years</div>
												</div>
												<div class="mb-10">
													<div class="gray-text">Price</div>
													<div class="dark-text">$ 450/hr</div>
												</div>
												</div>
												<div>
													<button class="btn">View Contact</button>
													<button class="btn">Shortlist</button>
												</div>
											</div>
										</div>
									</div> 
								
									<p class="text-center"><a href="" class="link">Show all</a></p>
								</div>
								<p class="text-center"><a href="#" class="see-more">...See More</a></p>								
							<ul class="pull-right list-unstyled">
										<li><a class="opinion" data-opinion="<?php echo $o['ID']; ?>">Opinion</a></li>
										<li><a id="<?php echo $o['ID']; ?>" class="impress invimpress">Impress</a>
				<div class="impress-cont impresscount<?php echo $o['ID']; ?>">
				<input id="input-2" name="input-2" class="rating rating-loading" data-min="0" data-max="5" data-step="0.1" value="0" />
											</div><span class="feedbackmsg" id="feedbackmsginv<?php echo $o['ID']; ?>"></span>
											
										</li>
										<li>
						<a class="sharing" data-share="<?php echo $o['ID']; ?>">Share</a>
					<div class="sharing-cont share_<?php echo $o['ID']; ?>"> 				
												<ul class="share-list">
							<li><a href="https://plus.google.com/share?url=<?php echo base_url('ideazone/idea/').$o['ID']; ?>"><i class="fa fa-google-plus-square" title="Google Plus"></i></a></li>
							<li><a target="_blank" href="http://www.facebook.com/sharer.php?u=<?php echo base_url('ideazone/idea/').$o['ID']; ?>"><i class="fa fa-facebook-square" title="Facebook"></i></a></li>
							<li><a href="https://twitter.com/share?url=<?php echo base_url('ideazone/idea/').$o['ID']; ?>&text=<?php echo $o['DESCRIPTION']; ?>&hashtags=viewham" target="_blank"><i class="fa fa-twitter-square" title="Twitter"></i></a></li>
							<li><a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo base_url('ideazone/idea/').$o['ID']; ?>" target="_blank"><i class="fa fa-linkedin-square" title="Linkedin"></i></a></li>
							<li> <a  data-clipboard-text="<?php echo base_url('ideazone/idea/').$o['ID']; ?>" class="allowCopy"><i class="fa fa-link" title="copy link">
                        </i></li>
						</ul>
											</div>
										</li>
										<li><a id="<?php echo $o['ID']; ?>" uid="<?php echo $session_user; ?>" class="save-unsave save-unsave_<?php echo $o['ID']; ?>">
										<?php if(count($issave)=='0'){ echo "Save";}else{ echo "Unsave"; } ?>
										</a></li>
										<li><a href="#" class="report-model" data-postid="<?php echo $o['ID']; ?>" data-toggle="modal" data-target="#reportModal">Report</a></li>
									</ul>
                                	<div class="btn-group polls clearfix">
	<div class="opinion-cont opinion_<?php echo $o['ID']; ?>">
	<div class="post-content">
		<div class="post-container" style="border: ridge 1px #ccc;">
			<div class="post-detail">
				<div class="post-comment">
		<img style="width:48px; height: 48px;" src="<?php echo base_url(); ?>uploads/images/<?php echo $user['PROFILE_PICTURE']; ?>" alt="" class="profile-pic">
<textarea style="margin-top: 3px; margin-bottom: 3px; height: 48px;" rows="3" class="form-control invcomment_title_<?php echo $o['ID']; ?>" placeholder="Post a comment"></textarea>		
<button data-invreplayparent="<?php echo $o['ID']; ?>" data-invpostideaid="<?php echo $o['ID']; ?>" class="invcsbmt">send</button>
								
							  </div>
							  </div>
							  </div>
							  <div class="invcommm_<?php echo $o['ID']; ?>">
						<?php 
									$ind= $o['ID']; 
									$CI =& get_instance();
									$com = $CI->Comments($ind);
									//print_r($com);
									foreach($com as $c){
						?>
						  <div class="post-container">
						  <?php 
									$in= $c['comment_byuser']; 
									$CI =& get_instance();
									$comus = $CI->userdata($in);
									if(empty($comus['PROFILE_PICTURE'])){
				$comus['PROFILE_PICTURE']='svg.svg';
			} 
						  ?>
							
							<div class="post-detail">
							
							<img src="<?php echo base_url(); ?>uploads/images/<?php echo $comus['PROFILE_PICTURE']; ?>" class="profile-photo-md pull-left" alt="">
							  <div class="user-info">
								<h5><a class="profile-link"><?php echo $comus['NAME']; ?></a></h5>
								<p class="text-muted"><?php //echo time_elapsed_string(strtotime($c['comment_created'])); ?></p>
							  </div>
							  <div class="reaction">
								<a class="btn text-green"></a>
							  </div>
							 
																		  
								<div class="reaction">
								<a class="btn text-green"></a>
								</div>
								<div class="post-text">
								<p><?php echo $c['comment_name']; ?><i class="em em-anguished"></i> <i class="em em-anguished"></i> <i class="em em-anguished"></i>
								<a data-invcommentid="<?php echo $c['comment_id']; ?>" data-status="1"  class="stat-item invcommentlike invcommentlike_<?php echo $c['comment_id']; ?>">
								<i class="fa fa-thumbs-up"></i> <span class="invlike_class_<?php echo $c['comment_id']; ?>"><?php $in= $c['comment_id']; 
									$CI =& get_instance();
									$clike = $CI->comment_ById($in);
									if(!empty($clike)){
									if($clike['status']='1'){echo "Liked";}else{ echo "Like";}}else{echo "Like";}
									?></span>
									</a></p>
								</div>
								
									
						<div class="invreplay_input_<?php echo $c['comment_id']; ?> post-comment" >
			<img src="<?php echo base_url(); ?>uploads/images/<?php echo $user['PROFILE_PICTURE']; ?>" alt="" class="profile-pic">
			<input type="text" class="invreplay_comment_name_<?php echo $c['comment_id']; ?> form-control" placeholder="Post a comment">
			<a data-invpostid="<?php echo $o['ID']; ?>" data-invreplayid="<?php echo $c['comment_id']; ?>" class="invreplay stat-item invreplay_<?php echo $c['comment_id']; ?>">
									<i class="fa fa-reply">send</i> 
									</a>
									</div>
							<div class="invsubcommm_<?php echo $c['comment_id']; ?>">
							<div class="sub-post"><?php 
								$ind= $c['comment_id']; 
								$CI =& get_instance();
								$scom = $CI->SubComments($ind);
								foreach($scom as $sc){
									$in= $sc['comment_byuser']; 
									$CI =& get_instance();
									$scomus = $CI->userdata($in);
									if(empty($scomus['PROFILE_PICTURE'])){
				$scomus['PROFILE_PICTURE']='svg.svg';
			} 
						  ?>
							 
			<div class="post-comment">
				<img src="<?php echo base_url(); ?>uploads/images/<?php echo $scomus['PROFILE_PICTURE']; ?>" alt="" class="profile-pic">
				<p><a  class="profile-link"><?php echo $scomus['NAME']; ?> </a><i class="em em-laughing"></i>
				<?php echo $sc['comment_name']; ?>
				<a data-invcommentid="<?php echo $sc['comment_id']; ?>" data-status="1"  class="stat-item invcommentlike invcommentlike_<?php echo $sc['comment_id']; ?>">
				<i class="fa fa-thumbs-up"></i> <span class="invlike_class_<?php echo $sc['comment_id']; ?>"><?php $in= $sc['comment_id']; 
				$CI =& get_instance();
				$clike = $CI->comment_ById($in);
				if(!empty($clike)){
				if($clike['status']='1'){echo "Liked";}else{ echo "Like";}}else{echo "Like";}
				?></span>
				</a>
				</p>
			</div>
			<?php }?>
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
							
						<!-- edit Invest Modal -->
	<div id="editInvestModal<?php echo $o['ID']; ?>" class="modal fade" role="dialog">
		<div class="modal-dialog modal-md">		
			<!-- Modal content-->
			
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h5 class="modal-title">Edit Invest Idea</h5>
					<?php $modelid = $o['ID'];
				$CI =& get_instance();
				$inv = $CI->investbyId($modelid);
				//print_r($inv);
				?>
				</div>
				<div class="modal-body">
					<form id="update-invest-form" class="form-horizontal" action="/">
					  <div class="form-group">
						<label class="control-label col-sm-5" for="">Role Expected from Investor:</label>
						<div class="col-sm-5">
							
							<select name="Role" id=""  class="Role mb-5" style="width:100%" tabindex="-1">
<?php foreach($industry as $ind){ ?>
<option  value="<?php echo $ind['ID']; ?>" <?php if($inv['role_expect'] == $ind['ID']){ echo "selected";} ?>><?php echo $ind['SDESC']; ?></option>
<?php } ?>
</select>
<script>
        $(document).ready(function() { 
		$(".Role").select2({
    placeholder: "Search by Role"
});});
    </script>	
							
								
						</div>
					  </div>
					  <div class="form-group">
						<label class="control-label col-sm-5" for="">Prefered Location:</label>
						<div class="col-sm-5">
							
							<select name="Location" id=""  class="Location mb-5" style="width:100%" tabindex="-1">
<?php foreach($locations as $p){ ?>
 <option value="<?php echo $p['c_code']; ?>" <?php if($inv['location_id'] == $p['c_code']){ echo "selected";} ?>><?php echo $p['c_name']; ?></option>
<?php } ?>
</select>
<script>
        $(document).ready(function() { 
		$(".Location").select2({
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
								<select name="currency" id="currency" width="100%" class="currency">

<option value="INR" <?php if($inv['currency'] == 'INR'){ echo "selected";} ?>>India</option>
<option value="USD" <?php if($inv['currency'] == 'USD'){ echo "selected";} ?>>U.S. Dollar</option>
<option value="EUR" <?php if($inv['currency'] == 'EUR'){ echo "selected";} ?>>European Euro</option>
<option value="JPY" <?php if($inv['currency'] == 'JPY'){ echo "selected";} ?>>Japanese </option>
<option value="GBP" <?php if($inv['currency'] == 'GBP'){ echo "selected";} ?>>British Pound </option>
<option value="CHF" <?php if($inv['currency'] == 'CHF'){ echo "selected";} ?>>Swiss Franc </option>
<option value="CAD" <?php if($inv['currency'] == 'CAD'){ echo "selected";} ?>>Canadian Dollar </option>
<option value="AUD" <?php if($inv['currency'] == 'AUD'){ echo "selected";} ?>>Australian </option>
<option value="ZAR" <?php if($inv['currency'] == 'ZAR'){ echo "selected";} ?>>South African Rand </option>
						
								</select>
								<script>
        $(document).ready(function() { 
		$(".currency").select2({
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
									<input type="number" value="<?php echo $inv['currency_min']; ?>" name="currency_min" id="currency_min" class="form-control" placeholder="min">
							</div>
							
			<input type="hidden" name="post_id" value="<?php echo $inv['id']; ?>" id="initiatepost_id<?php echo $inv['id']; ?>" class="form-control" placeholder="Postid">
			<input type="hidden" name="ideapost_id" value="<?php echo $o['ID']; ?>" id="initiateidea_id<?php echo $inv['id']; ?>" class="form-control" placeholder="Postid">
							
							<div class="col-sm-4">
								<input type="number" value="<?php echo $inv['currency_max']; ?>" name="currency_max" id="currency_max" class="form-control" placeholder="max">
							</div>
						  </div>
						</div>
					  </div>
					  <div class="form-group">
						<label class="control-label col-sm-5" for="">Approx Share Offered:</label>
						<div class="col-sm-7">
						  <div class="row">
							<div class="col-xs-5">
								<input type="number" value="<?php echo $inv['approx_share_offered_min']; ?>" name="min_offer" class="form-control" placeholder="min">
							</div>
							<div class="col-xs-1">
								<span class="percentage">%</span>
							</div>
							<div class="col-xs-5">
								<input type="number" name="max_offer" value="<?php echo $inv['approx_share_offered_max']; ?>" id="max_offer" class="form-control" placeholder="max">
							</div>
							<div class="col-xs-1">
								<span class="percentage">%</span>
							</div>
						  </div>
						</div>
					  </div>
					</form><div class="inismsg"></div>
				</div>
				<div class="modal-footer">
					
					<button id="update-invest-submit" data-postinvid="<?php echo $o['ID']; ?>" class="btn btn-initiate btn-ignore">Submit</button>
				</div>
			</div>		
		</div>
	</div>

							<?php }?>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="posted">
								
							
							<?php //print_r($bussinessIdeas);
							foreach($PostedIdeas	 as $o){
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
							<?php if(empty($fid['PROFILE_PICTURE'])){
									$primg = 'svg.svg';
								}else{
									$primg = $fid['PROFILE_PICTURE'];
								} ?>	
			<div class="ideazone-content panel panel-default" id="Posted_div_<?php echo $o['ID']; ?>">
			<div class="panel-heading">
			<h3><img src="<?php echo base_url(); ?>uploads/images/<?php echo $primg; ?>" class="profile-pic" /> <?php echo $fid['NAME']; ?>	<span><?php //echo time_elapsed_string(strtotime($o['POSTED_DATE'])); ?></span><span class="pull-right">
					<?php 
					$pideaid= $o['ID'];
					$CI =& get_instance();
					$feed = $CI->FeedbackPost($pideaid);	
					$count= count($feed); 
					if(!empty($count)){
					$sum=0;
					foreach($feed as $f){
						if (is_numeric($f['feedback'])) {
						$sum+=$f['feedback'];
						}else{
							$sum=0;
						}
						}
						$fdb = $sum/$count;
					}else{
						$fdb=0;
					}
						?>
								<span class="stars" data-rating="<?php echo $fdb; ?>" data-num-stars="5"></span>
								
								<a data-deleteid="<?php echo $o['ID']; ?>" class="posted-delete-<?php echo $o['ID']; ?> posted-delete link2">Delete</a></span></h3>
								
							</div>
			<div class="panel-body">		
								<h6>Idea Title</h6>
								<p><?php echo $o['IDEA_TITLE']; ?></p>
								<h6>Industry</h6>
								<p><?php echo $find['SDESC']; ?></p>
								<h6>Description</h6>
								<div class="see-more_<?php echo $o['ID']; ?>">
								<p><?php $big = $o['DESCRIPTION'];
							
								echo truncate($big, 100, 10000);	?> 
								<span><a data-seemore="<?php echo $o['ID']; ?>" class="seemore">...See More</a></span></p>
								</div>
								<div class="see-les_<?php echo $o['ID']; ?>" style="display:none">
								<?php echo $o['DESCRIPTION']; ?><a data-seemore="<?php echo $o['ID']; ?>" class="see-lesss">...See Less</a>
								<ul class="investment list-unstyled">
									<li>Approx Investment <br> <span><?php echo $o['CURRENCY']; ?> <?php echo ceil($o['MIN_INVESTMENT']); ?> - <?php echo ceil($o['MAX_INVESTMENT']); ?></span></li>
									<li>Approx Returns (<?php echo $o['RETURNS_TYPE']; ?>) <br> <span> <?php echo ceil($o['MIN_RETURNS']); ?> - <?php echo ceil($o['MAX_RETURNS']); ?></span></li>
									<li>Approx Breakeven <br> <span><?php echo $o['BREAKEVEN_TYPE']; ?> <?php echo $o['MIN_BREAKEVEN']; ?> - <?php echo $o['MAX_BREAKEVEN']; ?></span></li>
								</ul>
                                <p class="visible-xs visible-sm mb-0">Resources Required</p>
								<div class="table-responsive">
									<p class="hidden-xs hidden-sm">Resources Required</p>
									<table class="table table-bordered">
										<thead>
											<tr>
												<th>Skill Name</th>
												<th>No. People</th>
												<!--<th>Contribute</th>-->
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
										<!--<td>All
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
										</div></td>-->
									</tr>
									<?php }	?>
										</tbody>
									</table>
								</div>
								</div>
								<div class="btn-group polls">
			<!--<button class="Initiate-model" data-postid="<?php echo $o['ID']; ?>" data-toggle="modal" data-target="#initiatePopup">Initiate</button>
					<button class="Invest-model" data-toggle="modal" data-postid="<?php echo $o['ID']; ?>" data-target="#investModal">Invest</button>-->
									<ul class="pull-right list-unstyled">
										<li><a class="opinion" data-opinion="<?php echo $o['ID']; ?>">Opinion</a></li>
										<li><a id="<?php echo $o['ID']; ?>" class="impress impresspost">Impress</a>
				<div class="impress-cont impresscount<?php echo $o['ID']; ?>">
				<input id="input-2" name="input-2" class="rating rating-loading" data-min="0" data-max="5" data-step="0.1" value="0" />
											</div><span class="feedbackmsg" id="feedbackmsgpost<?php echo $o['ID']; ?>"></span>
											
										</li>
										<li>
										<a class="sharing" data-share="<?php echo $o['ID']; ?>">Share</a>
					<div class="sharing-cont share_<?php echo $o['ID']; ?>"> 
												<ul class="share-list">
							<li><a href="https://plus.google.com/share?url=<?php echo base_url('ideazone/idea/').$o['ID']; ?>"><i class="fa fa-google-plus-square" title="Google Plus"></i></a></li>
							<li><a target="_blank" href="http://www.facebook.com/sharer.php?u=<?php echo base_url('ideazone/idea/').$o['ID']; ?>"><i class="fa fa-facebook-square" title="Facebook"></i></a></li>
							<li><a href="https://twitter.com/share?url=<?php echo base_url('ideazone/idea/').$o['ID']; ?>&text=<?php echo $o['DESCRIPTION']; ?>&hashtags=viewham" target="_blank"><i class="fa fa-twitter-square" title="Twitter"></i></a></li>
							<li><a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo base_url('ideazone/idea/').$o['ID']; ?>" target="_blank"><i class="fa fa-linkedin-square" title="Linkedin"></i></a></li>
							<li> <a  data-clipboard-text="<?php echo base_url('ideazone/idea/').$o['ID']; ?>" class="allowCopy"><i class="fa fa-link" title="copy link">
                        </i></li>
						</ul>
											</div>
										</li>
										<li><a id="<?php echo $o['ID']; ?>" uid="<?php echo $session_user; ?>" class="save-unsave save-unsave_<?php echo $o['ID']; ?>">
										<?php if(count($issave)=='0'){ echo "Save";}else{ echo "Unsave"; } ?>
										</a></li>
										<li><a href="#" class="report-model" data-postid="<?php echo $o['ID']; ?>" data-toggle="modal" data-target="#reportModal">Report</a></li>
									</ul>
								</div>
								</div>
	<div class="btn-group polls clearfix">
	<div class="opinion-cont opinion_<?php echo $o['ID']; ?>">
	<div class="post-content">
		<div class="post-container" style="border: ridge 1px #ccc;">
			<div class="post-detail">
				<div class="post-comment">
		<img style="width:48px; height: 48px;" src="<?php echo base_url(); ?>uploads/images/<?php echo $user['PROFILE_PICTURE']; ?>" alt="" class="profile-pic">
<textarea style="margin-top: 3px; margin-bottom: 3px; height: 48px;" rows="3" class="form-control postcomment_title_<?php echo $o['ID']; ?>" placeholder="Post a comment"></textarea>		
<button data-postreplayparent="<?php echo $o['ID']; ?>" data-postpostideaid="<?php echo $o['ID']; ?>" class="postcsbmt">send</button>
								
							  </div>
							  </div>
							  </div>
							  <div class="postcommm_<?php echo $o['ID']; ?>">
						<?php 
									$ind= $o['ID']; 
									$CI =& get_instance();
									$com = $CI->Comments($ind);
									//print_r($com);
									foreach($com as $c){
						?>
						  <div class="post-container">
						  <?php 
									$in= $c['comment_byuser']; 
									$CI =& get_instance();
									$comus = $CI->userdata($in);
									if(empty($comus['PROFILE_PICTURE'])){
				$comus['PROFILE_PICTURE']='svg.svg';
			} 
						  ?>
							
							<div class="post-detail">
							
							<img src="<?php echo base_url(); ?>uploads/images/<?php echo $comus['PROFILE_PICTURE']; ?>" class="profile-photo-md pull-left" alt="">
							  <div class="user-info">
								<h5><a class="profile-link"><?php echo $comus['NAME']; ?></a></h5>
								<p class="text-muted">
								<?php //echo time_elapsed_string(strtotime($c['comment_created'])); ?>
								</p>
							  </div>
							  <div class="reaction">
								<a class="btn text-green"></a>
							  </div>
							 
																		  
								<div class="reaction">
								<a class="btn text-green"></a>
								</div>
								<div class="post-text">
								<p><?php echo $c['comment_name']; ?><i class="em em-anguished"></i> <i class="em em-anguished"></i> <i class="em em-anguished"></i>
								<a data-postcommentid="<?php echo $c['comment_id']; ?>" data-status="1"  class="stat-item postcommentlike postcommentlike_<?php echo $c['comment_id']; ?>">
								<i class="fa fa-thumbs-up"></i> <span class="postlike_class_<?php echo $c['comment_id']; ?>"><?php $in= $c['comment_id']; 
									$CI =& get_instance();
									$clike = $CI->comment_ById($in);
									if(!empty($clike)){
									if($clike['status']='1'){echo "Liked";}else{ echo "Like";}}else{echo "Like";}
									?></span>
									</a></p>
								</div>
								
									
						<div class="postreplay_input_<?php echo $c['comment_id']; ?> post-comment" >
					<img src="<?php echo base_url(); ?>uploads/images/<?php echo $user['PROFILE_PICTURE']; ?>" alt="" class="profile-pic">
			<input type="text" class="postreplay_comment_name_<?php echo $c['comment_id']; ?> form-control" placeholder="Post a comment">
			<a data-psotpostid="<?php echo $o['ID']; ?>" data-postreplayid="<?php echo $c['comment_id']; ?>" class="postreplay stat-item replay_<?php echo $c['comment_id']; ?>">
									<i class="fa fa-reply">send</i> 
									</a>
									</div>
									<div class="postsubcommm_<?php echo $c['comment_id']; ?>">
									 <div class="sub-post"><?php 
								$ind= $c['comment_id']; 
								$CI =& get_instance();
								$scom = $CI->SubComments($ind);
									
								foreach($scom as $sc){
								
									$in= $sc['comment_byuser']; 
									$CI =& get_instance();
									$scomus = $CI->userdata($in);
									if(empty($scomus['PROFILE_PICTURE'])){
								$scomus['PROFILE_PICTURE']='svg.svg';
								} 
						  ?>
							 
			<div class="post-comment">
				<img src="<?php echo base_url(); ?>uploads/images/<?php echo $scomus['PROFILE_PICTURE']; ?>" alt="" class="profile-pic">
				<p><a  class="profile-link"><?php echo $scomus['NAME']; ?> </a><i class="em em-laughing"></i>
				<?php echo $sc['comment_name']; ?>
				<a data-inicommentid="<?php echo $sc['comment_id']; ?>" data-status="1"  class="stat-item postcommentlike postcommentlike_<?php echo $sc['comment_id']; ?>">
				<i class="fa fa-thumbs-up"></i> <span class="postlike_class_<?php echo $sc['comment_id']; ?>"><?php $in= $sc['comment_id']; 
				$CI =& get_instance();
				$clike = $CI->comment_ById($in);
				if(!empty($clike)){
				if($clike['status']='1'){echo "Liked";}else{ echo "Like";}}else{echo "Like";}
				?></span>
				</a>
				</p>
			</div>
			<?php }?>
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
					<div class="radio-ignore">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h5 class="modal-title">Ignore Idea</h5>
					</div>
					<div class="modal-body ">
						<p>Ignoring the initiated idea will result in deletion of your proposal !</p>
						<input type="hidden" id="postin" >
						
						
					</div>
					
					<div class="modal-footer">
						<button class="ignore_completely btn btn-initiate">Ignore Completely </button>
						<button  class="move_to_save btn btn-initiate btn-ignore" data-toggle="modal" data-target="#shortlistModal">Moved to Saved</button>
					</div></div>
					<div class="modal-body msgsignore"></div>
				</div>		
			</div>
		</div>
		<!--<div id="shortlistModal" class="modal fade" role="dialog">
			<div class="modal-dialog modal-sm">
			
			<div class="modal-content">
				<div class="modal-body">
					<p>The Idea has been moved to saved items</p>
				</div>
			</div>
			</div>
		</div>-->
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
								<select name="currency" id="currency" width="100%" class="ccurrency">
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
		$(".ccurrency").select2({
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
<?php 	
function truncate($input, $maxWords, $maxChars)
{
    $words = preg_split('/\s+/', $input);
    $words = array_slice($words, 0, $maxWords);
    $words = array_reverse($words);

    $chars = 0;
    $truncated = array();

    while(count($words) > 0)
    {
        $fragment = trim(array_pop($words));
        $chars += strlen($fragment);

        if($chars > $maxChars) break;

        $truncated[] = $fragment;
    }

    $result = implode($truncated, ' ');

    if ($input == $result)
    {
        return $input;
    }
    else
    {
        return preg_replace('/[^\w]$/', '', $result) . '...';
    }
}
function time_elapsed_string($ptime)
{

    $etime = time() - $ptime;

    if ($etime < 1)
    {
        return '0 seconds';
    }

    $a = array( 365 * 24 * 60 * 60  =>  'year',
                 30 * 24 * 60 * 60  =>  'month',
                      24 * 60 * 60  =>  'day',
                           60 * 60  =>  'hour',
                                60  =>  'minute',
                                 1  =>  'second'
                );
    $a_plural = array( 'year'   => 'years',
                       'month'  => 'months',
                       'day'    => 'days',
                       'hour'   => 'hours',
                       'minute' => 'minutes',
                       'second' => 'seconds'
                );

    foreach ($a as $secs => $str)
    {
        $d = $etime / $secs;
        if ($d >= 1)
        {
            $r = round($d);
            return $r . ' ' . ($r > 1 ? $a_plural[$str] : $str) . ' ago';
        }
    }
} ?>		
	<?php $this->view('home-footer') ?>
		<script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/clipboard.min.js">	</script>
<script>
$(".report-model").click(function(){
	var postid = $(this).data("postid");
		$('#postidreport').val(postid);
		 $('.msgs').html('');
  $('.radio-grp').show();
   
});
$(".saved-unsave").click(function(){
	var svpostid = $(this).attr("id");
	$('#saved'+svpostid).hide();
   
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
			  setTimeout(function() {	location.reload();	}, 1500);
			

			   // show response from the php script.
           }
         });

    e.preventDefault(); // avoid to execute the actual submit of the form.
});
$("#update-initiate-submit").click(function(e) {
var postinid = $(this).data("postinid");
  var url = "<?php echo base_url('Ideazone/UpdateinitiateIdea'); ?>";

    $.ajax({
           type: "POST",
           url: url,
           data: $('#update-initiate-form').serialize(), // serializes the form's elements.
           success: function(data)
           {
               console.log(data);
			  $('#update-initiate-form').trigger("reset");
			  $('#update-initiate-form').hide();
			  $('#update-initiate-submit').hide();
			  $('.inismsg').html('<h4>Successfully Updeted</h4>'); 
			
setTimeout(function() {
$('#editInitiateModal'+postinid).modal('toggle');
	$('.inismsg').html(''); 
	location.reload();
	}, 2000);
			   
           }
         });

    e.preventDefault(); // avoid to execute the actual submit of the form.
});
$("#update-invest-submit").click(function(e) {
var postinid = $(this).data("postinvid");
  var url = "<?php echo base_url('Ideazone/UpdateinvesteIdea'); ?>";

    $.ajax({
           type: "POST",
           url: url,
           data: $('#update-invest-form').serialize(), // serializes the form's elements.
           success: function(data)
           {
               console.log(data);
			  $('#update-invest-form').trigger("reset");
			  $('#update-invest-form').hide();
			  $('#update-invest-submit').hide();
			  $('.inismsg').html('<h4>Successfully Updeted</h4>'); 
			
setTimeout(function() {$('#editInitiateModal'+postinid).modal('toggle');	$('.inismsg').html(''); location.reload();	}, 2000);
			   
           }
         });

    e.preventDefault(); // avoid to execute the actual submit of the form.
});
$('.label-default').on('click', '.caption', function() {
alert('ssss');
	});
$(document).on('click', '.introimpressss', function(){ 	
	// var color = $('.label-default').text();
	 // var impress = color.slice(0, 3);
	  // alert(impress);
	 // if(!$.isNumeric(impress)) {
  // alert(impress);
   // return false;
		// }
	 var impress = $(this).attr("ideaimp");
	 var impressid = $(this).data("impid");
	alert(ideaimp);
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
$(document).on('click', '.iniimpress', function(){ 	
	var color = $('.label-default').text();
	 var impress = color.slice(0, 3);
	 var impressid = $(this).attr("id");
	// alert('dddd');
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
			  $('#feedbackmsgini'+impressid).html('Thanks for feedback');
			  setTimeout(function() { $('#feedbackmsgini'+impressid).html(''); }, 2000);
			  
			//$('#initiatePopup').modal('toggle');

			   // show response from the php script.
           }
         });
	 }
});
$(document).on('click', '.invimpress', function(){ 	
	var color = $('.label-default').text();
	 var impress = color.slice(0, 3);
	 var impressid = $(this).attr("id");
	// alert('dddd');
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
			  $('#feedbackmsginv'+impressid).html('Thanks for feedback');
			  setTimeout(function() { $('#feedbackmsginv'+impressid).html(''); }, 2000);
			  
			//$('#initiatePopup').modal('toggle');

			   // show response from the php script.
           }
         });
	 }
});
$(document).on('click', '.savedimpress', function(){ 	
	var color = $('.label-default').text();
	 var impress = color.slice(0, 3);
	 var impressid = $(this).attr("id");
	// alert('dddd');
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
			  $('#feedbackmsgsaved'+impressid).html('Thanks for feedback');
			  setTimeout(function() { $('#feedbackmsgsaved'+impressid).html(''); }, 2000);
			  
			//$('#initiatePopup').modal('toggle');

			   // show response from the php script.
           }
         });
	 }
});
$(document).on('click', '.impresspost', function(){ 	
	var color = $('.label-default').text();
	 var impress = color.slice(0, 3);
	 var impressid = $(this).attr("id");
	// alert('dddd');
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
			  $('#feedbackmsgpost'+impressid).html('Thanks for feedback');
			  setTimeout(function() { $('#feedbackmsgpost'+impressid).html(''); }, 2000);
			  
			//$('#initiatePopup').modal('toggle');

			   // show response from the php script.
           }
         });
	 }
});

$(".csbmt").click(function(e) {
	
	var postidd = $(this).data("postideaid");
	var parent_id = $(this).data("postparent");
	var postcomment = $('.comment_title_'+postidd).val();
	var url = "<?php echo base_url('Ideazone/Commentsadd'); ?>";
	
	if(postcomment==''){
		
		return false;
	}
    $.ajax({
           type: "POST",
           url: url,
			dataType: "json",
		   data : {ideaid: postidd, parent_id: parent_id, postcomment: postcomment},
           success: function(data)
           {
			   $('.comment_title_'+postidd).val('');
               console.log(data);
			   var username = data.user.NAME;
			   var userimg = data.user.PROFILE_PICTURE;
			   if(userimg.length==''){
				    var userimg = "svg.svg";
			   }
			   var comment_name = data.comment.comment_name;
			   var comment_id = data.comment.comment_id;
			   var comment_created = data.comment.comment_created;
			   var baseurl = "<?php echo base_url('uploads/images/'); ?>"+userimg;
			   var ses = "<?php echo $user['PROFILE_PICTURE']; ?>";
			   if(ses.length==''){
				    var ses = "svg.svg";
			   }
			 
			   var curbaseurl = "<?php echo base_url('uploads/images/'); ?>"+ses;
			   //alert(username);
			  $('.commm_'+postidd).prepend("<div class='post-container'><div class='post-detail'><img src='"+baseurl+"' class='profile-photo-md pull-left' alt=''><div class='user-info'><h5><a class='profile-link'>"+username+"</a></h5><p class='text-muted'>"+comment_created+"</p></div><div class='reaction'><a class='btn text-green'></a></div><div class='reaction'><a class='btn text-green'></a></div><div class='post-text'><p>"+comment_name+"<i class='em em-anguished'></i> <i class='em em-anguished'></i> <i class='em em-anguished'></i><a data-commentid='"+comment_id+"' data-status='1'  class='stat-item commentlike commentlike_"+comment_id+"'><i class='fa fa-thumbs-up'></i><span class='like_class_"+comment_id+"'>Like</span></a></p></div><div class='subcommm_"+comment_id+"'><div class='sub-post'><div class='replay_input_"+comment_id+" post-comment'><img src='"+curbaseurl+"' alt='' class='profile-pic'><input type='text' class='replay_comment_name_"+comment_id+" form-control' placeholder='Post a comment' onKeyPress='return checkSubmit(event)'><a data-postid='"+postidd+"' data-replayid='"+comment_id+"' class='replay stat-item replay_"+comment_id+"'><i class='fa fa-reply'></i></a></div></div></div></div></div>"); 
			  
			
           }
         });

	 e.preventDefault(); 
});
$(".savedcsbmt").click(function(e) {
	
	var postidd = $(this).data("savedpostideaid");
	var parent_id = $(this).data("savedpostparent");
	var postcomment = $('.savedcomment_title_'+postidd).val();
	var url = "<?php echo base_url('Ideazone/Commentsadd'); ?>";
	//alert(postcomment);
	if(postcomment==''){
		
		return false;
	}
    $.ajax({
           type: "POST",
           url: url,
			dataType: "json",
		   data : {ideaid: postidd, parent_id: parent_id, postcomment: postcomment},
           success: function(data)
           {
			   $('.savedcomment_title_'+postidd).val('');
               console.log(data);
			   var username = data.user.NAME;
			   var userimg = data.user.PROFILE_PICTURE;
			   if(userimg.length==''){
				    var userimg = "svg.svg";
			   }
			   var comment_name = data.comment.comment_name;
			   var comment_id = data.comment.comment_id;
			   var comment_created = data.comment.comment_created;
			   var baseurl = "<?php echo base_url('uploads/images/'); ?>"+userimg;
			   var ses = "<?php echo $user['PROFILE_PICTURE']; ?>";
			  if(ses.length==''){
				    var ses = "svg.svg";
			   }
			   var curbaseurl = "<?php echo base_url('uploads/images/'); ?>"+ses;
			   //alert(username);
			  $('.savedcommm_'+postidd).prepend("<div class='post-container'><div class='post-detail'><img src='"+baseurl+"' class='profile-photo-md pull-left' alt=''><div class='user-info'><h5><a class='profile-link'>"+username+"</a></h5><p class='text-muted'>"+comment_created+"</p></div><div class='reaction'><a class='btn text-green'></a></div><div class='reaction'><a class='btn text-green'></a></div><div class='post-text'><p>"+comment_name+"<i class='em em-anguished'></i> <i class='em em-anguished'></i> <i class='em em-anguished'></i><a data-savedcommentid='"+comment_id+"' data-status='1'  class='stat-item savedcommentlike savedcommentlike_"+comment_id+"'><i class='fa fa-thumbs-up'></i><span class='savedlike_class_"+comment_id+"'>Like</span></a></p></div><div class='subcommm_"+comment_id+"'><div class='sub-post'><div class='replay_input_"+comment_id+" post-comment'><img src='"+curbaseurl+"' alt='' class='profile-pic'><input type='text' class='replay_comment_name_"+comment_id+" form-control' placeholder='Post a comment'><a data-postid='"+postidd+"' data-replayid='"+comment_id+"' class='replay stat-item replay_"+comment_id+"'><i class='fa fa-reply'></i></a></div></div></div></div></div>"); 
			  
			
           }
         });

	 e.preventDefault(); 
});
$(".inicsbmt").click(function(e) {
	
	var postidd = $(this).data("inipostideaid");
	var parent_id = $(this).data("inipostparent");
	var postcomment = $('.inicomment_title_'+postidd).val();
	var url = "<?php echo base_url('Ideazone/Commentsadd'); ?>";
	//alert(postcomment);
	if(postcomment==''){
		
		return false;
	}
    $.ajax({
           type: "POST",
           url: url,
			dataType: "json",
		   data : {ideaid: postidd, parent_id: parent_id, postcomment: postcomment},
           success: function(data)
           {
			   $('.inicomment_title_'+postidd).val('');
               console.log(data);
			   var username = data.user.NAME;
			   var userimg = data.user.PROFILE_PICTURE;
			   if(userimg.length==''){
				    var userimg = "svg.svg";
			   }
			   var comment_name = data.comment.comment_name;
			   var comment_id = data.comment.comment_id;
			   var comment_created = data.comment.comment_created;
			   var baseurl = "<?php echo base_url('uploads/images/'); ?>"+userimg;
			   var ses = "<?php echo $user['PROFILE_PICTURE']; ?>";
			   if(ses.length==''){
				    var ses = "svg.svg";
			   }
			   var curbaseurl = "<?php echo base_url('uploads/images/'); ?>"+ses;
			   //alert(username);
			  $('.inicommm_'+postidd).prepend("<div class='post-container'><div class='post-detail'><img src='"+baseurl+"' class='profile-photo-md pull-left' alt=''><div class='user-info'><h5><a class='profile-link'>"+username+"</a></h5><p class='text-muted'>"+comment_created+"</p></div><div class='reaction'><a class='btn text-green'></a></div><div class='reaction'><a class='btn text-green'></a></div><div class='post-text'><p>"+comment_name+"<i class='em em-anguished'></i> <i class='em em-anguished'></i> <i class='em em-anguished'></i><a data-inicommentid='"+comment_id+"' data-status='1'  class='stat-item inicommentlike inicommentlike_"+comment_id+"'><i class='fa fa-thumbs-up'></i><span class='inilike_class_"+comment_id+"'>Like</span></a></p></div><div class='subcommm_"+comment_id+"'><div class='sub-post'><div class='replay_input_"+comment_id+" post-comment'><img src='"+curbaseurl+"' alt='' class='profile-pic'><input type='text' class='replay_comment_name_"+comment_id+" form-control' placeholder='Post a comment'><a data-postid='"+postidd+"' data-replayid='"+comment_id+"' class='replay stat-item replay_"+comment_id+"'><i class='fa fa-reply'></i></a></div></div></div></div></div>"); 
			  
			
           }
         });

	 e.preventDefault(); 
});
$(".invcsbmt").click(function(e) {
	
	var postidd = $(this).data("invpostideaid");
	var parent_id = $(this).data("invpostparent");
	var postcomment = $('.invcomment_title_'+postidd).val();
	var url = "<?php echo base_url('Ideazone/Commentsadd'); ?>";
	//alert(postcomment);
	if(postcomment==''){
		
		return false;
	}
    $.ajax({
           type: "POST",
           url: url,
			dataType: "json",
		   data : {ideaid: postidd, parent_id: parent_id, postcomment: postcomment},
           success: function(data)
           {
			   $('.invcomment_title_'+postidd).val('');
               console.log(data);
			   var username = data.user.NAME;
			   var userimg = data.user.PROFILE_PICTURE;
			   if(userimg.length==''){
				    var userimg = "svg.svg";
			   }
			   var comment_name = data.comment.comment_name;
			   var comment_id = data.comment.comment_id;
			   var comment_created = data.comment.comment_created;
			   var baseurl = "<?php echo base_url('uploads/images/'); ?>"+userimg;
			   var ses = "<?php echo $user['PROFILE_PICTURE']; ?>";
			    if(ses.length==''){
				    var ses = "svg.svg";
			   }
			   var curbaseurl = "<?php echo base_url('uploads/images/'); ?>"+ses;
			   //alert(username);
			  $('.invcommm_'+postidd).prepend("<div class='post-container'><div class='post-detail'><img src='"+baseurl+"' class='profile-photo-md pull-left' alt=''><div class='user-info'><h5><a class='profile-link'>"+username+"</a></h5><p class='text-muted'>"+comment_created+"</p></div><div class='reaction'><a class='btn text-green'></a></div><div class='reaction'><a class='btn text-green'></a></div><div class='post-text'><p>"+comment_name+"<i class='em em-anguished'></i> <i class='em em-anguished'></i> <i class='em em-anguished'></i><a data-invcommentid='"+comment_id+"' data-status='1'  class='stat-item invcommentlike invcommentlike_"+comment_id+"'><i class='fa fa-thumbs-up'></i><span class='invlike_class_"+comment_id+"'>Like</span></a></p></div><div class='subcommm_"+comment_id+"'><div class='sub-post'><div class='replay_input_"+comment_id+" post-comment'><img src='"+curbaseurl+"' alt='' class='profile-pic'><input type='text' class='replay_comment_name_"+comment_id+" form-control' placeholder='Post a comment'><a data-postid='"+postidd+"' data-replayid='"+comment_id+"' class='replay stat-item replay_"+comment_id+"'><i class='fa fa-reply'></i></a></div></div></div></div></div>"); 
			  
			
           }
         });

	 e.preventDefault(); 
});
$(".postcsbmt").click(function(e) {
	
	var postidd = $(this).data("postpostideaid");
	var parent_id = $(this).data("postpostparent");
	var postcomment = $('.postcomment_title_'+postidd).val();
	var url = "<?php echo base_url('Ideazone/Commentsadd'); ?>";
	//alert(postcomment);
	if(postcomment==''){
		
		return false;
	}
    $.ajax({
           type: "POST",
           url: url,
			dataType: "json",
		   data : {ideaid: postidd, parent_id: parent_id, postcomment: postcomment},
           success: function(data)
           {
			   $('.postcomment_title_'+postidd).val('');
               console.log(data);
			   var username = data.user.NAME;
			   var userimg = data.user.PROFILE_PICTURE;
			   if(userimg.length==''){
				    var userimg = "svg.svg";
			   }
			   var comment_name = data.comment.comment_name;
			   var comment_id = data.comment.comment_id;
			   var comment_created = data.comment.comment_created;
			   var baseurl = "<?php echo base_url('uploads/images/'); ?>"+userimg;
			   var ses = "<?php echo $user['PROFILE_PICTURE']; ?>";
			   if(ses.length==''){
				    var ses = "svg.svg";
			   }
			   var curbaseurl = "<?php echo base_url('uploads/images/'); ?>"+ses;
			   //alert(username);
			  $('.postcommm_'+postidd).prepend("<div class='post-container'><div class='post-detail'><img src='"+baseurl+"' class='profile-photo-md pull-left' alt=''><div class='user-info'><h5><a class='profile-link'>"+username+"</a></h5><p class='text-muted'>"+comment_created+"</p></div><div class='reaction'><a class='btn text-green'></a></div><div class='reaction'><a class='btn text-green'></a></div><div class='post-text'><p>"+comment_name+"<i class='em em-anguished'></i> <i class='em em-anguished'></i> <i class='em em-anguished'></i><a data-postcommentid='"+comment_id+"' data-status='1'  class='stat-item postcommentlike postcommentlike_"+comment_id+"'><i class='fa fa-thumbs-up'></i><span class='postlike_class_"+comment_id+"'>Like</span></a></p></div><div class='subcommm_"+comment_id+"'><div class='sub-post'><div class='replay_input_"+comment_id+" post-comment'><img src='"+curbaseurl+"' alt='' class='profile-pic'><input type='text' class='replay_comment_name_"+comment_id+" form-control' placeholder='Post a comment'><a data-postid='"+postidd+"' data-replayid='"+comment_id+"' class='replay stat-item replay_"+comment_id+"'><i class='fa fa-reply'></i></a></div></div></div></div></div>"); 
			  
			
           }
         });

	 e.preventDefault(); 
});


$(document).on('click', '.replay', function(){ 	
	var replayid = $(this).data("replayid");
	var postid = $(this).data("postid");
	var replaycomment= $('.replay_comment_name_'+replayid).val();  
	
		if(replaycomment==''){
			//alert('Please enter comment');
		return false;
	}
	var url = "<?php echo base_url('Ideazone/Commentsadd'); ?>";

    $.ajax({
           type: "POST",
           url: url,
		   dataType: "json",
		   data : {ideaid: postid, parent_id: replayid, postcomment: replaycomment},
           success: function(data)
           {
			   $('.replay_comment_name_'+replayid).val('');  
               console.log(data);
			  var username = data.user.NAME;
			    var userimg = data.user.PROFILE_PICTURE;
				if(userimg.length==''){
				    var userimg = "svg.svg";
			   }
			   var comment_name = data.comment.comment_name;
			   var comment_id = data.comment.comment_id;
			   var comment_created = data.comment.comment_created;
			   var baseurl = "<?php echo base_url('uploads/images/'); ?>"+userimg;
			  $('.subcommm_'+replayid).append("<div class='sub-post'><div class='post-comment'><img src='"+baseurl+"' alt='' class='profile-pic'><p><a  class='profile-link'>"+username+" </a><i class='em em-laughing'></i>"+comment_name+"<a data-commentid='"+comment_id+"' data-status='1'  class='stat-item commentlike commentlike_"+comment_id+"'><i class='fa fa-thumbs-up'></i><span class='like_class_"+comment_id+"'>Like</span></a></p></div>");
			  
			
           }
         });
		
});
$(document).on('click', '.savedreplay', function(){ 	
	var replayid = $(this).data("savedreplayid");
	var postid = $(this).data("savedpostid");
	var replaycomment= $('.savedreplay_comment_name_'+replayid).val();  
	alert(replaycomment);
		if(replaycomment==''){
		return false;
	}
	var url = "<?php echo base_url('Ideazone/Commentsadd'); ?>";

    $.ajax({
           type: "POST",
           url: url,
		   dataType: "json",
		   data : {ideaid: postid, parent_id: replayid, postcomment: replaycomment},
           success: function(data)
           {
			   $('.savedreplay_comment_name_'+replayid).val('');  
               console.log(data);
			  var username = data.user.NAME;
			   var userimg = data.user.PROFILE_PICTURE;
			  if(userimg.length==''){
				    var userimg = "svg.svg";
			   }
			   var comment_name = data.comment.comment_name;
			   var comment_id = data.comment.comment_id;
			   var comment_created = data.comment.comment_created;
			   var baseurl = "<?php echo base_url('uploads/images/'); ?>"+userimg;
			  $('.savedsubcommm_'+replayid).append("<div class='sub-post'><div class='post-comment'><img src='"+baseurl+"' alt='' class='profile-pic'><p><a  class='profile-link'>"+username+" </a><i class='em em-laughing'></i>"+comment_name+"<a data-savedcommentid='"+comment_id+"' data-status='1'  class='stat-item savedcommentlike savedcommentlike_"+comment_id+"'><i class='fa fa-thumbs-up'></i><span class='savedlike_class_"+comment_id+"'>Like</span></a></p></div>");
			  
			
           }
         });
		
});
$(document).on('click', '.inireplay', function(){ 	
	var replayid = $(this).data("inireplayid");
	var postid = $(this).data("inipostid");
	var replaycomment= $('.inireplay_comment_name_'+replayid).val();  
		if(replaycomment==''){
		return false;
	}
	var url = "<?php echo base_url('Ideazone/Commentsadd'); ?>";

    $.ajax({
           type: "POST",
           url: url,
		   dataType: "json",
		   data : {ideaid: postid, parent_id: replayid, postcomment: replaycomment},
           success: function(data)
           {
			   $('.inireplay_comment_name_'+replayid).val('');  
               console.log(data);
			  var username = data.user.NAME;
			   var userimg = data.user.PROFILE_PICTURE;
			  if(userimg.length==''){
				    var userimg = "svg.svg";
			   }
			   var comment_name = data.comment.comment_name;
			   var comment_id = data.comment.comment_id;
			   var comment_created = data.comment.comment_created;
			   var baseurl = "<?php echo base_url('uploads/images/'); ?>"+userimg;
			  $('.inisubcommm_'+replayid).append("<div class='sub-post'><div class='post-comment'><img src='"+baseurl+"' alt='' class='profile-pic'><p><a  class='profile-link'>"+username+" </a><i class='em em-laughing'></i>"+comment_name+"<a data-inicommentid='"+comment_id+"' data-status='1'  class='stat-item inicommentlike inicommentlike_"+comment_id+"'><i class='fa fa-thumbs-up'></i><span class='inilike_class_"+comment_id+"'>Like</span></a></p></div>");
           }
         });
});
$(document).on('click', '.invreplay', function(){ 	
	var replayid = $(this).data("invreplayid");
	var postid = $(this).data("invpostid");
	var replaycomment= $('.invreplay_comment_name_'+replayid).val();  
		if(replaycomment==''){
		return false;
	}
	var url = "<?php echo base_url('Ideazone/Commentsadd'); ?>";

    $.ajax({
           type: "POST",
           url: url,
		   dataType: "json",
		   data : {ideaid: postid, parent_id: replayid, postcomment: replaycomment},
           success: function(data)
           {
			   $('.invreplay_comment_name_'+replayid).val('');  
               console.log(data);
			  var username = data.user.NAME;
			   var userimg = data.user.PROFILE_PICTURE;
			  if(userimg.length==''){
				    var userimg = "svg.svg";
			   }
			   var comment_name = data.comment.comment_name;
			   var comment_id = data.comment.comment_id;
			   var comment_created = data.comment.comment_created;
			   var baseurl = "<?php echo base_url('uploads/images/'); ?>"+userimg;
			  $('.invsubcommm_'+replayid).append("<div class='sub-post'><div class='post-comment'><img src='"+baseurl+"' alt='' class='profile-pic'><p><a  class='profile-link'>"+username+" </a><i class='em em-laughing'></i>"+comment_name+"<a data-invcommentid='"+comment_id+"' data-status='1'  class='stat-item invcommentlike invcommentlike_"+comment_id+"'><i class='fa fa-thumbs-up'></i><span class='invlike_class_"+comment_id+"'>Like</span></a></p></div>");
           }
         });
});
$(document).on('click', '.postreplay', function(){ 	
	var replayid = $(this).data("postreplayid");
	var postid = $(this).data("postpostid");
	var replaycomment= $('.postreplay_comment_name_'+replayid).val();  
		if(replaycomment==''){
		return false;
	}
	var url = "<?php echo base_url('Ideazone/Commentsadd'); ?>";

    $.ajax({
           type: "POST",
           url: url,
		   dataType: "json",
		   data : {ideaid: postid, parent_id: replayid, postcomment: replaycomment},
           success: function(data)
           {
			   $('.postreplay_comment_name_'+replayid).val('');  
               console.log(data);
			  var username = data.user.NAME;
			   var userimg = data.user.PROFILE_PICTURE;
			   if(userimg.length==''){
				    var userimg = "svg.svg";
			   }
			   var comment_name = data.comment.comment_name;
			   var comment_id = data.comment.comment_id;
			   var comment_created = data.comment.comment_created;
			   var baseurl = "<?php echo base_url('uploads/images/'); ?>"+userimg;
			  $('.postsubcommm_'+replayid).append("<div class='sub-post'><div class='post-comment'><img src='"+baseurl+"' alt='' class='profile-pic'><p><a  class='profile-link'>"+username+" </a><i class='em em-laughing'></i>"+comment_name+"<a data-postcommentid='"+comment_id+"' data-status='1'  class='stat-item postcommentlike postcommentlike_"+comment_id+"'><i class='fa fa-thumbs-up'></i><span class='postlike_class_"+comment_id+"'>Like</span></a></p></div>");
           }
         });
});
$(document).on('click', '.commentlike', function(){ 
var comment_id = $(this).data("commentid");
var textstatus = $('.like_class_'+comment_id).text();
var url = "<?php echo base_url('Ideazone/commentLike'); ?>";

    $.ajax({
           type: "POST",
           url: url,
           data : {comment_id: comment_id, textstatus: textstatus},
           success: function(data)
           {
            if(data==1){
				$('.like_class_'+comment_id).text('Liked');
			}else{
				$('.like_class_'+comment_id).text('Like');
			}
				console.log(data);
			}
         });


	});
$(document).on('click', '.savedcommentlike', function(){ 
var comment_id = $(this).data("savedcommentid");
var textstatus = $('.savedlike_class_'+comment_id).text();
var url = "<?php echo base_url('Ideazone/commentLike'); ?>";

    $.ajax({
           type: "POST",
           url: url,
           data : {comment_id: comment_id, textstatus: textstatus},
           success: function(data)
           {
            if(data==1){
				$('.savedlike_class_'+comment_id).text('Liked');
			}else{
				$('.savedlike_class_'+comment_id).text('Like');
			}
				console.log(data);
			}
         });


	});
$(document).on('click', '.inicommentlike', function(){ 
var comment_id = $(this).data("inicommentid");
var textstatus = $('.inilike_class_'+comment_id).text();
var url = "<?php echo base_url('Ideazone/commentLike'); ?>";

    $.ajax({
           type: "POST",
           url: url,
           data : {comment_id: comment_id, textstatus: textstatus},
           success: function(data)
           {
            if(data==1){
				$('.inilike_class_'+comment_id).text('Liked');
			}else{
				$('.inilike_class_'+comment_id).text('Like');
			}
				console.log(data);
			}
         });


	});
$(document).on('click', '.invcommentlike', function(){ 
var comment_id = $(this).data("invcommentid");
var textstatus = $('.invlike_class_'+comment_id).text();
var url = "<?php echo base_url('Ideazone/commentLike'); ?>";

    $.ajax({
           type: "POST",
           url: url,
           data : {comment_id: comment_id, textstatus: textstatus},
           success: function(data)
           {
            if(data==1){
				$('.invlike_class_'+comment_id).text('Liked');
			}else{
				$('.invlike_class_'+comment_id).text('Like');
			}
				console.log(data);
			}
         });


	});
$(document).on('click', '.postcommentlike', function(){ 
var comment_id = $(this).data("postcommentid");
var textstatus = $('.postlike_class_'+comment_id).text();
var url = "<?php echo base_url('Ideazone/commentLike'); ?>";

    $.ajax({
           type: "POST",
           url: url,
           data : {comment_id: comment_id, textstatus: textstatus},
           success: function(data)
           {
            if(data==1){
				$('.postlike_class_'+comment_id).text('Liked');
			}else{
				$('.postlike_class_'+comment_id).text('Like');
			}
				console.log(data);
			}
         });
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
$(".ignoreidea").click(function() {
	$('#postin').val('');
var postinid = $(this).data("postinid");
var posttype = $(this).data("posttype");
alert(posttype);
 $('#postin').val(postinid);
});
$(".ignore_completely").click(function() {
var postinid = $('#postin').val();
// alert(postinid);
 var url = "<?php echo base_url('Ideazone/reportIdeaignore'); ?>";
 $.ajax({
           type: "POST",
           url: url,
		   data : {postinid: postinid},
           success: function(data)
           {
               console.log(data);
			  $('#postin').val("");
			  $('.radio-ignore').hide();
			  $('#initiate'+postinid).hide();
			  $('.msgsignore').html('<h3>Ignored successfully </h3>');
			      setTimeout(function() {
        $('#ignoreModal').modal('toggle');
		location.reload();
    }, 1500);
			
           }
         });
});
$(".move_to_save").click(function() {
var postinid = $('#postin').val();
var url = "<?php echo base_url('Ideazone/savedidea'); ?>";
 $.ajax({
           type: "POST",
           url: url,
		   data : {postinid: postinid},
           success: function(data)
           {
               console.log(data);
			  $('#postin').val("");
			  $('.radio-ignore').hide();
			  $('#initiate'+postinid).hide();
			   $('#ignoreModal').modal('toggle');
			  $('.msgsignore').html('<h3>Moved to save successfully </h3>');
			      setTimeout(function() {
       
		location.reload();
    }, 1500);
			
           }
         });
});
$(".posted-delete").click(function() {
var deleteid = $(this).data("deleteid");
var url = "<?php echo base_url('Ideazone/deleteIdea'); ?>";
 $.ajax({
           type: "POST",
           url: url,
		   data : {postinid: deleteid},
           success: function(data)
           {
               console.log(data);
			  
			  $('#Posted_div_'+deleteid).slideToggle("slow");
			  $('#allPosted_div_'+deleteid).slideToggle("slow");
			      		
           }
         });
});

$(document).ready(function(){
	var type = window.location.hash.substr(1);
	
	var ttt = type.substr(3);
	if(type){
		//var postmoreid = $(this).data('seemore'); 
		$('.see-more_'+ttt).slideToggle();
		$('.see-les_'+ttt).slideToggle();
	}
	$('.more-cont').hide();
	$('.seemore').click(function(){
		var postmoreid = $(this).data('seemore'); 
		$('.see-more_'+postmoreid).slideToggle();
		$('.see-les_'+postmoreid).slideToggle();
	});
	$('.see-lesss').click(function(){
		var postmoreid = $(this).data('seemore'); 
		$('.see-les_'+postmoreid).slideToggle();
		$('.see-more_'+postmoreid).slideToggle();
	});
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
.post-content .post-container {
    padding: 20px;
    border-bottom: dashed 1px #ccc;
}

.cmore p:nth-last-child(2) {
  
    padding-right: 10px;
}

ul.v-opinion{
	width:100%;
	padding:0;
}
ul.v-opinion li{
	display:inline-block;
	float:left;
	margin-right:5px;
}
ul.v-opinion li:nth-child(1){
	width:10%;
}
ul.v-opinion li:nth-child(2){
	width:69%;
}
ul.v-opinion li:nth-child(3){
	width:18%;
	margin-right:0px;
}
ul.v-opinion li:nth-child(3) button{
	    margin-top: 5px;
}
</style>	
  <script>
    var clipboard = new ClipboardJS('.allowCopy');

    clipboard.on('success', function(e) {
        console.log(e);
    });

    clipboard.on('error', function(e) {
        console.log(e);
    });
	
	
	function checkSubmit(e) {
   if(e && e.keyCode == 13) {
      $('.replay').click();
   }
}
    </script>