// Okno
var h = prompt("Podaj wysokość trójkąta");

if (isNaN(h)) alert("Podaj wartość liczbową");
else {
    // petla wyswietlajaca znaki
    for (i = 1; i <= h; i++) {
        var chars = new Array(i).fill(0).reduce((acc) => (acc += "@"), "");
        document.body.innerHTML += chars + "<br />";
    }
}
