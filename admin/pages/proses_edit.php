<?php
	session_start();
	include "../../koneksi.php";

	$kd=$_POST['kd'];
	$nama=$_POST['nama_laptop'];
	$gambar=$_POST['gambar_laptop'];
	$jenislepi=$_POST['jenis_laptop'];
	$tipe=$_POST['tipe_laptop'];

	$harga=$_POST['harga'];
	$harga_B=$_POST['harga_B'];
	$hargarupiah=$_POST['harga_rupiah'];

	$layar=$_POST['layar'];
	$layar_B=$_POST['layar_B'];
	$layarinch=$_POST['layar_inch'];
	
	$penyimpanan=$_POST['penyimpanan'];
	$penyimpanan_B=$_POST['penyimpanan_B'];
	$penyimpanangb=$_POST['penyimpanan_GB'];

	$ram=$_POST['ram'];
	$ram_B=$_POST['ram_B'];
	$ramgb=$_POST['ram_GB'];

	$processor=$_POST['processor'];
	$processor_B=$_POST['processor_B'];
	$jenisprocessor=$_POST['jenis_processor'];

	$grafis=$_POST['grafis'];
	$grafis_B=$_POST['grafis_B'];
	$grafisjenis=$_POST['grafis_jenis'];


	$query1=mysql_query("UPDATE datalaptop SET nama_laptop='$nama', gambar_laptop='$gambar', jenis_laptop='$jenislepi', tipe_laptop='$tipe', 
	harga='$harga', harga_B='$harga_B', harga_rupiah='$hargarupiah', layar='$layar', layar_B='$layar_B', layar_inch='$layarinch', processor='$processor', 
	ram='$ram', ram_B='$ram_B', ram_GB='$ramgb', penyimpanan='$penyimpanan', penyimpanan_B='$penyimpanan_B', penyimpanan_GB='$penyimpanangb', processor_B='$processor_B', jenis_processor='$jenisprocessor',
	grafis='$grafis', grafis_B='$grafis_B', grafis_jenis='$grafisjenis' WHERE id_laptop='$kd'");
	if ($query1) {
		echo "<script>alert('Berhasil diubah');</script>";
		
		echo "<script>location.href='DataLaptop.php'</script>";
	}else{
		echo "<script>alert('Data gagal diubah, silakan coba lagi!');</script>";
		echo "<script>location.href='DataLaptop.php'</script>";
    }
?>