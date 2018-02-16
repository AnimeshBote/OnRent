<!DOCTYPE html>
<html>
<head>
  <title>Search</title>


  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>

 <link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-select.css">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/font-awesome.min.css" />


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






</head>

<style>

body



.main-nav {
    /*background: #000000;*/
    background:#4169E1;
    text-align: center;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    opacity: 0.6;
    z-index: 9999;
    margin: -10%;
}


.main-nav:hover{

 background:#0038A8;
   
}
/* Setting Hover States */

a:hover {

    color:#ffffff;
    text-decoration:none;
}

a:active {
    color: #ffffff;
    text-decoration:none;
}





.search-box {
  position: absolute;
  left:50%;
  right:50%;
  display: inline-block;
  width: 100%;
  border-radius: 3px;
  padding: 4px 55px 4px 15px;
  position: relative;
  background: #fff;
  border: 1px solid #ddd;
  -webkit-transition: all 200ms ease-in-out;
  -moz-transition: all 200ms ease-in-out;
  transition: all 200ms ease-in-out;
}
.search-box.hovered, .search-box:hover, .search-box:active {
  border: 1px solid #aaa;
}
.search-box input[type=text] {
  border: none;
  box-shadow: none;
  display: inline-block;
  padding: 0;
  background: transparent;
}
.search-box input[type=text]:hover, .search-box input[type=text]:focus, .search-box input[type=text]:active {
  box-shadow: none;
}
.search-box .search-btn {
  position: absolute;
  right: 2px;
  top: 2px;
  color: #aaa;
  border-radius: 3px;
  font-size: 21px;
  padding: 5px 10px 1px;
  -webkit-transition: all 200ms ease-in-out;
  -moz-transition: all 200ms ease-in-out;
  transition: all 200ms ease-in-out;
}
.search-box .search-btn:hover {
  color: #fff;
  /*background-color: #8FBE00;*/
  background-color:#2B60DE;
}




.card {
    position:relative;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    border-radius: 5px;
    width:30%;
    height:30%;
    left:30%;

    text-align:center;

}

.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

/*img {
  position:relative;
    border-radius: 5px 5px 0 0;
    width:50%;
    height:50%;
}*/


.brand
{
      position:relative;
      float:bottom;
      /*margin-left :60%;
      margin-top : -70px;*/
}







</style>


<body>


      <div class="main-nav">
   
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="#">Post-ad</a></li>
                <li><a href="#">Categories</a></li>
                <li><a href="#">Your ads</a></li>
                <li><a href="#">About-us</a></li>
                <li><a href="#">FAQ</a></li>
            </ul>
        
   </div>


    <div class='container'>
  <div class='row'>
    <div class='col-md-12'>
      <h1>Searchbar</h1>
      <p class='lead'>Search product here.</p>
    </div>
  </div>
  <div class='row'>
    <div class='col-md-6'>
      <div class='search-box'>
       <form action=""  method="get" class='search-form' >
          <input class='form-control' placeholder='ex: Sony T2 Ultra, MI note3 etc.' type="text" name="query">
          <button class='btn btn-link search-btn' type"submit" name="submit" >
            <i class='glyphicon glyphicon-search'></i>
          </button>
        </form>
        <!-- <form action="" method="GET">
        <input type="text" name="query" />
        <input type="submit" name="submit" value="Search" />-->
    </form>
      </div>
    </div>
  </div>
</div>
<br><br><br><br><br>



<?php

  if(isset($_GET['submit']))
  {
      $name= htmlspecialchars($_GET['query']);
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

$result = mysqli_query($con, "SELECT * FROM flats
    WHERE Ad_title LIKE '%$name%'");

while ($row = mysqli_fetch_array($result))
{?>
  <html>

    <a href="single.html">
                <div class="card">
                  <img  class="image" src="<?php echo $row['Ad_image_path'];?>" alt="Image">
                        <h4 class="brand"><b><?php echo $row['Ad_title']."</br>".$row['user_name'];?></b></h4>
                  
    
                      <p><?php echo $row['user_email']; ?></p>
                    </div>
    </a>
    </html>
    <?php    
    echo "</br><hr></br>";
        
}
mysqli_close($con);
}
?>
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
          <p> © OnRent. All Rights Reserved | Designed by Akshay Bande, Animesh Bote, Purvesh Chithore</p>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
 
 <footer>

</body>
</html>