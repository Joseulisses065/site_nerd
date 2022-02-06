function apagar(){
    all = document.querySelector("*")
     check = document.querySelector("#check_2")
     corpo = document.querySelector("body");
     ball = document.querySelector(".ball");
    if(check.checked){
        corpo.style.backgroundColor ="black";
        ball.style.backgroundColor ="rgb(156, 153, 153)";
        all.style.color ="white";
        ball.style.left ="20px";
        ball.style.right ="1px";
    }else{
        corpo.style.backgroundColor ="white";
        ball.style.backgroundColor ="white";
        ball.style.right ="20px";
        ball.style.left ="1px";
        all.style.color ="black";
        
    }

}
function menu(){
    linha1= document.querySelector("#l1");
    linha2= document.querySelector("#l2");
    linha3= document.querySelector("#l3");
    check = document.querySelector("#check")
    nav = document.querySelector(".lista-op");
    navli = document.querySelector(".lista-op>li");
    head = document.querySelector("header")
    main = document.querySelector("main");
    btm = document.querySelector(".bl-menu");
   if(check.checked){
    main.style.marginTop="39px";
    nav.style.height = "40px";
    nav.style.width = "100%";
    nav.style.alignItems = "center"
    nav.style.position = "absolute";
    nav.style.bottom = "-39px";
    nav.style.right = "0px";
    nav.style.backgroundColor="black"
    head.style.overflow = "visible";
    linha3.style.transform = "rotate(-50deg)"
    linha1.style.transform = "rotate(50deg)"
    linha2.style.display = "none"
    
    
    linha1.style.transition = "all 0.6s";
    linha2.style.transition = "all 0.6s";
    linha3.style.transition = "all 0.6s";
   }else{
    main.style.marginTop="0px";
    nav.style.right = "-100%";
    head.style.overflow = "hidden";
    linha3.style.transform = "rotate(0deg)"
    linha1.style.transform = "rotate(0deg)"
    linha2.style.display = "block"
    linha1.style.position = "none";
    
    

    
    
       
   }

}
function navegacao(num){
    
    for(i=1;i<=4;i++){
        if(i==num){
            bola = document.querySelector("#nb-"+i+"");
            bola.style.backgroundColor="white";
            

        }if(num!=i){
            bola = document.querySelector("#nb-"+i+"");
            bola.style.backgroundColor="transparent";
            
        }
        
    }
}