//Wprowadzenie liczby
x = prompt('Podaj dowolną liczbę');
//Analiza liczby
if (isNaN(x)) {
    document.write('Wprowadź wartość liczbową!!!');
} else {
    if (x < 0) document.write(x + ' jest ujemna');
    else if (x > 0) document.write(x + ' jest dodatnia');
    else document.write(x + ' to zero');
}
