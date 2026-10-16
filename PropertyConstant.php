<?php

class Produk {
    public $kode;
    public $nama;
    public $harga;
    public $stok;

    const PAJAK = 0.11;

    
}


// Membuat objek produk
$produk = new Produk();
$produk->kode = 'P001';
$produk->nama = 'Laptop';
$produk->harga = '10000000';
$produk->stok= 5;

// Menampilkan informasi produk
echo "Produk: " . $produk->nama;
echo "<br/>";
echo "Harga: Rp" . $produk->harga;
echo "<br/>";
echo "Stok: " . $produk->stok;
echo "<br/>";
echo "Pajak: " . $produk->pajak;
echo "<br/>";
echo "Total harga setelah pajak: Rp" .$total;
?>
