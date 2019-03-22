<?php
	include 'core/init.php';
	include'includes/overall/header.php';
	if (logged_in() === true) {
		include'includes/widgets/loggedinp.php';	
	}
	else{
		include'includes/widgets/home.php';	
	}
?>
<?php include'includes/overall/footer.php'; ?>
<!-- UPDATE  `database`.`data` SET  `img` =  'images/nnnnnnnn.jpeg ' WHERE  `data`.`id` =16;-->
