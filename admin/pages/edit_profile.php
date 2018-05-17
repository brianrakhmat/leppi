<?php
	include ('../../koneksi.php');

	$user=$_POST['no'];
	$nama=$_POST['nama_lengkap'];
	$jabatan=$_POST['jabatan'];
	$alamat=$_POST['alamat'];
	$nohp=$_POST['no_hp'];
	$jeniskel=$_POST['jenis_kel'];
	$tgl_lahir=$_POST['tgl_lahir'];
	$tempat_lahir=$_POST['tempat_lahir'];
	$email=$_POST['email'];
	
	$username=$_POST['username'];
	$password=$_POST['password'];
	$id_anggota=$_POST['id_anggota'];
	$foto = $_FILES['file']['name'];
	$namafolder	= "img/";

if (!empty($foto)) {
	$jenis_gambar 	= $_FILES['file']['type'];
	$ukuran_file 	= $_FILES['file']['size'];
	
	if ($jenis_gambar == "image/jpeg" || $jenis_gambar == "image/jpg" || $jenis_gambar == "image/gif" || $jenis_gambar == "image/png") {
		if ($ukuran_file <= 1000000) {
			$gambar = $namafolder . basename($_FILES['file']['name']);
				if (move_uploaded_file($_FILES['file']['tmp_name'], $gambar)) {
					$query=mysql_query("UPDATE user SET nama_lengkap='$nama', jabatan='$jabatan', alamat='$alamat', no_hp='$nohp', jenis_kel='$jeniskel', 
						tgl_lahir='$tgl_lahir', tempat_lahir='$tempat_lahir', email='$email', username='$username', password='$password',
						id_anggota='$id_anggota', foto='$gambar' WHERE no='$user'");
					if ($query) {
							echo "<script>alert('Data Berhasil diubah');</script>";
							echo "<script>location.href='index.php'</script>";
						}else{
							echo "<script>alert('Data Gagal disimpan, Silahkan Coba Lagi!');</script>";
							echo "<script>location.href='index.php'</script>";
						}
				}
				else{
					echo "<script>alert('Gambar gagal di upload');</script>";
					echo "<script>location.replace('index.php')</script>";
				}
				
			}
			else{
			echo "<script>alert('Maaf, Ukuran gambar yang diupload tidak boleh lebih dari 1MB');</script>";
			echo "<script>location.replace('index.php')</script>";
		}	
		}
		else{
		echo "<script>alert('Jenis gambar harus dengan format .jpg .gif .png');</script>";
		echo "<script>location.replace('index.php')</script>";
	}
	}
	else{
		$query=mysql_query("UPDATE user SET nama_lengkap='$nama', jabatan='$jabatan', alamat='$alamat', no_hp='$nohp', jenis_kel='$jeniskel', 
						tgl_lahir='$tgl_lahir', tempat_lahir='$tempat_lahir', email='$email', username='$username', password='$password',
						id_anggota='$id_anggota' WHERE no='$user'");
	if ($query) {
		echo "<script>alert('Data Berhasil diubah');</script>";
		echo "<script>location.href='../index.php'</script>";
	}else{
		echo "<script>alert('Data Gagal disimpan, Silahkan Coba Lagi!');</script>";
		echo "<script>location.href='../index.php'</script>";
	}
	
	}
	
	
?>
