<?php
$belanja = 154000;
$diskon=0.07;
if ($belanja > 100000){
    echo "jumlah uang yang harus di bayar setelah potongan diskon adalah " .$belanja-($belanja*$diskon);
}else{
    echo "jumlah uang yang harus dibayar adalah " .$belanja ;
}