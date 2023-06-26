window.onscroll = function(){miFucion()};

var pagina=document.getElementById("pagina");
var genaral=document.getElementById("general");
var especifico=document.getElementById("especifico");

 var distancia_pagina, distancia_general, distancia_especifico;

 function miFucion(){
    distancia_pagina=window.innerHeight - pagina.getBoundingClientRect().top;
    if(distancia_pagina >= 200){
        pagina.classList.add("efecto-pagina");
    }

    distancia_general=window.innerHeight - general.getBoundingClientRect().top;
    if(distancia_general >= 200){
        general.classList.add("efecto-general");
    }

    distancia_especifico=window.innerHeight - especifico.getBoundingClientRect().top;
    if(distancia_especifico >= 200){
        especifico.classList.add("efecto-especifico");
    }
 }


 // inicio de contenido2//
 
 $(document).ready(function(){
    
  
    $(".item").on("click",function(){
        $(this).next("div").slideToggle(100);
        
        $(".links").not($(this).next()).slideUp("fast");
    
    });

});

  // fin de contenido2//



  


   


 