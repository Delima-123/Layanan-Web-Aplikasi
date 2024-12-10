<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enkripsi</title>
    <style>
        body{
            background-color: yellow;
        }
    </style>
</head>
<body>
    <h1><blockquote><?= "Keamanan Data Enkripsi"?></blockquote></h1>
    <blockquote><img src="foto/Screenshot_20240522_014744_Bg Eraser (1).jpg" 
    alt="100px" width="100px"></blockquote>
    <p><blockquote><b>Nama : Delima<br> Nim : 2022101011<br> Prodi : Teknik Informatika
<br> MataKuliah : Layanan Web dan Aplikasii<br> Tugas : 02(Dua)</b></blockquote>
<br> <i>Enkripsi : proses mengubah data yang telah dibuat tidak dapat 
    dibaca melalui enkripsi kembali ke bentuk yang tidak di deskripsikan.</i></p><br>
    <h4>
        <blockquote>
            <?php echo " Enkripsi dengan Aes-256-cbc<br>";
            function encrypt($plainText, $key){
                $iv = openssl_random_psecoude_bytes(16);
                $cipher = openssl_encrypt($plainText, 'Aes-256-CBC', $key, 0, $iv);
                return base64_encode($iv. $cipher);
            }
            $plainText = "Teks yang ingin dienkripsi";
            $key = "Delima";
            $encrytedText = encrypt($plainText, $key);
            echo " $key: Delima<br>";
            echo "Teks terenkripsi:  ". $encryptedText. "\n";
            ?>
        </blockquote>
    </h4>
</body>
</html>