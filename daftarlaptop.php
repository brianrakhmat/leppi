<?php 
session_start();
include('koneksi.php');
?>	
<!DOCTYPE html>
<html>
<head>
	<title>Leppi - Sistem Pendukung Keputusan Laptop</title>
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="assets/css/materialize.css"  media="screen,projection"/>
	<link rel="stylesheet" href="assets/css/table.css">
	<link rel="stylesheet" href="assets/css/style.css">

	<link rel="apple-touch-icon" sizes="76x76" href="assets/image/apple-icon.png"> 	<link rel="icon" type="image/png" sizes="96x96" href="assets/image/favicon.png">

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<!--Import jQuery before materialize.js-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/materialize.js"></script>
	
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body>
	<div class="navbar-fixed">
	<nav>
    	<div class="container">
					
						<div class="nav-wrapper">
							<img src="assets/image/logo.png" style="height: 40px; width: auto; margin-top: 12px">
							<!-- <img src="assets/image/logo.png" style="height: 35px; width: auto; margin-top: 12px"> -->
							<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>

								<ul class="right hide-on-med-and-down">
									<li><a href="index.php">Home</a></li>
									<li><a href="rekomendasi.php">Rekomendasi</a></li>
									<li><a class="active" href="daftarlaptop.php">Daftar Laptop</a></li>
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
	<div id="index-banner" class="parallax2-container">
			<div class="section no-pad-bot">
				<div class="container">
					<h1 class="header jarak left white-text" style="font-size: 50px">Daftar Laptop</h1>
				</div>
			</div>
			<div class="parallax"><img src="assets/image/laptop.jpg" alt="Laptop"></div>
		</div>
		<!-- Jumbotron End -->

		<!-- Daftar Laptop Start -->
	<div style="background-color: #efefef">
		<div class="container">
		    <div class="section-card" style="padding: 50px 0px">
		      <!--   Icon Section   -->
				<center>
					<h4 class="header" style="margin-left: 24px; margin-bottom: 0px; margin-top: 24px; color: #635c73">DAFTAR LAPTOP</h4>
				</center><br><br><br>
				<ul>
				    <li>
						<div class="row">
							<div class="card">
								<div class="card-content">
									<table class="responsive-table">
									
											<thead>
												<tr>
													<th><center>No</center></th>
													<th><center>ID Laptop</center></th>
													<th><center>Nama Laptop</center></th>
													<th><center>Jenis Laptop</center></th>
													<th><center>Tipe Laptop</center></th>
													<th><center>Harga Laptop</center></th>
													<th><center>Selengkapnya</center></th>
												</tr>
											</thead>
											<tbody>
												<?php
												$query=mysql_query("SELECT * FROM datalaptop");
												$no=1;
												while ($user=mysql_fetch_array($query)) {
												?>
												<tr>
													<td><center><?php echo $no?></center></td>
													<td><center><?php echo $user['id_laptop']?></center></td>
													<td><center><?php echo $user['nama_laptop']?></center></td>
													<td><center><?php echo $user['jenis_laptop']?></center></td>
													<td><center><?php echo $user['tipe_laptop']?></center></td>
													<td><center><?php echo $user['harga_rupiah']?></center></td>
													<td><center><a class="waves-effect waves-light btn" href="detail.php?detail_id=<?php echo $user['id_laptop']?>"><i class="material-icons right">open_in_new</i>Selengkapnya</a>
													</center></td>
												</tr>
												<?php
														$no++;}
												?>
											</tbody>
									</table>
									</div>
							</div>
						</div>
				    </li>
				</ul>	     
	    	</div>
		</div>
	</div>
	<!-- Daftar Laptop End -->

	    <!-- Modal Start -->
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
		<!-- Modal End -->

    <!-- Body End -->

    <!-- Footer Start -->
	<div class="footer-copyright" style="padding: 30px 0px; background-color: white">
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