//Получение элементов
let btnBack = document.querySelector(".reviews-arrow-back");
let btnNext = document.querySelector(".reviews-arrow-next");
let sliderItems = document.querySelector(".reviews-items");

nextSlide = () => {
    for(let i = 0; i < sliderItems.children.length; i++) {
        if(sliderItems.children[i].classList.contains("active-slide")) {
            if(sliderItems.children[i] == sliderItems.children[sliderItems.children.length-1]){
                sliderItems.children[i].classList.remove("active-slide");
                sliderItems.children[0].classList.add("active-slide");
            }
            else {
                sliderItems.children[i].classList.remove("active-slide");
                sliderItems.children[++i].classList.add("active-slide");
            }
        }
    }
}

backSlide = () => {
    for(let i = 0; i < sliderItems.children.length; i++) {
        if(sliderItems.children[i].classList.contains("active-slide")) {
            if(sliderItems.children[i] != sliderItems.children[0]){
                sliderItems.children[i].classList.remove("active-slide");
                sliderItems.children[--i].classList.add("active-slide");
            }
        }
    }
}