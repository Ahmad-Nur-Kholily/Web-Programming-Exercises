<?php
    $n = $_GET['nama'];
    $d = $_GET['diameter'];
    $t = $_GET['tinggi'];
    $r = $d / 2;
    $l = 2 * 3.14 * $r * ($r * $t);
    echo "Luas tabung A dengan diameter .$d. dan tinggi .$t. adalah .$luas. satuan luas";
?> 