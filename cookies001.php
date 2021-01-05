<?php
$value = "Agils";
$value2 = "sap";
setcookie("username", $value);
setcookie("NamaLengkap", $value2, time()+3600); //Expire in 1 hour
echo "<h1>Ini halaman pengesetan cookie</h1>";
echo "<h2><a href='cookies002.php'>Klik disini untuk pemeriksaan cookie</a>";
?>