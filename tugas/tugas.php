<?php 
    $siswa = [
        [
            "no" => "1",
            "nisn" => "21,5975",
            "nama" => "Nabiella Meiliana P.",
            "jurusan" => "Rekayasa Perangkat Lunak",
            "email" => "nabiellameilianaputri1956@gmail.com",
            "alamat" => "Medono, Pekalongan"
        ],
        [
            "no" => "2",
            "nisn" => "21,5934",
            "nama" => "Ikfina Wafa Zuhrotun N.",
            "jurusan" => "Rekayasa Perangkat Lunak",
            "email" => "ikfinaw@gmail.com",
            "alamat" => "Bantarbolang, Pemalang"
        ],
        [
            "no" => "3",
            "nisn" => "21,5946",
            "nama" => "Nurul Hamidah",
            "jurusan" => "Rekayasa Perangkat Lunak",
            "email" => "nurulhmd@gmail.com",
            "alamat" => "Petarukan, Pemalang"
        ],
        [
            "no" => "4",
            "nisn" => "21,5943",
            "nama" => "Fina Riyani",
            "jurusan" => "Rekayasa Perangkat Lunak",
            "email" => "finaryni@gmail.com",
            "alamat" => "Bodeh, Pemalang"
        ],
        [
            "no" => "5",
            "nisn" => "21,5987",
            "nama" => "Aisyah Meilani",
            "jurusan" => "Rekayasa Perangkat Lunak",
            "email" => "aisyahmeilani@gmail.com",
            "alamat" => "Bodeh, Pemalang"
        ]
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Siswa</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        h1,h4 {
            text-align: center;
        }
        table{
            width:20px;
            height:40px;
            border: 1px solid black;
            border:none;
        }
        table,tr, td{
            border:none;
            background-color: #9A9A9A;
        }
        
    </style>
</head>
<body>
    <div class="header">
<h1>Daftar nama Siswa</h1>
<br>
<h4><?php echo date("l, d-M-Y"); ?></h4>
<br>
</div>
<div class="container">
    <div class="box">
<table class="table table-hover" border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Nisn</th>
        <th>Jurusan</th>
        <th>Email</th>
        <th>Alamat</th>
    </tr>
    <?php $i = 1; ?>
    <?php foreach( $siswa as $sw): ?>
    <tr>
        <td><?= $sw["no"]; ?></td>
        <td><?= $sw["nama"];?></td>
        <td><?= $sw["nisn"];?></td>
        <td><?= $sw["jurusan"];?></td>
        <td><?= $sw["email"];?></td>
        <td><?= $sw["alamat"];?></td>
    </tr>
    <?php  $i++; ?>
    <?php endforeach; ?>
</div>
</table>
</div>
</body>
</html>