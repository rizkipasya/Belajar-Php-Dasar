<?php
$mahasiswa = [
    ["Rizki Pasya R", "05534542", "SIJA", "rizkipasya6@gmail.com"], 
    ["Annisa Nur", "05538888", "SIJA", "bmbyk@gmail.com"],
    ["Arifah Nur", "05564536", "SIJA", "arfhnfh@gmail.com"]
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
        <li>Nama : <?= $mhs[0]; ?></li>
        <li>NRP : <?= $mhs[1]; ?></li>
        <li>Jurusan : <?= $mhs[2]; ?></li>
        <li>Email : <?= $mhs[3]; ?></li>
    </ul>
<?php endforeach ?>    
</body>
</html>