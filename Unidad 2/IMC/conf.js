function IMC(){
 let alt = Number(document.getElementById("altura").value);
 let pes = Number(document.getElementById("peso").value);
 let res= (pes/(alt*alt));

 if (res<18.5){
  if(res>16.99){document.getElementById("res").innerText = `Su IMC es de ${res} y Delgadez Aceptable`;}
  else if(res>15.99){document.getElementById("res").innerText = `Su IMC es de ${res} y es Delgadez Moderada`;}
  else{document.getElementById("res").innerText = `Su IMC es de ${res} y Delgadez Severa`;}
  document.getElementById("reimg").src="img/Bajo.PNG";
  }

  if(res>18.59 && res<25){
   document.getElementById("res").innerText = `Su IMC es de ${res} y es Normal`;
   document.getElementById("reimg").src="img/Normal.PNG";
  }

  if(res>25 && res<30){
   document.getElementById("res").innerText = `Su IMC es de ${res} y es Pre-Obeso`;
   document.getElementById("reimg").src="img/Sobre.PNG";
  }

  else if(res>30){
   if(res<35){document.getElementById("res").innerText = `Su IMC es de ${res} y es Obesidad Tipo I`;}
   else if(res<40){document.getElementById("res").innerText = `Su IMC es de ${res} y es Obesidad Tipo II`;}
   else {document.getElementById("res").innerText = `Su IMC es de ${res} y es Obesidad Tipo III`;}
   document.getElementById("reimg").src="img/NicokadoAvocado.PNG";
  }
 }
