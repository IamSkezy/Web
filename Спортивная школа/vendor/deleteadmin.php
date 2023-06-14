<!-- Удаление админа админом -->
<?php

    session_start();
    require_once 'connect.php';
    // Получение данных
    $id = trim($_POST['id']);

    $admin_id = $_SESSION['user']['admin_id'];
    // Валидация, чтобы админ не смог удалить сам себя
    if($admin_id != $id) {
        // Валидация данных
        if(!empty($id)){
            // Удаление админа
            mysqli_query($link, "DELETE FROM `admins` WHERE admins.admin_id = '$id';");
            $_SESSION['request-status-delete-admin'] = 'Успешно!'; 
            header('Location: ../profile-admin.php');
        }
        else {
            $_SESSION['request-status-delete-admin'] = 'Заполните все поля!'; 
            header('Location: ../profile-admin.php');
        }
    }
    else {
        $_SESSION['request-status-delete-admin'] = 'Вы не можете удалить самого себя!'; 
        header('Location: ../profile-admin.php');
    }
?>
