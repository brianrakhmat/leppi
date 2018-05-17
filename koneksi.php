<?php
	$server='localhost';
	$user='root';
	$pass='';
	$db='leppi';

	$con=mysql_connect($server,$user,$pass);
	if($con){
		$selectdb=mysql_select_db($db);

	}
?>
