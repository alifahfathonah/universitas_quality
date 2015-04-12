<?php	
	// Konektor ke database //
	// Untuk mengatur koneksi website dengan database MySQL.
	// $host = alamat server yg dituju, karena di akses secara offline maka "localhost"
	// $user = jelas
	// $password = Password yg digunakan untuk proteksi database, kosongkan jika tidak ada
	// $db_name = nama database adalah universitas_quality

	$host = "localhost";	
	$user = "root";	
	$password = "root";		
	$db_name = "universitas_quality";
		
	$link = mysql_connect($host, $user, $password) or die (mysql_error());	
	mysql_select_db($db_name, $link) or die (mysql_error());

?>
