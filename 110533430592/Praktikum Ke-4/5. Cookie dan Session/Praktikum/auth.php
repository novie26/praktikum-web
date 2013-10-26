<?php
defined('_VALID') or die('not allowed');

function init_login()
{
//Simulasi data account nama dan password
	$nama = 'admin';
	$pass = 'admin';

	if(isset($_POST['nama']) && isset($_POST['pass']))
	{
		$n = trim($_POST['nama']);
		$p = trim($_POST['pass']);

		if(($n === $nama) && ($p === $pass))
		{
			$_SESSION['nlogin'] = $n;

?>
			<script type="text/javascript">
				document.location.href="./";
			</script>
<?php
		}
		else
		{
			echo 'Nama/Password Tidak Sesuai';
			return false;
		}
	}
}

function validate()
{
	if(!isset($_SESSION['nlogin']))
	{ 
	?>
		<div class="inner">
			<form action="" method="post">
				<table border=0 cellpadding=5>
					<tr>
						<td>Nama</td>
						<td><input type="text" name="nama" class="text" /></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" name="pass" class="text" /></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" value="LOGIN" class="button" /></td>
					</tr>
				</table>
			</form>
		</div>
	<?php
		exit;
	}

	if(isset($_GET['m']) && $_GET['m'] == 'logout')
	{
		if(isset($_SESSION['nlogin']))
		{
			unset($_SESSION['nlogin']);
		}
	?>
	
		<script type="text/javascript">
			document.location.href="./";
		</script>
<?php
	}
}
?>