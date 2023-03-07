<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge 1 PHP</title>
</head>
<body>
        <?php

            $namaMotor = "motor vario 125cc 2020";

            if ( $namaMotor == "Yamaha mio 2019"){
                $harga ="16.000.000";
            }else if ( $namaMotor == "Yamaha Jupiter MX 2014"){
                $harga = "11.000.000";
            }else if ( $namaMotor = "Honda Vario 125cc 2020" ){
                $harga = "18.000.000";
            }else if ( $namaMotor == "Honda Supra 125 2015" ){
                $harga = "10.000.000";
            }else if ( $namaMotor == "Honda PCX 150cc 2018") {
                $harga = "23.000.000";
            }else {
                $harga == "Motor ini tidak dijual di showroom kami";
            }
            echo "Harga motor $namaMotor adalah $harga";
        ?>
</body>
</html>