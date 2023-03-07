<?php

$data_siswa = [
    [
        "profil" => "th.jpg",
        "panggilan" => "Dzaki",
        "nama" => "M.Dzaki ardiansyah",
        "nis" => "21,5936",
        "no hp" => "0895632506450",
        "jurusan" => "Rekayasa Perangkat lunak",
        "alamat" => "Dekoro GG2 Pekalongan Timur",
        "kata-kata" => "Apapun itu tetaplah bernafas"
    ],
    [
        "profil" => "th2.jpg",
        "panggilan" => "Syifa",
        "nama" => "M.Syifa",
        "nis" => "21,5937",
        "no hp" => "0899873546576",
        "jurusan" => "Rekayasa Perangkat lunak",
        "alamat" => "Pasir sari Pekalongan",
        "kata-kata" => "affaaan tuhhh"
    ],
    [
        "profil" => "th3.jpg",
        "panggilan" => "Sabiq",
        "nama" => "M.Sabiq",
        "nis" => "21,5938",
        "no hp" => "089563250953",
        "jurusan" => "Rekayasa Perangkat lunak",
        "alamat" => "Medono Pekalongan Barat",
        "kata-kata" => "Go to jannah"
    ],
    [
        "profil" => "th4.jpg",
        "panggilan" => "Ilham",
        "nama" => "Ilham kurnia rahman",
        "nis" => "21,5939",
        "no hp" => "08953452506450",
        "jurusan" => "Rekayasa Perangkat lunak",
        "alamat" => "Kendal",
        "kata-kata" => "bwaa bwaa bwaaa bwaaa"
    ],
    [
        "profil" => "th5.jpg",
        "panggilan" => "Hafis",
        "nama" => "Hafis iman santosa",
        "nis" => "21,5940",
        "no hp" => "089556212506450",
        "jurusan" => "Rekayasa Perangkat lunak",
        "alamat" => "Kuripan kidul gg6 Pekalongan",
        "kata-kata" => "Stay cool"
    ],
    [
        "profil" => "th6.jpg",
        "panggilan" => "Zidan",
        "nama" => "Zidan ikroma",
        "nis" => "21,5941",
        "no hp" => "08945322506450",
        "jurusan" => "Rekayasa Perangkat lunak",
        "alamat" => "Kabupaten Pemalang",
        "kata-kata" => "aaayy sleeeww"
    ],
    [
        "profil" => "th7.jpg",
        "panggilan" => "Nuril",
        "nama" => "Achmad nuril anwar",
        "nis" => "21,5942",
        "no hp" => "0823632506450",
        "jurusan" => "Rekayasa Perangkat lunak",
        "alamat" => "Provinsi kep riau",
        "kata-kata" => "Tidak ada yang peduli padamu"
    ],
    [
        "profil" => "th9.jpg",
        "panggilan" => "Alex",
        "nama" => "Alexander yanuar akbar",
        "nis" => "21,5943",
        "no hp" => "089509765506450",
        "jurusan" => "Rekayasa Perangkat lunak",
        "alamat" => "Bojong kab pekalongan",
        "kata-kata" => "Bisnis to bisnis"
    ]
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa Kelas XI RPL 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
        body {
            margin: 100px;
        }

        .kotak {
            width: 250px;
            height: 380px;
            background: linear-gradient(salmon, white, salmon);
            border-radius: 15px;
            box-sizing: border-box;
            overflow: hidden;
        }

        .bulat img {
            width: 100px;
            height: 100px;
            background-position: center;
            border-radius: 50%;
            margin-left: 77px;
            margin-top: -800px;
            z-index: 9999;
            border: 4px solid lightslategray;
        }

        .col-md-3 {
            transition: 0.5s;
        }

        .col-md-3:hover {
            transform: translateY(-12px);
            opacity: 0.9;
        }

        .text-center {
            line-height: 130px;
            font-style: italic;
        }

        .kotak .table {
            margin-top: -30px;
        }




       
    </style>
</head>

<body>

    <div class="container">
        <div class="row">
            <?php foreach ($data_siswa as $murid) : ?>
                <div class="col-md-3 p-5">
                    <div class="kotak">
                        <h3 class="text-center">" <?= $murid["panggilan"]; ?> "</h3>
                        <table class="table table-hover">
                            <tr>
                                <td><strong>Nama</strong></td>
                                <td>:</td>
                                <td><?= $murid["nama"]; ?></td>
                            </tr>
                            <tr>
                                <td><strong>Nis</strong></td>
                                <td>:</td>
                                <td><?= $murid["nis"]; ?></td>
                            </tr>
                            <tr>
                                <td><strong>No Hp</strong></td>
                                <td>:</td>
                                <td><?= $murid["no hp"]; ?></td>
                            </tr>
                            <tr>
                                <td><strong>Jurusan</strong></td>
                                <td>:</td>
                                <td><?= $murid["jurusan"]; ?></td>
                            </tr>
                            <tr>
                                <td><strong>Alamat</strong></td>
                                <td>:</td>
                                <td><?= $murid["alamat"]; ?></td>
                            </tr>
                        </table>
                    </div>
                    <div class="bulat"><img src="<?= $murid["profil"] ?>" alt=""></div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>