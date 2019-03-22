<?php 	
	error_reporting(0);	
	$tmp = $_FILES['imgpc']['tmp_name'];
	$name = $_FILES['imgpc']['name'];
 	if(move_uploaded_file($tmp, 'images/'.$name)){
		$errors = "connection error";
		$con = mysql_connect('localhost', 'root', 'usbw') or die($errors);
		mysql_select_db("database",$con);
		header('Location: index.php');
		$id= $user_data['id'];
		$quary=mysql_query("UPDATE  `database`.`data` SET  `img` =  'images/$name' WHERE  `data`.`id` = \"$id\" ");
	}
 ?>
<html>
<head>
	<style type="text/css">
		form{float: left;}
		li{list-style: none;}
		#cpi{position: absolute;left: 250px; top: 200px;}
		#img{
			float: left;
			max-width: 199px;
		}
		#pib{
			background-color: #eee;
			width: 200px;
			padding: 10px;
		}		
		#fl{
			float: right;
			margin-right: 10px;
			background-color: #eee;
			width: 385px;
			padding: 10px;
		}
	</style>
		<title></title>
	</head>
	<body>
		<div class="fl"><h2 id="fl"><?php echo $user_data['fname'] ." ".$user_data['lname']; ?></h2></div>
		<form action="" method="POST" enctype="multipart/form-data">
			<div id="pib">
				<img id="img" src="<?php echo $user_data['img']; ?>" ><br>
					Change profil image:<br>
				<input type="file" name="imgpc"><br>
				<input type="submit" name="submit" value="Chenge">
			</div>
		</form>		
	</body>
</html> 