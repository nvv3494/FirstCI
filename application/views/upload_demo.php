<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Upload File</title>
</head>
<body>	
	<?php echo $error; ?>
	<?php echo form_open_multipart('upload/do_upload'); ?>
	<input type="file" name="userfile" size = "20"/>
	<br>
	<input type="submit" name="upload" value = "UPLOAD">
</body>
</html>