<?php
$servername = "localhost";
$dbusername = "websysF182";
$dbpassword = "websysF182!!";
$dbname = "websysF182";


session_start();
$EMAIL_ID = $_SESSION["USER_ID"];
$FNAME = $_POST['fname'];
$LNAME = $_POST['lname'];
$PHONE = $_POST['phone'];
$GENDER = $_POST['gender'];
$DOB = $_POST['DOB'];
$LOCATION = $_POST['location'];

$conn = new mysqli($servername,$dbusername,$dbpassword,$dbname);


//Check connection
if ($conn->connect_error){
	die("Connection failed:" . $conn->connect_error);
}

if (!empty($FNAME)){
 $sql1 = "UPDATE PET_OWNER SET FNAME = '$FNAME' WHERE EMAIL_ID = \"$EMAIL_ID\" ";
 if(!mysqli_query($conn,$sql1)){
  echo "<div style=\"color:#fff;font-weight: bold;text-align:center;\"><p style=\"font-weight:bold;font-size:12px;\"></p ></div>";
}
 else{echo "<div style=\"color:#000000;font-weight: bold;text-align:center;\"><p style=\"font-weight:200;font-size:12px;\">First Name Updated</p ></div>";}
}

if (!empty($LAME)){
 $sql2 = "UPDATE PET_OWNER SET LNAME = '$LNAME' WHERE EMAIL_ID = \"$EMAIL_ID\" ";
 if(!mysqli_query($conn,$sql2)){
  echo "<div style=\"color:#fff;font-weight: bold;text-align:center;\"><p style=\"font-weight:bold;font-size:12px;\"></p ></div>";
}
 else{echo "<div style=\"color:#000000;font-weight: bold;text-align:center;\"><p style=\"font-weight:200;font-size:12px;\">Last Name Updated</p ></div>";}
}

if (!empty($PHONE)){
 $sql3 = "UPDATE PET_OWNER SET PHONE = '$PHONE' WHERE EMAIL_ID = \"$EMAIL_ID\" ";
 if(!mysqli_query($conn,$sql3)){
  echo "<div style=\"color:#fff;font-weight: bold;text-align:center;\"><p style=\"font-weight:bold;font-size:12px;\"></p ></div>";
}
 else{echo "<div style=\"color:#000000;font-weight: bold;text-align:center;\"><p style=\"font-weight:200;font-size:12px;\">Phone Number Updated</p ></div>";}
}

if (!empty($GENDER)){
 $sql4 = "UPDATE PET_OWNER SET GENDER = '$GENDER' WHERE EMAIL_ID = \"$EMAIL_ID\" ";
 if(!mysqli_query($conn,$sql4)){
  echo "<div style=\"color:#fff;font-weight: bold;text-align:center;\"><p style=\"font-weight:bold;font-size:12px;\"></p ></div>";
}
 else{echo "<div style=\"color:#000000;font-weight: bold;text-align:center;\"><p style=\"font-weight:200;font-size:12px;\">Gender Updated</p ></div>";}
}


if (!empty($DOB)){
 $sql5 = "UPDATE PET_OWNER SET DOB = '$DOB' WHERE EMAIL_ID = \"$EMAIL_ID\" ";
 if(!mysqli_query($conn,$sql5)){
  echo "<div style=\"color:#fff;font-weight: bold;text-align:center;\"><p style=\"font-weight:bold;font-size:12px;\"></p ></div>";
}
 else{echo "<div style=\"color:#000000;font-weight: bold;text-align:center;\"><p style=\"font-weight:200;font-size:12px;\">Date of Brith Updated</p ></div>";}
}

if (!empty($LOCATION)){
 $sql6 = "UPDATE PET_OWNER SET LOCATION = '$LOCATION' WHERE EMAIL_ID = \"$EMAIL_ID\" ";
 if(!mysqli_query($conn,$sql6)){
  echo "<div style=\"color:#fff;font-weight: bold;text-align:center;\"><p style=\"font-weight:bold;font-size:12px;\"></p ></div>";
}
 else{echo "<div style=\"color:#000000;font-weight: bold;text-align:center;\"><p style=\"font-weight:200;font-size:12px;\">Location Updated</p ></div>";}
}




?>