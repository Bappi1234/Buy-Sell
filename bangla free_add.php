<?php include '../config/config.php';?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>this is title</title>
<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/bangla.css" />
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
			<a href="bangla.php"><h4>সকল বিজ্ঞাপন</h4></a>
			<a href="../free_add.php"><h5>English</h5></a>
		 </div>
		 <div class="add floatright">
		   <div class="comment_login">
		    <a href="bangla sms.php"><i class="fa fa-comments"></i></a>
			</div>
			<div class="user_login">
              <a href="banglalogin.php"><i class="fa fa-user-o"></i>
		      <h5>লগ ইন</h5></a>
		   </div>
		   
		     <a href="bangla free_add.php"><h1>আপনার বিজ্ঞাপন দিন</h1></a>
		 </div>
	     
		</div>    <!----End of Menu Area--->

 <!--Start To free_add_area-->
<div class="free_add_area">
   <h1>Md Harunur Rashid Bappi আপনাকে স্বাগতম! চলুন একটি বিজ্ঞাপন পোস্ট করি। নিচের যেকোনো একটি অপশন নির্বাচন করুন:</h1>
  <div class="sell_somthing">
    <form action="">
	 <fieldset>
	  <legend><img src="image/ddesdf.PNG" alt="" /></legend>
	     <h2>কিছু একটা বিক্রি করুন:</h2>
			<hr/>
		<a href="bangla secound_free_add.html"><h3>কোনো পণ্য বা সেবা বিক্রি করুন</h3><i class="fa fa-angle-right"></i></a>
		    <hr/>
		<a href="bangla property.html"><h3>ভাড়ার জন্য কোন প্রপার্টি প্রস্তাব করুন</h3><i class="fa fa-angle-right"></i></a>
		     <hr/>
		<a href="bangla jobs.html"><h3>চাকরির নিয়োগ বিজ্ঞপ্তি পোস্ট করুন</h3><i class="fa fa-angle-right"></i></a>	
		     <hr/>
	 </fieldset>
	</form>
  </div>
  <div class="looking_somthing">
    <form action="">
	 <fieldset>
	  <legend><img src="image/vfcdsa.PNG" alt="" /></legend>
		<h2>কোনো কিছু খুঁজছেন:</h2>
		    <hr/>
	    <a href="bangla property.html"><h3>ভাড়া নিতে কোন প্রপার্টি খোঁজ করুন</h3><i class="fa fa-angle-right"></i></a>
		    <hr/>
	    <a href="bangla secound_free_add.html"><h3>কোনও কিছু ক্রয় করার জন্য খুঁজুন</h3><i class="fa fa-angle-right"></i></a>
				<hr/>
	 </fieldset>
	</form>
  </div>
  <div class="allowance">
    <img src="image/vfgbcs.PNG" alt="" />
	<h2>আপনার প্রথম কিছু বিজ্ঞাপন ফ্রি</h2>
	<a href=""><h3>আমাদের পোস্টিং এর নিয়মকানুন সম্বন্ধে জেনে নিন</h3></a>
	
  </div>
</div>
<div class="quick_rules">
   <div  class="follw_ruls">
      <h1>জরুরি নিয়ম</h1>
      <h2>Buy & Sell-এ পোস্ট হওয়া সকল বিজ্ঞাপন অবশ্যই আমাদের নিয়মাবলী অনুযায়ী হতে হবে: </h2>
	   <li>অবশ্যই বিজ্ঞাপনটি সঠিক শ্রেনী দিয়েছেন কিনা খেয়াল করুন।</li>
	   <li>একই বিজ্ঞাপন একবারের বেশি অথবা ৪৮ ঘন্টার মধ্যে আবার পোস্ট করবেন না।</li>
	   <li>জলছাপ যুক্ত ছবি আপলোড করবেন না।</li>
   </div>
   <div  class="link_ruls">
     <li>প্যাকেজ ডিল ছাড়া একই বিজ্ঞাপনে একের বেশী পণ্যের বিবরণ দিবেন না।</li>
     <li>আপনার ইমেইল অ্যাড্রেস বা ফোন নাম্বার বিজ্ঞাপনের শিরোনাম বা বিবরনে ব্যবহার করবেন না।</li>
   </div>

</div>
						<!--END To free_add_area-->














 <?php include 'inc/footer.php';?>