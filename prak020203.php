<?php
$baris = 4;
$kolom = 5;
echo "<table border='1'>";
for($a = 1; $a < ($baris*$kolom); $a+=4){
 	echo "<tr>";
 	for($b = 0; $b < $baris;$b++){
         $n=$a+$b;
         if($n%2==0){
            echo "<td bgcolor = red><font color='white'>$n</font></td>";
         } else{
             echo"<td bgcolor = white><font color='red'>$n</font></td>";
        }
 	}
	echo "</tr>";
}
echo "</table>";
?>