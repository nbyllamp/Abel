<?php
// Variale Scope / Lingkup Variabel

// $x = 50;

// function tampilX() {
//     global $x;
//     echo $x;

// }

// tampilX();

// SUPERGLOBALS
// variable global milik php
// merupakan array associative
// echo $_SERVER["SERVER_NAME"];

// $_GET
// Cara menambahkan variable dengan simpel caranya
// paling ujung link .php dikasih ? lalu nama 
// $_GET["nama"] = "Nabiella Meiliana";
// $_GET["nisn"] = "21,5975";
// var_dump($_GET)
$siswa = [
    [
        "nisn" => "21,5975",
        "nama" => "Nabiella Meiliana P.",
        "jurusan" => "Rekayasa Perangkat Lunak",
        "email" => "nabiellameilianaputri1956@gmail.com"
    ],
    [
        "nisn" => "21,5934",
        "nama" => "Ikfina Wafa Zuhrotun N.",
        "jurusan" => "Rekayasa Perangkat Lunak",
        "email" => "ikfinaw@gmail.com"
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
    <h1>Daftar Siswa SMK Syafi'i Akrom</h1>
    <?php foreach( $siswa as $sw) : ?>
    <ul>
        <li>
            <a href="latihan2.php?nama=<?= $sw["nama"]; ?>&nisn=<?= $sw["nisn"]; ?>&email=<?= $sw["email"]; ?>&jurusan=<?= $sw["jurusan"]; ?>"><?= $sw["nama"]; ?>
        </a>
        </li>
    </ul>
    <?php endforeach;?>
</body>
</html>