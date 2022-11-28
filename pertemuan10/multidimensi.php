<?php 
$mahasiswa = [
  ["Alwi", "12345", "SI", "Alwi@gmail.com"],
  ["Rafky", "21934", "TI", "Rafky@gmail.com"],
  ["Dheni", "12345", "Akutansi", "Dheni@gmail.com"],
  ["Zaky", "43284", "Manajemen", "Zaky@gmail.com"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <hi>Daftar Mahasiswa</hi>
  <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
    <li><?= $mhs[0]; ?></li>
    <li><?= $mhs[1]; ?></li>
    <li><?= $mhs[2]; ?></li>
    <li><?= $mhs[3]; ?></li>
    </ul>
  <?php endforeach; ?>
</body>
</html>