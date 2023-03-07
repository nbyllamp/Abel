<?php
$nama_siswa=[ 
["no","nama","kelas","alamat"],
[1,"Joni Susanto","XII TKR 2","Pemalang"],
[2,"Intan Ayu","XII TB 1","Brebes"],
[3,"Slma Karimah","XI RPL 3","Batang"]
];
?>
<html>
    <head>
        <title>Latihan 4b</title>
    </head>
<body>
    <table border="1" cellspacing="0" cellpadding="10">
    <?php foreach( $nama_siswa as $swa):?>
        <tbody>
            <tr>
                <td><?php echo $swa["0"]?></td>
                <td><?php echo $swa["1"]?></td>
                <td><?php echo $swa["2"]?></td>
                <td><?php echo $swa["3"]?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>