<?php 
$nasabah = "kelas2";
if($nasabah == "vip"){
    echo "atm, buku tabungan,  akses M-Banking";
} else if ($nasabah == "kelas1"){
    echo "atm, akses M-Banking dan buku tabungan ";
} else if ($nasabah == "kelas2"){
    echo "kartu atm dan buku tabungan";
}
?>