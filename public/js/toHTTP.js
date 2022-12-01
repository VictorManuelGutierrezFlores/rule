//CARGA DE ARCHIVO
function readTextFile(file) {
    var arr = new Object();
    var rawFile = new XMLHttpRequest();
    rawFile.open("GET", file, false);
    rawFile.onreadystatechange = function () {
        if (rawFile.readyState === 4) {
            if (rawFile.status === 200 || rawFile.status == 0) {
                var allText = rawFile.responseText;
                arr = allText.split("\r\n");
            }
        }
    }
    rawFile.send(null);
    return arr;
}
arry = readTextFile("/log.txt");
console.log(arry)

let countC1 = 0;
let countC2 = 0;
for (let i = 0; i < arry.length; i++) {
    if (arry[i] == "C1" || arry[i] == "C1 ") {
        countC1 += 1;
        
    } else if (arry[i] == "C2" || arry[i] == "C2 ") {
        countC2 += 1;
    }
}
//BONIFICACION DE QUIEN TOCO PRIMERO EL BOTON
if (arry[0] == "C1" || arry[0] == "C1 ") {
    countC1 = countC1 + 2;
} 
if (arry[0] == "C2" || arry[0] == "C2 ") {
    countC2 = countC2 + 2;
}

//INSERCION DE PUNTAJE OBTENIDO
const E1 = document.getElementById('E1');
E1.innerHTML = countC1;
const E2 = document.getElementById('E2');
E2.innerHTML = countC2;
//ACCESO A VISTA MARCADORFINAL
const PuntosFinE1 = document.getElementById('PuntosFinalesE1');
console.log(PuntosFinE1);
