<?php
// $baris = 4;
// $kolom = 5;
echo "<table border='1'>";
for($baris = 0; $baris <= 4; $baris++){
 	echo "<tr>";
 	for($kolom = 1; $kolom <= 4;$kolom++){
		echo "<td>",($kolom+($baris*4)),"</td>";
 	}
	echo "</tr>";
}
echo "</table>";
?>