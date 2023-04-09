<!-- Отправка сообщения на email -->
<?php
   $adminEmail = 'sportfitnessnn@mail.ru'; //Здесь ваша рабочая почта

    $to = $adminEmail;
    $subject = 'Заявка с сайта Sport Fitness';
    $fio = $_POST['name'];
    $email_user = $_POST['email'];
    $title = $_POST['subject'];
    $mes = $_POST['message'];

    $message = "ФИО клиента: $fio\r\n"."Email клиента: $email_user\r\n"."Тема письма: $title\r\n"."Сообщение: $mes\r\n";


    mail($to, $subject, $message);

    header('Location: ../index.php');
?>
