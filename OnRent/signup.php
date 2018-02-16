<?php
require('inc/config.php');
require('inc/functions.php');

/* Check Registration form submitted */

    /* Define return | here result is used to return user data and error for error message */
    $Return = array('result'=>array(), 'error'=>'');

    $name = safe_input($con, $_POST['fname']);
    $email = safe_input($con, $_POST['email']);
    $password = safe_input($con, $_POST['pass']);

    /* Check Email existence in DB */
    $result = mysqli_query($con, "SELECT * FROM tbl_users WHERE email='$email' LIMIT 1");
    if(mysqli_num_rows($result)==1){
        /*Email already exists: Set error message */
        $Return['error'] = 'You have already registered with us, please login.';
        $message="already registered";
        echo "<script>alert('$message');window.location.href='login.html';</script>";
    }else{
        /*Insert registration data to user table (user_GUID is Unique Identifier and Default status is 0 means pending)*/
        mysqli_query($con, "INSERT INTO tbl_users (user_GUID, email, password, entry_date) values(MD5(UUID()), '$email', '$password' ,NOW() )");
        $user_id = mysqli_insert_id($con); /* Get the auto generated id used in the last query */
        /*Insert registration data to user profile table */
        mysqli_query($con, "INSERT INTO tbl_user_profile (user_id,name) VALUES('$user_id','$name')");
        /* Success: Set session variables and redirect to Protected page */
        $Return['result'] = $_SESSION['UserData'] = array('user_id'=>$user_id);
        $message="Account Created Successfully!!";
        echo "<script>alert('$message');window.location.href='login.html';</script>";
    }
    /*Return*/
   // output($Return);


?>