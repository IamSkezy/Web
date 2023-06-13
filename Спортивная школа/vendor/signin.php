<!-- Авторизация на сайте -->
<?php

    session_start();
    require_once 'connect.php';
    // Получение данных
    $login = trim($_POST['login']);
    $password = trim($_POST['password']);
    // Запросы к БД
    $check_client = mysqli_query($link, "SELECT * FROM `clients` WHERE `client_login` = '$login' AND `client_password` = '$password'");
    $check_trainer = mysqli_query($link, "SELECT * FROM `trainers` WHERE `trainer_login` = '$login' AND `trainer_password` = '$password'");
    $check_admin = mysqli_query($link, "SELECT * FROM `admins` WHERE `admin_login` = '$login' AND `admin_password` = '$password'");
    // Клиент найден
    if (mysqli_num_rows($check_client) > 0) {

        $user = mysqli_fetch_assoc($check_client);
        // Создание сессии
        $_SESSION['user'] = [
            "client_id" => $user['client_id'],
            "client_name" => $user['client_name'],
            "client_email" => $user['client_email'],
            "client_address" => $user['client_address'],
            "client_phone" => $user['client_phone']
        ];

        header('Location: ../profile-client.php');
    // Тренер найден
    } elseif (mysqli_num_rows($check_trainer) > 0) {
        $user = mysqli_fetch_assoc($check_trainer);
        // Создание сессии
        $_SESSION['user'] = [
            "trainer_id" => $user['trainer_id'],
            "trainer_name" => $user['trainer_name'],
            "trainer_email" => $user['trainer_email'],
            "trainer_address" => $user['trainer_address'],
            "trainer_phone" => $user['trainer_phone']
        ];
  
        header('Location: ../profile-trainer.php');
        // Админ найден
    } elseif (mysqli_num_rows($check_admin) > 0) {
        $user = mysqli_fetch_assoc($check_admin);
        // Создание сессии
        $_SESSION['user'] = [
            "admin_id" => $user['admin_id'],
            "admin_name" => $user['admin_name'],
            "admin_email" => $user['admin_email'],
            "admin_address" => $user['admin_address'],
            "admin_phone" => $user['admin_phone']
        ];

        header('Location: ../profile-admin.php');
    } 
    else { // Данные введены неправильно
        $_SESSION['auth-message-singin'] = 'Неверный логин или пароль';
        header('Location: ../auth.php');
    }
?>
