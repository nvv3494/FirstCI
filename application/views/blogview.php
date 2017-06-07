<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Blog View</title>
</head>
<body>
	<h1><?php echo $heading; ?></h1>
	<h2>
		<?php echo $title; ?>
	</h2>
	<ul>
		<?php foreach ($todolist as $value) {
			# code...
			?>
			<li><?php echo $value; ?></li>
			<?php 
		}
		?>
	</ul>
</body>
</html>