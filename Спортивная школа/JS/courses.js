const courseItems = document.querySelector(".courses-list");
const courseInfo = document.querySelector(".courses-information");

let idActiveCourse = 0;

changeCourseItemClassList = () => {
    for(let i = 0; i < courseItems.children.length-1; i++){
        courseItems.children[i].children[0].addEventListener('click', () => {
            checkActiveCourse = () => {
                for(let i = 0; i < courseItems.children.length-1; i++){
                    if(courseItems.children[i].children[0].classList.contains("courses-list-item-active")) {
                        idActiveCourse = i;
                        return idActiveCourse;
                    }
                }
            }
            idActiveCourse = checkActiveCourse();
            if(i != idActiveCourse) {
                courseItems.children[i].children[0].classList.add("courses-list-item-active");
                courseItems.children[idActiveCourse].children[0].classList.remove("courses-list-item-active");
            }
            checkActiveCourse();
            changeCourseInfoClassList();
        });
    }
}

changeCourseItemClassList();

changeCourseInfoClassList = () => {
    for(let i = 0; i < courseInfo.children.length; i++) {
        if(courseInfo.children[i].classList.contains("courses-information-item-active")){
            courseInfo.children[i].classList.remove("courses-information-item-active");
        }
        courseInfo.children[idActiveCourse].classList.add("courses-information-item-active");
    }
}