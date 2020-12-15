window.onscroll = function(){
    var Scroll = window.pageYOffset;
    if(Scroll > 250){
        document.getElementById("menu").style.top = "-250px";
    }
    else{
        document.getElementById("menu").style.top = "0px";
    }
}