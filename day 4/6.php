<?php 
$c=0;

for ($a=5; $a<=25; $a += 5) {
    if ( 225 % $a == 0){
        $c++;
    }
}
echo "kemungkinan bilangan 225 bisa dibagi habis dengan kelipatan 5 (5-25) adalah " .$c++;
?>