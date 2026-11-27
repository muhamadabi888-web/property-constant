<?php

require('./jasa.php');

use Pbo\Marketplace\Jasa;

// Membuat objek produk
$produk = new Jasa();

$produk -> setKode("PR001")
        -> setNama("laptop")
        -> setHarga(10000000)
        -> setStok(5)

// Menampilkan informasi produk
echo "produk: ". $produk->getNama();
echo "<br/>";

echo "harga: Rp" . $produk->getHarga();
echo "<br/>";

echo "stok: " . $produk->getStok();
echo "<br/>";

echo "pajak: " . $produk->pajak()."%";
echo "<br/>";

echo "<br/>";
echo "total harga setelah pajak: Rp" .$produk->total();

echo "<br/>";
echo "Metode Pembayaran: ". $produk->payment('qris');

