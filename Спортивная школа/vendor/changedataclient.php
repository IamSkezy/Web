<!-- Изменение информации клиента -->

<?php

    session_start();
    require_once 'connect.php';
    // Получение данных
    $client_id = trim($_POST['id']);
    $name = $_POST['data-change'];
    $data = trim($_POST['change-info']);
    // Условия для отправки корректного запроса к БД
    if($name == 'ФИО') {
        $name = 'client_name';
    }
    elseif ($name == 'Email'){
        $name = 'client_email';
    }
    elseif ($name == 'Адрес'){
        $name = 'client_address';
    }
    elseif ($name == 'Телефон'){
        $name = 'client_phone';
    }
    elseif ($name == 'Логин'){
        $name = 'client_login';
    }
    elseif ($name == 'Пароль'){
        $name = 'client_password';
    }
    // Валидация
    if(!empty($name) && !empty($client_id) && !empty($data)){
        // Изменение данных
        mysqli_query($link, "UPDATE `clients` SET $name = '$data' WHERE `client_id` = '$client_id';");
        $_SESSION['request-status-change-client'] = 'Успешно!'; 
        header('Location: ../profile-admin.php');
    }
    else {
        $_SESSION['request-status-change-client'] = 'Ошибка!'; 
        header('Location: ../profile-admin.php');
    }
    
?>
