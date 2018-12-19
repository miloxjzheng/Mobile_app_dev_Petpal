<?php
//Image_upload Yashvee

$target_dir = "upload/";
//$target_file = "upload/image.jpg";
$name = $_FILES["imageupload"]["name"];
echo "$name";
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
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "$name, $target_file, $imageFileType";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["imageupload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["imageupload"]["name"]). " has been uploaded.";
    } else {
        echo "Error uploading file!";
    }
}
?>