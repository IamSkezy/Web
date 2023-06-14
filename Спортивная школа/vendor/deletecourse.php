<!-- Удаление курса админом -->
<?php

    session_start();
    require_once 'connect.php';
    // Получение данных
    $id = trim($_POST['id']);
    // Валидация данных
    if(!empty($id)){
        // Удаление курса
        mysqli_query($link, "DELETE FROM `courses` WHERE courses.course_id = '$id';");
        $_SESSION['request-status-delete-course'] = 'Успешно!'; 
        header('Location: ../profile-admin.php');
    }
    else {
        $_SESSION['request-status-delete-course'] = 'Заполните все поля!'; 
        header('Location: ../profile-admin.php');
    }
?>
