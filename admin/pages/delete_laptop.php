<?php
	session_start();
	include "../../koneksi.php";

	$kode=$_GET['id'];
	$query=mysql_query("DELETE FROM datalaptop WHERE id_laptop='$kode'");
	if ($query) {
		echo "<script>alert('Data Laptop Berhasil dihapus');</script>";
		echo "<script>location.href='DataLaptop.php'</script>";
	}else{
		echo "<script>alert('Data Laptop Gagal dihapus, silakan coba lagi!');</script>";
		echo "<script>location.href='DataLaptop.php'</script>";
	}
?>