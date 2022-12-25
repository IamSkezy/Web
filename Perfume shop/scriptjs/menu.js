//Получение элементов
let menu = document.querySelector(".responsive-menu");
let overlay = document.querySelector(".menu-overlay");
let menuBtn = document.querySelector(".menu-btn");
//Клонирование элементов
let menuItems = menu.children[0].cloneNode(true);
//Обработка кнопки
menu.children[1].addEventListener('click', () => {
    if(menu.children[1].classList.contains("hidden")){
        menu.children[1].classList.remove("hidden");
        menu.children[1].classList.add("active");
        menu.children[1].children[0].children[0].innerHTML = "close";

        overlay.style["display"] = "flex";
        overlay.append(menuItems);
        overlay.children[0].style["display"] = "flex";
        overlay.children[0].style["flex-direction"] = "column";
    }
    else {
        menu.children[1].classList.remove("active");
        menu.children[1].classList.add("hidden");
        menu.children[1].children[0].children[0].innerHTML = "menu";

        overlay.style["display"] = "none";
        overlay.children[0].remove();
    }
});
//Отслеживание изменения экрана
addEventListener('resize', () => {
    if(window.innerWidth >= 800) {
        menu.children[1].classList.remove("active");
        menu.children[1].classList.add("hidden");
        menu.children[1].children[0].children[0].innerHTML = "menu";
        
        overlay.style["display"] = "none";
    }
});