<?php 

    	//Data untuk testimoni mahasiswa
	$arr_testi = array(
		
		"gani" => array(
			"name" => "Gani Alfonso", 
			"images" => "images/testimoni/gani.jpg", 
			"content" => "Setiap hari selalu ada ide baru, karena lingkungan yang sangat kondusif"
		),
		"rahman" => array(
			"name" => "Roni Perdana", 
			"images" => "images/testimoni/roni.jpg", 
			"content" => "Kuliah sambil kerja, santai aja lagii.. "
		),
		"marta" => array(
			"name" => "Marta Kusuma", 
			"images" => "images/testimoni/marta.jpg", 
			"content" => "Kuliah sambil jadi prensenter, sangat bisa! Universitas Quality sangat fleksibel!."
		)
		
	);

?>
<!DOCTYPE html>
<html lang="en">
	
  <head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0" />

		<title>Kampus Universitas Quality</title>
	
		<!-- Bootstrap core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/my_style.css" rel="stylesheet">
      
        <style type="text/css">
			@media (max-width: 400px) { 
				
				.jumbotron {
					min-height:200px !important;
					padding-left:0px;
					padding-right:0px;
					margin-top:30px;
					background-size:cover;
					background:url(images/edu_small.jpg) no-repeat top right;
				}
			}
			
			@media (min-width:401px) and (max-width: 767px) { 
				
				.jumbotron {
					min-height:200px !important;
					padding-left:0px;
					padding-right:0px;
					margin-top:30px;
					background-size:cover;
					background:url(images/edu_medium.jpg) no-repeat top right;
				}
				
				.judul_berita h1 {
					padding-top:30px;
				}
				
				
			}
			
			@media (min-width: 768px) { 
				.judul_berita h1 {
					margin-top:30px;
				}
				
				.jumbotron {
					background:url(images/edu.jpg) no-repeat top center;
					min-height:350px;
					background-size:cover;
				}
				
			}
			
			div.jumbo_title h1,  div.jumbo_title h4{
				color:white;
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
                      
					<li class="active"><a href="kampus.php">Kampus</a></li>
					<li><a href="biaya.php">Biaya</a></li>
					<li><a href="about.php">About</a></li>
					
				  </ul>
				</div>
				
			  </div>
			</div>
      <!-- END-Bagian Navigasi/Menu paling atas (Fakultas, Kampus, Biaya, Kontak -->
	  	  
	<div class="jumbotron ">		
		
          <div class="col-md-6 jumbo_title">
              <h1>Kenapa harus dengan Quality?</h1>
			  <h4 style="line-height:1.5;">Kami punya alasan kanapa Anda akan menyukai Universitas Quality.</h4>
          </div>	
					
	</div>	

  <!-- Konten di bawah Jumbotron -->
  <div class="container" >

	  <!-- Isi informasi kampus  -->
	  <div class="row" >
		  
			<!-- Konten Kelebihan -->        
			<div class="col-md-6 col-sm-6">
				<h3>Ini yang Quality tawarkan!</h3>
				<hr>
				
				<h3>Fleksibel</h3>
				<p>Jadwal kuliah dapat disesuaikan sehingga dapat kuliah sambil kerja.</p>
				
				<h3>Mudah</h3>
				<p>Lokasi kampus yang mudah diakses, tidak perlu jauh-jauh untuk kuliah.</p>
				
				<h3>Bebas</h3>
				<p>Terdapat 5 Fakultas dengan pilihan Program Studi S1 dan konsentrasi bidang yang berbeda membuat mahasiswa bebas menentukan pilihannya.</p>
				
				<h3>Terakreditasi</h3>
				<p>Seluruh fakultas yang ada telah terakreditasi oleh BAN PT.</p>
				
				<h3>Berkualitas</h3>
				<p>Dosen lulusan S2 dan S3 dari dalam maupun luar negeri memberikan wawasan yang lebih luas kepada mahasiswa, didukung dengan fasilitas kampus yang lengkap.</p>

			</div>		  
			<!-- END-Konten Kelebihan --> 
		  
		  <!-- Konten Cara Mendaftar -->        
			<div class="col-md-6 col-sm-6">

				<h3>Apa kata mahasiswa Quality!</h3>
				<hr>
				
				<?php
					//Bagian untuk mencetak data pada Array
					foreach($arr_testi as $i => $val) {
					
				?>
				
				<div class="media">
				  <a class="pull-left" href="#" style="cursor:default;">
					<img width="100px" class="media-object img-circle" src="<?php echo $val["images"]; ?>" >
				  </a>
				  <div class="media-body">
					<h4 class="media-heading"><strong><?php echo $val["name"]; ?></strong></h4>
					<p class="lead">"<?php echo $val["content"]; ?>"</p>
				  </div>
				</div>
				<hr>
				
			<?php } ?>

			</div>		  
			<!-- END-Konten Cara Mendaftar --> 
		  
	  </div>
	  <!-- END-Isi informasi kampus -->
	  
	  <!--Syarat Pendaftaran-->
	  <div class="row" >
		  
		  <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
			  <h2>Syarat Pendaftaran</h2>
			  <hr>
			  
			  <h3>Ujian Saringan Masuk</h3>
			  <ul>
			  	<li>Mengisi formulir pendaftaran</li>
			      	<li>Membayar biaya pendaftaran</li>
			      	<li>Pasfoto 3&times;4 (2 lembar)</li>
			  </ul>
		      
		      	  <h3>Pendaftaran Ulang</h3>
			  <ul>
			  	<li>Syarat Keterangan Lulus / Rapor dari pihak sekolah (Apabila Ijazah belum ada)</li>
			      	<li>Fotokopi Ijazah SMA/SMK/MA legalisir (3 lembar)</li>
			      	<li>Fotokopi akte kelahiran (3 lembar)</li>
			      	<li>Pasfoto (Langsung foto di kampus ketika mendaftar)<br>Pria = kemeja putih &amp; dasi<br>Wanita = kemeja putih.</li>
			  	<li>Membayar daftar ulang, biaya jaket, kemahasiswaan &amp; biaya kuliah. (<a href="biaya.php" title="Lihat Daftar Baiya" target="_blank">Lihat</a> Daftar Biaya)</li>
			  </ul>
		      
		      	  <h3>Mahasiswa Pindahan / Transfer</h3>
			  <ul>
			  	<li>Surat Keterangan Lulus dari pihak sekolah</li>
			      	<li>Fotokopi Ijazah SMA/SMK/MA legalisir (3 lembar)</li>
			      	<li>Fotokopi Akte Kelahiran</li>
			      	<li>Pasfoto (Langsung foto di kampus ketika mendaftar)<br>Pria = kemeja putih &amp; dasi<br>Wanita = kemeja putih.</li>
			       <li>Transkrip nilai asli &amp; fotokopi legalisir</li>
			      	<li>Surat Ketarangan Pindah dari Perguruan Tinggi asal</li>
			      	<li>Ijazah D3 (Bagi lulusan Diploma 3)</li>
			       <li>Membayar biaya konversi, biaya jaket, kemahasiswaan &amp; biaya kuliah.</li>
			  </ul>
			  
			  
		  </div>
		  
	  </div>
	  <!--END-Syarat Pendaftaran-->
		
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
  
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script>
	
		
	
	</script>
	
  </body>
</html>
