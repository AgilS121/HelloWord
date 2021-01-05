
<?php
if(isset($_COOKIE['username']))
{
echo "<h1>Cookie yang bernama username ada Isinya " .
$_COOKIE['username'] . "</h1>";
}
else
{
echo "<h1>Cookie yang bernama username TIDAK ADA </h1>";
}
if(isset($_COOKIE['NamaLengkap']))
{
echo "<h1>Cookie yang bernama NamaLengkap ada. Isinya " .
$_COOKIE['NamaLengkap'] . "<h1>";
}
else
{
echo "<h1>Cookie yang bernama NamaLengkap TIDAK ADA</h1>";
}
echo "<h2>Klik <a href='cookies001.php'>disini </a> untuk penciptaan
cookies</h2>";
echo "<h2>Klik <a href='cookies003.php'>disini </a> untuk penghapusan
cookies</h1>";
?>