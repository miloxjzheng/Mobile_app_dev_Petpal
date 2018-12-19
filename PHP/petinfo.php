<?php
$servername = "localhost";
$dbusername = "websysF182";
$dbpassword = "websysF182!!";
$dbname = "websysF182";

session_start();

$OWNER_ID = $_SESSION["USER_ID"];
$PNAME = $_POST['pname'];
$GENDER = $_POST['gender'];
$AGE = $_POST['age'];
$WEIGHT = $_POST['weight'];
$NEUTURED = $_POST['neutured'];
$BREED = $_POST['breed'];

$conn = new mysqli($servername,$dbusername,$dbpassword,$dbname);

//Check connection
if ($conn->connect_error){
	die("Connection failed:" . $conn->connect_error);
}

if (empty($PNAME)){
	echo "Please fill-in the required (*) information";
	die();
}

if (empty($GENDER)){
	echo "Please fill-in the required (*) information";
	die();
}

if (empty($AGE)){
	echo "Please fill-in the required (*) information";
	die();
}


if (empty($NEUTURED)){
	echo "Please fill-in the required (*) information";
	die();
}

if (empty($BREED)){
	echo "Please fill-in the required (*) information";
	die();
}


$sql = "INSERT INTO PET (OWNER_ID,PNAME,GENDER,AGE,WEIGHT,NEUTURED,BREED)
	VALUES ('$OWNER_ID','$PNAME','$GENDER','$AGE','$WEIGHT','$NEUTURED','$BREED')";

if(!mysqli_query($conn,$sql)){
	echo 'Error.';
}

else{
	echo "<br><hr><div style=\"padding:10px 20px;color:#000;font-weight: normal;text-align:center;\">";
	echo "<p style=\"margin-top:40px;font-size:20px;\">You already added</p>";
	echo "<a href=\"#petownerhome\" rel=\"external\">";
	echo "<p style=\"font-size:20px;\">Go to Homepage</p>";
	echo "</a>";
	echo "</div>";
}

?>