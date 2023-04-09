<!-- Регистрация клиента на курсы -->
<?php
    session_start();
    require_once 'connect.php';

    $client_id = $_SESSION['user']['client_id'];

    $course_add = $_POST['course-add'];

    $check_course = mysqli_query($link, "SELECT * FROM `courses` WHERE `course_name` = '$course_add'");

    foreach($check_course as $course){
		
		$course_id = $course['course_id'];
        $trainer_id = $course['trainer_id'];
	}

    $check_client_and_course = mysqli_query($link, "SELECT * FROM `orders` WHERE `trainer_id` = $trainer_id AND `client_id` = $client_id AND `course_id` = $course_id;");

    if(!empty($course_add)) {
        if(mysqli_num_rows($check_client_and_course) == 0) {
            if (mysqli_num_rows($check_course) > 0) {
                mysqli_query($link,"INSERT INTO `orders` (`order_id`, `trainer_id`, `client_id`, `course_id`) VALUES (NULL, '$trainer_id', '$client_id', '$course_id');");
                $_SESSION['request-status-course-client-add'] = 'Вы успешно записаны на курс!';
                header('Location: ../profile-client.php');
            } 
            else {
                $_SESSION['request-status-course-client-add'] = 'Неизвестная ошибка!';
                header('Location: ../profile-client.php');
            }
        }
        else {
            $_SESSION['request-status-course-client-add'] = 'Вы уже зарегистрированы на этот курс!'; 
            header('Location: ../profile-client.php');
        }
    }
    else {
        $_SESSION['request-status-course-client-add'] = 'Заполните все поля!'; 
        header('Location: ../profile-client.php');
    }
?>