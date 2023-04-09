<!-- Удаление тренера админом -->
<?php

    session_start();
    require_once 'connect.php';

    $id = trim($_POST['id']);

    if(!empty($id)){
        mysqli_query($link, "DELETE FROM `trainers` WHERE trainers.trainer_id = '$id';");
        $_SESSION['request-status-delete-trainer'] = 'Успешно!'; 
        header('Location: ../profile-admin.php');
    }
    else {
        $_SESSION['request-status-delete-trainer'] = 'Заполните все поля!'; 
        header('Location: ../profile-admin.php');
    }
?>