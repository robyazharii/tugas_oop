<?php
// include file sript_proses
include "script_proses.php";

// instantisasi dan setting properties
$operasi = new operasiBilangan(25, 20);

// Tampilkan hasil penjumlahan
echo 'Hasil Penjumlahan  '.$operasi->bacaNilai1(). ' + ' .$operasi->bacaNilai2(). ' = ' .$operasi->jumlahkan();

// Tampilkan hasil Pengurangan
echo '<br>Hasil Pengurangan  '.$operasi->bacaNilai1(). ' - ' .$operasi->bacaNilai2(). ' = ' .$operasi->kurangkan();

// Tampilkan hasil Pembagian
echo '<br>Hasil Pembagian  '.$operasi->bacaNilai1(). ' / ' .$operasi->bacaNilai2(). ' = ' .$operasi->bagikan();

// Tampilkan hasil Perkalian
echo '<br>Hasil Perkalian  '.$operasi->bacaNilai1(). ' x ' .$operasi->bacaNilai2(). ' = ' .$operasi->kalikan();



?>