<!-- Добавление тренера -->
<?php

    session_start();
    require_once 'connect.php';

    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $address = trim($_POST['address']);
    $phone = trim($_POST['phone']);
    $type = trim($_POST['type']);
    $desc = trim($_POST['description']);
    $src = trim($_POST['src']);
    $login = trim($_POST['login']);
    $password = trim($_POST['password']);

    if(!empty($login) && !empty($password) && !empty($email) && !empty($address) && !empty($phone) && !empty($name) && !empty($type) && !empty($desc) && !empty($src)){
        mysqli_query($link, "INSERT INTO `trainers` (`trainer_id`, `trainer_name`, `trainer_email`, `trainer_address`, `trainer_phone`, `trainer_type`, `trainer_description`, `trainer_src`, `trainer_login`, `trainer_password`) VALUES (NULL, '$name', '$email', '$address', '$phone', '$type', '$desc', '$src', '$login', '$password')");
        $_SESSION['request-status-add-trainer'] = 'Успешно!'; 
        header('Location: ../profile-admin.php');
    }
    else {
        $_SESSION['request-status-add-trainer'] = 'Заполните все поля!'; 
        header('Location: ../profile-admin.php');
    }
?>