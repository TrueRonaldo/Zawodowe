<!doctype html>
<html lang="pl-PL">
<head>
<meta charset="utf-8" />
<title>Łańcuchy - 2</title>
</head>
<body>
<form method="post" action="">
Twój znak: <input type="text" name="znak" size="1">
<br/>
<br/>
Ilość znaków: <input type="text" name="liczba" size="1">
<br/><br/>
<input type="submit" value="Wypisz"><br/><br/>
</form>
<?php
function lancuch()
{
    @$z = $_POST['znak'];
    @$n = $_POST['liczba'];
    for ($i = 1; $i <= $n; $i++) {
        echo $z;
    }
}
lancuch();
?>
</body>

</html>