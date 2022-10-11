<?php
//arithmetic
$a = '10';
$b = 10;
$c = $a % $b;
print 'hasil a+b='.$c."\n";
echo "================\n";

//luas lingkaran
define("phi", 3.14);
$r = 10;
$luasLingkaran = phi*pow($r,2);
print "luas lingkaran dengan \n r=10 \n luas=".$luasLingkaran;
echo "\n================\n";

//volume tabung
$t = 10;
$volumetabung = phi*pow($r, 2)*$t;
print "Volume Tabung dengan \n t=10 \n volume=".$volumetabung;
echo "\n================\n";
?>