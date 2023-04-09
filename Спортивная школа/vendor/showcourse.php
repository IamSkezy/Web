<!-- Просмотр информации курса -->
<?php

    session_start();
    require_once 'connect.php';

    $name = trim($_POST['course-name']);

    $check_course_info = mysqli_query($link, "SELECT * FROM `courses` WHERE `course_name` = '$name'");

    if(!empty($name)){
        if(mysqli_num_rows($check_course_info) > 0) {

            $course_info = mysqli_fetch_assoc($check_course_info);

            $_SESSION['course_info'] = [
                "course_id" => $course_info['course_id'],
                "course_name" => $course_info['course_name'],
                "course_description" => $course_info['course_description'],
                "course_src" => $course_info['course_src'],
                "course_cost" => $course_info['course_cost'],
                "course_time" => $course_info['course_time'],
                "trainer_id" => $course_info['trainer_id']
            ];

            
            $_SESSION['request-status-show-course'] = 'Успешно!'; 
            header('Location: ../profile-admin.php');
        }
        else {
            $_SESSION['request-status-show-course'] = 'Ошибка!'; 
            header('Location: ../profile-admin.php');
        }
    }
    else {
        $_SESSION['request-status-show-course'] = 'Заполните все поля!';
        header('Location: ../profile-admin.php');
    }
    
?>