<!-- Добавление курса -->
<?php

    session_start();
    require_once 'connect.php';
    // Получение данных
    $name = trim($_POST['name']);
    $desc = trim($_POST['description']);
    $src = trim($_POST['src']);
    $cost = trim($_POST['cost']);
    $time = trim($_POST['time']);
    $trainer_id = trim($_POST['trainer-id']);
    // Валидация данных
    if(!empty($name) && !empty($desc) && !empty($src) && !empty($cost) &&!empty($time) && !empty($trainer_id)){
        // Добавление курса
        mysqli_query($link, "INSERT INTO `courses` (`course_id`, `course_name`, `course_description`, `course_src`, `course_cost`, `course_time`, `trainer_id`) VALUES (NULL, '$name', '$desc', '$src', '$cost', '$time', '$trainer_id')");
        $_SESSION['request-status-add-course'] = 'Успешно!'; 
        header('Location: ../profile-admin.php');
    }
    else {
        $_SESSION['request-status-add-course'] = 'Заполните все поля!'; 
        header('Location: ../profile-admin.php');
    }
?>
