<?php 
require 'functions.php';
// koneksi ke DBMS
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// cek apakah tombol sumbit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
    // ambil data dari tiap elemen dalam form
    $nama = $_POST["nama"];
    $nisn = $_POST["nisn"];
    $jurusan = $_POST["jurusan"];
    $email = $_POST["email"];
    $gambar = $_POST["gambar"];
    $alamat = $_POST["alamat"];
    

    // query insert data
    
    // cek apakah data berhasil ditambahkan atau tidak
    if( tambah($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil ditambahkan!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal ditambahkan!');
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
    <title>Tambah Data Siswa</title>
</head>
<body>
    <h1>Tambah Data Siswa</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" id="nama">
            </li>
            <li>
                <label for="nisn">Nisn :</label>
                <input type="text" name="nisn" id="nisn" required>
            </li>
            <li>
                <label for="jurusan">Jurusan :</label>
                <input type="text" name="jurusan" id="jurusan" >
            </li>
            <li>
                <label for="email">Email :</label>
                <input type="text" name="email" id="email">
            </li>
            
            <li>
                <label for="gambar">Gambar :</label>
                <input type="text" name="gambar" id="gambar">
            </li>
            <li>
                <label for="alamat">Alamat :</label>
                <input type="text" name="alamat" id="alamat">
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data!</button>
            </li>
        </ul>
        
    </form>
</body>
</html>