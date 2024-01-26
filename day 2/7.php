<?php
$nasikebuli = 25000;
$ayambakar = 20000;
$nasigoreng = 15000;
$totalpembelian = ($nasikebuli*2)+$ayambakar+($nasigoreng*2);
$day = date("l");

if($day == "Friday"){
    echo "total pembayaran setelah mendapat diskon 5% adalah ".$totalpembelian-($totalpembelian/0.05);

}elseif($day == "Monday"){
    echo "total pembayaran setelah mendapat diskon 2% adalah ".$totalpembelian-($totalpembelian/0.02);

}else{
    echo"dengan membeli pada $day tidak mendapat diskon, jadi pembayaran dengan subtotal ".$totalpembelian; 
}