<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php
    $nilaisiswa = "100";

    if ($nilaisiswa >= "90"){
      $grade = "Sangat Baik";
    } else if ($nilaisiswa >= "80"){
      $grade = "Baik";
    } else if ($nilaisiswa >= "70"){
      $grade = "Cukup";
    } else if ($nilaisiswa >= "50"){
      $grade = "Kurang";
    } else {
      $grade = "Sangat Kurang";
    }

    echo "Nilai kamu adalah $nilaisiswa itu $grade"

    ?>

    <script src="https://replit.com/public/js/replit-badge.js" theme="blue" defer></script> 
  </body>
</html>