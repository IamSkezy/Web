<!-- Просмотр информации клиента -->
<?php

    session_start();
    require_once 'connect.php';
    // Получение данных
    $name = trim($_POST['client-name']);
    // Запрос к БД
    $check_client_info = mysqli_query($link, "SELECT * FROM `clients` WHERE `client_name` = '$name'");
    // Валидация
    if(!empty($name)){
        // Если клиент найден
        if(mysqli_num_rows($check_client_info) > 0) {
     
            $client_info = mysqli_fetch_assoc($check_client_info);
            // Создание сессии
            $_SESSION['client_info'] = [
                "client_id" => $client_info['client_id'],
                "client_name" => $client_info['client_name'],
                "client_email" => $client_info['client_email'],
                "client_address" => $client_info['client_address'],
                "client_phone" => $client_info['client_phone'],
                "client_login" => $client_info['client_login'],
                "client_password" => $client_info['client_password']
            ];

            
            $_SESSION['request-status-show-client'] = 'Успешно!'; 
            header('Location: ../profile-admin.php');
        }
        else {
            $_SESSION['request-status-show-client'] = 'Ошибка!'; 
            header('Location: ../profile-admin.php');
        }
    }
    else {
        $_SESSION['request-status-show-client'] = 'Заполните все поля!';
        header('Location: ../profile-admin.php');
    }
    
?>
