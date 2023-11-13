<!doctype html>
<html lang="pl-PL">
<head>
<meta charset="utf-8" />
<title>Formularz osobowy</title>
</head>
<body bgcolor="silver">

<form action="skrypt1.php" method="post">
<h2>Ankieta</h2>
Miasto:<br>
<input type="text" name="miasto">
<br>
<br>

<fieldset>
<legend><b>Płeć</b></legend>
<input type="radio" name="plec" value="k"> kobieta
<input type="radio" name="plec" value="m"> mężczyzna
</fieldset>

<br>

<fieldset>
<legend><b>Zainteresowania</b></legend>
<input type="checkbox" name="hobby[]" value="film"> film <br>
<input type="checkbox" name="hobby[]" value="sport"> sport <br>
<input type="checkbox" name="hobby[]" value="muzyka"> muzyka <br>
<input type="checkbox" name="hobby[]" value="taniec"> taniec <br>
</fieldset>

<br>

<fieldset>
<legend><b>Języki obce</b></legend>
<select name="jezyki[]" multiple size="3">
<option value="angielski">Język angielski</option>
<option value="rosyjski">Język rosyjski</option>
<option value="wloski">Język włoski</option>
<option value="niemiecki">Język niemiecki</option>
<option value="hiszpanski">Język hiszpanski</option>
</select>
</fieldset>

<br>

<input type="submit" value="WYŚLIJ"> &nbsp;
<input type="reset" value="WYCZYŚĆ">
</form>

</body>

</html>