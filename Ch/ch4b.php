<?php 
$siswa=[ ["No", "Nama", "Kelas", "Alamat"],
[1,"Joni Susanto","XII TKR 2","Pemalang"],
[2,"Intan Ayu", "XII TB 1", "Brebes"],
[3,"Salma Karima", "XI RPL 3", "Batang"]
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
        <table border="1" cellspacing="0" cellpadding="10" align="center">
            <!-- <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Alamat</th>
                </tr>
            </thead> -->
            <tbody>
                <?php foreach ($siswa as $data):?>
                <tr>
                    <td><?php echo $data["0"]?></td>
                    <td><?php echo $data["1"]?></td>
                    <td><?php echo $data["2"]?></td>
                    <td><?php echo $data["3"]?></td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
</body>
</html>