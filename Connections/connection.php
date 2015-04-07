<?php	
	// Konektor ke database //
	// Untuk mengatur koneksi website dengan database MySQL.

	$host = "localhost";	
	$user = "root";	
	$password = "root";		
	$db_name = "universitas_quality";
		
	$link = mysql_connect($host, $user, $password) or die (mysql_error());	
	mysql_select_db($db_name, $link) or die (mysql_error());

?>