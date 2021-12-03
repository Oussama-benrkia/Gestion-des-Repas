$(document).ready(function(){
    $(".l").click(function(){
        $(".bar").css("display","block");
    })
    $(".bar").mouseleave(function(){
        $(".bar").css("display","none");
    })
})