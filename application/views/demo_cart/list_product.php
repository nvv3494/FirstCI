<!DOCTYPE html>
<html>
<head>
	<title>Cac san pham dien thoai: </title>
</head>
<body>
	<h1> List điện thoại bán chạy </h1>
	<style type="text/css">
		.tg  {border-collapse:collapse;border-spacing:0;}
		.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
		.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
		.tg .tg-yw4l{vertical-align:top}
	</style>
	<?php
		/*
		echo "<pre>";
			print_r($listdt);
		echo "</pre>";
		*/
	?>
	<table class="tg">
		<tr>
		<th class="tg-031e">ID</th>
			<th class="tg-031e">Tên điện thoại</th>
			<th class="tg-yw4l">Đơn giá</th>
			<th class="tg-yw4l">Miêu tả</th>
			<th class="tg-yw4l"></th>
		</tr>
		<?php 
			foreach ($listdt as $key => $value) {
				# code...			
		 ?>
		<tr>
			<td class="tg-031e"><?php echo $value['id']; ?></td>
			<td class="tg-031e"><?php echo $value['name']; ?></td>
			<td class="tg-yw4l"><?php echo $value['unit_price']; ?></td>
			<td class="tg-yw4l"><?php echo $value['description']; ?></td>
			<td class="tg-yw4l"><a href="them_cart/<?php echo $value['id']; ?>"  onclick="return confirm('Bạn có chắc muốn thêm vào giỏ hàng không?')" ><?php echo img('source/image/cart.png'); ?></a></td>
		</tr>
		<?php 
		}
		 ?>
	</table>


	<h2>Các sản phẩm trong giỏ hàng </h2>
	<?php 
		$products_in_cart = $this->cart->contents();
		if(count($products_in_cart) == 0){
			echo "Giỏ hàng rỗng";
		}
		else{
			$tongthanhtoan = 0;
			$tongsosp = 0;
		foreach ($products_in_cart as $key => $value) {
			# code...
			$tongthanhtoan += $value['subtotal'];
			$tongsosp += $value['qty'];
			echo "Tên: ". $value['name']."<br>";
			echo "Đơn giá: ". $value['price']."<br>";
			echo "Số lượng: ". $value['qty']."<br>";
			echo "Tổng: ". $value['subtotal']."<br>";
			echo "Mô tả sản phẩm: ". $value['option']."<br>";
			?>
			<a href="xoa_cart/<?php echo $value['id']; ?>" onclick = "return confirm('Bạn có chắc chắn muốn xóa sản phẩm này khỏi giỏ hàng?')" >Xóa</a>
			<?php
			echo "<hr>";
		}
		echo "Tổng số sp: " . $tongsosp."<br>";
		echo "Tổng thanh toán: ".$tongthanhtoan;
	}
	 ?>
</body>
</html>