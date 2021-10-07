var btn_open = document.querySelector(".btn_open_menu");
var btn_close = document.querySelector(".btn_close_menu");

btn_open.addEventListener("click", function(){
    document.querySelector(".nav_menu").classList.toggle("class_open_menu_mobile");
});
btn_close.addEventListener("click", function(){
    document.querySelector(".nav_menu").classList.toggle("class_open_menu_mobile");
});