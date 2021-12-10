
function submitFomr(event)
{
    event.preventDefault();
    const email=document.getElementById("email").value;
    const password=document.getElementById("password").value;
    let a,b;
    let regexpas=/^([\w@_\-\.#\+\*()]){8,16}$/;
    let regexema=/^[A-z]{1}([\w\-]){3,25}@([A-z]){3,8}\.([A-z]){2,4}$/;
    if(regexema.test(email)){
        a=true;
        visible("email","rgb(5, 152, 98,0.4)","AB","AA");
    }
    else{
        a=false;
        visible("email","rgb(255, 0, 0,0.4)","AA","AB");
    }
    if(regexpas.test(password)){
        b=true;
        visible("password","rgb(5, 152, 98,0.4)","BA","BB");
    }
    else{
        b=false;
        visible("password","rgb(255, 0, 0,0.4)","BB","BA");
    }
    if(a===true && b===true){
        document.getElementById("form_post").submit();
        
    }
}
function visible(element,color,none,block){
    document.getElementById(element).style.backgroundColor=color;
        document.getElementById(none).style.display="none";
        document.getElementById(block).style.display="block";
}