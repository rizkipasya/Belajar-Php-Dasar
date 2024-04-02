<?php
// $_GET
$mahasiswa = [
    [
        "nrp" => "05534542",
        "nama" => "Rizki Pasya R", 
        "email" => "rizkipasya6@gmail.com",
        "jurusan" => "SIJA",
        "gambar" => "pasy.jpg"
     ],
     [
        "nama" => "Lolly Pipop", 
        "nrp" => "05537878",
        "email" => "lolipop6@gmail.com",
        "jurusan" => "SIJA",
        "gambar" => "lolly1.jpg"
     ]          
     ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
   <h1>Dafatar Mahasiswa</h1> 
   <ul>
   <?php foreach ( $mahasiswa as $mhs ) : ?>
       <li>
        <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
        </li>
    <?php endforeach; ?>
   </ul>
</body>
</html>