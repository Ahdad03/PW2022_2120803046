<?php
require 'functions.php';
//cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {


  // cek apakah data berhasil di tambahkan atau tidak
  if (tambah($_POST) > 0) {
    echo "
         <script> 
         alert('data berhasil ditambahkan');
         document.location.href = 'index.php';
         </script> 
    ";
  } else {
    echo "
         <script> 
         alert('data berhasil ditambahkan');
         document.location.href = 'index.php';
         </script> 
    ";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <title>Tambah data Mahasiswa</title>
</head>

<body>
  <h1>Tambah data Mahasiswa</h1>

  <form action="" method="post" enctype="multipart/form-data">
    <ul>
      <li>
        <label for="NIM">NIM : </label>
        <input type="text" name="NIM" id="NIM">
      </li>
      <li>
        <label for="Nama">Nama : </label>
        <input type="text" name="Nama" id="Nama">
      </li>
      <li>
        <label for="Email">Email :</label>
        <input type="text" name="Email" id="Email">
      </li>
      <li>
        <label for="Jurusan">Jurusan : </label>
        <input type="text" name="Jurusan" id="Jurusan">
      </li>
      <li>
        <label for="Gambar">Gambar : </label>
        <input type="file" name="Gambar" id="Gambar">
      </li>
      <li>
        <button type="submit" name="submit">Tambah Data!</button>
      </li>
    </ul>


  </form>

</body>

</html>