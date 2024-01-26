<?php
$barang = [
    [
        'nama_barang' => 'Pasta Gigi',
        'harga_barang' => '18000',
        'jumlah_beli' =>'1',
    ],
    [
        'nama_barang' => 'Sabun Mandi',
        'harga_barang' => '5000',
        'jumlah_beli' => '3',
    ],
    [
        'nama_barang' => 'Aloe Vera Shaet Mask',
        'harga_barang' => '15000',
        'jumlah_beli' => '5',
    ]
];

$total_pembayaran = 0; 

foreach ($barang as $key => $isi) {
    $total_barang = $isi['harga_barang'] * $isi['jumlah_beli'];
    $total_pembayaran += $total_barang;

    echo " Barang : $isi[nama_barang]<br>";
    echo " Harga : $isi[harga_barang]<br>";
    echo " Jumblah : $isi[jumlah_beli]<br>";
    echo " Total : $total_barang<br>";
    echo "<br>";
}

echo "Yang Beni harus bayar: $total_pembayaran";
?>