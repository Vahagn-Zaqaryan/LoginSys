<?php
	function req($input){
		if(isset($input) && !empty($input)){
			return true;
		}
		return false;
	}
	if(isset($_POST['submit'])){
		if(req($_POST['firstName']) && req($_POST['lastName']) && req($_POST['age']) && req($_POST['password']) && req($_POST['userName'])){
			$tmp = $_FILES['ppic']['tmp_name'];
			$name = $_FILES['ppic']['name'];
			if(move_uploaded_file($tmp, 'images/'.$name)){
				$firstName = $_POST['firstName'];
				$lastName = $_POST['lastName'];
				$age = $_POST['age'];
				$userName = $_POST['userName'];
				$password = $_POST['password'];
				$email = $_POST['email'];
				$errors = "connection error";
				$con = mysql_connect('localhost', 'root', 'usbw') or die($errors);
				mysql_select_db("database",$con);
				$query= mysql_query("INSERT INTO data (fname,lname,uname,age,password,img) VALUES ('$firstName', '$lastName','$userName','$age','$password','images/$name')");
				header('Location: index.php');
			}	
		}
	}		
?>	
