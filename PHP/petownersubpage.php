<?php
{
$servername = "localhost";
$dbusername = "websysF182";
$dbpassword = "websysF182!!";
$dbname = "websysF182";
	
//if(isset($_POST['email'])) { //if i have this post
    //echo $_POST['email']; // print it
//}
	
$EMAIL_ID = "112@example.com";
$link = mysql_connect($servername,$dbusername,$dbpassword) or die('Cannot connect to the database.');
mysql_select_db($dbname,$link) or die('Cannot select database.');
	
//get pet lover information for pet owner homepage
$query = "SELECT EMAIL_ID,FNAME,LNAME,PHONE,GENDER,DOB,LOCATION,BREED,IMAGE FROM PET_LOVER WHERE EMAIL_ID =\"$EMAIL_ID\"";
$result = mysql_query($query,$link) or die('Errant query: '.$query);

/* create one master array of the records*/
$users = array();
if(mysql_num_rows($result)){
	while($user = mysql_fetch_assoc($result)){
		$users[] = array('user'=>$user);
	}
}

/*output in necessary format*/
header('Content-type:application/json');
echo json_encode(array('users'=>$users));

@mysql_close($link);
}
?>