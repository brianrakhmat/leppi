<?php 
session_start();
include('../../koneksi.php');
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
	<link rel="icon" type="image/png" sizes="96x96" href="../assets/img/favicon.png">
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
						<li><a href="../pages/DataLaptop.php" class="active"<i class="lnr lnr-file-empty"></i> <span>Data Laptop</span></a></li>	
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
								<h1 class="panel-title" style="font-size:25px;"><center>Data Laptop</center></h1>
							</div>
							<div class="panel-body">
							
							<div style="text-align:right;">
							<button type="button" class="btn btn-success" data-toggle="modal" data-target="#ModalTambah"><i class="lnr lnr-plus-circle"> Tambah</i></button>
								<br>
								<br>
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
																<th><center>Aksi</center></th>
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
															
															<td>
																<center>
																<a  class="btn btn-warning" href="editlaptop.php?id=<?php echo $user['id_laptop']?>" ><i class="lnr lnr-pencil"></i></a>
																<a class="btn btn-danger" href="delete_laptop.php?id=<?php echo $user['id_laptop']?>" 
														onclick="return confirm('Apakah anda yakin akan menghapus data berikut ini?');"><i class="lnr lnr-trash"></i></a>
															
																</center>
														
															</td>
													</tr>
													<?php
													$no++;}
													?>
												
											</tbody>
										</table>
							</div>
						</div>
						<!-- END BORDERED TABLE -->

					<!-- Modal TAMBAH -->
						<div class="modal fade" id="ModalTambah" role="dialog">
								<div class="modal-dialog">	
								
								<div class="modal-content">
									<div class="modal-header">
									<button type="button" href="DataLaptop.php" class="close">&times;</button>
									<h4 class="modal-title">Tambah Data Laptop</h4>
									</div>
									<form method="post" name="tambah_laptop" action="proses_tambah.php">
									
									<div class="modal-body">
										<div class="form-group row">
											<label for="" class="col-sm-3 col-form-label">ID Laptop</label>
											<div class="col-sm-9">
												<?php function id_laptop($limit)
												{
													return substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, $limit);
												} 
												?>
											<input type="text" class="form-control" name="id_laptop" placeholder="ID Laptop Anda" value="<?php echo id_laptop(3); ?>">
											</div>
										</div>
										<div class="form-group row">
											<label for="" class="col-sm-3 col-form-label">Nama Laptop</label>
											<div class="col-sm-9">
											<input type="text" class="form-control" name="nama_laptop" placeholder="Nama Laptop">
											</div>
										</div>
										<div class="form-group row">
											<label for="" class="col-sm-3 col-form-label">Jenis Laptop</label>
											<div class="col-sm-9">
												<select class="form-control" name="jenis_laptop">
													<option value="laptop">Laptop</option>
													<option value="notepad">Notepad</option>
												</select>
											</div>
										</div>
										<div class="form-group row">
											<label for="" class="col-sm-3 col-form-label">Tipe Laptop</label>
											<div class="col-sm-9">
											<input type="text" class="form-control" name="tipe_laptop" placeholder="Tipe Laptop">
											</div>
										</div>
										<div class="form-group row">
											<label for="" class="col-sm-3 col-form-label">Harga Laptop</label>
											<div class="col-sm-9">
											<input type="text" class="form-control" name="harga_rupiah" placeholder="Harga">
											</div>
										</div>
										<div class="form-group row">
											<label for="" class="col-sm-3 col-form-label">Kriteria Harga</label>
											<div class="col-sm-9">
											<select id="kriteria_harga_nilai" name="harga" class="form-control">
												<option value="-">Masukan Nilai Kriteria</option>
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
										</div>
										<div class="form-group row">
											<label for="" class="col-sm-3 col-form-label">Bobot Harga</label>
											<div class="col-sm-9">
												<select id="kriteria_harga_bobot" name="harga_B" class="form-control">
												<option value="-">Masukan bobot kriteria</option>
												<?php
												$query=mysql_query("SELECT * FROM kriteria_harga_bobot INNER JOIN kriteria_harga ON kriteria_harga_bobot.nilai_kriteria_harga=kriteria_harga.nilai"); 
												$no=1;
												while ($data=mysql_fetch_array($query)){
												?>


												<option id="kriteria_harga_bobot" class="<?php echo $data['nilai_kriteria_harga']; ?>"value="<?php echo $data['bobot_kriteria_harga']?>"><?php echo $data['bobot_kriteria_harga']?></option>
												<?php 
												$no++;}
												?>	
											</select>
											</div>
										</div>
										<div class="form-group row">
											<label for="" class="col-sm-3 col-form-label">Lebar Layar</label>
											<div class="col-sm-9">
											<input type="text" class="form-control" name="layar_inch" placeholder="Lebar Layar">
											</div>
										</div>

										<div class="form-group row">
											<label for="" class="col-sm-3 col-form-label">Kriteria Layar</label>
											<div class="col-sm-9">
											<select id="kriteria_layar_nilai" name="layar" class="form-control">
												<option value="-">Masukan Nilai Kriteria</option>
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
										</div>

										<div class="form-group row">
											<label for="" class="col-sm-3 col-form-label">Bobot Layar</label>
											<div class="col-sm-9">
												<select id="kriteria_layar_bobot" name="layar_B" class="form-control">
												<option value="-">Masukan bobot kriteria</option>
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

										<!-- penyimpanan -->
										<div class="form-group row">
											<label for="" class="col-sm-3 col-form-label">Kapasitas Penyimpanan</label>
											<div class="col-sm-9">
											<input type="text" class="form-control" name="penyimpanan_GB" placeholder="Kapasitas Penyimpanan">
											</div>
										</div>

										<div class="form-group row">
											<label for="" class="col-sm-3 col-form-label">Kriteria Penyimpanan</label>
											<div class="col-sm-9">
											<select id="kriteria_penyimpanan_nilai" name="penyimpanan" class="form-control">
												<option value="-">Masukan Nilai Kriteria</option>
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
										</div>

										<div class="form-group row">
											<label for="" class="col-sm-3 col-form-label">Bobot penyimpanan</label>
											<div class="col-sm-9">
												<select id="kriteria_penyimpanan_bobot" name="penyimpanan_B" class="form-control">
												<option value="-">Masukan bobot kriteria</option>
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

										<!-- end penyimpanan -->

										<!-- RAM -->
										<div class="form-group row">
											<label for="" class="col-sm-3 col-form-label">RAM</label>
											<div class="col-sm-9">
											<input type="text" class="form-control" name="ram_GB" placeholder="RAM">
											</div>
										</div>

										<div class="form-group row">
											<label for="" class="col-sm-3 col-form-label">Kriteria RAM</label>
											<div class="col-sm-9">
											<select id="kriteria_ram_nilai" name="ram" class="form-control">
												<option value="-">Masukan Nilai Kriteria</option>
												<?php
												$query=mysql_query("SELECT * from kriteria_ram");
												$no=1;
												while($data=mysql_fetch_array($query)){
													?>
												
												<option value="<?php echo $data['nilai'] ?>"><?php echo $data['nilai']?>-<?php echo $data['nama_range']?></option>
												<?php
												$no++;}
												?>										
											</select>
											</div>
										</div>

										<div class="form-group row">
											<label for="" class="col-sm-3 col-form-label">Bobot RAM</label>
											<div class="col-sm-9">
												<select id="kriteria_ram_bobot" name="ram_B" class="form-control">
												<option value="-">Masukan bobot kriteria</option>
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

										<!-- END RAM -->
										
										<!-- PROSESSOR -->
										<div class="form-group row">
											<label for="" class="col-sm-3 col-form-label">Processor</label>
											<div class="col-sm-9">
											<input type="text" class="form-control" name="jenis_processor" placeholder="Processor">
											</div>
										</div>

										<div class="form-group row">
											<label for="" class="col-sm-3 col-form-label">Kriteria Processor</label>
											<div class="col-sm-9">
											<select id="kriteria_prosesor_nilai" name="processor" class="form-control">
												<option value="-">Masukan Nilai Kriteria</option>
												<?php
												$query=mysql_query("SELECT * from kriteria_prosesor");
												$no=1;
												while($data=mysql_fetch_array($query)){
													?>
												
												<option value="<?php echo $data['nilai'] ?>"><?php echo $data['nilai']?>-<?php echo $data['nama_range']?></option>
												<?php
												$no++;}
												?>										
											</select>
											</div>
										</div>

										<div class="form-group row">
											<label for="" class="col-sm-3 col-form-label">Bobot Processor</label>
											<div class="col-sm-9">
												<select id="kriteria_prosesor_bobot" name="processor_B" class="form-control">
												<option value="-">Masukan bobot kriteria</option>
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

										<!-- END PROSESSOR -->

										<!-- GRAVIS -->

										<div class="form-group row">
											<label for="" class="col-sm-3 col-form-label">Grafis</label>
											<div class="col-sm-9">
											<input type="text" class="form-control" name="grafis_jenis" placeholder="Processor">
											</div>
										</div>

										<div class="form-group row">
											<label for="" class="col-sm-3 col-form-label">Kriteria Gravis</label>
											<div class="col-sm-9">
											<select id="kriteria_grafis_nilai" name="grafis" class="form-control">
												<option value="-">Masukan Nilai Kriteria</option>
												<?php
												$query=mysql_query("SELECT * from kriteria_grafis");
												$no=1;
												while($data=mysql_fetch_array($query)){
													?>
												
												<option value="<?php echo $data['nilai'] ?>"><?php echo $data['nilai']?>-<?php echo $data['nama_range']?></option>
												<?php
												$no++;}
												?>										
											</select>
											</div>
										</div>

										<div class="form-group row">
											<label for="" class="col-sm-3 col-form-label">Bobot Grafis</label>
											<div class="col-sm-9">
												<select id="kriteria_grafis_bobot" name="grafis_B" class="form-control">
												<option value="-">Masukan bobot kriteria</option>
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

										<!--END GRAVIS -->

										</div>

									<div class="modal-footer">
									<button type="submit" class="btn btn-primary" >Simpan</button>
									</div>
								</form>
								
								</div>
								<!-- END MODAL TAMBAH -->	
							</div>
						

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
<?php }else{
   echo"<script>alert('anda harus login')</script>";
   echo"<script>location.href='../../index.php'</script>";
} ?>