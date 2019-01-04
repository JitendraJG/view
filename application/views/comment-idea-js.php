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