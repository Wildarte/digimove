var btn_open = document.querySelector(".btn_open_menu");
var btn_close = document.querySelector(".btn_close_menu");

btn_open.addEventListener("click", function(){
    document.querySelector(".nav_menu").classList.toggle("class_open_menu_mobile");
});
btn_close.addEventListener("click", function(){
    document.querySelector(".nav_menu").classList.toggle("class_open_menu_mobile");
});


//all code for chat and notification
document.addEventListener("DOMContentLoaded", function(){
    if(checkNotification()){
        notifica();
    }else{
        document.querySelector(".badge_chat").style.display = "block";
        document.querySelector(".notification_chat").style.display = "block";
    }
});

//function check existis cookie cnChat
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
    }, 5000);
    setTimeout(function(){
        document.querySelector(".notification_chat").style.display = "block";
    }, 5500);
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


var close_msg_notification = document.querySelector(".close_msg_chat");
close_msg_notification.addEventListener("click", function(){
    document.querySelector(".notification_chat").style.opacity = "0";
    document.querySelector(".notification_chat").style.display = "none";
});


//button open chat
var btn_open_chat = document.querySelector(".btn_icon");
btn_open_chat.addEventListener("click", function(){
    document.querySelector(".notification_chat").style.display = "none";
    document.querySelector(".badge_chat").style.display = "none";
    document.querySelector(".window_chat").classList.add("window_chat_height");
});

var btn_close_chat = document.querySelector(".window_chat_close");
btn_close_chat.addEventListener("click", function(){
    document.querySelector(".window_chat").classList.remove("window_chat_height");
});
// end all code for chat and notification