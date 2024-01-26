<?php
$totalbelanja = 170000;
$voucher=10000;
$freeproduct= "1 dus permen kaki";
if ($totalbelanja >100000 &&$totalbelanja <150000){
    echo"mendapatkan voucher belanja sebesar ".$voucher;
}elseif ($totalbelanja >150000){
    echo"mendapatkan voucher belanja sebesar ".$voucher." dan gratis " .$freeproduct;
}else{
    echo"tidak mendapatkan diskon maupun produk gratis";
}