<!doctype html>
<html lang="pl-PL">
<head>
<meta charset="utf-8" />
<title>Łańcuchy - 3 skrypt</title>
</head>
<body>

<?php
@$z=$_POST['znak'];
@$n=$_POST['liczba'];
function lancuch(){
	global $z, $n;
	
	for($i=1; $i<=$n; $i++)
		echo($z);
}
lancuch();
?>
</body>

</html>