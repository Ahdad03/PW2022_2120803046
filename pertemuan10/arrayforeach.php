<?php 
$nama = ["Ahmad", "Budi", "Chika", "Dhini", "Erwin"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Looping for Array</title>
</head>
<body>
  <?php 
  
  foreach ($nama as $absen) {
    echo "<li>$absen</li>";
  }
  ?>
  
</body>
</html>