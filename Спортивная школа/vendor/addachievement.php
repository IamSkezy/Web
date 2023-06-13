<!-- Назначение тренером достижений клиенту -->
<?php
    session_start();
    require_once 'connect.php';
    // Получение данных
    $trainer_id = $_SESSION['user']['trainer_id'];

    $client = $_POST['client-name'];
    $date = $_POST['date'];
    $achievement = $_POST['achievement'];
    // Запрос к БД
    $check_client = mysqli_query($link, "SELECT * FROM `clients` WHERE `client_name` = '$client'");

    foreach($check_client as $clients_id){
		
		$client_id = $clients_id['client_id'];
	}
    // Валидация значений
    if(!empty($client) and !empty($date) and !empty($achievement)) {
	// Назначение достижения
        mysqli_query($link, "INSERT INTO `achievements` (`achievement_id`, `trainer_id`, `client_id`, `achievement_date`, `achievement_type`) VALUES (NULL, '$trainer_id', '$client_id', '$date', '$achievement')");
            $_SESSION['request-status-ach-add'] = 'Успешно!'; 
            header('Location: ../profile-trainer.php');
    }
    else {
        $_SESSION['request-status-ach-add'] = 'Заполните все поля!'; 
        header('Location: ../profile-trainer.php');
    }
?>
