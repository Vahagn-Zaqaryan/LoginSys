<head>
	<style type="text/css">
		#anmoruk{
			float: right;
			width: 130px;
			margin-right:200px; 
		}
	</style>
	<img src="anmoruk.png" id="anmoruk">
	<?php if (logged_in()=== true){
		echo"<title>".$user_data['fname']." ".$user_data['lname']."</title>";
	}else{
		echo'<title>Login system</title>';
	} ?>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/screen.css">
</head>