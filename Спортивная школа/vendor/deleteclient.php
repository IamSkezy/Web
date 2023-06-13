<!-- Удаление клиента админом -->
<?php

    session_start();
    require_once 'connect.php';
    // Получение данных
    $id = trim($_POST['id']);
    // Валидация
    if(!empty($id)){
        // Удаление клиента
        mysqli_query($link, "DELETE FROM `clients` WHERE clients.client_id = '$id';");
        $_SESSION['request-status-delete-client'] = 'Успешно!'; 
        header('Location: ../profile-admin.php');
    }
    else {
        $_SESSION['request-status-delete-client'] = 'Заполните все поля!'; 
        header('Location: ../profile-admin.php');
    }
?>
