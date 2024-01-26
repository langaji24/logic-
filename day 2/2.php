<?php
$umur = 80;
if($umur  > 6 && $umur <= 12  ){
 echo "tidur  ideal 10 jam perhari";
}else if($umur >12 && $umur <= 18  ) {
    echo "tidur ideal 8-9 jam perhari";
}else if ($umur >18 && $umur <= 40) {
    echo "tidur ideal 7-8 jam perhari ";
}else {
    echo "tidak ada data";
}