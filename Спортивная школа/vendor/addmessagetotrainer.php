<!-- Отправка клиентом сообщение тренеру -->
<?php
    session_start();
    require_once 'connect.php';

    $client_id = $_SESSION['user']['client_id'];

    $trainer = $_POST['trainer-name'];
    $date = $_POST['date'];
    $mes = $_POST['message'];

    $check_trainer = mysqli_query($link, "SELECT * FROM `trainers` WHERE `trainer_name` = '$trainer'");

    foreach($check_trainer as $trainers_id){
		
		$trainer_id = $trainers_id['trainer_id'];
	}

    if(!empty($trainer) and !empty($date) and !empty($mes)) {
        mysqli_query($link, "INSERT INTO `messages` (`message_id`, `trainer_id`, `client_id`, `message_date`, `message_message`, `message_from`) VALUES (NULL, '$trainer_id', '$client_id', '$date', '$mes', 'клиент')");
            $_SESSION['request-status-mes-add-client'] = 'Успешно!'; 
            header('Location: ../profile-client.php');
    }
    else {
        $_SESSION['request-status-mes-add-client'] = 'Заполните все поля!'; 
        header('Location: ../profile-client.php');
    }
?>