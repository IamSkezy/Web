<!-- Изменение информации тренера -->

<?php

    session_start();
    require_once 'connect.php';

    $trainer_id = trim($_POST['id']);
    $name = $_POST['data-change'];
    $data = trim($_POST['change-info']);

    if($name == 'ФИО') {
        $name = 'trainer_name';
    }
    elseif ($name == 'Email'){
        $name = 'trainer_email';
    }
    elseif ($name == 'Адрес'){
        $name = 'trainer_address';
    }
    elseif ($name == 'Телефон'){
        $name = 'trainer_phone';
    }
    elseif ($name == 'Логин'){
        $name = 'trainer_login';
    }
    elseif ($name == 'Пароль'){
        $name = 'trainer_password';
    }
    elseif ($name == 'Тип тренера'){
        $name = 'trainer_type';
    }
    elseif ($name == 'Описание тренера'){
        $name = 'trainer_description';
    }
    elseif ($name == 'Путь к фото'){
        $name = 'trainer_src';
    }

    if(!empty($name) && !empty($trainer_id) && !empty($data)){
        mysqli_query($link, "UPDATE `trainers` SET $name = '$data' WHERE `trainer_id` = '$trainer_id';");
        $_SESSION['request-status-change-trainer'] = 'Успешно!'; 
        header('Location: ../profile-admin.php');
    }
    else {
        $_SESSION['request-status-change-trainer'] = 'Ошибка!'; 
        header('Location: ../profile-admin.php');
    }
    
?>