var n = Number(prompt('Podaj liczbe ocen'));
var suma = 0;
var x;
var ave;
document.write('Średnia ocen: ');

for (i = 1; i <= n; i++) {
    var x = Number(prompt('podaj ' + i + '. ocene'));
    suma = suma + x;
    document.write(x + ', ');
}

ave = suma / n;
document.write(' wynosi: ' + ave + '.');
