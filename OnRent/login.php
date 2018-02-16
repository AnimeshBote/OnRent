<?php
/*require('inc/functions.php');

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


/* Check Login form submitted */

    /*$email = $_POST["email"];
    $password = $_POST["pass"];

    
    /* Check Email and Password existence in DB */
    /*$result = mysqli_query($conn, "SELECT * FROM tbl_users WHERE email='$email' AND password='$password' LIMIT 1");
    echo "hello i am chutiya";
    if(mysqli_num_rows($result)==1){
        $row = mysqli_fetch_assoc($result);
        /* Success: Set session variables and redirect to Protected page */
        //$Return['result'] = $_SESSION['UserData'] = array('user_id'=>$row['user_id']);
    /*} else {
        /* Unsuccessful attempt: Set error message */
       // $Return['error'] = 'Invalid Login Credential.';
	   // }
    /*Return*/
    //output($Return);


require('inc/config.php');
require('inc/functions.php');


/* Check Login form submitted */

    /* Define return | here result is used to return user data and error for error message */
if (isset($_POST['email']) and isset($_POST['pass']))
{

    $Return = array('result'=>array(), 'error'=>'');

    $email = safe_input($con, $_POST['email']);
    $password = safe_input($con, $_POST['pass']);

    
    /* Check Email and Password existence in DB */
    $result = mysqli_query($con, "SELECT * FROM tbl_users WHERE email='$email' AND password='$password' LIMIT 1");
    if(mysqli_num_rows($result)==1){
        $row = mysqli_fetch_assoc($result);
        $userid=$row['user_id'];
        $result1=mysqli_query($con, "SELECT name FROM tbl_user_profile WHERE user_id='$userid'");
        /* Success: Set session variables and redirect to Protected page */
        $row1 = mysqli_fetch_assoc($result1);
        $Return['result'] = $_SESSION['UserData'] = array('user_id'=>$row['user_id']);
        $_SESSION['uname']=$row1['name'];
        $_SESSION['userid']=$row['user_id'];
        header('Location: index.php');
    } else {
        /* Unsuccessful attempt: Set error message */
        $Return['error'] = 'Invalid Login Credential.';
        header('Location: loginincorrect.html');
    }
    /*Return*/
    
    /*$message = "Invalid Credential";
    echo "<script type='text/javascript'>alert('$message');</script>";
   */
    
    
    /*output($Return);*/
}



?>