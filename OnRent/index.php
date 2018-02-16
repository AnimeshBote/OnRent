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

$resultm=mysqli_query($con, "SELECT * FROM mobiles ORDER BY Ad_id DESC LIMIT 4;");
$resulte=mysqli_query($con, "SELECT * FROM electronics ORDER BY Ad_id DESC LIMIT 4;");
$resultb=mysqli_query($con, "SELECT * FROM books ORDER BY Ad_id DESC LIMIT 4;");
$resultf=mysqli_query($con, "SELECT * FROM flats ORDER BY Ad_id DESC LIMIT 4;");
/* Success: Set session variables and redirect to Protected page */
#$row1 = mysqli_fetch_assoc($result1);
?>
<!DOCTYPE html>
<html>
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


nav a {
    text-decoration: none;
    color: #fff;
    font-size: 110%;
    font-family: 'Open Sans', sans-serif;   
}

li {
    text-decoration: none;
    display: inline-block;
    margin: 8% 4% -1% 4%;
    padding: 2%;
}

/* Adding NavBar Background */


a:hover {

    color:#ffffff;
    text-decoration:none;
}

a:active {
    color: #ffffff;
    text-decoration:none;
}


</style>

<head>
<title>Resale a Business Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-select.css">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/font-awesome.min.css" />
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
    					<a href="your_ad.php">Your Ad</a>
    					<a href="changepass.html">Settings</a>
    					<a href="logout.php">Logout</a>
  					</div>
			</div>
		</div>
	</div>
	<div class="main-banner banner text-center">
	  <div class="container">    
			<h1> Rent  <span class="segment-heading" > anything online </span> with OnRent</h1>
			<p>You can give anythin on rent.</p>
			<a href="post-ad.php">Post Free Ad</a>
	  </div>
	</div>
		<!-- content-starts-here -->
		<div class="content">
			<div class="categories">
				<div class="container">
					<div class="col-md-2 focus-grid">
						<a href="mobiles.php">
							<div class="focus-border">
								<div class="focus-layout">
									<div class="focus-image"><i class="fa fa-mobile"></i></div>
									<h4 class="clrchg">Mobiles</h4>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-2 focus-grid">
						<a href="electronics.php">
							<div class="focus-border">
								<div class="focus-layout">
									<div class="focus-image"><i class="fa fa-laptop"></i></div>
									<h4 class="clrchg"> Electronics & Appliances</h4>
								</div>
							</div>
						</a>
					</div>	
					<div class="col-md-2 focus-grid">
						<a href="books.php">
							<div class="focus-border">
								<div class="focus-layout">
									<div class="focus-image"><i class="fa fa-book"></i></div>
									<h4 class="clrchg">Books, Sports & Hobbies</h4>
								</div>
							</div>
						</a>
					</div>	
					<div class="col-md-2 focus-grid">
						<a href="flats.php">
							<div class="focus-border">
								<div class="focus-layout">
									<div class="focus-image"><i class="fa fa-home"></i></div>
									<h4 class="clrchg">Real Estate</h4>
								</div>
							</div>
						</a>
					</div>
					
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="trending-ads">
				<div class="container">
				<!-- slider -->
				<div class="trend-ads">
					<h2>Trending Ads</h2>
							<ul id="flexiselDemo3">
								<li>
								<?php $num_rows = mysqli_num_rows($resultm);
								if ($num_rows!=0) {  
									while ($rowm = mysqli_fetch_array($resultm))
		{?> 
									<div class="col-md-3 biseller-column">
										<a href="singlem.php?id=<?php echo $rowm['Ad_id']?>">
											<img src="<?php echo $rowm['Ad_image_path']?>"/>
											<span class="price">&#8377;<?php echo $rowm['Ad_price']?></span>
										</a> 
										<div class="ad-info">
											<h5><?php echo $rowm['Ad_title']?></h5>
											<h5><?php echo "By ".$rowm['user_name']?></h5>
										</div>
									</div>
									 <?php    
 		}
 								}?>
 								</li>
 								<li>
 								<?php $num_rows1 = mysqli_num_rows($resulte);
								if ($num_rows1!=0) {  
									while ($rowe = mysqli_fetch_array($resulte))
		{?> 
									<div class="col-md-3 biseller-column">
										<a href="singleE.php?id=<?php echo $rowe['Ad_id']?>">
											<img src="<?php echo $rowe['Ad_image_path']?>"/>
											<span class="price">&#8377;<?php echo $rowe['Ad_price']?></span>
										</a> 
										<div class="ad-info">
											<h5><?php echo $rowe['Ad_title']?></h5>
											<h5><?php echo "By ".$rowe['user_name']?></h5>
										</div>
									</div>
									 <?php    
 		}
 								}?>
 								</li>
 								<li>	
 								<?php $num_rows2 = mysqli_num_rows($resultb);
								if ($num_rows2!=0) {  
									while ($rowb = mysqli_fetch_array($resultb))
		{?> 
									<div class="col-md-3 biseller-column">
										<a href="singleb.php?id=<?php echo $rowb['Ad_id']?>">
											<img src="<?php echo $rowb['Ad_image_path']?>"/>
											<span class="price">&#8377;<?php echo $rowb['Ad_price']?></span>
										</a> 
										<div class="ad-info">
											<h5><?php echo $rowb['Ad_title']?></h5>
											<h5><?php echo "By ".$rowb['user_name']?></h5>
										</div>
									</div>
									 <?php    
 		}
 								}?>
 								</li>
 								<li>
 								<?php $num_rows3 = mysqli_num_rows($resultf);
								if ($num_rows3!=0) {  
									while ($rowf = mysqli_fetch_array($resultf))
		{?> 
									<div class="col-md-3 biseller-column">
										<a href="singlef.php?id=<?php echo $rowf['Ad_id']?>">
											<img src="<?php echo $rowf['Ad_image_path']?>"/>
											<span class="price">&#8377;<?php echo $rowf['Ad_price']?></span>
										</a> 
										<div class="ad-info">
											<h5><?php echo $rowf['Ad_title']?></h5>
											<h5><?php echo "By ".$rowf['user_name']?></h5>
										</div>
									</div>
									 <?php    
 		}
 								}?>


								</li>
						</ul>
					<script type="text/javascript">
						 $(window).load(function() {
							$("#flexiselDemo3").flexisel({
								visibleItems:1,
								animationSpeed: 1000,
								autoPlay: true,
								autoPlaySpeed: 5000,    		
								pauseOnHover: true,
								enableResponsiveBreakpoints: true,
								responsiveBreakpoints: { 
									portrait: { 
										changePoint:480,
										visibleItems:1
									}, 
									landscape: { 
										changePoint:640,
										visibleItems:1
									},
									tablet: { 
										changePoint:768,
										visibleItems:1
									}
								}
							});
							
						});
					   </script>
					   <script type="text/javascript" src="js/jquery.flexisel.js"></script>
					</div>   
			</div>
			<!-- //slider -->				
			</div>
			<!--<div class="mobile-app">
				<div class="container">
					<div class="col-md-5 app-left">
						<a href="mobileapp.html"><img src="images/app.png" alt=""></a>
					</div>
					<div class="col-md-7 app-right">
						<h3>Resale App is the <span>Easiest</span> way for Selling and buying second-hand goods</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam auctor Sed bibendum varius euismod. Integer eget turpis sit amet lorem rutrum ullamcorper sed sed dui. vestibulum odio at elementum. Suspendisse et condimentum nibh.</p>
						<div class="app-buttons">
							<div class="app-button">
								<a href="#"><img src="images/1.png" alt=""></a>
							</div>
							<div class="app-button">
								<a href="#"><img src="images/2.png" alt=""></a>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>-->
		<!--footer section start-->		
		<footer>
		<!--	<div class="footer-top">
				<div class="container">
					<div class="foo-grids">
						<div class="col-md-3 footer-grid">
							<h4 class="footer-head">Who We Are</h4>
							<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
							<p>The point of using Lorem Ipsum is that it has a more-or-less normal letters, as opposed to using 'Content here.</p>
						</div>
						<div class="col-md-3 footer-grid">
							<h4 class="footer-head">Help</h4>
							<ul>
								<li><a href="howitworks.html">How it Works</a></li>						
								<li><a href="sitemap.html">Sitemap</a></li>
								<li><a href="faq.html">Faq</a></li>
								<li><a href="feedback.html">Feedback</a></li>
								<li><a href="contact.html">Contact</a></li>
								<li><a href="typography.html">Shortcodes</a></li>
							</ul>
						</div>
						<div class="col-md-3 footer-grid">
							<h4 class="footer-head">Information</h4>
							<ul>
								<li><a href="regions.html">Locations Map</a></li>	
								<li><a href="terms.html">Terms of Use</a></li>
								<li><a href="popular-search.html">Popular searches</a></li>	
								<li><a href="privacy.html">Privacy Policy</a></li>	
							</ul>
						</div>
						<div class="col-md-3 footer-grid">
							<h4 class="footer-head">Contact Us</h4>
							<span class="hq">Our headquarters</span>
							<address>
								<ul class="location">
									<li><span class="glyphicon glyphicon-map-marker"></span></li>
									<li>CENTER FOR FINANCIAL ASSISTANCE TO DEPOSED NIGERIAN ROYALTY</li>
									<div class="clearfix"></div>
								</ul>	
								<ul class="location">
									<li><span class="glyphicon glyphicon-earphone"></span></li>
									<li>+0 561 111 235</li>
									<div class="clearfix"></div>
								</ul>	
								<ul class="location">
									<li><span class="glyphicon glyphicon-envelope"></span></li>
									<li><a href="mailto:info@example.com">mail@example.com</a></li>
									<div class="clearfix"></div>
								</ul>						
							</address>
						</div>
						<div class="clearfix"></div>
					</div>						
				</div>	
			</div>	-->
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
					<p> © OnRent. All Rights Reserved | Designed by Akshay Bande, Animesh Bote, Purvesh Chithore</p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		</footer>
        <!--footer section end-->
</body>
</html>