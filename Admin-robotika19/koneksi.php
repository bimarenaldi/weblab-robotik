<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$data_base   = "db_weblab";
	$db = mysqli_connect($host, $user, $pass, $data_base);
	
	if(mysqli_connect_errno()){
		echo "Database Not Connected".mysqli_connect_error();
	}
?>