window.onscroll = function(){
    var Scroll = window.pageYOffset;
    if(Scroll > 250){
        document.getElementById("menu").style.top = "-200px";
    }
    else{
        document.getElementById("menu").style.top = "0px";
    }
}