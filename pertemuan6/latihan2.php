<?php
// $mahasiswa = [
//     ["Rizki Pasya R", "05534542", "SIJA", "rizkipasya6@gmail.com"], 
//     ["Annisa Nur", "05538888", "SIJA", "bmbyk@gmail.com"],
//     ["Arifah Nur", "05564536", "SIJA", "arfhnfh@gmail.com"]
// ];

//Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
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
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

<?php foreach( $mahasiswa as $mhs) : ?>

    <ul>
        <li> 
            <img src="img/<?= $mhs["gambar"]; ?>">
        </li>
        <li>Nama : <?= $mhs["nama"]; ?></li>
        <li>NRP : <?= $mhs["nrp"]; ?></li>
        <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
        <li>Email : <?= $mhs["email"]; ?></li>
    </ul>
<?php endforeach ?>    
</body>
</html>