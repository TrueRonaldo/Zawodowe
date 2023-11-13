<!doctype html>
<html lang="pl-PL">
<head>
<meta charset="utf-8" />
<title>Pętla FOREACH - wartości elementów</title>
</head>
<body>

<?php
$tab = [
    1 => 'biały',
    2 => 'czarny',
    3 => 'niebieski',
    4 => 'zielony ',
];

foreach ($tab as $x) {
    print "$x <br/>";
}
?>

</body>

</html>