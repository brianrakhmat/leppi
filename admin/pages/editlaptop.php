<!-- Modal TAMBAH -->
<?php 
session_start();
include('../../koneksi.php');
?>

<!doctype html>
<html lang="en">

<head>
	<title>Leppi - Admin | Sistem Pendukung Keputusan Laptop</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="../assets/vendor/linearicons/style.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="../assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="../assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
	<link rel="icon" type="../image/png" sizes="96x96" href="../assets/img/favicon.png">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="index.html"><img src="../assets/img/4.png"  width="120px" alt="Klorofil Logo" class="img-responsive logo"></a>
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
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
				<ul class="nav">
						<li><a href="../index.php" ><i class="lnr lnr-home"></i> <span>Beranda</span></a></li>
						<li><a href="pages/DataLaptop.php" class="active"<i class="lnr lnr-file-empty"></i> <span>Data Laptop</span></a></li>	
						<li><a href="../../proses_logout.php" class=""><i class="lnr lnr-home"></i> <span>Logout</span></a></li>

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
						<!-- BORDERED TABLE -->
						<div class="panel">
							<div class="panel-heading">
								<h1 class="panel-title" style="font-size:25px;"><center>Edit Data Laptop</center></h1>
							</div>
	<?php
    $kode=$_GET['id'];
    $query=mysql_query("SELECT * FROM datalaptop WHERE id_laptop='$kode'");
    $data=mysql_fetch_array($query);
    ?>
<div class="panel-body">
	<form method="post" name="editlaptop" action="proses_edit.php">
		<input hidden name="kd" value="<?php echo $kode?>"/>
			<div class="form-group row" >
				<label for="" class="col-sm-3 col-form-label">ID Laptop</label>
				<div class="col-sm-9">
					<input type="text" name="id_laptop" id="kode" class="form-control" placeholder="ID Laptop" value="<?php echo $data['id_laptop'] ?>" disabled>
				</div>
			</div>

			<div class="form-group row" >
				<label for="" class="col-sm-3 col-form-label">Nama Laptop</label>
				<div class="col-sm-9">
					<input type="text" name="nama_laptop" id="nama" class="form-control" placeholder="Nama Laptop" value="<?php echo $data['nama_laptop'] ?>">
				</div>
			</div>

			<div class="form-group row" >
					<label for="" class="col-sm-3 col-form-label">Gambar Laptop</label>
					<div class="col-sm-9">
						<input type="text" name="gambar_laptop" id="gambar" class="form-control" placeholder="URL Gambar Laptop" value="<?php echo $data['gambar_laptop'] ?>">
					</div>
			</div>

			<div class="form-group row" >
				<label for="" class="col-sm-3 col-form-label">Jenis Laptop</label>
				<div class="col-sm-9">
					<!-- <input type="text" name="jenis_laptop" id="jenislepi" class="form-control" placeholder="Jenis Laptop" value=""> -->
					<select name='jenis_laptop' id="jenislepi" class="form-control" data-placeholder="Jenis Laptop">
						<option value="<?php echo $data['jenis_laptop'] ?>" selected><?php echo $data['jenis_laptop'] ?> - Dipilih</option> 
						<option value="laptop">Laptop</option>
						<option value="notebook">Notebook</option>
						<option value="Ultrabook">Ultrabook</option>
					</select>
				</div>
			</div>

			<div class="form-group row" >
				<label for="" class="col-sm-3 col-form-label">Tipe Laptop</label>
				<div class="col-sm-9">
					<input type="text" name="tipe_laptop" id="tipe" class="form-control" placeholder="Tipe Laptop" value="<?php echo $data['tipe_laptop'] ?>">
				</div>
			</div>
			
			<!-- Kriteria Harga Start -->
			<div class="form-group row" >
				<label for="" class="col-sm-3 col-form-label">Kriteria Harga</label>
				<div class="col-sm-3">
					<!-- <input type="text" name="jenis_laptop" id="jenislepi" class="form-control" placeholder="Jenis Laptop" value=""> -->
					<select id="kriteria_harga_nilai" name="harga" class="form-control">
							<option value="<?php echo $data['harga'] ?>" selected><?php echo $data['harga'] ?></option>
							<?php
							$query=mysql_query("select * from kriteria_harga");
							$no=1;
							while($data=mysql_fetch_array($query)){
								?>
							
							<option value="<?php echo $data['nilai'] ?>"><?php echo $data['nilai']?>-<?php echo $data['nama_range']?></option>
							<?php
							$no++;}
							?>	
					</select>
				</div>

				<div class="col-sm-3">
					<label for="" class="col-sm-3 col-form-label">Bobot Harga</label>
					<div class="col-sm-9">
						<select id="kriteria_harga_bobot" name="harga_B" class="form-control">
								
								<option value="">Pilih</option>
								
								<?php
								$query=mysql_query("SELECT * FROM kriteria_harga_bobot INNER JOIN kriteria_harga ON kriteria_harga_bobot.nilai_kriteria_harga=kriteria_harga.nilai"); 
								$no=1;
								while ($data=mysql_fetch_array($query)){
								?>


								<option id="kriteria_harga_bobot" class="<?php echo $data['nilai_kriteria_harga']; ?>" value="<?php echo $data['bobot_kriteria_harga'];?>"><?php echo $data['bobot_kriteria_harga']; ?></option>
								<?php 
								$no++;}
								?>
						</select>
					</div>
				</div>

				<?php
				$kode=$_GET['id'];
				$query=mysql_query("SELECT * FROM datalaptop WHERE id_laptop='$kode'");
				$data=mysql_fetch_array($query);
				?>
				<div class="col-sm-3">
						<label for="" class="col-sm-3 col-form-label">Harga Laptop</label>
						<div class="col-sm-9">
							<input type="text" name="harga_rupiah" id="hargarupiah" class="form-control" placeholder="Harga (Rp)" value="<?php echo $data['harga_rupiah'] ?>">
						</div>
					</div>		
			</div>
			<!-- Kriteria Harga End -->

			<!-- Kriteria Layar Start -->
			<div class="form-group row" >
					<label for="" class="col-sm-3 col-form-label">Kriteria Layar</label>
					<div class="col-sm-3">
						<select id="kriteria_layar_nilai" name="layar" class="form-control">
								<option value="<?php echo $data['layar'] ?>" selected><?php echo $data['layar'] ?></option>
								<?php
								$query=mysql_query("select * from kriteria_layar");
								$no=1;
								while($data=mysql_fetch_array($query)){
									?>
								
								<option value="<?php echo $data['nilai'] ?>"><?php echo $data['nilai']?>-<?php echo $data['nama_range']?></option>
								<?php
								$no++;}
								?>	
						</select>
					</div>
	
					<div class="col-sm-3">
							<label for="" class="col-sm-3 col-form-label">Bobot Layar</label>
							<div class="col-sm-9">
									<select id="kriteria_layar_bobot" name="layar_B" class="form-control">
											<option value="">Pilih</option>
											<?php
											$query=mysql_query("SELECT * FROM kriteria_layar_bobot INNER JOIN kriteria_layar ON kriteria_layar_bobot.nilai_kriteria_biaya=kriteria_layar.nilai"); 
											$no=1;
											while ($data=mysql_fetch_array($query)){
											?>


											<option id="kriteria_layar_bobot" class="<?php echo $data['nilai_kriteria_biaya']; ?>"value="<?php echo $data['bobot_kriteria_biaya']?>"><?php echo $data['bobot_kriteria_biaya']?></option>
											<?php 
											$no++;}
											?>	
										</select>
							</div>
					</div>
					
	
					<?php
					$kode=$_GET['id'];
					$query=mysql_query("SELECT * FROM datalaptop WHERE id_laptop='$kode'");
					$data=mysql_fetch_array($query);
					?>
					<div class="col-sm-3">
							<label for="" class="col-sm-3 col-form-label">Layar Laptop</label>
							<div class="col-sm-9">
								<input type="text" name="layar_inch" id="layarinch" class="form-control" placeholder="Layar (inch)" value="<?php echo $data['layar_inch'] ?>">
							</div>
						</div>		
				</div>
				<!-- Kriteria Layar End -->

				<!-- Kriteria penyimpanan Start -->
			<div class="form-group row" >
					<label for="" class="col-sm-3 col-form-label">Kriteria Penyimpanan</label>
					<div class="col-sm-3">
						<select id="kriteria_penyimpanan_nilai" name="penyimpanan" class="form-control">
								<option value="<?php echo $data['penyimpanan'] ?>" selected><?php echo $data['penyimpanan'] ?></option>
								<?php
								$query=mysql_query("select * from kriteria_penyimpanan");
								$no=1;
								while($data=mysql_fetch_array($query)){
									?>
								
								<option value="<?php echo $data['nilai'] ?>"><?php echo $data['nilai']?>-<?php echo $data['nama_range']?></option>
								<?php
								$no++;}
								?>	
						</select>
					</div>
	
					<div class="col-sm-3">
							<label for="" class="col-sm-3 col-form-label">Bobot penyimpanan</label>
							<div class="col-sm-9">
									<select id="kriteria_penyimpanan_bobot" name="penyimpanan_B" class="form-control">
											<option value="">Pilih</option>
											<?php
												$query=mysql_query("SELECT * FROM kriteria_penyimpanan_bobot INNER JOIN kriteria_penyimpanan ON kriteria_penyimpanan_bobot.nilai_kriteria_penyimpanan=kriteria_penyimpanan.nilai"); 
												$no=1;
												while ($data=mysql_fetch_array($query)){
												?>


												<option id="kriteria_penyimpanan_bobot" class="<?php echo $data['nilai_kriteria_penyimpanan']; ?>"value="<?php echo $data['bobot_kriteria_penyimpanan']?>"><?php echo $data['bobot_kriteria_penyimpanan']?></option>
												<?php 
												$no++;}
												?>	
										</select>
							</div>
					</div>
					
	
					<?php
					$kode=$_GET['id'];
					$query=mysql_query("SELECT * FROM datalaptop WHERE id_laptop='$kode'");
					$data=mysql_fetch_array($query);
					?>
					<div class="col-sm-3">
							<label for="" class="col-sm-3 col-form-label">Penyimpanan Laptop</label>
							<div class="col-sm-9">
								<input type="text" name="penyimpanan_GB" id="penyimpanangb" class="form-control" placeholder="Penyimpanan (GB)" value="<?php echo $data['penyimpanan_GB'] ?>">
							</div>
						</div>		
				</div>
				<!-- Kriteria penyimpanan End -->

				<!-- Kriteria ram Start -->
				<div class="form-group row" >
					<label for="" class="col-sm-3 col-form-label">Kriteria Ram</label>
					<div class="col-sm-3">
						<select id="kriteria_ram_nilai" name="ram" class="form-control">
							<option value="<?php echo $data['ram'] ?>" selected><?php echo $data['ram'] ?></option>
							<?php
							$query=mysql_query("select * from kriteria_ram");
							$no=1;
							while($data=mysql_fetch_array($query)){
								?>
							
							<option value="<?php echo $data['nilai'] ?>"><?php echo $data['nilai']?>-<?php echo $data['nama_range']?></option>
							<?php
							$no++;}
							?>	
						</select>
					</div>

					<div class="col-sm-3">
						<label for="" class="col-sm-3 col-form-label">Bobot Ram</label>
						<div class="col-sm-9">
							<select id="kriteria_ram_bobot" name="ram_B" class="form-control">
								<option value="">Pilih</option>
								<?php
								$query=mysql_query("SELECT * FROM kriteria_ram_bobot INNER JOIN kriteria_ram ON kriteria_ram_bobot.nilai_kriteria_ram=kriteria_ram.nilai"); 
								$no=1;
								while ($data=mysql_fetch_array($query)){
								?>


								<option id="kriteria_ram_bobot" class="<?php echo $data['nilai_kriteria_ram']; ?>"value="<?php echo $data['bobot_kriteria_biaya']?>"><?php echo $data['bobot_kriteria_biaya']?></option>
								<?php 
								$no++;}
								?>	
							</select>
						</div>
					</div>
					

					<?php
					$kode=$_GET['id'];
					$query=mysql_query("SELECT * FROM datalaptop WHERE id_laptop='$kode'");
					$data=mysql_fetch_array($query);
					?>
					<div class="col-sm-3">
						<label for="" class="col-sm-3 col-form-label">Ram Laptop</label>
						<div class="col-sm-9">
							<input type="text" name="ram_GB" id="ramgb" class="form-control" placeholder="Ram (GB)" value="<?php echo $data['ram_GB'] ?>">
						</div>
					</div>		
				</div>
				<!-- Kriteria ram End -->

				<!-- Kriteria processor Start -->
				<div class="form-group row" >
					<label for="" class="col-sm-3 col-form-label">Kriteria Processor</label>
					<div class="col-sm-3">
						<select id="kriteria_prosesor_nilai" name="processor" class="form-control">
							<option value="<?php echo $data['processor'] ?>" selected><?php echo $data['processor'] ?></option>
							<?php
							$query=mysql_query("select * from kriteria_prosesor");
							$no=1;
							while($data=mysql_fetch_array($query)){
								?>
							
							<option value="<?php echo $data['nilai'] ?>"><?php echo $data['nilai']?>-<?php echo $data['nama_range']?></option>
							<?php
							$no++;}
							?>	
						</select>
					</div>

					<div class="col-sm-3">
						<label for="" class="col-sm-3 col-form-label">Bobot Processor</label>
						<div class="col-sm-9">
							<select id="kriteria_prosesor_bobot" name="processor_B" class="form-control">
								<option value="">Pilih</option>
								<?php
								$query=mysql_query("SELECT * FROM kriteria_prosesor_bobot INNER JOIN kriteria_prosesor ON kriteria_prosesor_bobot.nilai_kriteria_prosesor=kriteria_prosesor.nilai"); 
								$no=1;
								while ($data=mysql_fetch_array($query)){
								?>
								<option id="kriteria_prosesor_bobot" class="<?php echo $data['nilai_kriteria_prosesor']; ?>"value="<?php echo $data['bobot_kriteria_biaya']?>"><?php echo $data['bobot_kriteria_biaya']?></option>
								<?php 
								$no++;}
								?>	
							</select>
						</div>
					</div>
					

					<?php
					$kode=$_GET['id'];
					$query=mysql_query("SELECT * FROM datalaptop WHERE id_laptop='$kode'");
					$data=mysql_fetch_array($query);
					?>
					<div class="col-sm-3">
						<label for="" class="col-sm-3 col-form-label">Processor Laptop</label>
						<div class="col-sm-9">
							<input type="text" name="jenis_processor" id="jenisprocessor" class="form-control" placeholder="Jenis Processor" value="<?php echo $data['jenis_processor'] ?>">
						</div>
					</div>		
				</div>
				<!-- Kriteria processor End -->

				<!-- Kriteria grafis Start -->
				<div class="form-group row" >
					<label for="" class="col-sm-3 col-form-label">Kriteria Grafis</label>
					<div class="col-sm-3">
						<select id="kriteria_grafis_nilai" name="grafis" class="form-control">
							<option value="<?php echo $data['grafis'] ?>" selected><?php echo $data['grafis'] ?></option>
							<?php
							$query=mysql_query("select * from kriteria_grafis");
							$no=1;
							while($data=mysql_fetch_array($query)){
								?>
							
							<option value="<?php echo $data['nilai'] ?>"><?php echo $data['nilai']?>-<?php echo $data['nama_range']?></option>
							<?php
							$no++;}
							?>	
						</select>
					</div>

					<div class="col-sm-3">
							<label for="" class="col-sm-3 col-form-label">Bobot Grafis</label>
							<div class="col-sm-9">
								<select id="kriteria_grafis_bobot" name="grafis_B" class="form-control">
									<option value="">Pilih</option>
									<?php
									$query=mysql_query("SELECT * FROM kriteria_grafis_bobot INNER JOIN kriteria_grafis ON kriteria_grafis_bobot.nilai_kriteria_grafis=kriteria_grafis.nilai"); 
									$no=1;
									while ($data=mysql_fetch_array($query)){
									?>
									<option id="kriteria_prosesor_bobot" class="<?php echo $data['nilai_kriteria_grafis']; ?>"value="<?php echo $data['bobot_kriteria_biaya']?>"><?php echo $data['bobot_kriteria_biaya']?></option>
									<?php 
									$no++;}
									?>	
								</select>
							</div>
					</div>
					

					<?php
					$kode=$_GET['id'];
					$query=mysql_query("SELECT * FROM datalaptop WHERE id_laptop='$kode'");
					$data=mysql_fetch_array($query);
					?>
					<div class="col-sm-3">
						<label for="" class="col-sm-3 col-form-label">Grafis Laptop</label>
						<div class="col-sm-9">
							<input type="text" name="grafis_jenis" id="grafisjenis" class="form-control" placeholder="Jenis Grafis" value="<?php echo $data['grafis_jenis'] ?>">
						</div>
					</div>		
				</div>
				<!-- Kriteria grafis End -->	


		<button type="submit" class="btn btn-primary pull-right" >Simpan Perubahan</button>
	</form>
		
</div>
						</div>
					</div>
				</div>	
			</div>
		</div>
						<!-- END BORDERED TABLE -->
	
	<script src="../assets/vendor/jquery/jquery.min.js"></script>
	<script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="../assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="../assets/scripts/klorofil-common.js"></script>
	<script src="../assets/js/jquery.chained.min.js"></script>
	<script>
           $("#kriteria_harga_bobot").chained("#kriteria_harga_nilai");
		   $("#kriteria_layar_bobot").chained("#kriteria_layar_nilai");
		   $("#kriteria_penyimpanan_bobot").chained("#kriteria_penyimpanan_nilai");
		   $("#kriteria_ram_bobot").chained("#kriteria_ram_nilai");
		   $("#kriteria_prosesor_bobot").chained("#kriteria_prosesor_nilai");
		   $("#kriteria_grafis_bobot").chained("#kriteria_grafis_nilai");
	</script>
	</body>

</html>