<?php
    // const
    define ("phi", 3.14);

    //RUMUS luas lingkaran
    $r = 5.5;
    $luasLingkaran = phi*pow($r,2);
    echo 'luas lingkaran = '.round($luasLingkaran,1)." m2\n";

    // RUMUS volume limas
    $tLimas = 12;
    $volLimas = (pow($tLimas,2)*$tLimas)/3;
    echo 'Volume Limas = '.round($volLimas,1)." m3\n";

    // RUMUS volume tabung
    $r = 5.5;
    $tTabung = 8;
    $volTabung = phi*pow($r, 2)*$tTabung;
    echo 'Volume Tabung = '.round($volTabung,1)." m3\n";

    // RUMUS luas lingkaran hilang = s*s = 10*10 = 100
    $LAlas = phi*pow($r,2)/100;
    echo 'Luas Lingkaran Hilang = '.round($LAlas,1)." m2\n";

    //totalnya
    $totalVolume = $volTabung+$volLimas-$LAlas;
    echo 'volume bangun ruang = '.round($totalVolume,1)." m3\n";

?>