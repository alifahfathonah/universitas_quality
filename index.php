<?php
	require('Connections/connection.php'); 
	require('php-engine/tgl_indo.php');
?>
<!DOCTYPE html>
<html lang="en">
	
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0" />

		<title>Universitas Quality</title>
	
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
				    <a  class="navbar-brand" style="padding:0px; margin:0px;" href="index.php">
                        <img class="img-responsive" src="images/nav_logo.png" height="50px" width="90px">
                    </a>
				</div>
				
				<div class="navbar-collapse collapse">
				  <ul class="nav navbar-nav">
				  
					<li><a href="fakultas.php">Fakultas</a></li>
					<li><a href="kampus.php">Kampus</a></li>
					<li><a href="biaya.php">Biaya</a></li>
					<li><a href="about.php">About</a></li>
					
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
					<img src="images/logo.png" width="250px" height="120px">
				</div>
					
			</div>		  
			<!-- /Tambah Data Peminjaman -->	

			<!-- List Gambar/Fitur sedang terjadi-->
			<div class="row">

				<div class="col-md-3 col-sm-4 col-xs-6">
					<img src="images/bg.jpg" class="img-responsive">
					<h4>Foto / Fitur</h4>
				</div>

				<div class="col-md-3 col-sm-4 col-xs-6">
					<img src="images/bg.jpg" class="img-responsive">
					<h4>Foto / Fitur</h4>
				</div>

				<div class="col-md-3 col-sm-4 col-xs-6">
					<img src="images/bg.jpg" class="img-responsive">
					<h4>Foto / Fitur</h4>
				</div>

				<div class="col-md-3 col-sm-4 col-xs-6">
					<img src="images/bg.jpg" class="img-responsive">
					<h4>Foto / Fitur</h4>
				</div>

			</div>        	
			<!-- END-List Gambar/Fitur sedang terjadi-->
		
	  </div>
					
	</div>
	<!-- END-Bagian Header Untuk Halaman Utama -->
	

  <!-- Konten di bawah header -->
  <div class="container" >

	  <!-- Lokasi Kampus  -->
	  <div class="row" >
		  
			<!-- Baris Informasi Lokasi Kampus -->        
			<div class="col-md-12">
		  
				<div class="page-header">
					<h2>Lokasi Kampus</h2>
				</div>

				<div class="col-md-6 col-sm-6">

					<p class="lead">Kampus Creator Medan</p>

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

					<p class="lead">Kampus Innovator Medan</p>			

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
			<!-- END-Baris Informasi Lokasi Kampus -->  		  
			
		  
		  
	  </div>

		
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
