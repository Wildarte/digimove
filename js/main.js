var btn_open = document.querySelector(".btn_open_menu");
var btn_close = document.querySelector(".btn_close_menu");

btn_open.addEventListener("click", function(){
    document.querySelector(".nav_menu").classList.toggle("class_open_menu_mobile");
});
btn_close.addEventListener("click", function(){
    document.querySelector(".nav_menu").classList.toggle("class_open_menu_mobile");
});

document.addEventListener("DOMContentLoaded", function(){
    if(checkNotification()){
        notifica();
    }else{
        document.querySelector(".badge_chat").style.display = "block";
        document.querySelector(".notification_chat").style.display = "block";
    }
});
function checkNotification(){
    var n = getCookie("cnChat");
    console.log(n);
    if(n == ""){
        console.log(n);
        document.cookie = "cnChat=1";
        return true;
    }else{
        return false;
    }
}
//function show notification
function notifica(){
    setTimeout(function(){
        document.querySelector(".badge_chat").style.display = "block";
        document.querySelector(".notification_chat").style.display = "block";
    }, 5000);
}


//test de execução do áudio
function execAudio(){
    console.log("clicked on button")
    const musica = new Audio('notaudio.mp3');
    musica.autoplay = true;
}
//function get cookie by name cookie
function getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for(let i = 0; i <ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}