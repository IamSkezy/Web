<?php
session_start();

require_once 'connect.php';

$id=$_POST['admin_id'];
$login = $_POST['admin_login'];
$password = $_POST['admin_password'];
$fio = $_POST['admin_fio'];

mysqli_query($link, "INSERT INTO `users` (`id_user`, `user_role`, `user_login`, `user_password`, `user_fio`) VALUES ('$id', 'editor', '$login', '$password', '$fio')");
$_SESSION['message1'] = 'Редактор успешно добавлен!';
header('Location: ../admin.php');
?>