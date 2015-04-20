<?php 
	require('Connections/connection.php');
	require('php-engine/tgl_indo.php');
    
    // Variabel Umum
    $fakultas_aktif = "fp"; 
    $warna_bg       = ""; 
    $warna_aktif    = "";

    if( isset($_GET['fak']) ) { $fakultas_aktif = strtolower($_GET['fak']); }  

    $query_fak      = "SELECT * FROM fakultas WHERE id_fakultas = '".strtoupper($fakultas_aktif)."' ";
    $exec_fakultas  = mysql_query($query_fak) or die(mysql_error());
    $fak_data       = mysql_fetch_array($exec_fakultas) or die(mysql_error());

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

		<title>Judul Berita</title>
	
		<!-- Bootstrap core CSS -->
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/my_style.css" rel="stylesheet">
      
        <style type="text/css">
			
			@media (max-width: 767px) { 
				
				.jumbotron {
					min-height:100px !important;
					padding-left:0px;
					padding-right:0px;
				}
				
				.judul_berita h1 {
					padding-top:30px;
				}
				
				
			}
			
			@media (min-width: 768px) { 
				.judul_berita h1 {
					margin-top:30px;
				}
				
			}
			
			
			.jumbotron {
					background-color:#FFF;
					min-height:350px;
			}
			
			
			.isi_berita {
				font-size:16px;
				font-family:"freight-text-pro",Georgia,Cambria,"Times New Roman",Times,serif;
				letter-spacing:.01rem;
				font-weight:400;
				font-style:normal;
				font-size:22px;
				line-height:1.5;
				
				padding-top:10px;
			}
			
			.header_berita {
				background:url(images/home/gedung.png) no-repeat center;
				background-size:cover;
			}
			
			.judul_berita h1 {
				font-family:"freight-text-pro",Georgia,Cambria,"Times New Roman",Times,serif;
				background-color:RGBA(235,235,235, 0.9);
				padding:20px;
				line-height:1.1;
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
                      
					<li><a href="kampus.php">Kampus</a></li>
					<li><a href="biaya.php">Biaya</a></li>
					<li><a href="kontak.php">Kontak</a></li>
					
				  </ul>
				</div>
				
			  </div>
			</div>
      <!-- END-Bagian Navigasi/Menu paling atas (Fakultas, Kampus, Biaya, Kontak -->
	  	  
	<!-- Bagian Header Untuk masing-masing fakultas -->
	<div class="jumbotron header_berita">
		
		
          <div class="col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2 judul_berita">
              <h1>Kebun pada Fakultas Pertanain kampus Innovator Berastagi.</h1>
          </div>		
		
					
	</div>
	<!-- END-Bagian Header Untuk Halaman Utama -->
	

  <!-- Konten di bawah header -->
  <div class="container" >

	  <!-- Container Isi Berita  -->
	  <div class="row" >
		  
			<!-- Konten Berita -->        
			<div class="col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2">
		  				
				<div class="isi_berita">
					
					<img src="images/home/gedung.png" width="300px" style="float:left; margin:0px 15px 0px 0px;" >
				
					<p>Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit amet, consectetur, adipisci[ng] velit, sed quia non numquam [do] eius modi tempora inci[di]dunt, ut labore et dolore magnam aliquam quaerat voluptatem.</p>
					<br>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur? At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias excepturi sint, obcaecati cupiditate non provident, similique sunt in culpa, qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et  distinctio. Nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, quod maxime placeat, facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet, ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat  More Lorem Ipsum  Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit amet, consectetur, adipisci[ng] velit, sed quia non numquam [do] eius modi tempora inci[di]dunt, ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur? At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias excepturi sint, obcaecati cupiditate non provident, similique sunt in culpa, qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et  distinctio. Nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, quod maxime placeat, facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet, ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat  Even More Lorem Ipsum  Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit amet, consectetur, adipisci[ng] velit, sed quia non numquam [do] eius modi tempora inci[di]dunt, ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur? At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias excepturi sint, obcaecati cupiditate non provident, similique sunt in culpa, qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et  distinctio. Nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, quod maxime placeat, facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet, ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat
				
				</div>
						  

			</div>		  
			<!-- END-Konten Berita -->    		  
		  
	  </div>
	  <!-- END-Container Isi Berita -->

		
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
