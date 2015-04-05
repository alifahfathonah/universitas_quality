<?php 

	require('Connections/socfindo_conn.php');
	require('php-engine/tgl_indo.php');
?>
<!DOCTYPE html>
<html lang="en">
	
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	  	<meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0" />
        
		<title>Tambah Data Peminjam</title>
	
		<!-- Bootstrap core CSS -->
		<link href="css/bootstrap.css" rel="stylesheet">
	
		<!-- Just for debugging purposes. Don't actually copy this line! -->
		<!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->
	
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->
	
		<!-- Custom styles for this template -->
		<link href="css/datepicker.css" rel="stylesheet"> 
  </head>
	
<body>
	
	  <!-- Navbar -->
	  
		<!-- Static navbar -->
			<div class="navbar navbar-default navbar-static-top">
			  <div class="container">
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				  <a class="navbar-brand" href="index.php">Koperasi Socfindo</a>
				</div>
				
				<div class="navbar-collapse collapse">
				  <ul class="nav navbar-nav">
				  
					<li><a href="index.php">Home</a></li>
					
					<li class="dropdown">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tambah <b class="caret"></b></a>
					  <ul class="dropdown-menu">
						<li class="active"><a href="#tambah-peminjam.php">Tambah Peminjam</a></li>
						<li><a href="tambah-anggota.php">Tambah Anggota</a></li>
					  </ul>
					</li>
					
					<li><a href="#about">About</a></li>
					<li><a href="#contact">Contact</a></li>
					
				  </ul>
				</div><!--/.nav-collapse -->
				
			  </div>
			</div>
	
	  <!-- /Navbar -->


	  <!-- Konten Keseluruhan, dibawah Navbar -->
	  <div class="container">

      <!-- Row utk konten  -->
      <div class="row" id="quick_reservation">
		  
		  	<!-- Tambah Data Peminjaman -->        
		  	<div class="col-md-6">
          
		  		<div class="page-header">
					<h2>Tambah Data Peminjam</h2>
				</div>
	
				<form class="form-horizontal" method="POST" name="form_tambah_data_peminjam" id="form_tambah_data_peminjam" action="tambah_peminjam.php">
				
					<div class="form-group">
						<label for="no_estate" class="col-lg-3 col-sm-3 control-label">No. Estate</label>
						<div class="col-lg-9 col-sm-9">
						  <input type="number" class="form-control" id="no_estate" name="no_estate" placeholder="Nomor Estate Anggota" required aria-invalid="true">
						</div>
					</div>
					
					<div class="form-group">
						<label for="nama" class="col-lg-3 col-sm-3 control-label">Nama</label>
						<div class="col-lg-9 col-sm-9">
						  <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" required>
						</div>
					</div>
																			
					<div class="form-group">
						<label for="jumlah_pinjaman" class="col-lg-3 col-sm-3 control-label">Pinjaman (Rp.)</label>
						<div class="col-lg-9 col-sm-9">
						  <input type="number" class="form-control" id="jumlah_pinjaman" name="jumlah_pinjaman" placeholder="Jumlah Pinjaman (Rp.)" required aria-invalid="true">
						</div>
					</div>
										
					<div class="form-group">
						<div class="col-lg-offset-3 col-sm-offset-3 col-lg-9 col-sm-9">
						  <button type="submit" class="btn btn-default">Kirim</button>
						</div>
					</div>
					
				</form>
			
			</div>		  
			<!-- /Tambah Data Peminjaman -->	
		  
      	</div>
		<!-- /Row utk konten -->
		
      <!-- FOOTER -->
      <footer style="margin-top:50px;">
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>
			&copy; 2014 Socfindo<br>
		</p>
      </footer>

    </div>
	  
	 <!-- Konten Keseluruhan, dibawah Slide Show -->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
	  <script src="js/bootstrap-datepicker.js" type="text/javascript"></script> 
	  
	  <script>
		  $(function () {

	
			// Punyaku disabling dates
			var nowTemp = new Date();
			var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);
		
			var checkin = $('div#tgl_lahir').datepicker();
			
			console.log("Waktu Sekarang : " + now);
	
		  })
	  
	</script>
	
</body>
</html>
