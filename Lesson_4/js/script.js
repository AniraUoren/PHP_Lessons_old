const modalWindowGallery = document.getElementById("gallery");
const bigElementSRCValue = modalWindowGallery.querySelector(".small-image_img").getAttribute("src");
let index = 0;

function getGallerySmallPictures(){
    const gallerySmallPictures = modalWindowGallery.querySelectorAll(".small-image_img");
    let galleryPicSRCArray = [];

    for (let i = 0; i < gallerySmallPictures.length; i++){
        galleryPicSRCArray[i] = gallerySmallPictures[i].getAttribute("src");
    }

    return (galleryPicSRCArray);
}

function actLeftButton(){
    var smallPicArray = getGallerySmallPictures();
    var bigGalleryPicture = modalWindowGallery.querySelector(".gallery-pic_big_img");

    index = (smallPicArray.length + (-- index)%smallPicArray.length)%smallPicArray.length;
    bigGalleryPicture.setAttribute("src", smallPicArray[index]);

}

function actRightButton() {
    var smallPicArray = getGallerySmallPictures();
    var bigGalleryPicture = modalWindowGallery.querySelector(".gallery-pic_big_img");

    index = (++index)%smallPicArray.length;
    bigGalleryPicture.setAttribute("src", smallPicArray[index]);

}

function deleteActiveClassSmallPics() {
    var smallElements = modalWindowGallery.querySelectorAll(".gallery-pic_small_img");

    for (var i = 0; i < smallElements.length; i++) {
        if(smallElements[i].classList.contains("active_pic")){
            smallElements[i].classList.remove("active_pic");
        }
    }
}

function showSmallPicInBigBlock(clickedElement){
    var smallElement = clickedElement.getAttribute("src");
    var bigElement = modalWindowGallery.querySelector(".gallery-pic_big_img");

    bigElement.setAttribute("src", smallElement);

    deleteActiveClassSmallPics();

    if (clickedElement.getAttribute("src") === modalWindowGallery.querySelector(".gallery-pic_big_img").getAttribute("src")){
        clickedElement.classList.add("active_pic");
    }
}

modalWindowGallery.addEventListener("click", function(event){
    var target = event.target;

    if (target.getAttribute("class") === "gallery-pic_small_img"){
        showSmallPicInBigBlock(target);
    }


    switch (target.getAttribute("id") || target.parentNode.getAttribute("id")) {
        case ("gallery-close"):{
            modalWindowGallery.querySelector(".gallery-pic_big_img").setAttribute("src", bigElementSRCValue);
            deleteActiveClassSmallPics();
            overlay.classList.add("no-display");
            modalWindowGallery.classList.add("no-display");
            break;
        }
        case ("arrow-left"):{
            actLeftButton();
            break;
        }
        case ("arrow-right"):{
            actRightButton();
            break;
        }
    }
});