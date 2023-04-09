<!-- Отправка тренером сообщение клиенту -->
<?php
    session_start();
    require_once 'connect.php';

    $trainer_id = $_SESSION['user']['trainer_id'];

    $client = $_POST['client-name'];
    $date = $_POST['date'];
    $mes = $_POST['message'];

    $check_client = mysqli_query($link, "SELECT * FROM `clients` WHERE `client_name` = '$client'");

    foreach($check_client as $clients_id){
		
		$client_id = $clients_id['client_id'];
	}

    if(!empty($client) and !empty($date) and !empty($mes)) {
        mysqli_query($link, "INSERT INTO `messages` (`message_id`, `trainer_id`, `client_id`, `message_date`, `message_message`, `message_from`) VALUES (NULL, '$trainer_id', '$client_id', '$date', '$mes', 'тренер')");
            $_SESSION['request-status-mes-add'] = 'Успешно!'; 
            header('Location: ../profile-trainer.php');
    }
    else {
        $_SESSION['request-status-mes-add'] = 'Заполните все поля!'; 
        header('Location: ../profile-trainer.php');
    }
?>