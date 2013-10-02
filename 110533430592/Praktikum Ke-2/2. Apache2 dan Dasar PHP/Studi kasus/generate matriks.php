<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" >
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Generate Matrik Sel</title>
	</head>

	<body>
		<h1>Matriks Sel pada Tabel</h1>
		<?php 
			function matrik_tabel($brs,$klm)
			{
				echo "<table border='1'>"; 
 
				for($tr=1;$tr<=$brs;$tr++)
				{ 
      				echo "<tr>"; 
        			for($td=1;$td<=$klm;$td++)
					{ 
               			echo "<td>baris: ".$tr." kolom: ".$td."</td>"; 
        			} 
    				echo "</tr>"; 
				} 
				echo "</table>"; 
			}
			$baris = 11; //jumlah baris
			$kolom = 8; //jumlah kolom
			matrik_tabel($baris,$kolom);
		?>
	</body>
</html>