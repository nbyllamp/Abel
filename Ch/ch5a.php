<?php
// Array Associative
// definisinya sama seperti array numerik,kecuali
// Key-nya adalah String yang dibuat sendiri
$siswa = [
    [
        "No" => "No",
        "Nama" => "Nama",
        "Kelas" => "Kelas",
        "Alamat" => "Alamat"
    ],
    [
        "No" => "1",
        "Nama" => "Joni Susanto",
        "Kelas" => "XII TKR 2",
        "Alamat" => "Pemalang" 
    ],
    [
        "No" => "2",
        "Nama" => "Intan Ayu",
        "Kelas" => "XII TB 1",
        "Alamat" => "Brebes"
    ],
    [
        "No" => "3",
        "Nama" => "Salma Karima",
        "Kelas" => "XI RPL 3",
        "Alamat" => "Batang"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <center>
<table border="1" cellspacing="0" cellpadding="10">
    <?php foreach( $siswa as $swa):?>
        <tbody>
            <tr>
                <td><?= $swa["No"];?></td>
                <td><?= $swa["Nama"];?></td>
                <td><?= $swa["Kelas"];?></td>
                <td><?= $swa["Alamat"];?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
  </center>
    <marquee>Woyy</marquee>
</body>
</html>