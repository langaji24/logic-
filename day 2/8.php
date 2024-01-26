<?php
$panjang = 13;
$lebar = 9 ;
$luas = $panjang*$lebar;
if($luas <90 ){
    echo"tipe 36";
}elseif($luas >= 90 && $luas <96){
    echo"tipe 45";
}elseif($luas >= 96 && $luas <120){
    echo"tipe 54";
}elseif($luas > 120 && $luas >=150){
    echo"tipe 60";
}else {
    echo "tipe 70"; 
}