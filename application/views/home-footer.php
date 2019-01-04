	
	<div class="container footer-top">
		<div class="row"><div class="col-md-12">
		<!--<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo"><i class="fa fa-angle-up" aria-hidden="true"></i>
</button>-->
  <div id="demo" class="collapse">
    
<br>
<br>
  </div>
		</div></div>					
	</div>		
<footer>
	<div class="container">
		<div class="row">
			<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
					<h3>Resources</h3>
					<a href="<?php echo base_url('blog/'); ?>">Blog</a>
					<!--<a href="#">Faqs</a>
					<a href="#">Quick Links</a>
					<a href="#">Site Map</a>-->
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
					<h3>Company</h3>
					<a href="<?php echo base_url('who-we-are/'); ?>">Who we are</a>
					<!--<a href="<?php echo base_url(); ?>what-we-do">What we do</a>
				<a href="<?php echo base_url(); ?>how-it-works">How it works</a>-->
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
				<h3>Reach Us</h3>
				<a href="<?php echo base_url('contact-us/'); ?>">Contact Us</a>
				<!--<a href="#">Careers</a>-->
				</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 pull-right">
						<div class="social-profiles">
				<h3>Connect</h3>
				<div class="rectangle">
				<a title="google" href="#"><img src="<?php echo base_url(); ?>assets/images/google.svg"/></a>
				<a title="facebook" href="#"><img src="<?php echo base_url(); ?>assets/images/facebook.svg"/></a>
				<a title="linkedin" href="#"><img src="<?php echo base_url(); ?>assets/images/linkedin.svg"/></a>
				<a title="twitter" href="#"><img src="<?php echo base_url(); ?>assets/images/twitter.svg"/></a>
				<a title="instagram" href="#"><img src="<?php echo base_url(); ?>assets/images/instagram.svg"/></a>
				<a title="youtube" href="#"><img src="<?php echo base_url(); ?>assets/images/youtube.svg"/></a>
				<div class="clearfix"></div>
				</div>
				</div>
				</div>
				</div>
				</div>
				</footer>	
				<section id="footer-btm">
				<div class="container copyright-bar">
				<div class="row">
				<div class="col-md-6 text-left">
				<img src="<?php echo base_url(); ?>assets/images/logo.svg" class="ftr-logo"/>
				</div>
				<div class="col-md-6 text-right">
				<div class="copyright"><a href="<?php echo base_url('terms/'); ?>" class="link">Terms & Conditions </a> | © Workship Network Pvt. Ltd.</div>
				</div>
				</div>	
				</div>
				<button onclick="topFunction()" id="gotoTop" title="Go to top"><i class="fa fa-angle-double-up" aria-hidden="true"></i></button>
				</section>	
				<!-- jQuery -->
				<!-- Theme JavaScript -->
				<script>
				window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("gotoTop").style.display = "block";
    } else {
        document.getElementById("gotoTop").style.display = "none";
    }
   
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
 
     $('html, body').animate({scrollTop:0}, 'slow');
}
				</script>
				</body>	
				</html>
				<style>
				#gotoTop {
      display: none;
    position: fixed;
    bottom: 20px;
    right: 30px;
    z-index: 99;
    font-size: 18px;
    border: none;
    outline: none;
    background-color: #22c9ff;
    color: white;
    cursor: pointer;
    padding: 10px 15px;
    border-radius: 30px 30px 5px 5px;
}

#gotoTop:hover {
  background-color: #555;
}</style>