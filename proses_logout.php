<?php
	session_start();
	unset($_SESSION['username'],$_SESSION['name'],$_SESSION['pass']);
	session_destroy();
	echo "<h2><span>Redirecting......</span></h2>";
	echo "<script>alert('Terimakasih'); document.location='index.php'</script>";
?>