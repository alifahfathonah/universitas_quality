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
		<link href="css/bootstrap.css" rel="stylesheet">
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
		
			<!-- Tambah Data Peminjaman -->        
			<div class="col-md-12" >
		  
				<div class="page-header">
					<img src="images/logo.png" width="250px" height="120px">
				</div>
					
			</div>		  
			<!-- /Tambah Data Peminjaman -->	

			<!-- List Gambar pada Home-->
			<div class="row">

				<div class="col-md-3 col-sm-6 col-xs-6">
					<a class="link_berita" href="berita.php">
						<img src="images/home/gedung.png" class="img-responsive">
						<h4>Gedung Kampus Innovator</h4>
					</a>
				</div>

				<div class="col-md-3 col-sm-6 col-xs-6">
					<a class="link_berita" href="berita.php">
						<img src="images/home/kantor.png" class="img-responsive">
						<h4>Kantor Fakultas Teknik</h4>
					</a>
				</div>

				<div class="col-md-3 col-sm-6 col-xs-6">
					<a class="link_berita" href="berita.php">
						<img src="images/home/kebun.png" class="img-responsive">
						<h4>Kebun pada Fakultas Pertanain</h4>
					</a>
				</div>

				<div class="col-md-3 col-sm-6 col-xs-6">
					<a class="link_berita" href="berita.php">
						<img src="images/home/teknik.png" class="img-responsive">
						<h4>Fasilitas pada lab Teknik Sipil dana judul yag sangat panjang</h4>
					</a>
				</div>

			</div>        	
			<!-- END-List Gambar pada Home-->
		
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

                <div class="row">                
                    <div class="col-md-6 col-sm-6">
                        
                            <img src="images/gedung-creator.JPG" class="img-responsive">

                            <h3><strong>Kampus Creator Medan</strong></h3>
                            <p class="lead">
                                Jl. Ring Road Ngumban Surbakti No. 18 Medan<br>
                                Simpang Quality<br>
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
                    <div class="col-md-6 col-sm-6 visible-xs">
                        
                            <img src="images/gedung-innovator.JPG" class="img-responsive">

                            <h3><strong>Kampus Innovator Medan</strong></h3>
                            <p class="lead">
								Quality Hill<br>
								Peceran - Lau Gumba Kecamatan Berastagi<br>
								<strong>Telp. (06288) 92188</strong>
                            </p>
                    </div>
                    
                    
                    <div class="col-md-6 col-sm-6">
                        <img src="images/map-innovator.jpg" class="img-responsive " alt="Kampus Innovator">
                    </div>
                    
                    
                    <!-- nilai "hidden-xs" pada kelas berguna untuk 
                        menyembunyikan hanya pada layar hape.
                        GUNA: Untuk memperbaiki perubahan layout yg terjadi.
                    -->
                    <div class="col-md-6 col-sm-6 hidden-xs">
                        
                            <img src="images/gedung-innovator.JPG" class="img-responsive">

                            <h3><strong>Kampus Innovator Medan</strong></h3>
                            <p class="lead">
								Quality Hill<br>
								Peceran - Lau Gumba Kecamatan Berastagi<br>
								<strong>Telp. (06288) 92188</strong>
                            </p>
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
  
    <!-- 
    Code JavaScript (Library bawaan bootstrap) 
    utk mengaktifkan fitur dropdown pada navigasi fakultas.
    -->
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
  </body>
</html>
html lang=
