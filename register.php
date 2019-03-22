<?php
	include 'core/init.php';
	include'includes/overall/header.php';
	include 'includes/register.php';
?>
	<h1>Register</h1>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<form action="" method="POST" enctype="multipart/form-data">
			<ul>
				<li><input type="text" name="firstName" placeholder="First Name" maxlength="15"></li>
				<li><input type="text" name="lastName" placeholder="Last Name" maxlength="16"></li>
				<li><input type="text" name="userName" placeholder="Username" maxlength="20"></li>
				<li><input type="password" name="password" placeholder="Password" maxlength="20"></li>
				<li><input type="text" name="age" placeholder="Age" maxlength="3"></li>
				<li>
					<label for="file">Profile Picture: </label>
					<input type="file" id="file" name="ppic">
				</li>
				<li><input type="submit" name="submit" value="Register"></li>
			</ul>
	</body>
</html>
<?php include'includes/overall/footer.php'; ?>

