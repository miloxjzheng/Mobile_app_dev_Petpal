<?php
{
$servername = "localhost";
$dbusername = "websysF182";
$dbpassword = "websysF182!!";
$dbname = "websysF182";

	
$OWNER_ID = "xz1935@nyu.edu";
$link = mysql_connect($servername,$dbusername,$dbpassword) or die('Cannot connect to the database.');
mysql_select_db($dbname,$link) or die('Cannot select database.');
	
//get pet information for pet lover homepage
$query = "SELECT PET_ID,PNAME,BREED,GENDER,AGE,WEIGHT,NEUTURED, IMAGE FROM PET WHERE OWNER_ID =\"$OWNER_ID\"";
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