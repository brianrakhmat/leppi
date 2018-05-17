
<?php
	$DB_HOST = 'ipjpi.org';
	$DB_USER = 'u7843739_leppi';
	$DB_PASS = 'leppi';
	$DB_NAME = 'u7843739_leppi';
	
	try{
		$DB_con = new PDO("mysql:host={$DB_HOST};dbname={$DB_NAME}",$DB_USER,$DB_PASS);
		$DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}
?>