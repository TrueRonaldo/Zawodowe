<!doctype html>
<html lang="pl-PL">
<head>
<meta charset="utf-8" />
<title>Pętla FOREACH - wartości elementów z kluczami</title>
</head>
<body>

<?php
$tab = [
    1 => 'biały',
    2 => 'czarny',
    3 => 'niebieski',
    4 => 'zielony ',
];

foreach ($tab as $kl => $x) {
    print "[$kl] = $x <br>";
}
?>

</body>

</html>