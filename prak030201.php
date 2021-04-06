<?php
function hitungGaji($gol, $masaKerja){
 	if ($gol == "A"){
  		if ($masaKerja < 10) {
 			$gaji = "Rp.5.000.000";
  		} else {
  			$gaji = "Rp.7.000.000";
  		}
 	} else if ($gol == "B"){
 			if ($masaKerja < 10) {
 				$gaji = "Rp.6.000.000";
  			} else {
  				$gaji = "Rp.8.000.000";
  			}
  		}
return $gaji;
}
echo hitungGaji("A",11);
echo "<br><br>";
echo hitungGaji("A",9);
echo "<br><br>";
echo hitungGaji("B",11);
echo "<br><br>";
echo hitungGaji("B",9);
?>