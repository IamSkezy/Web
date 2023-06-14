<!-- Очистка сообщений у тренера -->
<?php

    session_start();
    require_once 'connect.php';
    // Получение данных
    $trainer_id = $_SESSION['user']['trainer_id'];
    // Очистка сообщений
    mysqli_query($link,"DELETE FROM `messages` WHERE `trainer_id` = '$trainer_id' AND `message_from` = 'клиент';");
    $_SESSION['request-status-delete-mes-tr'] = 'Успешно!'; 
    header('Location: ../profile-trainer.php');
?>
