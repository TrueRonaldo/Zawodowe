var n = Number(prompt('Podaj liczbe aut'));

if (n < 1 || n >= 8) alert('Podana liczba aut jest nieprawidłowa');

for (i = 0; i < n; i++) {
    var auto = prompt('Podaj nazwę auta');
    var kolor = prompt('Podaj kolor');
    if (kolor === 'N') document.write("<span style='color: blue'>" + auto + ', </span>');
    if (kolor === 'C') document.write("<span style='color: red'>" + auto + ', </span>');
    if (kolor === 'Z') document.write("<span style='color: green'>" + auto + ', </span>');
}
