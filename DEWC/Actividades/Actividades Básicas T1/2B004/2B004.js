var i = 1;
while (i <= 20) {
    if (i % 3 == 0 && i % 5 == 0) {
        alert(i + " es divisible por 3 y 5");
    } else if (i % 5 == 0) {
        alert(i + " es divisible por 5");
    } else if (i % 3 == 0) {
        alert(i + " es divisible por 3");
    } else {
        alert(i);
    }
    i++;
}