<?php
$SparePart = [
    [
    'nama' => 'Ban',
    'diskon' => '10'
    ],
    [
    'nama' => 'oli mesin'
    ],
    [
    'nama' => 'kampas rem'
    ],
    [
    'nama' => 'Busi',
    'diskon' => '9'
    ],
    [
    'nama' => 'Akumulator',
    'diskon' => '7'
    ],
];

foreach ($SparePart as $item) {
    if (array_key_exists('diskon', $item)) {
        echo "Barang: " . $item['nama'] . ", Diskon: " . $item['diskon'] ."%". "</br>";
    }
}
?>
