var x = Number(prompt("Podaj liczbę"));

while (x !== 100) {
    if (x % 5 === 0) {
        document.write("<span style='color: red'> " + x + " | </span>");
    }
    if (x > 100) x--;
    else x++;
}
