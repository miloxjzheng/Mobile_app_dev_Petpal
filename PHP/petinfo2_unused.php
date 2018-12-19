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

//Image_upload Yashvee
/*
$target_dir = "upload/";
//$target_file = "upload/image.jpg";
//$name = basename ("image.jpg");
$target_file = $target_dir . basename($_FILES["imageupload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is an actual image or fake image
if(isset($_POST["imageupload"])) {
    $check = getimagesize($_FILES["imageupload"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        $uploadOk = 0;
    }
}

// Check file size
if ($_FILES["imageupload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
    die();
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "$name, $target_file, $imageFileType";
    $uploadOk = 0;
    die();
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    die();
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["imageupload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["imageupload"]["name"]). " has been uploaded.";
    } else {
        echo "Error uploading file!";
        die();
    }
}
*/

$sql = "INSERT INTO PET (OWNER_ID,PNAME,GENDER,AGE,WEIGHT,NEUTURED,BREED)
	VALUES ('$OWNER_ID','$PNAME','$GENDER','$AGE','$WEIGHT','$NEUTURED','$BREED')";

//Image_upload Yashvee

if(!mysqli_query($conn,$sql)){
	echo 'Error.';
}

else{
	echo "<br><hr><div style=\"padding:10px 20px;color:#000;font-weight: normal;text-align:center;\">";
	echo "<p style=\"margin-top:40px;font-size:20px;\">You already added</p>";
	echo "<a href=\"#petimage\" rel=\"external\">";
	echo "<p style=\"font-size:20px;\">Go to upload pet image</p>";
	echo "</a>";
	echo "</div>";
}

?>