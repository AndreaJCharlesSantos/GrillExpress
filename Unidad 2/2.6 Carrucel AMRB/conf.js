window.onload = function(){
 let img=0;
 let tiempo;
 const IMG=['img/BestoShonen.jpg','img/Dr PIEDRA.jpg','img/jojo.jpg'];
 function Si(){

  if (img<2){
   img=img+1;
  }
  else
  {
   img=0;
  }
  Act();
  }

function Pre(){
  if(img>0){
    img--;
  }
  else{
    img=2;
  }
  Act();
}

function Act(){
  document.getElementById("Imagen").src=IMG[img];
}
let Sig=document.querySelector("#Sig");
Sig.addEventListener('click',Si);
let Ant=document.querySelector("#Ant");
Ant.addEventListener('click',Pre);

function inicio(){
  Act();
  tiempo = setInterval(Si,1800);
  document.getElementById("Imagen").onmouseenter=function(){
    console.log("Encima");
    clearInterval(tiempo);
  }
  document.getElementById("Imagen").onmouseleave=function()
  {
    console.log("Salio");
    tiempo=setInterval(Si,1800);
  }
}
inicio();
}

