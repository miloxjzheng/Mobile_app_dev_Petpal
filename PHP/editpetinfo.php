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

if (!empty($PNAME)){
 $sql1 = "UPDATE PET SET PNAME = '$PNAME' WHERE OWNER_ID = \"$OWNER_ID\" ";
 if(!mysqli_query($conn,$sql1)){
  echo "<div style=\"color:#fff;font-weight: bold;text-align:center;\"><p style=\"font-weight:bold;font-size:12px;\"></p ></div>";
}
 else{echo "<div style=\"color:#000000;font-weight: bold;text-align:center;\"><p style=\"font-weight:200;font-size:12px;\">Pet Name Updated</p ></div>";}
}

if (!empty($NEUTURED)){
 $sql2 = "UPDATE PET SET NEUTURED = '$NEUTURED' WHERE OWNER_ID = \"$OWNER_ID\" ";
 if(!mysqli_query($conn,$sql2)){
  echo "<div style=\"color:#fff;font-weight: bold;text-align:center;\"><p style=\"font-weight:bold;font-size:12px;\"></p ></div>";
}
 else{echo "<div style=\"color:#000000;font-weight: bold;text-align:center;\"><p style=\"font-weight:200;font-size:12px;\">Neutured Status Updated</p ></div>";}
}

if (!empty($BREED)){
 $sql3 = "UPDATE PET SET BREED = '$BREED' WHERE OWNER_ID = \"$OWNER_ID\" ";
 if(!mysqli_query($conn,$sql3)){
  echo "<div style=\"color:#fff;font-weight: bold;text-align:center;\"><p style=\"font-weight:bold;font-size:12px;\"></p ></div>";
}
 else{echo "<div style=\"color:#000000;font-weight: bold;text-align:center;\"><p style=\"font-weight:200;font-size:12px;\">Pet Breed Updated</p ></div>";}
}

if (!empty($GENDER)){
 $sql4 = "UPDATE PET SET GENDER = '$GENDER' WHERE OWNER_ID = \"$OWNER_ID\" ";
 if(!mysqli_query($conn,$sql4)){
  echo "<div style=\"color:#fff;font-weight: bold;text-align:center;\"><p style=\"font-weight:bold;font-size:12px;\"></p ></div>";
}
 else{echo "<div style=\"color:#000000;font-weight: bold;text-align:center;\"><p style=\"font-weight:200;font-size:12px;\">Pet Gender Updated</p ></div>";}
}

if (!empty($AGE)){
 $sql5 = "UPDATE PET SET AGE = '$AGE' WHERE OWNER_ID = \"$OWNER_ID\" ";
 if(!mysqli_query($conn,$sql5)){
  echo "<div style=\"color:#fff;font-weight: bold;text-align:center;\"><p style=\"font-weight:bold;font-size:12px;\"></p ></div>";
}
 else{echo "<div style=\"color:#000000;font-weight: bold;text-align:center;\"><p style=\"font-weight:200;font-size:12px;\">Pet Age Updated</p ></div>";}
}

if (!empty($WEIGHT)){
 $sql6 = "UPDATE PET SET WEIGHT = '$WEIGHT' WHERE OWNER_ID = \"$OWNER_ID\" ";
 if(!mysqli_query($conn,$sql6)){
  echo "<div style=\"color:#fff;font-weight: bold;text-align:center;\"><p style=\"font-weight:bold;font-size:12px;\"></p ></div>";
}
 else{echo "<div style=\"color:#000000;font-weight: bold;text-align:center;\"><p style=\"font-weight:200;font-size:12px;\">Pet Weight Updated</p ></div>";}
}




?>