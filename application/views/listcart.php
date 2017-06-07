<!DOCTYPE html>
<html>
<head>
	<title>List Cart</title>
</head>
<body>
	<?php 
		echo "Cac san pham co trong gio hang: <br>";
		$products = $this->cart->contents();
		/*
		echo "<pre>";
		print_r($products);
		echo "</pre>";
		*/
		foreach ($products as $key => $value) {
			# code...
			foreach ($value as $k => $v) {
				# code..
				echo $k. ": ". $v."<br>";
			}
		}
	 ?>
</body>
</html>