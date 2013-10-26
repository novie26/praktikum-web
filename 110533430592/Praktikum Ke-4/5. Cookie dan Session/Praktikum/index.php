<?php
	ob_start();
	session_start();
	// Mulai session
	error_reporting(0);
	// Menghindari warning
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Tugas Praktikum</title>
		<style type="text/css">
	.inner
	{
		margin : 50px auto;
		padding : 10px;
		width : 240px;
	}
	</style>
</head>

<body bgcolor="#4f4a4a">

<div id="main">
	<h1 align="center"; style="color:gray">Autentikasi Session</h1>

	<div id="content">
		<?php
		ini_set('display_errors', 1);
		define('_VALID', 1);
		//include file eksternal
		require_once('./auth.php');
		
		init_login();
		validate();

		?>
		<p align="center"><a href="?m=logout">Logout</a></p>

		<p align="center"; style="color:gray">Menu-menu admin ada di sini</p>
	</div>

</div>

</body>
</html>