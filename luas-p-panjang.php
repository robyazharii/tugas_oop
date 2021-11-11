<?php
class persegi {
  
    private $panjang;
    private $lebar;
   
    public function __construct($panjang, $lebar) {
      $this->panjang = $panjang;
      $this->lebar = $lebar;
    }
   
    public function hitung_luas() {
          $x = $this->panjang*($this->lebar);
      return $x;
    }
 
      public function __destruct() {
        echo "Keterangan:<br>
                 Hasil diatas merupakan hasil dari Rumus mencari
                 Luas Persegi Panjang yaitu P x L";
      }
 }
   
 $persegi_panjang = new persegi(8, 10);
   
 echo "Luas persegi panjang adalah = ".$persegi_panjang->hitung_luas()." cm^2<hr>";
 ?>