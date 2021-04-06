<?php
function hitungDenda($tglHarusKembali,$tglKembali){
    //memecah tanggal bulan dan tahun (tglHarusKembali)
    $pecah1 = explode("-",$tglHarusKembali);
    $dd1 = $pecah1[2];
    $mm1 = $pecah1[1];
    $yy1 = $pecah1[0];
    //memecah tanggal bulan dan tahun (tglKembali)
    $pecah2 = explode("-",$tglKembali);
    $dd2 = $pecah2[2];
    $mm2 = $pecah2[1];
    $yy2 = $pecah2[0];
    //menghitung JDN
    $dmy1 = gregoriantojd($mm1,$dd1,$yy1);
    $dmy2 = gregoriantojd($mm2,$dd2,$yy2);
    //selisih tanggal kembali dan harus kembali
    $selisih = $dmy2-$dmy1;
    //menghitung denda
    $denda = $selisih*3000;
    return $denda;
}
echo "Besarnya denda adalah: Rp ".hitungDenda("2021-01-03", "2021-01-05");
?>