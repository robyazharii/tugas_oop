<?php
// buat class
class operasiBilangan{

	// set properties/attribut
	public $bilangan1;
	public $bilangan2;

	// konstruktor dengan 2 buah parameter
	function __construct($x, $y){
		$this->bilangan1=$x;
		$this->bilangan2=$y;
	}

	// fungsi untuk operasi tambah
	function jumlahkan(){
		// rumus untuk penjumlahan
		$hasil = $this->bilangan1 + $this->bilangan2;
		// kembalikan nilai hasil
		return $hasil;
	}

	// fungsi untuk pengurangan
	function kurangkan(){
		// rumus untuk pengurangan
		$hasil = $this->bilangan1 - $this->bilangan2;
		// kembalikan nilai hasil
		return $hasil;
	}

	// fungsi untuk membagikan
	function bagikan(){
		// rumus untuk bagi
		$hasil = $this->bilangan1 / $this->bilangan2;
		// kembalikan nilai hasil
		return $hasil;
	}

// fungsi untuk kalikan
	function kalikan(){
		// rumus untuk pengurangan
		$hasil = $this->bilangan1 * $this->bilangan2;
		// kembalikan nilai hasil
		return $hasil;
	}

	// fungsi untuk membaca nilai bilangan 1
	function bacaNilai1(){
		return $this->bilangan1;
	}

		// fungsi untuk membaca nilai bilangan 2
	function bacaNilai2(){
		return $this->bilangan2;
	}


}


?>