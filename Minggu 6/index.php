<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tugas 6</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
  
  <table align="center">
    <form action="" method="POST">
        <tr align ="center">
            <td><h2><b>Konversi Romawi</b></h2></td>
        </tr>

        <tr align ="center">
            <td><input type="number" name="Angka" size="50" placeholder="Tulis Angka"></td>
        </tr>

        <tr align="center">
        <td><button class="button" role="button">Konversi</button></td>
        </tr>
        
        <tr align ="center">
            <td> <h2>HURUF ROMAWI : <?php error_reporting(0); echo BilanganRomawi($_POST["Angka"]); ?><br></h2></td>
        </tr>
    </form>
  </table>
</body>

<?php
function BilanganRomawi($Angka) {
    $dataAngka = intval($Angka);
    $root = '';
    
    $array = array(
        'M' => 1000, 'CM' => 900, 'D' => 500, 'CD' => 400, 'C' => 100, 'XC' => 90, 
        'L' => 50, 'XL' => 40, 'X' => 10, 'IX' => 9, 'V' => 5, 'IV' => 4, 'I' => 1
    );
    
    foreach($array as $romawi => $value) {
    $matches = intval($Angka/$value);
    $root .= str_repeat($romawi,$matches);
    $Angka = $Angka % $value;
    
    }
    return $root;
}

?>
</html>
