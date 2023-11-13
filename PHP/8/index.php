<!doctype html>
<html lang="pl">
<head>
<meta charset="utf-8" />
<title>Warunki - if, else, elseif</title>
</head>
<body>
<?php
//podanie długości boków trójkąta
$a = 5;
$b = 4;
$c = 4;
//porównanie boków
if ($a == $b && $b == $c) {
    print 'Trójkąt o bokach: ' . $a . ', ' . $b . ' i ' . $c . ' jest równoboczny';
} elseif ($a == $b || $a == $c || ($b = $c)) {
    print 'Trójkąt o bokach: ' . $a . ', ' . $b . ' i ' . $c . ' jest równoramienny';
} else {
    print 'Trójkąt o bokach: ' . $a . ', ' . $b . ' i ' . $c . ' jest róznoboczny';
}
?>
</body>

</html>