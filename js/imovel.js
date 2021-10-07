var size_frame_photo = document.querySelector(".slide_gallery_photos");

/*
if(size_frame_photo.clientWidth > 800){
    img.style.width = "100%";
}
*/

var slideGalleryIndex = 1;
passSlide(slideGalleryIndex);

function plusSlidesGallery(n){
    passSlide(slideGalleryIndex += n);
}

function currentSlideGallery(n){
    passSlide(slideGalleryIndex = n);
}

function passSlide(n){

    var slide_photo = document.getElementsByClassName("slide_gallery_photos");
    var slide_thumb = document.getElementsByClassName("gallery_demo_thumb");

    if (n > slide_photo.length){
        slideGalleryIndex = 1;
    }
    if (n < 1){
        slideGalleryIndex = slide_photo.length
    }
    for(var i = 0; i < slide_photo.length; i++){
        slide_photo[i].style.display = "none";
        slide_thumb[i].style.opacity = 0.5
    }
    slide_photo[slideGalleryIndex - 1].style.display = "block";
    slide_thumb[slideGalleryIndex - 1].style.opacity = 1;

}
