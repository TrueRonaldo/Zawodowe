function oblicz(form) {
    var promien = Number(form.promien.value);
    var czyObwod = form.czyObwod.checked;
    form.pole.value = Math.PI * promien ** 2;
    if (czyObwod) form.obwod.value = 2 * Math.PI * promien;
}
