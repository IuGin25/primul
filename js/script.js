window.onscroll = function(){
    var Scroll = window.pageYOffset;
    if(Scroll > 180){
        document.getElementById("menu").style.top = "-180px";
    }
    else{
        document.getElementById("menu").style.top = "0px";
    }
}