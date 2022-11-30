//CARGA DE LOG A ARRAY
const fs = require('fs');
const contents = fs.readFileSync('/log.txt', 'utf-8');
const arr = contents.split(/\r?\n/);
//CONTADOR DE PUNTOS
let countC1 = countC2 = 0;
for (let i = 0; i < arr.length; i++) {
    if (arr[i] == "C1" || arr[i] == "C1 ") {
        countC1 += 1;
    } else if (arr[i] == "C2" || arr[i] == "C2 ") {
        countC2 += 1;
    }
}
function marcadorFinal() {
    if (arr[0] == "C1" || arr[0] == "C1 ") {
        countC1 = countC1 + 2;
    } else if (arr[0] == "C2" || arr[0] == "C2 ") {
        countC1 = countC1 + 2;
    }
}
//INSERCION DE PUNTAJE OBTENIDO
console.log(countC1);
console.log(countC2);
console.log("HOLA MUNDO")
document.getElementById("marcadorE1").innerHTML = countC1;
document.getElementById("marcadorE2").innerHTML = countC2;