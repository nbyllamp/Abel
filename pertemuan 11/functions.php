<?php 
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ){
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data) {
    global $conn;

    $nama = htmlspecialchars($data["nama"]);
    $nisn = htmlspecialchars($data["nisn"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $email = htmlspecialchars($data["email"]);
    $gambar = htmlspecialchars($data["gambar"]);
    $alamat = htmlspecialchars($data["alamat"]);

    $query = "INSERT INTO mahasiswa
                VALUES
                ('', '$nama', '$nisn', '$jurusan', '$email', '$gambar', '$alamat')
            ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");

    return mysqli_affected_rows($conn);
}
function ubah($data) {
    global $conn;

    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $nisn = htmlspecialchars($data["nisn"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $email = htmlspecialchars($data["email"]);
    $gambar = htmlspecialchars($data["gambar"]);
    $alamat = htmlspecialchars($data["alamat"]);

    $query = "UPDATE mahasiswa SET
                nisn = '$nisn',
                nama = '$nama',
                jurusan = '$jurusan',
                email = '$email',
                gambar = '$gambar',
                alamat = '$alamat'
            WHERE id = $id
                ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function cari($keyword) {
    $query = "SELECT * FROM mahasiswa
                WHERE
            nama LIKE  '%$keyword%' OR
            nisn LIKE '%$keyword%' OR
            email LIKE '%$keyword%' OR
            jurusan LIKE '%$keyword%' OR
            alamat LIKE '%$keyword%' 
            ";
    
    return query($query);
}

?>