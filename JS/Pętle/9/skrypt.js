// Okno
var a = prompt('Podaj bok a prostokąta');
var b = prompt('Podaj bok b prostokąta');

if (isNaN(a)) alert('Podaj wartość liczbową');
else {
    // petla wyswietlajaca znaki
    for (i = 1; i <= b; i++) {
        for (j = 1; j <= a; j++) {
            document.write("<span style='color: red'>@</span>");
        }
        document.write('<br />');
    }
}
