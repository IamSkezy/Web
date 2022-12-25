<?php
    session_start();
    $adminEmail = 'vakansiimvdnn@yandex.ru'; //Здесь ваша рабочая почта

    $to = $adminEmail;
    $subject = 'Заявка с сайта Управление МВД России по городу Нижнему Новгороду';
    $email = $_POST['email'];
    $fio = $_POST['fio'];
    $phone = $_POST['phone'];
    $comment = $_POST['comment'];

    $message = "Email: $email\r\n"."ФИО: $fio\r\n"."Номер телефона: $phone\r\n"."Желаемая должность: $comment\r\n";


    mail($to, $subject, $message);

    header('Location: ../index.php');

    $_SESSION['messagemail'] = "Ваша заявка успешно отправлена!";
?>
