function check_pass(){
    let a=document.getElementById("password").value;
    let b=/^([A-z1-9@_$&.,#+*()]*)$/g;

    if(b.test(a)==true && a.length>7){
        document.getElementById("connecter").disabled=false;
        document.getElementById("connecter").style.cursor="auto";
        document.getElementById("password").style.backgroundColor="rgb(5, 152, 98,0.4)"
    }else{
        document.getElementById("connecter").disabled=true;
        document.getElementById("connecter").style.cursor="no-drop";
        document.getElementById("password").style.backgroundColor="rgb(255, 0, 0,0.4)"
    }
}
function check_nbr(){
    let a=document.getElementById("calorie").value;
    if(Number.isInteger(+a)==false){

        document.getElementById("connecter").disabled=true;
        document.getElementById("connecter").style.cursor="no-drop";
        document.getElementById("calorie").style.backgroundColor="rgb(255, 0, 0,0.4)"
    }
    else{
        document.getElementById("connecter").disabled=false;
        document.getElementById("connecter").style.cursor="auto";
        document.getElementById("calorie").style.backgroundColor="rgb(5, 152, 98,0.4)"
    }
}
function check_name(mot){
    let a=document.getElementById(mot).value;
    let b=/^([A-z]*)$/g;

    if(b.test(a)==true && a.length>3){
        document.getElementById("connecter").disabled=false;
        document.getElementById("connecter").style.cursor="auto";
        document.getElementById(mot).style.backgroundColor="rgb(5, 152, 98,0.4)"
    }else{
        document.getElementById("connecter").disabled=true;
        document.getElementById("connecter").style.cursor="no-drop";
        document.getElementById(mot).style.backgroundColor="rgb(255, 0, 0,0.4)"
    }
}