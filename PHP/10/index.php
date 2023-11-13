<!doctype html>
<html lang="pl">
<head>
<meta charset="utf-8" />
<title>Pętle - while</title>
</head>
<body>
<?php
$x = 1;
while (rand(1, 100) != 21) {
    $x++;
}
echo 'Liczba 21 została wylosowana za ' . $x . ' razem.';
?>
</body>

</html>