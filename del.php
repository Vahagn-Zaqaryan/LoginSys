<?php 
	include 'core/init.php';
	session_destroy();
	$id=$user_data['id'];
	$query=mysql_query("DELETE FROM `database`.`data` WHERE `data`.`id` = $id");
 	header('Location: index.php');
 ?>