<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" >
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Kalkulator</title>
	</head>
	<body bgcolor=gray>
		<body>
		
			<?php 
				$angka = $_POST ['angka'];
				$angkaa = $_POST ['angkaa'];
				$operator = $_POST ['operator'];
				$hasil = 0;

				if ($operator == 'tambah')
				{
					$hasil = $angka + $angkaa;
				}
				elseif($operator == 'kurang')
				{
					$hasil = $angka - $angkaa;
				}
				elseif($operator == 'kali')
				{
					$hasil = $angka * $angkaa;
				}
				elseif($operator == 'bagi')
				{
					$hasil = $angka / $angkaa;
				}
			?>
	<div>
		<form name = "Kalkulator" method="post">
		<h1 align="center"> Kalkulator Cilik</h1>
		<div align="center">
		<p>
		<input name="angka" type="integer" id="angka" style="width:50px" value="<?php  echo isset ($_POST['angka']) ? $_POST['angka']:''; ?>">
		<select name="operator" id="operator">
		<option value="tambah"
			<?php
				if ($_POST['operator'] == 'tambah')
				{
					echo 'selected="selected"';
				}
			?>
		/>+
		
		<option value="kurang"
			<?php
				if ($_POST['operator'] == 'kurang')
				{
					echo 'selected="selected"';
				}
			?>
		/>-
		
		<option value="kali"
			<?php
				if ($_POST['operator'] == 'kali')
				{
					echo 'selected="selected"';
				}
			?>
		/>*
		
		<option value="bagi"
			<?php
				if ($_POST['operator'] == 'bagi')
				{
					echo 'selected="selected"';
				}
			?>
		/>/
		</select>

		<input name="angkaa" type="integer" id="angkaa" style="width:50px" value="<?php  echo isset ($_POST['angkaa']) ? $_POST['angkaa']:''; ?>">
		<?php
		if (isset($_POST['angkaa'] ))
		{
		foreach ($_POST['angkaa'] as $key => $value) 
		{
				if ($value=='angkaa') 
				{
				echo "checked";
				}
			}
		}
		?>

		<input type="submit" value="=" />
		<input type="text"  name="hasil" style="width:50px" value="<?php echo isset ($hasil) ? ($hasil) :''; ?>">
		</p>
		</div>
		</form>
		
		<?php
		if(isset($_POST['sex']))
		{
		echo $_POST['sex'];
		}
		?>
		</div>
	</body>
</html>