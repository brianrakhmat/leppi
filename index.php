<!DOCTYPE html>
<html>
<head>
	<title>Leppi - Sistem Pendukung Keputusan Laptop</title>
	<meta property="og:image" content="assets/image/laptop.jpg" />
	<meta name="description" content="Leppi adalah aplikasi Sistem Pendukung Keputusan Laptop berbasis Metode Weight Product">
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="assets/css/materialize.css"  media="screen,projection"/>
	<link rel="stylesheet" href="assets/css/table.css">
	<link rel="stylesheet" href="assets/css/style.css">

	<link rel="apple-touch-icon" sizes="76x76" href="assets/image/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/image/favicon.png">

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<!--Import jQuery before materialize.js-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/materialize.js"></script>
	
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
	<script>
	$(document).ready(function(){
	  $(".button-collapse").sideNav();
	  $(".dropdown-button").dropdown();
	});
	</script>
</head>
<body>
	<div class="navbar-fixed">
	<nav>
    	<div class="container">
					
						<div class="nav-wrapper">
							
							<img src="assets/image/logo.png" style="height: 40px; width: auto; margin-top: 12px">
							<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>

								<ul class="right hide-on-med-and-down">
									<li><a class="active" href="index.php">Home</a></li>
									<li><a href="rekomendasi.php">Rekomendasi</a></li>
									<li><a href="daftarlaptop.php">Daftar Laptop</a></li>
									<li><a href="#about">About</a></li>
									<ul class="right hide-on-med-and-down">
										<li><a class="waves-effect waves-light btn" href="login.php">Login</a></li>
									</ul>
									
								</ul>
						</div>
					
        </div>
		</nav>
		</div>
    <!-- Body Start -->

		<!-- Jumbotron Start -->
		<div id="index-banner" class="parallax-container">
			<div class="section no-pad-bot">
				<div class="container">
					<h1 class="header jarak center white-text" style="font-size: 50px">SISTEM PENDUKUNG KEPUTUSAN MENGGUNAKAN METODE WEIGHTED PRODUCT</h1>
					<div class="row center">
						<h5 class="header jarak-button col s12 light" style="margin-bottom: 0px; font-size: 30px">PEMILIHAN LAPTOP</h5>
					</div>
					<div class="row center" \>
								<a href="rekomendasi.php" id="download-button" class="btn-large waves-effect waves-light teal lighten-1" style="margin-top: 20px">Pilih Rekomendasi</a>
							</div>
				</div>
			</div>
			<div class="parallax"><img src="assets/image/laptop.jpg" alt="Laptop"></div>
		</div>
		<!-- Jumbotron End -->

	<!-- Galeri Laptop Start -->
	<div>
	  <div class="container" style="padding: 50px 0px">
	    <div class="row">
	     	<center>
				<h2 class="header" style="margin-left: 24px; margin-bottom: 0px; margin-top: 24px; color: #635c73">GALERI LAPTOP</h2>
	    	</center><br><br><br>
	      <div class="col s4">
	        <center>
	        	<img class="materialboxed" width="300" src="assets/image/1.jpg">
	        </center>
	      </div>
	      <div class="col s4">
	        <center>
	          	<img class="materialboxed" width="300" src="assets/image/2.jpg">
	        </center>
	      </div>
	      <div class="col s4">
	        <center>
	         	<img class="materialboxed" width="300" src="assets/image/3.jpg">
	        </center>
	      </div>
	    </div>

	    <div class="row">
	      <div class="col s4">
	        <center>
	         	<img class="materialboxed" width="300" src="assets/image/4.jpg">
	        </center>
	      </div>
	      <div class="col s4">
	        <center>
	          	<img class="materialboxed" width="300" src="assets/image/5.jpg">
	        </center>
	      </div>
	      <div class="col s4">
	        <center>
	        	<img class="materialboxed" width="300" src="assets/image/6.jpg">
	        </center>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- Galeri Laptop End -->

	<!-- Merk Laptop Start -->
	<div style="background-color: #efefef">
		<div class="container">
		    <div class="section-card" style="padding: 50px 0px">
		      <!--   Icon Section   -->
				<center>
					<h2 class="header" style="margin-left: 24px; margin-bottom: 0px; margin-top: 24px; color: #635c73">MERK LAPTOP</h2>
				</center><br><br><br>
				<ul>
				    <li>
						<div class="row">
							<div class="col s12 m3">
								<img width="200" src="http://icons.iconarchive.com/icons/uiconstock/socialmedia/256/Apple-icon.png">
							</div>

							<div class="col s12 m3">
								<img width="200" src="http://media.msi.com/main.php?g2_view=downloadlink.OfferDownload&g2_itemId=160756">
							</div>

							<div class="col s12 m3">
								<img width="200" src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/48/Dell_Logo.svg/2000px-Dell_Logo.svg.png">
							</div>

							<div class="col s12 m3">
								<img width="200" src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ad/HP_logo_2012.svg/2000px-HP_logo_2012.svg.png">
							</div>
						</div>
				    </li>
				</ul>	     
	    	</div>
		</div>
	</div>
	<!-- Merk Laptop End -->

	<!-- Info Start -->
	<div style="background-color: white">
		<div class="container">
		    <div class="section-card" style="padding: 50px 0px">
		    	<div class="row">
		    		<div class="col s6">
			    		<center><h5 class="header" style="margin-left: 24px; margin-bottom: 0px; margin-top: 25px; color: #635c73">INFO SISTEM</h5></center><br>
			    		<p>Sistem Pendukung Keputusan Pemilihan Laptop ini menggunakan metode Weight Product yang dibangun menggunakan bahasa PHP (Preprocessor Hyper Text). Sistem ini dibuat sebagai Tugas Akhir Mata Kuliah Sistem Pendukung Keputusan (Decission Support System) Prodi Teknik Informatika UIN Sunan Kalijaga Yogyakarta. </p>
			    	</div>
			    	<div class="col s6">
			    		<center><h5 class="header" style="margin-left: 24px; margin-bottom: 0px; margin-top: 25px; color: #635c73">INFO METODE</h5></center><br>
							<p>Metode yang digunakan adalah metode Weight Product. Metode Weight Product adalah  Metode Weighted Product (WP) adalah salah satu metode penyelesaian pada sistem pendukung keputusan. Metode ini mengevaluasi beberapa alternatif terhadap sekumpulan atribuat atau kriteria, dimana setiap atribut saling tidak bergantung satu dengan yang lainnya.
							</p>
							</div>
		    	</div>
	    	</div>
		</div>
	</div>
	<!-- Info End -->

	<div id="about" class="modal">
    <div class="modal-content">
      <h4>About</h4>
      <p>Sistem Pendukung Keputusan Pemilihan Laptop ini menggunakan metode Weight Product yang dibangun menggunakan bahasa PHP (Preprocessor Hyper Text).
				Sistem ini dibuat sebagai Tugas Akhir Mata Kuliah Sistem Pendukung Keputusan (Decission Support System) Prodi Teknik Informatika UIN Sunan Kalijaga Yogyakarta. <br>
				<br>
				<b>Kelompok 2 SPK</b><br>
				1. Brian Rakhmat Aji<br>
				2. Erna Novia Safitri<br>
				3. Rizqi Zidanul Farhan<br>
				4. Muftia Chalida<br>
				5. Nafia Nisaul Hamidah<br><br>

				More information: <b>brianetlab@gmail.com</b>
			</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Close</a>
    </div>
	</div>
	
    <!-- Body End -->

    <!-- Footer Start -->
	<div class="footer-copyright" style="padding: 30px 0px">
      <div class="container">
      	<center>
					<img src="assets/image/logo.png" style="height: 40px; width: auto; margin-top: 12px">
      		<!-- <img src="assets/image/logo.png" style="height: 35px; width: auto; margin-top: 12px"> -->
      	</center>
        <p align="center" style="color: #999">&copy; Sistem Pendukung Keputusan Pemilihan Laptop</p>
      </div>
    </div>
    <!-- Footer End -->
    <script type="text/javascript">
	 			$(document).ready(function(){
	      $('.parallax').parallax();
				$('.modal').modal();
	    });
	</script>
</body>
</html>