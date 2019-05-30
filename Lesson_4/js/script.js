const modalWindow = document.getElementById("modal");
const closeModalWindow = modalWindow.querySelector(".btn-close");
const leftModalWindow = modalWindow.querySelector(".btn-left");
const rightModalWindow = modalWindow.querySelector(".btn-right");

const galleryElement = document.getElementById("gallery");
const smallPicturesInGallery = galleryElement.querySelectorAll(".small-image");
let index = 0;


function showAndHiddenModalWindow() {
    //событие на кнопку Close
    closeModalWindow.addEventListener("click", ()=>{
        modalWindow.classList.add("hidden");
    });

    // //событие на клик по миниатюре
    for (let i = 0; i < smallPicturesInGallery.length; i++){
        smallPicturesInGallery[i].addEventListener("click", () => {
            modalWindow.classList.remove("hidden");
        });
    }
}

//получааем все значения src картинок в галерее
function getSmallPicsArray() {
    const smallPicsInGallery = galleryElement.querySelectorAll(".small-image_img");
    let smallPicsArray = [];

    for (let i = 0; i < smallPicsInGallery.length; i++){
        smallPicsArray[i] = (smallPicsInGallery[i].getAttribute("src"));
    }

    return smallPicsArray;
}

function actLeftButton(){
    var smallPicArray = getSmallPicsArray();
    var bigGalleryPicture = modalWindow.querySelector(".big-image_img");

    index = (smallPicArray.length + (-- index)%smallPicArray.length)%smallPicArray.length;
    bigGalleryPicture.setAttribute("src", smallPicArray[index]);

}

function actRightButton() {
    var smallPicArray = getSmallPicsArray();
    var bigGalleryPicture = modalWindow.querySelector(".big-image_img");

    index = (++index)%smallPicArray.length;
    bigGalleryPicture.setAttribute("src", smallPicArray[index]);
}

showAndHiddenModalWindow();
leftModalWindow.addEventListener("click", actLeftButton);
rightModalWindow.addEventListener("click", actRightButton);