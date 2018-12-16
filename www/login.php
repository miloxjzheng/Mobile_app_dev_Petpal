<?php
$servername = "localhost";
$dbusername = "websysF182";
$dbpassword = "websysF182!!";
$dbname = "websysF182";

session_start();
$EMAIL_ID = $_POST['email'];
$PWD1 = $_POST['pwd'];

//connect to SQL
$conn = mysqli_connect($servername,$dbusername,$dbpassword,$dbname);
//Check connection
if ($conn->connect_error){
	die("Connection failed:" . $conn->connect_error);
}


if (empty($EMAIL_ID)){
	echo "Please fill-in the required (*) information";
	die();
}

if (empty($PWD1)){
	echo "Please fill-in the required (*) information";
	die();
}


$PWD = md5($PWD1);
$sql1 = "SELECT * FROM PET_OWNER WHERE EMAIL_ID='$EMAIL_ID' AND PWD='$PWD'";
$sql2 = "SELECT * FROM PET_LOVER WHERE EMAIL_ID='$EMAIL_ID' AND PWD='$PWD'";

	
$result1 = mysqli_query($conn, $sql1);
$result2 = mysqli_query($conn, $sql2);
//check if match to pet owner table
if (mysqli_num_rows($result1) == 1){
	$_SESSION['user'] = $EMAIL_ID;
	echo "You are logged in, Pet owner. Go to <a href=\"#petownerhome\" rel=\"external\"> Homepage</a>";
}
//chech if match to pet lover table
elseif (mysqli_num_rows($result2) == 1){
	$_SESSION['user'] = $EMAIL_ID;
	echo "You are logged in, Pet lover.Go to <a href=\"#petloverhome\" rel=\"external\"> Homepage</a>";
}

else{
	echo "Wrong Email or Password.";
}
$_SESSION["USER_ID"]=$EMAIL_ID;

mysql_close($con);
 
?>