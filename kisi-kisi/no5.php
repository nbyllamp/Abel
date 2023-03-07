<?php 
$perusahaan = ["Toyota", "Daihatsu", "Honda" , "Ford", "Ferari"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perusahaan Motor</title>
</head>
<body>
    <h2>Daftar Perusahaan Motor</h2>

    <ul>
        <?php foreach( $perusahaan as $prshn ) : ?>
            <li><?php echo $prshn["Ferari"] ?></li>
            <li><?php echo $prshn["Daihatsu"] ?></li>
            <li><?php echo $prshn["Honda"] ?></li>

        <?php endforeach; ?>
    </ul>
</body>
</html>