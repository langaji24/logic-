<?php
$bb = 44 ;
$tb = 148 ;
$imt = $bb / (($tb/100) **2);
if ($imt < 18.5 ){
    echo "berat badan kurang";
}elseif($imt >= 18.5 &&$imt <= 22.9){
    echo "normal";
}elseif($imt >=22.9 && $imt <= 24.9){
    echo "berat badan lebih";
}else{
    echo "obesitas";
}