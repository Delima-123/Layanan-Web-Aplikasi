<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Layanan Aplikasi & Web</title>
  <style>h1{
    background-color : pink;
  }
 h3{
  background-color : salmon;
 }
  </style>
</head>
<body> 
  <h1><blockquote><b><i>Mengubah String menjadi Bit serta Memutar dan Menggabungkan Bit</i></b></blockquote></h1>
  <h3><blockquote><img src="foto/Screenshot_20240522_014744_Bg Eraser.jpg" alt="100px" width= "100px"> 
<br><br><b><i>Nama : Delima<br> Nim : 2022101011<br> Prodi : Teknik Informatika<br>  Mata Kuliah Layanan Web dan Aplikasi<br> Tugas : 3 (Tiga)<br>
 Dosen Pengampu Mata Kuliah : Marwa Halim, M.TI</i></b></blockquote>
<blockquote><b><?php 
$nama = "Delima";
echo"Inputan String : $nama<br>";
$ubah = ord($nama);
echo "Hasil Pengubahan : $ubah<br>";
$bit = bindec($ubah);
echo "Bit Ubah : $bit<br>";
$geser = $ubah << 3;
echo "Pergeseran : $geser<br>";
$gabungKanan = $geser << 1 << 3 << 5 << 2 << 4 << 6;
$bin1 = decbin($gabungKanan);
$gabungKiri = $geser >> 1 >>3 >> 5 >> 2 >> 4 >> 6;
$bin2 = decbin($gabungKiri);
$gabungSemua = $gabungKanan . $gabungKiri;
$bin3 = decbin($gabungSemua);
echo "Gabung Kanan : $gabungKanan<br>";
echo "Biner Gabung kanan : $bin1<br>";
echo "Gabung Kiri : $gabungKiri<br>";
echo "Biner Gabung Kiri : $bin2<br>";
echo "Gabung Semua : $gabungSemua<br>";
echo " Biner Gabung Semua : $bin3<br>";
$Kembali = bindec($gabungSemua);
echo " Kembali Desimal: $Kembali<br>";
$bin4 = decbin($Kembali);
echo "Kembali Biner : $bin4<br>";
?></b></blockquote></h3>
</body>
</html>