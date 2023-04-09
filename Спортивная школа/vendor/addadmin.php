<!-- Добавление админа -->
<?php

    session_start();
    require_once 'connect.php';

    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $address = trim($_POST['address']);
    $phone = trim($_POST['phone']);
    $login = trim($_POST['login']);
    $password = trim($_POST['password']);

    if(!empty($login) && !empty($password) && !empty($email) && !empty($address) && !empty($phone) && !empty($name)){
        mysqli_query($link, "INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_email`, `admin_address`, `admin_phone`, `admin_login`, `admin_password`) VALUES (NULL, '$name', '$email', '$address', '$phone', '$login', '$password')");
        $_SESSION['request-status-add-admin'] = 'Успешно!'; 
        header('Location: ../profile-admin.php');
    }
    else {
        $_SESSION['request-status-add-admin'] = 'Заполните все поля!'; 
        header('Location: ../profile-admin.php');
    }
?>