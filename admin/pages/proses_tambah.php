<?php
	session_start();
	include "koneksi.php";
	$id_laptop=$_POST['id_laptop'];
	$nama_laptop=$_POST['nama_laptop'];
    $jenis_laptop=$_POST['jenis_laptop'];
	$tipe_laptop=$_POST['tipe_laptop'];
	$harga_rupiah=$_POST['harga_rupiah'];
    $harga=$_POST['harga'];
	$harga_B=$_POST['harga_B']; 
	$layar_inch=$_POST['layar_inch'];
	$layar=$_POST['layar'];
	$layar_B=$_POST['layar_B'];
	$penyimpanan_GB=$_POST['penyimpanan_GB'];
	$penyimpanan=$_POST['penyimpanan'];
	$penyimpanan_B=$_POST['penyimpanan_B'];
	$ram_GB=$_POST['ram_GB'];
	$ram=$_POST['ram'];
	$ram_B=$_POST['ram_B'];
	$jenis_processor=$_POST['jenis_processor'];
	$processor=$_POST['processor'];
	$processor_B=$_POST['processor_B'];
	$grafis_jenis=$_POST['grafis_jenis'];
	$grafis=$_POST['grafis'];
	$grafis_B=$_POST['grafis_B'];
	
	


	$query1=mysql_query("INSERT INTO datalaptop (id_laptop, nama_laptop, jenis_laptop,tipe_laptop,harga_rupiah,harga,harga_B,layar_inch,layar,layar_B,penyimpanan_GB,penyimpanan,
	penyimpanan_B,ram_GB,ram,ram_B,jenis_processor,processor,processor_B,grafis_jenis,grafis,grafis_B) 
	VALUE 
	('$id_laptop', '$nama_laptop' , '$jenis_laptop','$tipe_laptop','$harga_rupiah','$harga','$harga_B', '$layar_inch','$layar', '$layar_B','$penyimpanan_GB','$penyimpanan',
	'$penyimpanan_B','$ram_GB','$ram','$ram_B','$jenis_processor','$processor','$processor_B','$$grafis_jenis','$grafis','$grafis_B')");
	if ($query1) {
		echo "<script>alert('Data berhasil ditambahkan');</script>";
		echo "<script>location.href='index.php'</script>";
	}else{
		echo "<script>alert('Data gagal ditambahkan, silakan coba lagi!');</script>";
		echo "<script>location.href='DataLaptop.php'</script>";
    }
?>