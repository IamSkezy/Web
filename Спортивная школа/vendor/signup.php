<!-- Регистрация на сайте -->
<?php

    session_start();
    require_once 'connect.php';

    $login = trim($_POST['login']);
    $password = trim($_POST['password']);
    $password_confirm = trim($_POST['password-confirm']);

    $email = trim($_POST['email']);
    $address = trim($_POST['address']);
    $phone = trim($_POST['phone']);

    $surname = trim($_POST['surname']);
    $name = trim($_POST['name']);
    $second_name = trim($_POST['secondname']);

    $full_name = $surname . " " . $name . " " . $second_name;

    if($password === $password_confirm) {
        if(!empty($login) && !empty($password) && !empty($password_confirm) && !empty($email) && !empty($address) && !empty($phone) && !empty($surname) && !empty($surname) && !empty($name) && !empty($second_name)){
            mysqli_query($link, "INSERT INTO `clients` (`client_id`, `client_name`, `client_email`, `client_address`, `client_phone`, `client_login`, `client_password`) VALUES (NULL, '$full_name', '$email', '$address', '$phone', '$login', '$password')");
            $_SESSION['reg-message-singup'] = 'Вы успешно зарегистрировались!'; 
            header('Location: ../auth.php');
        }
        else {
            $_SESSION['reg-message-signup'] = 'Заполните все поля!'; 
        }
    }
    else {
        $_SESSION['reg-message-signup'] = 'Пароли не совпадают!';
    }
?>