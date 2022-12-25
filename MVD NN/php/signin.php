<?php

    session_start();
    require_once 'connect.php';

    $login = $_POST['login'];
    $password = $_POST['password'];

    $check_user = mysqli_query($link, "SELECT * FROM `users` WHERE `user_login` = '$login' AND `user_password` = '$password'");
    if (mysqli_num_rows($check_user) > 0) {

        $user = mysqli_fetch_assoc($check_user);

        $_SESSION['user'] = [
            'user_id' => $user['id'],
            'user_fio' => $user['fio'],
            'user_role' => $user['role']
        ];

        header('Location: ../admin.php');

    } else {
        $_SESSION['message'] = 'Неверный логин или пароль';
        header('Location: ../auth.php');
    }
?>