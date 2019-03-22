<?php
	include 'core/init.php';
	include'includes/overall/header.php';
	if (empty($_POST['fnamec']) && empty($_POST['lnamec'])) {
		 "You need enter all boxes.";
	}
	else if(!empty($_POST['fnamec']) && !empty($_POST['lnamec'])){
		$fnamec=$_POST['fnamec'];
		$lnamec=$_POST['lnamec'];	
		$errors = "connection error";
		$con = mysql_connect('localhost', 'root', 'usbw') or die($errors);
		mysql_select_db("database",$con);
		$id= $user_data['id'];
		$query= mysql_query("UPDATE  `database`.`data` SET  `fname` =  '$fnamec', `lname` =  '$lnamec' WHERE  `data`.`id` = \"$id\" ");
		header("Location: index.php");
	}
?>
<style type="text/css">
	table{
		border: none;
		width: 630px;
		height: 100px;
		font-family: arial;
	}
	#data{
		width: 250px;
	}
	#name{
		width:200px; 
		padding: 10px;
	}
	tr:hover{
		background-color: #eee;
	}
	#submit{
		float: right;
		margin-right: 25px;
	}
</style>
<h2>Change your settings</h2>
You need enter all boxes if you don`t want to change anyone you need to enter your old.
<form action="" method="post">
	<table>
		<tr>
			<td id="name">Firstname</td>
			<td id="data"><?php echo $user_data['fname']; ?></td>
			<td><input type="text" name="fnamec" maxlength="15"></td>
		</tr>
		<tr>
			<td id="name">Lastname</td>
			<td id="data"><?php echo $user_data['lname']; ?></td>
			<td><input type="text" name="lnamec" maxlength="16"></td>
		</tr>
	</table>
	<br>
	<input type="submit" value="Chenge" id="submit">
</form>
<?php include'includes/overall/footer.php'; ?>