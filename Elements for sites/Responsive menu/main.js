//Получение элементов
let menu = document.querySelector(".responsive-menu");
let overlay = document.querySelector(".menu-overlay");
let toggleBtn = document.querySelector(".toggleBtn");
//Клонирование элементов
let menuItemsCopy = menu.children[1].cloneNode(true);
let menuAccountCopy = menu.children[2].cloneNode(true);
//Обработка кнопки
responsiveMenu = () => {
    if(toggleBtn.classList.contains("hidden")){
        toggleBtn.classList.remove("hidden");
        toggleBtn.classList.add("active");

        overlay.style["display"] = "flex";

        overlay.append(menuItemsCopy, menuAccountCopy);

        for(let i = 0; i < overlay.children.length; i++) {
            overlay.children[i].style["display"] = "flex";
        }
        overlay.children[0].style["flex-direction"] = "column"
    }
    else {
        toggleBtn.classList.remove("active");
        toggleBtn.classList.add("hidden");

        overlay.style["display"] = "none";

        while(overlay.children.length != 0) {
            overlay.children[0].remove();
        }
    }
}
//Фикс проблемы с изменением ширины экрана
addEventListener('resize', () => {
    if(window.innerWidth >= 800) {
        toggleBtn.classList.remove("active");
        toggleBtn.classList.add("hidden");
        
        overlay.style["display"] = "none";

        while(overlay.children.length != 0) {
            overlay.children[0].remove();
        }
    }
});