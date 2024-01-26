<?php
$waktukerjadani = 14 ;
$kompensasi = 30000;
$waktukerjastandar = 8 ;
if ($waktukerjadani > $waktukerjastandar){
    echo "jumlah kompensasi yang diterima adalah " .$kompensasi*($waktukerjadani-$waktukerjastandar);
}else{
    echo "tidak mendapatkan kompensasi";
}
