<aside>
	<?php 

		if (logged_in() === true) {
			include'widgets/loggedin.php';	
		}
		else{
			include'widgets/login.php';	
		}
		include 'includes/widgets/user_count.php';
	 ?>
</aside>