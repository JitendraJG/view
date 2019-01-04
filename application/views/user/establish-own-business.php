<?php $this->view('admin/user-header') ?>

	
	<section class="ideazone">
		<div class="container">
			<div class="row mb-20">
				<div class="col-md-6">
					<h4 class="mt-0 mb-0">Establish Own Business</h4>
				</div>
				<div class="col-md-6 text-right">
					<button class="btn btn-info mb-0 mblock-btn">Establish Business</button>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="ideazone-content form-box">						
						<div class="content">
							<label>Industry <sup class="red">*</sup></label>
							<select class="form-control mb-10">
								<option>Industry1</option>
								<option>Industry2</option>
								<option>Industry3</option>
							</select>
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label input-box">
								<textarea class="mdl-textfield__input form-control" rows="4" type="text" id="txarea1"></textarea>
								<label class="mdl-textfield__label" for="txarea1">Business Vision/Project Description <sup class="red">*</sup></label>
							</div>
							<label>Current Status <sup class="red">*</sup></label>
							<select class="form-control mb-10">
								<option>Idea Stage</option>
								<option>Go to Marcket Stage</option>
								<option>Revenue Stage</option>
							</select>
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label input-box">
								<input class="mdl-textfield__input" type="text" id="loc1">
								<label class="mdl-textfield__label" for="loc1">Location <sup class="red">*</sup></label>
							</div>
							<label class="mt-20">Required Resources <sup class="red">*</sup></label>
							<div>
								<div class="md-checkbox md-checkbox-inline click-blk1">
									<input id="sc" type="checkbox">
									<label for="sc">Skilled Candidates</label>
								</div>
								<div class="grey-form-box hide-show-blk1">
									<div class="day-col">									
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label input-box medium mr-10">
											<input class="mdl-textfield__input" type="text" id="">
											<label class="mdl-textfield__label" for="">Search Skill</label>
										</div>
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label input-box medium mr-10">
											<input class="mdl-textfield__input" type="text" id="">
											<label class="mdl-textfield__label" for="">Quantity</label>
										</div>
										<a href="#"><i class="fa fa-plus-circle font16"></i></a>									
									</div>
								</div>
							</div>
							<div>
								<div class="md-checkbox md-checkbox-inline click-blk2">
									<input id="investor" type="checkbox">
									<label for="investor">Investor</label>
								</div>
								<div class="grey-form-box hide-show-blk2">
									<div class="row">
										<div class="col-md-4 text-right">
											<label class="mt-30">Approx Investment Expected:</label>
										</div>
										<div class="col-md-8">
											<select class="form-control w-120">
												<option>INR</option>
											</select>
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label input-box w-120">
												<input class="mdl-textfield__input" type="text" id="min1">
												<label class="mdl-textfield__label" for="min1">Min</label>
											</div><span>-</span>
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label input-box w-120">
												<input class="mdl-textfield__input" type="text" id="max1">
												<label class="mdl-textfield__label" for="max1">Max</label>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-4 text-right">
											<label class="mt-30">Approx Share Offered:</label>
										</div>
										<div class="col-md-8">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label input-box w-120">
												<input class="mdl-textfield__input" type="text" id="min1">
												<label class="mdl-textfield__label" for="min1">Min %</label>
											</div><span>-</span>
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label input-box w-120">
												<input class="mdl-textfield__input" type="text" id="max1">
												<label class="mdl-textfield__label" for="max1">Max %</label>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-4 text-right">
											<label class="mt-30">Role Expected from Investor:</label>
										</div>
										<div class="col-md-8">
											<select class="form-control w-120 mt-20 xs-mt-5">
												<option>UI Designer</option>
											</select>
										</div>
									</div>
								</div>
							</div>
							<div>
								<div class="md-checkbox md-checkbox-inline">
									<input id="consultant" type="checkbox">
									<label for="consultant" data-toggle="modal" data-target="#consultantModal">Consultant</label>
								</div>
							</div>
							<div>
								<div class="md-checkbox md-checkbox-inline">
									<input id="mentor" type="checkbox">
									<label for="mentor" data-toggle="modal" data-target="#mentorModal">Mentor</label>
								</div>
							</div>
							
							<button class="btn btn-primary sub pull-right sumbit-btn">Submit</button>
							
							<div class="blue-box2 clearfix" id="payment-info">
								<h3>Payment Information</h3>
								<div class="row">
									<div class="col-md-offset-3 col-md-8">
										<p><input type="text" class="form-control text-center" value="100" /> <span class="text-style1">Coins for "<b>10</b>" Days</span></p>
										<p class="clear text-style1">To display post: "<b>10</b>" Coins per day</span></p>										
									</div>
									<hr class="divider clearfix" />
									<p class="text-right">
										<button class="btn btn-primary sub mb-0 mr-10">Done</button>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
		<?php $this->view('home-footer') ?>
<!-- jQuery -->


<div id="consultantModal" class="modal fade" role="dialog">
	<div class="modal-dialog modal-sm">
	<div class="modal-content">
		<div class="modal-body">
			<p>Your Consultant request has been sent</p>
		</div>
	</div>
	</div>
</div>
<div id="mentorModal" class="modal fade" role="dialog">
	<div class="modal-dialog modal-sm">
	<div class="modal-content">
		<div class="modal-body">
			<p>Your Mentor request has been sent</p>
		</div>
	</div>
	</div>
</div>
	
<!-- Theme JavaScript -->
<script src="<?php echo base_url(); ?>assets/js/custom.js"></script>