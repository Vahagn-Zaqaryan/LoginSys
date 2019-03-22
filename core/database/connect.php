<?php  
	$error="connection error";
	mysql_connect("localhost", "root", "usbw") or die($error);
	mysql_select_db("database") or die ($error);
?>