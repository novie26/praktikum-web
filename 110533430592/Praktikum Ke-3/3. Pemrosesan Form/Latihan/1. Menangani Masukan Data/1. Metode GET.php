<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" >
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Metode GET</title>
	</head>
	<body>
		<form action="<?php $_SERVER['PHP_SELF'];?>" method="get"> 
		
		Nama
		<input type="text" name="name" /> <br /> 
		
		<input type="submit" value=OK" /> 
		</form>
		
		<?php
		//Memasukkan nama dengan informasi yang dikirim menjadi satu dengan url
		if(isset($_GET['nama']))
		{
			echo 'Hallo, ' . $_GET['nama'];
			}
	?>
	</body>
</html>