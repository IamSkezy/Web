<!-- Удаление клиента админом -->
<?php

    session_start();
    require_once 'connect.php';

    $id = trim($_POST['id']);

    if(!empty($id)){
        mysqli_query($link, "DELETE FROM `clients` WHERE clients.client_id = '$id';");
        $_SESSION['request-status-delete-client'] = 'Успешно!'; 
        header('Location: ../profile-admin.php');
    }
    else {
        $_SESSION['request-status-delete-client'] = 'Заполните все поля!'; 
        header('Location: ../profile-admin.php');
    }
?>