<?php 
	include'core/init.php';
	
	if (empty($_POST) === false) {
		$username = $_POST["username"];
		$password = $_POST["password"];
		if (empty($username) === true || empty($password) === true) {
			$errors[] =  "You need to enter a username and password";
		}else if (user_exitsts($username) === false) {
			$errors[] = "We can't find that username.Have you registered.";
		}else if (user_active($username) === false) {
			 $errors[] = "You haven't activated your account";
		}else{
			if (strlen($password) > 32) {
				$errors[] = "Password too long"."<br>";
			}
		$login = login($username, $password);
		if ($login === false) {
				$errors[] =  "This username/password is incorrect.";
			}else{
				$_SESSION['id'] = $login;
				header ('Location: index.php');
				exit();
			}
	}
		
}else{
	$errors[] = "No data reseived";
}
include'includes/overall/header.php';
	function output_errors($errors)
	{
		return '<ul><li>'.implode('</li><li>',$errors).'</li><ul>';
	}
	if (empty($errors) === false) {
		?>
			<h2>We tride to log you in, but...</h2>
		<?php
		echo output_errors($errors);;
	}
include'includes/overall/footer.php'; 
 
 ?>