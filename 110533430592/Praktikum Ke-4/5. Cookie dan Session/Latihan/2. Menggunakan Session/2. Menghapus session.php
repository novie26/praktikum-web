</html><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" >
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Hapus Session</title>
	</head>
	<body>
	<?php
	//Inisialisasi data session
	session_start();
	
	//Set sesion jika belum ada
	if (!isset($_SESSION['test']))
	{
		//Hapus Session Test
		unset($_SESSION['test']);
		echo 'session dihapus';
	}
	else
	{
		echo 'unset';
		
		//Mencetak Semua elemen session
		print_r($_SESSION);
	}
	
	?>
	<p>
	Tekan Refresh(F5);
	</body>
</html>