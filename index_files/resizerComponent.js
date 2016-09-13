$(document).ready(function(){

    // By Eduardo Alvarado <eduardoalvara2@gmail.com>
    // 20 de Agosto de 2016

    var interval= 750;
    var lastHeight = 0;
    var height = 0;

    var obj = $("header .logo");
    var obj2 = $("#content .row");
    var img = $(".row:nth-child(2) div:nth-child(2) img");

    setInterval(function(){
        height = $(window).height()+1;
       
        if(lastHeight != height){
            lastHeight = height;
            obj.css("height",lastHeight+"px");
            obj2.css("height",lastHeight+"px");
            if($(window).width() > 768){
                img.css("height",lastHeight+"px");
            }else{
                img.css("height",lastHeight*0.8+"px");
            }
        }
    },interval);
});
