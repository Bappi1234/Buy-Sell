<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>this is title</title>
<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/upto log in.css" />
	<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery.nivo.slider.js" type="text/javascript"></script>
<script type="text/javascript">
$(window).load(function() {
	$('#slider').nivoSlider({
		effect:'random',
		slices:10,
		animSpeed:500,
		pauseTime:4000,
		startSlide:0, //Set starting Slide (0 index)
		directionNav:false,
		directionNavHide:false, //Only show on hover
		controlNav:false, //1,2,3...
		controlNavThumbs:false, //Use thumbnails for Control Nav
		pauseOnHover:true, //Stop animation while hovering
		manualAdvance:false, //Force manual transitions
		captionOpacity:0.8, //Universal caption opacity
		beforeChange: function(){},
		afterChange: function(){},
		slideshowEnd: function(){} //Triggers after all slides have been shown
	});
});
</script>

</head>

<body>
 <!----Start of Menu Area--->
		<div class="stracture header fix">
		 <div class="icon_add floatleft">
		   <a href=""> <img src="image/icon.jpg" alt="" />
			<h3>Buy & Sale</h3></a>
			<a href="home.php"><h4>All adds</h4></a>
			<a href="bangla/upto_login.php"><h5>বাংলা</h5></a>
		 </div>
		 <div class="add floatright">
		   <div class="comment_login">
		     <a href="sms.php"><i class="fa fa-comments"></i></a>
			</div>
			<div class="user_login">
              <h5 class="current"><a href="upto log in.php">
		      Log in</a><i class="fa fa-user-o"></i></h5>
		   </div>
		   
		     <a href="free_add.php"><h1>Post Your Add</h1></a>
		 </div>
	     
		</div>    <!----End of Menu Area--->
		
 <?php include 'inc/slider.php';?>

 <!----Start of UPTO_LOGIN_AREA--->
    <div class="upto_login_area">
	  <div class="leftside_set">
	    <h2>Account</h2>
		  <a href=""><p class="current">My Account</p><i class="fa fa-arrow-right" aria-hidden="true"></i></a> 
		  <a href=""><p>My membership</p><i class="fa fa-arrow-right" aria-hidden="true"></i></a> 
		  <a href=""><p>My resume</p><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
		  <a href=""><p>Favorite</p><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
		  <a href=""><p>Setting</p><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
	  </div>
      <div class="righttside_set">
	   <h2>Md Harunur Rashid Bappi<h2>
	    <h3>Published ads 
		   <span>1</span>
		</h3>
	  </div>
		<div class="add_edit">
		  <img src="image/28741114_1987946268112257_1223668728_n.jpg" alt="" />
		  <a href=""><h2>Apple i phone 6 16gb Original</h2></a>
		  <h3>4 days, Dhaka, Mobile Phones</h3>
		  <h4>Tk 20,000</h4>
		 <a href=""><input type="button" value="Edit" />
		  <input type="button" value="Delete" /> </a>
		</div>
	    <div class="promot_add">
		  <img src="image/bgdsvc.PNG" alt="" />
		  <img src="image/sxfv.PNG" alt="" />
		  <h3>Reach up to 10x more people by promoting your ad. </h3>
		  <a href=""><input type="button" value="promote this ad" /></a>
		</div>
        <a href=""><h5>See all published ads </h5></a>
	</div> 
 <!----End of UPTO_LOGIN_AREA--->
<!--Start of footer_top_area-->
	<div class="footer_top_area fix">
		<div class="stracture footer_top fix">
		   <div class="contact_u">
	   <p>Download our app</p>
	    <div class="play_store">
	        <a href="https://play.google.com/store"><img src="image/en_badge_web_generic.png" alt="dd" /></a>
		</div>
		<div class="apple_store ">
	     <a href="https://www.apple.com/ios/app-store/"><img  src="image/apple-app-store-icon.png" alt="dd" /></a>
		</div>
	   <h1>Connect with us</h1>
	    <a href="https://www.facebook.com/Laptop-Sale-795953407194487/"><image class="facebook_i" src="image/facebook.jpg" alt="" />
		<h2>Like us on facebook</a></h2>
	</div>
<div class="quick_links">
	  <p>Learn More</p> 
	  <h1><a href="footer/salefast.html">How to sell fast</a></h1>
	  <h2><a href="footer/servicefast.html">How to Service fast</a></h2>
	  <h3><a href="footer/buy.html">Buy Now on </a></h3>
	  <h4><a href="footer/member.html">Membership</a></h4>
	  <h5><a href="footer/banner.html">Banner Advertising</a></h5>
	  <h6><a href="footer/promot.html">Promote your ad</a></h6>
	</div>
	<div class="from_blog">
	  <p>Help & Support</p>
	  <h5><a href="footer/servicing.html">Servicing</a></h5>
	  <h1><a href="">FAQ</a></h1>
	  <h2><a href="footer/safe_on.html">Stay safe on Buy & Sell</a> </h2>
	  <h4><a href="footer/contact.html">Contact us</a></h4>
	</div>
	<div class="link_blog">
	  <p>Social</p>
	  <h1><a href="">Blog</a></h1>
	  <h2><a href="https://www.facebook.com/Laptop-Sale-795953407194487/">Facebook</a></h2>
	  <h3><a href="https://www.youtube.com/channel/UCun-dXxU_9HCDeuNGqBzPPw/videos">YouTube</a></h3>
	  <h4><a href="https://plus.google.com/collection/YmTrWE">Google+</a></h4>
	</div>
	<div class="news_latter">
	   <p>About us</p>
	  <h1><a href="footer/about.html">About us</a></h1>
	  <h2><a href="footer/career.html">Career</a></h2>
	  <h3><a href="footer/terms.html">Terms & Conditions</a> </h3>
	  <h4><a href="footer/privacy.html">Privacy Policy</a></h4>
	  <h5><a href="footer/map.html">Sitemap</a></h5>
	</div>
	</div>
	</div>
	<!--End of footer_top_are-->
	
	 <!--Start of footer_bottom_area-->

	<div class="footer_bottom_area fix">
		<div class="stracture footer_bottom fix">
		  <div class="copyright_info floatleft fix">
		    <p>&copy; Engineer Md. Harunur Rosid</p>
		  </div>
		   <div class="powered_by floatright fix">
		      <h4>Powerd by :</h4>
			<a href=""><img src="image/icon.jpg" alt="" />
			    <p> Buy & Sell</a></p>
		  </div>
		</div>
	</div> <!--End of footer_top_area-->
	
<script type="text/javascript" src="js/scrolltop.js"></script>
<script> <!--Start Google Analyticts Option-->
 (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-XXXXXXXX-X', 'auto');
  ga('send', 'pageview');
</script><!--End Google Analyticts Option-->
</body>
</html>