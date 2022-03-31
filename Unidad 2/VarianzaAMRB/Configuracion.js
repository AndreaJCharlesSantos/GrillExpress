let array = [500, 4343, 121];
var suma = 0;
var v1 = 500;
var v2 = 4343;
var v3 = 121;

//Sumatoria
for(let i of array){
    suma += i;
}

var Media=suma/array.length;
console.log(Media)

//RESTAS
let r1 = Media - v1;
let r2 = Media - v2;
let r3 = Media - v3;

//POTENCIA
let cuadrado = (Math.pow(r1,2)) + (Math.pow(r2,2)) + (Math.pow(r3,2));

let division = cuadrado / 3;

let raiz = parseInt(Math.sqrt(division)) + " ";

console.log("LA DERIVACIÓN ESTANDAR ES: "+raiz);


