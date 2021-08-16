
# MENGHITUNG LUAS SEGITIGA

## Petunjuk Instalasi


1. Buatlah Folder Proj dan kemudian masukkan folder proj ke dalam folder C:\xampp\htdocs

2. Buat file fungsi.php ke dalam folder proj

3. Jalankan Aplikasi tersebut ke dalam browser dengan memasukkan localhost/proj/fungsi.php

## Konfigurasi Sistem 
Aplikasi menghitung Segitiga dibangun menggunakan framework php 
### Fitur
1. Menghitung Luas Segitiga 

## Struktur/ hirarki program
<hr>

## Informasi Hak Cipta
<hr>

#### aprizal04/MenghitungluasSegitiga
link : [click me](https://github.com/aprizal04/MenghitungluasSegitiga/tree/main)

## CourceCode
```javascript

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

## Screenshot Sistem
<img src="1.png" />
