<!doctype html>
<html lang="pl">
<head>
<meta charset="utf-8" />
<title>Pętle - do while</title>
</head>
<body>
<?php
$suma = 0;
$i = 0;
do {
    $i++;
    $x = rand(1, 20);
    $suma = $suma + $x;
    echo $x;
    if ($suma < 100) {
        print ' + ';
    }
} while ($suma < 100);
echo ' = ' . $suma;
echo '<br/> Liczba składnikó	 sumy wynosi: ' . $i;
?>
</body>

</html>