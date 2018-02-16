<?php
require('inc/config.php');
/*PHP Login and registration script Version 1.0, Created by Gautam, www.w3schools.in*/
require('inc/functions.php');

/*Check for authentication otherwise user will be redirects to main.php page.*/
if (!isset($_SESSION['UserData'])) {
    exit(header("location:login.html"));
}
$con= new mysqli("localhost","root","","rentalw");
    //$query = "SELECT * FROM employees
   // WHERE first_name LIKE '%{$name}%' OR last_name LIKE '%{$name}%'";

    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }


//Define the query
$query = "DELETE FROM mobiles WHERE Ad_id='".$_POST['name']."' LIMIT 1";

//sends the query to delete the entry
mysqli_query ($con,$query);

if (mysqli_affected_rows($con) == 1) { 
//if it updated
	$message = "Deleted Successfully !!!";
	echo "<script type='text/javascript'>alert('$message');window.location.href='your_adm.php';</script>";
	#header('Location: your_ad.php');
            
 } else { 
//if it failed

            $message = "Deletion Failed!!!";
			echo "<script type='text/javascript'>alert('$message');window.location.href='your_adm.php';</script>";
           # header('Location: your_ad.php');
} 
?>
