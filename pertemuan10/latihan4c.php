<?php 

$mahasiswa = [
  "Indonesia" => "D.K.I. Jakarta ",
  "Singapura" => "Singapura",
  "Malaysia" => "Kuala Lumpur",
  "Brunei" => "BAndar Seri Begawan",
  "Thailand" => "Bangkok",
  "Laos" => "Viantle",
  "Filipina" => "Manila",
  "Myanmar" => "Naypyidaw"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Array Associative</title>
</head>
<body>
  <h1>ASEAN dan Ibukota</h1>
  <?php 
  foreach ($mahasiswa as $nrp => $nama) : ?>
  <li><?php echo "$nrp : $nama" ?></li>
  <?php endforeach ?>
</body>
</html>