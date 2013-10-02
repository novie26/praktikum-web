<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" >
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Generate Tabel Fleksibel</title>
	</head>

	<body>
		<h1>Tabel Fleksibel</h1>
		<?php 
			$baris=4;
			$sel=11;
			$kolom=3;
			$width = $kolom * 100;
			echo "<table width=".$width." border=1>";
			$brs = 0;
			$sl = 1;
			while ($brs < $baris && $sl <= $sel)
			{
			echo "<tr>";
			$klm = 0;
			while ($klm < $kolom)
			{
			if ($sl <= $sel)
			{
			echo "<td><div align=center>".$sl."</div></td>";
				$sl++;
			}
				$klm++;
			}
				echo "</tr>";
				$brs++;
			}
			echo "</table>";
		?>
	</body>
</html>