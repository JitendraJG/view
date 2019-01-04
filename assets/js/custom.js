$("#demo-2 input[type=search]").on("click", function(){
    $(".site_label").addClass("hideLogo");
});


$.fn.stars = function () {
	return $(this).each(function () {
		var rating = $(this).data("rating");
		var numStars = $(this).data("numStars");
		var fullStar = new Array(Math.floor(rating + 1)).join('<i class="fa fa-star"></i>');
		var halfStar = ((rating % 1) !== 0) ? '<i class="fa fa-star-half-empty"></i>' : '';
		var noStar = new Array(Math.floor(numStars + 1 - rating)).join('<i class="fa fa-star-o"></i>');
		$(this).html(fullStar + halfStar + noStar);
	});
}
$('.stars').stars();
$(function () {
	var postActions = $('#list_PostActions');
	var currentAction = $('#list_PostActions li.active');
	if (currentAction.length === 0) {
		postActions.find('li:first').addClass('active');
	}
	postActions.find('li').on('click', function (e) {
		e.preventDefault();
		var self = $(this);
		if (self === currentAction) { return; }
		// else
		currentAction.removeClass('active');
		self.addClass('active');
		currentAction = self;
	});
});
$(document).ready(function () {
	if ($(window).width() <= 768)
	{
		$(".filter-content").hide();
		$(".filter-btn").on("click", function(){
			$(".filter-content").slideToggle('slow');
		});
	}
});

$(function () {
  $('[data-toggle="tooltip"]').tooltip()
});

function showDropdown() {
	document.getElementById("myDropdown").classList.toggle("showDiv");
}
// Close the dropdown if the user clicks outside of it
window.onclick = function (event) {
	if (!event.target.matches('.dropbtn')) {
		var dropdowns = document.getElementsByClassName("dropdown-content");
		var i;
		for (i = 0; i < dropdowns.length; i++) {
			var openDropdown = dropdowns[i];
			if (openDropdown.classList.contains('showDiv')) {
				openDropdown.classList.remove('showDiv');
			}
		}
	}
}

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
$(".save-unsave").click(function() {
	
		var ideaid = $(this).attr('id');
	    var uid    = $(this).attr('uid');
		var saved  = 1;
		var base_url = window.location.origin;
		var urlstats = base_url+"/home/savedidea";	
    	
		$.ajax({
                url : urlstats,
                method : "POST",
				dataType:"json",   
				data : {ideaid: ideaid, uid: uid, saved: saved},
				success: function(data){
				//alert(data.count);
				$(".save-unsave_"+ideaid).text(data.msg);
				$(".badge-blue").text(data.count);
				console.log(data.msg);
				
			},
			error: function(){
				
			console.log("error Order details");
			}
			});
	
	
});

$(".sharing-cont").hide();
$(".sharing").click(function() {
	$(".impress-cont").hide();
	$(".opinion-cont").hide();
	var sharec = $(this).data("share"); 
	//$(".sharing-cont").slideToggle("slow");
	$(".share_"+sharec).slideToggle("slow");
});
$(".impress-cont").hide();
$(".impress").click(function() {
	var postid = $(this).attr("id");
	$(".sharing-cont").hide();
	$(".impresscount"+postid).slideToggle("slow");
});
$(".opinion-cont").hide();
$(".opinion").click(function() {
	$(".impress-cont").hide();
	$(".sharing-cont").hide();
	var opinionc = $(this).data("opinion"); 
	$(".opinion_"+opinionc).slideToggle("slow");
	//$(".opinion-cont").slideToggle("slow");
});
$(".funding").click(function() {
	$(".fundingContent").slideToggle("slow");
});

$(document).ready(function(){
	$('.more-cont').hide();
	$('.see-more').click(function(){
		$(this).hide();
		$('.more-cont').show();
	});
});

$(window).scroll(function(){
  var sticky = $('.dashboard-top'),
	  scroll = $(window).scrollTop();

  if (scroll >= 100) sticky.addClass('header-fixed');
  else sticky.removeClass('header-fixed');
});

$('.chip .close').on('click', function(e){
$(this).parent('div.chip').fadeOut();
});
$("#search-input").on("keyup", function() {
var value = $(this).val().toLowerCase();
$("#tag-user li:not(:first)").filter(function() {
  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
});
});
$(".notify-content").hide();
$(".notify-btn").on("click", function(){
	$(".notify-content").slideToggle('slow');
});

//$(".signup-nav").hide();
$(".bars").on("click", function(){
	$(".signup-nav").slideToggle('slow');
});

$("#payment-info").hide();
$(".sumbit-btn").on("click", function(){
	$("#payment-info").slideToggle('slow');
});

$('.notifyTabs').on('click', '.nav-tabs a', function(){
    $(this).closest('.dropdown').addClass('dontClose');
});
$('.notifyDropdown').on('hide.bs.dropdown', function(e) {
    if ( $(this).hasClass('dontClose') ){
        e.preventDefault();
    }
    $(this).removeClass('dontClose');
});

$(".upload-link").hide();
$(".upload-pic").hover(function(){
	$(".upload-link").slideToggle("slow");
});

$(".hide-show-blk1").hide();
$(".click-blk1").on("change", function(e){
	$(".hide-show-blk1").slideToggle("slow");
	e.preventDefault();
});
$(".hide-show-blk2").hide();
$(".click-blk2").on("change", function(e){
	$(".hide-show-blk2").slideToggle("slow");
	e.preventDefault();
});