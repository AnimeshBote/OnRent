<?php
/*PHP Login and registration script Version 1.0, Created by Gautam, www.w3schools.in*/
require('inc/config.php');
require('inc/functions.php');

/*Check for authentication otherwise user will be redirects to main.php page.*/
if (!isset($_SESSION['UserData'])) {
    exit(header("location:login.html"));
}
require('include/header.php');

$pass = safe_input($con, $_POST['pass']);
mysqli_query($con, "UPDATE tbl_users SET password = '$pass' WHERE user_id ='$_SESSION[userid]'");
header("Location: login.html");
/*echo "user_id is : ".$_SESSION['userid'];
echo "password is : ".$pass;*/
?>