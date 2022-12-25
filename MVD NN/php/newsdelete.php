<?php
session_start();

require_once 'connect.php';

$id=$_POST['newsdelete_id'];

mysqli_query($link, "DELETE FROM `news` WHERE `news`.`news_id` = $id");
$_SESSION['message3'] = 'Новость успешно удалена!';
header('Location: ../admin.php');
?>