//Получение элементов
let titles = document.querySelectorAll(".container-title");
let news = document.querySelectorAll(".info-item");
let info_content = document.querySelector(".info-content");
let main = document.querySelector(".main-content");
let menu = document.querySelector(".nav-content");
let menuItems = document.querySelectorAll(".menu-item");
let menuBtn = document.querySelector(".toggle-menu");
let newsbtn = document.querySelector("#show_info");
let newsinfo = document.querySelectorAll(".info-text");
//Добавление и удаление класса
menuBtn.addEventListener('click', clickMenuBtn = () => {
    if (menuBtn.classList.contains("hidden")) {
        menuBtn.classList.remove("hidden");
        menuBtn.classList.add("active");
    }
    else {
        menuBtn.classList.remove("active");
        menuBtn.classList.add("hidden");
    }
})
//Обработчик кнопки
Menu = () => {
    if (menuBtn.classList.contains("active")){
        menu.children[0].style["display"] = "none";
    }
    if (menuBtn.classList.contains("hidden")){
        menu.children[0].style["display"] = "flex";
    }
}
//Скрытие ненужных заголовков
if(news.length == 0) {
    titles[0].innerHTML = "";
    info_content.style["padding"] = "0px";
}
//Изменение ширины экрана
window.addEventListener('resize', checkCurrentWidth = () =>{
    if(window.innerWidth <= 800) {
        titles[1].innerHTML = "Карта:";
    }
    if (window.innerWidth > 800) {
        titles[1].innerHTML = "Карта географического расположения структурных подразделений:";
    }
})
//Отслеживание размера экрана
window.addEventListener('resize', checkCurrentWindow = () => {
    if(window.innerWidth >= 800) {
        menu.children[0].style["display"] = "flex";
    }

    if(window.innerWidth <= 800) {
        menu.children[0].style["display"] = "none";
    }
});

showNews = () => {
    for(let i = 0; i < newsinfo.length; i++) {
        newsinfo[i].style["overflow"] = "visible";
        newsinfo[i].style["max-height"] = "100%";
        newsinfo[i].style["margin-bottom"] = "20px"; 
        newsinfo[i].style["-webkit-box-orient"] = "horizontal";
    }
}