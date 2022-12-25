//Получение элементов
let main = document.querySelector(".main-content");
let menu = document.querySelector(".nav-content");
let menuItems = document.querySelectorAll(".menu-item");
let menuBtn = document.querySelector(".toggle-menu");
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
//Отслеживание размера экрана
window.addEventListener('resize', checkCurrentWindow = () => {
    if(window.innerWidth >= 800) {
        menu.children[0].style["display"] = "flex";
    }

    if(window.innerWidth <= 800) {
        menu.children[0].style["display"] = "none";
    }
});