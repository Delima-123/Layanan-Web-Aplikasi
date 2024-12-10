<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Delima</title>
    <style>
         h1{
        background-color : green;
    }
    p{
        background-color: salmon;
    }
    </style>
   
</head>
<body>
    <h1><blockquote><?php
    echo "Tugas Rekayasa Perangkat Lunak Delima";
    ?></blockquote></h1>
    <p><?php
    echo "Tugas Uts<br>";
    echo " Nama : Delima<br>";
    echo " Nim  :  2022101011<br>";
    echo " Prodi : Teknik Informatika<br>";
    echo " Mata Kuliah : Rekayasa Perangkat Lunak<br><br>";

    //inisialisasi variabel
    $D = 68; $E = 69; $L = 76;
    $I = 73; $M = 77; $A = 65;
     
    // menampilkan variabel 
    echo " D : $D<br>";
    echo " E : $E<br>";
    echo " L : $L<br>";
    echo " I : $I<br>";
    echo " M : $M<br>";
    echo " A : $A<br>";
    
    //operasi bitwise atau bines
    echo " $D & $E<br>";
    $hasil = $D & $E ;
    echo "1. Operasi And : $hasil<br><br>";
    echo " $L | $I<br>";
    $hasil = $L | $I;
    echo "2. OperasiOr : $hasil<br><br>";
    echo " $M ^ $A<br>";
    $hasil = $M ^ $A;
    echo "3. Operasi Xor : $hasil<br><br>";
    echo " ~$D<br>";
    $hasil = ~$D ;
    echo "4. Operasi Not : $hasil<br><br>";
    echo " $D << $E<br>";
    $hasil = $D << $E;
    echo "5. Operasi Shift Left : $hasil<br><br>";
    echo " $L >> $I<br>";
    $hasil = $L >> $I;
    echo "6. Operasi Shift: $hasil<br><br>";
    ?></p>
    
</body>
</html>