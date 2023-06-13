<!-- Просмотр информации тренера -->
<?php

    session_start();
    require_once 'connect.php';
    // Получение данных
    $name = trim($_POST['trainer-name']);
    // Запрос к БД
    $check_trainer_info = mysqli_query($link, "SELECT * FROM `trainers` WHERE `trainer_name` = '$name'");
    // Валидация
    if(!empty($name)){
        // Тренер найден
        if(mysqli_num_rows($check_trainer_info) > 0) {

            $trainer_info = mysqli_fetch_assoc($check_trainer_info);
            // Создание сессии
            $_SESSION['trainer_info'] = [
                "trainer_id" => $trainer_info['trainer_id'],
                "trainer_name" => $trainer_info['trainer_name'],
                "trainer_email" => $trainer_info['trainer_email'],
                "trainer_address" => $trainer_info['trainer_address'],
                "trainer_phone" => $trainer_info['trainer_phone'],
                "trainer_login" => $trainer_info['trainer_login'],
                "trainer_password" => $trainer_info['trainer_password']
            ];

            
            $_SESSION['request-status-show-trainer'] = 'Успешно!'; 
            header('Location: ../profile-admin.php');
        }
        else {
            $_SESSION['request-status-show-trainer'] = 'Ошибка!'; 
            header('Location: ../profile-admin.php');
        }
    }
    else {
        $_SESSION['request-status-show-trainer'] = 'Заполните все поля!';
        header('Location: ../profile-admin.php');
    }
    
?>
