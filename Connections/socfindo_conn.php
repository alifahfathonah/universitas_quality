<?php	//Konektor ke database
	$host = "127.0.0.1";	
	$user = "root";	
	$password = "root";		
	$db_name = "socfindo";
		
	$link = mysql_connect($host, $user, $password) or die (mysql_error());	
	mysql_select_db($db_name, $link) or die (mysql_error());

?>