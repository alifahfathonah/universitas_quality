<?php
	require('../Connections/antares_conn.php');
	
	//Variable yang digunakan utk mengelola data kamar
	$status_kamar = "Available";

	$tabel = $_GET['tabel'];
	$id = $_GET['id'];
	$limit = $_GET['limit'];
	$awal = $_GET['awal'];
	$akhir = $_GET['akhir'];
	
	

	if (!function_exists("GetSQLValueString")) {
	function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
	{
	  if (PHP_VERSION < 6) {
		$theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
	  }
	
	  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);
	
	  switch ($theType) {
		case "text":
		  $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
		  break;    
		case "long":
		case "int":
		  $theValue = ($theValue != "") ? intval($theValue) : "NULL";
		  break;
		case "double":
		  $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
		  break;
		case "date":
		  $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
		  break;
		case "defined":
		  $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
		  break;
	  }
	  return $theValue;
	}
	}
	
	mysql_select_db($database_antares_conn, $antares_conn);

	//Query utk di eksekusi semua/ utk umum
	$query_antares_db = "SELECT * FROM " . $tabel . " LIMIT " . $limit;

	if($id == "semua_kamar_tersedia") {
		$query_antares_db = "SELECT * FROM " . $tabel . " WHERE status != 'Booked' GROUP BY kamar.tipe LIMIT " . $limit;
	}

	$antares_db = mysql_query($query_antares_db, $antares_conn) or die(mysql_error());
	$row_antares_db = mysql_fetch_assoc($antares_db);
	$totalRows_antares_db = mysql_num_rows($antares_db);
	
	$data_kamar = array();
	
		
	while($data = mysql_fetch_object($antares_db)){
		$data_kamar[] = $data; // Cara Simpel make mysql_fetch_object
	}
	
	header('Content-type: application/json');
	json_encode($data_kamar,true);
	
	print_r(json_encode($data_kamar,true));
	//echo ("{ \"people\" :\n " . json_encode($mhs,true) . " \n} ");
?>