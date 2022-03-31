function operacion(operation) {
 document.getElementById("Suma").hidden = true;
 document.getElementById("Resta").hidden = true;
 document.getElementById("Multiplicacion").hidden = true;
 document.getElementById("Division").hidden = true;
 document.getElementById(operation).hidden = false;
}

function suma() {
 let n1 = Number(document.getElementById("n1").value);
 let n2 = Number(document.getElementById("n2").value);
 let sum=n1+n2;
 document.getElementById("Resultado").innerText = `Resultado = `+sum;
}

function resta() {
 let n1 = Number(document.getElementById("r1").value);
 let n2 = Number(document.getElementById("r2").value);
 let res=n1-n2;
 document.getElementById("Resultador").innerText = `Resultado = `+res;
}

function multiplicacion() {
 let n1 = Number(document.getElementById("m1").value);
 let n2 = Number(document.getElementById("m2").value);
 let mul=n1*n2;
 document.getElementById("Resultadom").innerText = `Resultado = `+mul;
}

function division() {
 let n1 = Number(document.getElementById("d1").value);
 let n2 = Number(document.getElementById("d2").value);
 let div=n1/n2;
 if (n2 == 0){
     alert("La división no puede tener un 0");
 }
 else{
  document.getElementById("Resultadod").innerText = `Resultado =`+div;
 }
}