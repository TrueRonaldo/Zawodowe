var tekst = document.getElementById("tekst");

function zmienKolory() {
    document.bgColor = "black";
    document.fgColor = "gold";
}

tekst.onmouseover = zmienKolory;
