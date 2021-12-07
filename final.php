<?php
// parent
 final class Handphone {
	public $merk = 'Xiaomi ';
	protected $harga = 1124000;
	private $nama = 'Redmi  Note 5A';
}
 
// child
class Harga extends Handphone{
	public function cetak_harga(){
 
		//akses property
		return $this->harga;
	}
	public function cetak_nama(){
		return $this->nama;
	}
}
class Xiaomi extends Handphone{}
class Oppo extends Handphone{}
 
// object
$tampil = new Harga;
echo $tampil->merk;
echo '<br>';
echo $tampil->cetak_harga();
 
echo '<hr>';
$cetak = new Xiaomi;
echo $cetak->merk;