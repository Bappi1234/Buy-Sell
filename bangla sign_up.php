<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>this is title</title>
<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/login.css" />
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
			<h3>Buy & Sell</h3></a>
			<a href="bangla.php"><h4 >সকল বিজ্ঞাপন</h4></a>
			<a href="../sign_up.php"><h5>English</h5></a>
		 </div>
		 <div class="add floatright">
		   <div class="comment_login">
		     <a href="bangla sms.php"><i class="fa fa-comments"></i></a>
			</div>
			<div class="user_login">
             <a href="banglalogin.php"> <h5 class="current"> <i class="fa fa-user-o"></i>
				লগ ইন </h5></a>
		   </div>
		   
		    <a href="bangla free_add.php"> <h1>আপনার বিজ্ঞাপন দিন</h1></a>
		 </div>
	     
		</div>    <!----End of Menu Area--->
		
<?php include 'inc/slider.php';?>
	 
  <!----Start of LOGIN_AREA--->
   <div class="login_area fix">
	<div class="side_login fix">
	   <h2>Buy & Sell-এ সাইন আপ করুন</h2>
	   <p>বাংলাদেশ এর সবচেয়ে বড় মার্কেটপ্লেস।</p>
	    <img src="image/file-document-extenstion-format-paper-add-new-3861b08b24ccf66d-512x512.png"/><h3>আপনার নিজের এডগুলি পোস্ট করা শুরু করুন।</h3>
	    <img src="image/fffff.png"/><h3>পরে দেখার জন্য এডকে ফেভারিট হিসেবে মার্ক করুন।</h3>
	    <img src="image/index.png"/><h3>সুবিধাজনক সময়ে আপনার এডগুলো দেখুন এবং পরিচালনা করুন।</h3><hr>
	</div>
	<div class="mid_login fix">
	   <a href=""><h1><i class="fa fa-facebook-official">  &nbsp;ফেসবুকের  সঙ্গে চলুক</i></h1></a>
	                       <h5>অথবা</h5>
			<a href="bangla email_using.php"><h3>ইমেইল ব্যবহার করে সাইন আপ করুন</h3></a> 
		<h3>অ্যাকাউন্টের জন্য সাইন আপ করে আপনি আমাদের <a href="footer/bangla terms.html">শর্তাবলী এবং নীতিমালা </a>এর সাথে সম্মত হলেন </h3>
		   <hr>
		  <p>আপনার কি একটি অ্যাকাউন্ট আছে?</p>
	   <a href="banglaLogin.php"><button>লগ ইন</button></a>
	</div>
	   
   </div>
	 
 <!----End of LOGIN_AREA--->
 
	 <?php include 'inc/footer.php';?>