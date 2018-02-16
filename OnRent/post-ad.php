<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
require('inc/config.php');
/*PHP Login and registration script Version 1.0, Created by Gautam, www.w3schools.in*/
require('inc/functions.php');

/*Check for authentication otherwise user will be redirects to main.php page.*/
if (!isset($_SESSION['UserData'])) {
    exit(header("location:login.html"));
}

require('include/header.php');
?>
<!DOCTYPE html>
<html>
<head>
<style>
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    cursor: pointer;
    margin-left: 860%;
    margin-top: 6px;
    width: 110px;
}

.dropbtn:hover, .dropbtn:focus {
    background-color: #3e8e41;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 100%;
    margin-left: 860%;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    min-width: 100%;
}

.dropdown a:hover {background-color: #f1f1f1}

.show {display:block;}
</style>

<title>Resale a Business Category Flat Bootstrap Responsive Website Template | Post Ad :: w3layouts</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-select.css">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Resale Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!--fonts-->
<link href='//fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!--//fonts-->	
<!-- js -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<!-- js -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-select.js"></script>
<script>
  $(document).ready(function () {
    var mySelect = $('#first-disabled2');

    $('#special').on('click', function () {
      mySelect.find('option:selected').prop('disabled', true);
      mySelect.selectpicker('refresh');
    });

    $('#special2').on('click', function () {
      mySelect.find('option:disabled').prop('disabled', false);
      mySelect.selectpicker('refresh');
    });

    $('#basic2').selectpicker({
      liveSearch: true,
      maxOptions: 1
    });
  });
</script>
<script type="text/javascript" src="js/jquery.leanModal.min.js"></script>
<link href="css/jquery.uls.css" rel="stylesheet"/>
<link href="css/jquery.uls.grid.css" rel="stylesheet"/>
<link href="css/jquery.uls.lcd.css" rel="stylesheet"/>
<!-- Source -->
<script src="js/jquery.uls.data.js"></script>
<script src="js/jquery.uls.data.utils.js"></script>
<script src="js/jquery.uls.lcd.js"></script>
<script src="js/jquery.uls.languagefilter.js"></script>
<script src="js/jquery.uls.regionfilter.js"></script>
<script src="js/jquery.uls.core.js"></script>
<script>
/*---------------------validate form----------------*/
function validateForm()
	{
		 var x = document.forms["myForm"]["p_email"].value;
		var y = document.forms["myForm"]["p_city"].value;
		var z = document.forms["myForm"]["p_name"].value;
		var a = document.forms["myForm"]["ad_price"].value;
		var b = document.forms["myForm"]["p_phone"].value;
		var length=b.length;


    		/*if (x == null || x == "Your Email") {
        	alert("Email must be filled out");
		document.getElementById('email').style.borderColor = "red";
        	return false;
    		}
		else if(y == null || y == "password")
		{
			alert("Password must be filled out");
			document.getElementById('email').style.borderColor = "";
			document.getElementById('pass').style.borderColor = "red";
        	return false;
    		}*/
    		if (length==10) {
 				   // value is ok, use i
			} else {
    			alert("Invalid number must be ten digits");
    			document.getElementById('p_phone').style.borderColor = "red";
    			return false;
}	
	}

</script>
<script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

<script>
			$( document ).ready( function() {
				$( '.uls-trigger' ).uls( {
					onSelect : function( language ) {
						var languageName = $.uls.data.getAutonym( language );
						$( '.uls-trigger' ).text( languageName );
					},
					quickList: ['en', 'hi', 'he', 'ml', 'ta', 'fr'] //FIXME
				} );
			} );
		</script>
		<link rel="stylesheet" type="text/css" href="css/easy-responsive-tabs.css " />
    <script src="js/easyResponsiveTabs.js"></script>
</head>
<body>
<div class="header">
		<div class="container">
			<div class="logo">
				<a href="index.php"><span>On</span>Rent</a>
			</div>
			<div class="dropdown">
				<button onclick="myFunction()" class="dropbtn"><?php
echo $_SESSION['uname'];
?></button>
  					<div id="myDropdown" class="dropdown-content">
    					<a href="index.php">Home</a>
    					<a href="your_ad.php">Your Ads</a>
    					<a href="changepass.html">Settings</a>
    					<a href="logout.php">Logout</a>
  					</div>
			</div>
		</div>
</div>		
	<div class="banner text-center">
	  <div class="container">    
			<h1>Advertise   <span class="segment-heading">    anything online </span> with OnRent</h1>
			<p>Now you can fullfill your dreams with OnRent...</p>
			<a href="post-ad.php">Post Free Ad</a>
	  </div>
	</div>
	<!-- Submit Ad -->
	<div class="submit-ad main-grid-border">
		<div class="container">
			<h2 class="head">Post an Ad</h2>
			<div class="post-ad-form">
				<form name="myForm" action="post_adback.php" onsubmit="return validateForm()" onchange="return FormValidation();" method="post" enctype="multipart/form-data">
					<label>Select Category <span>*</span></label>
					<select class="" id="ad_cat" name="ad_cat">
					  <option>Select Category</option>
					  <option>electronics</option>
					  <option>mobiles</option>
					  <option>books</option>
					  <option>flats</option>
					</select>
					<div class="clearfix"></div>
					<label>Ad Title <span>*</span></label>
					<input type="text" id="ad_title" name="ad_title">
					<div class="clearfix"></div>

					<div class="clearfix"></div>
					<label>Rent (Per Month) <span>*</span></label>
					<input type="text" id="ad_price" name="ad_price">
					<div class="clearfix"></div>

					<label>Ad Description <span>*</span></label>
					<textarea class="mess" placeholder="Write few lines about your product" id="ad_desc" name="ad_desc"></textarea>
					<div class="clearfix"></div>
				<div class="upload-ad-photos">
				<label>Photos for your ad :</label>	
						<div>
							<input type="file" id="file1" name="file1"/>
						</div>	
						<div class="clearfix"></div>
						<label>Name <span>*</span></label>
						<input type="text" id="p_name" name="p_name">
						<div class="clearfix"></div>

						<div class="clearfix"></div>
						<label>City <span>*</span></label>
						<input type="text" id="p_city" name="p_city">
						<div class="clearfix"></div>

						<div class="personal-details">
						<label>Your Mobile No <span>*</span></label>
						<input type="text" class="phone" id="p_phone" name="p_phone">
						<div class="clearfix"></div>
						<label>Your Email Address<span>*</span></label>
						<input type="text" class="email" id="p_email" name="p_email">
						<div class="clearfix"></div>
					<input type="submit" value="Post">					
					<div class="clearfix"></div>
					</form>	
					</div>
			</div>
		</div>	
	</div>
	<!-- // Submit Ad -->
	<!--footer section start-->		
		<footer>	
			<div class="footer-bottom text-center">
			<div class="container">
				<div class="footer-logo">
					<a href="index.html"><span>On</span>Rent</a>
				</div>
				<div class="footer-social-icons">
					<ul>
						<li><a class="facebook" href="#"><span>Facebook</span></a></li>
						<li><a class="twitter" href="#"><span>Twitter</span></a></li>
						<li><a class="flickr" href="#"><span>Flickr</span></a></li>
						<li><a class="googleplus" href="#"><span>Google+</span></a></li>
						<li><a class="dribbble" href="#"><span>Dribbble</span></a></li>
					</ul>
				</div>
				<div class="copyrights">
					<p> © 2016 OnRent. All Rights Reserved | Design by  <a href="#"> Akshay Bande,Purvesh Chithore,Animesh Bote</a></p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		</footer>
        <!--footer section end-->
</body>
</html>