//Получение элементов
const menu = document.querySelector(".responsive-menu");
let overlay = document.querySelector(".menu-overlay");
let menuBtn = document.querySelector(".menu-btn")
//Клонирование элементов
const menuLinks = menu.children[0].children[0].children[1].cloneNode(true);
const menuAccount = menu.children[0].children[0].children[2].cloneNode(true);
//Обработка кнопки
menu.children[0].children[0].children[3].addEventListener('click', () => {
    if(menu.children[0].children[0].children[3].classList.contains("hidden")){
        menu.children[0].children[0].children[3].classList.remove("hidden");
        menu.children[0].children[0].children[3].classList.add("active");
        menu.children[0].children[0].children[3].children[0].innerHTML = "close";

        overlay.style["display"] = "flex";
        overlay.append(menuLinks);
        overlay.append(menuAccount);
        overlay.children[0].style["display"] = "flex";
        overlay.children[0].style["flex-direction"] = "column";
        overlay.children[1].style["display"] = "flex";
        overlay.children[1].style["flex-direction"] = "column";
    }
    else {
        menu.children[0].children[0].children[3].classList.remove("active");
        menu.children[0].children[0].children[3].classList.add("hidden");
        menu.children[0].children[0].children[3].children[0].innerHTML = "menu";

        overlay.style["display"] = "none";
        overlay.children[0].remove();
        overlay.children[0].remove();
    }
});
//Отслеживание изменения экрана
addEventListener('resize', () => {
    if(window.innerWidth >= 1000) {
        menu.children[0].children[0].children[3].classList.remove("active");
        menu.children[0].children[0].children[3].classList.add("hidden");
        menu.children[0].children[0].children[3].children[0].innerHTML = "menu";
        
        overlay.style["display"] = "none";
    }
});

//Скролл
addEventListener('scroll', () => {
    if(scrollY >= 100) {
        menu.classList.remove("responsive-menu");
        menu.classList.add("responsive-menu-scroll");

        menu.children[0].children[0].children[0].classList.remove("menu-brand");
        menu.children[0].children[0].children[0].classList.add("menu-brand-scroll");

        for(let i = 0; i < menu.children[0].children[0].children[1].children.length; i++) {
            menu.children[0].children[0].children[1].children[i].classList.remove("menu-link");
            menu.children[0].children[0].children[1].children[i].classList.add("menu-link-scroll");
        }
    }
    if(scrollY == 0) {
        menu.classList.remove("responsive-menu-scroll");
        menu.classList.add("responsive-menu");

        menu.children[0].children[0].children[0].classList.add("menu-brand");
        menu.children[0].children[0].children[0].classList.remove("menu-brand-scroll");

        for(let i = 0; i < menu.children[0].children[0].children[1].children.length; i++) {
            menu.children[0].children[0].children[1].children[i].classList.add("menu-link");
            menu.children[0].children[0].children[1].children[i].classList.remove("menu-link-scroll");
        }
    }
});