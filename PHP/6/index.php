<!doctype html>
<html lang="pl">
<head>
<meta charset="utf-8" />
<title>Stałe i zmienne</title>
</head>
<body>
<?php
define('rb', '2023'); //rok bierzący
define('ru', '1940'); //rok urodzenia
define('i_n', 'Chuck Norris'); //rok urodzenia

$w = rb - ru; //wiek
$wz = 178; //wzrost

echo '<u>Osoba:</u> <b>' . i_n . '</b><br/>';
echo '<u>Urodzony w:</u> <b>' . ru . '</b><br/>';
echo '<u>Lat:</u> <b>' . $w . '</b><br/>';
echo '<u>Wzrost:</u> <b>' . $wz . '</b><br/>';
?>
</body>

</html>