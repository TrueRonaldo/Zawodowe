// Okno
var d = prompt("Wybierz ilość wyświetlanych znaków");

if (isNaN(d)) alert("Podaj wartość liczbową");
else {
    // petla wyswietlajaca znaki
    for (i = 0; i < d; i++) {
        document.write("_");
    }
}
