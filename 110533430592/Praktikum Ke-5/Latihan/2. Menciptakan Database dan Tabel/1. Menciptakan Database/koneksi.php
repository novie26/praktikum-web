<?php
//bisa disesuaikan username dan password

$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'myweb';

$cnn = mysql_connect($host, $user, $pass);
if(!$cnn)
{
	exit('Koneksi Gagal');
}
?>