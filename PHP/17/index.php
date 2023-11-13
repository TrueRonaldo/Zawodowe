<!doctype html>
<html lang="pl-PL">
<head>
<meta charset="utf-8" />
<title>Plik z dodatkowym wywołaniem</title>
</head>
<body>

<?php
//Utworzenie tablicy z losowymi elementami
echo '<h5>Tablica pierwotna</h5>';
for ($i = 0; $i < 10; $i++) {
    $tabl[$i] = rand(1, 100);
    echo $tabl[$i];
    echo ' ';
}

echo '<h5>Tablica posortowana rosnąco</h5>';
sort($tabl);
for ($i = 0; $i < 10; $i++) {
    echo $tabl[$i];
    echo ' ';
}

echo '<h5>Tablica posortowana malejąco</h5>';
rsort($tabl);
for ($i = 0; $i < 10; $i++) {
    echo $tabl[$i];
    echo ' ';
}
?>
</body>

</html>