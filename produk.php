<?php
$people = array("Kd"=>["Kd_barang","1","2"], "nama"=>["nama_barang","kripik pangsit","minuman jelly"], "Harga"=>["harga_barang",3000,10000]);
    for ($i=0; $i < count($people["Kd"]); $i++) { 
        echo "|".$people["Kd"][$i];
    for ($j=$i; $j < count($people["nama"]); $j+=3) { 
        echo "|".$people["nama"][$j];
    for ($k=$j; $k < count($people["Harga"]); $k+=3) { 
        echo "|".$people["Harga"][$k];
        echo "\n";
            }
        }
    }
?>