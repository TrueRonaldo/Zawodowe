<!doctype html>
<html lang="pl-PL">
<head>
<meta charset="utf-8" />
<title>Analiza danych z formularza</title>
</head>
<body>
<?php
print '<b>Dane z ankiety</b><br><br>';
print '<b>Miasto: </b>' . $_POST['miasto'] . '<br><br>';
print '<b>Płeć: </b>';
if ($_POST['plec'] == 'k') {
    print 'Kobieta';
} else {
    print 'Mężczyzna';
}

print '<br><br><b>Zainteresowania: </b>';
for ($i = 0; $i < 4; $i++) {
    if (!empty($_POST['hobby'][$i])) {
        print $_POST['hobby'][$i] . ', ';
    }
}

print '<br><br><b>Języki obce: </b>';
echo '<ul>';
if (!empty($_POST['jezyki'])) {
    foreach ($_POST['jezyki'] as $wartosc) {
        echo "<li>$wartosc</li>";
    }
    echo '</ul>';
} else {
    echo 'Nie znam żadnego języka obcego.';
}
?>
<br>
<a href="index.php"><button>WSTECZ</button></a>
</body>

</html>