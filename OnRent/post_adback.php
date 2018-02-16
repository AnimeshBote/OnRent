<?php

require('inc/config.php');
require('inc/functions.php');
$ad_category = safe_input($con, $_POST['ad_cat']);
$ad_title=safe_input($con, $_POST['ad_title']);
$ad_desc=safe_input($con, $_POST['ad_desc']);
$ad_price=safe_input($con, $_POST['ad_price']);
$user_name=safe_input($con, $_POST['p_name']);
$user_phone=safe_input($con, $_POST['p_phone']);
$user_email=safe_input($con, $_POST['p_email']);
$user_city=safe_input($con, $_POST['p_city']);
$new_image_name = 'image_' . date('Y-m-d-H-i-s') . '_' . uniqid() . '.jpg';

$target_dir = "images1/";
$target_file = $target_dir . $new_image_name; #basename($_FILES['file1']['name']);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
/*echo $target_file;
echo $_SESSION['userid'];
echo $imageFileType;*/
#-----------------
if (file_exists($target_file)) {
	$message = "The file ". basename( $_FILES["file1"]["name"]). " has been uploaded!!!";
			
    #echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["file1"]["size"] > 900000) {
	$message = "Sorry, your file is too large.";
    #echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
	$message = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	
   # echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
	$message = "Sorry, your file was not uploaded.";
	
    #echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["file1"]["tmp_name"], $target_file)) {
    	$message = "The Ad has been successfully uploaded!!!";
		mysqli_query($con, "INSERT INTO $ad_category (Ad_user_id,Ad_title,Ad_desc,Ad_price,Ad_image_path,user_name,user_phone,user_email,user_city,Ad_date) VALUES('$_SESSION[userid]','$ad_title','$ad_desc','$ad_price','$target_file','$user_name','$user_phone','$user_email','$user_city',NOW() )");
        #echo "The file ". basename( $_FILES["file1"]["name"]). " has been uploaded.";
    } else {
    	$message = "Sorry, there was an error uploading your file.!!!";
		
        #echo "Sorry, there was an error uploading your file.";
    }
}
#---------------------------
#$upload_image=$_FILES[" myimage "][ "name" ];

/*$folder="/xampp/htdocs/images/";

move_uploaded_file($_FILES[" myimage "][" tmp_name "], "$folder".$_FILES[" myimage "][" name "]);

CREATE TABLE Car
(
Ad_id int AUTO_INCREMENT PRIMARY KEY,
Ad_user_id int,
Ad_title varchar(255),
Ad_desc varchar(255),
Ad_image_path varchar(255),
user_name varchar(255),
user_phone varchar(255),
user_email varchar(255),
Ad_date datetime
);
*/
#$insert_path="INSERT INTO $ad_category VALUES('$_SESSION['userid']','$ad_title','$ad_desc','$target_file','$user_name','$user_phone','$user_email',NOW())";
#mysqli_query($con, "INSERT INTO $ad_category (Ad_user_id,Ad_title,Ad_desc,Ad_image_path,user_name,user_phone,user_email,Ad_date) VALUES('$_SESSION[userid]','$ad_title','$ad_desc','$target_file','$user_name','$user_phone','$user_email',NOW() )");

echo "<script type='text/javascript'>alert('$message');window.location.href='post-ad.php';</script>";

#echo "data successfully";
#$var=mysql_query($insert_path);
/*echo "<script>
alert('Data inserted successfully');
window.location.href='index.php';
</script>";*/
?>