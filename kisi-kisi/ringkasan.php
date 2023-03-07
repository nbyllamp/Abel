1.)<?php 
$jam_kerja = 8;
if ($jam_kerja>9){
	echo "mendapat gaji lembur";
} else {
	echo "tidak mendapat gaji lembur";
}
?><br>
2.)<?php 
$nasabah = "kelas2";
if($nasabah == "vip"){
    echo "atm, buku tabungan,  akses M-Banking";
} else if ($nasabah == "kelas1"){
    echo "atm, akses M-Banking dan buku tabungan ";
} else if ($nasabah == "kelas2"){
    echo "kartu atm dan buku tabungan";
}
?><br>
3.)<?php 
for($a = 21; $a<=30; $a+=1) {
    echo "$a ,";
  }
?><br>
4.)<?php 
for($a = 3; $a<=60; $a+=3) {
    echo "$a, ";
  }
?><br>
5.)<?php 
$perusahaan = array("Toyota", "Daihatsu", "Honda", "Ford", "Ferari");
echo "Perusahaan " .$perusahaan[4];
echo "<br>";
echo "Perusahaan " .$perusahaan[1], " dan Perusahaan " .$perusahaan[2];
?>
