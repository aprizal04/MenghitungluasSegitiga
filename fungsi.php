<?php
	function perhitunganSegitiga($alas,$tinggi){
		$jawaban = $alas * $tinggi / 2;
		return $jawaban;
	}
	function soalSegitiga(){
		$palas = 5;
		$ptinggi = 10;
		echo "Berapa luas segitiga sama kaki yang mempunyai alas " . $palas . " dan tinggi " . $ptinggi . "?<br>";
		echo "Jawabannya adalah : " . perhitunganSegitiga($palas,$ptinggi); 
	}
	soalSegitiga();
?>
