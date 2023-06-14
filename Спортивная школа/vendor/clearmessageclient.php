<!-- Очистка сообщений у клиента -->
<?php

    session_start();
    require_once 'connect.php';
    // Получение данных
    $client_id = $_SESSION['user']['client_id'];
    // Очистка сообщений
    mysqli_query($link,"DELETE FROM `messages` WHERE `client_id` = '$client_id' AND `message_from` = 'тренер';");
    $_SESSION['request-status-delete-mes'] = 'Успешно!'; 
    header('Location: ../profile-client.php');
?>
