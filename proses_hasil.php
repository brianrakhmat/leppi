<?php
include "koneksi.php";
//WP
$harga			= $_POST['harga'];
$layar			= $_POST['layar'];
$penyimpanan	= $_POST['penyimpanan'];
$ram			= $_POST['ram'];
$processor		= $_POST['processor'];
$grafis			= $_POST['grafis'];
//Jumlah Bobot
$W = $harga+$layar+$penyimpanan+$ram+$processor+$grafis;
//Menghitung W
$W1 = $harga/$W;
$W2	= $layar/$W;
$W3	= $penyimpanan/$W;
$W4	= $ram/$W;
$W5 = $processor/$W;
$W6	= $grafis/$W;
$WTotal = $W1+$W2+$W3+$W4+$W5+$W6;
//Menghitung S
$sql="select id_laptop, nama_laptop, harga, harga_B, layar, layar_B, penyimpanan, penyimpanan_B, ram, ram_B, processor, processor_B, grafis, grafis_B from datalaptop";
$data=mysql_query($sql);
$S=array();
$i=0;
$Stotal=0;
while($data_=mysql_fetch_array($data)){
	$temp=pow($data_['harga_B'],$W1)*pow($data_['layar_B'],$W2)*pow($data_['penyimpanan_B'],$W3)*pow($data_['ram_B'],$W4)*pow($data_['processor_B'],$W5)*pow($data_['grafis_B'],$W6);
	$S[$i]=array($temp,$data_['id_laptop'],$data_['nama_laptop']);
	$i++;
	$Stotal=$Stotal+$temp;
	}
$V=array();
for($i=0;$i<count($S);$i++){
	$V[$i]=array($S[$i][0]/$Stotal,$S[$i][1]);
}/*
print_r($W);echo"<br>";
print_r($W1);echo"<br>";
print_r($W2);echo"<br>";
print_r($W3);echo"<br>";
print_r($W4);echo"<br>";*/
$temp3=array();
for($b=0;$b<count($V)-1;$b++) {
for($a=$b+1;$a<count($V);$a++) {
		if($V[$b][0]<$V[$a][0]){
			$temp3=$V[$b];
			$V[$b]=$V[$a];
			$V[$a]=$temp3;
			}	
		}
	}
	/*
echo "<pre>";
echo "Print S<br>";
print_r($S);
echo "<br>";
echo "Print V<br>";
print_r($V);
echo "<br>";
echo "Print Total<br>";
print_r($Stotal);
echo "</pre>";*/
include "hasil.php";
?>