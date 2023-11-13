<!doctype html>
<html lang="pl-PL">
<head>
<meta charset="utf-8" />
<title>Tablica asocjacyjna - sortowanie</title>
</head>
<body>

<?php
//tablica
$student['nazwisko'] = 'Smith';
$student['imie'] = 'Winston';
$student['uczelnia'] = 'AWF';
$student['wiek'] = 39;
$student['rok_stud'] = 1;
$student['odleg_od_uczl'] = 15;

//tbl pierwotna
print '<h3>Tablica pierwotna: </h3>';
print_r($student);
print '<br/><hr><br/>';

//tbl ele rosnąco
print '<h3>Tablica wg elementów rosnąco: </h3>';
asort($student);
print_r($student);
print '<br/><hr><br/>';

//tbl ele malejąco
print '<h3>Tablica wg elementów malejąco: </h3>';
arsort($student);
print_r($student);
print '<br/><hr><br/>';

//tbl klucz rosnąco
print '<h3>Tablica wg kluczy rosnąco: </h3>';
ksort($student);
print_r($student);
print '<br/><hr><br/>';

//tbl klucz malejąco
print '<h3>Tablica wg kluczy malejąco: </h3>';
krsort($student);
print_r($student);
?>

</body>

</html>