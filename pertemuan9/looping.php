<?php 
echo "Looping Menggunakan For : </br>";
for ($i = 0; $i <= 10; $i++) {
  echo "<li>Urutan ke-$i</li>";
}

echo "</br>";
echo "Looping Menggunakan While";
$i = 1;
while ($i <= 10) {
  echo "<li>Urutan ke-$i</li>";
  $i++;
}
?>