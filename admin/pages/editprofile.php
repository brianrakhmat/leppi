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
$username=$_GET['id'];
$query=mysql_query("SELECT * FROM user WHERE username='$username'");
$data=mysql_fetch_array($query);
?>
<div class="panel-body">
	<form method="post" name="formedit" action="edit_profile.php" enctype="multipart/form-data">
		<input type="hidden" name="no" value="<?php echo $data['no']?>"/>
			<div class="form-group row" >
				<label for="" class="col-sm-3 col-form-label">ID Anggota</label>
				<div class="col-sm-9">
					<input type="text" name="id_anggota" id="userid" class="form-control" placeholder="ID Anggota" value="<?php echo $data['id_anggota'] ?>">
				</div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label">User Name</label><div class="col-sm-9">
                <input type="text" name="username" id="username" class="form-control" placeholder="User Name" value="<?php echo $data['username']?>" /></div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label">Nama Lengkap</label><div class="col-sm-9">
                <input type="text" name="nama_lengkap" id="name" class="form-control" placeholder="Nama Lengkap" value="<?php echo $data['nama_lengkap']?>" /></div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label">Password</label><div class="col-sm-9">
                <input type="password" name="password" id="pass" class="form-control" placeholder="Password" value="<?php echo $data['password']?>" /></div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label">Alamat</label><div class="col-sm-9">
                <textarea name="alamat" id="address" class="form-control" rows="3" placeholder="Alamat"><?php echo $data['alamat']?></textarea>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label">No Telp</label><div class="col-sm-9">
                <input type="text" name="no_hp" id="no" class="form-control" placeholder="No Hp/ Telp" value="<?php echo $data['no_hp']?>" /></div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label">Jabatan</label><div class="col-sm-9">
                <input type="text" name="jabatan" id="no" class="form-control" placeholder="Jabatan" value="<?php echo $data['jabatan']?>" /></div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label">Jenis Kelamin</label><div class="col-sm-9">
                <select name='jenis_kel' class="form-control" data-placeholder="Jenis Kelamin">
                    <option value=""></option> 
                    <option value="Laki-Laki" <?php if ('laki-laki'==$data['jenis_kel']){?> selected<?php }?>>Laki-Laki</option>
                    <option value="Perempuan" <?php if ('perempuan'==$data['jenis_kel']){?> selected <?php } ?>>Perempuan</option>
                </select>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label">Tanggal Lahir</label><div class="col-sm-9">
                <input type="date" name="tgl_lahir" id="tanggallahir" class="form-control" placeholder="Tanggal Lahir" value="<?php echo $data['tgl_lahir']?>" /></div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label">Tempat Lahir</label><div class="col-sm-9">
                <input type="text" name="tempat_lahir" id="no" class="form-control" placeholder="Tempat Lahir" value="<?php echo $data['tempat_lahir']?>" /></div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label">Email</label><div class="col-sm-9">
                <input type="text" name="email" id="no" class="form-control" placeholder="Email" value="<?php echo $data['email']?>" /></div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label">Foto</label><div class="col-sm-9">
                <input type="file" name="file" class="form-control">
            </div>


				


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