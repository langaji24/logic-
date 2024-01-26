<?php

$student= [
[
    'Nama'=> 'Andi',
    'Rombel' => 'PPLG XI-1',
    'Rayon' => 'Ciawi',
    'JK' => 'L',
],
[
    'Nama'=> 'Sasa',
    'Rombel' => 'PPLG XI-6',
    'Rayon' => 'sukasari 2',
    'JK' => 'P',
],
[
    'Nama'=> 'Lala',
    'Rombel' => 'PPLG XI-3',
    'Rayon' => 'cisarua 2',
    'JK' => 'P',
],
[
    'Nama'=> 'Beni',
    'Rombel' => 'PPLG XI-2',
    'Rayon' => 'cicurug 2',
    'JK' => 'P',
]
];
foreach($student as $siswa) {
    echo "Nama:".$siswa['Nama']. "</br>"; 
    echo "Rombel:".$siswa['Rombel']. "</br>";
    echo "Rayon:".$siswa['Rayon']. "</br>";
    echo "Jenis Kelamin:".$siswa['JK']. "</br>";
    echo "</br>";
}
