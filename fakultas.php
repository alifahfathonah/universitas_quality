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

		<title>Fakultas ...</title>
	
		<!-- Bootstrap core CSS -->
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/my_style.css" rel="stylesheet">
	
		<!-- Just for debugging purposes. Don't actually copy this line! -->
		<!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->
	
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->
	
  </head>
	
  <body>
	
	  <!-- Navbar -->
	  
		<!-- Static navbar -->
			<div class="navbar navbar-default navbar-fixed-top">
			  <div class="container">
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				  <a class="navbar-brand" href="index.php">Universitas Quality</a>
				</div>
				
				<div class="navbar-collapse collapse">
				  <ul class="nav navbar-nav">
				  
					<li class="active"><a href="fakultas.php">Fakultas</a></li>
					<li><a href="lokasi.php">Lokasi</a></li>
					<li><a href="biaya.php">Biaya</a></li>
					<li><a href="kontak.php">Kontak</a></li>
					
				  </ul>
				</div><!--/.nav-collapse -->
				
			  </div>
			</div>
	
	  <!-- /Navbar -->
	  
	  
	<!-- Bagian Header Untuk Halaman Utama -->
	<div class="jumbotron">
	
	  <div class="container" >
		
			<!-- Tambah Data Peminjaman -->        
			<div class="col-md-12" >
		  
				<div class="page-header">
					<h2>Fakultas ...</h2>
				</div>

			</div>		  
			<!-- /Tambah Data Peminjaman -->			
		
	  </div>
					
	</div>
	<!-- END-Bagian Header Untuk Halaman Utama -->
	

  <!-- Konten di bawah header -->
  <div class="container" >

	  <!-- Fasiltas Fakultas  -->
	  <div class="row" >
		  
			<!-- Fasilitas dalam fakultas -->        
			<div class="col-md-12">
		  
				<div class="page-header">
					<h2>Fasilitas </h2>
				</div>

				<div class="col-md-6 col-sm-6">

					<p class="lead">Fasilitas 1</p>

					<div class="special">
						<div class="special-img">
							<a href="#">
								<img src="images/map.jpg" class="img-responsive " alt="Kampus Creator">
								<span>
									<p>
										<br>
										Jl. Ring Road Ngumban Surbakti No. 18 Medan<br>
										Simpang Quality<br>
										<strong>Telp/Fax. (061) 8004 7003</strong>
									</p>
								</span>
							</a>
						</div>
					</div>					  

				</div>

				<div class="col-md-6 col-sm-6">	

					<p class="lead">Fasilitas 2</p>			

					<div class="special">
						<div class="special-img">
							<a href="#">
								<img src="images/map.jpg" class="img-responsive" alt="Kampus Innovator">
								<span>
									<p>
										<br>
										Quality Hill<br>
										Peceran - Lau Gumba Kecamatan Berastagi<br>
										<strong>Telp. (06288) 92188</strong>
									</p>
								</span>
							</a>
						</div>
					</div>

				</div>
						  

			</div>		  
			<!-- END-Fasilitas dalam fakultas -->    		  
		  
	  </div>
	  <!-- END-Fasiltas Fakultas -->

		
	  <!-- FOOTER -->
	  <footer style="margin-top:50px;">
		<p class="pull-right"><a href="#">Back to top</a></p>
		<p>
			&copy; 2014 Unversitas Quality<br>
		</p>
	  </footer>
	  <!-- END-FOOTER -->

</div>
<!-- END-Konten di bawah header -->
  
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/aplikasi.js" type="text/javascript"></script>
	<script>
	
		
	
	</script>
	
  </body>
</html>
