<?php
setcookie("username","",time()-3600);
setcookie("NamaLengkap","",time()-3600);
echo "<h1>Cookies berhasil dihapus</h1>";
echo "<h2>Klik <a href='cookie01.php'>disini </a>untuk penciptaan

cookies</h2>";
echo "<h2>Klik <a href='cookies02.php'>disini </a> untuk pemeriksaan
cookies</h2>";
?>