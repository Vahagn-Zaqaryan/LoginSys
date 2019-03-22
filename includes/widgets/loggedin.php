<div class="widget">
	<h2>Hello,<?php echo $user_data['fname']; ?></h2>
	<div class="inner">
		<ul>
			<?php echo  "<li><img src=' ".$user_data['img']." ' style='border:1px solid #000;' width='50'></li>"; ?>
			<li><a href="logout.php" style="color:#000;">Log out</a></li>
			<li><a href="setting.php" style="color:#000;">Settings</a></li>
			<li><a href="del.php" style="color:#000;">Delete your count</a></li>
			<li>Now you are <?php echo $user_data['age']; ?> years old</li>
		</ul>
	</div>
</div>