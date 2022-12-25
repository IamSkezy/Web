<?php
session_start();

require_once 'connect.php';

$id=$_POST['newsadd_id'];
$img = $_POST['newsadd_img'];
$title = $_POST['newsadd_title'];
$description = $_POST['newsadd_description'];

mysqli_query($link, "INSERT INTO `news` (`news_id`, `news_photo`, `news_title`, `news_description`) VALUES ('$id', '$img', '$title', '$description')");
$_SESSION['message2'] = 'Новость успешно добавлена!';
header('Location: ../admin.php');
?>