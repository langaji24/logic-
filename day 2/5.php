<?php 
$adni = 2004;
$eko = 2001;
if ($adni  % 4 == 0 &&  $eko % 4 == 0){
    echo"keduanya lahir di tahun kabisat";
}else if ($adni  % 4 == 0){
    echo"hanya adni yang lahir di tahun kabisat";
}else if ($eko  % 4 == 0){
    echo"hanya eko yang lahir di tahun kabisat";
}else {
    echo"keduanya tidak lahir di tahun kabisat";
}