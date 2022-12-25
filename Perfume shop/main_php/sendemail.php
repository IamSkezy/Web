<?php
    $adminEmail = 'profitfather@yandex.ru'; //Здесь ваша рабочая почта

    $to = $adminEmail;
    $subject = 'Заявка с сайта Parfaitement Boutique';
    $product = $_POST['product'];
    $fio = $_POST['fio'];
    $phone = $_POST['phone'];
    $connection = $_POST['connection'];
    $type_connection = $_POST['type-connection'];
    $time = $_POST['time'];
    $comment = $_POST['comment'];

    $message = "Название товара: $product\r\n"."ФИО клиента: $fio\r\n"."Номер клиента: $phone\r\n". "Предпочительный вид связи: $connection\r\n"."Удобный способ связи: $type_connection\r\n". "Удобное время для связи: $time\r\n". "Комментарий к заказу: $comment\r\n";


    mail($to, $subject, $message);

    header('Location: ../index.html');

    $_SESSION['success'] = "Ваша заявка успешно отправлена!";
?>
