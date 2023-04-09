const scheduleDays = document.querySelectorAll(".schedule-day");
const scheduleItems = document.querySelector(".schedule-items");

let idActiveScheduleDay = 0;

changeScheduleDayClassList = () => {
    for(let i = 0; i < scheduleDays.length; i++){
        scheduleDays[i].addEventListener('click', () => {
            checkActiveDay = () => {
                for(let i = 0; i < scheduleDays.length; i++){
                    if(scheduleDays[i].classList.contains("active-day")) {
                        idActiveScheduleDay = i;
                        return idActiveScheduleDay;
                    }
                }
            }
            idActiveScheduleDay = checkActiveDay();
            if(i != idActiveScheduleDay){
                scheduleDays[i].classList.add("active-day");
                scheduleDays[idActiveScheduleDay].classList.remove("active-day");
            }
            checkActiveDay();
            changeScheduleItemsClassList();
        });
    }
}

changeScheduleDayClassList();

changeScheduleItemsClassList = () => {
    for(let i = 0; i < scheduleItems.children.length; i++) {
        if(scheduleItems.children[i].classList.contains("active-schedule-item")){
            scheduleItems.children[i].classList.remove("active-schedule-item");
        }
        scheduleItems.children[idActiveScheduleDay].classList.add("active-schedule-item");
    }
}