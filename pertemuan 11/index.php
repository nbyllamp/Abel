<?php 
require 'functions.php';

$mahasiswa = query("SELECT * FROM mahasiswa");

// tombol cari ditekan
if( isset($_POST["cari"]) ) {
    $mahasiswa = cari($_POST["keyword"]);
}


// ambil data dari mahasiswa / query data mahasiswa
// $result = mysqli_query($conn, "SELECT * FROM mahasiswa");
// if( !$result ) {
//     echo mysqli_error($conn);
// }

// ambil data (fetch) siswa dari object result
// mysqli_fetch_row() // mengembalikan array numerik(angka)
// mysqli_fetch_assoc() // mengembalikan array associative
// mysqli_fetch_array() // mengembalikan keduanya
// mysqli_fetch_object()

// while( $sw = mysqli_fetch_assoc($result) ) {
//     var_dump($sw["Nama"]);
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Nama Siswa</h1>
    <a href="tambah.php">Tambah data siswa</a>
    <br><br>
    <form action="" method="post">
        <input type="text" name="keyword" autofocus placeholder="Cari data mahasiswa...." autocomplete="off">
        <button type="submit" name="cari">Cari!</button>
    </form>
    <br>
    <table border="1" cellpadding="10" cellspacing="0">

        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Nisn</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Email</th>
            <th>Alamat</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach( $mahasiswa as $row) :?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="ubah.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin dek?');">Ubah</a> |
                <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin dek?');">Hapus</a>
            </td>
            <td><img src="../img/<?= $row["gambar"]; ?>"
            width="50"></td>
            <td><?= $row["nisn"];?></td>
            <td><?= $row["nama"];?></td>
            <td><?= $row["jurusan"];?></td>
            <td><?= $row["email"];?></td>
            <td><?= $row["alamat"];?></td>
        </tr>
        <?php  $i++; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>