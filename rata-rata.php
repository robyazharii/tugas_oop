<?php
abstract class ujian{
   public $uts;
   public $uas;
  
   public function __construct($uts, $uas) {
     $this->uts = $uts;
     $this->uas = $uas;
   }

   abstract public function hitung_ujian();
}

interface detail_ujian{
	 public function nilai_ujian();
}
  
class roby extends ujian implements detail_ujian{
   public function hitung_ujian(){
	   $x = ($this->uts + $this->uas)/ 2;
     return "Nilai roby $x";
   }
   
   public function nilai_ujian(){
	   return "<br>Ket Nilai rata-rata ujian:<br>
	        90 = A<br>
	        <90  = B<br>
	        <75 = C<br>
	        <50 = D";
	   }
}

class angel extends ujian implements detail_ujian{
   public function hitung_ujian(){
		$x = ($this->uts + $this->uas)/ 2;
     return "Nilai angel $x";
   }
   
   public function nilai_ujian(){
	   return "<br>Ket Nilai rata-rata ujian:<br>
			90 = A<br>
			<90  = B<br>
			<75 = C<br>
			<50 = D";
	   }
}

function cetak_detail_ujian($objek_detail){
	 return $objek_detail->nilai_ujian();
}

$ujian_roby = new roby(60, 90);
echo $ujian_roby->hitung_ujian();
echo cetak_detail_ujian($ujian_roby);
echo "<hr>";

$ujian_angel = new angel(90, 80);
echo $ujian_angel->hitung_ujian();
echo cetak_detail_ujian($ujian_angel);
?>