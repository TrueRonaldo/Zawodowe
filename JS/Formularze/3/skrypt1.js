function koszt(form_w) {
    var km = Number(form_w.km.value);
    var czyUlga = form_w.u.checked;
    var wynik;
    if (czyUlga == true) wynik = km * 4;
    else wynik = km * 8;
    form_w.wynik.value = wynik;
}
