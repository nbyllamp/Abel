<?php
include("koneksi.php");
$link = mysql_connect("localhost","root","") or die(mysql_error());
$selectDB = mysql_select_db("absensi") or die(mysql_error());
if (!$selectDB){
echo "Koneksi database gagal!!!";
}else{
$sql = "SELECT useradmin FROM admin WHERE useradmin = '" .$_POST['useradmin']. "' and  Password = '" .$_POST['password']. "';";
$query = mysql_query($sql) or die ("Data tidak ditemukan");
$cek = mysql_num_rows($query);

if ($cek <= 0){
	echo "Username / Password anda salah!!! Mohon cek ulang<br>";
	echo "<a href=index.html>try again</a>";
	exit;
}else{
echo $_POST['useradmin'];
header('location:/login_out_CRUD/CRUD/');
}
}


?>