<?php $this->view('admin/user-header') ?>
<style>
p.ideatags {
    margin: 0px;
    height: 50px;
    overflow-y: scroll;
}
</style>
<section class="ideazone">
	<div class="container">
		<div class="row mb-20">
			<div class="col-md-6">
				<h4 class="mt-0 mb-0">Tag</h4>
				<ol class="breadcrumb hidden-xs hidden-sm">
					  <li class="breadcrumb-item"><?php echo $tagname;?></li>
					  
					</ol>
			</div>
			<div class="col-md-6 text-right">
				<a href="<?php echo base_url('Ideazone/Postidea'); ?>"><button class="btn btn-info mb-0 mblock-btn">Post a Business Idea</button></a>
				<a href="<?php echo base_url('businessideas/'); ?>"><button class="btn btn-info mb-0 mblock-btn">View Business Ideas</button></a>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3">
				
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
						<!--<label>Investment
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
						</div>
						-->
						<p class="mt-20">
						<button type="button" onclick="window.location.href='<?php echo base_url('business-ideas'); ?>'" class="btn btn-info mb-0 mr-10">Clear</button>
						<button type="submit" class="btn btn-primary mb-0">Apply</button>
						</p>
					</form>
	</div>
			</div>
			<div class="col-md-9">

			<ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#" aria-controls="allIdeas" role="tab" data-toggle="tab"><?php echo $tagname; ?>  <!--<i class="new">New</i>--></span></a></li>
						
					  </ul>
			
			<?php //print_r($bussinessIdeas);
			$session_user = $this->session->userdata('user');
				foreach($bussinessIdeas as $o){ 
				$ind= $o['INDUSTRY'];
				$CI =& get_instance();
				$find = $CI->Industry($ind);
				$uid= $o['POSTED_BY'];
				$CI =& get_instance();
				$fid = $CI->usersby($uid);
				$uid= $o['ID'];
				$issave = $CI->savedideacheck($uid,$session_user);		
				?>
			
				<div class="panel panel-default ideazone-content" id="<?php echo $o['ID']; ?>">
						<div class="panel-heading">
					<?php if(empty($fid['PROFILE_PICTURE'])){
									$primg = 'svg.svg';
								}else{
									$primg = $fid['PROFILE_PICTURE'];
								} ?>
						<h3><img src="<?php echo base_url(); ?>uploads/images/<?php echo $primg; ?>" class="profile-pic" /> <?php echo $fid['NAME']; ?>
						<span>
						<?php //echo time_elapsed_string(strtotime($o['POSTED_DATE'])); ?></span>
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
								
								</span>
						</h3>
						</div>
						<div class="panel-body">
						<h6>Idea Title</h6>
						<p><?php echo $o['IDEA_TITLE']; ?></p>
						<h6>Industry</h6>
						<p><?php echo $find['SDESC']; ?></p>
						<h6>Description</h6>
						<div class="cmore see-more_<?php echo $o['ID']; ?>">
								<p ><?php $big = $o['DESCRIPTION'];
								echo truncate($big, 100, 10000);	?> </p>
								
								<p ><a id="sebtn_<?php echo $o['ID']; ?>" data-seemore="<?php echo $o['ID']; ?>" class="btn btn-xs btn-info checksession">See More</a></p>
								
								
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
		
	<div class="btn-group polls clearfix" style="display:none">
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
			<?php }?>
			</div>
		</div>
	</div>
</section>

<?php 					function time_elapsed_string($ptime)
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
}
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
 ?>

<?php $this->view('signin-signupmodel') ?>

<?php $this->view('loginjs-ts') ?>


	<?php $this->view('home-footer') ?>
	<?php $this->view('comment-idea-js') ?>
	
	<script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
<script src="<?php echo base_url(); ?>assets/js/clipboard.min.js">	</script>
<!-- Forgot Modal -->

<script>
$(document).ready(function(){
var url = "<?php echo base_url('User/checksession'); ?>";
$.ajax({
	   type: "POST",
	   url: url,
	   success: function(data)
	   {
		   if(data){
			 $('.polls').show();  
			console.log('y');  
		   }else{
			console.log('n');			   
			$('.polls').hide();
		   }
		   console.log(data);

	   }
	 });	
	
});

$(".checksession").click(function(e) {
var rurl = $(this).data('url');
var url = "<?php echo base_url('User/checksession'); ?>";
var postmoreid = $(this).data('seemore'); 
$('#rurl').val(postmoreid);
$.ajax({
	   type: "POST",
	   url: url,
	   success: function(data)
	   {
		   if(!data){
			   $('#signinModal').modal('toggle');
		   }else{
			
			$('.see-more_'+postmoreid).slideToggle();
			$('.see-les_'+postmoreid).slideToggle();
			 $('.polls').show();     
		   }
		   console.log(data);
		

	   }
	 });

e.preventDefault(); // avoid to execute the actual submit of the form.
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
    float: left;
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