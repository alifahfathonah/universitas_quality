<?php 
	require('Connections/connection.php');
	require('php-engine/tgl_indo.php');
    
    // Variabel Umum
    $fakultas_aktif = "fp"; 
    $warna_bg       = ""; 
    $warna_aktif    = "";

    if( isset($_GET['fak']) ) { $fakultas_aktif = strtolower($_GET['fak']); }  

	//Bagian untuk kelola database

	//Bagian untuk Data Fakultas
	$query_fak      = "SELECT * FROM fakultas WHERE id_fakultas = '".strtoupper($fakultas_aktif)."' ";
    	$exec_fakultas  = mysql_query($query_fak) or die(mysql_error());
    	$fak_data       = mysql_fetch_array($exec_fakultas) or die(mysql_error()); //Mengamil data dan disimpan ke "keranjang"/Array $fak_data

	//Bagian utk data Fasilitas
	$query_fas		= "SELECT * FROM fasilitas WHERE id_fakultas = '".strtoupper($fakultas_aktif)."' ";
	$exec_fas  		= mysql_query($query_fas) or die(mysql_error());
	//ambil data langsung pada "body"

	//Bagian utk data Program Study
	$query_pro		= "SELECT * FROM prodi WHERE id_fakultas = '".strtoupper($fakultas_aktif)."' ";
	$exec_pro  		= mysql_query($query_pro) or die(mysql_error());
	//ambil data langsung pada "body"

	
	//Veriabel masuk dari databse

    //Variable spesifik fakultas
    $fak_nama       = $fak_data['nama'];
    $fak_warna      = $fak_data['warna'];
    $fak_gambar     = $fak_data['gambar'];

    //Warna nav aktif masing2 fak

    $aktif_fe       = "#292929";
    $aktif_fp       = "#023d1f";
    $aktif_fkip     = "#eeb008";
    $aktif_ft       = "#924f00";
    $aktif_fh       = "#540d0f";

    if($fakultas_aktif == "fp") {
        $warna_aktif = $aktif_fp;   
    } elseif($fakultas_aktif == "fe") {
        $warna_aktif = $aktif_fe;   
    } elseif($fakultas_aktif == "fkip") {
        $warna_aktif = $aktif_fkip;
    } elseif($fakultas_aktif == "ft") {
        $warna_aktif = $aktif_ft; 
    } elseif($fakultas_aktif == "fh") {
        $warna_aktif = $aktif_fh;
    }

?>
<!DOCTYPE html>
<html lang="en">
	
  <head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0" />

		<title> <?php echo $fak_nama; ?> </title>
	
		<!-- Bootstrap core CSS -->
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/my_style.css" rel="stylesheet">
      
        <style type="text/css">
            
            /* Style utk mengubah masing'' gambar fakultas */
            .warna {
                background-color:<?php echo $fak_warna; ?> ;
                border: none;
            }
            
            .navbar-default .navbar-nav > li > a {
                color:#fff;
            }
            
            .navbar-default .navbar-nav > li > a:hover {
                color:#ebebeb;
            }
            
            .navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover, .navbar-default .navbar-nav > .active > a:focus {
                background-color: <?php echo $warna_aktif; ?>;
                color:#FFF;
            }
            
            /* Style untuk teks Fakultas... di halaman fakultas.php*/   
            .jumbotron div.page-header {
                padding: 10px ;        
                background-color:<?php echo $fak_warna; ?>;
                border-color:<?php echo $fak_warna; ?>;
                opacity:0.9;
                color:#fff;
            }
            
            .fak-pertanian {
                background:url(<?php echo $fak_gambar; ?>) no-repeat;
                background-size:cover;
            }
			
			@media (max-width: 767px) { 
				.media-object {
					width:100px;
				}
			}
			
			@media (min-width: 768px) { 
				.media-object {
					width:150px;
				}
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
	
	  <!-- Bagian Navigasi/Menu paling atas (Fakultas, Kampus, Biaya, Kontak -->	  
			<div class="navbar navbar-default navbar-fixed-top warna">
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
                      
                      <li class="dropdown active">
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
					<li><a href="kontak.php">Kontak</a></li>
					
				  </ul>
				</div>
				
			  </div>
			</div>
      <!-- END-Bagian Navigasi/Menu paling atas (Fakultas, Kampus, Biaya, Kontak -->
	  
	  
	<!-- Bagian Header Untuk masing-masing fakultas -->
	<div class="jumbotron fak-pertanian">
	
	  <div class="container" >
		
			<!-- Tambah Data Peminjaman -->        
			<div class="col-md-5 col-sm-5">
		  
				<div class="page-header">
					<h2><?php echo $fak_data['nama']; ?></h2>
				</div>

			</div>		  
			<!-- /Tambah Data Peminjaman -->			
		
	  </div>
					
	</div>
	<!-- END-Bagian Header Untuk Halaman Utama -->
	

  <!-- Konten di bawah header -->
  <div class="container" >
	  
	<div class="row">
	  
	   <!-- Program Studi -->
	  <div class="col-md-6 col-sm-6" >
		  
		  
				<div class="page-header">
					<h2>Program Study </h2>
				</div>
				
				<?php
				while($pro_data = mysql_fetch_array($exec_pro) ){
					
					$nama_pro 	= $pro_data['nama_prodi'];
					$logo_pro 	= $pro_data['logo_prodi'];
					$no_izi		= $pro_data['nomor_izin']; 
					
				?>
				
						
							<div class="media">
							  <a class="pull-left" href="#" style="cursor:default;">
								<img style="width:50px; border-radius:25px;" class="img-responsive" src="<?php echo $logo_pro; ?>" alt="Gambar">
							  </a>
							  <div class="media-body">
								<h4 class="media-heading"><?php echo $nama_pro; ?></h4>
								<?php echo $no_izi; ?>
							  </div>
							</div>
		  					<hr>

				
					
				<?php
				}
				?>		  
				
		  
	  </div>
	  <!--END-Program Studi-->
	  

	  <!-- Fasiltas Fakultas  -->		  
			<div class="col-md-6 col-sm-6">
		  
				<div class="page-header">
					<h2>Fasilitas </h2>
				</div>
				
				<!-- Item utk fasilitas -->
				<?php
				//Konsep bagian sama dengan pengambilan data utk Fakultas (line:17)
				//data akan di simpan ke $fas_data
				//karena data yang di dapat dari database kemungkinan akan lebih dari satu, maka di lakukan perulangan (loop)
				//untuk memastikan semua data diambil
				while($fas_data = mysql_fetch_array($exec_fas) ){ 
					//Setiap loop akan mengamil data dari array dan menyimpan ke var berikut:
					
					$nama_fas 	= $fas_data['nama'];  // Untuk nama fasilitas "Kebun pendidikan", ditampilkan di line:267
					$gambar_fas 	= $fas_data['gambar']; // Gambar utk fasilitas, line:264
					$ket_fas 	= $fas_data['keterangan'];  // Keterangan, line:268
					
				?>
				
					<div class="media">
					  <a class="pull-left" href="#" style="cursor:default;">
						<img class="media-object" src="<?php echo $gambar_fas; ?>" alt="Gambar">
					  </a>
					  <div class="media-body">
						<h4 class="media-heading"><?php echo $nama_fas; ?></h4>
						<?php echo $ket_fas; ?>
					  </div>
					</div>
									
					
				<?php
				}
				?>		  
				<!-- END- Item utk fasilitas -->
				
			</div>	  
	  		<!-- END-Fasiltas Fakultas -->
		
	  </div>
	 
	  
	  <!-- FOOTER -->
	  <footer class="col-md-12" style="margin-top:50px;">
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
