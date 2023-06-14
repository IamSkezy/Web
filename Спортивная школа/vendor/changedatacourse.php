<!-- Изменение информации курса -->

<?php

    session_start();
    require_once 'connect.php';
    // Получение данных
    $course_id = trim($_POST['id']);
    $name = $_POST['data-change'];
    $data = trim($_POST['change-info']);
    // Условия для отправки коррректного запроса к БД
    if($name == 'Название') {
        $name = 'course_name';
    }
    elseif ($name == 'Описание'){
        $name = 'course_description';
    }
    elseif ($name == 'Путь к фото'){
        $name = 'course_src';
    }
    elseif ($name == 'Стоимость курса'){
        $name = 'course_cost';
    }
    elseif ($name == 'Время проведения'){
        $name = 'course_time';
    }
    // Валидация данных
    if(!empty($name) && !empty($course_id) && !empty($data)){
        // Изменение информации
        mysqli_query($link, "UPDATE `courses` SET $name = '$data' WHERE `course_id` = '$course_id';");
        $_SESSION['request-status-change-course'] = 'Успешно!'; 
        header('Location: ../profile-admin.php');
    }
    else {
        $_SESSION['request-status-change-course'] = 'Ошибка!'; 
        header('Location: ../profile-admin.php');
    }
    
?>
