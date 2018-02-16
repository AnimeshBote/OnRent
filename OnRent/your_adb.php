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
?>
<!DOCTYPE html>
<html>
<head>
<title>Resale a Business Category Flat Bootstrap Responsive Website Template | Mobiles :: w3layouts</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-select.css">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="css/jquery-ui1.css">
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
    <script src="js/tabs.js"></script>
	
	<style>



a:hover {

    color:#ffffff;
    text-decoration:none;
}

a:active {
    color: #ffffff;
    text-decoration:none;
}


#noresult
{
  margin-left: 270px;
  margin-top: -80px;
}

.wrapper
{
  margin-top: -121px;
}


/*img {
  position:relative;
    border-radius: 5px 5px 0 0;
    width:50%;
    height:50%;
}*/

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
      <h1>Rent  <span class="segment-heading">    anything online </span> with OnRent</h1>
      <p>You can rent anything online with OnRent. Insert your ad here.</p>
			<a href="post-ad.php">Post Free Ad</a>
	  </div>
	</div>
  <br><br><br><br><br>




<?php
      
      /*echo $name;*/
      echo "</br>";

    $con= new mysqli("localhost","root","","rentalw");
    //$query = "SELECT * FROM employees
   // WHERE first_name LIKE '%{$name}%' OR last_name LIKE '%{$name}%'";

    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

$result = mysqli_query($con, "SELECT * FROM books
    WHERE Ad_user_id='".$_SESSION['userid']."'");

$num_rows = mysqli_num_rows($result);
if ($num_rows==0) {?>

  <h3 id="noresult">No Result Found...</h3>

<?php }
else
{
 ?>

  <html>
       <div class="total-ads main-grid-border">
        <div class="container">

      <div class="ads-grid">
        <div class="ads-display col-md-9">
          <div class="wrapper">         
          <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
            <div id="myTabContent" class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
               <div>
                <div id="container">
                <div class="clearfix"></div>
              <ul class="list">

              <?php   while ($row = mysqli_fetch_array($result))
{?> 

                <!--<a href="singleb.php">-->
                  <li>
                  <img src="<?php echo $row['Ad_image_path'];?>" title="" alt="Image" />
                  <section class="list-left">
                  <h5 class="title"><?php echo $row['Ad_title']?></h5>
                  <span class="adprice">&#8377;<?php echo $row['Ad_price']?></span>
                  <p class="catpath">Home » Flats</p>
                  </section>
                  <section class="list-right">
                  <span class="date"><?php echo $row['Ad_date']?></span>
                  <span class="cityname"><?php echo $row['user_city']?></span>
                  <br>
                  <td class="contact-delete">
                  <form action='your_ad_deleteb.php? name="<?php echo $row['Ad_id']; ?>"' method="post">
                    <input type="hidden" name="name" value="<?php echo $row['Ad_id']; ?>">
                    <input type="submit" name="submit" value="Delete">
                  </form>
                  </td>
                  </section>
                  <div class="clearfix"></div>
                  </li> 
               <!-- </a>-->

                <?php    
    echo "<hr>";
        
}?>

              </ul>
            </div>
              </div>
            </div>
          </div>
        </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>  
  </div>  

    </a>
    </html>
    
<?php }mysqli_close($con);
?>

		<footer>	
			<div class="footer-bottom text-center">
			<div class="container">
				<div class="footer-logo">
					<a href="index.php"><span>On</span>Rent</a>
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
					<p> © 2016 OnRent. All Rights Reserved | Design by  <a href="http://w3layouts.com/"> Akshay Bande,Purvesh Chithore,Animesh Bote</a></p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		</footer>
        <!--footer section end-->
</body>
</html>