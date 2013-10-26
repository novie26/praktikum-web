<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" >
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Set Session</title>
	</head>
	<body>
	<?php
	//Inisialisasi data session
	session_start();
	
	//Set sesion jika belum ada
	if (!isset($_SESSION['test']))
	{
		$_SESSION['test'] = 'value';
	}
	else
	{
		echo 'Session di-set <br />';
		//Mencetak nilai Session Test
		echo 'Nilai: ' . $_SESSION['test'] . '<br />';
		
		//Mencetak Semua elemen session
		print_r($_SESSION);
	}
	
	?>
	<p>
	Tekan Refresh(F5);
	</body>
</html>