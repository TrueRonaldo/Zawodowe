<!doctype html>
<html lang="pl-PL">
<head>
<meta charset="utf-8" />
<title>Test danych z formularza</title>
</head>
<body>

<form action="" method="post">
	<h5>Test podanej wartości</h5>
	Wpisz wartość: <input type="text" name="wartosc">
	
<br><br>

	<input type="submit" value="Sprawdź"> 
	
<br><br>
</form>

<?php if (!empty($_POST['wartosc'])) {
    if (is_numeric($_POST['wartosc'])) {
        echo $_POST['wartosc'] . ' jest liczbą';
    } else {
        echo $_POST['wartosc'] . ' nie jest liczbą';
    }
} else {
    echo 'Wpisz coś!';
} ?>

</body>

</html>