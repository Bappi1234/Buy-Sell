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
 <!--Start of Menu Area-->
		<div class="stracture header fix">
		 <div class="icon_add floatleft">
		   <a href=""> <img src="image/icon.jpg" alt="" />
			<h3>Buy & Sale</h3></a>
			<a href="home.php"><h4>All adds</h4></a>
			<a href="Bangla/banglalogin.php"><h5>বাংলা</h5></a>
		 </div>
		 <div class="add floatright">
		   <div class="comment_login">
		     <a href="sms.php"><i class="fa fa-comments"></i></a>
			</div>
			<div class="user_login">
              <a href=""> <h5 class="current"> <i class="fa fa-user-o"></i>
				Log in </h5></a>
		   </div>
		   
		     <a href="free_add.php"><h1>Post Your Add</h1></a>
		 </div>
	     
		</div>    <!--End of Menu Area-->
 <?php include 'inc/slider.php';?>
 
 <!----Start of LOGIN_AREA--->
   <div class="login_area fix">
	<div class="side_login fix">
	   <h2>Log in to Buy & Sale</h2>
	   <p>To view your ads and account details, please login to your Buy & Sale Account.</p>
	    <img src="image/file-document-extenstion-format-paper-add-new-3861b08b24ccf66d-512x512.png"/><h3>Start posting your own ads.</h3>
	    <img src="image/fffff.png"/><h3>Mark ads as favorite and view them later.</h3>
	    <img src="image/index.png"/><h3>View and manage your ads at your convenience.</h3><hr>
	</div>
	<div class="mid_login fix">
	   <a href="upto log in.php"><h1><i class="fa fa-facebook-official">  &nbsp;Continue With Facebook</i></h1></a>
	                       <h5>Or</h5>
	   <input type="text" placeholder="email" name="email" required="1" />
	   <input type="password"  placeholder="password" name="password" required="1"/>
	   <a href="upto log in.php"><h3>Log in</h3></a>
	   <a href><h2>Forgot password?</h2></a><hr>
	   <p>Don't have an account yet?</p>
	   <a href="sign_up.php"><button>Sign up</button></a>
	</div>
	   
   </div>
	 
 <!----End of LOGIN_AREA--->
	 <?php include 'inc/footer.php';?>