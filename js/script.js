window.onscroll = function(){
    var Scroll = window.pageYOffset;
    if(Scroll > 100){
        document.getElementById("menu").style.top = "-250px";
    }
    else{
        document.getElementById("menu").style.top = "250px";
    }
}