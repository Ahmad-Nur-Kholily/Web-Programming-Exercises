<?php
function buatBintang($n){
  	echo "<pre>";
 	for($i=0; $i<=$n; $i++){
 		for($j=$n-$i; $j>0; $j--){
  			echo "* ";
 		}
         echo "<pre>";
 	}
     echo "\n";
}
buatBintang(4);
?> 