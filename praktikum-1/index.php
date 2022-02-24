<?php
// menampilkan output
echo "Hello, Fiki";

// membuat variable user
// $namaVariable = isiDatanya;
$nama = "Fiki Alamsyah";
$umur = 21;
$berat = 42.5;


// menampilkan variable yang telah dibuat
echo "<br/>nama : " . $nama;
echo "<br/>umur : " . $umur;
echo "<br/>berat: " . $berat;

// membuat variable sistem
echo "<br/>Dokumen Root : " . $_SERVER["DOCUMENT_ROOT"];
echo '<br/>Nama File : ' . $_SERVER["PHP_SELF"];

// membuat variable konstant
// define(namaVariable, isiVariable)
define("PHI", 3.14);
define("SURNAME", "fiki");

$luas = PHI * 8 * 8;
echo "<br/>luas lingkaran : ". $luas;