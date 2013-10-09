<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" >
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Kasus 2 Checkbox</title>
	</head>
	<body>
		<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
		<h1>Matakuliah yang Disukai</h1>
		<input type="checkbox" name="matkul[]" value="Multimedia"
		<?php
		if (isset($_POST['matkul'] ))
		{
		foreach ($_POST['matkul'] as $key => $value) 
		{
				if ($value=='matkul') 
				{
				echo "checked";
				}
			}
		}
		?>
		/>Multimedia<br>
		
		<input type="checkbox" name="matkul[]" value="Web"
		<?php
		if (isset($_POST['matkul'] ))
		{
		foreach ($_POST['matkul'] as $key => $value)
		{
				if ($value=='Web') 
				{
				echo "checked";
				}
			}
		}
		?>
		/>Web<br>
		
		<input type="checkbox" name="matkul[]" value="Sistem Informasi"
		<?php
		if (isset($_POST['matkul'] ))
		{
		foreach ($_POST['matkul'] as $key => $value)
		{
				if ($value=='Sistem Informasi') 
				{
				echo "checked";
				}
			}
		}
		?>
		/>Sistem Informasi<br>
		
		<input type="checkbox" name="matkul[]" value="Pemrograman Berbasis Objek"
		<?php
		if (isset($_POST['matkul'] ))
		{
		foreach ($_POST['matkul'] as $key => $value)
		{
				if ($value=='Pemrograman Berbasis Objek') 
				{
				echo "checked";
				}
			}
		}
		?>
		/>Pemrograman Berbasis Objek<br><br>
		
		<input type="submit" value="OK" >
		</form>
		
		<?php
		if (isset($_POST['matkul'])) 
		{
			echo "<h2>Anda Memilih</h2>";
			echo "<ul>";
			foreach ($_POST['matkul'] as $key => $value) 
			{
				echo " <li>".$value."</li>";
			}
		echo "</ul>";
		}
		?>
	</body>
</html>