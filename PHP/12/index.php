<!doctype html>
<html lang="pl">
<head>
<meta charset="utf-8" />
<title>Pole i obwód koła - post</title>
</head>
<body>
<form method="post" action="">
<h2>Pole i obwód koła o promieniu R.</h2>
Podaj długość promienia(cm):<input type="text" name="promien" size="3">
<br/>
<br/>
<input type="submit" value="Oblicz" >
</form>
<?php
@$r = $_POST['promien'];
@$P = 3.14 * $r * $r;
@$L = 2 * 3.14 * $r;
print '<br/>Pole koła o promieniu ' . $r . ' wynosi ' . $P . 'cm<sup>2</sup>.<br/>';
print 'Obwód koła o promieniu ' . $r . ' wynosi ' . $L . 'cm.';
?>
</body>

</html>