<!-- Удаление с курса клиента -->
<?php
    session_start();
    require_once 'connect.php';
    // Получение данных
    $client_id = $_SESSION['user']['client_id'];

    $course_add = $_POST['course-delete'];

    $check_course = mysqli_query($link, "SELECT * FROM `courses` WHERE `course_name` = '$course_add'");
	// Получение информации о курсе и тренере
    foreach($check_course as $course){
		
		$course_id = $course['course_id'];
        $trainer_id = $course['trainer_id'];
	}
	// Запрос к БД
    $check_client_and_course = mysqli_query($link, "SELECT * FROM `orders` WHERE `trainer_id` = $trainer_id AND `client_id` = $client_id AND `course_id` = $course_id;");
	// Валидация
    if(!empty($course_add)) {
	    // Валидация
        if(mysqli_num_rows($check_client_and_course) > 0) {
		// Валидация
            if (mysqli_num_rows($check_course) > 0) {
		    // Удаление с курса
                mysqli_query($link,"DELETE FROM `orders` WHERE `trainer_id` = $trainer_id AND `client_id` = $client_id AND `course_id` = $course_id;");
                $_SESSION['request-status-course-client-delete'] = 'Вы успешно удалены с курса!';
                header('Location: ../profile-client.php');
            } 
            else {
                $_SESSION['request-status-course-client-delete'] = 'Неизвестная ошибка!';
                header('Location: ../profile-client.php');
            }
        } 
        else {
            $_SESSION['request-status-course-client-delete'] = 'Вы не записаны на данный курс!'; 
            header('Location: ../profile-client.php');
        }
    }
    else {
        $_SESSION['request-status-course-client-delete'] = 'Заполните все поля!'; 
        header('Location: ../profile-client.php');
    }
?>
