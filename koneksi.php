<?php
	$server='ipjpi.org';
	$user='u7843739_leppi';
	$pass='leppi';
	$db='u7843739_leppi';

	$con=mysql_connect($server,$user,$pass);
	if($con){
		$selectdb=mysql_select_db($db);

	}
?>
