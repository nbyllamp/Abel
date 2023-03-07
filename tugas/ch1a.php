<?php 
$nama_motor =  "Honda Vario 125cc 2020";

if( $nama_motor == "Yamaha mio 2019") {
    $harga = 16000000;
}else if( $nama_motor == "Yamaha Jupiter MX 2014") {
    $harga = 11000000;
}else if( $nama_motor == "Honda Vario 125cc 2020") {
    $harga = 18000000;
}else if( $nama_motor == "Honda Supra 125 2015") {
    $harga = 10000000;
}else if( $nama_motor == "Honda PCX 150cc 2018") {
    $harga = 23000000;
}else {
    $harga = "Motor tidak diujual";
}

echo ("Harga motor ".$nama_motor." adalah ".$harga);

?>