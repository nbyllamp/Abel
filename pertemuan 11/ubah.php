<?php 
require 'functions.php';

// ambil data di URL
$id = $_GET["id"];
var_dump($id);

// query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];
var_dump($mhs["nisn"]);
// cek apakah tombol sumbit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
    

    // query insert data
    

    // cek apakah data berhasil ditubah atau tidak
    if( ubah($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil diubah!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal ditubah!');
                document.location.href = 'index.php';
            </script>
    ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Siswa</title>
</head>
<body>
    <h1>Ubah Data Siswa</h1>

    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $mhs["id"];?>">
        <ul>
            <li>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" id="nama"
                required value="<?= $mhs["nama"];?>">
            </li>
            <li>
                <label for="nisn">Nisn :</label>
                <input type="text" name="nisn" id="nisn" required value="<?= $mhs["nisn"];?>">
            </li>
            <li>
                <label for="jurusan">Jurusan :</label>
                <input type="text" name="jurusan" id="jurusan" 
                required value="<?= $mhs["jurusan"];?>">
            </li>
            <li>
                <label for="email">Email :</label>
                <input type="text" name="email" id="email"
                required value="<?= $mhs["email"];?>">
            </li>
            
            <li>
                <label for="gambar">Gambar :</label>
                <input type="text" name="gambar" id="gambar"
                required value="<?= $mhs["gambar"];?>">
            </li>
            <li>
                <label for="alamat">Alamat :</label>
                <input type="text" name="alamat" id="alamat"
                required value="<?= $mhs["alamat"];?>">
            </li>
            <li>
                <button type="submit" name="submit">Ubah Data!</button>
            </li>
        </ul>
        
    </form>
</body>
</html>