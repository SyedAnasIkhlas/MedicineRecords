<?php 
	ob_start(); //Turn on output buffering
	date_default_timezone_set("Asia/Riyadh");

	try {
		
		$con = new PDO("mysql:dbname=medicine_records;host=;localhost","root","");
		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

	} catch (PDOException $e) {
		echo "Connection failed" . $e->getMessage();
	}
 ?>