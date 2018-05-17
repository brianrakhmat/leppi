<?php 
session_start();
include('../koneksi.php');
if ($_SESSION['level']=='admin') {
	
?>
<!doctype html>
<html lang="en">

<head>
	<title>Leppi - Admin | Sistem Pendukung Keputusan Laptop</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="index.php"><img src="assets/img/4.png"  width="120px" alt="Admin" class="img-responsive logo"></a>
			</div>
			<div class="container-fluid">
				<div id="navbar-menu">
					<!-- <form class="navbar-form navbar-right">
							<div class="input-group">
								<input type="text" value="" class="form-control" placeholder="Cari...">
								<span class="input-group-btn"><button type="button" class="btn btn-primary">Cari</button></span>
							</div>
						</form> -->
						
				</div>
			</div>
		</nav>a
		<!-- END NAVBAR -->
		<?php
								$username=$_SESSION['username'];
								$query=mysql_query("SELECT * FROM user where username='$username'");
								$user=mysql_fetch_array($query);
								?>
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="index.php" class="active"><i class="lnr lnr-home"></i> <span>Beranda</span></a></li>
						<li><a href="pages/DataLaptop.php"><i class="lnr lnr-file-empty"></i> <span>Data Laptop</span></a></li>
						<li><a href="pages/editprofile.php?id=<?php echo $user['username']?>"><i class="lnr lnr-lnr-home"></i> <span>Profile</span></a></li>	
						<li><a href="../proses_logout.php" class=""><i class="lnr lnr-home"></i> <span>Logout</span></a></li>

						<!-- <li><a href="tables.html" class=""><i class="lnr lnr-dice"></i> <span>Tables</span></a></li> -->
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<div class="col-md-12">
					<div class="panel">
							<div class="panel-heading">
								<h1 class="panel-title" style="font-size:25px;"><center>Data Laptop</center></h1>
							</div>
							<div class="panel-body">
							
							<div style="text-align:right;">
							
							</div>
								
									<table class="table table-bordered">
											<thead>
												<tr>
													<th><center>No</center></th>
																<th><center>ID</center></th>
																<th><center>Nama </center></th>
																<th><center>Jenis</center></th>																											
																<th><center>Tipe</center></th>
																<th><center>Harga</center></th>
																<th><center>Layar</center></th>
																<th><center>Penyimpanan</center></th>
																<th><center>RAM</center></th>
																<th><center>Prosesor</center></th>
																<th><center>Grafis</center></th>
																
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
															<td><center><?php echo $user['layar_inch']?></center></td>
															<td><center><?php echo $user['penyimpanan_GB']?></center></td>
															<td><center><?php echo $user['ram_GB']?></center></td>
															<td><center><?php echo $user['jenis_processor']?></center></td>
															<td><center><?php echo $user['grafis_jenis']?></center></td>																																																												
														
													</tr>
													<?php
													$no++;}
													?>
												
											</tbody>
										</table>
							</div>
						</div>
						<!-- END BORDERED TABLE -->
					</div>
					
				</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2017 <a href="https://www.themeineed.com" target="_blank">Theme I Need</a>. All Rights Reserved.</p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/scripts/klorofil-common.js"></script>
</body>

</html>
<?php }else{
   echo"<script>alert('anda harus login')</script>";
   echo"<script>location.href='../login.php'</script>";
} ?>