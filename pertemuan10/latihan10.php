<?php 
$mahasiswa =
[
  [
    "nama" => "M. Ahdad Alwi",
    "nim" => "2120803046",
    "jurusan" => "SI",
    "email" => "Alwi@gmail.com"
  ],
  [
    "nama" => "Zaky",
    "nim" => "212080304",
    "jurusan" => "SI",
    "email" => "zaky@gmail.com"
  ]
  ];
   ?>

   <!DOCTYPE html>
   <html lang="en">
   <head>
    <title>Document</title>
   </head>
   <body>
    <hi>Daftar Mahasiswa</hi>
    <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
      <li>Nama :<?= $mhs["nama"]; ?></li>
      <li>Nim :<?= $mhs["nim"]; ?></li>
      <li>Jurusan :<?= $mhs["jurusan"]; ?></li>
      <li>Email :<?= $mhs["email"]; ?></li>
    </ul>
    <?php endforeach; ?>
   </body>
   </html>