	<?php $this->view('admin/single-header') ?>

	<section class="ideazone">
		<div class="container">
			<div class="row mb-20">
				<div class="col-md-6">
					<h4 class="mt-0 mb-0">Business Ideas</h4>
				</div>
				<div class="col-md-6 text-right">
					<a href="<?php echo base_url('business-ideas'); ?>"><button class="btn btn-info mb-0 mblock-btn">View Business Ideas</button></a>
					<a href="<?php echo base_url('Ideazone/Postidea'); ?>"><button class="btn btn-info mb-0 mblock-btn">Post a Business Idea</button></a>
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
				
				<?php //print_r($bussinessIdeas);
				
					
					$o=$bussinessIdeas;
					$ind= $o['INDUSTRY'];
					$CI =& get_instance();
					$find = $CI->Industry($ind);
					$uid= $o['POSTED_BY'];
					$CI =& get_instance();
					$fid = $CI->usersby($uid);
					if(empty($fid['PROFILE_PICTURE'])){
									$fid['PROFILE_PICTURE'] = 'svg.svg';
								}
					?>
				
					<div class="ideazone-content panel panel-default">
					
							<div class="panel-heading">
						<h3><img src="<?php echo base_url(); ?>uploads/images/<?php echo $fid['PROFILE_PICTURE']; ?>" class="profile-pic" /> <?php echo $fid['NAME']; ?><span><?php echo $o['POSTED_DATE']; ?></span> </h3>
						</div>
						
						<div class="panel-body">
						<h6>Idea Title</h6>
						<p><?php echo $o['IDEA_TITLE']; ?></p>
						<h6>Industry</h6>
						<p><?php echo $find['SDESC']; ?></p>
						<h6>Description</h6>
						<p><?php $original_string = $o['DESCRIPTION'];
							echo truncate($original_string, 100, 10000);
						?>
						<a data-url="<?php echo base_url('ideazone-all'); ?>#tab<?php echo $o['ID'];?>" class="btn btn-xs btn-info checksession" >see more</a>
						</p>
					</div>
					</div>
				<?php //}?>
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

<?php $this->view('loginjs-business-idea') ?>
		<?php $this->view('home-footer') ?>
		<script src="<?php echo base_url(); ?>assets/js/custom.js"></script>

<script>
$(".checksesssion").click(function(e) {
	var rurl = $(this).data('url');
	var url = "<?php echo base_url('User/checksession'); ?>";

    $.ajax({
           type: "POST",
           url: url,
           success: function(data)
           {
			   if(!data){
				   $('#signinModal').modal('toggle');
			   }else{
				   window.location.replace(rurl);
			   }
               console.log(data);
			

           }
         });

    e.preventDefault(); // avoid to execute the actual submit of the form.
});
</script>	
<!-- Forgot Modal -->
<style>
.ideazone {
    padding: 50px 0 20px 0;
    background: #f9f9f9;
}</style>
	