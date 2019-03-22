<?php 
	$fnamec=$_POST['fnamec'];
	$lnamec=$_POST['lnamec'];
	$unamec=$_POST['unamec'];
	$passwordc=$_POST['passwordc'];	
if (empty($fnamec) || empty($lnamec) || empty($unamec) || empty($passwordc)) {
	echo "You need enter all boxes if you don`t want to change anything enter old";
}else{
	$errors = "connection error";
	$con = mysql_connect('localhost', 'root', 'usbw') or die($errors);
	mysql_select_db("database",$con);
	$id= $user_data['id'];
}
 ?>