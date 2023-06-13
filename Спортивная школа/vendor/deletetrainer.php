<!-- Удаление тренера админом -->
<?php

    session_start();
    require_once 'connect.php';
    // Получение данных
    $id = trim($_POST['id']);
    // Валидация
    if(!empty($id)){
        // Удаление тренера
        mysqli_query($link, "DELETE FROM `trainers` WHERE trainers.trainer_id = '$id';");
        $_SESSION['request-status-delete-trainer'] = 'Успешно!'; 
        header('Location: ../profile-admin.php');
    }
    else {
        $_SESSION['request-status-delete-trainer'] = 'Заполните все поля!'; 
        header('Location: ../profile-admin.php');
    }
?>
