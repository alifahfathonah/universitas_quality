<?php
	// Untuk menghubungkan dengan Database
	require('Connections/connection.php'); 
?>
<!DOCTYPE html>
<html lang="en">
	
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0" />

		<title>Home Universitas Quality</title>
	
		<!-- Bootstrap core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/my_style.css" rel="stylesheet">
		<style type="text/css">
	
			.jumbotron {
				background:url(images/leaf.jpg) no-repeat center;
				background-size:cover;
				min-height:600px;
				margin:0px;
				padding-bottom:0px;
			}
			
			a.link_berita {
				border:1px solid #999;
				display:block;
				background-color:RGBA(235,235,235, 0.9);
				color:black;
				
				margin-bottom:20px;
			}
			
			div.home-feature {
				margin-top:20px;
				padding:0px;
			}
			
			div.media {
				border:1px solid #fff;
				background-color:RGBA(235,235,235, 0.5);
			}
			
			div.jumbotron p {
				font-size:14px;	
			}
			
			/* Untuk memberikan padding-top pada "Akreditas BAN-PT, dst" */
			div.media-body {
				padding-top:10px;	
			}
	
		</style>
	
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
				  
                           <li class="dropdown">
                            <a href="#fakultas" class="dropdown-toggle" data-toggle="dropdown">Fakultas <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                              <li><a href="fakultas.php?fak=fp">Pertanian</a></li>
                              <li><a href="fakultas.php?fak=fe">Ekonomi</a></li>
                              <li><a href="fakultas.php?fak=fkip">Keguruan &amp; Ilmu Pendidikan</a></li>
                              <li><a href="fakultas.php?fak=ft">Teknik</a></li>
                              <li><a href="fakultas.php?fak=fh">Hukum</a></li>
                            </ul>
                          </li> 
                      
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
		
			<!-- Bagian Logo Kampus dan 3 Pilar Utama -->        
			<div class="col-md-8" >
		  
				<div class="page-header text-center">
					<img src="images/logo.png" width="250px" height="120px">
					<p><strong>Real, Consistent</strong></p>
				</div>
				<div>
					<img src="images/home-pic.png" class="img-responsive">
					
				</div>
					
			</div>		  
			<!-- END - Bagian Logo Kampus dan 3 Pilar Utama -->	

			<!-- List Gambar Fitur pada Home-->
			<div class="col-md-4 home-feature">
				
				
				<div class="media">
				  <a class="pull-left" href="#" style="cursor:default;">
					<img width="100px" class="media-object" src="images/home-ban-pt.jpg" >
				  </a>
				  <div class="media-body">
					<h4 class="media-heading"><strong>Akreditasi BAN-PT</strong></h4>
					<p class="lead">Semua Fakultas dan Program Studi sudah terakreditas oleh BAN-PT.</p>
				  </div>
				</div>
				
				<div class="media" >
				  <a class="pull-left" href="#" style="cursor:default;">
					<img width="100px" class="media-object" src="images/home-beasiswa.jpg" >
				  </a>
				  <div class="media-body" >
					<h4 class="media-heading"><strong>Beasiswa</strong></h4>
					<p class="lead">Universitas akan memberika beasiswa untuk mahasiswa berprestasi.</p>
				  </div>
				</div>
				
				<div class="media">
				  <a class="pull-left" href="#" style="cursor:default;">
					<img width="100px" class="media-object" src="images/home-feature.jpg" >
				  </a>
				  <div class="media-body">
					<h4 class="media-heading"><strong>Free Unlimited Wifi</strong></h4>
					<p class="lead">Semua proses belajar mengajar akan lancar dengan fasilitas ini.</p>
				  </div>
				</div>
				
				

			</div>        	
			<!-- END-List Gambar Fitur pada Home-->
		  
		  <div class="clear-fix">&nbsp;</div>
		
	  </div>
					
	</div>
	<!-- END-Bagian Header Untuk Halaman Utama -->
	

  <!-- Konten di bawah header -->
  <div class="container" >

	  <!-- Lokasi Kampus  -->
	  <div class="row">

	<!-- Baris Informasi Lokasi Kampus -->
	<div class="col-md-12" >

		<div class="page-header" >
			<h2>Lokasi Kampus</h2>
		</div>

		<div class="row">
			<div class="col-md-6 col-sm-6">
				<h3 class="visible-xs text-center"><strong>Kampus Creator Medan</strong></h3>
				<img src="images/gedung-creator.JPG" class="img-responsive">

				<h3 class="hidden-xs"><strong>Kampus Creator Medan</strong></h3>
				
				<p class="lead">
					Jl. Ring Road Ngumban Surbakti No. 18 Medan
					<br> Simpang Quality
					<br>
					<strong>Telp/Fax. (061) 8004 7003</strong>
				</p>
			</div>

			<div class="col-md-6 col-sm-6">
				<img src="images/map-creator.jpg" class="img-responsive " alt="Kampus Creator">
			</div>

		</div>

		<hr>

		<div class="row" style="margin-top:25px;">

			<!-- nilai "visible-xs" pada kelas berguna untuk 
                        menampilkan hanya pada layar hape
                    -->
			<div class="col-md-6 col-sm-6">
				<h3 class="visible-xs text-center"><strong>Kampus Innovator Medan</strong></h3>
				<img src="images/gedung-innovator.JPG" class="img-responsive">

				<h3 class="hidden-xs"><strong>Kampus Innovator Medan</strong></h3>
				<p class="lead">
					Quality Hill
					<br> Peceran - Lau Gumba Kecamatan Berastagi
					<br>
					<strong>Telp. (06288) 92188</strong>
				</p>
			</div>


			<div class="col-md-6 col-sm-6">
				<img src="images/map-innovator.jpg" class="img-responsive " alt="Kampus Innovator">
			</div>
			

		</div>


	</div>
	<!-- END-Baris Informasi Lokasi Kampus -->

</div>

		
	  <!-- FOOTER -->
	  <footer style="margin-top:50px;">
		<p class="pull-right"><a href="#">Back to top</a></p>
		<p>
			&copy; <?php echo date('Y A'); ?> Unversitas Quality<br>
		</p>
	  </footer>
	  <!-- END-FOOTER -->

</div>
<!-- END-Konten di bawah header -->
  
    <!-- 
    Code JavaScript (Library bawaan bootstrap) 
    utk mengaktifkan fitur dropdown pada navigasi fakultas.
    -->
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
  </body>
</html>