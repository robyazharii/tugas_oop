<?php
class battery {
  
    public $full;
    protected $design;
   
    public function __construct($full, $design) {
      $this->full = $full;
      $this->design = $design;
    }
}
   
class hitung extends battery {
    public function hitung_battery() {
          $x = round(($this->full/$this->design)*100,2);
      return $x."%";
    }
 
      public function __destruct() {
        echo "Keterangan:<br>
                 >=60 = Masih baik<br>
                 <=60 = Kurang Baik";
      }
 }
   
 $battery_power = new hitung(24.820, 30.620);
   
 echo "Kondisi Baterai = ".$battery_power->hitung_battery()."<hr>";
 ?>