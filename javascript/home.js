$(document).ready(function(){
    $("input[type=password]").keyup(function(){
        let a=/^([0-9A-z_%!?,&@#()*+=.;-]+){8,}$/g;
        let mot=document.getElementById("pass").value;
        if(a.test(mot)==true){
            $("input[type=password]").css("background-color","rgba(55, 126, 46, 0.541)");
        }
        else{
            $("input[type=password]").css("background-color","rgba(131, 29, 29, 0.541)");
        }
    });
  });