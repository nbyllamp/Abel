<?php
// cek apakah tombol submit sudah tekan atau belum
if( isset($_POST["submit"]) ){
    // cek username & password
    if( $_POST["username"] == "admin" && $_POST["password"] == "yntkts" ) {
// jika benar, redirect ke halaman admin
    header("Location: index.html");
    exit;
} else {
// jika salah, tampilkan pesan kesalahan
    $error = true;
}
}
 ?>
<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <style type="text/css">
      body {
        margin: 0;
        padding: 0;
        background: #34495e;
      }
      .box {
        border: 3px solid;
        width: 300px;
        padding: 40px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: #191919;
        border-radius: 20px;
      }
      .box h1 {
        color: white;
        text-align: center;
        text-transform: uppercase;
        font-weight: 500;
      }
      .box input[type="text"],
      .box input[type="password"] {
        border: 0;
        background: none;
        display: block;
        margin: 20px auto;
        text-align: center;
        border: 2px solid #3498db;
        padding: 14px 10px;
        width: 200px;
        outline: none;
        color: white;
        border-radius: 24px;
        transition: 0.25s;
      }
      .box input[type="text"]:focus,
      .box input[type="password"]:focus {
        width: 280px;
        border-color: #2ecc71;
      }
      .box input[type="submit"] {
        border: 0;
        background: none;
        display: block;
        margin: 20px auto;
        text-align: center;
        border: 2px solid #2ecc71;
        padding: 14px 40px;
        outline: none;
        color: white;
        border-radius: 24px;
        transition: 0.25s;
        cursor: pointer;
      }
      .box input[type="submit"]:hover {
        background: #2ecc71;
      }
    </style>
  </head>
  <body>
    <div class="box">
      <h1>login</h1>
      <form method="post" action="">
        <input type="text" name="" placeholder="username" />
        <input type="password" name="" placeholder="password" />
        <a href="index.html"><input type="submit" name="" /></a>
      </form>
    </div>
  </body>
</html>
