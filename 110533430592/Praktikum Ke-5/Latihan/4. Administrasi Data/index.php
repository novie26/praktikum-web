<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" >
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Akses dan Manipulasi Data</title>
		<style type="text/css">
		.even
		{	
			background: #ddd;
		}
		</style>
</head>
<body>
	<?php
	ini_set('display_error', 1);
	//Meng-include file koneksi dan data handler
	require_once './koneksi.php';
	require_once './data_handler.php';
	
	//Konstanta nama tabel
	define('MHS', 'mahasiswa');
	
	//Memanggil fungsi data handler
	data_handler('?m=data');
?>
</body>
</html>