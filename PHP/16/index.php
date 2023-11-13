<!doctype html>
<html lang="pl-PL">
<head>
<meta charset="utf-8" />
<title>Plik z dodatkowym wywołaniem</title>
</head>
<body>

<?php
echo 'Zawartość pliku index.php:<br/>';
echo '**********************<br/>';
echo 'Zawartość pliku plik2.php:<br/>';
include 'plik2.php';
znaki("$", 20);
znaki('X', 4);
?>
</body>

</html>