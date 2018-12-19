<?php
$servername = "localhost";
$dbusername = "websysF182";
$dbpassword = "websysF182!!";
$dbname = "websysF182";


session_start();
$EMAIL_ID = $_POST['email'];
$FNAME = $_POST['fname'];
$LNAME = $_POST['lname'];
$PHONE = $_POST['phone'];
$GENDER = $_POST['gender'];
$DOB = $_POST['DOB'];
$LOCATION = $_POST['location'];
$PWD1 = $_POST['pwd1'];
$PWD2 = $_POST['pwd2'];
$BREED = $_POST['breed'];

$conn = new mysqli($servername,$dbusername,$dbpassword,$dbname);

//Check connection
if ($conn->connect_error){
	die("Connection failed:" . $conn->connect_error);
}

if (empty($FNAME)){
	echo "Please fill-in the required (*) information";
	die();
}

if (empty($LNAME)){
	echo "Please fill-in the required (*) information";
	die();
}

if (empty($PHONE)){
	echo "Please fill-in the required (*) information";
	die();
}


if (empty($EMAIL_ID)){
	echo "Please fill-in the required (*) information";
	die();
}

if ($PWD1 != $PWD2){
	echo "Two passwords do not match";
	die();
}

$PWD = md5($PWD1);
$sql = "INSERT INTO PET_LOVER (EMAIL_ID,FNAME,LNAME,PHONE,GENDER,DOB,LOCATION,PWD, BREED)
	VALUES ('$EMAIL_ID','$FNAME','$LNAME','$PHONE','$GENDER','$DOB','$LOCATION','$PWD', '$BREED')";

if(!mysqli_query($conn,$sql)){
	echo "<br><hr><div style=\"padding:10px 20px;color:#000;font-weight: normal;text-align:center;\">";
	echo "<p style=\"margin-top:40px;font-size:20px;\">Thank you for register</p>";
	echo "<a href=\"#petloverhome\" rel=\"external\">";
	echo "<p style=\"font-size:20px;\">Go to Homepage</p>";
	echo "</a>";
	echo "</div>";
}

else{
	echo "<br><hr><div style=\"padding:10px 20px;color:#000;font-weight: normal;text-align:center;\">";
	echo "<p style=\"margin-top:40px;font-size:20px;\">Thank you for register</p>";
	echo "<a href=\"#petloverhome\" rel=\"external\">";
	echo "<p style=\"font-size:20px;\">Go to Homepage</p>";
	echo "</a>";
	echo "</div>";
}
$_SESSION["USER_ID"]=$EMAIL_ID;
?>