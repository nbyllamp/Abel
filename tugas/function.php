<?php
    // echo date("l, d-M-Y");

    // echo date("d F Y", time()-60*60*24*24);

    $namaMotor = "Honda Vario 125cc 2020";

    if ( $namaMotor == "Yamaha Mio 2019") {
        $harga = 16000000;
    } else if ( $namaMotor == "Yamaha Jupiter MX 2014" ) {
        $harga = 11000000;
    } else if ( $namaMotor == "Honda Vario 125cc 2020" ) {
        $harga = 18000000;
    } else {
        $harga = "Motor ini tidak dijual";
    }
    echo ("harga motor $namaMotor adalah $harga")
?>